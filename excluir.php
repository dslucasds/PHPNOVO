
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            if(isset($_POST['nomcli'])){
                require 'classes/Cliente.php';
                $cli = new Cliente();
                $cli->excluir($_POST ['nomcli'], $_POST ['endcli'], $_POST ['telcli'], $_GET['cod']);
            }
        
        ?>
       
    </body>
</html>
