import React, {useState} from 'react';
import { useParams } from 'react-router-dom';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import FormPartes from "@/componentes/processos/FormPartes.jsx";
import {Breadcrumb, Button, Flex, Form, message} from "antd";
import {HomeOutlined} from "@ant-design/icons";
import axios from "axios";
import {useNavigate} from "react-router-dom";
import NovoCliente from "@/componentes/clientes/NovoCliente.jsx";

export default function PartesProcesso(props){
    const {xid} = useParams();
    const [form] = Form.useForm();
    const [loading, setLoading] = useState(false);
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
            let partes = [...new Map(p?.map(item =>
                [item['cliente'], item])).values()];

            data.partes = partes;
            data.advogados = form.getFieldValue('advogados');

            await axios({
                url:'/api/processos/'+xid+'/partes',
                method:'POST',
                data:data
            }).then((resp)=>{
                messageApi.success('Partes salvas com sucesso');
                setInterval(()=>location.href='/processos/'+xid+'/movimentar', 3000);
            }).catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
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
            <Flex justify={'right'}>
                <Button onClick={() => setOpenNovoCliente(true)}>Novo cliente</Button>
            </Flex>
            <FormPartes form={form}/>
            <Flex justify={'right'}>
                <Button type={'primary'} size={'large'} onClick={enviar} loading={loading}>Enviar</Button>
            </Flex>

            <NovoCliente
                open={openNovoCliente}
                handleCancel={() => setOpenNovoCliente(false)}
                sucessoMsg={ () => messageApi.success('Cliente criado com sucesso')}
                erroMsg={(erro) => messageApi.error('Erro em criar o cliente: '+erro)}
            />
        </LayoutBasico>
    )
}
