<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php

use \BITM\CUMPUS\Slider;
use \BITM\CUMPUS\Utility\Utility;
use Intervention\Image\ImageManager;

$manager = new ImageManager(['driver' => 'imagick']);

$filename = uniqid() . "_" . $_FILES['picture']['name'];

try{
    $img = $manager->make($_FILES['picture']['tmp_name'])
                    ->resize(300, 200)
                    ->save($uploads.$filename);
    $src = $filename ;
}catch(Intervention\Image\Exception\NotWritableException $e){
    // d($e);
}catch(Exception $e){
    // d($e);
}

$slider = new Slider();

$slider->alt = Utility::sanitize($_POST['alt']);
$slider->tittle = Utility::sanitize($_POST['tittle']);
$slider->caption = Utility::sanitize($_POST['caption']);
$slider->src = $src;

$result = $slider->store($slider);

if($result){
    redirect("slider_index.php");
}else{
    echo "Data is not stored";
}





$slide['id'] = $curentUniqueId;

$slideritems[] = (object) $slide;
$data_slides = json_encode($slideritems);
// dd($data_slides);


if (file_exists($frontenddatasource . "slider.json")) {
    $result = file_put_contents($frontenddatasource . "slider.json", $data_slides);
} else {
    echo "file not found";
}
if ($result) {
    redirect('slider_index.php');
}
