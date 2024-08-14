import React, {useState} from 'react';
import {  UserOutlined } from '@ant-design/icons';
import {ConfigProvider, Layout, Menu, Avatar, theme, Flex, Button, Affix} from 'antd';
import img from '../../img/logo-nobg.png'
import ptBR from 'antd/locale/pt_BR';
import { VscDashboard } from "react-icons/vsc";
import { GoLaw } from "react-icons/go";
import {IoChatbubbles, IoChatbubblesOutline} from "react-icons/io5";
import { GrGroup, GrDocumentStore } from "react-icons/gr";
import { BiTask } from "react-icons/bi";
import { LiaUserCogSolid } from "react-icons/lia";
import Auth from "@/seguranca/Auth.jsx";
import {IoIosLogOut} from "react-icons/io";
import axios from "axios";
import {useNavigate} from "react-router-dom";
import Middleware from '../seguranca/Middleware';

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

const user = JSON.parse(localStorage.getItem('user'));

const LayoutBasico = (props) => {
    const { defaultAlgorithm, darkAlgorithm, useToken } = theme;
    const navigate = useNavigate();
    const {token} = useToken();
    const [noturno, setNoturno] = useState(true);
    const tema = {
        algorithm: noturno ? darkAlgorithm : defaultAlgorithm,
    };


    const handleMenu = (e) => {
        window.location = '/'+e.key;
    }

    return (
        <ConfigProvider
            locale={ptBR}
            theme={tema}
        >
            <Auth/>
            <Middleware/>
            <Layout>
                <Layout>
                    <Affix>
                        <Sider
                            width={200}
                            breakpoint="lg"
                            collapsedWidth="0"
                            style={{
                                background: noturno ? token.darkColorBgBase:'#f5f5f5',
                                border: '5px solid '+(noturno ? '#0000':'#f9f9f9'),
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
                                <p className={'logo-nome'} style={{color: (noturno)?'#fff':'#000'}}>LEXSOFT</p>
                            </Flex>
                            <Menu
                                mode="inline"
                                defaultSelectedKeys={[props.menu]}
                                style={{
                                    height: '70%',
                                    borderRight: 0,
                                    background: noturno ? token.darkColorBgBase:'#f5f5f5'
                                }}
                                items={items}
                                onClick={handleMenu}
                            />
                            <Flex
                                style={{
                                    height: '10%',
                                    padding: 5,
                                    width: '100%',
                                    background: noturno ? token.darkColorBgBase:token.colorBgBase,
                                }}
                                align={'center'}
                                justify={'center'}
                            >
                                <Avatar size={28} icon={<UserOutlined/>}  className='d-inline' onClick={()=>location.href='/perfil'} style={{cursor:'pointer'}}/>
                                <p style={{padding:'5px', color:'#505050', fontStyle: '0.5rem', cursor:'pointer'}} onClick={()=>location.href='/perfil'}>{user?.nome.split(' ')[0]}</p>
                                <Button type={'link'} title={'Sair'} onClick={()=>{
                                    axios.post('/api/auth/logout');
                                    navigate('/login', {state:{anterior:location.pathname}});
                                }}><IoIosLogOut /></Button>
                            </Flex>
                        </Sider>
                    </Affix>
                    <Layout
                        className={'layout'}
                    >
                        <Content
                            style={{
                                padding: 24,
                                margin: 0,
                                minHeight: 280,
                                background: (noturno)?token.darkColorBgContainer:'#fff',
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
