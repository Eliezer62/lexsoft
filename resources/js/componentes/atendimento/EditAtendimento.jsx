import React, {useEffect, useRef, useState} from 'react';
import {DatePicker, Input, Modal, Select} from "antd";
import {Form} from 'antd';
import axios from "axios";
import dayjs from "dayjs";
import ReactQuill from 'react-quill';
import 'react-quill/dist/quill.snow.css';

const EditAtendimento = (props) => {
    const [form] = Form.useForm();
    const [loading, setLoading] = useState(false);
    const [loadingEnviar, setLoadingEnviar] = useState(false);
    const [clientes, setClientes] = useState([]);

    const enviar = () => {
        setLoadingEnviar(true);
        form.validateFields().then( async ()=>{
            let atendimento = {};
            atendimento.assunto = form.getFieldValue('assunto');
            atendimento.data = dayjs(form.getFieldValue('data'), 'DD/MM/YYYY').format('YYYY-MM-DD HH:mm');
            atendimento.descricao = form.getFieldValue('descricao');
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
            });
        }
        getClientes();
    }, [props.open]);


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
                    initialValue={props.atendimento?.xid}
                >
                    <Select
                        placeholder={'Selecione o cliente'}
                        options={clientes}
                        showSearch
                        optionFilterProp={'label'}
                    />
                </Form.Item>

                <Form.Item
                    label={'Processo'}
                    name={'processo'}
                    initialValue={props.atendimento.processo}
                >
                    <Select

                    />
                </Form.Item>

                <Form.Item
                    label={'Descrição'}
                    name={'descricao'}
                    initialValue={props.atendimento.descricao}
                >
                    <ReactQuill theme="snow"/>
                </Form.Item>
            </Form>
        </Modal>
    );
}
export default EditAtendimento;
