import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import {Breadcrumb, Button, Flex, Form} from "antd";
import '../../css/processos.css';
import {HomeOutlined} from '@ant-design/icons';
import FormProcesso from "@/componentes/processos/FormProcesso.jsx";

/**
 * Componente: tela de criação de processo
 * @returns {Element}
 * @constructor
 */
export default function NovoProcesso() {
    const [form, setForm] = Form.useForm();

    return (
        <LayoutBasico titulo='Novo Processo' menu={'processos'}>
            <Breadcrumb>
                <Breadcrumb.Item href={'/'}><HomeOutlined/></Breadcrumb.Item>
                <Breadcrumb.Item href={'/processos'}>Processos</Breadcrumb.Item>
                <Breadcrumb.Item>Criar</Breadcrumb.Item>
            </Breadcrumb>
            <FormProcesso form={form}/>
            <Flex
                align={'right'}
                justify={'right'}
                style={{padding: '25px', marginTop:'-50px'}}
            >
                <Button type={'primary'} size={'large'}>Enviar</Button>
            </Flex>
        </LayoutBasico>
    );
}
