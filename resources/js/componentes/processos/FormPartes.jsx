import React, {useEffect, useState} from 'react';
import {Button, Flex, Form, message, Select} from "antd";
import axios from "axios";
import {PlusOutlined} from '@ant-design/icons'
import {useNavigate} from "react-router-dom";

export default function FormPartes(props){
    const [messageApi, contextHolder] = message.useMessage();
    const [advogados, setAdvogados] = useState([]);
    const [clientes, setClientes] = useState([]);
    const [qualificacoes, setQualificacoes] = useState([]);
    const navigate = useNavigate();

    useEffect(() => {
        const getAdvs = async () => {
            await axios.get('/api/advogados').then(resp=>{
                let advs = [];
                resp.data.forEach(adv=>{
                   advs.push({label:adv.nome, value:adv.xid});
                });
                setAdvogados(advs);
            }).catch(e=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                messageApi.error('Erro em obter os advogados');
            });
        }
        const getClientes = async () =>{
            await axios.get('/api/clientes').then((response)=> {
                let clientes = [];
                response.data.forEach(cliente => {
                    clientes.push({label: cliente.nome + ' ' + cliente.documento, value: cliente.xid, tipo:cliente.tipo})
                });
                setClientes(clientes);
            }).catch(error=>{
                if(error.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                messageApi.error('Erro em obter os clientes');
            });
        }
        const getQual = async () =>{
            await axios.get('/api/qualificacoes').then((response)=> {
                let qual = [];
                response.data.forEach(q => {
                    qual.push({label: q.descricao, value: q.id});
                });
                setQualificacoes(qual);
            }).catch(error=>{
                if(error.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                messageApi.error('Erro em obter as qualificações');
            });
        }
        getClientes();
        getAdvs();
        getQual();
    }, []);
    return (
        <Flex justify={'center'} style={{marginTop:'25px'}}>
            {contextHolder}
            <Form
                layout={'vertical'}
                form={props.form}
                style={{width:'75%'}}
            >
                <Form.Item
                    label={'Adicionar advogados'}
                    name={'advogados'}
                >
                    <Select
                        mode="multiple"
                        allowClear
                        style={{ width: '100%' }}
                        placeholder="Adicionar advogados"
                        options={advogados}
                    />
                </Form.Item>

                <p>Partes</p>
                <Form.List
                    label={'Partes'}
                    name={'partes'}
                >
                    {(fields, {add, remove}, {errors})=>(
                        <>
                            {fields.map((field, index) => (
                                <Form.Item
                                    required={false}
                                    layout={'vertical'}
                                    key={field.key}
                                    noStyle
                                >
                                    <Form.Item
                                        name={[field.name, 'cliente']}
                                        rules={[
                                            {
                                                required: true,
                                                message: "Cliente é obrigatório",
                                            },
                                        ]}

                                    >
                                        <Select options={clientes} showSearch optionFilterProp={'label'} style={{width:'100%'}} placeholder={'Cliente'}/>
                                    </Form.Item>

                                    <Form.Item
                                        name={[field.name, 'qualificacao']}
                                        rules={[
                                            {
                                                required: true,
                                                message: "Qualificação é obrigatório",
                                            },
                                        ]}
                                    >
                                        <Select options={qualificacoes} showSearch optionFilterProp={'label'} style={{width:'100%'}} placeholder={'Qualificação do cliente no processo'}/>
                                    </Form.Item>

                                    <Button
                                        className="dynamic-delete-button"
                                        style={{marginBottom:'10px'}}
                                        onClick={() => remove(field.name)}
                                        danger
                                    >Remover</Button>
                                </Form.Item>
                            ))}
                            <Form.Item>
                                <Button
                                    type="dashed"
                                    onClick={() => add()}
                                    style={{ width: '60%' }}
                                    icon={<PlusOutlined />}
                                >
                                    Adicionar Parte
                                </Button>
                                <Form.ErrorList errors={errors} />
                            </Form.Item>
                        </>
                    )}
                </Form.List>
            </Form>
        </Flex>
    )
}
