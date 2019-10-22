<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require 'classes/Cliente.php';
        
        $cli = new Cliente();
        $clientes = $cli->listar();
       
                
        $eliminar = $_GET ['eliminar'];
            if(isset($eliminar)){
                header('Location:index.php');
                $cli->excluir($eliminar);
                unset($eliminar);
            }
        
        ?>
        
        
        
        <a href="adicionar.php">Novo cliente</a>
        <a href="editar.php?cod=<?php codcli?>">Editar</a>

        
        
        <table>
            <thead>
                <tr>
                    <td>Cód.</td>
          
                    <td>Nome</td>
                    <td>Endereço</td>
                    <td>Telefone</td>
                 

                </tr>
            </thead>

            <tbody>
                <?php foreach ($clientes as $c){ ?>
                    
                <tr>
                    <td><?php echo $c ['codcli'];?> </td>
                    <td><?php echo $c ['nomcli'];?></td>
                    <td><?php echo $c ['endcli'];?></td>
                    <td><?php echo $c ['telcli'];?></td>
                    <td><button onclick ="location.href='editar.php?cod=<?php echo $c ['codcli']?>'">Editar</button></td>

                    <td><a href="index.php?eliminar=<?php echo $c ['codcli'] ?>"><button type="button">Excluir</button></a>
                    </td>
                        
                </tr>

                 <?php } ?>
                 
            </tbody>

        </table>
        
   
        
    </body>
    
</html>
