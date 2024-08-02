import React, {useEffect, useState} from 'react';
import {Drawer, message} from "antd";
import DescricaoItem from "@/componentes/DescricaoItem.jsx";
import axios from "axios";
import dayjs from "dayjs";
import {useNavigate} from "react-router-dom";

export default function VisualizarProcesso(props)
{
    const [dados_processo, setDadosProcesso] = useState({});
    const [loading, setLoading] = useState(true);
    const [messageApi, context] = message.useMessage();
    const navigate = useNavigate();

    useEffect(() => {
        const getProcesso = async () => {
            setLoading(true);
            if(props.processo) {
                await axios.get('/api/processos/' + props.processo.xid + '/visualizar')
                    .then((resp) => {
                        setDadosProcesso(resp.data);
                        setLoading(false);
                    }).catch(e=>{
                        if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                        messageApi.error('Erro em obter os dados do processo');
                    });
            }
        }
        getProcesso();
    }, [props.processo]);

    return (
        <Drawer
            open={props.open}
            onClose={props.onClose}
            size={'large'}
            loading={loading}
        >
            {context}
            <h3>Processo</h3>
            <DescricaoItem titulo={'Número'} conteudo={dados_processo.numero}/>
            <DescricaoItem titulo={'Número CNJ'} conteudo={dados_processo.numCNJ}/>
            <DescricaoItem titulo={'Data de Criação'}
                           conteudo={dayjs(dados_processo.data_criacao, 'YYYY-MM-DD').format('DD/MM/YYYY').toString()}
            />
            <DescricaoItem titulo={'Data de Distribuição'}
                           conteudo={dados_processo.data_distribuicao?dayjs(dados_processo.data_distribuicao, 'YYYY-MM-DD').format('DD/MM/YYYY').toString():null}
            />
            <DescricaoItem titulo={'Valor Causa'} conteudo={dados_processo.valor_causa?.replace('.',',')}/>
            <DescricaoItem titulo={'Valor Condenação'} conteudo={dados_processo.valor_condenacao?.replace('.',',')}/>
            <DescricaoItem titulo={'Prioridade'}
                conteudo={dados_processo.prioridade?'Sim':'Não'}
            />
            <DescricaoItem titulo={'Instância'} conteudo={(dados_processo.instancia)?dados_processo.instancia+'ª instância':null}/>
            <DescricaoItem titulo={'Classe Judicial'} conteudo={dados_processo.classe_judicial}/>
            <DescricaoItem titulo={'Tribunal'} conteudo={dados_processo.tribunal}/>
            <DescricaoItem titulo={'Comarca'} conteudo={dados_processo.comarca}/>
            <DescricaoItem titulo={'Vara'} conteudo={dados_processo.vara}/>
            <h4>Partes do processo</h4>
            {dados_processo.partes?.map(parte => {
                return(
                    <>
                        <p>Nome: {parte.cliente}</p>
                        <p>Documento: {parte.documento}</p>
                        <p>Qualificação: {parte.qualificacao}</p>
                        <p>-----------------------</p>
                    </>
                );
            })}

        </Drawer>
    );
}
