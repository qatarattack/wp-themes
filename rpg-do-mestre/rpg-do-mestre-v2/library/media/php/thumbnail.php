<?php

/*
This tutorial focuses on a thumbnail generation script I wrote for the Accidental President site.
Rather than generating a smaller representation of the image, it cuts out a section of the photograph
to create an obscure snapshot of the photo itself. The thumbnail's size is variable also, so the script
be used across different sites to create different sized thumbnails where needed.
*/

/*
First off, we get 3 variables passed when the script is called (see last section). $image is the full URL
of the image we want the thumbnail to be of. $newWidth and $newHeight is the width and height you would like
the thumbnail to be.
*/
$image = $_GET['image'];
$newWidth = $_GET['width'];
$newHeight = $_GET['height'];

/*
Next we find out the width and height of the full image we are using, and store it in the variables $width
and $height
*/
$size = GetImageSize($image);
$width = $size[0];
$height = $size[1];

/*
Next we take the current width of the image and take off the wanted width. This means when the image is 
cropped it will not get cropped too close to the edge.
*/
$width = $width-$newWidth;

/*
The same is then done for the height
*/
$height = $height-$newHeight;

/*
Now we generate x and y co-ordinates where the thumnail will start cropping from. There are a few ways this
could be done to achieve different results, however I opted to simply half the width and height.
*/
$x = $width/2;
$y = $height/2;

/*
The next part of the code makes a copy of the image to an image named $src.
*/
$src = ImageCreateFromJpeg($image);

/*
Next a blank image is created with the wanted width and height
*/
$tmb = ImageCreateTrueColor($newWidth,$newHeight);

/*
Now we can generate our actual thumbnail. This line of code copies the old image to the blank one, starting and 
the generated x and y co-ordinates. This will therefore crop the image at the specified size.
*/
ImageCopy($tmb, $src, 0, 0, $x, $y, $newWidth, $newHeight);

/*
Now we can display the image
*/
header('Content-type: image/jpeg');
ImageJpeg($tmb, null, 100);

/*
Finally, destroy images from memory
*/
ImageDestroy($src);
ImageDestroy($tmb);
ImageDestroy($thumb);

?>