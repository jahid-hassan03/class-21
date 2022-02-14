<?php include 'header.php'; ?>
<section class="p-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/img/<?php echo $product['image'];?>" alt="" class="card-img-top" height="300px"/>
                    <div class="card-header"></div>
                    <div class="card-body">
                       <h3 class="card-title"><?php echo $product['name'];?></h3>
                        <h3><?php echo $product['price'];?></h3>
                        <br>
                        <a href="action.php?pages=details&&id=<?php echo $product['id'];?>" class="btn btn-outline-success">Details</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

</section>
<?php include 'footer.php'; ?>
