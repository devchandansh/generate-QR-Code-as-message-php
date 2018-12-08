<?php
include('library/phpqrcode/qrlib.php'); 
include('config.php'); 

$tempDir = EXAMPLE_TMP_SERVERPATH; 


if(!empty($_POST['message'])){
	
	// Posted Data
	$posted_message = trim($_POST['message']);
	$codeContents = $posted_message; 

	// File Name
	$file_name = "SC-".time();
	$fileName = $file_name.'.png'; 
	  
	$pngAbsoluteFilePath = $tempDir.$fileName; 
	$urlRelativeFilePath = EXAMPLE_TMP_URLRELPATH.$fileName; 

	$return_data['status'] = FALSE;
	
	// Generating QR-Code 
	if (!file_exists($pngAbsoluteFilePath)) { 
	    $qr_status = QRcode::png($codeContents, $pngAbsoluteFilePath);

	    $return_data['status'] 	= TRUE;
	    $return_data['message'] = 'File generated!';
	    $return_data['url'] 	= $urlRelativeFilePath;
	} else { 
		$return_data['status'] 	= TRUE;
		$return_data['message'] = 'File already generated! We can use this cached file to speed up site on common codes!';
	    $return_data['url'] 	= $urlRelativeFilePath;
	} 
	    
	// echo 'Server PNG File: '.$pngAbsoluteFilePath; 
	// echo '<hr />'; 
	// // displaying 
	// echo '<img src="'.$urlRelativeFilePath.'" />';
 	?>

	<div class="result-section">
		<h3><?php echo $return_data['message'];?></h3>
	 	<div class="row">
			<div class="col-md-4"><img src="<?php echo $urlRelativeFilePath;?>" /></div>
			<div class="col-md-8"><textarea class="form-control"><?php echo $posted_message; ?></textarea></div>
		</div>
	</div>

<?php
}
?>