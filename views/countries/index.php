<?php
include("countrylist.module.php");
?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <span class="h3" style="text-align: center">Countries</span>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <form action="" method="post">
                        <button class="btn btn-danger mb-2" name="region" value="reset">Reset</button>
                        <button class="btn btn-primary mb-2" name="region" value="asia">Asia</button>
                        <button class="btn btn-primary mb-2" name="region" value="americas">Americas</button>
                        <button class="btn btn-primary mb-2" name="region" value="europe">Europe</button>
                        <button class="btn btn-primary mb-2" name="region" value="oceania">Oceania</button>
                        <button class="btn btn-primary mb-2" name="region" value="africa">Africa</button>
                    </form>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12 col-lg-4">
                    <?php foreach ($decoded as $item) {
                        if ($item["population"] == $total) { ?>
                            <div class="card">
                                <div class="card-body">
                                    <span>Highest Population <?php if ($_POST['region'] != "reset") echo "in " . $item["region"] ?> </span>
                                    <br>
                                    <div><strong><?php echo $item["name"] ?></strong> - <?php echo number_format($item["population"], 0, '', ',') ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php include("countrylist.table.php"); ?>
                </div>
            </div>
        </div>
    </div>
</div>