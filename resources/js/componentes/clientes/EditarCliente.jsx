import React, {useEffect, useMemo, useState} from 'react';
import {Button, Form, Input, InputNumber, List, message, Modal, Radio, Select, Skeleton} from 'antd';
import FormsPessoaFisica from "@/componentes/clientes/FormsPessoaFisica.jsx";
import FormsPessoaJuridica from "@/componentes/clientes/FormsPessoaJuridica.jsx";
import axios from "axios";
import dayjs from "dayjs";
import {useNavigate} from "react-router-dom";
import {PlusOutlined} from "@ant-design/icons";
import {IoIosRemoveCircleOutline} from "react-icons/io";

const EditarCliente = (props) => {
    const [loading, setLoading] = useState(false);
    const [form] = Form.useForm();
    const [formEnd] = Form.useForm();
    const navigate = useNavigate();
    const [estados, setEstados] = useState([]);
    const [cidades, setCidades] = useState([]);
    const [formTel] = Form.useForm();

    const enviarCliente =  () => {
        formTel.validateFields().then(() => {
        formEnd.validateFields().then(()=>{
        form.validateFields().then(async ()=>{
            setLoading(true);
            let url;
            let cliente = {};
            if(props.cliente.cpf)
            {
                cliente.nome = form.getFieldValue('nome');
                if(form.getFieldValue('nome_social'))
                    cliente.nome_social = form.getFieldValue('nome_social');

                cliente.cpf = form.getFieldValue('cpf').replace(/(\d{3})\.(\d{3})\.(\d{3})\-(\d{2})/, '$1$2$3$4');
                cliente.email = form.getFieldValue('email');
                cliente.sexo = form.getFieldValue('sexo');
                cliente.estado_civil = form.getFieldValue('estado_civil');
                if(form.getFieldValue('nome_pai')!==undefined)
                    cliente.nome_pai = form.getFieldValue('nome_pai');

                if(form.getFieldValue('nome_mae')!==undefined)
                    cliente.nome_mae = form.getFieldValue('nome_mae');

                cliente.naturalidade = form.getFieldValue('naturalidade');
                cliente.naturalidade_uf = form.getFieldValue('naturalidade_uf');
                cliente.profissao = form.getFieldValue('profissao');
                cliente.data_nascimento = dayjs(form.getFieldValue('data_nascimento')).format('YYYY-MM-DD');

                cliente.rg = {};
                cliente.rg.numero = form.getFieldValue('rg_numero');
                cliente.rg.data_emissao = dayjs(form.getFieldValue('rg_data_emissao')).format('YYYY-MM-DD');
                cliente.rg.emissor = form.getFieldValue('rg_emissor');
                cliente.rg.estado = form.getFieldValue('rg_estado');

                cliente.novos_telefones = formTel.getFieldValue('telefones');
                cliente.novos_enderecos = formEnd.getFieldValue('enderecos');
                const response = await axios({
                        method:'PUT',
                        url:'/api/clientesfis/'+props.cliente.xid,
                        data:cliente
                    }).then((response)=>{
                        setLoading(false);
                        if(response.status===200){
                            props.handleCancel();
                            props.sucessoMsg('Sucesso em atualizar o cliente');
                        }
                    })
                        .catch((error)=>{
                            if(error.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                            props.erroMsg(error.response.msg);
                            setLoading(false);
                });
            }
            else
            {
                cliente.razao_social = form.getFieldValue('razao_social');
                cliente.cnpj = form.getFieldValue('cnpj').replace(/(\d{2})\.(\d{3})\.(\d{3})\/(\d{4})\-(\d{2})/, '$1$2$3$4$5');
                cliente.email = form.getFieldValue('email');
                if(form.getFieldValue('nome_fantasia'))
                    cliente.nome_fantasia = form.getFieldValue('nome_fantasia');

                cliente.administrador = form.getFieldValue('administrador');
                cliente.novos_enderecos = formEnd.getFieldValue('enderecos');
                const response = await axios({
                    method:'PUT',
                    url:'/api/clientesjur/'+props.cliente.xid,
                    data:cliente
                }).then((response)=>{
                    setLoading(false);
                    if(response.status===200){
                        props.handleCancel();
                        props.sucessoMsg('Sucesso em atualizar o cliente');
                    }
                })
                    .catch((error)=>{
                        if(error.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                        props.erroMsg(error.response.msg);
                        setLoading(false);
                    });
            }
            })
        })});
    }

    useEffect(() => {
        const getEstados = async () => {
            let estados = [];
            const response = await axios.get('/api/estados')
                .catch((e)=>{
                    if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                });
            response.data.forEach((e)=>{
                estados.push({label:e.nome, value:e.uf});
            });
            setEstados(estados);
        }
        getEstados();
    }, []);


    const getCidadesEnderecos = async (uf, index=-1)=>{
        const response = await axios.get('/api/cidades/'+uf)
            .catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
            });
        let c = [];
        response.data.forEach((cidade)=>{
            c.push({label:cidade.nome, value:cidade.id});
        });
        await setCidades((prevState) => {
            let itens = [...prevState];
            if(index!=-1) itens[index] = c;
            else itens = [...prevState, c];
            return itens;
        });

        return c;
    }

    return (
        <Modal
            open={props.open}
            title={'Editar Cliente'}
            onOk={enviarCliente}
            onCancel={props.handleCancel}
            destroyOnClose={true}
            confirmLoading={loading}
            loading={props.loadingModal}
        >
            {props.cliente === "fisico" || props.cliente.cpf ? (
                <FormsPessoaFisica form={form} cliente={props.cliente}/>) : (
                <FormsPessoaJuridica form={form} cliente={props.cliente}/>)}


            <h3>Telefones</h3>

            <Form
                layout={'vertical'}
                form={formTel}
                preserve={false}
            >
                <Form.List name={'telefones'}>
                    {(fields, {add, remove}) => (
                        <>
                            {fields.map( (field) => {
                                return (
                                    <Form.Item
                                        required={true}
                                        key={field.key}
                                        noStyle
                                    >
                                        <Form.Item
                                            label={'DDI'}
                                            name={[field.name, 'ddi']}
                                        >
                                            <InputNumber addonBefore={'+'} min={1} max={999}/>
                                        </Form.Item>

                                        <Form.Item
                                            label={'DDD'}
                                            name={[field.name, 'ddd']}
                                            initialValue={42}
                                            rules={[
                                                {required:true, message:'DDD é obrigatório'}
                                            ]}
                                        >
                                            <InputNumber min={1} max={999}/>
                                        </Form.Item>

                                        <Form.Item
                                            label={'Número'}
                                            name={[field.name, 'numero']}
                                            rules={[
                                                {required:true, message:'Número é obrigatório'}
                                            ]}
                                        >
                                            <InputNumber maxLength={12} style={{width:400}}/>
                                        </Form.Item>

                                        <Button
                                            className="dynamic-delete-button"
                                            style={{marginBottom: '10px'}}
                                            danger onClick={()=>remove(field.name)}
                                        >Remover</Button>
                                    </Form.Item>
                                );
                            } )}
                            <Form.Item>
                                <Button
                                    type="dashed"
                                    onClick={() => {
                                        add();
                                    }
                                    }
                                    style={{width: '60%'}}
                                    icon={<PlusOutlined/>}
                                >
                                    Adicionar
                                </Button>
                            </Form.Item>
                        </>
                    )}
                </Form.List>
            </Form>



            <h3>Endereços</h3>
            {(props.cliente?.enderecos)?(
            <List dataSource={props.cliente?.enderecos??[]}
                  renderItem={(item, index) => (
                      <List.Item
                        actions={[
                            <Button danger onClick={()=>{
                                axios.delete('/api/enderecos/'+item.xid)
                                    .then((resp)=>{
                                        props.sucessoMsg('Endereço removido');
                                    }).catch((e)=>props.erro2Msg('Erro em remover o endereço'));
                            }}><IoIosRemoveCircleOutline/></Button>
                        ]}
                      >
                          <Skeleton loading={false}>
                              <List.Item.Meta title={'Endereço '+(index+1)}
                                    description={`Logradouro ${item.logradouro}
                                    n. ${item.numero} ${item.cidade} CEP ${item.cep}`}
                              />
                          </Skeleton>
                      </List.Item>
                  )}
            />):(null)}
            <Form
                layout={'vertical'}
                form={formEnd}
                preserve={false}
            >
                <Form.List
                    label={'Endereços'}
                    name={'enderecos'}
                >
                    {(fields, {add, remove}, {errors}) => (
                        <>
                            {fields.map((campo, index) => {
                                    return (
                                        <Form.Item
                                            required={true}
                                            key={campo.key}
                                            noStyle
                                        >
                                            <Form.Item
                                                label={'CEP'}
                                                name={[campo.name, 'cep']}
                                                rules={[
                                                    {required: true, message: 'CEP é obrigatório'},
                                                    {min: 8, max: 8, message: 'CEP inválido'}
                                                ]}
                                            >
                                                <Input placeholder={'Formato 99999999'}/>
                                            </Form.Item>
                                            <Button onClick={() => {
                                                const cep = formEnd.getFieldValue('enderecos')?.[campo.name]?.cep;
                                                axios.get('https://brasilapi.com.br/api/cep/v2/' + cep).then((resp) => {
                                                    const enderecos = formEnd.getFieldValue('enderecos');
                                                    enderecos[campo.name].logradouro = resp.data.street;
                                                    enderecos[campo.name].bairro = resp.data.neighborhood;
                                                    enderecos[campo.name].uf = resp.data.state;
                                                    setCidades((prevState) => (prevState?.filter((_, i) => i !== index)));
                                                    getCidadesEnderecos(resp.data.state, index).then((c) => {
                                                        enderecos[campo.name].cidade = c.find(cidade => resp.data.city === cidade.label).value;
                                                    });
                                                });
                                            }}>Buscar CEP</Button>
                                            <Form.Item
                                                label={'Logradouro'}
                                                name={[campo.name, 'logradouro']}
                                                rules={[
                                                    {required: true, message: 'Logradouro é obrigatório'}
                                                ]}
                                            >
                                                <Input/>
                                            </Form.Item>

                                            <Form.Item
                                                label={'Número'}
                                                name={[campo.name, 'numero']}
                                                rules={[
                                                    {required: true, message: 'Número é obrigatório'}
                                                ]}
                                            >
                                                <InputNumber min={1}/>
                                            </Form.Item>

                                            <Form.Item
                                                label={'Complemento'}
                                                name={[campo.name, 'complemento']}
                                            >
                                                <Input/>
                                            </Form.Item>

                                            <Form.Item
                                                label={'Bairro'}
                                                name={[campo.name, 'bairro']}
                                                rules={[
                                                    {required: true, message: 'Bairro é obrigatório'}
                                                ]}
                                            >
                                                <Input/>
                                            </Form.Item>

                                            <Form.Item
                                                label={'Estado'}
                                                name={[campo.name, 'uf']}
                                                rules={[
                                                    {required: true, message: 'Estado é obrigatório'}
                                                ]}
                                            >
                                                <Select options={estados}
                                                        showSearch
                                                        optionFilterProp={'label'}
                                                        onSelect={(e) => {
                                                            getCidadesEnderecos(e, index);
                                                        }}
                                                />
                                            </Form.Item>

                                            <Form.Item
                                                label={'Cidade'}
                                                name={[campo.name, 'cidade']}
                                                rules={[
                                                    {required: true, message: 'Cidade é obrigatório'}
                                                ]}
                                            >
                                                <Select options={cidades?.[index]} disabled={!cidades?.[index]}
                                                        placeholder={'Selecione o Estado primeiro'} showSearch
                                                        optionFilterProp={'label'}
                                                />
                                            </Form.Item>

                                            <Button
                                                className="dynamic-delete-button"
                                                style={{marginBottom: '10px'}}
                                                onClick={() => {
                                                    setCidades((prevState) => (prevState?.filter((_, i) => i !== index)));
                                                    remove(campo.name);
                                                }}
                                                danger
                                            >Remover</Button>
                                        </Form.Item>
                                    )
                                }
                            )}
                            <Form.Item>
                                <Button
                                    type="dashed"
                                    onClick={() => {
                                        add();
                                    }
                                    }
                                    style={{width: '60%'}}
                                    icon={<PlusOutlined/>}
                                >
                                    Adicionar
                                </Button>
                                <Form.ErrorList errors={errors}/>
                            </Form.Item>
                        </>
                    )}
                </Form.List>
            </Form>
        </Modal>
    );
}

export default EditarCliente;
