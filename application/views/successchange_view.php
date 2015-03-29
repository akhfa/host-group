<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Success Change Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="<?php echo base_url()?>/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Change Password</h1>
</div>
    <?php $session_data = $this->session->userdata('logged_in'); ?> 
    <h1> Change Password Succcessfully<?php if(element('group',$session_data) === 'admin') echo ' for '.$username?><h1>
    <div>
        <form action="home">
            <button type="submit" value="Login" class="btn btn-primary btn-lg btn-block">Home</button>
        </form>
    </div>
</form>

</div>

</body>
</html>