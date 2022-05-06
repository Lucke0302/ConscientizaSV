<?php 
    echo "<script>
    var retorno = confirm('Certeza que deseja excluir a conta?');
    if (retorno == true)
    {
        window.location.href = '../excluirusuario/controller.php';
    }
    else
    {
        window.location.href = '../../view/perfil/index.php';
    }
    </script>";
?>