import React, {useEffect, useMemo, useState} from 'react';
import {Form, Input, Select} from "antd";
import {MaskedInput} from "antd-mask-input";
import axios from "axios";
import {useNavigate} from "react-router-dom";

const FormsPessoaJuridica = (props) => {
    const [ adminFis, setAdminFis ] = React.useState(true);
    const [loadingAdmin, setLoadingAdmin] = useState(true);
    const navigate = useNavigate();

    useEffect(() => {
        const getAdmins = async () => {
            let admin = [];
            const response = await axios.get('/api/clientesfis')
                .catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
            });
            response.data.forEach(a=>{
                admin.push({label: a.nome+" CPF:"+a.cpf, value:a.xid, cpf:a.cpf, email:a.email});
            });
            setAdminFis(admin);
            setLoadingAdmin(false);
        }
        getAdmins();
    }, []);

    return (
        <Form
            layout={'vertical'}
            preserve={false}
            form={props.form}
        >
            <Form.Item
                label={'Razão Social'}
                name={'razao_social'}
                initialValue={props.cliente?.razao_social}
                rules={[
                    {required:true, message:'Razão é obrigatório'},
                    {max:255, message:'Tamanho máximo é 255 caracteres'}
                ]}
            >
                <Input placeholder={'Razão Social'}/>
            </Form.Item>

            <Form.Item
                label={'CNPJ'}
                name={'cnpj'}
                initialValue={props.cliente?.cnpj}
                rules={[
                    {required:true, message:'CNPJ é obrigatório'}
                ]}
            >
                <MaskedInput mask={'00.000.000/0000-00'}/>
            </Form.Item>

            <Form.Item
                label={'email'}
                name={'email'}
                initialValue={props.cliente?.email}
                rules={[
                    {required:true, message:'email é obrigatório'},
                    {type:'email', message:'Insira um email válido'}
                ]}
            >
                <Input placeholder={'exemplo@email.com'}/>
            </Form.Item>

            <Form.Item
                label={'Nome Fantasia'}
                name={'nome_fantasia'}
                initialValue={props.cliente?.nome_fantasia}
                rules={[
                    {max:255, message:'Tamanho máximo é 255 caracteres'}
                ]}
            >
                <Input placeholder={'Nome Fantasia'}/>
            </Form.Item>

            <Form.Item
                label={'Administrador'}
                name={'administrador'}
                initialValue={props.cliente?.administrador?.xid}
            >
                <Select
                    placeholder={'Selecione o administrador'}
                    options={adminFis}
                    showSearch={true}
                    filterOption={(entrada, op)=>{
                        return (op.label).toLowerCase().includes(entrada.toLowerCase()) ||
                            (op.cpf).toLowerCase().includes(entrada.toLowerCase()) ||
                            (op.email).toLowerCase().includes(entrada.toLowerCase());
                    }}
                    loading={loadingAdmin}
                />
            </Form.Item>
        </Form>
    )
}

export default FormsPessoaJuridica;
