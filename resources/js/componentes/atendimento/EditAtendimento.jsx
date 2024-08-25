import React, {useEffect, useState} from 'react';
import {DatePicker, Input, Modal, Select} from "antd";
import {Form} from 'antd';
import axios from "axios";
import dayjs from "dayjs";
import EditorSimples from "@/componentes/EditorSimples.jsx";
import {useNavigate} from "react-router-dom";

const EditAtendimento = (props) => {
    const [form] = Form.useForm();
    const [loading, setLoading] = useState(false);
    const [loadingEnviar, setLoadingEnviar] = useState(false);
    const [clientes, setClientes] = useState([]);
    const [descricao, setDescricao] = useState(null);
    const navigate = useNavigate();

    const enviar = () => {
        setLoadingEnviar(true);
        form.validateFields().then( async ()=>{
            let atendimento = {};
            atendimento.assunto = form.getFieldValue('assunto');
            atendimento.data = dayjs(form.getFieldValue('data'), 'DD/MM/YYYY').format('YYYY-MM-DD HH:mm');
            atendimento.descricao = descricao;
            let cliente = clientes.find(e => e.value === form.getFieldValue('cliente'));
            if(cliente?.tipo==='fisico')
                atendimento.clientefis = cliente.value;

            else if(cliente?.tipo==='juridico')
                atendimento.clientejur = cliente.value;

            const response = await axios({
                method:'PUT',
                url:'/api/atendimentos/'+props.atendimento.xid,
                data:atendimento
            }).then((response)=>{
                setLoadingEnviar(false);
                props.mensagemSucesso('Atendimento editado com sucesso');
                props.cancelar();
            }).catch((error)=>{
                if(error.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                setLoadingEnviar(false);
                props.mensagemErro('Erro em editar o atendimento');
            });
        }).catch(()=>setLoadingEnviar(false));
    }

    useEffect(()=>{
        const getClientes = async () =>{
            await axios.get('/api/clientes').then((response)=> {
                let clientes = [];
                response.data.forEach(cliente => {
                    clientes.push({label: cliente.nome + ' ' + cliente.documento, value: cliente.xid, tipo:cliente.tipo})
                });
                setClientes(clientes);
            }).catch((erro)=>{
                if(erro.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
            });
        }
        getClientes();
    }, [props.open]);

    const handleDescricao = (descricao) => {
        setDescricao(descricao);
    }

    return (
        <Modal title="Editar Atendimento"
               open={props.open}
               onCancel={props.cancelar}
               onOk={enviar}
               loading={loading}
               confirmLoading={loadingEnviar}
               destroyOnClose={true}
        >
            <Form
                title={'Atendimento'}
                form={form}
                preserve={false}
                layout={'vertical'}
            >
                <Form.Item
                    label={'Assunto'}
                    name={'assunto'}
                    initialValue={props.atendimento.assunto}
                    rules={[
                        {required:true, message:'Assunto é obrigatório'},
                        {max:255, message:'Tamanho máximo é 255'}
                    ]}
                >
                    <Input/>
                </Form.Item>

                <Form.Item
                    label={'Data'}
                    name={'data'}
                    rules={[
                        {required:true, message:'Data é obrigatório'},
                        {type:'date', message:'Formato inválido'}
                    ]}
                    initialValue={(dayjs(props.atendimento.data, 'YYYY-MM-DD HH:mm'))}
                >
                    <DatePicker
                        showTime={true}
                        format={'DD/MM/YYYY HH:mm'}
                    />
                </Form.Item>

                <Form.Item
                    label={'Cliente'}
                    name={'cliente'}
                    initialValue={props.atendimento?.cliente}
                >
                    <Select
                        placeholder={'Selecione o cliente'}
                        options={clientes}
                        showSearch
                        optionFilterProp={'label'}
                    />
                </Form.Item>

                <Form.Item
                    label={'Descrição'}
                    name={'descricao'}
                    initialValue={props.atendimento.descricao}
                >
                    <EditorSimples dados={props.atendimento.descricao} onChange={handleDescricao}/>
                </Form.Item>
            </Form>
        </Modal>
    );
}
export default EditAtendimento;
