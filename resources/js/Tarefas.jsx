import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaTarefas from "@/componentes/tarefas/TabelaTarefas.jsx";
import NovaTarefas from "@/componentes/tarefas/NovaTarefas.jsx";
import {message} from 'antd';
import axios from "axios";
import EditarTarefas from "@/componentes/tarefas/EditarTarefas.jsx";


const Tarefas = () => {
    const [openNovaTarefa, setOpenNovaTarefa] = useState(false);
    const [messageApi, contextholder] = message.useMessage();
    const [timeOut, setTimeOut] = useState(0);
    const [tarefas, setTarefas] = useState([]);
    const [loadingTable, setLoadingTable] = useState(true);

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
            const response = await axios.get('/api/tarefas/cpvfkgm65k23bn0tib4g')
                .then((response)=>{
                    setTarefas(response.data);
                    setLoadingTable(false);
                }).catch((error)=>{
                    mensagemErro('Erro em obter os atendimentos');
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
