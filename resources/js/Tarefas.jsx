import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaTarefas from "@/componentes/tarefas/TabelaTarefas.jsx";
import NovaTarefas from "@/componentes/tarefas/NovaTarefas.jsx";
import {message} from 'antd';
import axios from "axios";
import {useNavigate} from "react-router-dom";


const Tarefas = () => {
    const [openNovaTarefa, setOpenNovaTarefa] = useState(false);
    const [messageApi, contextholder] = message.useMessage();
    const [timeOut, setTimeOut] = useState(0);
    const [tarefas, setTarefas] = useState([]);
    const [loadingTable, setLoadingTable] = useState(true);
    const navigate = useNavigate();

    const abrirNovaTarefa = () => setOpenNovaTarefa(true);

    const cancelar = () => {
        setOpenNovaTarefa(false);
    }

    const mensagemSucesso = (msg) => {
        messageApi.success(msg);
    }

    const mensagemErro = (msg) => {
        messageApi.error(msg);
    }

    useEffect(() => {
        const getTarefas = async () => {
            const response = await axios.get('/api/tarefas/cq8998665k25di0tid5g')
                .then((response)=>{
                    setTarefas(response.data);
                    setLoadingTable(false);
                }).catch((error)=>{
                    if(error.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                    mensagemErro('Erro em obter as tarefas');
                });
        }

        const interval = setInterval(() => {
            getTarefas();
            setTimeOut(3000);

        }, timeOut);

        return () => {
            clearInterval(interval);
        }
    });


    return (
        <LayoutBasico titulo={'Tarefas'} menu={'tarefas'}>
            <div>
                <h3>Minhas atividades</h3>
            </div>
            {contextholder}
            <TabelaTarefas
                dados={tarefas}
                adicionar={abrirNovaTarefa}
                loading={loadingTable}
            />
            <NovaTarefas
                open={openNovaTarefa}
                cancelar={cancelar}
                mensagemSucesso={mensagemSucesso}
                mensagemErro={mensagemErro}
            />
        </LayoutBasico>
    );
}

export default Tarefas;
