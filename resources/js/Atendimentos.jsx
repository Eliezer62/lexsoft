import React, {useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";
import dayjs from "dayjs";
import {Button, message} from "antd";
import {GrEdit, GrView} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import NovoAtendimento from "@/componentes/atendimento/NovoAtendimento.jsx";

const Atendimentos = () => {
    const [loadingTable, setLoadingTable] = useState(true);
    const [openNovo, setOpenNovo] = useState(true);
    const [messageApi, contextHolder] = message.useMessage();

    const coluna = [
        {
            title:'Assunto',
            key:'assunto',
            dataIndex:'assunto',
            sorter: (a, b) => a.assunto.localeCompare(b.assunto),
            sortDirections: ['descend', 'ascend']
        },
        {
            title:'Cliente',
            key:'cliente',
            dataIndex:'cliente',
            sorter: (a, b) => a.cliente.localeCompare(b.cliente),
            sortDirections: ['descend', 'ascend']
        },
        {
            title:'Data',
            key:'data',
            dataIndex: 'data',
            sorter: (a,b) => dayjs(a.data, 'YYYY-MM-DD HH:MM') - dayjs(b.data, 'YYYY-MM-DD HH:MM'),
            sortDirections: ['descend', 'ascend']
        },
        {
            title:'Ações',
            key:'acoes',
            render: (_, record) => {
                return (
                    <>
                        <Button><GrView/></Button>&nbsp;
                        <Button><GrEdit/></Button>&nbsp;
                        <Button><IoIosRemoveCircleOutline/></Button>
                    </>
                )
            }
        }
    ];

    const cancelar = () => {
        setOpenNovo(false);
    }


    const mensagemSucesso = (msg) => messageApi.success(msg);
    const mensagemErro = (msg) => messageApi.error(msg);


    return (
        <LayoutBasico titulo={'Atendimentos'} menu={'atendimentos'}>
            <TabelaBase
                loading={loadingTable}
                coluna={coluna}
                adicionar={()=>{
                    setOpenNovo(true);
                }}
            />
            {contextHolder}
            <NovoAtendimento
                open={openNovo}
                cancelar={cancelar}
                mensagemSucesso={mensagemSucesso}
                mensagemErro={mensagemErro}
            />
        </LayoutBasico>
    );
}

export default Atendimentos;
