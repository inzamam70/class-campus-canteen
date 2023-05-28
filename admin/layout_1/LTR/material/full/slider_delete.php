<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php
use \BITM\CUMPUS\Slider;
use \BITM\CUMPUS\Utility\Validator;
use \BITM\CUMPUS\Utility\Utility;

$id = Utility::sanitize($_POST['id']);
   
if(!Validator::empty($id)){
    $slider = new Slider();
    $result = $slider->destroy($id);
    
}else{ // REfactor using Session based message
    dd("Id cannot be null or empty");
}

 if($result){ // edge case is not handled. if it writes nothing. length = 0
     redirect('slider_index.php');		
 }


?>