<?php
//complete source code for views/upload.php
function upload()
{
    include_once "classes/Uploader.class.php";
    //image-data is the name attribute used in <input type='file' />
    $uploader = new Uploader("image-data");
    $uploader->saveIn("imgs");
    $fileUploaded = $uploader->save();
    if ($fileUploaded) {
        $out = "New file uploaded to Images Gallery";
    } else {
        $out = "Something went wrong";
    }
    return $out;
}
$info = upload();