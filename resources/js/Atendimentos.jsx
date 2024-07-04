import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";
import dayjs from "dayjs";
import {Button, message} from "antd";
import {GrEdit, GrView} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import NovoAtendimento from "@/componentes/atendimento/NovoAtendimento.jsx";
import axios from "axios";
import ViewAtendimento from "@/componentes/atendimento/ViewAtendimento.jsx";

const Atendimentos = () => {
    const [loadingTable, setLoadingTable] = useState(true);
    const [openNovo, setOpenNovo] = useState(false);
    const [messageApi, contextHolder] = message.useMessage();
    const [timeOut, setTimeOut] = useState(0);
    const [atendimentos, setAtendimentos] = useState([]);
    const [pesquisa, setPesquisa] = useState('');
    const [openViewAtendimento, setOpenViewAtendimento] = useState(false);
    const [atendimento, setAtendimento] = useState({});
    const [loadingView, setLoadingView] = useState(true);

    const coluna = [
        {
            title:'Assunto',
            key:'assunto',
            dataIndex:'assunto',
            sorter: (a, b) => a.assunto.localeCompare(b.assunto),
            sortDirections: ['descend', 'ascend'],
            filteredValue:[pesquisa],
            onFilter: (value, record) => record.assunto.includes(value) || record.cliente?.includes(value) || record.documento?.includes(value) || record.data.includes(value)
        },
        {
            title:'Cliente',
            key:'cliente',
            dataIndex:'cliente',
            sorter: (a, b) => a.cliente?.localeCompare(b.cliente),
            sortDirections: ['descend', 'ascend']
        },
        {
            title:'Data',
            key:'data',
            dataIndex: 'data',
            sorter: (a,b) => dayjs(a.data, 'DD/MM/YYYY HH:MM') - dayjs(b.data, 'DD/MM/YYYY HH:MM'),
            sortDirections: ['descend', 'ascend']
        },
        {
            title:'Ações',
            key:'acoes',
            render: (_, record) => {
                return (
                    <>
                        <Button onClick={ async ()=>{
                            setOpenViewAtendimento(true);
                            const response = await axios.get('/api/atendimentos/'+record.xid)
                                .then((resp)=>{
                                    setAtendimento(resp.data);
                                    setLoadingView(false);
                                }).catch((error)=>mensagemErro('Erro em obter atendimento'))
                        }}><GrView/></Button>&nbsp;
                        <Button><GrEdit/></Button>&nbsp;
                        <Button danger><IoIosRemoveCircleOutline/></Button>
                    </>
                )
            }
        }
    ];

    const cancelar = () => {
        setOpenNovo(false);
        setOpenViewAtendimento(false);
        setLoadingView(true);
    }


    const mensagemSucesso = (msg) => messageApi.success(msg);
    const mensagemErro = (msg) => messageApi.error(msg);

    useEffect(() => {
        const getAtendimentos = async () => {
            const response = await axios.get('/api/atendimentos')
                    .then((response)=>{
                        setAtendimentos(response.data);
                    }).catch((error)=>{
                        mensagemErro('Erro em obter os atendimento');
                });
        }

        const interval = setInterval(() => {
            getAtendimentos();
            setTimeOut(3000);
            setLoadingTable(false);

        }, timeOut);

        return () => {
            clearInterval(interval);
        }
    });

    return (
        <LayoutBasico titulo={'Atendimentos'} menu={'atendimentos'}>
            <TabelaBase
                loading={loadingTable}
                coluna={coluna}
                adicionar={()=>{
                    setOpenNovo(true);
                }}
                dados={atendimentos}
                pesquisa={setPesquisa}
            />
            {contextHolder}
            <NovoAtendimento
                open={openNovo}
                cancelar={cancelar}
                mensagemSucesso={mensagemSucesso}
                mensagemErro={mensagemErro}
            />
            <ViewAtendimento
                open={openViewAtendimento}
                atendimento={atendimento}
                close={cancelar}
                loading={loadingView}
            />
        </LayoutBasico>
    );
}

export default Atendimentos;
