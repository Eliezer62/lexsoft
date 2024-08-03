import React, {useState} from 'react';
import {DatePicker, Form, Input, Modal} from "antd";
import axios from "axios";
import dayjs from "dayjs";
import EditorSimples from "@/componentes/EditorSimples.jsx";
import {useNavigate} from "react-router-dom";

const NovaTarefas = (props) => {
    const [form] = Form.useForm();
    const [confirmLoading, setConfirmLoading] = useState(false);
    const [tarefa, setTarefa] = useState({});
    const navigate = useNavigate();

    const enviar = ()=>{
        form.validateFields().then(async ()=>{
            setConfirmLoading(true);
            //alterar para cookies
            tarefa.responsavel = 'cq8998665k25di0tid5g';
            tarefa.assunto = form.getFieldValue('assunto');
            let inicio = form.getFieldValue('inicio');
            tarefa.inicio = (inicio)?dayjs(inicio, 'DD/MM/YYYY HH:mm').format('YYYY-MM-DD HH:mm'):null;
            let fim  = form.getFieldValue('fim');
            tarefa.fim = (fim)?dayjs(fim, 'DD/MM/YYYY HH:mm').format('YYYY-MM-DD HH:mm'):null;

            await axios({
                method: "POST",
                url:'/api/tarefas',
                data: tarefa
            }).then(resp=>{
                props.mensagemSucesso('Tarefa salva com sucesso');
                setConfirmLoading(false);
                props.cancelar();
            }).catch((error)=>{
                if(error.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                setConfirmLoading(false);
                props.mensagemErro('Erro em salvar a tarefa '+error.response?.data.msg);
            });
        });
    }

    const changeDescricao = (descricao) => {
        tarefa.descricao = descricao;
        setTarefa(tarefa);
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
                >
                    <Input/>
                </Form.Item>

                <Form.Item
                    label={'Descrição'}
                    name={'descricao'}
                >
                    <EditorSimples onChange={changeDescricao}/>
                </Form.Item>

                <Form.Item
                    label={'Data de início'}
                    name={'inicio'}
                >
                    <DatePicker showTime format={'DD/MM/YYYY HH:mm'}/>
                </Form.Item>

                <Form.Item
                    label={'Data de fim'}
                    name={'fim'}
                >
                    <DatePicker showTime format={'DD/MM/YYYY HH:mm'}/>
                </Form.Item>
            </Form>

        </Modal>
    );
}

export default NovaTarefas;
