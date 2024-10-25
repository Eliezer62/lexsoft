import React, {useState} from 'react';
import dayjs from "dayjs";
import {Button, Flex, Input, Popconfirm, Table} from "antd";
import {MdDriveFolderUpload} from "react-icons/md";
import axios from "axios";
import {IoIosRemoveCircleOutline} from "react-icons/io";

export default function TabelaNegocio(props)
{
    const [pesquisa, setPesquisa] = useState('');

    const colunas = [
        {
            title:'Descrição',
            key:'descricao',
            dataIndex: 'descricao',
            onFilter: (value, record) => record.descricao.toLowerCase().includes(value.toLowerCase()),
            sorter: (a, b) => a.descricao.localeCompare(b.descricao),
            filteredValue:[pesquisa],
        },
        {
            title:'Data',
            key:'data',
            dataIndex: 'data',
            sorter: (a, b) => dayjs(a.data, 'DD/MM/YYYY').diff(dayjs(b.data, 'DD/MM/YYYY'))
        },
        {
            title:'Responsável',
            key:'responsavel',
            dataIndex: 'responsavel',
            sorter: (a, b) => a.responsavel.localeCompare(b.responsavel)
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

                    </>
                )
            }
        }
    ]

    return (
        <>
            <Flex justify={'end'} align={'middle'}>
                <Input.Search placeholder={'Pesquisar'}
                              style={{width:'250px', marginRight: '10px'}}
                              onSearch={e=>setPesquisa(e)}
                              onChange={e=>setPesquisa(e.target.value)}
                />
            </Flex>
            <Table
                columns={colunas}
                size={'small'}
                pagination={{
                    pageSize: 7
                }}
            />
        </>
    )
}
