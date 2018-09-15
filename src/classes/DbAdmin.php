<?php
include_once ("Conexao.php");

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

function select($sql){
    $pdo = Conexao::getInstance();
    $result = $pdo->query($sql);
    $ret = Array();
    
    while ($row = $result->fetchAll(PDO::FETCH_CLASS)) {
        $ret = $row;
    }
    return json_encode($ret);
}
