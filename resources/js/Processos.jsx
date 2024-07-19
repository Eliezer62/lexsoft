import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";
import axios from "axios";
import {Button, message} from "antd";
import {GrEdit, GrView} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import {MdDriveFileMoveOutline} from "react-icons/md";
import VisualizarProcesso from "@/processos/VisualizarProcesso.jsx";

export default function Processos() {
    const [pesquisa, setPesquisa] = useState('');
    const [timeOut, setTimeOut] = useState(0);
    const [loadingTable, setLoadingTable] = useState(true);
    const [processos, setProcessos] = useState([]);
    const [messageApi, contextHolder] = message.useMessage();
    const [processo, setProcesso] = useState({});
    const [visualizarProcesso, setVisualizarProcesso] = useState(false);

    const colunas = [
        {
            title:'Numeração',
            key:'numero',
            dataIndex:'numero',
            sorter: (a, b) => a.numero.localeCompare(b.numero),
            sortDirections: ['descend', 'ascend'],
            filteredValue:[pesquisa],
            onFilter: (value, record) => record.numero.includes(value) || record.numCNJ.includes(value) || record.tribunal.includes(value)
        },
        {
            title:'Numeração CNJ',
            key:'numCNJ',
            dataIndex:'numCNJ',
            sorter: (a, b) => a.numCNJ.localeCompare(b.numCNJ),
            sortDirections: ['descend', 'ascend'],
        },
        {
            title:'Tribunal',
            key:'tribunal',
            dataIndex:'tribunal',
            sorter: (a, b) => a.tribunal.localeCompare(b.tribunal),
            sortDirections: ['descend', 'ascend'],
        },
        {
            title: 'Ações',
            key: 'acoes',
            fixed:'right',
            render: (_, record) => {
                return (
                    <>
                        <Button title={'movimentar'} onClick={()=>location.href='/processos/'+record.xid+'/movimentar'}><MdDriveFileMoveOutline /></Button>&nbsp;
                        <Button title='visualizar' onClick={()=>{
                            setProcesso(record);
                            setVisualizarProcesso(true);
                        }}><GrView/></Button>&nbsp;
                        <Button title='editar' onClick={()=>location.href = '/processos/'+record.xid+'/editar'}><GrEdit/></Button>&nbsp;
                        <Button danger={true} title={'remover'} onClick={async ()=>{
                            const msg = messageApi.loading('Removendo processo');
                            await axios.delete('/api/processos/'+record.xid)
                                .then((r)=>{
                                    messageApi.destroy(msg.id);
                                    messageApi.success('Processo removido com sucesso');
                                }).catch((error)=>{
                                    messageApi.destroy(msg.id);
                                    messageApi.error('Erro em remover o processo');
                                });
                        }}><IoIosRemoveCircleOutline/></Button>
                    </>
                )
            }
        }
    ]


    useEffect(() => {
        const getProcessos = async () => {
            await axios.get('/api/processos').then(resp => {
                setProcessos(resp.data);
            }).catch((e)=>{
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
