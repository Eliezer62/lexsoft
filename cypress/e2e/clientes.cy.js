const faker = require('faker-br');
import dayjs from 'dayjs';

cy.selectDropdown = function (testId, optionText) {
    cy.get(testId).click();
    return cy
        .get('.ant-select-dropdown :not(.ant-select-dropdown-hidden)')
        .find('.ant-select-item-option')
        .each(el => {
            if (el.text() === optionText) {
                cy.wrap(el).click();
            }
        });
};

cy.selectInput = function (testId, optionText) {
    cy.get(testId).click();
    return cy
        .get('.ant-select-item-option')
        .each(el => {
            if (el.text() === optionText) {
                cy.wrap(el).click();
            }
        });
};

describe('cliente fisico', () => {
    it('Cadastrar cliente físico', () => {
        cy.visit('http://127.0.0.1/clientes');
        cy.get('.ant-btn-primary').click();
        cy.get('#nome').type(faker.name.firstName()+" "+faker.name.lastName());
        cy.get('#cpf').type(faker.br.cpf());
        cy.get("#email").type(faker.internet.email());
        let date = dayjs(faker.date.past(), 'YYYY-MM-DD').format('DD/MM/YYYY');
        cy.get('#data_nascimento').type(date).type('{enter}');
        cy.get('#profissao').type(faker.company.bsAdjective());
        cy.wait(1000);
        cy.selectDropdown('#sexo', 'Masculino');
        cy.selectDropdown('#estado_civil', 'Solteiro');
        cy.get('#naturalidade_uf').type('Paraná');
        cy.selectInput('#naturalidade_uf', 'Paraná');
        cy.wait(3000);
        cy.get('#naturalidade', 'Ponta Grossa');
        cy.selectInput('#naturalidade', 'Ponta Grossa');
    });
} );
