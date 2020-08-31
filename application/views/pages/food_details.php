<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if (!$detect->isMobile()) {
    echo 'Mobile User Only';
    exit(0);
}

?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <a class="text-right" href="<?php echo $back;?>"><div class="arrow"><i class="fas fa-arrow-left"></i></div></a>
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <?php foreach ($detail as $details): ?>
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/<?php echo ucwords($details['image']); ?>">
        </div>
        <?php endforeach; ?>
        <?php foreach ($image as $images): ?>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/<?php echo ucwords($images['image']); ?>">
        </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="container">
    <div class="row header_name">
        <?php foreach ($detail as $details): ?>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/<?php echo ucwords($images['image']); ?>">
        </div>
        <div class="col-6">
            <h1><b><?php echo ucwords($details['name']); ?></b></h1>
        </div>
        <div class="col-6 text-right">
            <h1><b><?php echo ucwords($details['price']); ?></b></h1>
        </div>
        
    </div>
    <hr style="border: 1px solid #ef9929;">
    <div class="row">
        <div class="col-12">
            <h3 style="font-size: 12px; color: #283c4c;"><?php echo ucfirst($details['description']); ?></h3>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="row addon">
        <div class="col-12 align-middle">
            <h1 class="d-inline">Options:</h1>
            <p class="d-inline">sed quia consequuntur</p>
        </div>
    </div>
    <?php foreach ($option as $options): ?>
    <div class="row addon_prices">
        <div class="col-8"><label class="customradio"><?php echo ucwords($options['name']); ?>
            <input type="radio" name="<?php echo $options['optionID']; ?>">
            <span class="checkmark"></span>
            </label>
        </div>
        <div class="col-4 text-right">
            <h6><?php echo ucwords($options['price']); ?></h6>
        </div>
    </div>
    <?php endforeach; ?>
    <div class="row set_meal">
        <div class="col-12 align-middle">
            <h1 class="d-inline">ADD on:</h1>
            <p class="d-inline"> awd</p>
        </div>
    </div>
    <?php foreach ($addon as $addons): ?>
    <div class="row addon_prices">
        <div class="col-8"><label class="customradio"><?php echo ucwords($addons['name']); ?>
            <input type="radio">
            <span class="checkmark"></span>
            </label>
        </div>
        <div class="col-4 text-right">
            <h6><?php echo ucwords($addons['price']); ?></h6>
        </div>
    </div>
    <?php endforeach; ?>
    <hr>
    <div class="row note">
        <div class="col-12 align-middle">
            <h1 class="d-inline">Note For Us</h1>
            <p class="d-inline"> awd</p>
        </div>
        <div class="col-12 align-middle">
            <textarea></textarea>
        </div>
    </div>
    <hr>
    <div class="row align-items-center block" id="quantity">
        <div class="col-4"><button type="button" class="btn float-left" onclick="add(123,-1)"><i class="fas fa-minus-circle"></i></button></div>
        <div class="col-4 text-center">
           <input type="text" name="numbergroup_123" value="1"  min="1"  max="100" disabled style="border: none; outline: none;"></input>
        </div>
        <div class="col-4"><button type="button" class="btn float-right" onclick="add(123,1)"><i class="fas fa-plus-circle"></i></button></div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-block custombutton">ADD TO CART - </button>
        </div>
    </div>
    <br>
</div>