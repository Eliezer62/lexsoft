import React, {useEffect, useState} from "react";
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";
import {Button, Col, Drawer, Row} from "antd";
import {GrEdit, GrView} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import DescricaoItem from "@/componentes/DescricaoItem.jsx";
import axios from "axios";
import CamposPessoaFisica from "@/componentes/clientes/CamposPessoaFisica.jsx";
import camposPessoaFisica from "@/componentes/clientes/CamposPessoaFisica.jsx";
import CamposPessoaJur from "@/componentes/clientes/CamposPessoaJur.jsx";
import NovoCliente from "@/componentes/clientes/NovoCliente.jsx";

const Clientes = () => {
    const [pesquisa, setPesquisa] = useState('');
    const [clientes, setClientes] = useState([]);
    const [loadingTable, setLoadingTable] = useState(true);
    const [visualizarClienteState, setVisualizarClienteState] = useState(false);
    const [loadingView, setLoadingView] = useState(true);
    const [cliente, setCliente] = useState({});
    const [tipo, setTipo] = useState('fisico');
    const [openNovoCliente, setOpenNovoCliente] = useState(false);

    const colunas = [
        {
            title:'Nome',
            key:'nome',
            dataIndex:'nome',
            sorter: (a,b) => a.nome.localeCompare(b.nome),
            sortDirections: ['descend', 'ascend'],
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
            render:(_, record) => {
                return (
                    <>
                        <Button onClick={async ()=>{
                            setTipo(record.tipo);
                            let rota;
                            setVisualizarClienteState(true);
                            setLoadingView(true);
                            if(record.tipo==='fisico') rota = '/api/clientesfis/'+record.xid;
                            else rota = '/api/clientesjur/'+record.xid;
                            const response = await axios.get(rota).catch(e=>{
                                console.log('erro');
                            });
                            setCliente(await response.data);
                            setLoadingView(false);
                        }}
                        ><GrView/></Button>&nbsp;
                        <Button><GrEdit/></Button>&nbsp;
                        <Button danger={true}><IoIosRemoveCircleOutline/></Button>
                    </>
                )
            }
        }
    ];


    useEffect(() => {
        const getClientes = async () => {
            const response = await axios.get('/api/clientes');
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
    }

    const adicionar = () =>
    {
        setCliente({});
        setOpenNovoCliente(true);
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
          />
      </LayoutBasico>
    );
}

export default Clientes;
