import React, {useState} from 'react';
import {DatePicker, Form, Input, Modal} from "antd";
import {fa} from "faker-br/lib/locales.js";
import ReactQuill from "react-quill";
import axios from "axios";
import dayjs from "dayjs";

const EditarTarefas = (props) => {
    const [form] = Form.useForm();
    const [confirmLoading, setConfirmLoading] = useState(false);
    const [tarefa, setTarefa] = useState({});

    const enviar = ()=>{
        form.validateFields().then(async ()=>{
            setConfirmLoading(true);
            //alterar para cookies
            tarefa.responsavel = 'cpvfkgm65k23bn0tib4g';
            tarefa.assunto = form.getFieldValue('assunto');
            tarefa.descricao = form.getFieldValue('descricao');
            let inicio = form.getFieldValue('inicio');
            tarefa.inicio = (inicio)?dayjs(inicio, 'DD/MM/YYYY HH:mm').format('YYYY-MM-DD HH:mm'):null;
            let fim  = form.getFieldValue('fim');
            tarefa.fim = (fim)?dayjs(fim, 'DD/MM/YYYY HH:mm').format('YYYY-MM-DD HH:mm'):null;

            await axios({
                method: "PUT",
                url:'/api/tarefas/'+props.tarefa.xid,
                data: tarefa
            }).then(resp=>{
                props.mensagemSucesso('Tarefa editada com sucesso');
                setConfirmLoading(false);
                props.cancelar();
            }).catch((error)=>{
                setConfirmLoading(false);
                props.mensagemErro('Erro em editar a tarefa '+error.response?.data.msg);
            });
        });
    }

    return (
        <Modal
            open={props.open}
            title={'Nova Tarefa'}
            onOk={enviar}
            onCancel={props.cancelar}
            destroyOnClose={true}
            confirmLoading={confirmLoading}
        >
            <Form
                form={form}
                layout={'vertical'}
                preserve={false}
            >
                <Form.Item
                    label={'Assunto'}
                    name={'assunto'}
                    rules={[
                        {required:true, message:'Assunto é obrigatório'}
                    ]}
                    initialValue={props.tarefa.assunto}
                >
                    <Input/>
                </Form.Item>

                <Form.Item
                    label={'Descrição'}
                    name={'descricao'}
                    initialValue={props.tarefa.descricao}
                >
                    <ReactQuill/>
                </Form.Item>

                <Form.Item
                    label={'Data de início'}
                    name={'inicio'}
                    initialValue={(props.tarefa.prazo?.inicio)?dayjs(props.tarefa.prazo?.inicio, 'YYYY-MM-DD HH:mm'):null}
                >
                    <DatePicker showTime format={'DD/MM/YYYY HH:mm'}/>
                </Form.Item>

                <Form.Item
                    label={'Data de fim'}
                    name={'fim'}
                    initialValue={(props.tarefa.prazo?.fim)?dayjs(props.tarefa.prazo?.fim, 'YYYY-MM-DD HH:mm'):null}
                >
                    <DatePicker showTime format={'DD/MM/YYYY HH:mm'}/>
                </Form.Item>
            </Form>

        </Modal>
    );
}

export default EditarTarefas;
