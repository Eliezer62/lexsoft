import React, {useEffect, useState} from 'react';
import { useParams } from 'react-router-dom';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import FormPartes from "@/componentes/processos/FormPartes.jsx";
import {Breadcrumb, Button, Flex, Form, message, Skeleton} from "antd";
import {HomeOutlined} from "@ant-design/icons";
import axios from "axios";
import {useNavigate} from "react-router-dom";
import NovoCliente from "@/componentes/clientes/NovoCliente.jsx";

export default function EditarPartesProcesso(props){
    const {xid} = useParams();
    const [form] = Form.useForm();
    const [loading, setLoading] = useState(false);
    const [loadingSke, setLoadingSke] = useState(true);
    const [clientes, setClientes] = useState([]);
    const [messageApi, contextHolder] = message.useMessage();
    const navigate = useNavigate();
    const [openNovoCliente, setOpenNovoCliente] = useState(false);

    const enviar = () => {
        form.validateFields().then(async ()=>{
            setLoading(true);
            let data = {};
            const p = form.getFieldValue('partes');
            //Torna unique as partes - vale a ultima instancia
            let partes = [...new Map(p.map(item =>
                [item['cliente'], item])).values()];

            data.partes = partes;
            data.advogados = form.getFieldValue('advogados');

            await axios({
                url:'/api/processos/'+xid+'/partes',
                method:'PUT',
                data:data
            }).then((resp)=>{
                messageApi.success('Partes atualizadas com sucesso');
            }).catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                messageApi.error('Erro em atualizar as partes');
            });
            setLoading(false);
        });
    }

    useEffect(() => {
        const getPartes = async () => {
            await axios.get('/api/processos/'+xid+'/partes')
                .then(resp=>{
                    let dados = [];
                    resp.data.forEach(p =>{
                        p.cliente = p.xid;
                        dados.push(p);
                    })
                    form.setFieldValue('partes', dados);
                }).catch((erro)=>{
                    if(erro.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                    messageApi.error('Erro em obter dados');
                })
                .finally(() => {
                    setLoadingSke(false);
                });
        }
        const getAdvs = async () => {
            await axios.get('/api/processos/'+xid+'/advogados')
                .then(resp=>{
                    let adv = [];
                    resp.data.forEach(a => adv.push(a.xid));
                    form.setFieldValue('advogados', adv);
                }).catch((e)=>{
                    if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                    messageApi.error('Erro em obter dados');
                });
        }
        getPartes();
        getAdvs();
    }, []);

    return(
        <LayoutBasico titulo={'Editar Partes'} menu={'processos'}>
            <Breadcrumb items={[
                {title:<HomeOutlined/>, href:'/'},
                {title:'Processos', href:'/processos'},
                {title:'Editar', href:'/processos/'+xid+'/editar'},
                {title:'Partes'}
            ]}
            />
            {contextHolder}
            <Flex justify={'right'}>
                <Button onClick={() => setOpenNovoCliente(true)}>Novo cliente</Button>
            </Flex>
            <Skeleton loading={loadingSke}>
                <FormPartes form={form}/>
                <Flex justify={'right'}>
                    <Button type={'default'} style={{margin:'5px'}} onClick={()=>location.href='/processos/'+xid+'/editar'}>Voltar</Button>
                    <Button type={'primary'} style={{margin:'5px'}} onClick={enviar} loading={loading}>Salvar</Button>
                </Flex>
            </Skeleton>

            <NovoCliente
                open={openNovoCliente}
                handleCancel={() => setOpenNovoCliente(false)}
                sucessoMsg={ () => messageApi.success('Cliente criado com sucesso')}
                erroMsg={(erro) => messageApi.error('Erro em criar o cliente: '+erro)}
            />
        </LayoutBasico>
    )
}
