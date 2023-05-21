<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php



$id = $_GET['id'];
$uuid = $_GET['uuid'];
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


$curentUniqueId = null;


$sliderjason = file_get_contents($frontenddatasource . "slider.json");
$slideritems = json_decode($sliderjason);

if(count($slideritems) > 0){


$ids = [];
foreach($slideritems as $aslide){
    $ids[] = $aslide->id;
}
    sort($ids);
    $lastIndex = count($ids)-1;
    $highestId = $ids[$lastIndex];
    $curentUniqueId = $highestId+1;
}else{
    $curentUniqueId = 1;
}






$slide['id'] = $curentUniqueId ;

$slideritems[] = (object) $slide;
$data_slides = json_encode($slideritems);
// dd($data_slides);


if(file_exists($frontenddatasource . "slider.json")){
$result = file_put_contents($frontenddatasource . "slider.json" ,$data_slides);

}
else{
    echo "file not found";
}
if($result){
    redirect('slider_index.php');
}



