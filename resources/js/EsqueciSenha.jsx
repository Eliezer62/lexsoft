import React, {useState} from 'react';
import {Button, ConfigProvider, Flex, Form, Input, message, Row} from "antd";
import ptBR from "antd/locale/pt_BR";
import {useParams} from "react-router-dom";
import axios from "axios";

export default function EsqueciSenha()
{
    const {token} = useParams();
    const [form] = Form.useForm();
    const [loading, setLoading] = useState(false);
    const [messageApi, context] = message.useMessage();

    const atualizar = () => {
        form.validateFields().then(()=>{
            setLoading(true);
            axios.post('/api/auth/alterar-senha', {
                token:token,
                password:form.getFieldValue('password')
            }).then((e)=>
            {
                messageApi.success('Senha atualizada com sucesso');
                setInterval(() => location.href = '/', 3000);
            }).catch(()=>{
                messageApi.error('Erro interno');
            }).finally(() => {
                setLoading(false);
            });
        })
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
                        <h2>Esqueci minha senha</h2>
                    </Flex>

                    <Form
                        form={form}
                        layout={'vertical'}
                    >
                        <Form.Item
                            label={'Digite a sua nova senha'}
                            name={'password'}
                            rules={[
                                {required:true, message:'Senha é obrigatório'},
                                {min:8, message:'Tamanho mínimo da senha é 8 caracteres'}
                            ]}
                        >
                            <Input.Password />
                        </Form.Item>
                        <Flex justify={'right'}>
                            <Button type={'primary'} onClick={atualizar} loading={loading}>Alterar Senha</Button>
                        </Flex>
                    </Form>
                </div>
            </Row>
        </ConfigProvider>
    )
}
