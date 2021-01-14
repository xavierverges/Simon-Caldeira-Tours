<!-- Header -->
<?php require_once("header.php"); ?>

        <!-- Title -->
        <div class="card bg-dark text-white border-0">
            <img src="assets/img/carrinha.png" class="card-img mb-5" alt="...">
            <div class="card-img-overlay">
                <table class="w-100 h-100 mt-5">
                    <tr>
                        <td>
                            <h1 id="mainTitle" class="text-center">Simon Caldeira Tours</h1>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        
        <!-- Carousel -->
        <?php require_once("carousel.php"); ?>

        <!-- Prices -->
        <?php require_once("table_transfers.php"); ?>
        <?php require_once("table_half_day.php"); ?>
        <?php require_once("table_full_day.php"); ?>

        <!-- Contact Form Modal -->
        <button type="button" class="btn btn-primary btn-lg btn-block d-block" data-toggle="modal" data-target="#contactForm">
            Reserve Já
        </button>

        <?php require_once("reserve.php"); ?>

        <!-- Termos and Conditions Modal -->
        <?php require_once("terms.php"); ?>

<!-- Footer -->
<?php require_once("footer.php"); ?>