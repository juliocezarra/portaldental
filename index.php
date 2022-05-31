<?php
use Database\Database;

require_once "helpers/Database.php";

$db = new Database();

$dentists = $db->select(
    "SELECT * FROM dentistas;"
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Dental</title>
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- Import do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <!-- Import Slick slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    
</head>
<body>
    <section class="navigation-section pt-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="d-flex w-75">
                    <img class="header-logo" src="assets/img/header-logo.png" alt="Header-logo">
                </div>
                <div class="d-block w-auto">
                    <a href="painel/login.php" class="bg-success text-white border-0 btn-top rounded-circle icon-header">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    </a>
                </div>
            </div>
        </div>    
    </section>

    <section>
        <div class="container px-0">
            <img class="w-100" src="assets/img/banner-1.jpg" alt="Banner 1">
        </div>
    </section>
    
    <section>
        <div class="container px-0">
            <img class="w-100" src="assets/img/banner-2.jpg" alt="Banner 2">
        </div>
    </section>

    <section class="slider-1">
        <div class="container slider-container pt-2">
            <div class="slider-title">
                Dentistas Próximos
            </div>
            <div class="slide-dentista py-3">       
                <?php 
                foreach ($dentists as $item) {
                ?>
                    <div class="slide">
                        <div class="mx-0 my-4 row">
                            <div class="col my-auto">
                                <img class="img-slider " src="<?= $item->imagem ?>">
                            </div>
                            <div class="col my-auto">
                                <div class="row">
                                    <span class="slider-name">
                                    <?= $item->nome.", ".  $item->idade.". Está a ". $item->distancia."km" ?>    
                                    </span>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>

    <section class="section-plans">
        <div class="container py-2">
            <div class="plans-title">
                ESCOLHA SEU PLANO
            </div>
            <div class="plans-subtitle">
                <span>Mensal <i class="fa-solid fa-circle"></i> Anual <small>10% off</small>
            </div>
            <div class="justify-content-center row mt-4">
                <div class="col-3">
                    <div class="plan-card">
                        <div class="mx-4 row">
                            <span class="plan-title w-100">
                                Plano Base
                            </span>
                            <span class="plan-title w-100">
                                R$: 129,99
                            </span>
                        </div>
                        <div class="row mt-3">
                            <ul class="plan-list">
                                <li>
                                    Primeira consulta grátis
                                </li>
                                <li>
                                    5% de desconto em todos os produtos
                                </li>
                                <li>
                                    Acesso a todos os Dentistas
                                </li>
                            </ul>
                            <a href="http://localhost/portaldental/payment/plano_base/" class="mx-auto btn btn-outline-primary mt-4">
                                Escolher BASE
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="plan-card plan-active">
                        <div class="mx-5 row">
                            <span class="plan-title-2 w-100">
                                Plano PRO
                            </span>
                            <span class="plan-price-2 w-100">
                                R$: 329,99
                            </span>
                        </div>
                        <div class="row mt-4">
                            <ul class="plan-list-2">
                                <li>
                                    Manutenção grátis 3 meses
                                </li>
                                <li>
                                    Prioridade nas filas de espera
                                </li>
                                <li>
                                    Desconto em consultas a domicilio
                                </li>
                            </ul>
                            <a href="http://localhost/portaldental/payment/plano_pro/" class="mx-auto btn btn-success mt-4">
                                Escolher PRO
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="plan-card">
                        <div class="mx-4 row">
                            <span class="plan-title w-100">
                                Plano Premium 
                            </span>
                            <span class="plan-title w-100">
                                R$: 629,99
                            </span>
                        </div>
                        <div class="row mt-3">
                            <ul class="plan-list">
                                <li>
                                    Manutenção grátis por 6 meses
                                </li>
                                <li>
                                    1 Consulta a domicilio por mês
                                </li>
                                <li>
                                    Prioridade premium na fila de espera
                                </li>
                                <li>
                                    Familia inclusa até 4 pessoas
                                </li>
                            </ul>
                            <a href="http://localhost/portaldental/payment/plano_premium/" class="mx-auto btn btn-outline-primary mt-4">
                                Escolher PREMIUM
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/slider.js"></script>
</body>
</html>