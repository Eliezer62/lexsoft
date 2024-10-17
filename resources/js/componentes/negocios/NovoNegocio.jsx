import React, {useEffect, useState} from 'react';
import {DatePicker, Form, Modal, Select, Input, InputNumber} from "antd";
import EditorSimples from "../EditorSimples";
import dayjs from "dayjs";
import axios from "axios";

export default function NovoNegocio(props)
{
    const [responsaveis, setResponsaveis] = useState([]);
    const [clientes, setClientes] = useState([]);
    const [confirm, setConfirm] = useState(false);
    const [form] = Form.useForm();

    const enviar = () => {
        form.validateFields().then(async () => {
            setConfirm(true);
            const negocio = {};
            negocio.descricao = form.getFieldValue('descricao');
            negocio.data = dayjs(form.getFieldValue('data')).format('YYYY-MM-DD HH:mm');
            negocio.responsavel = form.getFieldValue('responsavel')??null;
            negocio.contatos = form.getFieldValue('contatos')??null;
            negocio.valor = form.getFieldValue('valor');

            await axios.post('/api/negocios', negocio)
                .then((response) => {
                    props.message.success('Negócio salvo com sucesso');
                    props.onCancel();
                    setConfirm(false);
                }).catch((e) => {
                    props.message.error('Erro em salvar o negócio: '+e.response?.data?.msg);
                    setConfirm(false);
                })
        });
    }

    useEffect(() => {
        const resp = async () => {
            await axios.get('/api/advogados')
                .then((response) => {
                    let temp = [];
                    response.data.forEach(adv => {
                       temp.push({label:adv.nome, value:adv.xid});
                    });
                    setResponsaveis(temp);
                })
                .catch((erro) => {
                    props.message.error('Erro em obter os dados');
                });
        }
        const clientes = async () => {
            await axios.get('/api/clientes')
                .then((response) => {
                    const tmp = [];
                    response.data.forEach((cliente) => {
                        tmp.push({value:cliente.xid, label:cliente.nome+ ' '+cliente.documento, tipo:cliente.tipo});
                    })
                    setClientes(tmp);
                }).catch((e) => props.message.error('Erro em obter os dados'));
        }

        resp();
        clientes();
    }, []);

    return (
      <Modal
        title={'Novo Negócio'}
        open={props.open}
        onCancel={props.onCancel}
        onOk={enviar}
        confirmLoading={confirm}
        destroyOnClose={true}
      >
        <Form
            form={form}
            preserve={false}
            layout={'vertical'}
        >
            <Form.Item
                label={'Descrição'}
                name={"descricao"}
                rules={[
                    {required:true, message:'Descrição é obrigatório'}
                ]}
            >
                <EditorSimples />
            </Form.Item>

            <Form.Item
                label={'Data'}
                name={'data'}
                initialValue={dayjs()}
                rules={[
                    {required:true, message:'Data é obrigatório'}
                ]}
            >
                <DatePicker
                    showTime
                    format={'DD/MM/YYYY HH:mm'}
                    maxDate={dayjs()}
                />
            </Form.Item>

            <Form.Item
                label={'Responsável'}
                name={'responsavel'}
            >
                <Select options={responsaveis}/>
            </Form.Item>
            <Form.Item
                label={'Contatos'}
                name={'contatos'}
            >
                <Select options={clientes} showSearch optionFilterProp={'label'} mode={'multiple'}/>
            </Form.Item>
            <Form.Item
                label={'Valor R$'}
                name={'valor'}
            >
                <InputNumber min={0} precision={2} decimalSeparator={','} style={{width:'475px'}}/>
            </Form.Item>
        </Form>
      </Modal>
    );
}
