# Dashboard para Salão de Cabeleireiro - README

## Descrição

Este projeto é um sistema de gerenciamento desenvolvido para um salão de cabeleireiro. Ele foi implementado em PHP e visa facilitar o processo de agendamento de serviços, gerenciamento de clientes e controle de serviços prestados no salão. O sistema possui um conjunto completo de funcionalidades para administração, incluindo a possibilidade de cadastrar, editar, validar e pesquisar informações sobre clientes e serviços, além de aprovar ou recusar agendamentos.

O projeto foi desenvolvido para ser hospedado na nuvem, especificamente na AWS (Amazon Web Services), com um banco de dados que armazena todas as informações relacionadas aos agendamentos, clientes e serviços.

## Funcionalidades

- **Cadastro de Clientes**: O administrador pode cadastrar novos clientes no sistema, incluindo dados como nome, telefone, e-mail e outras informações relevantes.
- **Agendamentos**: Os clientes podem agendar serviços, e o administrador pode aprovar ou recusar esses agendamentos.
- **Cadastro e Edição de Serviços**: O administrador pode cadastrar novos serviços (ex.: corte de cabelo, manicure, etc.) e editar os existentes.
- **Validação de Serviços**: Antes de um serviço ser oferecido, ele pode ser validado pelo administrador.
- **Pesquisa de Clientes e Agendamentos**: Funcionalidade de pesquisa rápida para localizar clientes e visualizar os agendamentos realizados.
- **Interface de Administração**: Uma interface simples em HTML, onde o administrador pode gerenciar todas as funcionalidades acima.

## Tecnologias Utilizadas

- **Backend**: PHP
- **Frontend**: HTML, CSS (utilizado para criação da interface de administração)
- **Banco de Dados**: MySQL
- **Serviços de Hospedagem**: HostGator
- **Servidor Web**: Apache

## Estrutura do Projeto

```plaintext
/ (raiz do projeto)
├── /assets/                # Arquivos estáticos (CSS, JS, imagens)
├── /config/                # Arquivos de configuração (ex: conexões com banco)
├── /controllers/           # Arquivos PHP que gerenciam a lógica do sistema
├── /models/                # Modelos PHP (representações das tabelas do banco de dados)
├── /views/                 # Arquivos HTML, exibição de interfaces
├── /index.php              # Página principal do sistema (dashboard)
└── /db/                    # Arquivos relacionados ao banco de dados
