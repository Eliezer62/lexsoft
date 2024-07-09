import React, {useState} from 'react';
import {Button, Col, Input, Layout, Row, Table} from 'antd';
import {TbStatusChange} from "react-icons/tb";
import {GrEdit} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import DOMPurify from 'dompurify'
import dayjs from "dayjs";


export default function TabelaTarefas(props)
{
    const [pesquisa, setPesquisa] = useState('');

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
                        <Button title={'Alterar Status'}><TbStatusChange/></Button>&nbsp;
                        <Button title={'Editar'}><GrEdit/></Button>&nbsp;
                        <Button title={'Remover'} danger><IoIosRemoveCircleOutline/></Button>
                    </>
                );
            }
        }
    ]

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
                        pageSize: 6
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
        </Layout>
    );
}
