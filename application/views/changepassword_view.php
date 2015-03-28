<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Ubah Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="<?php echo base_url()?>/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Ubah Password</h1>
</div>

    <?php echo validation_errors(); ?>
    <?php echo form_open('do_changepass'); ?>

    <div class="form-group">
        <input type="password" class="form-control input-lg" placeholder="Password" id="password" name="password"/>
    </div>
    <div class="form-group">
        <input type="password" class="form-control input-lg" placeholder="Konfirmasi Password" id="passwordConf" name="passwordConf"/>
    </div>
    <div class="form-group">
        <button type="submit" value="Change" class="btn btn-primary btn-lg btn-block">Change My Password</button>
    </div>
</form>
    <form action="home">
        <button type="submit" value="Home" class="btn btn-primary btn-lg btn-block">Cancel</button>
    </form>

</div>

</body>
</html>