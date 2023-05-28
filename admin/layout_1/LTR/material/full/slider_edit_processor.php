<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php
use \BITM\CUMPUS\Slider;
use \BITM\CUMPUS\Utility\Utility;

$src = null;
$old_picture = null;
$new_picture = null;
$old_picture = $_post['old_picture'];

if (array_key_exists('picture', $_FILES) && !empty($_FILES['picture']['name'])) {
    $filename = $_FILES['picture']['name'];
    $filename = uniqid() . "_" . $_FILES['picture']['name'];
    $target = $_FILES['picture']['tmp_name'];
    $destination = $uploads . $filename;

    if (upload($target, $destination)) {
        $new_picture = $filename;
    }

    if (file_exists($uploads . $old_picture)) {
        unlink($uploads . $old_picture);
    }
}



$src = $new_picture ?? $old_picture;
$id = Utility::sanitize($_POST['id']);

$slider = new Slider();
$slide = $slider->find($id);

$aslide->alt = Utility::sanitize($_POST['alt']);
$aslide->title = Utility::sanitize($_POST['title']);
$aslide->caption = Utility::sanitize($_POST['caption']);
$aslide->src = $src;

$result = $slider->update($slide);
if($result){
    $message = "Data is updated Successfully";
    set_session('message',$message);
    // redirect("slider_index.php?message=".$message);
    redirect("slider_index.php");
}
