import React, {useState} from 'react';
import dayjs from "dayjs";
import {Button, Divider, Drawer, Flex, Input, List, message, Popconfirm, Table} from "antd";
import axios from "axios";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import DOMPurify from "dompurify";
import {GrEdit, GrView} from "react-icons/gr";
import DescricaoItem from "@/componentes/DescricaoItem.jsx";
import EditorSimples from "@/componentes/EditorSimples.jsx";

export default function TabelaNegocio(props)
{
    const [pesquisa, setPesquisa] = useState('');
    const [visualizar, setVisualizar] = useState(false);
    const [loadingView, setLoadingView] = useState(true);
    const [negocio, setNegocio] = useState({});
    const [messageApi, context] = message.useMessage();

    const colunas = [
        {
            title:'Descrição',
            key:'descricao',
            dataIndex: 'descricao',
            onFilter: (value, record) => record.descricao.toLowerCase().includes(value.toLowerCase()) || record.data.toLowerCase().includes(value.toLowerCase()) || record.responsavel.toLowerCase().includes(value.toLowerCase()) || record.fase.toLowerCase().includes(value.toLowerCase()),
            sorter: (a, b) => a.descricao.localeCompare(b.descricao),
            filteredValue:[pesquisa],
            render: (value, record) => (
                <p dangerouslySetInnerHTML={{__html: DOMPurify.sanitize(value)}}></p>
            )
        },
        {
            title:'Data',
            key:'data',
            dataIndex: 'data',
            sorter: (a, b) => dayjs(a.data, 'YYYY-MM-DD HH:mm').diff(dayjs(b.data, 'YYYY-MM-DD HH:mm')),
            render: (value, record) => (dayjs(value, 'YYYY-MM-DD HH:mm').format('DD/MM/YYYY HH:mm')),
        },
        {
            title:'Responsável',
            key:'responsavel',
            dataIndex: 'responsavel',
            sorter: (a, b) => a.responsavel?.toLowerCase()?.localeCompare(b.responsavel)
        },
        {
            title:'Fase',
            key:'fase',
            dataIndex: 'fase',
            sorter: (a, b) => a.fase.localeCompare(b.fase)
        },
        {
            title:'Ações',
            fixed:'right',
            render: (_, record) => {
                return (
                    <>
                        <Button onClick={async ()=>{
                            setVisualizar(true);
                            setLoadingView(true);
                            axios.get('/api/negocios/'+record.xid)
                                .then((response) => {
                                    setNegocio(response.data);
                                    setLoadingView(false);
                                })
                        }}
                        ><GrView/></Button>&nbsp;
                        <Button onClick={ async ()=>{

                        }}><GrEdit/></Button>&nbsp;
                        <Popconfirm title={'Remover Negócio'} description={'Tem certeza que deseja remover este negócio?'}
                                    onConfirm={(event)=>{
                                        const msg = messageApi.loading('Removendo negócio');
                                        axios.delete('/api/negocios/'+record.xid)
                                        .then((response) => {
                                            messageApi.destroy(msg.id);
                                            messageApi.success('Negócio removido com sucesso');
                                        }).catch((error)=>{
                                            messageApi.destroy(msg.id);
                                            messageApi.error('Erro em remover o negócio');
                                        })
                                    }}
                        >
                            <Button danger={true}><IoIosRemoveCircleOutline/></Button>
                        </Popconfirm>
                    </>
                )
            }
        }
    ]

    return (
        <>
            {context}
            <Flex justify={'end'} align={'middle'}>
                <Input.Search placeholder={'Pesquisar'}
                              style={{width:'250px', marginRight: '10px'}}
                              onSearch={e=>setPesquisa(e)}
                              onChange={e=>setPesquisa(e.target.value)}
                />
            </Flex>
            <Drawer
                title={'Visualizar negócio'}
                open={visualizar}
                size={'large'}
                onClose={() => setVisualizar(false)}
                loading={loadingView}
            >
                <h3>Descrição:</h3>
                <EditorSimples dados={negocio.descricao ?? ''} disabled={true} onChange={() => {
                }}/>
                <DescricaoItem titulo={'Data'}
                               conteudo={negocio.data ? dayjs(negocio.data, 'YYYY-MM-DD HH:mm')?.format('DD/MM/YYYY HH:mm') : ''}/>
                <DescricaoItem titulo={'Responsável'} conteudo={negocio.responsavel}/>
                <DescricaoItem titulo={'Fase'} conteudo={negocio.fase}/>
                <DescricaoItem titulo={'Prioridade'} conteudo={negocio.prioridade}/>
                <DescricaoItem titulo={'Valor'} conteudo={new Intl.NumberFormat('pt-BR', {
                    currency: 'BRL',
                    style: 'currency'
                }).format(negocio.valor ?? 0)}/>
                <Divider/>
                <h2>Contatos</h2>
                <List
                    itemLayout={'horizontal'}
                    dataSource={negocio.contatos}
                    renderItem={(item) => (
                        <List.Item>
                            <List.Item.Meta
                                title={item.nome}
                                description={
                                    <>
                                        <DescricaoItem titulo={'CPF'} conteudo={item.cpf}/>
                                        <DescricaoItem titulo={'E-MAIL'} conteudo={item.email}/>
                                        {item.telefone.map((tel, index) => (
                                            <>
                                                <DescricaoItem titulo={'Telefone ' + (index + 1)}
                                                               conteudo={`${tel.DDI}(${tel.DDD?.trim()})${tel.numero?.trim()}`}/>
                                            </>
                                        ))}
                                    </>
                                }
                            />
                        </List.Item>
                    )}
                />

                <h2>Contatos Pessoa Jurídica</h2>
                <List
                    itemLayout={'horizontal'}
                    dataSource={negocio.contatosjur}
                    renderItem={(item) => (
                        <List.Item>
                            <List.Item.Meta
                                title={item.razao}
                                description={
                                    <>
                                        <DescricaoItem titulo={'CNPJ'} conteudo={item.cnpj}/>
                                        <DescricaoItem titulo={'E-MAIL'} conteudo={item.email}/>
                                        {item.telefone.map((tel, index) => (
                                            <>
                                                <DescricaoItem titulo={'Telefone ' + (index + 1)}
                                                               conteudo={`${tel.DDI}(${tel.DDD?.trim()})${tel.numero?.trim()}`}/>
                                            </>
                                        ))}
                                    </>
                                }
                            />
                        </List.Item>
                    )}
                />
            </Drawer>
            <Table
                dataSource={props.itens}
                columns={colunas}
                size={'small'}
                pagination={{
                    pageSize: 7
                }}
                loading={props.loading}
            />
        </>
    )
}
