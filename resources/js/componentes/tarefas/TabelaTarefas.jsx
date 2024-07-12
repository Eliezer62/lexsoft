import React, {useState} from 'react';
import {Button, Col, Input, Layout, message, Row, Select, Table} from 'antd';
import {TbStatusChange} from "react-icons/tb";
import {GrEdit} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import DOMPurify from 'dompurify'
import dayjs from "dayjs";
import EditarTarefas from "@/componentes/tarefas/EditarTarefas.jsx";
import axios from "axios";


export default function TabelaTarefas(props)
{
    const [pesquisa, setPesquisa] = useState('');
    const [openEditarTarefa, setOpenEditarTarefa] = useState(false);
    const [messageApi, contextHolder] = message.useMessage();
    const [tarefa, setTarefa] = useState({});

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
            render: (item, record) => (<Select options={[
                    {label:'Nova', value:'nova'},
                    {value:'em progresso', label:'Em progresso'},
                    {value:'confirmar', label:'Confirmar'},
                    {value:'resolvido', label:'Resolvido'},
                    {value:'sem solução', label:'Sem solução'}
                ]} defaultValue={item} style={{width:'150px'}} onChange={async (e)=>{
                    const m = messageApi.loading('Atualizando o status', 1);
                    await axios.post('/api/tarefas/'+record.xid+'/status', {status:e})
                        .then((resp)=>{
                            messageApi.destroy(m.id);
                            messageApi.success('Status atualizado com sucesso');
                        })
                        .catch((e)=>{
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
                },
                {
                    title: 'Fim',
                    key:'fim',
                    dataIndex: 'prazo',
                    render: item => (item?.fim)?dayjs(item.fim, 'YYYY-MM-DD HH:mm').format('DD/MM/YYYY HH:mm'):null,
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
                        <Button title={'Remover'} danger onClick={async ()=>{
                            const m = messageApi.loading('Removendo a tarefa',1);
                            console.log('/api/tarefas/'+record.xid);
                            await axios.delete('/api/tarefas/'+record.xid)
                                .then((resp)=>{
                                    messageApi.destroy(m.id);
                                    messageApi.success('Tarefa removida com sucesso');
                                }).catch((erro)=>{
                                    messageApi.destroy(m.id);
                                    messageApi.error('Erro em remvoer a tarefa');
                                });
                        }}><IoIosRemoveCircleOutline/></Button>
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
                        pageSize: 4
                    }
                }
                loading={props.loading}
                expandable={{
                    expandedRowRender: (record) => (
                        <div
                            style={{
                                margin: 0,
                            }}
                            dangerouslySetInnerHTML={{__html: DOMPurify.sanitize(record.descricao)}}
                        >
                        </div>
                    ),
                    rowExpandable: (record) => record.name !== 'Not Expandable',
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
