# Trabalho_crud_av1
Trabalho da matéria de POOW - Prof. Ozeas Nobre

<p align="center">
  <img src="https://img.shields.io/static/v1?label=CSS&message=v2.0.9&color=blue&style=for-the-badge"/>
  <img src="https://img.shields.io/static/v1?label=MYSQL&message=v7.1.8&color=darkblue&style=for-the-badge"/>
  <img src="http://img.shields.io/static/v1?label=License&message=MIT&color=green&style=for-the-badge"/>
  <img src="http://img.shields.io/static/v1?label=HTML5&message=v0.2.1&color= orange&style=for-the-badge"/>
  <img src="http://img.shields.io/static/v1?label=PHP&message=v1.10.4&color=red&style=for-the-badge"/>
   <img src="http://img.shields.io/static/v1?label=STATUS&message=CONCLUIDO&color=GREEN&style=for-the-badge"/>
</p>

> Status do Projeto: :heavy_check_mark: :warning: (Concluído)

### Tópicos 

:small_blue_diamond: [Descrição do projeto](#descrição-do-projeto)

:small_blue_diamond: [Funcionalidades](#funcionalidades)

:small_blue_diamond: [Deploy da Aplicação](#deploy-da-aplicação-dash)

:small_blue_diamond: [Como rodar a aplicação](#como-rodar-a-aplicação-arrow_forward)

... 


## Descrição do projeto 

<p align="justify">
  O projeto tem como objetivo criar um sistema que permite  ao usuário realizar o cadastro o agendamento bem como  o acompanhamento das salas para reuniões. 
</p>

## Funcionalidades

:heavy_check_mark: Cadastramento de novas salas.

:heavy_check_mark: Agendamento de salas disponiveis.

:heavy_check_mark: Acompanhamento do status das salas.

:heavy_check_mark: Escolha o tamanho, capacidade  e os equipamentos para a salas.


  
## Layout ou Deploy da Aplicação :dash:

>http://localhost/trabalho-final/index.php

...


## Como rodar a aplicação :arrow_forward:

Abra o link no hithub, cole o projeto na pasta htdocs do XAMPP em seguida abra  proejeto usando o VSCODE.

```
git clone https://github.com/renatopejon/projeto_av1/edit/main
```

... 

## Iniciando/Configurando banco de dados

SQL para criação do Banco de Dados:
```sql
CREATE TABLE `suahora`.`salas`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(255) NOT NULL,
    `capacidade` INT(40) NOT NULL,
    `tamanho` INT(40) NOT NULL,
    PRIMARY KEY (`id`)
)
ENGINE = InnoDB;
```
## Linguagens, dependencias e libs utilizadas :books:

- [boostrap5](https://getbootstrap.com/)
- [PHP](https://www.php.net/)
- [XAMPP](https://www.apachefriends.org/pt_br/index.html)
- [VSCODE](https://code.visualstudio.com/)

...

## Licença 

The [MIT License]() (MIT)

Copyright :copyright: Ano - Trabalho_crud_av1
