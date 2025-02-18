import React, {useState} from 'react';
import ptBR from "antd/locale/pt_BR.js";
import {Button, ConfigProvider, Flex, Form, message, Input, Row, Modal} from "antd";
import {UserOutlined, LockOutlined} from "@ant-design/icons";
import img from '../img/logo-nobg.png';
import {useLocation} from 'react-router-dom';
import axios from "axios";

export default function Login(props)
{
    const [loading, setLoading] = useState(false);
    const {state} = useLocation();//get a anterior path para acessar use state.anterior
    const [form] = Form.useForm();
    const [messageApi, context] = message.useMessage();
    const [modalEsqueci, setModalEsqueci] = useState(false);
    const [formEsqueci] = Form.useForm();
    const [loadEsqueci, setLoadEsqueci] = useState(false);

    const enviar = () => {
        form.validateFields().then(async ()=>{
            setLoading(true);
            let username = new String(form.getFieldValue('username'));
            let cpf = username.match(/(\d{11})|(\d{3}\.\d{3}\.\d{3}\-\d{2})/gm);
            cpf = (cpf)?cpf[0].replaceAll('.','')?.replaceAll('-',''):null;
            let email = username.match(/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$)/gm);
            email = (email)?email[0]:null;

            let formData = new FormData();
            if(cpf)formData.append('cpf', cpf);
            if(email)formData.append('email', email);
            formData.append('password', form.getFieldValue('password'));

            await axios.post('/api/auth/login', formData, { withCredentials: true}).then((resp)=>
            {
                localStorage.setItem('user', JSON.stringify(resp.data.user));
                if(state?.anterior && state?.anterior?.toLowerCase()!='/login') location.href=state.anterior;
                else location.href='/';
            }).catch((resp)=>{
                messageApi.error('E-mail ou senha inválidos. Verifique seus dados', 10);
                form.resetFields();
            }).finally(()=>setLoading(false));
        });
    }


    const esqueciSenha = () => {
        formEsqueci.validateFields().then(() => {
            setLoadEsqueci(true);
            axios.post('/api/auth/esqueci-senha', {email:formEsqueci.getFieldValue('email')})
                .then((resp) => {
                    messageApi.success('E-mail enviado com sucesso')
                })
                .catch((e)=>{
                    messageApi.error('Erro interno');
                }).finally(()=>{
                    setLoadEsqueci(false);
                    setModalEsqueci(false);
            });
        });
    }

    return (
        <ConfigProvider
            locale={ptBR}
        >
            {context}
            <Row
                justify={'center'}
                align={'middle'}
                style={{height:'100%', backgroundColor:'#f0f0f0'}}
                >
                <div
                    style={{
                        backgroundColor:'#fff',
                        width:'40%',
                        minWidth:'500px',
                        padding:'25px',
                        borderRadius: '10px',
                        boxShadow: '0px 5px 15px 0px rgba(48,48,48,0.1)'
                }}
                >
                    <Flex justify={'center'}>
                        <img src={img} alt={'Logo Lexsoft'} width={150}/>
                    </Flex>

                    <Flex
                        justify="center"
                    >
                        <Row>
                            <Form
                                layout={'vertical'}
                                size={'large'}
                                form={form}
                                onKeyUp={(e)=>{
                                    if(e.key === 'Enter') enviar();
                                }}
                            >
                                <Form.Item
                                    label={'E-MAIL/CPF'}
                                    name={'username'}
                                    rules={[
                                        {required:true, message:'E-MAIL ou CPF é obrigatório'},
                                        {pattern:/(\d{11})|(\d{3}\.\d{3}\.\d{3}\-\d{2})|([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$)/gm,
                                            message:'E-MAIL ou CPF inválido'}
                                    ]}
                                >
                                    <Input prefix={<UserOutlined/>} placeholder={'email ou CPF'} style={{width:'450px'}}/>
                                </Form.Item>

                                <Form.Item
                                    label={'Senha'}
                                    name={'password'}
                                    rules={[
                                        {required:true, message:'Senha é obrigatório'}
                                    ]}
                                >
                                    <Input.Password prefix={<LockOutlined/>}/>
                                </Form.Item>
                            </Form>
                        </Row>
                    </Flex>
                    <Flex justify={'center'} vertical>
                        <Button type={'link'} onClick={() => setModalEsqueci(true)}>Esqueci minha senha</Button>
                        <Button type={'primary'} onClick={enviar} size={'large'} loading={loading}>Login</Button>
                    </Flex>
                </div>
            </Row>

            <Modal
                open={modalEsqueci}
                title={'Esqueci a minha senha'}
                onCancel={() => setModalEsqueci(false)}
                onOk={esqueciSenha}
                confirmLoading={loadEsqueci}
            >
                <Form
                    layout={'vertical'}
                    form={formEsqueci}
                >
                    <Form.Item
                        label={'Digite seu email'}
                        name={'email'}
                        rules={[
                            {type:'email', message:'E-mail inválido'},
                            {required:true, message:'E-mail é obrigatório'}
                        ]}
                    >
                        <Input />
                    </Form.Item>
                </Form>
            </Modal>
        </ConfigProvider>
    )
}
