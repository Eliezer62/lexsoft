import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";
import axios from "axios";
import {Button, Dropdown, message, Space} from "antd";
import {GrEdit, GrView} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import {MdDriveFileMoveOutline} from "react-icons/md";
import VisualizarProcesso from "@/processos/VisualizarProcesso.jsx";
import DOMPurify from "dompurify";
import {useNavigate} from "react-router-dom";

function DownOutlined() {
    return null;
}

function SmileOutlined() {
    return null;
}

export default function Processos() {
    const [pesquisa, setPesquisa] = useState('');
    const [timeOut, setTimeOut] = useState(0);
    const [loadingTable, setLoadingTable] = useState(true);
    const [processos, setProcessos] = useState([]);
    const [messageApi, contextHolder] = message.useMessage();
    const [processo, setProcesso] = useState({});
    const [visualizarProcesso, setVisualizarProcesso] = useState(false);
    const [linha, setLinha] = useState({})
    const navigate = useNavigate();

    const items = [
        {
            key: '1',
            label: (
                <a title={'movimentar'} onClick={()=> location.href='/processos/'+linha.xid+'/movimentar'}>Movimentar</a>
            ),
            icon: <MdDriveFileMoveOutline />,
        },
        {
            key: '3',
            label: (
                <a title='visualizar' onClick={()=>{
                    setProcesso(linha);
                    setVisualizarProcesso(true);
                }}>Visualizar</a>
            ),
            icon: <GrView/>
        },
        {
            key: '4',
            label: (
                <a title='editar' onClick={()=>location.href = '/processos/'+linha.xid+'/editar'}>Editar</a>
            ),
            icon: <GrEdit/>
        },
        {
            key: '5',
            label: (
                <a title={'remover'} onClick={async ()=>{
                    const msg = messageApi.loading('Removendo processo');
                    await axios.delete('/api/processos/'+linha.xid)
                        .then((r)=>{
                            messageApi.destroy(msg.id);
                            messageApi.success('Processo removido com sucesso');
                        }).catch((error)=>{
                            messageApi.destroy(msg.id);
                            if(error.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                            messageApi.error('Erro em remover o processo');
                        });
                }}>Remover</a>
            ),
            danger:true,
            icon: <IoIosRemoveCircleOutline/>
        },
    ];

    const colunas = [
        {
            title:'Numeração',
            key:'numero',
            dataIndex:'numero',
            sorter: (a, b) => a.numero.localeCompare(b.numero),
            sortDirections: ['descend', 'ascend'],
            filteredValue:[pesquisa],
            onFilter: (value, record) => record.numero.includes(value) || record.numCNJ.includes(value) || record.tribunal.toLowerCase().includes(value.toLowerCase())
            || record.vara.toLowerCase().includes(value.toLowerCase()) || record?.comarca?.toLowerCase().includes(value.toLowerCase()) ||
            record.partes?.find( parte => parte.parte.toLowerCase().includes(value.toLowerCase()))
        },
        {
            title:'Numeração CNJ',
            key:'numCNJ',
            dataIndex:'numCNJ',
            sorter: (a, b) => a.numCNJ.localeCompare(b.numCNJ),
            sortDirections: ['descend', 'ascend'],
        },
        {
            title:'Foro',
            key:'tribunal',
            dataIndex:'tribunal',
            sorter: (a, b) => a.tribunal.localeCompare(b.tribunal),
            sortDirections: ['descend', 'ascend'],
            render: (_, record) => record.tribunal + ' ' + record.vara + ' ' + ((record.comarca)?record.comarca:'')
        },
        {
            title: 'Partes',
            key: 'partes',
            dataIndex: 'partes',
            render: (_, record) => {
                let partes = '';
                record.partes.forEach(p => partes += p.parte + '<br>');
                return (
                    <div dangerouslySetInnerHTML={{__html: DOMPurify.sanitize(partes)}}/>
                )
            }
        },
        {
            title: 'Ações',
            key: 'acoes',
            fixed:'right',
            render: (_, record) => {
                return (
                    <Dropdown menu={{items}}>
                        <a onMouseOver={(e) => {setLinha(record); e.preventDefault()}}>
                            <Space>
                                Ações
                                <DownOutlined/>
                            </Space>
                        </a>
                    </Dropdown>
            )
            }
        }
    ]


    useEffect(() => {
        const getProcessos = async () => {
            setLoadingTable(true);
            await axios.get('/api/processos').then(resp => {
                setProcessos(resp.data);
            }).catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                messageApi.error('Erro em obter os processos');
            });
        }
        const interval = setInterval(()=>{
            getProcessos();
            setTimeOut(3000);
        }, timeOut);

        return () => {
            clearInterval(interval);
            setLoadingTable(false);
        }
    });

    return (
      <LayoutBasico titulo="Processos" menu='processos'>
          {contextHolder}
            <TabelaBase
                pesquisa={setPesquisa}
                coluna={colunas}
                dados={processos}
                adicionar={()=>window.location.href='/processos/criar'}
                loading={loadingTable}
            />
          <VisualizarProcesso
            open={visualizarProcesso}
            onClose={()=>setVisualizarProcesso(false)}
            processo={processo}
          />
      </LayoutBasico>
    );
}
