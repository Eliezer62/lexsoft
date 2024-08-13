import React from 'react';
import {Button, Input, List, Modal, Skeleton, message, Popconfirm} from "antd";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import {IoCloudDownloadOutline} from "react-icons/io5";
import axios from "axios";
import {useNavigate} from "react-router-dom";

const BuscarDocumentos = (props) => {
    const [loading, setLoading] = React.useState(false);
    const [documentos, setDocumentos] = React.useState([]);
    const [pesquisa, setPesquisa] = React.useState('');
    const [messageApi, contextholder] = message.useMessage();
    const navigate = useNavigate();


    return (
        <Modal
            open={props.open}
            title={'Buscar Documentos'}
            footer={null}
            destroyOnClose={true}
            onCancel={props.fechar}
        >
            <Input.Search loading={loading} placeholder={'Pesquisar com descrição, cliente (nome, cpf)'} onChange={(valor)=>{setPesquisa(valor.target.value)}}
                          onSearch={async ()=>{
                              setLoading(true);
                              await axios.get('/api/documentos/pesquisa?query='+pesquisa)
                                  .then((resp)=>{
                                      setDocumentos(resp.data);
                                      setLoading(false);
                                  }).catch((err)=>{
                                      if(err.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                                      setLoading(false);
                                      setDocumentos([])
                                  });
                          }}
            />
            <List
                loading={loading}
                itemLayout="horizontal"
                dataSource={documentos}
                renderItem={(item) => (
                    <List.Item
                        actions={[
                            <Button type={'primary'} onClick={()=>{window.open('/api/storage/content/'+item.xid, '_blank').focus()}}><IoCloudDownloadOutline /></Button>,
                            <Popconfirm title={'Remover documento'} description={'Tem certeza que deseja remover o documento?'}
                                        onConfirm={async ()=>{
                                            const msg = messageApi.loading('Removendo documento', 1000000);
                                            await axios.delete('/api/storage/content/'+item.xid)
                                                .then(async (resp)=>{
                                                    messageApi.destroy(msg.id);
                                                    messageApi.success('Documento removido com sucesso');
                                                    setLoading(true);
                                                    await axios.get('/api/documentos/pesquisa?query='+pesquisa)
                                                        .then((resp)=>{
                                                            setDocumentos(resp.data);
                                                            setLoading(false);
                                                        }).catch((err)=>{
                                                            if(err.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                                                            setLoading(false);
                                                            setDocumentos([])
                                                        });
                                                })
                                                .catch((error)=>{
                                                    messageApi.destroy(msg.id);
                                                    if(error.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                                                    messageApi.error('Erro em remover o documento');
                                                });
                                        }}
                            >
                                <Button danger={true} ><IoIosRemoveCircleOutline/></Button>
                            </Popconfirm>
                        ]}
                    >
                        <Skeleton title={false} loading={loading}>
                            <List.Item.Meta
                                title={item.cliente + ' '+item.documento}
                                description={item.descricao}
                            />
                        </Skeleton>
                    </List.Item>
                )}
            >

            </List>
            {contextholder}
        </Modal>
    );
}

export default BuscarDocumentos;
