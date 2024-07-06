import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import Dragger from "antd/es/upload/Dragger.js";
import { InboxOutlined } from '@ant-design/icons';
import {Button, Flex, Form, Input, message, Modal, Select} from "antd";
import axios from "axios";
import BuscarDocumentos from "@/componentes/documentos/BuscarDocumentos.jsx";



const Documentos = () => {
    const [documento, setDocumento] = useState({});
    const [clientes, setClientes] = useState([]);
    const [form] = Form.useForm();
    const [openSearch, setOpenSearch] = useState(false);

    const atributos = {
        name: 'arquivo',
        multiple: false,
        action: '/storage/upload',
        onChange(info) {
            const { status } = info.file;
            if (status === 'done') {
                message.success(`Arquivo enviado com sucesso.`);
            } else if (status === 'error') {
                message.error(`Envio falhou.`);
            }
        },
        data:documento,

        beforeUpload: async (arquivo)=>{
            let doc = {};
            let valido = false;
            await form.validateFields().then(()=>{
                doc.descricao = form.getFieldValue('descricao');
                doc.cliente = form.getFieldValue('cliente');
                doc.tipo = clientes.find(e => e.value === form.getFieldValue('cliente')).tipo;
                valido = true;
            });
            setDocumento(doc);
            return valido;
        }
    };

    useEffect(() => {
        const getClientes = async () => {
            const response = await axios.get('/api/clientes').then((resp)=>{
                let temp = [];
                resp.data.forEach(c => {
                    temp.push({label:c.nome+' '+c.documento, value:c.xid, tipo:c.tipo});
                });
                setClientes(temp);
            });
        }

        const interval = setInterval(() => {
            getClientes();

        }, 3000);

        return () => {
            clearInterval(interval);
        }
    });

    return (
      <LayoutBasico titulo={'Documentos'} menu={'documentos'}>
          <Flex justify={'right'} style={{padding:5}}>
              <Button type={'primary'} onClick={()=>setOpenSearch(true)}>Buscar Documento</Button>
          </Flex>

         <Flex justify={'center'}>
             <Form
                preserve={false}
                layout={'vertical'}
                form={form}
             >
                 <Form.Item
                    label={'Descrição'}
                    name={'descricao'}
                    style={{width:'50vw'}}
                    rules={[
                        {required:true, message:'Descrição é obrigatório'},
                        {max:255, message:'Tamanho máximo é 255 caracteres'}
                    ]}
                 >
                    <Input/>
                 </Form.Item>

                 <Form.Item
                     label={'Cliente'}
                     style={{width:'50vw'}}
                     name={'cliente'}
                     rules={[
                         {required:true, message:'Cliente é obrigatório'}
                     ]}
                 >
                     <Select
                         options={clientes}
                     />
                 </Form.Item>
             </Form>
         </Flex>

          <Flex justify={'center'} style={{width:'100%'}}>

              <Dragger {...atributos}>
                  <p className="ant-upload-drag-icon">
                      <InboxOutlined />
                  </p>
                  <p className="ant-upload-text">Clique ou solte o arquivo nesta área para enviar</p>
                  <p className="ant-upload-hint">
                      Antes de enviar o arquivo preencha o formulário, caso contrário, o arquivo não será enviado
                  </p>
              </Dragger>
          </Flex>
          <BuscarDocumentos open={openSearch} fechar={()=>setOpenSearch(false)}/>
      </LayoutBasico>
    );
}

export default Documentos;
