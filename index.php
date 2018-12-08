<html>
	<style type="text/css">
		.result-section{
			border: 1px solid lightgrey;
		    padding: 30px;
		    margin-top: 50px;
		    width: 500px;
		}
		.qrcode-section {
		    border: 1px solid lightgrey;
		    padding: 30px;
		    margin-top: 50px;
		    background-color: lightgray;
		    width: 500px;
		}
	</style>
	<body>
		<div class="container" >
		<?php
		include('generate_qrcode.php'); 
		?>
			<div class="qrcode-section" >
				<form action="" method="post" >
					<div class="row">
						<label class="col-md-4">Enter Your Message</label>
						<div class="col-md-8">
							<textarea name="message" class="form-control" rows="8"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center" style="padding:10px;">
							<button type="submit" class="btn btn-info">Save</button>
						</div>
					</div>
				</form>
			</div>

		</div>
	</body>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html