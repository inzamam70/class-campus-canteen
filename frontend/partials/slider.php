<?php
$slaid1 = [
  'src'=>'../global_assets/img/carsol1.jpg',
  'tittle'=>'Best Quality Food',
  'caption'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
];
$slaid2 = [
  'src'=>'../global_assets/img/carsol3.jpg',
  'tittle'=> 'Well Dedication',
  'caption'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
];
$slaid3 = [
  'src'=>'../global_assets/img/silder3.jpg',
  'tittle'=>'Testy & Jussy',
  'caption'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
];

$slaids = [$slaid1,$slaid2,$slaid3];



?>








<div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <?php
          $active = 'active';
          foreach($slaids as $key=>$slaid){
            if(0 == $key){
              $active = 'active';
            }else{
              $active ='';
            }


          
          
          ?>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$key?>" class="active" aria-current="true" aria-label="Slide 1"></button>
          <?php
            }
          ?>
          <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
        </div>
        <div class="carousel-inner">
        <?php
          $active = 'active';
          foreach($slaids as $key=>$slaid){
            if(0 == $key){
              $active = 'active';
            }else{
              $active ='';
            }


          
          
          ?>
          <div class="carousel-item active <?=$active?>">
            <img src="<?=$slaid['src']?>" class="d-block w-100" alt="...">
            <div class="carousel-caption " >
              <h5 style="color: white;"><?=$slaid['tittle']?></h5>
              <p style="color: white;"><?=$slaid['caption']?></p>
              <p><a href="#" class="btn btn-warning mt3">Show More</a></p>
            </div>
          </div>
          <?php
          }
          ?>
          <!-- <div class="carousel-item">
            <img src="../global_assets/img/carsol3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5 style="color: white;">Well Dedication</h5>
              <p style="color: white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <p><a href="#" class="btn btn-warning mt3">Show More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../global_assets/img/silder3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5 style="color: white;">Testy & Jussy</h5>
              <p style="color: white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <p><a href="#" class="btn btn-warning mt3">Show More</a></p>
            </div>
          </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>