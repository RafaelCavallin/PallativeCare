<?php
include_once ("../Conexao.php");

function insert($sql, $data){
    $link = Conexao::getInstance();

		$stmt = $link->prepare($sql);
        $i = 1;

        foreach ($data as $value) { 
            $stmt->bindValue($i, $value);
            $i++;
        }

        try
        {
            return $stmt->execute();
        }catch(Exception $e)
        {
            echo "Erro: " . $e->getMessage(). "Linha: ". $e->getLine() . "Arq.: " . $e->getFile();
        }
}
