<div class="my-5">
    <h3>Full-Day Tours</h3>
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th scope="col" class="bg-dark border-0"></th>
                <th scope="col" class="border" width="30%">Preço</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row" class="border">
                    <button type="button" class="btn btn-link btn-lg p-0 mr-1" data-toggle="modal" data-target="#westTourADetail">
                        <i class="fas fa-search"></i>
                    </button>
                    West Tour (A)
                    <?php require_once("tours/west_tour_a.php"); ?>
                </td>
                <td class="border" width="30%">120 €</td>
            </tr>
            <tr>
                <td scope="row" class="border">
                    <button type="button" class="btn btn-link btn-lg p-0 mr-1" data-toggle="modal" data-target="#westTourBDetail">
                        <i class="fas fa-search"></i>
                    </button>
                    West Tour (B)
                    <?php require_once("tours/west_tour_b.php"); ?>
                </td>
                <td class="border" width="30%">120 €</td>
            </tr>
            <tr>
                <td scope="row" class="border">
                    <button type="button" class="btn btn-link btn-lg p-0 mr-1" data-toggle="modal" data-target="#eastTourDetail">
                        <i class="fas fa-search"></i>
                    </button>
                    East Tour
                    <?php require_once("tours/east_tour.php"); ?>
                </td>
                <td class="border" width="30%">110 €</td>
            </tr>
            <tr>
                <td scope="row" class="border">
                    <button type="button" class="btn btn-link btn-lg p-0 mr-1" data-toggle="modal" data-target="#southWestTourDetail">
                        <i class="fas fa-search"></i>
                    </button>
                    South West Tour
                    <?php require_once("tours/south_west_tour.php"); ?>
                </td>
                <td class="border" width="30%">110 €</td>
            </tr>
        </tbody>
    </table>
    <p>Preços finais aplicados para o grupo completo.</p>
</div>