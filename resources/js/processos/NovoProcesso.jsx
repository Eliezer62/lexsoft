import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import {Breadcrumb, Button, Flex, Form, message} from "antd";
import '../../css/processos.css';
import {HomeOutlined} from '@ant-design/icons';
import FormProcesso from "@/componentes/processos/FormProcesso.jsx";
import dayjs from "dayjs";
import axios from "axios";

/**
 * Componente: tela de criação de processo
 * @returns {Element}
 * @constructor
 */
export default function NovoProcesso() {
    const [form] = Form.useForm();
    const [loading, setLoading] = useState(false);
    const [messageApi, contextHolder] = message.useMessage();

    const enviarProcesso = async () =>
    {
        form.validateFields()
            .then(async ()=>{
                setLoading(true);
                let processo = {};
                processo.numero = form.getFieldValue('numero');
                processo.numCNJ = form.getFieldValue('numCNJ');
                processo.data_criacao = dayjs(form.getFieldValue('data_criacao'), 'DD/MM/YYYY').format('YYYY-MM-DD');
                let data_d = form.getFieldValue('data_distribuicao');
                processo.data_distribuicao = (data_d)?dayjs(form.getFieldValue('data_criacao'), 'DD/MM/YYYY').format('YYYY-MM-DD'):null;
                processo.prioridade = form.getFieldValue('prioridade');
                processo.instancia = form.getFieldValue('instancia');
                processo.justica_gratuita = form.getFieldValue('justica_gratuita');
                processo.valor_causa = form.getFieldValue('valor_causa')?.toFixed(2);
                processo.valor_condenacao = form.getFieldValue('valor_condenacao')?.toFixed(2);
                processo.classe_judicial = form.getFieldValue('classe_judicial');
                processo.tribunal = form.getFieldValue('tribunal');
                processo.comarca = form.getFieldValue('comarca');
                processo.vara = form.getFieldValue('vara');
                console.log(processo);

                await axios({
                    method:'POST',
                    url:'/api/processos',
                    data:processo
                }).then((resp)=>{
                    messageApi.success('Processo criado com sucesso');
                    setInterval(()=>{
                        location.href = '/processos/criar/'+resp.data.xid+'/partes';
                    }, 3000);
                }).catch(erro=>{
                    setLoading(false);
                    messageApi.error('Erro em salvar o processo: '+erro.response?.data?.msg);
                });
            });
    }

    return (
        <LayoutBasico titulo='Novo Processo' menu={'processos'}>
            {contextHolder}
            <Breadcrumb items={[
                {title:<HomeOutlined/>, href:'/'},
                {title:'Processos', href:'/processos'},
                {title:'Criar'}
            ]}
            />
            <FormProcesso form={form}/>
            <Flex
                align={'right'}
                justify={'right'}
                style={{padding: '25px', marginTop:'-50px'}}
            >
                <Button type={'primary'} size={'large'} loading={loading} onClick={enviarProcesso}>Enviar</Button>
            </Flex>
        </LayoutBasico>
    );
}
