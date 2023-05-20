<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php
$id =$_POST['id'];

$sliderjason = file_get_contents($frontenddatasource . "slider.json");
$slideritems = json_decode($sliderjason);
foreach($slideritems as $key=>$slide){
    if($slide->id == $id){
        break;
    }
}

unset($slideritems[$key]);
$slideritems = array_values($slideritems);
$data_slides = json_encode($slideritems);

if(file_exists($frontenddatasource . "slider.json")){
    $result = file_put_contents($frontenddatasource . "slider.json" ,$data_slides);
    if($result){
        redirect('slider_index.php');
    }
    }
    else{
        echo "file not found";
    }
    