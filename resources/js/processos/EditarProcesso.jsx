import React, {useEffect, useState} from 'react';
import { useParams } from 'react-router-dom';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import {Breadcrumb, Button, Flex, Form, message, Skeleton} from "antd";
import FormProcesso from "@/componentes/processos/FormProcesso.jsx";
import axios from "axios";
import {HomeOutlined} from "@ant-design/icons";
import dayjs from "dayjs";
import {useNavigate} from "react-router-dom";

export default function EditarProcesso()
{
    const [form] = Form.useForm();
    const [messageApi, context] = message.useMessage();
    const [loading, setLoading] = useState(false);
    const [reload, setReload] = useState(false);
    const navigate = useNavigate();
    let {xid} = useParams();

    useEffect(() => {
        const getProcesso = async () => {
            setLoading(true);
            await axios.get('/api/processos/'+xid)
                .then((resp)=>{
                    let dados = resp.data;
                    form.setFieldValue('numero', dados?.numero);
                    form.setFieldValue('numCNJ', dados?.numCNJ);
                    //datas
                    let data_criacao = dados?.data_criacao;
                    form.setFieldValue('data_criacao', (data_criacao)?dayjs(data_criacao, 'YYYY-MM-DD'):null);
                    let data_distribuicao = dados?.data_distribuicao;
                    form.setFieldValue('data_distribuicao', (data_distribuicao)?dayjs(data_distribuicao, 'YYYY-MM-DD'):null);

                    form.setFieldValue('prioridade', dados?.prioridade);
                    form.setFieldValue('justica_gratuita', dados?.justica_gratuita);
                    form.setFieldValue('valor_causa', dados?.valor_causa);
                    form.setFieldValue('valor_condenacao', dados?.valor_condenacao);
                    form.setFieldValue('instancia', dados?.instancia);
                    form.setFieldValue('classe_judicial', dados?.classe_judicial);
                    form.setFieldValue('tribunal', dados?.tribunal);
                    form.setFieldValue('comarca', dados?.comarca)
                    form.setFieldValue('vara', dados?.vara);

                }).catch((e)=>{
                    if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                    messageApi.error('Erro em obter os dados', 10)
                }).finally(()=>{
                    setLoading(false);
                });
        }
        getProcesso();
    }, []);

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
                processo.data_distribuicao = (data_d)?dayjs(form.getFieldValue('data_distribuicao'), 'DD/MM/YYYY').format('YYYY-MM-DD'):null;
                processo.prioridade = form.getFieldValue('prioridade');
                processo.instancia = form.getFieldValue('instancia');
                processo.justica_gratuita = form.getFieldValue('justica_gratuita');

                let valor_causa = parseFloat(form.getFieldValue('valor_causa'));
                processo.valor_causa = (valor_causa)?valor_causa.toFixed(2):null;
                let valor_condenacao = parseFloat(form.getFieldValue('valor_condenacao'));
                processo.valor_condenacao = (valor_condenacao)?valor_condenacao.toFixed(2):null;

                processo.classe_judicial = form.getFieldValue('classe_judicial');
                processo.tribunal = form.getFieldValue('tribunal');
                processo.comarca = form.getFieldValue('comarca');
                processo.vara = form.getFieldValue('vara');

                await axios({
                    method:'PUT',
                    url:'/api/processos/'+xid,
                    data:processo
                }).then((resp)=>{
                    messageApi.success('Processo salvo com sucesso');
                }).catch(erro=>{
                    if(erro.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                    messageApi.error('Erro em salvar o processo: '+erro.response?.data?.msg);
                });
                setLoading(false);
            });
    }

    return (
        <LayoutBasico titulo={'Editar Processo'} menu={'processos'}>
            <Breadcrumb items={[
                {title:<HomeOutlined/>, href:'/'},
                {title:'Processos', href:'/processos'},
                {title:'Editar'}
            ]}
            />
            {context}
            <Skeleton
                loading={loading}
            >
                <FormProcesso form={form}/>
                <Flex justify={'right'}>
                    <Button type={'default'} style={{margin:'5px'}} onClick={()=>location.href='/processos'}>Voltar</Button>
                    <Button type={'default'} style={{margin:'5px'}} onClick={()=>location.href = location.href+'/partes'}>Alterar Partes</Button>
                    <Button type={'primary'} style={{margin:'5px'}} onClick={enviarProcesso} loading={loading}>Salvar</Button>
                </Flex>
            </Skeleton>
        </LayoutBasico>
    )
}
