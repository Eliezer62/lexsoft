import React from 'react';
import {Col, Row} from "antd";
import DescricaoItem from "@/componentes/DescricaoItem.jsx";
import dayjs from "dayjs";

const CamposPessoaJur = (props) => {

    return (
        <>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Razão Social'} conteudo={props.cliente.razao_social}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'CNPJ'} conteudo={props.cliente.cnpj}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Nome Fantasia'} conteudo={props.cliente.nome_fantasia}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'email'} conteudo={props.cliente.email}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <h3 style={{margin:10}}>Administrador</h3>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Nome'} conteudo={props.cliente.administrador.nome}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'CPF'} conteudo={props.cliente.administrador.cpf}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'email'} conteudo={props.cliente.administrador.email}/>
                </Col>
            </Row>
        </>
    );
}

export default CamposPessoaJur;
