import React, {useState} from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import TabelaBase from "@/componentes/TabelaBase.jsx";
import {GrEdit, GrFormClose, GrView} from "react-icons/gr";
import {IoIosRemoveCircleOutline} from "react-icons/io";
import { Button, Modal } from "antd";
import NovoAdvogado from './componentes/advogados/NovoAdvogado';


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

const teste = [
    {
        'nome':'Eliezer',
        'cpf':'11312199962',
        'grupo':'administrador'
    },
    {
        'nome':'Eliezer',
        'cpf':'11312199962',
        'grupo':'administrador'
    },
    {
        'nome':'Eliezer',
        'cpf':'11312199962',
        'grupo':'administrador'
    },
    {
        'nome':'Eliezer',
        'cpf':'11312199962',
        'grupo':'administrador'
    },
    {
        'nome':'Eliezer',
        'cpf':'11312199962',
        'grupo':'administrador'
    },
    {
        'nome':'Eliezer',
        'cpf':'11312199962',
        'grupo':'administrador'
    },
    {
        'nome':'Eliezer',
        'cpf':'11312199962',
        'grupo':'administrador'
    },
    {
        'nome':'Eliezer',
        'cpf':'11312199962',
        'grupo':'administrador'
    },
    {
        'nome':'Tom',
        'cpf':'11312155914',
        'grupo':'administrador'
    },
    {
        'nome':'Eliezer',
        'cpf':'05814468955',
        'grupo':'administrador'
    },
    {
        'nome':'Luiz',
        'cpf':'11312199962',
        'grupo':'administrador'
    },
    {
        'nome':'Mario',
        'cpf':'11312199962',
        'grupo':'administrador'
    },
]

const Advogados = () => {
    const [openNovoAdv, setOpenNovoAdv] = useState(false);
    const [confirmNovoAdv, setConfirmNovoAdv] = useState(false);

    const adicionar = () =>
    {
        setOpenNovoAdv(true);
    }

    const cancelar = () =>{
        if(!confirmNovoAdv) {
            setOpenNovoAdv(false);
        }
    }

    const enviarNovoAdv = () => {
        setConfirmNovoAdv(true);
    }

    return (
      <LayoutBasico titulo={'Advogados'} menu={'advogados'}>
          <TabelaBase
              coluna={colunas}
              dados={teste}
              titulo={'Advogados'}
              adicionar={adicionar}
          />
          <NovoAdvogado
            open={openNovoAdv}
            handleCancel={cancelar}
            confirmLoading={confirmNovoAdv}
            handleOk={enviarNovoAdv}
          />
      </LayoutBasico>
    );
}

export default Advogados;
