import React, {useEffect, useState} from "react";
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import {HomeOutlined} from "@ant-design/icons";
import {Breadcrumb, Button, Flex, Form, message} from "antd";
import {useParams} from 'react-router-dom';
import Editor from "@/componentes/Editor.jsx";
import axios from "axios";
import {useNavigate} from "react-router-dom";

export default function EditarDocumento(props)
{
    const {xid, evento, documento} = useParams();
    const [conteudo, setConteudo] = useState('');
    const [form] = Form.useForm();
    const [messageApi, contextMsg] = message.useMessage();
    const navigate = useNavigate();

    const salvar = async () => {
        const msg = messageApi.loading('Salvando', 1000000);
        const file = new File([conteudo], {
            type: "text/plain",
        });
        let formData = new FormData();
        formData.append('arquivo', file);
        formData.append('xid', documento);

        await axios({
            method:'POST',
            url:`/api/processos/${xid}/movimentar/${evento}/salvar-documento`,
            data:formData
        }).then((resp)=>{
            messageApi.destroy(msg.id);
            messageApi.success('Documento salvo com sucesso');
        }).catch((e)=>{
            //TODO adicionar um sistema de login com modal - add também em novo documento
            //if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
            messageApi.destroy(msg.id);
            messageApi.error('Erro em salvar o documento');
        });
    }

    useEffect(() => {
        const getDocumento = () => {
            let msg = messageApi.loading('Carregando conteúdo');
            axios.get(`/api/processos/${xid}/movimentar/${evento}/documento/${documento}`)
                .then((response) => {
                    messageApi.destroy(msg.id);
                    setConteudo(response.data);
                })
                .catch((e)=>{
                    if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                    messageApi.destroy(msg.id);
                    messageApi.error('Erro em obter o documento');
                })
        }
        getDocumento();
    }, []);

    return (
        <LayoutBasico menu={'processos'}>
            <Breadcrumb items={[
                {title:<HomeOutlined/>, href:'/'},
                {title:'Processos', href:'/processos'},
                {title:'Movimentar', href:'/processos/'+xid+'/movimentar'},
                {title:'Editar Documento'}
            ]}
            />
            <Flex justify={'right'}>
                <Button style={{marginRight:'10px'}} onClick={()=>{
                    if(documento)window.open('/api/storage/content/'+documento, '_blank');
                }}>Exportar PDF</Button>
                <Button type={'primary'} onClick={salvar}>Salvar</Button>
            </Flex>
            <br/>
            <Editor data={conteudo} change={setConteudo}/>
            {contextMsg}
        </LayoutBasico>
    );
}
