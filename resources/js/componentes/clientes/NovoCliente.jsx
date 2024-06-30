import React, {useState} from 'react';
import {Form, message, Modal, Radio} from 'antd';
import FormsPessoaFisica from "@/componentes/clientes/FormsPessoaFisica.jsx";
import FormsPessoaJuridica from "@/componentes/clientes/FormsPessoaJuridica.jsx";
import axios from "axios";
import dayjs from "dayjs";

const NovoCliente = (props) => {
    const [tipo, setTipo] = useState('fisico');
    const [loading, setLoading] = useState(false);
    const [form] = Form.useForm();

    const enviarNovoCliente =  () => {
        form.validateFields().then(async ()=>{
            setLoading(true);
            let url;
            let cliente = {};
            if(tipo==='fisico')
            {
                cliente.nome = form.getFieldValue('nome');
                if(form.getFieldValue('nome_social'))
                    cliente.nome_social = form.getFieldValue('nome_social');

                cliente.cpf = form.getFieldValue('cpf').replace(/(\d{3})\.(\d{3})\.(\d{3})\-(\d{2})/, '$1$2$3$4');
                cliente.email = form.getFieldValue('email');
                cliente.sexo = form.getFieldValue('sexo');
                cliente.estado_civil = form.getFieldValue('estado_civil');
                if(form.getFieldValue('nome_pai'))
                    cliente.nome_pai = form.getFieldValue('nome_pai');

                if(form.getFieldValue('nome_mae'))
                    cliente.nome_mae = form.getFieldValue('nome_mae');

                cliente.naturalidade = form.getFieldValue('naturalidade');
                cliente.naturalidade_uf = form.getFieldValue('naturalidade_uf');
                cliente.profissao = form.getFieldValue('profissao');
                cliente.data_nascimento = dayjs(form.getFieldValue('data_nascimento')).format('YYYY-MM-DD');
                let rg = {};
                rg.numero = form.getFieldValue('rg_numero');
                rg.data_emissao = dayjs(form.getFieldValue('rg_data_emissao')).format('YYYY-MM-DD');
                rg.emissor = form.getFieldValue('rg_emissor');
                rg.estado = form.getFieldValue('rg_estado');
                const responseRG = await axios({
                    method:'POST',
                    url:'/api/clientesfis/rg',
                    data:rg
                }).then(response => {
                    rg = response.data;
                });
                if(!rg.id) return;
                cliente.rg = rg.id;
                const response = await axios({
                    method:'POST',
                    url:'/api/clientesfis',
                    data:cliente
                }).catch((error)=>{
                    props.erroMsg(error.response.msg);
                });
                setLoading(false);
                if(response.status===201){
                    props.handleCancel();
                    props.sucessoMsg();
                }
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
                    method:'POST',
                    url:'/api/clientesjur',
                    data:cliente
                }).catch((error)=>{
                    props.erroMsg(error.response.msg);
                });
                setLoading(false);
                if(response.status===201){
                    props.handleCancel();
                    props.sucessoMsg();
                }
            }

        });
    }

    return (
        <Modal
            open={props.open}
            title={'Novo Cliente'}
            onOk={enviarNovoCliente}
            onCancel={props.handleCancel}
            destroyOnClose={true}
            confirmLoading={loading}
        >
            <Radio.Group
                style={{margin:10}}
                options={[
                    {label:'Pessoa Física', value:'fisico'},
                    {label:'Pessoa Jurídica', value:'juridica'}
                ]}
                optionType="button"
                onChange={(v)=>setTipo(v.target.value)}
            />
            {tipo=="fisico"?(<FormsPessoaFisica form={form}/>):(<FormsPessoaJuridica form={form}/>)}
        </Modal>
    );
}

export default NovoCliente;
