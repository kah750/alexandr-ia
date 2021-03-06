# Especificação de Casos de Uso

## Sumário

- [CDU 01 - Cadastro de Alunos e Professores](#cdu-01---cadastro-de-alunos-e-professores)
- [CDU 02 - Cadastro de Bibliotecários](#cdu-02---cadastro-de-bibliotecários)
- [CDU 03 - Login](#cdu-03---login)
- [CDU 04 - Gerenciamento de Cadastros](#cdu-04---gerenciamento-de-cadastros)
- [CDU 05 - Pesquisa por Livros](#cdu-05---pesquisa-por-livros)
- [CDU 06 - Detalhes do Livro para Alunos e Professores](#cdu-06---detalhes-do-livro-para-alunos-e-professores)
- [CDU 07 - Detalhes do Livro para Bibliotecários](#cdu-07---detalhes-do-livro-para-bibliotecários)
- [CDU 08 - Página de Edição de Informações dos Livros](#cdu-08---página-de-edição-de-informações-dos-livros)
- [CDU 09 - Gerenciamento do Acervo (dos livros)](#cdu-09---gerenciamento-do-acervo-(dos-livros))
- [CDU 10 - Gerenciamento de Empréstimos](#cdu-10---gerenciamento-de-empréstimos)
- [CDU 11 - Atualização de Perfil de Alunos e Professores](#cdu-11---atualização-de-perfil-de-alunos-e-professores)
- [CDU 12 - Atualização de Perfil de Bibliotecários](#cdu-12---atualização-de-perfil-de-bibliotecários)
- [CDU 13 - Lista De Suspenção](#cdu-13---lista-de-suspenção)

## CDU 01 - Cadastro de Alunos e Professores

**Atores:** Alunos e Professores

**Pré-Condições:** Ser aluno ou professor do Cólegio Pedro II, Campus Duque de Caxias.

**Fluxo Principal:**

  1. Usuário informa Matrícula, Nome, Telefone, Turma, E-mail e Senha.
  2. Sistema verifica se o e-mail é válido
    - Se o e-mail já estiver cadastrado no sistema, ele retorna um erro.
    - Se o e-mail for válido o sistema cadastra o Usuário como Aluno/Professor.
    - O usuário se cadastra pela internet, através da página de Login.

## CDU 02 - Cadastro de Bibliotecários

**Atores:** Bibliotecários

**Pré-Condições:** Ser funcionário da biblioteca do Cólegio Pedro II, Campus Duque de Caxias.

**Fluxo Principal:**

  1. Usuário informa Matrícula, Nome, Telefone, Turma, E-mail e Senha.
  2. Sistema verifica se a o e-mail é válido
    - Se o e-mail já estiver cadastrado no sistema, ele retorna um erro.
    - Se o e-mail for válido o sistema cadastra o Usuário como Bibliotecário.
    - Somente Bibliotecário cadastra outro bibliotecário.

## CDU 03 - Login

**Atores:** Alunos, Professores e Biliotecários

**Pré-Condições:** Ser cadastrado no sistema

**Fluxo Principal:**

  1. Usuário informa e-mail e senha.
    - Se os dados informados estiverem de acordo com os registrados no sistema, o usuário recebe permissão de acesso de acordo com o cadastro, indo para a tela inicial das respectivas permissão
      * Bibliotecários recebem as permissões de acesso de Biliotecário.
      * Alunos e Professores recebem as permissões de acesso de Alunos e Professores.

  2. Caso o Usuário tenha esquecido sua senha, será redirecionado para a página de Recuperação através do email informado <!>


## CDU 04 - Gerenciamento de Cadastros

**Atores:** Bibliotecários

**Pré-Condições:** Ser cadastrado no sistema como Bibliotecário e estar logado

**Fluxo Principal:**

  1. Sistema disponibiliza as informações dos Alunos e Professores (exceto a senha), não podendo alterá-las, para visualização.
    - O Bibliotecário tem a possiblidade de excluir o Aluno/Professor do sistema.
    - O Bibliotecário tem a possiblidade de emprestar livros para Aluno/Professor sem que este estejam logado.

  2. O Bibliotecário tem a possiblidade de cadastrar outro(s) Bibliotecário(s) no sistema.

## CDU 05 - Pesquisa por Livros

**Atores:** Alunos, Professores e Bibliotecários

**Pré-Condições:** Ser cadastrado e estar logado

**Fluxo Principal:**

  1. Sistema exibe uma listagem de livros baseado na pesquisa do Usuário, que pode ser feita pelo título, editora ou autor.
    * Caso não haja pesquisa, o sistema exibe a lista de todos os livros.

  2. Caso o usuário selecione um livro, será redirecionado para a Página do Livro (de acordo com sua hierarquia de cadastro).

  3. O Usuário pode filtar a pesquisa pelo tipo de suporte do livro:
      - Audio Livro,
      - CD,
      - DVD,
      - Fonte Ampliada,
      - Histórias em Quadrinhos (HQ),
      - Literatura de Cordel,
      - Livro em Braille,
      - Livro Físico.

## CDU 06 - Detalhes do Livro para Alunos e Professores

**Atores:** Alunos e Professores

**Pré-Condições:** Ser cadastrado no sistema como Aluno ou Professor e estar logado no sistema

**Fluxo Principal:**

  1. Sistema disponibiliza mais detalhes do livro selecionado.
    - Dentre os detalhes, há o de se o livro está ou não disponível.
      * Caso esteja disponível, o usuário poderá reservar o livro.
      * Caso não esteja disponível, o usuário poderá adcionar o livro à lista de desejos.

## CDU 07 - Detalhes do Livro para Bibliotecários

**Atores:** Bibliotecários

**Pré-Condições:** Ser cadastrado no sistema como Bibliotecário e estar logado no sistema

**Fluxo Principal:**

  1. Sistema disponibiliza todos os detalhes do livro selecionado
    - Há a possibilidade de excluir o livro do acervo
    - Caso o usuário queira editar as informações de um livro, ele será redirecionado para a página de Edição de Informações dos Livros.

## CDU 08 - Página de Edição de Informações dos Livros

**Atores:** Bibliotecários

**Pré-Condições:** Ser cadastrado no sistema como Bibliotecário e estar logado no sistema

**Fluxo Principal:**

  1. Usuário informa as alterações que deverão ser feitas nos campos que exibem as informações do livro.
  2. Sistema atualiza as informações do livro a partir das mudanças feitas pelo usuário.

## CDU 09 - Gerenciamento do Acervo (dos livros)

**Atores:** Bibliotecários

**Pré-Condições:** Ser cadastrado no sistema como Bibliotecário e estar logado.

**Fluxo Principal:**

  1. Usuário tem a possibilidade de adicionar novos livros ao acerveo:
    - O usuário reencherá um formulário contendo as informações do livro a ser adcionados.
    - Sistema adcionará o novo livro à coleção de livros, com as informações dadas pelo usuário.

  2. Usuário tem a possibilidade de excluir livros do acerveo.

  3. Usuário tem a possibilidade de alterar as informações dos livros do acerveo.

## CDU 10 - Gerenciamento de Empréstimos

**Atores:** Bibliotecários

**Pré-Condições:** Ser cadastrado no sistema como Bibliotecário e estar logado.

**Fluxo Principal:**

  1. Usuário informa ao sistema se o livro reservado foi retirado ou não:
    * No caso de reservas feitas anteriormente, com quantidade superior aos livros disponíveis, se a quantidade de livros retirados for igual a quantidade existente no acervo, a reserva irá para a lista de desejos.

  2. Ele(a) é quem autoriza que algum livro tenha a data de entrega adiada.
    * De acordo com a lista de espera do livro citado.

## CDU 11 - Atualização de Perfil de Alunos e Professores

**Atores:** Alunos e Professores

**Pré-Condições:** Ser cadastrado no sistema como Aluno ou Professor e estar logado no sistema.

**Fluxo Principal:**

  1. Sistema exibe as informações do Aluno/Professor, com a possiblidade da edição das informações pelo mesmo.
  2. Caso o usuário tenha retirado um livro na biblioteca e ele não esteja em uma lista de desejos, ele poderá solicitar, até 2 vezes, o adiamento da devolução do livro para o Bibliotecário.
    * Estando o livro numa lista de desejos, o pedido de adiamento será negado.
  3. Sistema disponibiliza um botão novidade, que mostra ao usuário um livro aleatoriamente.
  4. As informações desse Usuário poderão ser vizualizadas a qualquer momento pelo bibliotecário, sem poder ser alterados por este.
  5. Sistema exibe os livros pegos emprestados por aquele Aluno/Professor, e/ou a lista de desejos dele.
  6. O usuário tem a possibilidade de adicionar uma foto de perfil.
    * Ou manter o icon padrão do sistema, ou remover a foto de prefil e deixar o icon padrão, e/ou alterar para uma outra foto qualquer escolhida pelo usuário Aluno/Professor.

## CDU 12 - Atualização de Perfil de Bibliotecários

**Atores:** Bibliotecários

**Pré-Condições:** Ser cadastrado no sistema como Bibliotecário e estar logado no sistema.

**Fluxo Principal:**

  1. Sistema exibe as informações do Bibliotecário, com a possiblidade da edição das informações pelo mesmo.
  2. Sistema mostra um painel de controle da biblioteca virtual:
    - Inserir Novo Livro
    - Cadastrar Novo Bibliotecário
    - Gerencias Liste Suspenção
    - Listar Usuários
    - Emprestar Livros
    - Ver Emprestimos

## CDU 13 - Lista De Suspenção

**Atores:** Bibliotecários

**Pré-Condições:** Ser cadastrado no sistema como Bibliotecário e estar logado no sistema

**Fluxo Principal:**

  1. O bibliotecário pode colocar ou tirar Alunos/Professores dessa lista, que poderá ser acessada e alterada através do próprio perfil do bibliotecário.
  2. Essa lista consiste em usuários proibidos de pegar livros emprestados, ainda podendo acessar o sistema.
