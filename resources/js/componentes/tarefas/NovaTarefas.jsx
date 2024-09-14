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
    const user = JSON.parse(localStorage.getItem('user'));
    const [descricao, setDescricao] = useState('');

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
        setDescricao(descricao);
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
                    label={'Prazo'}
                    name={'prazo'}
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

export default NovaTarefas;
