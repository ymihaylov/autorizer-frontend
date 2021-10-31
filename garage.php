<?php include 'head.php' ?>
<body>
<?php require_once './header.php'?>

<div id="main-container" class="container">
    <div class="mb-3">
        <a href="#" class="btn btn-outline-success btn-sm">Добави ново МПС</a>
    </div>

    <div class="row">
        <?php for ($i = 0; $i < 4; $i++):?>
        <div class="col mb-4 col-sm-4">
            <div class="card">
                <img src="img/example-cars/example-car-<?php echo $i ?>.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><a href="#" class="stretched-link text-reset text-decoration-none">Toyota RAV4</a></h5>

                    <div class="car-details">
                        <span class="badge bg-primary">B6</span>
                        <span class="badge bg-secondary">2.0 L</span>
                        <span class="badge bg-warning text-dark">Дизел</span>
                        <span class="badge bg-light text-dark">140 к.с.</span>
                        <span class="badge bg-light text-dark">2006</span>
                        <span class="badge bg-light text-dark">Ръчна</span>
                        <span class="badge bg-light text-dark">4x4</span>
                    </div>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</div>

<?php require_once './foot.php' ?>