import React from 'react';
import {Button, Input, List, Modal, Skeleton, message} from "antd";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import {IoCloudDownloadOutline} from "react-icons/io5";
import axios from "axios";


const BuscarDocumentos = (props) => {
    const [loading, setLoading] = React.useState(false);
    const [documentos, setDocumentos] = React.useState([]);
    const [pesquisa, setPesquisa] = React.useState('');
    const [messageApi, contextholder] = message.useMessage();

    const data = [
        {
            title: 'Ant Design Title 1',
            cliente:'Cliente'
        },
        {
            title: 'Ant Design Title 2',
            cliente:'Cliente'
        },
        {
            title: 'Ant Design Title 3',
            cliente:'Cliente'
        },
        {
            title: 'Ant Design Title 4',
            cliente:'Cliente'
        },
    ];

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
                                  }).catch((err)=>{setLoading(false); setDocumentos([])});
                          }}
            />
            <List
                loading={loading}
                itemLayout="horizontal"
                dataSource={documentos}
                renderItem={(item) => (
                    <List.Item
                        actions={[
                            <Button type={'primary'} onClick={()=>location.href='/api/storage/content/'+item.xid}><IoCloudDownloadOutline /></Button>,
                            <Button danger={true} onClick={async ()=>{
                                messageApi.loading('Removendo...', 1);
                                await axios.delete('/api/storage/content/'+item.xid)
                                    .then(async (resp)=>{
                                        messageApi.success('Documento removido com sucesso');
                                        setLoading(true);
                                        await axios.get('/api/documentos/pesquisa?query='+pesquisa)
                                            .then((resp)=>{
                                                setDocumentos(resp.data);
                                                setLoading(false);
                                            }).catch((err)=>{setLoading(false); setDocumentos([])});
                                    })
                                    .catch((error)=>messageApi.error('Erro em remover o documento'));
                            }}><IoIosRemoveCircleOutline/></Button>
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
