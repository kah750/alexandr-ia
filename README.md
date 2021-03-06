# PROJETO: Alexandr IA
## Projeto Final do Curso Técnico em Informática do Colégio Pedro II – Campus Duque de Caxias – 2018

## Integrantes:

  - Allison Matheus de Oliveira Gomes
  - Carlos Eduardo Valladares da Mota
  - Gabriel Teixeira da Costa
  - Gabriele Gomes Coelho

## Sumário

- [Proposta](#proposta-de-tcc---trabalho-de-conclusão-de-curso)
- [Casos de Uso](#casos-de-uso)
- [Modelagem](#modelagem)
- [Manual](#manual)

## Proposta de TCC - Trabalho de Conclusão de Curso

### Descrição da Proposta
O projeto consiste em computadorizar o sistema de empréstimo de livros da biblioteca do Colégio Pedro II, visando facilitar a organização e manutenção do sistema.

### Stakeholder(s)
Alan (Bibliotecário do Colégio Pedro II - Campus de Caxias)

### Requisitos
[Especificação de Requisitos](https://github.com/cp2-dc-info-projeto-final-2018/requisitos-alexandr-ia/blob/master/requisitos.md)

### Objetivos
- Catalogar os livros e excluí-los;
- Cadastrar alunos/professores e excluir ex-alunos/professores;
- Gerenciar os empréstimos dos livros;
- Definir prazos de entrega dos livros e prorrogações;
- Permitir ao bibliotecário controlar o sistema.

### Especificações
1. O acesso ao sistema seria dado de acordo com a matrícula do aluno/professor ou o código do bibliotecário, dependendo de quem for o utilizador;

    a. Os diferentes utilizadores possuem níveis de acesso ao sistema diferentes e cada um deles possuem seu perfil e ninguém além dos bibliotecários(as) podem acessar o perfil dos alunos(as) e professores(as) cadastrados no sistema;

  	b. Alunos(as): Matrícula, nome, telefone, turma, email e senha (própria);

  	c. Professores(as): Matricula, nome, telefone, email e senha (própria);

  	d. Bibliotecário(a): Matricula, nome, telefone, email e senha (própria);

2. O bibliotecário(a) tem acesso a todas as informações dos alunos(as) e dos livros, tanto se está emprestado ou não e, se sim, com quem e datas de empréstimo  e devolução;

3. O(A) aluno(a)/professor(a) tem acesso a  informações parciais dos livros, mas não a quem está emprestado, caso esteja emprestado mostra que está indisponível no momento. O(A) aluno(a)/professor(a) recebe notificações por email caso esteja próximo da data de entrega do livro emprestado. Ele(a) também pode colocar o livro em uma lista de desejos, onde receberá notificações por email caso o livro esteja disponível.

  	a. Caso algum aluno(a)/professor(a) seja excluído do sistema, pelo bibliotecário por quaisquer motivo, será impedido de acessar o sistema de empréstimos dos livros, o cadastro dele(a) é cancelado.

    b. Caso algum aluno(a)/professor(a) seja punido, por quaisquer motivo, e for impossibilitado de pegar livros emprestados, ainda tem acesso ao sistema, só não pode pegar nem reservar livros.

4. O aluno(a)/professor(a) também pode solicitar o adiamento da data de entrega do livro ao bibliotecário(a).

5. Os livros serão catalogados de acordo com o acervo disponível na biblioteca do campus. Caso algum livro tenha sido danificado ao ponto de não poder ser mais utilizado pela biblioteca, o(a) bibliotecário(a) tem a opção de excluir o livro do acervo até que possam colocar outro no lugar e sendo assim, necessário recadastra-lo. Existindo também a possibilidade de cadastrar novos livros, adicionando-os ao sistema.

6. O aluno(a)/professor(a) tem a possibilidade de pedir novidade, isto é, pedir ao sistema que o mostre um livro aleatoriamente, e tem acesso a lista de livros mais desejados.

## Casos de uso

Diagrama de Casos de Uso:
![Diagrama de Casos de Uso](https://github.com/cp2-dc-info-projeto-final-2018/requisitos-alexandr-ia/blob/master/PNG/DiagramaDeCasosSeUso.png)

[Descrição dos Casos de Uso](https://github.com/cp2-dc-info-projeto-final-2018/requisitos-alexandr-ia/blob/master/casosDeUso.md)

## Modelagem

Diagrama de Classes:
![Diagrama de Classes](https://github.com/cp2-dc-info-projeto-final-2018/requisitos-alexandr-ia/blob/master/PNG/Diagrama%20de%20Classes.png)

Banco de Dados (DED):
![Banco de Dados](https://github.com/cp2-dc-info-projeto-final-2018/requisitos-alexandr-ia/blob/master/PNG/ModelagemDoBancoDeDados.png)

## Manual
[Manual de Utilização](https://github.com/cp2-dc-info-projeto-final-2018/requisitos-alexandr-ia/blob/master/Manual%20de%20Instru%C3%A7%C3%B5es.pdf)
