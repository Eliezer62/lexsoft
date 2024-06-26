import React, {useState} from 'react';
import {  UserOutlined } from '@ant-design/icons';
import { ConfigProvider, Layout, Menu, theme, Avatar, Image, Flex } from 'antd';
import img from '../../img/logo-nobg.png'
import ptBR from 'antd/locale/pt_BR';
import { VscDashboard } from "react-icons/vsc";
import { GoLaw } from "react-icons/go";
import {IoChatbubbles, IoChatbubblesOutline} from "react-icons/io5";
import { GrGroup, GrDocumentStore } from "react-icons/gr";
import { BiTask } from "react-icons/bi";
import { LiaUserCogSolid } from "react-icons/lia";


const { Content, Sider } = Layout;

const items = [
    {
        label:'Dashboard',
        key:'dashboard',
        icon: <VscDashboard />,
    },
    {
        label:'Processos',
        key:'processos',
        icon: <GoLaw/>
    },
    {
        label: 'Atendimentos',
        key:'atendimentos',
        icon: <IoChatbubbles />,
    },
    {
        label: 'Tarefas',
        key:'tarefas',
        icon: <BiTask/>
    },
    {
        label: 'Clientes',
        key:'clientes',
        icon: <GrGroup/>
    },
    {
        label: 'Documentos',
        key:'documentos',
        icon: <GrDocumentStore />
    },
    {
        label: 'Advogados',
        key:'advogados',
        icon: <LiaUserCogSolid />
    }
];

const LayoutBasico = (props) => {
    const {local, setLocal} = useState();
    const {
        token: { colorBgContainer, borderRadiusLG },
    } = theme.useToken();

    const handleMenu = (e) => {
        window.location = e.key;
    }

    return (
        <ConfigProvider
            locale={ptBR}
        >
            <Layout>
                <Layout>
                    <Sider
                        width={200}
                        breakpoint="lg"
                        collapsedWidth="0"
                        style={{
                            background: '#f5f5f5',
                            border: '5px solid #f9f9f9',
                            fontFamily: 'Roboto'
                        }}
                    >
                        <Flex
                            style={{
                                height: '20%',
                                padding: '10px',
                            }}
                            justify={'center'} align={'center'}
                        >
                            <img src={img} alt="logo" width={75} height={75} />
                            <p className={'logo-nome'}>LEXSOFT</p>
                        </Flex>
                        <Menu
                            mode="inline"
                            defaultSelectedKeys={[props.menu]}
                            style={{
                                height: '70%',
                                borderRight: 0,
                                background: '#f5f5f5'
                            }}
                            items={items}
                            onClick={handleMenu}
                        />
                        <Flex
                            style={{
                                height: '10%',
                                padding: 5,
                                width: '100%',
                                background: '#fff',
                            }}
                            align={'center'}
                            justify={'center'}
                        >
                            <Avatar size={28} icon={<UserOutlined/>}  className='d-inline'/>
                        </Flex>
                    </Sider>
                    <Layout
                        className={'layout'}
                    >
                        <Content
                            style={{
                                padding: 24,
                                margin: 0,
                                minHeight: 280,
                                background: colorBgContainer,
                            }}
                        >
                            <h1 style={{padding:15}}>{props.titulo}</h1>
                            {props.children}
                        </Content>
                    </Layout>
                </Layout>
            </Layout>
        </ConfigProvider>
    );
};

export default LayoutBasico;
