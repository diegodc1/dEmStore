<div>
  <img src="https://imgur.com/S1Ci9KN.png" title="source: imgur.com" />
</div>

## 💻 Projeto 
O objetivo da D&M Store é ser um marketplace de roupas usadas, no estilo OLX. O usuário pode acessar o site e visualizar todos os anúncios de roupas já publicados, e também há a possibilidade de ele anunciar suas prórpias roupas.

*Projeto desenvolvido para o trabalho prático da disciplina de Desenvolvimento WEB I da Universidade Federal do Paraná 🏛*

*Obs.: Para navegação no site, por questões de dados já incluídos no banco de dados, recomendamos acessar através do link disponível no final deste documento.*


## 🧪 Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:
  
  * CSS
  * Bootstrap 5
  * JavaScript
  * PHP
  * MySQL

## ⚙️ Informações Técnicas

Este projeto foi desenvolvido Orientado a Objetos, utilizando o paradigma de desenvolvimento DAO (Data Access Object). Foi utilizado duas classes principais: Post (classe para as postagens) e Usuario (classe para os usuários), em cada uma foi implementado as classes PostDaoDB e UsuarioDaoDB aonde estão contidas todos os métodos de manipulação no banco de dados.

A verificação de formulários foi feita na parte do Front-End e Back-and. No front, foi utilizado o JavaScript (arquivos: checkFormPost.js e checkFormRegister.js), já no back, foi feita com o próprio PHP (as verificações estão contidos nos arquivos de Ação da pasta 'Actions').

Na parte de banco de dados, foi utilizado o MySQL. No banco, chamado **dmstore**, foi criado duas tabelas: ***users*** e ***posts***, utilizados para armazenar os dados dos usuários e das postagens, respectivamente. Cada tabela possui um chave primária, em ***users*** é a ***user_id*** e em ***posts*** é a ***post_id***. Na tabela ***posts*** há um campo chamado de ***post_user_id*** que faz referência (chave estrangeira) ao campo ***user_id*** da tabela ***users***. Segue abaixo, o diagrama do banco de dados:

<div>
  <img src="https://imgur.com/Rfxr2cI.png" title="source: imgur.com" width="420" height="310"/>
</div>
 
 ## 🛠 Funcionalidades
 
   * Cadastro de Usuário
     * Mascara de telefone, no campo telefone
     * Busca de endereço automática, basta o usuário colocar um CEP válido que o sistema irá preencher os outros campos automaticamente.
  *  Login
  *  Log-out
  *  Cadastrar anúncio
  *  Excluir Anúncio
     * Com modal de confirmação
  *  Atualizar dados pessoais
  *  Atualizar Senha
  *  Verificação em todos os forms
  * Quantidade de visualizações de cada anúncio
    * Cada post há a uma quantidade de visualizações, essa quantidade é aumentada toda vez que um usuário entra em um post, no entanto, se o usuário for o dono do        anúncio essa contagem não é aumentada.
  *  Busca por categoria (Masculino, Feminino, Infantil, etc..)
  *  Informações de hora e data de postagem de cada anúncio
  *  Anúncios Destaques
 
## 🔗 Link
* <a href="https://demstorebr.000webhostapp.com">Clique aqui</a>
*Obs.: Hospedagem feita na 000webhost.
 
 
 


