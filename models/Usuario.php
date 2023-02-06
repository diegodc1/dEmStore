<?php
class Usuario {
  private $id;
  private $name;
  private $email;
  private $phone;
  private $address;
  private $city;
  private $district;
  private $cep;
  private $password;
  private $status;
  private $cadDate;
  private $cadTime;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id; 
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name; 
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email; 
  }

  public function getPhone() {
    return $this->phone;
  }

  public function setPhone($phone) {
    $this->phone = $phone; 
  }

  public function getAddress() {
    return $this->address;
  }

  public function setAddress($address) {
    $this->address = $address; 
  }

  public function getCity() {
    return $this->city;
  }

  public function setCity($city) {
    $this->city = $city; 
  }

  public function getDistric() {
    return $this->district;
  }

  public function setDistric($district) {
    $this->district = $district; 
  }

  public function getCep() {
    return $this->cep;
  }

  public function setCep($cep) {
    $this->cep = $cep; 
  }

  public function getPassword() {
    return $this->password;
  }

  public function setPassword($password) {
    $this->password = password_hash($password, PASSWORD_DEFAULT);
  }

  public function getStatus() {
    return $this->status;
  }

  public function setStatus($status) {
    $this->status = $status; 
  }

  public function getCadDate() {
    return $this->cadDate;
  }

  public function setCadDate($cadDate) {
    $this->cadDate = $cadDate; 
  }

  public function getCadTime() {
    return $this->cadTime;
  }

  public function setCadTime($cadTime) {
    $this->cadTime = $cadTime; 
  }
}

interface UsuarioDao {
  public function add(Usuario $u);
  public function findAll();
  public function findUserLogin($email, $pass);
  public function findById($id);
  public function findByEmail($email);
  public function update(Usuario $u);
  public function delete($id);
  public function disable($id);
}