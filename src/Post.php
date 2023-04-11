<?php 


class Post{
    public static $pdo;
    public $id;
    public $title;
    public $image;
    public $description;
    public $body;
    public $created_at;
    public static function getAll(){
            $stmt = self::$pdo->prepare("SELECT * FROM posts");
        $stmt->execute();
        $posts = $stmt->fetchAll();
        return $posts;
        
    }
}