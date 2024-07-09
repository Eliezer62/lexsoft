import React, {useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaTarefas from "@/componentes/tarefas/TabelaTarefas.jsx";
import NovaTarefas from "@/componentes/tarefas/NovaTarefas.jsx";
import {message} from 'antd';


const Tarefas = () => {
    const [openNovaTarefa, setOpenNovaTarefa] = useState(false);
    const [messageApi, contextholder] = message.useMessage();

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
                dados={teste}
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
