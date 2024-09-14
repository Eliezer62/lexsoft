import React from 'react';
import {Col, Row} from "antd";
import DescricaoItem from "@/componentes/DescricaoItem.jsx";
import dayjs from "dayjs";
import Delimitador from "@/componentes/Delimitador.jsx";

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
            {(props.cliente.administrador)?(
                <>
                    <Delimitador/>
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
            ):(null)
            }

            <Delimitador/>
            {(props.cliente?.telefones)?(<Row><h4 style={{fontSize:'1.2rem'}}>Telefones</h4></Row>):(null)}
            {(props.cliente?.telefones)?.map((telefone, index) => (
                <>
                    <Row>
                        <Col span={12}>
                            <DescricaoItem titulo={'Telefone '+(index+1)} conteudo={`${telefone.ddi} (${telefone.ddd}) ${telefone.numero}`}/>
                        </Col>
                    </Row>
                </>
            ))

            }

            <Delimitador/>
            {(props.cliente?.enderecos)?(<Row><h4 style={{fontSize:'1.2rem'}}>Endereços</h4></Row>):(null)}
            {(props.cliente?.enderecos?.map(endereco => (
                <>
                    <Row>
                        <Col span={12}>
                            <DescricaoItem titulo={'CEP'} conteudo={endereco.cep}/>
                        </Col>
                    </Row>
                    <Row>
                        <Col span={12}>
                            <DescricaoItem titulo={'Logradouro'} conteudo={endereco.logradouro}/>
                        </Col>
                    </Row>
                    <Row>
                        <Col span={12}>
                            <DescricaoItem titulo={'Número'} conteudo={endereco.numero}/>
                        </Col>
                    </Row>
                    <Row>
                        <Col span={12}>
                            <DescricaoItem titulo={'Complemento'} conteudo={endereco.complemento ?? ''}/>
                        </Col>
                    </Row>
                    <Row>
                        <Col span={12}>
                            <DescricaoItem titulo={'Bairro'} conteudo={endereco.bairro}/>
                        </Col>
                    </Row>
                    <Row>
                        <Col span={12}>
                            <DescricaoItem titulo={'Cidade'} conteudo={endereco.cidade}/>
                        </Col>
                    </Row>
                    <Row>
                        <Col span={12}>
                            <DescricaoItem titulo={'Estado'} conteudo={endereco.estado}/>
                        </Col>
                    </Row>
                    <Delimitador/>
                </>
            )))}
        </>
    );
}

export default CamposPessoaJur;
