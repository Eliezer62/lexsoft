import React, {useState} from 'react';
import { useParams } from 'react-router-dom';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import FormPartes from "@/componentes/processos/FormPartes.jsx";
import {Breadcrumb, Button, Flex, Form, message} from "antd";
import {HomeOutlined} from "@ant-design/icons";
import axios from "axios";

export default function PartesProcesso(props){
    const {xid} = useParams();
    const [form] = Form.useForm();
    const [loading, setLoading] = useState(false);
    const [clientes, setClientes] = useState([]);
    const [messageApi, contextHolder] = message.useMessage();

    const enviar = () => {
        form.validateFields().then(async ()=>{
            setLoading(true);
            let data = [];
            const p = form.getFieldValue('partes');
            //Torna unique as partes - vale a ultima instancia
            let partes = [...new Map(p.map(item =>
                [item['cliente'], item])).values()];

            //resolve o tipo do cliente
            await axios.get('/api/clientes').then((resp)=>{
                setClientes(resp.data);
            });
            await partes.forEach(parte => {
                parte.tipo = clientes.find(e => e.xid === parte.cliente)?.tipo;
            });
            data.partes = partes;
            data.advogados = form.getFieldValue('advogados');

            await axios({
                url:'/api/processos/'+xid+'/partes',
                method:'POST',
                data:data
            }).then((resp)=>{
                messageApi.success('Partes salvas com sucesso');
            }).catch((e)=>{
                messageApi.error('Erro em salvar as partes');
            })
        });
    }

    return(
        <LayoutBasico titulo={'Vincular Partes'} menu={'processos'}>
            <Breadcrumb items={[
                {title:<HomeOutlined/>, href:'/'},
                {title:'Processos', href:'/processos'},
                {title:'Criar', href:'/processos/criar'},
                {title:'Partes'}
            ]}
            />
            {contextHolder}
            <FormPartes form={form}/>
            <Flex justify={'right'}>
                <Button type={'primary'} size={'large'} onClick={enviar} loading={loading}>Enviar</Button>
            </Flex>
        </LayoutBasico>
    )
}
