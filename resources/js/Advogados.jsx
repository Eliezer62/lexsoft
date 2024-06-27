import React, {useEffect, useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";
import {GrEdit, GrFormClose, GrView} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import {Button, Form, message, Modal} from "antd";
import NovoAdvogado from './componentes/advogados/NovoAdvogado';
import axios from "axios";


const colunas = [
    {
        title:'Nome',
        dataIndex:'nome',
        key:'nome',
        sorter: (a, b) => a.nome.localeCompare(b.nome),
        sortDirections: ['descend', 'ascend'],
    },
    {
        title:'CPF',
        dataIndex: 'cpf',
        key:'cpf',
        sorter: (a, b) => parseInt(a) - parseInt(b),
        sortDirections: ['descend', 'ascend'],
    },
    {
        title:'Grupo',
        dataIndex: 'grupo',
        key:'grupo'
    },
    {
        title:'Ações',
        key:'acoes',
        fixed:'right',
        render: (_, record) => {

            return (
                <>
                    <Button><GrView/></Button>&nbsp;
                    <Button><GrEdit /></Button>&nbsp;
                    <Button danger><IoIosRemoveCircleOutline /></Button>
                </>
            );
        }
    }
]

const Advogados = () => {
    const [time, setTime] = useState(Date.now());
    const [openNovoAdv, setOpenNovoAdv] = useState(false);
    const [confirmNovoAdv, setConfirmNovoAdv] = useState(false);
    const [advogados, setAdvogados] = useState([]);
    const [loadingTable, setLoadingTable] = useState(true);
    const [advogado, setAdvogado] = useState({});
    const [form] = Form.useForm();
    const [messageApi, contextHolder] = message.useMessage();

    const adicionar = () =>
    {
        setAdvogado({});
        setOpenNovoAdv(true);
    }

    const cancelar = () =>{
        if(!confirmNovoAdv) {
            setOpenNovoAdv(false);
        }
    }

    const enviarNovoAdv =  () => {
        setConfirmNovoAdv(true);
        form.validateFields().then(async ()=>{
            console.log(advogado);
            const response = await axios({
                method:'POST',
                url:'/api/advogados/',
                data:advogado
            }).catch(e=>{
                const response = e.response;
                messageApi.error('Erro em salvar o advogado: '+response.data.msg);
            });
            if(response.status==201) messageApi.success('Sucesso em salvar advogado');
            setConfirmNovoAdv(false);
            setOpenNovoAdv(false);
        }).catch(e=>{
            setConfirmNovoAdv(false);
        });
    }

    useEffect(() => {
        const getAdvs = async () => {
            const response = await axios.get('/api/advogados');
            setAdvogados(await response.data);
        }

        const interval = setInterval(() => {
            getAdvs();
            setLoadingTable(false);

        }, 3000);

        return () => {
            clearInterval(interval);
        }
    });

    return (
      <LayoutBasico titulo={'Advogados'} menu={'advogados'}>
          <TabelaBase
              coluna={colunas}
              dados={advogados}
              titulo={'Advogados'}
              adicionar={adicionar}
              loading={loadingTable}
          />{contextHolder}
          <NovoAdvogado
            open={openNovoAdv}
            handleCancel={cancelar}
            confirmLoading={confirmNovoAdv}
            handleOk={enviarNovoAdv}
            advogado={advogado}
            setAdvogado={setAdvogado}
            form={form}
          />
      </LayoutBasico>
    );
}

export default Advogados;
