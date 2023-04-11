<?php 

require_once 'bootstrap.php';

$posts=Post::getAll();
echo 'this posts: ';
var_dump($posts);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abbos's blogs</title>
</head> 
<body>
    <h1>hello world</h1>    
</body>
</html>