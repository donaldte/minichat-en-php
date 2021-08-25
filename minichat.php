<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    form{
        text-align: center;
    }
</style>

<form action="minichat_post.php" method="post">
    <label for="name">Name</label>:<input id="name" type="text" name='name' required>
    <br>
    <label for="message">Message</label>:<input id="message" type="text" name='message' required>
    <br>
    <input type="submit" value="send" name="submit">
</form>
<?php
    // we are checking here if connection with the database is good if not we catch the error 
   require 'database.php';
    
    // here we are going to print the the first ten messages

    $req = $dbs->query('SELECT pseudo, message FROM chat ORDER BY ID DESC LIMIT 0, 10');
    while($data = $req->fetch()){
 
    echo '<strong>'.htmlspecialchars($data['pseudo']).'</strong>:'. htmlspecialchars($data['message']).'<br>';


    }
    $req->closeCursor()
?>
</body>
</html>