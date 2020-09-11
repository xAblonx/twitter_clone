<?php
  namespace App\Models;

  use MF\Model\Model;

  class Tweet extends Model {
  
    private $id;
    private $id_usuario;
    private $tweet;
    private $data;

    public function __get($atributo) {
      return $this->$atributo;
    }

    public function __set($atributo, $valor) {
      $this->$atributo = $valor;
    }

    public function salvar() {
      $query = "INSERT INTO tweets(id_usuario, tweet) VALUES(:id_usuario, :tweet)";
      $stmt = $this->db->prepare($query);
      $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
      $stmt->bindValue(':tweet', $this->__get('tweet'));
      $stmt->execute();

      return $this;
    }

    public function getAll() {
      $query = "SELECT t.id, u.nome, 
                       t.id_usuario, 
                       t.tweet, 
                       DATE_FORMAT(t.data, '%d/%m/%Y %H:%i') AS data
                  FROM tweets AS t 
             LEFT JOIN usuarios AS u 
                    ON t.id_usuario = u.id 
                 WHERE id_usuario = :id_usuario
              ORDER BY t.data DESC";
      $stmt = $this->db->prepare($query);
      $stmt->bindValue(':id_usuario', $this->__get('id_usuario'));
      $stmt->execute();

      return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
  
  }
?>