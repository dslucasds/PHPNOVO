
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
                $cli->editar($_POST ['nomcli'], $_POST ['endcli'], $_POST ['telcli'], $_GET['cod']);
            }
        
        ?>
        <h2>Editar cliente</h2>
        
        
        
        
        <form action="editar.php?cod=<?php echo $_GET ['cod']; ?>" method="post">
            
            <label for="nomcli">Nome</label>
            <input id="nomcli" name="nomcli" type="text" maxlength="60" value="<?php echo $nomcli;?>"/>
            <br/><br/>
         
            
            <label for="endcli">Endereço</label>
            <input id="endcli" name="endcli" type="text" maxlength="120"/>
            <br/><br/>
            
            <label for="telcli">Telefone</label>
            <input id="telcli" name="telcli" type="text" maxlength="15"/>
            <br/><br/>                   
            
            <button type="submit"onClick="return confirm('Deseja atualizar o registro?');">Editar</button>
            
        </form>
            
    </body>
</html>
