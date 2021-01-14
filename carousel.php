<?php
    $places = array(
        array("name"=>"Baia d'Abra","img"=>"baia_dabra",),
        array("name"=>"Cabo Girão","img"=>"cabo_girao",),
        array("name"=>"Cais Seixal","img"=>"cais_seixal",),
        array("name"=>"Camacha","img"=>"camacha",),
        array("name"=>"Calheta","img"=>"calheta",),
        array("name"=>"Câmara de Lobos","img"=>"camara_de_lobos",),
        array("name"=>"Curral das Freiras","img"=>"curral_das_freiras",),
        array("name"=>"Eira do Serrado","img"=>"eira_do_serrado",),
        array("name"=>"Encumeada","img"=>"encumeada",),
        array("name"=>"Faja dos Padres","img"=>"faja_dos_padres",),
        array("name"=>"Funchal","img"=>"funchal",),
        array("name"=>"Garajau","img"=>"garajau",),
        array("name"=>"Jardim do Mar","img"=>"jardim_do_mar",),
        array("name"=>"Machico","img"=>"machico",),
        array("name"=>"Madalena do Mar","img"=>"madalena_do_mar",),
        array("name"=>"Paul da Serra","img"=>"paul_da_serra",),
        array("name"=>"Paul do Mar","img"=>"paul_do_mar",),
        array("name"=>"Pico do Arieiro","img"=>"pico_do_arieiro",),
        array("name"=>"Pico do Facho","img"=>"pico_do_facho",),
        array("name"=>"Pico dos Barcelos","img"=>"pico_dos_barcelos",),
        array("name"=>"Ponta Delgada","img"=>"ponta_delgada",),
        array("name"=>"Ponta do Pargo","img"=>"ponta_do_pargo",),
        array("name"=>"Ponta do Rosto","img"=>"ponta_do_rosto",),
        array("name"=>"Ponta do Sol","img"=>"ponta_do_sol",),
        array("name"=>"Porto da Cruz","img"=>"porto_da_cruz",),
        array("name"=>"Porto Moniz","img"=>"porto_moniz",),
        array("name"=>"Prazeres","img"=>"prazeres",),
        array("name"=>"Ribeira Brava","img"=>"ribeira_brava",),
        array("name"=>"Ribeira da Janela","img"=>"ribeira_da_janela",),
        array("name"=>"Ribeiro Frio","img"=>"ribeiro_frio",),
        array("name"=>"Santa Cruz","img"=>"santa_cruz",),
        array("name"=>"Santana","img"=>"santana",),
        array("name"=>"Santo da Serra","img"=>"santo_da_serra",),
        array("name"=>"São Vicente","img"=>"sao_vicente",),
    );
    shuffle ($places);
?>

<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php
            foreach ($places as $key => $value) {
                if ($key == 0) {
                    echo '<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>';
                } else {
                    echo '<li data-target="#carouselExampleCaptions" data-slide-to="'.$key.'"></li>';
                }
            }
        ?>
    </ol>
    <div class="carousel-inner">
        <?php
            foreach ($places as $key => $value) {
                if ($key == 0) {
                    echo '<div class="carousel-item active">';
                } else {
                    echo '<div class="carousel-item">';
                }
                echo '<img src="assets/img/places/'.$value["img"].'.png" class="d-block w-100" alt="'.$value["name"].'">';
                echo '<div class="carousel-caption d-none d-md-block">';
                echo '<h3>'.$value["name"].'</h3>';
                echo '</div>';
                echo '</div>';
            }
        ?>
    </div>

    <!-- Left Arrow -->
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Right Arrow -->
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>