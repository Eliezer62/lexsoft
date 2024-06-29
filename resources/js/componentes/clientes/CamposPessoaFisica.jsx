import React from 'react';
import {Col, Row} from "antd";
import DescricaoItem from "@/componentes/DescricaoItem.jsx";
import dayjs from "dayjs";


const CamposPessoaFisica = (props) => {
    return (
        <>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Nome'} conteudo={props.cliente.nome}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'CPF'} conteudo={props.cliente.cpf}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'email'} conteudo={props.cliente.email}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Data de Nascimento'} conteudo={dayjs(props.cliente.data_nascimento, 'YYYY-MM-DD').format('DD/MM/YYYY').toString()}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'sexo'} conteudo={props.cliente.sexo}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Estado Civil'} conteudo={props.cliente.estado_civil}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Nome do Pai'} conteudo={props.cliente.nome_pai}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Nome da mãe'} conteudo={props.cliente.nome_mae}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Naturalidade'} conteudo={props.cliente.naturalidade}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Estado de naturalidade'} conteudo={props.cliente.naturalidade_uf}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Profissão'} conteudo={props.cliente.profissao}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'RG número'} conteudo={props.cliente.rg.numero}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'RG: emissor'} conteudo={props.cliente.rg.emissor}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'RG: data de emissão'} conteudo={dayjs(props.cliente.rg.data_emissao, 'YYYY-MM-DD').format('DD/MM/YYYY')}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'RG: estado'} conteudo={props.cliente.rg.estado}/>
                </Col>
            </Row>
        </>

    );
}

export default CamposPessoaFisica;
