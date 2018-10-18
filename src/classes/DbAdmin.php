<?php
include_once ("Conexao.php");

    function insert($sql, $data){
        $link = Conexao::getInstance();

            $stmt = $link->prepare($sql);
        
            try
            {
                return $stmt->execute($data);
            }catch(Exception $e)
            {
                echo "Erro: " . $e->getMessage(). "Linha: ". $e->getLine() . "Arq.: " . $e->getFile();
            }
    }

    function select($sql, $filter = "", $data = ""){
        $link = Conexao::getInstance();
        $ret = Array();

        if($filter != "")
        {
            $sql .= $filter;

            $stmt = $link->prepare($sql);
        
            $stmt->execute($data);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
             
        }else{

            $result = $link->query($sql);

            return $result->fetchAll(PDO::FETCH_ASSOC);
    }   

    function delete($sql, $filter = "", $data = ""){

    }

    // Recebe uma data e uma opção. A opção serve para informar como o retorno será feito, para o banco para mostrar ao usuário.
    // 0 para formatar para inserir no baco e 1 para formatar para mostrar ao usuário. 
    function setData($data, $op){
        switch ($op) {
            case '0':
                $dataArray = explode("/", $data);
                $data = $dataArray[2] . "-" . $dataArray[1] . "-" .$dataArray[0];
            break;

            case '1':
                $dataArray = explode("-", $data);
                $data = $dataArray[0] . "/" . $dataArray[1] . "/" .$dataArray[2];
            break;
        }
        return $data;
    }

}
