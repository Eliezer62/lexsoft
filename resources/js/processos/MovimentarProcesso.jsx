import React, {useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import {useParams} from 'react-router-dom';
import {Breadcrumb, Button, DatePicker, Flex, Form, Input, Modal, Row, Table} from "antd";
import {HomeOutlined} from "@ant-design/icons";
import dayjs from "dayjs";

export default function MovimentarProcesso()
{
    const {xid} = useParams();
    const [pesquisa, setPesquisa] = useState('');
    const [novoEvento, setNovoEvento] = useState(true);
    const [form] = Form.useForm();

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
            sorter: (a, b) => a.descricao.localeCompare(b.descricao),
        },
        {
            title:'Data',
            key:'data',
        },
        {
            title:'Prazo',
            children:[
                {
                    title:'Início'
                },
                {
                    title: 'Fim'
                }
            ]
        },
        {
            title:'Ações',
            fixed:'right',
            render: (_, record) => {
                return (
                    <>
                    </>
                )
            }
        }
    ]

    const fechar = () => {
        setNovoEvento(false);
    }


    return (
        <LayoutBasico titulo={'Movimentar Processo'} menu={'processos'}>
            <Breadcrumb items={[
                {title:<HomeOutlined/>, href:'/'},
                {title:'Processos', href:'/processos'},
                {title:'Movimentar'},
            ]}
            />
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
            />
            <Modal
                open={novoEvento}
                title={'Adicionar evento'}
                onCancel={fechar}
                destroyOnClose={true}
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
        </LayoutBasico>
    )
}
