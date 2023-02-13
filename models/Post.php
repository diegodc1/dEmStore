<?php 

class Post {
  private $id;
  private $title;
  private $content;
  private $category;
  private $userId;
  private $date;
  private $time;
  private $views;
  private $status;
  private $price;
  private $imgPath;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getTitle() {
    return $this->title;
  }

  public function setTitle($title) {
    $this->title = $title;
  }
  
  public function getContent() {
    return $this->content;
  }

  public function setContent($content) {
    $this->content = $content;
  }

  public function getCategory() {
    return $this->category;
  }

  public function setCategory($category) {
    $this->category = $category;
  }

  public function getUserId() {
    return $this->userId;
  }

  public function setUserId($userId) {
    $this->userId = $userId;
  }

  public function getDate() {
    return $this->date;
  }

  public function setDate($date) {
    $this->date = $date;
  }

  public function getTime() {
    return $this->time;
  }

  public function setTime($time) {
    $this->time = $time;
  }

  public function getViews() {
    return $this->views;
  }

  public function setViews($views) {
    $this->views = $views;
  }

  public function getStatus() {
    return $this->status;
  }

  public function setStatus($status) {
    $this->status = $status;
  }

  public function getPrice() {
    return $this->price;
  }

  public function setPrice($price) {
    $this->price = $price;
  }

  public function getImgPath() {
    return $this->imgPath;
  }

  public function setImgPath($imgPath) {
    $this->imgPath = $imgPath;
  }

}

interface PostDao {
  public function add(Post $u);
  public function findAll();
  public function findById($id);
  public function update(Post $u);
  public function delete($id);
  public function disable($id);
  public function activate($id);
}

