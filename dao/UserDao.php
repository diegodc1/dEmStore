<?php
require_once('../models/User.php');

class UsuarioDaoDB implements UsuarioDao {
  private $pdo;

  public function __construct(PDO $driver) {
    $this->pdo = $driver;
  }

  public function add(Usuario $u){
    $sql = $this->pdo->prepare("INSERT INTO users (user_name, user_email, user_phone, user_address, use_city, user_district, user_cep, user_password, user_status, user_cad_date, user_cad_time) VALUES (:name, :email, :phone, :address, :city, :district, :cep, :password, :status, :cadDate, :cadTime)");

    $sql->bindValue(':name', $u->getName());
    $sql->bindValue(':email', $u->getEmail());
    $sql->bindValue(':phone', $u->getPhone());
    $sql->bindValue(':address', $u->getAddress());
    $sql->bindValue(':city', $u->getCity());
    $sql->bindValue(':district', $u->getDistric());
    $sql->bindValue(':cep', $u->getCep());
    $sql->bindValue(':password', $u->getPassword());
    $sql->bindValue(':status', $u->getStatus());
    $sql->bindValue(':cadDate', $u->getCadDate());
    $sql->bindValue(':cadTime', $u->getCadTime());

    $sql->execute();

    $u->setId($this->pdo->lastInsertId());
    return $u;

  }
  public function findAll(){}

  public function findUserLogin($email, $pass){}  
  
  public function findById($id){
    $sql = $this->pdo->prepare("SELECT * FROM users WHERE user_id = :id");
    $sql->bindValue(':id', $id);

    if($sql->rowCount() > 0){
      $data = $sql->fetch();

      $u = new Usuario;
      $u->setId($data['user_id']);
      $u->setId($data['user_name']);
      $u->setId($data['user_email']);
      $u->setId($data['user_phone']);
      $u->setId($data['user_address']);
      $u->setId($data['user_city']);
      $u->setId($data['user_district']);
      $u->setId($data['user_cep']);
      $u->setId($data['user_status']);
      $u->setId($data['user_cad_date']);
      $u->setId($data['user_cad_time']);

      return $u;
    } else {
      return false; 
    }
  }

  public function update(Usuario $u){}


  public function delete($id){
    $sql = $this->pdo->prepare("DELETE FROM users WHERE user_id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute(); 
  }
  
  public function disable($id){}
}