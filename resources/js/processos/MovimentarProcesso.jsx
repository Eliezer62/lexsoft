import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import {useParams} from 'react-router-dom';
import {
    Breadcrumb,
    Button,
    DatePicker,
    Flex,
    Form,
    Input,
    Modal,
    message,
    Table,
    Popover,
    Popconfirm,
    Upload, List, Skeleton
} from "antd";
import {HomeOutlined} from "@ant-design/icons";
import dayjs from "dayjs";
import axios from "axios";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import {MdDriveFolderUpload} from "react-icons/md";
import { UploadOutlined } from '@ant-design/icons';
import {IoCloudDownloadOutline} from "react-icons/io5";
import VincularDocs from "@/componentes/processos/VincularDocs.jsx";
import {useNavigate} from "react-router-dom";


export default function MovimentarProcesso()
{
    const {xid} = useParams();
    const [pesquisa, setPesquisa] = useState('');
    const [novoEvento, setNovoEvento] = useState(false);
    const [form] = Form.useForm();
    const [confirmLoading, setConfirmLoading] = useState(false);
    const [messageApi, context] = message.useMessage();
    const [eventos, setEventos] = useState([]);
    const [intervalo, setIntervalo] = useState(0);
    const [vincularDocs, setVincularDocs] = useState(false);
    const [evento, setEvento] = useState({});
    const navigate = useNavigate();

    const colunas = [
        {
            title: 'id',
            key:'id',
            dataIndex:'ordem',
            filteredValue:[pesquisa],
            onFilter: (value, record) => record.descricao.toLowerCase().includes(value.toLowerCase())
        },
        {
            title:'Descrição',
            key:'descricao',
            dataIndex: 'descricao',
            sorter: (a, b) => a.descricao.localeCompare(b.descricao),
        },
        {
            title:'Data',
            key:'data',
            dataIndex: 'data'
        },
        {
            title:'Prazo',
            children:[
                {
                    title:'Início',
                    key:'inicio',
                    dataIndex:'inicio'
                },
                {
                    title: 'Fim',
                    key:'fim',
                    dataIndex: 'fim'
                }
            ]
        },
        {
            title:'Ações',
            fixed:'right',
            render: (_, record) => {
                return (
                    <>
                        <Button title={'vincular documento'} onClick={()=>{
                            setVincularDocs(true);
                            setEvento(record);
                        }}><MdDriveFolderUpload /></Button>&nbsp;
                        <Popconfirm title={'Remover evento'}
                                    description={'Deseja remover este evento?'}
                                    onConfirm={async ()=>{
                                        const loa = messageApi.loading('Removendo evento');
                                        await axios.delete('/api/processos/'+xid+'/eventos/'+record.xid)
                                            .then(()=>{
                                                messageApi.destroy(loa.id);
                                                messageApi.success('Evento removindo com sucesso');
                                            })
                                            .catch(()=>{
                                                messageApi.destroy(loa.id);
                                                messageApi.error('Erro em remover evento');
                                            });
                                    }}
                        >
                            <Button danger title={'remover'}><IoIosRemoveCircleOutline/></Button>
                        </Popconfirm>
                    </>
                )
            }
        }
    ]

    const fechar = () => {
        setNovoEvento(false);
        setVincularDocs(false);
    }

    const enviar = () => {
        form.validateFields().then(async ()=>{
            setConfirmLoading(true);
            let evento = {};
            evento.descricao = form.getFieldValue('descricao');
            evento.data = dayjs(form.getFieldValue('data'), 'DD/MM/YYYY').format('YYYY-MM-DD');
            let prazo = form.getFieldValue('prazo');
            if(prazo)
            {
                evento.inicio = dayjs(prazo[0], 'DD/MM/YYYY HH:mm').format('YYYY-MM-DD HH:mm');
                evento.fim = dayjs(prazo[1], 'DD/MM/YYYY HH:mm').format('YYYY-MM-DD HH:mm');
            }

            await axios({
                url:'/api/processos/'+xid+'/eventos',
                method:'POST',
                data:evento
            }).then((resp)=>{
                setConfirmLoading(false);
                setNovoEvento(false);
                messageApi.success('Evento salvo com sucesso');
            }).catch((e)=>{
                setConfirmLoading(false);
                if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                else if(e.response.status===403) navigate('/403');
                messageApi.error('Erro em salvar o evento: '+e.response.data?.msg);
            });
        });
        setConfirmLoading(false);
    }

    useEffect(() => {
        const getEventos = async () => {
            await axios.get('/api/processos/'+xid+'/eventos')
                .then((resp)=>{
                    resp.data.forEach(e => {
                        e.data = dayjs(e.data, 'YYYY-MM-DD').format('DD/MM/YYYY');
                        e.inicio = (e.inicio)?dayjs(e.inicio, 'YYYY-MM-DD HH:mm').format('DD/MM/YYYY HH:mm'):null;
                        e.fim = (e.fim)?dayjs(e.fim, 'YYYY-MM-DD HH:mm').format('DD/MM/YYYY HH:mm'):null;
                    });
                    setEventos(resp.data);
                }).catch((e)=>{
                    if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                    else if(e.response.status===403) navigate('/403');
                    messageApi.error('Erro em obter os eventos do processo');
                });
        }
        const intervaloFc = setInterval(()=>{
            getEventos();
            setIntervalo(3000);
        }, intervalo);

        return ()=>{
            clearInterval(intervaloFc);
        }
    });

    return (
        <LayoutBasico titulo={'Movimentar Processo'} menu={'processos'}>
            <Breadcrumb items={[
                {title:<HomeOutlined/>, href:'/'},
                {title:'Processos', href:'/processos'},
                {title:'Movimentar'},
            ]}
            />
            {context}
            <Flex justify={'end'} align={'middle'}>
                <Input.Search placeholder={'Pesquisar'}
                              style={{width:'250px', marginRight: '10px'}}
                              onSearch={e=>setPesquisa(e)}
                              onChange={e=>setPesquisa(e.target.value)}
                />
                <Button type={'primary'} onClick={()=>setNovoEvento(true)}>Movimentar</Button>
            </Flex>
            <br/>
            <Table
                columns={colunas}
                size={'small'}
                dataSource={eventos}
                pagination={{
                    pageSize: 7
                }}
            />
            <Modal
                open={novoEvento}
                title={'Adicionar evento'}
                onCancel={fechar}
                destroyOnClose={true}
                confirmLoading={confirmLoading}
                onOk={enviar}
            >
                <Form
                    form={form}
                    preserve={false}
                    layout={'vertical'}
                >
                    <Form.Item
                        label={'Descrição'}
                        name={'descricao'}
                        rules={[
                            {required:true, message:'Descrição é obrigatório'},
                            {max:255, message:'Tamanho máximo é 255 caracteres'}
                        ]}
                    >
                        <Input/>
                    </Form.Item>
                    <Form.Item
                        label={'Data'}
                        name={'data'}
                        rules={[
                            {required:true, message:'Data do evento é obrigatório'},
                        ]}
                        initialValue={dayjs()}
                    >
                        <DatePicker
                            format={'DD/MM/YYYY'}
                            maxDate={dayjs()}
                        />
                    </Form.Item>

                    <Form.Item
                        label={'Prazo'}
                        name={'prazo'}
                    >
                        <DatePicker.RangePicker
                            showTime
                            format={'DD/MM/YYYY HH:mm'}
                            id={{
                                start: 'inicio',
                                end: 'fim',
                            }}
                        />
                    </Form.Item>
                </Form>
            </Modal>
            <VincularDocs open={vincularDocs}
                          onCancel={fechar}
                          processo={xid}
                          evento={evento.xid}
            />
        </LayoutBasico>
    )
}
