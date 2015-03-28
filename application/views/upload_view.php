<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <meta charset="utf-8" />
    <title>Selamat datang di private homepage :D</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="<?php echo base_url()?>/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>/bootstrap/js/bootstrap.min.js"></script>
 </head>
	<body>
		<div class="page-header text-center">
	      <h1>UPLOAD</h1>
	      <h2>Welcome Uploader!</h2>
	      <h3>Your upload size limit is just 1,5 MB</h3>
	    </div>
		<?php echo $error;?>

		<?php echo form_open_multipart('upload_controller/do_upload');?>

		      <div class="form-group">
		          <input type="file" name="userfile" class="btn btn-primary btn-lg btn-block"></button>
		      </div>

		      <div class="form-group">
		          <input type="submit" value="submit" name="usersubmit" class="btn btn-primary btn-lg btn-block"></button>
		      </div>

		</form>

	</body>
</html>