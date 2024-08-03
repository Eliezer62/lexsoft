import React, {useEffect} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import {Button, Flex, Form, Input, message, Modal} from "antd";
import Editor from "@/componentes/Editor.jsx";
import {useParams} from 'react-router-dom';
import axios from "axios";
import {useNavigate} from "react-router-dom";

export default function NovoDocumento()
{
    const [conteudo, setConteudo] = React.useState(null);
    const [documento, setDocumento] = React.useState('');
    const [modal, contextModal] = Modal.useModal();
    const [form] = Form.useForm();
    const [messageApi, contextMsg] = message.useMessage();
    const navigate = useNavigate();
    const {xid} = useParams();
    const {evento} = useParams();

    const salvar = async () => {
        if(!documento?.xid)
        modal.confirm({
            title:'Salvar documento',
            content: (
                <Form form={form} layout={'vertical'}>
                    <Form.Item
                        label={'Nome do arquivo'}
                        name={'nome'}
                        rules={[
                            {required:true, message:'Nome do arquivo é obrigatório'},
                            {max:60, message:'Tamanho máximo de nome é 60 caracteres'}
                        ]}
                    >
                        <Input/>
                    </Form.Item>
                </Form>
            )
        }).then(async ()=>{
            form.validateFields().then(async ()=>{
                const file = new File([conteudo], form.getFieldValue('nome')+'.lex' , {
                    type: "text/plain",
                });
                let formData = new FormData();
                formData.append('arquivo', file);
                formData.append('nome', form.getFieldValue('nome'));

                await axios({
                    method:'POST',
                    url:`/api/processos/${xid}/movimentar/${evento}/salvar-documento`,
                    data:formData
                }).then((resp)=>{
                    setDocumento(resp.data);
                    messageApi.success('Documento salvo com sucesso');
                }).catch((e)=>{
                    if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                    messageApi.error('Erro em salvar o documento');
                });
            }).catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                messageApi.error('Nome é obrigatório');
            });
        });
        else {
            const file = new File([conteudo], form.getFieldValue('nome')+'.lex' , {
                type: "text/plain",
            });
            let formData = new FormData();
            formData.append('arquivo', file);
            formData.append('nome', form.getFieldValue('nome'));
            formData.append('xid', documento.xid);

            await axios({
                method:'POST',
                url:`/api/processos/${xid}/movimentar/${evento}/salvar-documento`,
                data:formData
            }).then((resp)=>{
                setDocumento(resp.data);
                messageApi.success('Documento salvo com sucesso');
            }).catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                messageApi.error('Erro em salvar o documento');
            });
        }
    }

    useEffect(() => {
        const intervalo = setInterval(()=>{
            if(documento?.xid)
            {
                messageApi.info('Salvamento automático', 1);
                salvar();
            }
        }, 30000);

        return () => {
            clearInterval(intervalo);
        }
    });

    return (
        <LayoutBasico menu={'processos'}>
            <Flex justify={'right'}>
                <Button style={{marginRight:'10px'}} onClick={()=>{
                    if(documento)window.open('/api/storage/content/'+documento.xid, '_blank');
                }}>Exportar PDF</Button>
                <Button type={'primary'} onClick={salvar}>Salvar</Button>
            </Flex>
            <br/>
            <Editor change={setConteudo}/>
            {contextModal}
            {contextMsg}
        </LayoutBasico>
    );
}
