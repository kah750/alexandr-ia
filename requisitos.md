# Especificação de Requisitos
## Sumário

- [Requisitos Não-Funcionais](Requisitos-Não---Funcionais)
- [RNF 01](RNF-01)
- [RNF 02](RNF-02)
- [RNF 03](RNF-03)
- [RNF 04](RNF-04)
- [RNF 05](RNF-05)
- [RNF 06](RNF-06)
- [RNF 07](RNF-07)
- [RNF 08](RNF-08)
- [RNF 09](RNF-09)
- [RNF 10](RNF-10)
- [RNF 11](RNF-11)
- [Requisitos Funcionais](Requisitos-Funcionais)
- [RF 01](RF-01)
- [RF 02](RF-02)
- [RF 03](RF-03)
- [RF 04](RF-04)
- [RF 05](RF-05)
- [RF 06](RF-06)
- [RF 07](RF-07)
- [RF 08](RF-08)
- [RF 09](RF-09)
- [RF 10](RF-10)
- [RF 11](RF-11)
- [RF 12](RF-12)
- [RF 13](RF-13)


## Requisitos Não-Funcionais

### RNF 01

-   Deve rodar com muitos alunos(as) ou professores(as) acessando ao mesmo tempo.

### RNF 02

-   Deve cadastrar muitos ao mesmo tempo.

### RNF 03

-   Deve fazer o cadastro, possibilitando o(a) cadastrado(a) fazer login após o cadastro.

### RNF 04

-   Deve ter comunicação e armazenamento instantâneos com o banco de dados.

### RNF 05

-   Deve ter suporte para mais de mil pessoas cadastradas.

### RNF 06   

-   Deve ter suporte para mais de 10 mil livros.

### RNF 07

- Deve rodar 100% do tempo, tendo alta disponibilidade.

### RNF 08    

-   Deve ter acesso à internet com velocidade suficiente para carregar páginas.

### RNF 09    

-   Deve rodar em qualquer plataforma na Web e dispositivos com acesso à internet (celular, tablet e etc).

### RNF 10    

-   Deve ficar fora do ar, caso hajam problemas que façam o sistema ficar ineficaz, até ser consertado.

### RNF 11    

-   Deve utilizar as linguagens: HTML 5, CSS, PHP e JavaScript.


## Requisitos Funcionais

### RF 01
O sistema gerencia cadastro e informações dos livros, de usuários e moderadores.
    
    + Informações do Livro:

        * Informações do sistema quanto a livros:

  	        1. Título;
  	        2. Autor;
  	        3. Aquisição;
  	        4. Observações;
  	        5. Volume;
  	        6. Edição;
  	        7. Editora;
  	        8. Exemplares;
  	        9. Classificação;


    + Informações do Usuário:

        * Informações do sistema quanto a usuários:

  	        1. Nome;
  	        2. Telefone;
  	        3. E-mail;   
  	        4. Senha;

    + Informações do sistema quanto ao moderador:

        * Inf

  	        1. CPF;
  	        2. Nome;
  	        3. Telefone;
	        4. Estado;
	        5. Endereço;
  	        6. E-mail;
  	        7. Senha.

### RF 02
+ Todas as informações do Usuário e dos Livros são guardadas em um banco de dados.

### RF 03
+ O Moderador tem acesso a várias informações, para visualização, de todos os usuários, menos à senha.

### RF 04
+ O Usuário terá acesso somente a suas respectivas informações informando e-mail e senha;

### RF 05
+ O Moderador poderá ter acesso ao sistema informando e-mail e senha. 

### RF 06
+ Livros

    * O Moderador gerencia os livros contidos na biblioteca: catalogando-os, emprestando-os ou excluindo-os dos registros.
    * O Moderador cadastra os livros da biblioteca e as informações são armazenadas em um banco de dados.

### RF 07
+ Os livros, após cadastrados no sistema, possuirão suas informações parcialmente disponibilizadas aos Usuários.
 
### RF 08
+ Os dados do usuário serão coletados pelo algoritmo para uma melhor experiência com a biblioteca.

### RF 09
+ Os livros serão divididos em categorias e subcategorias.

### RF 10
+ O algoritmo fará recomendações por conteúdo baseada em leituras passadas.

### RF 11
+ Os livros mais lidos serão colocados em uma lista nomeada "Em alta", que aparecerá para todos os usuários.
