<?php
    function descobre_signo($data_niver = null, $xml = null){
        $data_niver = explode('-',$data_niver);
        $dia_niver = $data_niver[2];
        $mes_niver = $data_niver[1];        

        foreach($xml->signo as $signo){
            $data_inicio = explode('/', $signo->dataInicio);            
            $data_fim = explode('/', $signo->dataFim);
            $dia_inicio = $data_inicio[0];
            $dia_fim = $data_fim[0];
            $mes_inicio = $data_inicio[1];
            $mes_fim = $data_fim[1];

            if(($mes_niver == $mes_inicio && $dia_niver >= $dia_inicio) || ($mes_niver == $mes_fim && $dia_niver <= $dia_fim)){
                $nome = $signo->signoNome;
                $descricao = $signo->descricao;
              
                $signo_dados = array($nome, $descricao);
            }
        }

        if(count($signo_dados) > 0){
            return $signo_dados;
        }else{            
            $erro = "Não encontrado.";
            return $erro;
        }
    }
?>