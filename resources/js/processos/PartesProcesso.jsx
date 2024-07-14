import React from 'react';
import { useParams } from 'react-router-dom';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import FormPartes from "@/componentes/processos/FormPartes.jsx";
import {Breadcrumb, Form} from "antd";
import {HomeOutlined} from "@ant-design/icons";

export default function PartesProcesso(props){
    const {xid} = useParams();
    const [form] = Form.useForm();
    return(
        <LayoutBasico titulo={'Vincular Partes'} menu={'processos'}>
            <Breadcrumb items={[
                {title:<HomeOutlined/>, href:'/'},
                {title:'Processos', href:'/processos'},
                {title:'Criar', href:'/processos/criar'},
                {title:'Partes'}
            ]}
            />
            <FormPartes form={form}/>
        </LayoutBasico>
    )
}
