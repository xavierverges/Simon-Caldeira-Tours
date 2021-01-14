<div class="my-5">
    <h3>Half-Day Tours</h3>
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
                    <button type="button" class="btn btn-link btn-lg p-0 mr-1" data-toggle="modal" data-target="#nunsValleyDetail">
                        <i class="fas fa-search"></i>
                    </button>
                    Nun's Valley
                    <?php require_once("tours/nuns_valley.php"); ?>
                </td>
                <td class="border" width="30%">60 €</td>
            </tr>
            <tr>
                <td scope="row" class="border">
                    <button type="button" class="btn btn-link btn-lg p-0 mr-1" data-toggle="modal" data-target="#cavesDetail">
                        <i class="fas fa-search"></i>
                    </button>
                    Caves
                    <?php require_once("tours/caves.php"); ?>
                </td>
                <td class="border" width="30%">60 €</td>
            </tr>
            <tr>
                <td scope="row" class="border">
                    <button type="button" class="btn btn-link btn-lg p-0 mr-1" data-toggle="modal" data-target="#farmersMarketsDetail">
                        <i class="fas fa-search"></i>
                    </button>
                    Farmer's Markets
                    <?php require_once("tours/farmers_markets.php"); ?>
                </td>
                <td class="border" width="30%">70 €</td>
            </tr>
        </tbody>
    </table>
    <p>Preços finais aplicados para o grupo completo.</p>
</div>