<?php
require_once('../models/Usuario.php');

class UsuarioDaoDB implements UsuarioDao {
  private $pdo;

  public function __construct(PDO $driver) {
    $this->pdo = $driver;
  }

  public function add(Usuario $u){
    $sql = $this->pdo->prepare("INSERT INTO users (user_name, user_email, user_phone, user_address, user_city, user_district, user_cep, user_password, user_status, user_cad_date, user_cad_time) VALUES (:name, :email, :phone, :address, :city, :district, :cep, :password, :status, :cadDate, :cadTime)");

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
  
  public function findById($id){
    $sql = $this->pdo->prepare("SELECT * FROM users WHERE user_id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
      $data = $sql->fetch();

      $u = new Usuario;
      $u->setId($data['user_id']);
      $u->setName($data['user_name']);
      $u->setEmail($data['user_email']);
      $u->setPhone($data['user_phone']);
      $u->setAddress($data['user_address']);
      $u->setCity($data['user_city']);
      $u->setDistric($data['user_district']);
      $u->setCep($data['user_cep']);
      $u->setStatus($data['user_status']);
      $u->setCadDate($data['user_cad_date']);
      $u->setCadTime($data['user_cad_time']);

      return $u;
    } else {
      return false; 
    }
  }

  public function findByEmail($email) {
     $sql = $this->pdo->prepare("SELECT * FROM users WHERE user_email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() > 0 ){
      $data = $sql->fetch();

      $u = new Usuario;
      $u->setId($data['user_id']);
      $u->setName($data['user_name']);
      $u->setEmail($data['user_email']);
      $u->setPhone($data['user_phone']);
      $u->setAddress($data['user_address']);
      $u->setCity($data['user_city']);
      $u->setDistric($data['user_district']);
      $u->setCep($data['user_cep']);
      $u->setStatus($data['user_status']);
      $u->setCadDate($data['user_cad_date']);
      $u->setCadTime($data['user_cad_time']);

      return $u;
    } else {
      return false;
    }
  }

  public function findUserLogin($email, $pass){
    $sql = $this->pdo->prepare("SELECT * FROM users WHERE user_email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();
    $data = $sql->fetch();

    if($sql->rowCount() > 0 && password_verify($pass, $data['user_password'])) {
        $u = new Usuario;
        $u->setId($data['user_id']);
        $u->setName($data['user_name']);
        $u->setEmail($data['user_email']);
        $u->setPhone($data['user_phone']);
        $u->setAddress($data['user_address']);
        $u->setCity($data['user_city']);
        $u->setDistric($data['user_district']);
        $u->setCep($data['user_cep']);
        $u->setStatus($data['user_status']);
        $u->setCadDate($data['user_cad_date']);
        $u->setCadTime($data['user_cad_time']);
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