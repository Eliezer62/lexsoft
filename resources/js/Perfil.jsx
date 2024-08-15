import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import {Flex, Form, Input, InputNumber, Select, message, Button, Skeleton} from "antd";
import axios from "axios";
import {useNavigate} from "react-router-dom";

export default function Perfil()
{
    const [estados, setEstados] = useState([]);
    const navigate = useNavigate();
    const [messageApi, context] = message.useMessage();
    const [loading, setLoading] = useState(true);
    const [confirmLoading, setConfirmLoading] = useState(false);
    const [form] = Form.useForm();

    useEffect(() => {
        const getEstados = async () => {
            const response = await axios.get('/api/estados').catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                messageApi.error('Erro em obter dados');
            })
            let dados = [];
            await response.data.map(e => {
                dados.push({value:e.uf, label:e.nome})
            });
            setEstados(dados);
        }
        const getAdvogado = async () => {
            const msg = messageApi.loading('Obtendo os dados', 10000);
            const user = JSON.parse(await localStorage.getItem("user"));
            await axios.get('/api/perfil/'+user?.xid)
                .then(async (resp)=>{
                    messageApi.destroy(msg.id);
                    await form.setFieldsValue(await resp.data);
                    await form.setFieldValue('cpf', resp.data.cpf);

                })
                .catch((e)=>{
                    messageApi.destroy(msg.id);
                    if(e.response?.status===401) navigate('/login', {state:{anterior:location.pathname}});
                    messageApi.error('Erro em obter dados');
                }).finally(() => setLoading(false));
        }
        getEstados();
        getAdvogado();
    }, []);

    const enviar = () => {
        form.validateFields().then(()=>{
            let formData = new FormData();
            formData.append('nome', form.getFieldValue('nome'));
            formData.append('oab', form.getFieldValue('oab'));
            formData.append('uf_oab', form.getFieldValue('uf_oab'));
            if(form.getFieldValue('password'))
                formData.append('password', form.getFieldValue('password'));

            setConfirmLoading(true);
            axios.post('/api/perfil', formData)
                .then((resp)=>{
                    messageApi.success('Perfil atualizado com sucesso');
                }).catch((error)=>{
                    if(error.response?.status===401) navigate('/login', {state:{anterior:location.pathname}});
                    messageApi.error('Erro em atualizar o perfil: '+error?.response?.data?.msg);
            }).finally(() => setConfirmLoading(false));
        });
    }

    return (
        <LayoutBasico titulo={'Editar Perfil'}>
            <Skeleton loading={loading}>
                <Flex justify={'center'}>
                    {context}
                    <Form
                        layout={'vertical'}
                        form={form}
                    >
                        <Form.Item
                            label={'Nome'}
                            name={'nome'}
                            rules={[
                                {required:true, message:'Nome é obrigatório'},
                                {max:60, message:'Tamanho máximo é 60 caracteres'}
                            ]}
                        >
                            <Input style={{ width: 400 }} placeholder={'Digite o nome...'} />
                        </Form.Item>
                        <Form.Item
                            label={'CPF'}
                            name={'cpf'}
                            rules={[
                                {required:true, message:'CPF é obrigatório'}
                            ]}
                        >
                            <Input disabled/>
                        </Form.Item>

                        <Form.Item
                            label={'E-MAIL'}
                            name={'email'}
                            rules={[
                                {required:true, message:'E-MAIL é obrigatório'},
                                {type:'email', message:'Formato inválido'}
                            ]}
                        >
                            <Input disabled/>
                        </Form.Item>
                        <Form.Item
                            label={'OAB'}
                            name={'oab'}
                        >
                            <InputNumber/>
                        </Form.Item>
                        <Form.Item
                            label={'Estado'}
                            name={'uf_oab'}
                        >
                            <Select options={estados} showSearch optionFilterProp={'label'}/>
                        </Form.Item>

                        <Form.Item
                            label={'Alterar Senha'}
                            name={'password'}
                            rules={[
                                {min:8, message:'Mínimo de 8 caracteres'}
                            ]}
                        >
                            <Input.Password/>
                        </Form.Item>
                    </Form>
                </Flex>
                <Flex justify={'right'}>
                    <Button type={'primary'} onClick={enviar} style={{marginBottom:'30px'}} loading={confirmLoading}>Salvar</Button>
                </Flex>
            </Skeleton>
        </LayoutBasico>
    )
}
