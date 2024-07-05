import React from 'react';
import LayoutBasico from "@/componentes/LayoutBasico.jsx";
import Dragger from "antd/es/upload/Dragger.js";
import { InboxOutlined } from '@ant-design/icons';
import {Button, Flex, message} from "antd";


const Documentos = () => {


    const atributos = {
        name: 'file',
        multiple: true,
        action: 'https://660d2bd96ddfa2943b33731c.mockapi.io/api/upload',
        onChange(info) {
            const { status } = info.file;
            if (status !== 'uploading') {
                console.log(info.file, info.fileList);
            }
            if (status === 'done') {
                message.success(`${info.file.name} file uploaded successfully.`);
            } else if (status === 'error') {
                message.error(`${info.file.name} file upload failed.`);
            }
        },
        onDrop(e) {
            console.log('Dropped files', e.dataTransfer.files);
        },
    };

    return (
      <LayoutBasico titulo={'Documentos'} menu={'documentos'}>
          <Flex justify={'right'} style={{padding:5}}>
              <Button type={'primary'}>Buscar Documento</Button>
          </Flex>
          <Flex justify={'center'} style={{width:'100%'}}>
              <Dragger {...atributos}>
                  <p className="ant-upload-drag-icon">
                      <InboxOutlined />
                  </p>
                  <p className="ant-upload-text">Click or drag file to this area to upload</p>
                  <p className="ant-upload-hint">
                      Support for a single or bulk upload. Strictly prohibited from uploading company data or other
                      banned files.
                  </p>
              </Dragger>
          </Flex>
      </LayoutBasico>
    );
}

export default Documentos;
