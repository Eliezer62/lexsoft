import React, {useEffect, useState} from 'react';
import {CKEditor} from "ckeditor4-react";
import {FloatButton} from "antd";
import {QuestionCircleOutlined} from "@ant-design/icons";

export default function Editor(props)
{
    const [edit, setEdit] = useState(null);
    const [setou, setSetou] = useState(false);

    useEffect(() => {
        if(edit && !setou) {
            setSetou(true);
            edit.editor.setData(props.data);
        }
    }, [props.data]);

    const editor = {
        config:{
            extraPlugins:'language'
        },
        editorUrl:'https://cdn.ckeditor.com/4.22.1/full-all/ckeditor.js'
    }

    return (
        <>
            <CKEditor name={'ckEditor'} {...editor}
                      data={props.data}
                      onChange={(event) => props.change(event.editor.getData())}
                      onInstanceReady={(editor) => setEdit(editor)}
            />
            <FloatButton icon={<QuestionCircleOutlined />} type="primary" style={{ insetInlineEnd: 24 }} onClick={()=>window.open("/help/Editor.html", "_blank")} />
        </>
    )
}
