<?php
require 'Conexao.php';

class Cliente {

    private $conexao;

    public function __construct() {

        $this->conexao = Conexao::getConexao();
    }

    public function listar() {
        $sql = 'select * from cliente';

        $q = $this->conexao->prepare($sql);
        $q->execute();

        return $q;
    }

    public function adicionar($nomcli, $endcli, $telcli) {

        $sql = 'INSERT INTO cliente (nomcli, endcli, telcli) VALUES (?, ?, ?);';
        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nomcli);
        $q->bindParam(2, $endcli);
        $q->bindParam(3, $telcli);

        $q->execute();
    }

    public function editar($nomcli, $endcli, $telcli, $codcli) {

        $sql = 'UPDATE `saep_senai`.`cliente` SET `nomcli` = ?, `endcli` = ?, `telcli` = ? WHERE (`codcli` = ?);';
        $q = $this->conexao->prepare($sql);
        
        $q->bindParam(1, $nomcli);
        $q->bindParam(2, $endcli);
        $q->bindParam(3, $telcli);
        $q->bindParam(4, $codcli);

        $q->execute();
        
}

   public function getClientes($codcli){
       
       $sql = 'SELECT * from cliente; WHERE (`codcli` = ?);';
       $q = $this->conexao->prepare($sql);
       $q->bindParam(1, $codcli);
       $q->execute();

       $cliente = [];
       
       foreach ($q as $cli) {
           $cliente = $cli;
       }
       
       return $cliente;
       
   }

   public function excluir($codcli) {
       $sql = 'DELETE FROM cliente WHERE codcli = ?;';
       $q = $this->conexao->prepare($sql);
       
       $q->bindParam(1, $codcli);
       
       $q->execute();
   }

}

