import React, {useState} from "react";
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";
import {Button, Col, Drawer, Row} from "antd";
import {GrEdit, GrView} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import DescricaoItem from "@/componentes/DescricaoItem.jsx";

const Clientes = () => {
    const [pesquisa, setPesquisa] = useState('');
    const [clientes, setClientes] = useState([]);
    const [loadingTable, setLoadingTable] = useState(false);
    const [visualizarClienteState, setVisualizarClienteState] = useState(false);
    const [cliente, setCliente] = useState({});

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
                        <Button onClick={()=>{
                            setCliente(record);
                            setVisualizarClienteState(true);
                        }}
                        ><GrView/></Button>&nbsp;
                        <Button><GrEdit/></Button>&nbsp;
                        <Button danger={true}><IoIosRemoveCircleOutline/></Button>
                    </>
                )
            }
        }
    ];


    const data = [
        {
            nome:'eliezer',
            documento:'11312199962',
            email:"eliezerdealmeida62@gmail.com"
        },
        {
            nome:'Gnoatto Advocacia',
            documento:'04361527000100',
            email:"eliezerdealmeida62@gmail.com"
        },
    ];

    return (
      <LayoutBasico titulo={'Clientes'} menu={'clientes'}>
        <TabelaBase
            coluna={colunas}
            dados={data}
            loading={loadingTable}
            pesquisa={setPesquisa}
        />
          <Drawer
              closable={true}
              destroyOnClose={true}
              title={'Visualizar Cliente'}
              placement="right"
              open={visualizarClienteState}
              loading={false}
              size={'large'}
              onClose={() => setVisualizarClienteState(false)}
          >
              <Row>
                  <Col span={12}>
                      <DescricaoItem titulo={'Nome'} conteudo={cliente.nome}/>
                  </Col>
              </Row>
              <Row>
                  <Col span={12}>
                      <DescricaoItem titulo={'CPF/CNPJ'} conteudo={cliente.documento}/>
                  </Col>
              </Row>
              <Row>
                  <Col span={12}>
                      <DescricaoItem titulo={'email'} conteudo={cliente.email}/>
                  </Col>
              </Row>
          </Drawer>
      </LayoutBasico>
    );
}

export default Clientes;
