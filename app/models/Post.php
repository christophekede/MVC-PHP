<?php

  class Post {
    
    private $db;

    public function __construct(){
      $this->db = Database::getInstance();

    }
    
    public function getPosts(){
      $this->db->query("select * from posts");

      return $this->db->resultSet();
    }
  }