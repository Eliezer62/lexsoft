import React, {useEffect, useState} from 'react';
import {Form, Input, InputNumber, Modal, message, Select} from "antd";
import {MaskedInput} from 'antd-mask-input';
import axios from 'axios';

const NovoAdvogado = (props) => {
    const [messageApi, contextHolder] = message.useMessage();
    const [estados, setEstados] = useState([]);
    const [grupousuarios, setGrupoUsuarios] = useState([]);

    useEffect( ()=>{
       const getEstados = async () => {
           const response = await axios.get('/api/estados').catch((e)=>{
               messageApi.error('Erro em obter dados');
           })
           let dados = [];
           await response.data.map(e => {
               dados.push({value:e.uf, label:e.nome})
           });
           setEstados(dados);
       }
       const getGrupos = async () => {
           const response = await axios.get('/api/grupo-usuarios')
               .catch(e=>{messageApi.error('Erro em obter dados: '+e.message)});
           let dados = [];
           response.data.map(e => {
               dados.push({value:e.grupo, label:e.descricao});
           });
           setGrupoUsuarios(dados);
       }

       getEstados();
       getGrupos();

    }, props.open);
    return (
      <Modal
          title={'Novo Advogado'}
          open={props.open}
          onOk={props.handleOk}
          onCancel={props.handleCancel}
          confirmLoading={props.confirmLoading}
          destroyOnClose={true}
      >
          {contextHolder}
        <Form
            layout={'vertical'}
        >
            <Form.Item
                label={'Nome Completo'}
                name={'nome'}
                rules={[
                    { required: true, message: 'Nome é obrigatório' },
                    {max: 60, message:'Tamanho máximo é de 60 caracteres'}
                ]}
            >
                <Input placeholder={'Nome Completo'}/>
            </Form.Item>

            <Form.Item
                label={'CPF'}
                name={'cpf'}
                rules={[{ required: true, message: 'CPF é obrigatório',type:'regexp', pattern:new RegExp('/^\\d{3}\\.\\d{3}\\.\\d{3}\\-\\d{2}$/\n') }]}
            >
                <MaskedInput mask={'000.000.000-00'}/>
            </Form.Item>

            <Form.Item
                label={'email'}
                name={'email'}
                rules={[
                    { required: true, message: 'E-mail é obrigatório' , type:'email'},
                    {max: 255, message:'Tamanho máximo é de 255 caracteres'}
                ]}
            >
                <Input placeholder={'exemplo@email.com'}/>
            </Form.Item>

                <Form.Item
                    label={'OAB'}
                    name={'oab'}
                >
                    <InputNumber size={6} max={999999} min={1}/>
                </Form.Item>

                <Form.Item
                    label={'Estado do OAB'}
                    name={'uf_oab'}
                >
                    <Select options={estados}/>
                </Form.Item>

                <Form.Item
                    label={'Grupo de usuário'}
                    name={'grupo'}
                    rules={[
                        {required:true, message:'Grupo é obrigatório'}
                    ]}
                >
                    <Select options={grupousuarios}/>
                </Form.Item>

        </Form>
      </Modal>
    );
}

export default NovoAdvogado;
