
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
                $cli->adicionar($_POST ['nomcli'], $_POST ['endcli'], $_POST ['telcli']);
            }
        
        ?>
        <h2>Novo cliente</h2>
        
        <form action="adicionar.php" method="post">
            
            <label for="nomcli">Nome</label>
            <input id="nomcli" name="nomcli" type="text" maxlength="60"/>
            <br/><br/>
            
            <label for="endcli">Endereço</label>
            <input id="endcli" name="endcli" type="text" maxlength="120"/>
            <br/><br/>
            
            <label for="telcli">Telefone</label>
            <input id="telcli" name="telcli" type="text" maxlength="15"/>
            <br/><br/>
            
            <button type="submit">Adicionar</button>
            
        </form>
            
    </body>
</html>
