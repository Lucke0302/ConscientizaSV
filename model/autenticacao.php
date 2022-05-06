<?php
class Auth
{
    public static function verify()
    {
        if($_SESSION['logado']=false)
        {
            header('Location: ../view/homepag/index.php');
        }
        else{
            
        }
    }
}
?>