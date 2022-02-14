<?php include 'header.php';?>



<section class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <img src="assets/img/<?php echo $result['image'];?>" alt="" class="card-img-top w-75"/>
            </div>
            <div class="col-md-6 mb-4">
                <h1><?php echo $result['name'];?></h1>
                <h3><?php echo $result['price'];?></h3>
                <p><?php echo $result['category'];?></p>
                <p><?php echo $result['brand'];?></p>
                <p><?php echo $result['description'];?></p>
            </div>
        </div>
    </div>

</section>


<?php include 'footer.php';?>
