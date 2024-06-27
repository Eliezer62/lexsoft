import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";
import {GrEdit, GrFormClose, GrView} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import {Button, Form, message, Modal} from "antd";
import NovoAdvogado from './componentes/advogados/NovoAdvogado';
import EditarAdvogado from "@/componentes/advogados/EditarAdvogado.jsx";
import axios from "axios";


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

    const colunas = [
        {
            title:'Nome',
            dataIndex:'nome',
            key:'nome',
            sorter: (a, b) => a.nome.localeCompare(b.nome),
            sortDirections: ['descend', 'ascend'],
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
                        <Button danger onClick={async ()=>{
                            const response = await axios.delete('/api/advogados/'+record.xid)
                                .catch(()=>{
                                    messageApi.error('Não foi possível remover o advogado, erro interno');
                                });
                            if(response.status==200) messageApi.success('Advogado removido com sucesso');
                        }}><IoIosRemoveCircleOutline /></Button>
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
                url:'/api/advogados/',
                data:advogado
            }).catch(e=>{
                const response = e.response;
                messageApi.error('Erro em salvar o advogado: '+response.data.msg);
            });
            if(response.status==201) messageApi.success('Sucesso em salvar advogado');
            setConfirmNovoAdv(false);
            setOpenNovoAdv(false);
        }).catch(e=>{
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
                messageApi.error('Erro em atualizar o advogado: '+e.response.data.msg);
            })
            if(response.status==200) messageApi.success('Advogado atualizado com sucesso');
            setConfirmEditAdv(false);
            setOpenEditAdv(false);
        }).catch(e=>{
            setConfirmEditAdv(false);
        });
    }

    useEffect(() => {
        const getAdvs = async () => {
            const response = await axios.get('/api/advogados');
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
      </LayoutBasico>
    );
}

export default Advogados;
