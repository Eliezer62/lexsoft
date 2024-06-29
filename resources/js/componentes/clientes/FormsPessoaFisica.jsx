import React, {useEffect, useState} from 'react';
import {DatePicker, Form, Input, Select} from "antd";
import {MaskedInput} from "antd-mask-input";
import axios from "axios";


const FormsPessoaFisica = (props) => {
    const [sexos, setSexos] = useState([]);
    const [estadoCivil, setEstadoCivil] = useState([]);
    const [naturalidadeUF, setNaturalidadeUF] = useState('');
    const [natualidadeDisponivel, setNaturalidadeDisponivel] = useState(true);
    const [naturalidade, setNaturalidade] = useState([]);

    useEffect(() => {
        const getEstados = async () => {
            let estados = [];
            const response = await axios.get('/api/estados');
            response.data.forEach((e)=>{
                estados.push({label:e.nome, value:e.uf});
            });
            setNaturalidadeUF(estados);
        }

        const getSexos = async  () => {
            let sexos = [];
            const response = await axios.get('/api/sexos');
            response.data.forEach((e)=>{
                sexos.push({label:e.sexo, value:e.id});
            });
            setSexos(sexos);
        }

        const getEstadoCivil = async () => {
            let estados = [];
            const response = await axios.get('/api/estados-civis');
            response.data.forEach((e)=>{
                estados.push({label:e.estado_civil, value:e.id});
            });
            setEstadoCivil(estados);
        }
        getEstados();
        getSexos();
        getEstadoCivil();
    }, []);


    const getCidades = async (uf)=>{
        const response = await axios.get('/api/cidades/'+uf);
        let cidades = [];
        response.data.forEach((cidade)=>{
            cidades.push({label:cidade.nome, value:cidade.id});
        })
        setNaturalidade(cidades);
        setNaturalidadeDisponivel(false);
    }


    return (
        <>
            <Form
                layout={'vertical'}
                preserve={false}
                form={props.form}
            >
                <Form.Item
                    label={'Nome Completo'}
                    name={'nome'}
                    rules={[
                        {required:true, message:'Nome é obrigatório'},
                        {max:60, message:'Tamanho máximo é 60 caracteres'}
                    ]}
                >
                    <Input placeholder={'Nome Completo'}/>
                </Form.Item>

                <Form.Item
                    label={'Nome Social'}
                    name={'nome_social'}
                    rules={[
                        {max:60, message:'Tamanho máximo é 60 caracteres'}
                    ]}
                >
                    <Input placeholder={'Nome Social'}/>
                </Form.Item>

                <Form.Item
                    label={'CPF'}
                    name={'cpf'}
                    rules={[
                        {required:true, message:'CPF é obrigatório'}
                    ]}
                >
                    <MaskedInput mask={'000.000.000-00'}/>
                </Form.Item>

                <Form.Item
                    label={'email'}
                    name={'email'}
                    rules={[
                        {required:true, message:'email é obrigatório'},
                        {type:'email', message:'Insira um email válido'}
                    ]}
                >
                    <Input placeholder={'exemplo@email.com'}/>
                </Form.Item>

                <Form.Item
                    label={'Data de Nascimento'}
                    name={'data_nascimento'}
                    rules={[
                        {required:true, message:'Data de nascimento é obrigatório'}
                    ]}
                >
                    <DatePicker
                        placeholder={'Data de Nascimento'}
                        format={'DD/MM/YYYY'}
                    />
                </Form.Item>

                <Form.Item
                    label={'Nome Pai'}
                    name={'nome_pai'}
                    rules={[
                        {max:60, message:'Tamanho máximo é 60 caracteres'}
                    ]}
                >
                    <Input/>
                </Form.Item>

                <Form.Item
                    label={'Nome Mãe'}
                    name={'nome_mae'}
                    rules={[
                        {max:60, message:'Tamanho máximo é 60 caracteres'}
                    ]}
                >
                    <Input/>
                </Form.Item>

                <Form.Item
                    label={'Profissão'}
                    name={'profissao'}
                    rules={[
                        {required:true, message:'Profissão é obrigatório'},
                        {max:60, message:'Tamanho máximo é 60 caracteres'}
                    ]}
                >
                    <Input/>
                </Form.Item>

                <Form.Item
                    label={'Sexo'}
                    name={'sexo'}
                    rules={[
                        {required:true, message:'Sexo é obrigatório'}
                    ]}
                >
                    <Select
                        placeholder={'Selecione o sexo'}
                        options={sexos}
                    />
                </Form.Item>

                <Form.Item
                    label={'Estado Civil'}
                    name={'estado_civil'}
                    rules={[
                        {required:true, message:'Estado Civil é obrigatório'}
                    ]}
                >
                    <Select
                        placeholder={'Selecione o Estado Civil'}
                        options={estadoCivil}
                    />
                </Form.Item>

                <Form.Item
                    label={'Naturalidade Estado'}
                    name={'naturalidade_uf'}
                    rules={[
                        {required:true, message:'Estado é obrigatório'}
                    ]}
                >
                    <Select
                        placeholder={'Selecione o Estado'}
                        options={naturalidadeUF}
                        showSearch
                        optionFilterProp={'label'}
                        onSelect={(e)=>{
                            getCidades(e);
                        }}
                    />
                </Form.Item>

                <Form.Item
                label={'Naturalidade'}
                name={'naturalidade'}
                rules={[
                    {required:true, message:'Naturalidade é obrigatório'}
                ]}
                >
                    <Select
                        placeholder={'Selecione Estado primeiro'}
                        options={naturalidade}
                        disabled={natualidadeDisponivel}
                        showSearch
                        optionFilterProp={'label'}
                    />
                </Form.Item>
            </Form>
        </>
    )
}

export default FormsPessoaFisica;
