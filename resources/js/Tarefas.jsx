import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaTarefas from "@/componentes/tarefas/TabelaTarefas.jsx";
import NovaTarefas from "@/componentes/tarefas/NovaTarefas.jsx";
import {message} from 'antd';
import axios from "axios";


const Tarefas = () => {
    const [openNovaTarefa, setOpenNovaTarefa] = useState(false);
    const [messageApi, contextholder] = message.useMessage();
    const [timeOut, setTimeOut] = useState(0);
    const [tarefas, setTarefas] = useState([]);

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
                    console.log(tarefas);
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

    const teste = [
        {'assunto':'teste', 'status':'nova', 'descricao':'<p>descricao dado ate mais</p>',
        'prazo':{inicio:'inicio', fim:'fim'}}]

    return (
        <LayoutBasico titulo={'Tarefas'} menu={'tarefas'}>
            <div>
                <h3>Minhas atividades</h3>
            </div>
            {contextholder}
            <TabelaTarefas
                dados={tarefas}
                adicionar={abrirNovaTarefa}
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
