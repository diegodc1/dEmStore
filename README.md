<div>
  <img src="https://imgur.com/S1Ci9KN.png" title="source: imgur.com" />
</div>

## 💻 Projeto 
O objetivo da D&M Store é ser um marketplace de roupas usadas, no estilo OLX. O usuário pode acessar o site e visualizar todos os anúncios de roupas já publicados, e também há a possibilidade de ele anunciar suas prórpias roupas. 


## 🧪 Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

<ul>
  <li>HTML</li>
  
  <li>CSS</li>
  
  <li>Bootstrap 5</li>
  
  <li>JavaScript</li>
  
  <li>PHP</li>

  <li>MySQL</li>
</ul>

## ⚙️ Informações Técnicas

Este projeto foi desenvolvido Orientado a Objetos, utilizando o paradigma de desenvolvimento DAO (Data Access Object). Foi utilizado duas classes principais: Post (classe para as postagens) e Usuario (classe para os usuários), em cada uma foi implementado as classes PostDaoDB e UsuarioDaoDB aonde estão contidas todos os métodos de manipulação no banco de dados.

A verificação de formulários foi feita na parte do Front-End e Back-and. No front, foi utilizado o JavaScript (arquivos: checkFormPost.js e checkFormRegister.js), já no back, foi feita com o próprio PHP (as verificações estão contidos nos arquivos de Ação da pasta 'Actions').

Na parte de banco de dados, foi utilizado o MySQL. No banco, chamado 'dmstore', foi criado duas tabelas: 'users' e 'posts', utilizados para armazenar os dados dos usuários e das postagens, respectivamente. Cada tabela possui um chave primária, em 'users' é a 'user_id' e em 'posts' é a 'post_id'. Na tabela 'posts' há um campo chamado de 'post_user_id' que faz referência (chave estrangeira) ao campo user_id da tabela 'users'. Segue abaixo, o diagrama do banco de dados:

<div>
  <img src="https://imgur.com/Rfxr2cI.png" title="source: imgur.com" width="240" height="180"/>
</div>
 
 


