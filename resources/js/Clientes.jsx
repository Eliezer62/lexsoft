import React, {useEffect, useState} from "react";
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";
import {Button, Col, Drawer, FloatButton, Form, message, Popconfirm, Row} from "antd";
import {GrEdit, GrView} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import axios from "axios";
import CamposPessoaFisica from "@/componentes/clientes/CamposPessoaFisica.jsx";
import CamposPessoaJur from "@/componentes/clientes/CamposPessoaJur.jsx";
import NovoCliente from "@/componentes/clientes/NovoCliente.jsx";
import EditarCliente from "@/componentes/clientes/EditarCliente.jsx";
import {useNavigate} from "react-router-dom";
import {QuestionCircleOutlined} from "@ant-design/icons";

const Clientes = () => {
    const [pesquisa, setPesquisa] = useState('');
    const [clientes, setClientes] = useState([]);
    const [loadingTable, setLoadingTable] = useState(true);
    const [visualizarClienteState, setVisualizarClienteState] = useState(false);
    const [loadingView, setLoadingView] = useState(true);
    const [cliente, setCliente] = useState({});
    const [tipo, setTipo] = useState('fisico');
    const [openNovoCliente, setOpenNovoCliente] = useState(false);
    const [openEditarCliente, setOpenEditarCliente] = useState(false);
    const [messageApi, contextHolder] = message.useMessage();
    const [loadingEditar, setLoadingEditar] = useState(false);
    const navigate = useNavigate();


    const colunas = [
        {
            title:'Nome',
            key:'nome',
            dataIndex:'nome',
            sorter: (a,b) => a.nome.localeCompare(b.nome),
            sortDirections: ['descend', 'ascend'],
            defaultSortOrder: 'ascend'
        },
        {
            title:'CPF/CNPJ',
            key:'documento',
            dataIndex: 'documento',
            sorter: (a,b) => a.documento.localeCompare(b.documento),
            sortDirections: ['descend', 'ascend'],
        },
        {
            title:'email',
            key:'email',
            dataIndex: 'email',
            sorter: (a,b) => a.email.localeCompare(b.email),
            sortDirections: ['descend', 'ascend'],
            filteredValue:[pesquisa],
            onFilter: (value, record) => record.email.startsWith(value) ||  record.nome.toLowerCase().includes(value.toLowerCase()) || record.documento === value,
        },
        {
            title:'Ações',
            key:'acoes',
            fixed:'center',
            render:(bt, record) => {
                return (
                    <>
                        <Button onClick={async ()=>{
                            setTipo(record.tipo);
                            let rota;
                            setVisualizarClienteState(true);
                            setLoadingView(true);
                            if(record.tipo==='fisico') rota = '/api/clientesfis/'+record.xid+"/formatado";
                            else rota = '/api/clientesjur/'+record.xid;
                            const response = await axios.get(rota).catch(e=>{
                                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                                messageApi.error('Erro em obter os dados');
                            });
                            setCliente(await response.data);
                            setLoadingView(false);
                        }}
                        ><GrView/></Button>&nbsp;
                        <Button onClick={ async ()=>{
                            setLoadingEditar(true);
                            setOpenEditarCliente(true);
                            let rota;
                            if(record.tipo==='fisico') rota = '/api/clientesfis/'+record.xid;
                            else rota = '/api/clientesjur/'+record.xid;
                            const response = await axios.get(rota).catch(e=>{
                                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                                messageApi.error('Erro em obter os dados');
                            });
                            if(response.data.cpf || response.data.cnpj)
                            {
                                setCliente(await response.data);
                                setLoadingEditar(false);
                            }
                            else {
                                messageApi.error('Erro em obter os dados');
                                setOpenEditarCliente(false);
                            }
                        }}><GrEdit/></Button>&nbsp;
                        <Popconfirm title={'Remover cliente'} description={'Tem certeza que deseja remover este cliente?'}
                                    onConfirm={(event)=>{
                                        const msg = messageApi.loading('Removendo cliente...', 10000);
                                        let url = (record.tipo==='fisico')?'/api/clientesfis/':'/api/clientesjur/';
                                        url += record.xid;
                                        const response = axios.delete(url).then((response)=>{
                                            messageApi.destroy(msg.id);
                                            messageApi.success('Cliente Removido com sucesso');
                                        }).catch(e=>{
                                            if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                                            messageApi.destroy(msg.id);
                                            messageApi.error('Não foi possível remover o cliente');
                                        });
                                    }}
                        >
                            <Button danger={true}><IoIosRemoveCircleOutline/></Button>
                        </Popconfirm>
                    </>
                )
            }
        }
    ];


    useEffect(() => {
        const getClientes = async () => {
            const response = await axios.get('/api/clientes')
                .catch((e)=>{
                    if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                });
            setClientes(response.data);
        }

        const interval = setInterval(() => {
            getClientes();
            setLoadingTable(false);

        }, 3000);

        return () => {
            clearInterval(interval);
        }
    });

    const cancelar = () => {
        setOpenNovoCliente(false);
        setOpenEditarCliente(false);
    }

    const adicionar = () =>
    {
        setCliente({});
        setOpenNovoCliente(true);
    }

    const exibirErro = (e)=>{
        messageApi.error('Erro em criar cliente: '+e);
    }

    const exibirSucesso = (msg = 'Cliente criado com sucesso') => {
        messageApi.success(msg);
    }

    return (
      <LayoutBasico titulo={'Clientes'} menu={'clientes'}>
        <TabelaBase
            coluna={colunas}
            dados={clientes}
            loading={loadingTable}
            pesquisa={setPesquisa}
            adicionar={adicionar}
        />
          {contextHolder}
          <Drawer
              closable={true}
              destroyOnClose={true}
              title={'Visualizar Cliente'}
              placement="right"
              open={visualizarClienteState}
              loading={loadingView}
              size={'large'}
              onClose={() => setVisualizarClienteState(false)}
          >
              {tipo==='fisico'?
                  (<CamposPessoaFisica cliente={cliente}/>):
                  (<CamposPessoaJur cliente={cliente}/>)
              }
          </Drawer>
          <NovoCliente
            open={openNovoCliente}
            handleCancel={cancelar}
            erroMsg={exibirErro}
            sucessoMsg={exibirSucesso}
          />
          <EditarCliente
              open={openEditarCliente}
              handleCancel={cancelar}
              erroMsg={exibirErro}
              sucessoMsg={exibirSucesso}
              cliente={cliente}
              loadingModal={loadingEditar}
              erro2Msg={(msg) => (messageApi.error(msg))}
              setCliente={setCliente}
          />
          <FloatButton icon={<QuestionCircleOutlined />} type="primary" style={{ insetInlineEnd: 24 }} onClick={()=>window.open("/help/Clientes.html", "_blank")} />
      </LayoutBasico>
    );
}

export default Clientes;
