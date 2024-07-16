import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";
import axios from "axios";
import {message} from "antd";

export default function Processos() {
    const [pesquisa, setPesquisa] = useState('');
    const [timeOut, setTimeOut] = useState(0);
    const [loadingTable, setLoadingTable] = useState(true);
    const [processos, setProcessos] = useState([]);
    const [messageApi, contextHolder] = message.useMessage();

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
            render: (_, record) => {
                return (
                    <>
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
      </LayoutBasico>
    );
}
