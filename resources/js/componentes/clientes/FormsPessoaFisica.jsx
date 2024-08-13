import React, {useEffect, useState} from 'react';
import {DatePicker, Form, Input, InputNumber, Select} from "antd";
import {MaskedInput} from "antd-mask-input";
import axios from "axios";
import dayjs from "dayjs";
import {useNavigate} from "react-router-dom";

const FormsPessoaFisica = (props) => {
    const [sexos, setSexos] = useState([]);
    const [estadoCivil, setEstadoCivil] = useState([]);
    const [naturalidadeUF, setNaturalidadeUF] = useState('');
    const [natualidadeDisponivel, setNaturalidadeDisponivel] = useState(true);
    const [naturalidade, setNaturalidade] = useState([]);
    const navigate = useNavigate();

    useEffect(() => {
        const getEstados = async () => {
            let estados = [];
            const response = await axios.get('/api/estados')
                .catch((e)=>{
                    if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                });
            response.data.forEach((e)=>{
                estados.push({label:e.nome, value:e.uf});
            });
            setNaturalidadeUF(estados);
        }

        const getSexos = async  () => {
            let sexos = [];
            const response = await axios.get('/api/sexos').catch((e)=>{
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
            });
            response.data.forEach((e)=>{
                sexos.push({label:e.sexo, value:e.id});
            });
            setSexos(sexos);
        }

        const getEstadoCivil = async () => {
            let estados = [];
            const response = await axios.get('/api/estados-civis')
                .catch((e)=>{
                    if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                });
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
        const response = await axios.get('/api/cidades/'+uf)
            .catch((e)=>{
            if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
        });
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
                    initialValue={props.cliente?.nome}
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
                    initialValue={props.cliente?.nome_social}
                    rules={[
                        {max:60, message:'Tamanho máximo é 60 caracteres'}
                    ]}
                >
                    <Input placeholder={'Nome Social'}/>
                </Form.Item>

                <Form.Item
                    label={'CPF'}
                    name={'cpf'}
                    initialValue={props.cliente?.cpf}
                    rules={[
                        {required:true, message:'CPF é obrigatório'}
                    ]}
                >
                    <MaskedInput mask={'000.000.000-00'}/>
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
                    label={'Data de Nascimento'}
                    name={'data_nascimento'}
                    initialValue={props.cliente?.data_nascimento?dayjs(props.cliente?.data_nascimento?.toString(), 'YYYY-MM-DD'):''}
                    rules={[
                        {required:true, message:'Data de nascimento é obrigatório'}
                    ]}
                >
                    <DatePicker
                        placeholder={'Data de Nascimento'}
                        format={'DD/MM/YYYY'}
                        maxDate={dayjs()}
                    />
                </Form.Item>

                <Form.Item
                    label={'Nome Pai'}
                    name={'nome_pai'}
                    initialValue={props.cliente?.nome_pai?.toString()}
                    rules={[
                        {max:60, message:'Tamanho máximo é 60 caracteres'}
                    ]}
                >
                    <Input/>
                </Form.Item>

                <Form.Item
                    label={'Nome Mãe'}
                    name={'nome_mae'}
                    initialValue={props.cliente?.nome_mae?.toString()}
                    rules={[
                        {max:60, message:'Tamanho máximo é 60 caracteres'}
                    ]}
                >
                    <Input/>
                </Form.Item>

                <Form.Item
                    label={'Profissão'}
                    name={'profissao'}
                    initialValue={props.cliente?.profissao}
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
                    initialValue={props.cliente?.sexo}
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
                    initialValue={props.cliente?.estado_civil}
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
                    initialValue={props.cliente?.naturalidade_uf}
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
                initialValue={props.cliente?.naturalidade}
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

                <Form.Item
                    label={'Registro Geral'}
                    style={{backgroundColor: '#fbfbfb', padding:25, borderRadius:20}}
                >
                    <Form.Item
                        label={'Número'}
                        name={'rg_numero'}
                        initialValue={props.cliente?.rg.numero}
                        rules={[
                            {required:true, message:'Número é obrigatório'}
                        ]}
                    >
                        <InputNumber style={{width:'300px'}} min={1}/>
                    </Form.Item>

                    <Form.Item
                        label={'Emissor (SSP/DETRAN/etc)'}
                        name={'rg_emissor'}
                        initialValue={props.cliente?.rg.emissor}
                        rules={[
                            {required:true, message:'Emissor é obrigatório'}
                        ]}
                    >
                        <Input/>
                    </Form.Item>

                    <Form.Item
                        label={'Data de emissão'}
                        name={'rg_data_emissor'}
                        initialValue={props.cliente?.rg.data_emissao?dayjs(props.cliente.rg.data_emissao, 'YYYY-MM-DD'):''}
                        rules={[
                            {required:true, message:'Data de emissão é obrigatório'}
                        ]}
                    >
                        <DatePicker
                            placeholder={'Data de emissão'}
                            format={'DD/MM/YYYY'}
                            maxDate={dayjs()}
                        />
                    </Form.Item>

                    <Form.Item
                        label={'Estado'}
                        name={'rg_estado'}
                        initialValue={props.cliente?.rg.estado}
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
                </Form.Item>
            </Form>
        </>
    )
}

export default FormsPessoaFisica;
