<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php



$id = 11;
$uuid = 'dsghghgdhg';
$src = $_GET['url'];
$alt =  $_GET['alt'];
$title = $_GET['title'];
$caption = $_GET['caption'];


$slide = [
    'id' => $id,
    'uuid' => $uuid,
    'src' => $src,
    'alt' => $alt,
    'tittle' => $title,
    'caption' => $caption
];





$sliderjason = file_get_contents($frontenddatasource . "slider.json");
$slideritems = json_decode($sliderjason);

$slideritems[] = (object) $slide;
$data_slides = json_encode($slideritems);
// dd($data_slides);


if(file_exists($frontenddatasource . "slider.json")){
$result = file_put_contents($frontenddatasource . "slider.json" ,$data_slides);
}
else{
    echo "file not found";
}



