import React from 'react';
import {Col, Row} from "antd";
import DescricaoItem from "@/componentes/DescricaoItem.jsx";
import dayjs from "dayjs";
import Delimitador from "@/componentes/Delimitador.jsx";


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
                    <DescricaoItem titulo={'E-mail'} conteudo={props.cliente.email}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Data de Nascimento'} conteudo={dayjs(props.cliente.data_nascimento, 'YYYY-MM-DD').format('DD/MM/YYYY').toString()}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Sexo'} conteudo={props.cliente.sexo}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Estado Civil'} conteudo={props.cliente.estado_civil}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Nome do pai'} conteudo={props.cliente.nome_pai}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Nome da mãe'} conteudo={props.cliente.nome_mae}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Profissão'} conteudo={props.cliente.profissao}/>
                </Col>
            </Row>
            <Row>
                <Col span={12}>
                    <DescricaoItem titulo={'Estrangeiro'} conteudo={props.cliente.estrangeiro?'Sim':'Não'}/>
                </Col>
            </Row>
            <Delimitador/>
            {
                (!props.cliente?.estrangeiro)?
                    (<>
                        <Row>
                            <Col span={12}>
                                <DescricaoItem titulo={'Naturalidade'} conteudo={props.cliente?.naturalidade}/>
                            </Col>
                        </Row>
                        <Row>
                            <Col span={12}>
                                <DescricaoItem titulo={'Estado de naturalidade'} conteudo={props.cliente?.naturalidade_uf}/>
                            </Col>
                        </Row>
                        <Row>
                            <Col span={12}>
                                <DescricaoItem titulo={'RG número'} conteudo={props.cliente.rg?.numero}/>
                            </Col>
                        </Row>
                        <Row>
                            <Col span={12}>
                                <DescricaoItem titulo={'RG: emissor'} conteudo={props.cliente.rg?.emissor}/>
                            </Col>
                        </Row>
                        <Row>
                            <Col span={12}>
                                <DescricaoItem titulo={'RG: data de emissão'} conteudo={dayjs(props.cliente.rg?.data_emissao, 'YYYY-MM-DD').format('DD/MM/YYYY')}/>
                            </Col>
                        </Row>
                        <Row>
                            <Col span={12}>
                                <DescricaoItem titulo={'RG: estado'} conteudo={props.cliente.rg?.estado}/>
                            </Col>
                        </Row>
                        <Delimitador/>
                    </>):
                    (null)
            }
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

export default CamposPessoaFisica;
