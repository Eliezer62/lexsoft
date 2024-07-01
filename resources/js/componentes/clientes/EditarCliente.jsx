import React, {useEffect, useMemo, useState} from 'react';
import {Form, message, Modal, Radio} from 'antd';
import FormsPessoaFisica from "@/componentes/clientes/FormsPessoaFisica.jsx";
import FormsPessoaJuridica from "@/componentes/clientes/FormsPessoaJuridica.jsx";
import axios from "axios";
import dayjs from "dayjs";

const EditarCliente = (props) => {
    const [loading, setLoading] = useState(false);
    const [form] = Form.useForm();

    const enviarCliente =  () => {
        form.validateFields().then(async ()=>{
            setLoading(true);
            let url;
            let cliente = {};
            if(props.cliente.cpf)
            {
                cliente.nome = form.getFieldValue('nome');
                if(form.getFieldValue('nome_social'))
                    cliente.nome_social = form.getFieldValue('nome_social');

                cliente.cpf = form.getFieldValue('cpf').replace(/(\d{3})\.(\d{3})\.(\d{3})\-(\d{2})/, '$1$2$3$4');
                cliente.email = form.getFieldValue('email');
                cliente.sexo = form.getFieldValue('sexo');
                cliente.estado_civil = form.getFieldValue('estado_civil');
                if(form.getFieldValue('nome_pai')!==undefined)
                    cliente.nome_pai = form.getFieldValue('nome_pai');

                if(form.getFieldValue('nome_mae')!==undefined)
                    cliente.nome_mae = form.getFieldValue('nome_mae');

                cliente.naturalidade = form.getFieldValue('naturalidade');
                cliente.naturalidade_uf = form.getFieldValue('naturalidade_uf');
                cliente.profissao = form.getFieldValue('profissao');
                cliente.data_nascimento = dayjs(form.getFieldValue('data_nascimento')).format('YYYY-MM-DD');
                cliente.rg = {};
                cliente.rg.numero = form.getFieldValue('rg_numero');
                cliente.rg.data_emissao = dayjs(form.getFieldValue('rg_data_emissao')).format('YYYY-MM-DD');
                cliente.rg.emissor = form.getFieldValue('rg_emissor');
                cliente.rg.estado = form.getFieldValue('rg_estado');
                const response = await axios({
                        method:'PUT',
                        url:'/api/clientesfis/'+props.cliente.xid,
                        data:cliente
                    }).then((response)=>{
                        setLoading(false);
                        if(response.status===200){
                            props.handleCancel();
                            props.sucessoMsg('Sucesso em atualizar o cliente');
                        }
                    })
                        .catch((error)=>{
                            props.erroMsg(error.response.msg);
                            setLoading(false);
                });
            }
            else
            {
                cliente.razao_social = form.getFieldValue('razao_social');
                cliente.cnpj = form.getFieldValue('cnpj').replace(/(\d{2})\.(\d{3})\.(\d{3})\/(\d{4})\-(\d{2})/, '$1$2$3$4$5');
                cliente.email = form.getFieldValue('email');
                if(form.getFieldValue('nome_fantasia'))
                    cliente.nome_fantasia = form.getFieldValue('nome_fantasia');

                cliente.administrador = form.getFieldValue('administrador');
                const response = await axios({
                    method:'PUT',
                    url:'/api/clientesjur/'+props.cliente.xid,
                    data:cliente
                }).then((response)=>{
                    setLoading(false);
                    if(response.status===200){
                        props.handleCancel();
                        props.sucessoMsg('Sucesso em atualizar o cliente');
                    }
                })
                    .catch((error)=>{
                        props.erroMsg(error.response.msg);
                        setLoading(false);
                    });
            }
        });
    }


    return (
        <Modal
            open={props.open}
            title={'Editar Cliente'}
            onOk={enviarCliente}
            onCancel={props.handleCancel}
            destroyOnClose={true}
            confirmLoading={loading}
            loading={props.loadingModal}
        >
            {props.cliente === "fisico"||props.cliente.cpf?(<FormsPessoaFisica form={form} cliente={props.cliente}/>):(<FormsPessoaJuridica form={form} cliente={props.cliente}/>)}
        </Modal>
    );
}

export default EditarCliente;
