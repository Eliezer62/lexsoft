import {useDraggable} from "@dnd-kit/core";
import {CSS} from "@dnd-kit/utilities";
import {Button, Card} from "antd";
import DOMPurify from 'dompurify';
import dayjs from "dayjs";
export default function Item(props)
{
    const {attributes, listeners, setNodeRef, transform} = useDraggable({
        id: props.id,
    });

    const style = {
        // Outputs `translate3d(x, y, 0)`
        transform: CSS.Translate.toString(transform),
        zIndex:'1'
    };

    // @ts-ignore
    return (
        <Card ref={setNodeRef} style={style} {...listeners} {...attributes}>
            <Card.Meta
                title={props.titulo}
                description={
                <>
                    <div style={{inlineSize: '50px', whiteSpace:'pre-wrap', color: '#0091ae', fontWeight: '500', wordBreak:'break-all', overflowWrap: 'break-word'}} dangerouslySetInnerHTML={{__html:DOMPurify.sanitize(props.item.descricao)}}></div>
                    <p><span style={{fontWeight:'500', color: '#595959'}}>Data e Hora: </span>{dayjs(props.item.data).format('DD/MM/YYYY HH:mm')}</p>
                    <p style={{whiteSpace:'pre-wrap'}}><span style={{fontWeight:'500', color: '#595959'}}>Responsável: </span>{props.item.responsavel}</p>
                    <p><span style={{fontWeight:'500', color: '#595959'}}>Prioridade: </span>{props.item.prioridade}</p>
                    <p><span style={{fontWeight: '500', color: '#595959'}}>Valor: </span>{new Intl.NumberFormat('pt-BR', { style: "currency", currency: "BRL" }).format(props.item.valor)}</p>
                    <p><span style={{fontWeight: '500', color: '#595959'}}>Contatos: </span>{(props.item?.contatos?.map(contato =>
                        (<p style={{whiteSpace:'pre-wrap'}}>{contato?.nome}</p>)
                    ))}</p>
                </>
                }
            />
        </Card>
    );
}
