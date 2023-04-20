<?php
//complete source code for views/gallery.php
function showImages(): string
{
    $out = "<h1 align='center' style='margin:10px 0'>Images Gallery</h1>";
    $out .= "<ul id='images'><li>";
    $totalSize = 0;
    $numberOfImages = 0;
    $dir_name = "imgs";
    chdir($dir_name);//imgs
    $images = glob("*.jpg");
    foreach ($images as $image) {
        if ((filesize($image) < 500000) and ($totalSize < 2500000)) {
            $out .= '<img src="' . $dir_name . '/' . $image . '"
                    style="
                    width: 30%;
                    border: 2px solid black;
                    padding: 5px;
                    margin: 5px;
                "/>';
            $totalSize += filesize($image);
            $numberOfImages++;
        }
        if (($numberOfImages % 3) == 0) {
            $out .= "</li><li>";
        }
    }
    $out .= "</li></ul>";
    return $out;
}
$info = showImages();
