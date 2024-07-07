import React from 'react';
import {Flex, List} from "antd";

const KanBan = (props)=>{

    return (
        <Flex>
            <List
                itemLayout={'horizontal'}
            >
                <List.Item>
                    1
                </List.Item>
                <List.Item>
                    2
                </List.Item>
                <List.Item>
                    3
                </List.Item>
            </List>
        </Flex>
    );
}

export default KanBan;
