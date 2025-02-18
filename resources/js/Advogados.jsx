import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";
import {GrEdit, GrFormClose, GrView} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import {Button, FloatButton, Form, message, Modal, Popconfirm} from "antd";
import NovoAdvogado from './componentes/advogados/NovoAdvogado';
import EditarAdvogado from "@/componentes/advogados/EditarAdvogado.jsx";
import axios from "axios";
import {useNavigate} from "react-router-dom";
import { QuestionCircleOutlined } from '@ant-design/icons';


const Advogados = () => {
    const [time, setTime] = useState(Date.now());
    const [openNovoAdv, setOpenNovoAdv] = useState(false);
    const [confirmNovoAdv, setConfirmNovoAdv] = useState(false);
    const [advogados, setAdvogados] = useState([]);
    const [loadingTable, setLoadingTable] = useState(true);
    const [advogado, setAdvogado] = useState({});
    const [form] = Form.useForm();
    const [messageApi, contextHolder] = message.useMessage();
    const [openEditAdv, setOpenEditAdv] = useState(false);
    const [confirmEditAdv, setConfirmEditAdv] = useState(false);
    const [pesquisa, setPesquisa] = useState('');
    const navigate = useNavigate();

    const colunas = [
        {
            title:'Nome',
            dataIndex:'nome',
            key:'nome',
            sorter: (a, b) => a.nome.localeCompare(b.nome),
            sortDirections: ['descend', 'ascend'],
            defaultSortOrder: 'ascend'
        },
        {
            title:'CPF',
            dataIndex: 'cpf',
            key:'cpf',
            sorter: (a, b) => parseInt(a.cpf) - parseInt(b.cpf),
            sortDirections: ['descend', 'ascend'],
        },
        {
            title:'Grupo',
            dataIndex: 'grupo',
            key:'grupo',
            filteredValue: [pesquisa],
            onFilter: (value, record) => record.grupo.includes(value) ||  record.nome.toLowerCase().includes(value.toLowerCase()) || record.cpf === value,
        },
        {
            title:'Ações',
            key:'acoes',
            fixed:'right',
            render: (_, record) => {

                return (
                    <>
                        <Button onClick={()=>{
                            setAdvogado(record);
                            setOpenEditAdv(true);
                        }}><GrEdit /></Button>&nbsp;
                        <Popconfirm
                            title="Remover o advogado"
                            description="Você tem certeza que deseja remover o advogado?"
                            okText="Sim"
                            cancelText="Não"
                            onConfirm={async ()=>{
                                const response = await axios.delete('/api/advogados/'+record.xid)
                                    .catch((e)=>{
                                        if(e.response?.status===401) navigate('/login', {state:{anterior:location.pathname}});
                                        messageApi.error((e.response?.data?.msg)?e.response?.data?.msg:'Não foi possível remover o advogado, erro interno');
                                    });
                                if(response.status===200) messageApi.success('Advogado removido com sucesso');
                            }}
                        >
                            <Button danger><IoIosRemoveCircleOutline /></Button>
                        </Popconfirm>
                    </>
                );
            }
        }
    ]

    const adicionar = () =>
    {
        setAdvogado({});
        setOpenNovoAdv(true);
    }

    const cancelar = () =>{
        if(!confirmNovoAdv) {
            setOpenNovoAdv(false);
            setOpenEditAdv(false);
        }
    }

    const enviarNovoAdv =  () => {
        setConfirmNovoAdv(true);
        form.validateFields().then(async ()=>{
            const response = await axios({
                method:'POST',
                url:'/api/advogados',
                data:advogado
            }).catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                const response = e.response;
                setConfirmNovoAdv(false);
                messageApi.error('Erro em salvar o advogado: '+response.data.msg);
            });
            if(response.status==201) messageApi.success('Sucesso em salvar advogado');
            setConfirmNovoAdv(false);
            setOpenNovoAdv(false);
        }).catch((e)=>{
            setConfirmNovoAdv(false);
        });
    }

    const updateAdv =  () => {
        setConfirmEditAdv(true);
        form.validateFields().then(async ()=>{
            if(advogado.oab==null){
                delete advogado.oab;
                delete advogado.uf_oab;
            }
            const response = await axios({
                method:'PUT',
                url:'/api/advogados/'+advogado.xid,
                data:advogado
            }).catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                messageApi.error('Erro em atualizar o advogado: '+e.response.data.msg);
                setConfirmEditAdv(false);
            })
            if(response.status==200) messageApi.success('Advogado atualizado com sucesso');
            setConfirmEditAdv(false);
            setOpenEditAdv(false);
        }).catch((e)=>{
            if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
            setConfirmEditAdv(false);
        });
    }

    useEffect(() => {
        const getAdvs = async () => {
            const response = await axios.get('/api/advogados')
                .catch((e)=>{
                    if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                });
            setAdvogados(await response.data);
        }

        const interval = setInterval(() => {
            getAdvs();
            setLoadingTable(false);

        }, 3000);

        return () => {
            clearInterval(interval);
        }
    });

    return (
      <LayoutBasico titulo={'Advogados'} menu={'advogados'}>
          {contextHolder}
          <TabelaBase
              coluna={colunas}
              dados={advogados}
              titulo={'Advogados'}
              adicionar={adicionar}
              loading={loadingTable}
              pesquisa={setPesquisa}
          />{contextHolder}
          <NovoAdvogado
            open={openNovoAdv}
            handleCancel={cancelar}
            confirmLoading={confirmNovoAdv}
            handleOk={enviarNovoAdv}
            advogado={advogado}
            setAdvogado={setAdvogado}
            form={form}
          />
          <EditarAdvogado
              open={openEditAdv}
              handleCancel={cancelar}
              confirmLoading={confirmEditAdv}
              handleOk={updateAdv}
              advogado={advogado}
              setAdvogado={setAdvogado}
              form={form}
          />
          <FloatButton icon={<QuestionCircleOutlined />} type="primary" style={{ insetInlineEnd: 24 }} onClick={()=>window.open("/help/Advogados.html", "_blank")} />
      </LayoutBasico>
    );
}

export default Advogados;
