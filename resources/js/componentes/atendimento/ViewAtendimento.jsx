import React from 'react';
import {Drawer} from "antd";
import DescricaoItem from "@/componentes/DescricaoItem.jsx";
import dayjs from "dayjs";
import EditorSimples from "@/componentes/EditorSimples.jsx";

const ViewAtendimento = (props) => {

    return (
      <Drawer
          title={'Visualizar atendimento'}
          size={'large'}
          closable={true}
          destroyOnClose={true}
          placement="right"
          open={props.open}
          loading={props.loading}
          onClose={()=>props.close()}
      >
          <DescricaoItem titulo={'Assunto'} conteudo={props.atendimento?.assunto}/>
          <DescricaoItem titulo={'Data'} conteudo={dayjs(props.atendimento?.data, 'YYYY-MM-DD HH:mm').format('DD/MM/YYYY HH:mm')}/>
          <DescricaoItem titulo={'Cliente'} conteudo={props.atendimento?.cliente}/>
          <p>Descrição</p>
          <EditorSimples dados={props.atendimento?.descricao} disabled={true}/>
      </Drawer>
    );
}

export default ViewAtendimento;
