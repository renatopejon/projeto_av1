# Avaliação AV1

<p align="center">
  <img src="https://img.shields.io/static/v1?label=CSS&message=v3.0&color=blue&style=for-the-badge"/>
  <img src="https://img.shields.io/static/v1?label=MariaDB&message=v10.4.32&color=darkblue&style=for-the-badge"/>
  <img src="http://img.shields.io/static/v1?label=License&message=MIT&color=green&style=for-the-badge"/>
  <img src="http://img.shields.io/static/v1?label=HTML5&message=v5.3&color= orange&style=for-the-badge"/>
  <img src="http://img.shields.io/static/v1?label=PHP&message=v8.2.12&color=red&style=for-the-badge"/>
   <img src="http://img.shields.io/static/v1?label=STATUS&message=CONCLUIDO&color=GREEN&style=for-the-badge"/>
</p>

> Status do Projeto: :heavy_check_mark: :warning: (Concluído)

### Tópicos 

:small_blue_diamond: [Descrição do projeto](#descrição-do-projeto)

:small_blue_diamond: [Funcionalidades](#funcionalidades)

:small_blue_diamond: [Layout](#layout)

:small_blue_diamond: [Como rodar a aplicação](#como-rodar-a-aplicação-arrow_forward)

... 


## Descrição do projeto 

<p align="justify">
  O projeto tem como objetivo criar um sistema que permite  ao usuário realizar o cadastro o agendamento bem como  o acompanhamento das salas para reuniões. 
</p>

## Funcionalidades

:heavy_check_mark: Cadastramento, edição e remoção de novas salas.

:heavy_check_mark: Agendamento e cancelamento de salas disponiveis.

:heavy_check_mark: Acompanhamento do status das salas.
  
## Layout:

![Layout da página](https://i.imgur.com/d2jDUud.png)


## Como rodar a aplicação :arrow_forward:

- Crie o banco de dados e as tabelas utilizando a query abaixo
- Clone o repositório na pasta htdocs do XAMPP em seguida abra o navegador em http://localhost/projeto_av1/

```bash
git clone https://github.com/renatopejon/projeto_av1.git
```

... 

## Iniciando/Configurando banco de dados

SQL para criação do Banco de Dados e suas tabelas:
```sql
CREATE DATABASE suahora;

CREATE TABLE `suahora`.`salas`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(255) NOT NULL,
    `capacidade` INT(40) NOT NULL,
    `tamanho` INT(40) NOT NULL,
    `status` TINYINT(1) NOT NULL,
    PRIMARY KEY (`id`)
)
ENGINE = InnoDB;

CREATE TABLE `suahora`.`agendamentos`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(255) NOT NULL,
    `assunto` VARCHAR(255) NOT NULL,
    `sala` VARCHAR(255) NOT NULL,
    `idsala` INT(40) NOT NULL,
    `participantes` INT(40) NOT NULL,
    `dat` DATE NOT NULL,
    `horario` TIME NOT NULL,
    PRIMARY KEY (`id`)
)
ENGINE = InnoDB;
```
## Linguagens, dependencias e libs utilizadas :books:

- [Boostrap](https://getbootstrap.com/)
- [PHP](https://www.php.net/)
- [XAMPP](https://www.apachefriends.org/pt_br/index.html)
- [VSCODE](https://code.visualstudio.com/)

...

## Licença 

The [MIT License]() (MIT)
