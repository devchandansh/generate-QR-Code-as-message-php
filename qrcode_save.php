<?php
include('library/phpqrcode/qrlib.php'); 
include('config.php'); 


// outputs image directly into browser, as PNG stream 
// QRcode::png('PHP QR Code :)');

$data = "TX-1475484100254";
$file_name = "TX-1475484100254";

//=================== Example-1 ====================
// how to save PNG codes to server 
 
$tempDir = EXAMPLE_TMP_SERVERPATH; 

$codeContents = "Tracking Number: $data"; 
 
// we need to generate filename somehow,  
// with md5 or with database ID used to obtains $codeContents... 
// $fileName = '005_file_'.md5($codeContents).'.png'; 
$fileName = $file_name.'.png'; 
 
$pngAbsoluteFilePath = $tempDir.$fileName; 
$urlRelativeFilePath = EXAMPLE_TMP_URLRELPATH.$fileName; 
 
// generating 
if (!file_exists($pngAbsoluteFilePath)) { 
    QRcode::png($codeContents, $pngAbsoluteFilePath); 
    echo 'File generated!'; 
    echo '<hr />'; 
} else { 
    echo 'File already generated! We can use this cached file to speed up site on common codes!'; 
    echo '<hr />'; 
} 
 
echo 'Server PNG File: '.$pngAbsoluteFilePath; 
echo '<hr />'; 
 
// displaying 
echo '<img src="'.$urlRelativeFilePath.'" />';
?>