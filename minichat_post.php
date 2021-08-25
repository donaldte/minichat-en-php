    <?php
        if (isset($_POST['submit'])) {
           require 'database.php';

           if (empty($_POST['name']||$_POST['message'])) {
                header('Location: minichat.php');
                exit();

           }else{
                $rep = $dbs->prepare('INSERT INTO chat VALUES( NULL,:name, :message)');
                $rep->execute(array('name'=>$_POST['name'], 'message'=>$_POST['message']));
                header('Location: minichat.php');
           }

            
            
        } else {
            echo"there is an error";
            header('Location: minichat.php');

        }
        
    ?>