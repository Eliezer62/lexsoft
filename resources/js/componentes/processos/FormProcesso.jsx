import React from 'react';
import {Col, DatePicker, Form, Input, InputNumber, Row, Select} from 'antd';
import dayjs from "dayjs";

/**
 * Componente formulário para criar Processo
 * @param props
 * @returns {Element}
 * @constructor
 */
export default function FormProcesso(props){

    return (
        <Form
            title={'Novo Processo'}
            layout={'vertical'}
            form={props.form}
        >
            <div>
                <h3>Dados do processo</h3>
                <Row>
                    <Col className={'item-col'}>
                        <div>
                            <Form.Item
                                label={'Número do Processo (sem máscara)'}
                                name={'numero'}
                                rules={[
                                    {required: true, message: 'Número do processo é obrigatório'},
                                    {max: 20, message: 'Tamanho máximo é 20 caracteres'}
                                ]}
                            >
                                <Input size={20} placeholder={'Número do processo NNNNNN'}/>
                            </Form.Item>
                        </div>
                    </Col>
                    <Col className={'item-col'}>
                        <Form.Item
                            label={'Número do Processo formato CNJ (sem máscara)'}
                            name={'numCNJ'}
                            rules={[
                                {required: true, message: 'Número do processo é obrigatório'}
                            ]}
                        >
                            <Input maxLength={24} placeholder={'Formato NNNNNNNDDAAAAJTROOOO'} onChange={(e)=>{
                                form.setFieldValue('numCNJ', e.target.value.replaceAll(/\./gm, '')
                                    .replaceAll('-', ''));
                            }}/>
                        </Form.Item>
                    </Col>
                </Row>
                <Row>
                    <Col className={'item-col'}>
                        <Form.Item
                            label={'Data de Criação'}
                            name={'data_criacao'}
                            rules={[
                                {required: true, message: 'Data de Criação é obrigatório'},
                                {type:'date', message:'Formato inválido'}
                            ]}
                            initialValue={dayjs()}
                        >
                            <DatePicker format={'DD/MM/YYYY'} maxDate={dayjs()}/>
                        </Form.Item>
                    </Col>
                    <Col className={'item-col'}>
                        <Form.Item
                            label={'Data de Distribuição'}
                            name={'data_distribuicao'}
                            rules={[
                                {type:'date', message:'Formato inválido'}
                            ]}
                        >
                            <DatePicker format={'DD/MM/YYYY'} maxDate={dayjs()}/>
                        </Form.Item>
                    </Col>

                    <Col className={'item-col'}>
                        <Form.Item
                            label={'Prioridade'}
                            name={'prioridade'}
                            initialValue={false}
                        >
                            <Select
                                options={[
                                    {label:'Sim', value:true},
                                    {label:'Não', value:false}
                                ]}/>
                        </Form.Item>
                    </Col>
                    <Col className={'item-col'}>
                        <Form.Item
                            label={'Justiça Gratuita'}
                            name={'justica_gratuita'}
                            initialValue={false}
                        >
                            <Select options={[
                                {label:'Sim', value:true},
                                {label:'Não', value:false}
                            ]}/>
                        </Form.Item>
                    </Col>
                </Row>
                <Row>
                    <Col className={'item-col'}>
                        <Form.Item
                            label={'Valor da Causa'}
                            name={'valor_causa'}
                            rules={[
                                {type:'number', message:'Formato inválido'}
                            ]}
                        >
                            <InputNumber min={0} precision={2} decimalSeparator={','} style={{width:'150px'}}/>
                        </Form.Item>
                    </Col>
                    <Col className={'item-col'}>
                        <Form.Item
                            label={'Valor de Condenação'}
                            name={'valor_condenacao'}
                            rules={[
                                {type:'number', message:'Formato inválido'}
                            ]}
                        >
                            <InputNumber min={0} precision={2} decimalSeparator={','} style={{width:'150px'}}/>
                        </Form.Item>
                    </Col>
                    <Col className={'item-col'}>
                        <Form.Item
                            label={'Instância'}
                            name={'instancia'}
                        >
                            <Select options={[
                                {label:'1ª Instância', value:'1'},
                                {label:'2ª Instância', value:'2'}
                            ]} style={{width:'200px'}}/>
                        </Form.Item>
                    </Col>
                </Row>
                <Row>
                    <Col className={'item-col'}>
                        <Form.Item
                            label={'Classe Judicial'}
                            name={'classe_judicial'}
                        >
                            <Select />
                        </Form.Item>
                    </Col>
                    <Col className={'item-col'}>
                        <Form.Item
                            label={'Tribunal'}
                            name={'tribunal'}
                        >
                            <Select />
                        </Form.Item>
                    </Col>
                </Row>
                <Row>
                    <Col className={'item-col'}>
                        <Form.Item
                            label={'Comarca/Seção/Zona'}
                            name={'tribunal'}
                        >
                            <Input/>
                        </Form.Item>
                    </Col>
                    <Col className={'item-col'}>
                        <Form.Item
                            label={'Vara'}
                            name={'vara'}
                        >
                            <Input/>
                        </Form.Item>
                    </Col>
                </Row>
            </div>
        </Form>
    );
}
