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
    const [descricao, setDescricao] = useState('');
    const navigate = useNavigate();
    const user = JSON.parse(localStorage.getItem('user'));

    const enviar = ()=>{
        form.validateFields().then(async ()=>{
            setConfirmLoading(true);
            const tarefa = {};
            //alterar para cookies
            tarefa.responsavel = user.xid;
            tarefa.assunto = form.getFieldValue('assunto');
            tarefa.descricao = descricao;
            let prazo = form.getFieldValue('prazo');
            if(prazo)
            {
                tarefa.inicio = dayjs(prazo[0], 'DD/MM/YYYY HH:mm').format('YYYY-MM-DD HH:mm');
                tarefa.fim = dayjs(prazo[1], 'DD/MM/YYYY HH:mm').format('YYYY-MM-DD HH:mm');
            }

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
        setDescricao(descricao);
    }

    return (
        <Modal
            open={props.open}
            title={'Editar Tarefa'}
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
                    label={'Prazo'}
                    name={'prazo'}
                    initialValue={(props.tarefa.prazo?.inicio)?[dayjs(props.tarefa.prazo?.inicio, 'YYYY-MM-DD HH:mm'), dayjs(props.tarefa.prazo?.fim, 'YYYY-MM-DD HH:mm')]:null}
                >
                    <DatePicker.RangePicker
                        showTime
                        format={'DD/MM/YYYY HH:mm'}
                        id={{
                            start: 'inicio',
                            end: 'fim',
                        }}
                    />
                </Form.Item>
            </Form>
        </Modal>
    );
}

export default EditarTarefas;
