import React, {useEffect, useRef, useState} from 'react';
import {DatePicker, Input, Modal, Select} from "antd";
import {Form} from 'antd';
import axios from "axios";
import dayjs from "dayjs";
import ReactQuill from 'react-quill';
import 'react-quill/dist/quill.snow.css';

const NovoAtendimento = (props) => {
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

           const response = await axios({
               method:'POST',
               url:'/api/atendimentos',
               data:atendimento
           }).then((response)=>{
               setLoadingEnviar(false);
               props.mensagemSucesso('Atendimento salvo com sucesso');
               props.cancelar();
           }).catch((error)=>{
               setLoadingEnviar(false);
               props.mensagemErro('Erro em salvar o atendimento');
           });
        }).catch(()=>setLoadingEnviar(false));
    }

    useEffect(()=>{
        const getClientes = async () =>{
            await axios.get('/api/clientes').then((response)=> {
                let clientes = [];
                response.data.forEach(cliente => {
                    clientes.push({label: cliente.nome + ' ' + cliente.documento, value: cliente.xid})
                });
                setClientes(clientes);
            });
        }
        getClientes();
    }, [props.open]);


    return (
        <Modal title="Novo Atendimento"
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
                    initialValue={dayjs()}
                >
                    <DatePicker
                        showTime={true}
                        format={'DD/MM/YYYY HH:mm'}
                    />
                </Form.Item>

                <Form.Item
                    label={'Cliente'}
                    name={'cliente'}
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
                >
                    <Select

                    />
                </Form.Item>

                <Form.Item
                    label={'Descrição'}
                    name={'descricao'}
                >
                    <ReactQuill theme="snow" />
                </Form.Item>
            </Form>
        </Modal>
);
}
export default NovoAtendimento;
