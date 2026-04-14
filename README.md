# 🚀LaunchExpress

Olá! Seja bem-vindo ao LaunchExpress, uma landing page desenvolvida para facilitar qualquer usuário na criação do seu site

## Sobre

projeto **LaunchExpress** foi criado, para que qualquer pessoa que queria alanvacar a sua idea ou seu negócio.

Pontos do projeto:
- Facilidade na criação do projeto
- Formulário funcional
- Design moderno e responsivo
- Perguntas Frequentes (FAQ)
- Acessibilidade

## Ferramentas utilizadas

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL

## Passo a passo de como rodar

### 1º passo:

Clonar o repositório no "XAMPP" ou "WAMP"
dentro da pasta.

``` bash
htdocs/
```

### 2º passo:
Criar o banco de dados no seu SGDB.

``` bash
CREATE DATABASE launchExpress;
```

### 3º passo:
Criar a tabela chamados para poder fazer a inserção dos dados.

``` bash
CREATE TABLE chamados(
id_chamado int(11) not null auto_increment primary key,nome varchar(50) not null,
email varchar(100) not null,
telefone varchar(20) not null,
mensagem text not null,
data_envio timestamp not null default current_timestamp);
```

### 3º passo:
Colocar a url de localhost do seu navegador.
``` bash
http://localhost/teste-frontend-developer/index.php
```
### --> Pronto agora basta ir no formulário da página e solicitar o seu site

## Review do site
<img src="imgsReadme/wireframe.png" width="300" />
<img src="imgsReadme/wireframeLight.png" width="300" />

---

Obrigado por me dar a oportunidade de realizar esse teste.
### Autor: Breno Tadeu.


