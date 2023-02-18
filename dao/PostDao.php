<?php
require_once('../models/Post.php');

class PostDaoDB implements PostDao {
  private $pdo;

  public function __construct(PDO $driver) {
    $this->pdo = $driver;
  }

  public function add(Post $u){
    $sql = $this->pdo->prepare("INSERT INTO posts (post_title, post_content, post_category, post_user_id, post_date, post_time, post_views, post_status, post_price, post_img_path) VALUES (:title, :content, :category, :userId, :postDate, :postTime, :views, :status, :price, :imgPath)");

    $sql->bindValue(":title", $u->getTitle());
    $sql->bindValue(":content", $u->getContent());
    $sql->bindValue(":category", $u->getCategory());
    $sql->bindValue(":userId", $u->getUserId());
    $sql->bindValue(":postDate", $u->getDate());
    $sql->bindValue(":postTime", $u->getTime());
    $sql->bindValue(":views", $u->getViews());
    $sql->bindValue(":status", $u->getStatus());
    $sql->bindValue(":price", $u->getPrice());
    $sql->bindValue(":imgPath", $u->getImgPath());

    
    $sql->execute();

    $u->setId($this->pdo->lastInsertId());
    return $u;
  }

  public function findAll(){
    $posts = [];

    $sql = $this->pdo->query("SELECT * FROM posts ORDER BY post_date, post_time DESC");
    if ($sql->rowCount() > 0) {
      $data = $sql->fetchAll();

      foreach ($data as $post) {
        $u = new Post;
        $u->setId($post['post_id']);
        $u->setTitle($post['post_title']);
        $u->setContent($post['post_content']);
        $u->setCategory($post['post_category']);
        $u->setUserId($post['post_user_id']);
        $u->setDate($post['post_date']);
        $u->setTime($post['post_time']);
        $u->setViews($post['post_views']);
        $u->setStatus($post['post_status']);
        $u->setPrice($post['post_price']);
        $u->setImgPath($post['post_img_path']);
  

        $posts[] = $u;
      }
    }
    return $posts;
  }

  public function findAllByCategory($category, $category2){
    $posts = [];

    $sql = $this->pdo->query("SELECT * FROM posts WHERE post_category LIKE '$category' OR post_category LIKE '$category2' ORDER BY  post_date, post_time DESC ");
    if ($sql->rowCount() > 0) {
      $data = $sql->fetchAll();

      foreach ($data as $post) {
        $u = new Post;
        $u->setId($post['post_id']);
        $u->setTitle($post['post_title']);
        $u->setContent($post['post_content']);
        $u->setCategory($post['post_category']);
        $u->setUserId($post['post_user_id']);
        $u->setDate($post['post_date']);
        $u->setTime($post['post_time']);
        $u->setViews($post['post_views']);
        $u->setStatus($post['post_status']);
        $u->setPrice($post['post_price']);
        $u->setImgPath($post['post_img_path']);
  

        $posts[] = $u;
      }
    }
    return $posts;
  }

  public function findLastFourPost(){
    $posts = [];

    $sql = $this->pdo->query("SELECT * FROM posts ORDER BY post_date LIMIT 4");
    if ($sql->rowCount() > 0) {
      $data = $sql->fetchAll();

      foreach ($data as $post) {
        $u = new Post;
        $u->setId($post['post_id']);
        $u->setTitle($post['post_title']);
        $u->setContent($post['post_content']);
        $u->setCategory($post['post_category']);
        $u->setUserId($post['post_user_id']);
        $u->setDate($post['post_date']);
        $u->setTime($post['post_time']);
        $u->setViews($post['post_views']);
        $u->setStatus($post['post_status']);
        $u->setPrice($post['post_price']);
        $u->setImgPath($post['post_img_path']);
  

        $posts[] = $u;
      }
    }
    return $posts;
  }

  public function findById($id){
    $sql = $this->pdo->prepare("SELECT * FROM posts WHERE post_id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
      $data = $sql->fetch();

      $u = new Post;
      $u->setId($data['post_id']);
      $u->setTitle($data['post_title']);
      $u->setContent($data['post_content']);
      $u->setCategory($data['post_category']);
      $u->setUserId($data['post_user_id']);
      $u->setDate($data['post_date']);
      $u->setTime($data['post_time']);
      $u->setViews($data['post_views']);
      $u->setStatus($data['post_status']);
      $u->setPrice($data['post_price']);
      $u->setImgPath($data['post_img_path']);


      return $u;
    } else {
      return false; 
    }
  }

  public function findByUserId($id){
    $posts = [];

    $sql = $this->pdo->query("SELECT * FROM posts WHERE post_user_id = $id");
    if ($sql->rowCount() > 0) {
      $data = $sql->fetchAll();

      foreach ($data as $post) {
        $u = new Post;
        $u->setId($post['post_id']);
        $u->setTitle($post['post_title']);
        $u->setContent($post['post_content']);
        $u->setCategory($post['post_category']);
        $u->setUserId($post['post_user_id']);
        $u->setDate($post['post_date']);
        $u->setTime($post['post_time']);
        $u->setViews($post['post_views']);
        $u->setStatus($post['post_status']);
        $u->setPrice($post['post_price']);
        $u->setImgPath($post['post_img_path']);
  

        $posts[] = $u;
      }
    }
    return $posts;
  }

  public function update(Post $u){}

  public function delete($id){
    $sql = $this->pdo->prepare("DELETE FROM posts WHERE post_id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute(); 
  }

  public function disable($id){
    $sql = $this->pdo->prepare("UPDATE posts SET post_status = :status WHERE post_id = :id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':status', 'Desativado');
    $sql->execute(); 
  }

  public function activate($id){
    $sql = $this->pdo->prepare("UPDATE posts SET post_status = :status WHERE post_id = :id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':status', 'Ativado');
    $sql->execute(); 
  }

  
  public function updateViews($id){
    $sql = $this->pdo->prepare("UPDATE posts SET post_views = (post_views + 1) WHERE post_id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute(); 
  }
}
