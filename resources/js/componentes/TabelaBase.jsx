import React from 'react';
import {Button, Col, Input, Layout, Row, Table} from 'antd';
import { IoSearch } from "react-icons/io5";


export default function TabelaBase(props)
{

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
                    <Input.Search placeholder={'Pesquisar'} onSearch={(valor)=>{props.pesquisa(valor)}} onChange={(e)=>{props.pesquisa(e.target.value)}}/>
                </Col>
                <Col span={1} offset={6}><Button type={'primary'} onClick={props.adicionar}>Adicionar</Button></Col>
            </Row>
            <Table
                columns={props.coluna}
                dataSource={props.dados}
                size={'small'}
                pagination={
                {
                    pageSize: 7
                }
                }
                loading={props.loading}
            />
        </Layout>
    );
}
