# 🚀LaunchExpress

Olá! Seja bem-vindo ao LaunchExpress, uma landing page desenvolvida para facilitar qualquer usuário na criação do seu site

## Sobre

projeto **LaunchExpress** foi criado, para que qualquer pessoa que queria alanvacar a sua idea ou seu negócio.

<img src="imgsReadme/wireframe.png" width="300" />
<img src="imgsReadme/wireframeLight.png" width="300" />

Pontos do projeto:
- Facilidade na criação do projeto
- Formulário funcional
- Design moderno e responsivo
- Perguntas Frequentes (FAQ)

## Ferramentas utilizadas

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL

## Passo a passo de como rodar


``` bash
CREATE DATABASE launchExpress;
```

``` bash
CREATE TABLE chamados(
    -> id_chamado int(11) not null auto_increment primary key,
    -> nome varchar(50) not null,
    -> email varchar(100) not null,
    -> telefone varchar(20) not null,
    -> mensagem text not null,
    -> data_envio timestamp not null default current_timestamp);
```
