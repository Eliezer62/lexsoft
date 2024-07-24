import React, {useState} from 'react';
import {Button, Flex, Input, List, Modal, Skeleton, Upload} from "antd";
import {UploadOutlined} from "@ant-design/icons";
import {IoCloudDownloadOutline} from "react-icons/io5";
import axios from "axios";
import {IoIosRemoveCircleOutline} from "react-icons/io";

export default function VincularDocs(props){
    const [documentos, setDocumentos] = useState([]);
    const [fileList, setFileList] = useState([]);
    const [confirmarUpload, setConfirmarUpload] = useState(true);

    const upload = {
        showUploadList:false,
        beforeUpload: (file) => {
            setFileList([...fileList, file]);
            return false;
        },
    }

    const handleUpload = () => {

    }

    const removerUpload = (file) => {
        const index = fileList.indexOf(file);
        const newFileList = fileList.slice();
        newFileList.splice(index, 1);
        setFileList(newFileList);
    }

    return (
        <Modal
            title={'Vincular Documento'}
            open={props.open}
            onCancel={props.onCancel}
        >
            <Flex
                justify={'right'}
            >
                <Upload
                    {...upload}
                >
                    <Button icon={<UploadOutlined />} style={{marginRight:'10px'}}>Upload</Button>
                </Upload>
                <Button type={'primary'}>Novo</Button>
            </Flex>
            <List
                itemLayout={'horizontal'}
                dataSource={fileList}
                renderItem={(item) => (
                    <List.Item>
                        {console.log(item)}
                        <Skeleton title={false} loading={false}>
                            <List.Item.Meta
                                title={item.name}
                                description={'Tamanho: '+parseInt(item.size/1024)+' KB'}
                            />
                            <Button danger onClick={()=>removerUpload(item)}><IoIosRemoveCircleOutline/></Button>
                        </Skeleton>
                    </List.Item>
                )}
            >

            </List>
            {fileList.length?(<Flex justify={'right'}>
                <Button type={'primary'}>Enviar</Button>
            </Flex>):(null)}
            <h3>Documentos Vinculados</h3>
            <List
                itemLayout="horizontal"
                dataSource={documentos}
                renderItem={(item) => (
                    <List.Item
                        actions={[
                            <Button type={'primary'} onClick={()=>{window.open('/api/storage/content/'+item.xid, '_blank').focus()}}><IoCloudDownloadOutline /></Button>,
                            <Button danger={true} onClick={async ()=>{
                                let msg = messageApi.loading('Removendo...', 1000);
                                await axios.delete('/api/storage/content/'+item.xid)
                                    .then(async (resp)=>{
                                        messageApi.destroy(msg.id);
                                        messageApi.success('Documento removido com sucesso');
                                        await axios.get('/api/documentos/pesquisa?query='+'eliezer')
                                            .then((resp)=>{
                                                setDocumentos(resp.data);
                                            });
                                    })
                                    .catch((error)=>messageApi.error('Erro em remover o documento'));
                            }}><IoIosRemoveCircleOutline/></Button>
                        ]}
                    >
                        <Skeleton title={false}>
                            <List.Item.Meta
                                title={item.cliente + ' '+item.documento}
                                description={item.descricao}
                            />
                        </Skeleton>
                    </List.Item>
                )}
            >

            </List>
        </Modal>
    );
}
