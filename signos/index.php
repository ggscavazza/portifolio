<?php
    include('funcoes.php');
    session_start();

    if($_REQUEST['buscar']){
        $data_niver = addslashes($_REQUEST['data_niver']);

        if($data_niver != ""){
            $xml = simplexml_load_file('xml/signos.xml');

            $signo = descobre_signo($data_niver, $xml);

            if($signo != "Não encontrado."){                
                $nome = $signo[0];
                $desc = $signo[1];

                $manipulador_arq = fopen("xml/resultado.xml","w+");
                
                @fwrite($manipulador_arq,"<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n<resultado_signo>");              
                $xml_novo .= "\n<resultado>";
                $xml_novo .= "\n<nome>$nome</nome>";
                $xml_novo .= "\n<descricao>$desc</descricao>";
                $xml_novo .= "\n</resultado>";
                @fwrite($manipulador_arq, $xml_novo);
                
                @fwrite($manipulador_arq,"\n</resultado_signo>");

                header('location: resultado.php');
                exit();
            }else{
                header('location: erro.php');
                exit();
            }            
        }
    }
?>

<!DOCTYPE html>
<html class="uk-background-secondary">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Desconbrindo signo</title>

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.10/dist/js/uikit-icons.min.js"></script>

        <style>
            .btn-buscar {
                color: #fff;
                font-weight: bold;
                border-radius: 50px;
                background-color: #833471;
                transition: all 0.5s;
            }

            .btn-buscar:hover, .btn-buscar:active {                
                background-color: #6F1E51;
                -webkit-filter: drop-shadow(7.5px 5px 2.5px rgba(0,0,0,.5));
                filter: drop-shadow(7.5px 5px 2.5px rgba(0,0,0,.5));
            }

            .input-data {
                color: #1B1464 !important;
                background-color: #411d6e50 !important;
            }
        </style>
    </head>

    <body>
        <div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light uk-width-1-1" data-src="https://encurtador.com.br/hnpM9" uk-img uk-cover uk-height-viewport>
            <div class="uk-container uk-margin-large-right uk-padding-large uk-padding-remove-top uk-padding-remove-bottom uk-padding-remove-left">
                <div class="uk-card uk-card-default uk-card-hover uk-card-body" style="border-radius: 20px; background-color: #ffffff99;">
                    <div class="uk-text-center uk-text-large uk-text-bold uk-width-1-1 uk-margin-top" style="color: #411d6e">
                        Vamos descobrir seu signo?
                    </div><br>

                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                        <fieldset class="uk-fieldset">
                            <legend class="uk-legend uk-text-small uk-text-bold" style="color: #1B1464">Qual sua data de nascimento?</legend>

                            <div class="uk-margin">
                                <input class="uk-input input-data" type="date" name="data_niver" required>
                            </div>

                            <div class="uk-margin" align="center">
                                <input class="uk-button btn-buscar" type="submit" name="buscar" value="Descobrir signo">
                            </div>
                        </fieldset>
                    </form>
                </div>               
            </div>
        </div>
    </body>
</html>