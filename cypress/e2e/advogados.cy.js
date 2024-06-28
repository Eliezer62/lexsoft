const faker = require('faker-br');

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
describe('Testar advogado', () => {
  it('Testar cadastrar', () => {

    cy.visit('http://127.0.0.1');
    cy.get('[data-menu-id$=-advogados]').click();
    cy.get('.ant-btn-primary').click();
    cy.get('#nome').type(faker.name.firstName());
    cy.get('#cpf').type(faker.br.cpf());
    cy.get('#email').type(faker.internet.email());
    cy.selectDropdown('#grupo', 'Administrador do sistema');
    cy.get('.ant-modal-footer .ant-btn-primary').click();
    cy.get('.ant-message-success');
  });
  it('Testar editar', ()=>{
      cy.visit('http://127.0.0.1');
      cy.get('[data-menu-id$=-advogados]').click();
      cy.wait(5000);
      cy.get('.ant-btn-default').eq(1).click();
      cy.get('#nome').type(faker.name.lastName());
      cy.get('.ant-modal-footer .ant-btn-primary').click();
      cy.get('.ant-message-success');
  });
  it('Remover advogado', ()=>{
      cy.visit('http://127.0.0.1');
      cy.get('[data-menu-id$=-advogados]').click();
      cy.wait(5000);
      cy.get('.ant-btn-dangerous').eq(1).click();
      cy.get('.ant-popconfirm-buttons .ant-btn-sm').eq(1).click();
      cy.get('.ant-message-success');
  });
});
