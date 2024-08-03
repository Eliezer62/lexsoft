import React, {useState} from 'react';
import {DatePicker, Form, Input, Modal} from "antd";
import axios from "axios";
import dayjs from "dayjs";
import EditorSimples from "@/componentes/EditorSimples.jsx";
import {useNavigate} from "react-router-dom";

const EditarTarefas = (props) => {
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
            //tarefa.descricao = form.getFieldValue('descricao');
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
                if(error.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                setConfirmLoading(false);
                props.mensagemErro('Erro em editar a tarefa '+error.response?.data.msg);
            });
        });
    }

    const editorChange = (descricao)=>{
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
                    initialValue={props.tarefa.assunto}
                >
                    <Input/>
                </Form.Item>

                <Form.Item
                    label={'Descrição'}
                    name={'descricao'}
                    initialValue={props.tarefa.descricao}
                >
                    <EditorSimples dados={props.tarefa.descricao} onChange={editorChange}/>
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
