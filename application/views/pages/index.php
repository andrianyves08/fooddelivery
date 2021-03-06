<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if (!$detect->isMobile()) {
    echo 'Mobile User Only';
    exit(0);
}

?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="searchbar">
        <div class="row">
            <div class="col-10">
                <h6>Sed ut perspiciatis unde omnis iste natus </h6>
            </div>
            <div class="col-2"><i class="fas fa-search"></i></div>
        </div>
    </div>
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url(); ?>assets/img/hero.png" alt="First slide">
            <div class="carousel-caption">
                <div id="content">
                    <div class="row">
                        <div class="col-12">
                            <h1>LAUNCH<br>PROMOTION</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <img src="<?php echo base_url(); ?>assets/img/Group 1.png">
                        </div>
                        <div class="col-4">
                            <div class="buy1free1 rounded-circle"> BUY 1 FREE 1
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/hero.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/hero.png" alt="Third slide">
        </div>
    </div>
</div>
</div>
<div class="locationbar">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h6>Your Location</h6>
                <p>TODAY - 12:00PM- 1:00PM</p>
            </div>
            <div class="col-4 text-right"><i class="fas fa-pen"></i></div>
        </div>
    </div>
</div>
<div id="category">
    <div class="row">
    	<?php foreach ($food_type as $food_types): ?>
         <div class="col-3">
            <img src="<?php echo base_url(); ?>assets/img/<?php echo ucwords($food_types['image']); ?>" alt="">
            <div class="centered"><?php echo ucwords($food_types['name']); ?></div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<div id="recommended">
    <h1>CHEF RECOMMENDED</h1>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
    <div class="container">
        <div class="row ">
            <div class="owl-carousel">
            	<?php foreach ($food as $foods): ?>
		        <div class="card" style="width: 167px;">
                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/img/<?php echo ucwords($foods['image']); ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5><a href='<?php echo base_url('food_details/'.$foods['id']); ?>'><?php echo ucwords($foods['name']); ?></a></h5>
                        <i class="fas fa-plus-circle float-right"></i>
                    </div>
                </div>
		        <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>