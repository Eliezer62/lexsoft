import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaTarefas from "@/componentes/tarefas/TabelaTarefas.jsx";
import NovaTarefas from "@/componentes/tarefas/NovaTarefas.jsx";
import {FloatButton, message} from 'antd';
import axios from "axios";
import {useNavigate} from "react-router-dom";
import {QuestionCircleOutlined} from "@ant-design/icons";


const Tarefas = () => {
    const [openNovaTarefa, setOpenNovaTarefa] = useState(false);
    const [messageApi, contextholder] = message.useMessage();
    const [timeOut, setTimeOut] = useState(0);
    const [tarefas, setTarefas] = useState([]);
    const [loadingTable, setLoadingTable] = useState(true);
    const navigate = useNavigate();
    const user = JSON.parse(localStorage.getItem('user'));

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
            const response = await axios.get('/api/tarefas/'+user.xid)
                .then((response)=>{
                    response.data.forEach(data => data.key = data.xid);
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
            <FloatButton icon={<QuestionCircleOutlined />} type="primary" style={{ insetInlineEnd: 24 }} onClick={()=>window.open("/help/Tarefas.html", "_blank")} />
        </LayoutBasico>
    );
}

export default Tarefas;
