import React, {useState} from 'react';
import {Button, Col, Input, Layout, message, Popconfirm, Row, Select, Table} from 'antd';
import {GrEdit} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import DOMPurify from 'dompurify'
import dayjs from "dayjs";
import EditarTarefas from "@/componentes/tarefas/EditarTarefas.jsx";
import axios from "axios";
import {useNavigate} from "react-router-dom";

export default function TabelaTarefas(props)
{
    const [pesquisa, setPesquisa] = useState('');
    const [openEditarTarefa, setOpenEditarTarefa] = useState(false);
    const [messageApi, contextHolder] = message.useMessage();
    const [tarefa, setTarefa] = useState({});
    const [expandedRowKeys, setExpandedRowKeys] = useState([]);
    const navigate = useNavigate();

    const opcoes = [
        {label:'Nova', value:'nova'},
        {value:'em progresso', label:'Em progresso'},
        {value:'confirmar', label:'Confirmar'},
        {value:'resolvido', label:'Resolvido'},
        {value:'sem solução', label:'Sem solução'}
    ]

    const coluna = [
        {
            title: 'Assunto',
            key:'assunto',
            dataIndex: 'assunto',
            sorter: (a,b) => a.assunto.localeCompare(b.assunto),
            sortDirections: ['descend', 'ascend'],
            filteredValue:[pesquisa],
            onFilter: (value, record) => (
                record.assunto?.toLowerCase().includes(value.toLowerCase()) || record.status?.toLowerCase().includes(value.toLowerCase()) ||
                record.descricao?.toLowerCase().includes(value.toLowerCase()) || record.prazo?.inicio?.startsWith(value)
            )
        },
        {
            title: 'Status',
            key:'status',
            dataIndex: 'status',
            sorter: (a,b) => a.assunto.localeCompare(b.assunto),
            sortDirections: ['descend', 'ascend'],
            render: (item, record) => (<Select options={opcoes} value={record.status} style={{width:'150px'}} onChange={async (e)=>{
                    const m = messageApi.loading('Atualizando o status', 1);
                    await axios.post('/api/tarefas/'+record.xid+'/status', {status:e})
                        .then((resp)=>{
                            messageApi.destroy(m.id);
                            messageApi.success('Status atualizado com sucesso');
                        })
                        .catch((e)=>{
                            if(e.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                            messageApi.destroy(m.id);
                            messageApi.error('Erro em atualizar o status '+e.response.data?.msg);
                        });
            }}/>)
        },
        {
            title: 'Prazo',
            children: [
                {
                    title:'Início',
                    key:'inicio',
                    dataIndex:'prazo',
                    render: item => (item?.inicio)?dayjs(item.inicio, 'YYYY-MM-DD HH:mm').format('DD/MM/YYYY HH:mm'):null,
                    sorter: (a, b) => dayjs(a.prazo.inicio, 'YYYY-MM-DD hh:mi').diff(dayjs(b.prazo.inicio, 'YYYY-MM-DD hh:mi'))
                },
                {
                    title: 'Fim',
                    key:'fim',
                    dataIndex: 'prazo',
                    render: item => (item?.fim)?dayjs(item.fim, 'YYYY-MM-DD HH:mm').format('DD/MM/YYYY HH:mm'):null,
                    sorter: (a, b) => dayjs(a.prazo.fim, 'YYYY-MM-DD hh:mi').diff(dayjs(b.prazo.fim, 'YYYY-MM-DD hh:mi'))
                }
            ]
        },
        {
            title: 'Ações',
            key: 'acoes',
            fixed: 'right',
            render: (text, record) => {
                return (
                    <>
                        <Button title={'Editar'}
                            onClick={()=>{
                                setOpenEditarTarefa(true);
                                setTarefa(record);
                                console.log(tarefa);
                            }}
                        ><GrEdit/></Button>&nbsp;
                        <Popconfirm title={'Remover Tarefa'} description={'Tem certeza que deseja remover essa tarefa?'}
                                    onConfirm={async ()=>{
                                        const m = messageApi.loading('Removendo a tarefa',10000);
                                        await axios.delete('/api/tarefas/'+record.xid)
                                            .then((resp)=>{
                                                messageApi.destroy(m.id);
                                                messageApi.success('Tarefa removida com sucesso');
                                            }).catch((erro)=>{
                                                if(erro.response.status===401) navigate('/login', {state:{anterior:location.pathname}});
                                                messageApi.destroy(m.id);
                                                messageApi.error('Erro em remover a tarefa');
                                            });
                                    }}
                        >
                            <Button title={'Remover'} danger ><IoIosRemoveCircleOutline/></Button>
                        </Popconfirm>
                    </>
                );
            }
        }
    ]

    const cancelar = () => {
        setOpenEditarTarefa(false);
    }

    const mensagemSucesso = (msg) => {
        messageApi.success(msg);
    }

    const mensagemErro = (msg) => {
        messageApi.error(msg);
    }

    return (
        <Layout
            style={{
                borderRadius: 10,
                height:'90%'
            }}
        >
            <Row
                style={{padding:25}}
            >
                <Col span={8} offset={7}>
                    <Input.Search placeholder={'Pesquisar'} onSearch={(valor)=>{setPesquisa(valor)}} onChange={(e)=>{setPesquisa(e.target.value)}}/>
                </Col>
                <Col span={1} offset={6}><Button type={'primary'} onClick={props.adicionar}>Adicionar</Button></Col>
            </Row>
            <Table
                columns={coluna}
                dataSource={props.dados}
                size={'small'}
                pagination={
                    {
                        pageSize: 7
                    }
                }
                loading={props.loading}
                expandable={{
                    expandedRowKeys: expandedRowKeys,
                    expandedRowRender: (record) =>
                        <div
                            style={{
                                margin: 0,
                            }}
                            dangerouslySetInnerHTML={{__html: DOMPurify.sanitize(record.descricao)}}
                        >
                        </div>
                    ,
                    onExpand: (expanded, record) => {
                        const keys = [];
                        if(expanded) keys.push(record.key);
                        setExpandedRowKeys(keys);
                    }
                }}
            />
            {contextHolder}
            <EditarTarefas
                open={openEditarTarefa}
                cancelar={cancelar}
                mensagemSucesso={mensagemSucesso}
                mensagemErro={mensagemErro}
                tarefa={tarefa}
            />
        </Layout>
    );
}
