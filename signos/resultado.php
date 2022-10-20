<?php
    session_start();

    $xml = simplexml_load_file('xml/resultado.xml');

    foreach($xml->resultado as $resultado){
        $signo = $resultado->nome;
        $descricao = $resultado->descricao;
    }

    if($signo == "Áries"){
        $img = "img/aries.png";
    }else if($signo == "Touro"){
        $img = "img/touro.png";
    }else if($signo == "Gêmeos"){
        $img = "img/gemeos.png";
    }else if($signo == "Câncer"){
        $img = "img/cancer.png";
    }else if($signo == "Leão"){
        $img = "img/leao.png";
    }else if($signo == "Virgem"){
        $img = "img/virgem.png";
    }else if($signo == "Libra"){
        $img = "img/libra.png";
    }else if($signo == "Escorpião"){
        $img = "img/escorpiao.png";
    }else if($signo == "Sagitário"){
        $img = "img/sagitario.png";
    }else if($signo == "Capricórnio"){
        $img = "img/capricornio.png";
    }else if($signo == "Aquário"){
        $img = "img/aquario.png";
    }else{
        $img = "img/peixes.png";
    }

    session_destroy();
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

            .card-resultado {
                border-radius: 20px;
                background-color: #ffffff99;
                max-height: 40vmax;
            }

            .card-resultado:hover {
                background-color: #ffffff99 !important;
            }
        </style>
    </head>

    <body>
        <div class="uk-height-medium uk-flex uk-flex-right uk-flex-middle uk-background-cover uk-light uk-width-1-1" data-src="https://encurtador.com.br/hnpM9" uk-img uk-cover uk-height-viewport>
            <div class="uk-container uk-flex uk-flex-right">
                <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-width-1-2 card-resultado">
                    <div class="uk-text-center uk-text-large uk-text-bold uk-width-1-1 uk-margin" style="color: #411d6e">
                        Seu signo é:
                    </div><br>

                    <div class="uk-flex uk-flex-middle" align="center">
                        <div class="uk-margin-medium-right">
                            <div class="uk-text-center uk-text-large uk-text-bold uk-width-1-1 uk-margin" style="color: #411d6e">
                                <?php echo $signo; ?>
                            </div>                 
                            
                            <div class="uk-text-justify uk-text-medium uk-text-bold uk-width-1-1 uk-margin" style="color: #411d6e">
                                <?php echo $descricao; ?>
                            </div>
                        </div>

                        <img src="<?php echo $img ;?>" width="30%">
                    </div><br>


                    <div class="uk-margin" align="center">
                        <a class="uk-button btn-buscar" href="index.php">Voltar</a>
                    </div>
                </div>               
            </div>
        </div>
    </body>
</html>