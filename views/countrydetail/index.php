<?php
include("countrydetail.module.php");
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row my-0">
                <div class="col-12">
                    <a href=".?page=countries" class="btn btn-secondary float-right">Back</a>
                </div>
            </div>
            <?php foreach ($data as $item) { ?>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <img src="<?php echo $item["flag"] ?>" alt="" class="img-thumbnail img-fluid">
                    </div>

                    <div class="col-12 col-lg-6 my-auto">
                        <div class="row">
                            <div class="col-12">
                                <div class="h3 font-weight-bold" style="text-transform:uppercase"><?php echo $item["name"] ?></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="h5"><strong>Capital</strong>: <?php echo $item["capital"] ?></div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="h5"><strong>Region</strong>: <?php echo $item["region"] ?></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="h5"><strong>Population</strong>: <?php echo number_format($item["population"], 0, '', ',') ?></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="h5"><strong>Latitude</strong>: <?php echo $item["latlng"][0] ?></div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="h5"><strong>Longtitude</strong>: <?php echo $item["latlng"][1] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>