import React, {useEffect, useRef, useState} from 'react';
import {DatePicker, Input, Modal, Select} from "antd";
import {Form} from 'antd';
import axios from "axios";
import dayjs from "dayjs";
import ReactQuill from 'react-quill';
import 'react-quill/dist/quill.snow.css';
import Editor from "@/componentes/Editor.jsx";

const NovoAtendimento = (props) => {
    const [form] = Form.useForm();
    const [loading, setLoading] = useState(false);
    const [loadingEnviar, setLoadingEnviar] = useState(false);

    const enviar = () => {
        setLoadingEnviar(true);
        form.validateFields().then(()=>{
           console.log('valido');
        });
    }


    return (
        <Modal title="Novo Atendimento"
           open={props.open}
           onCancel={props.cancelar}
           onOk={enviar}
           loading={loading}
           confirmLoading={loadingEnviar}
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
