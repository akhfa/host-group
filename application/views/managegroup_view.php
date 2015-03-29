<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <meta charset="utf-8" />
    <title>Manage Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>

 </head>
 <body>
    <?php $session_data = $this->session->userdata('logged_in'); ?>
    <div class="page-header text-center">
      <h1>Home</h1>
      <h3>Managing <?php echo $groupname; ?></h3>
    </div>
    
    <!-- Tabel manajemen user -->
    <div class="table-responsive">          
      <table class="table">
      <!-- <caption class="row text-center">Manajemen User</caption> -->
        <thead>
          <tr>
            <th>No.</th>
            <th>Username</th>
            <th class="row text-center">Edit User</th>
            <th class="row text-center">Ubah Password</th>
            <th class="row text-center">Hapus User</th>
          </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($daftaruser as $user): ?>
              <tr>
                <td><?php echo $no;             ?></td>
                <td><?php echo $user->username; ?></td>
                <td class="row text-center"> <a href="<?php echo base_url()?>index.php/edituser_controller/edituser/<?php echo $user->username;?>/<?php echo $user->group;?>/<?php echo $user->role;?>"><span class="glyphicon glyphicon glyphicon-pencil"></span></td>
                <td class="row text-center"> <a href="<?php echo base_url()?>index.php/changepassword_controller/changepass/<?php echo $user->username;?>"><span class="glyphicon glyphicon glyphicon-pencil"></span></td>
                <td class="row text-center"> <a href="<?php echo base_url()?>index.php/user_controller/deluser/<?php echo $user->username?>"><span class="glyphicon glyphicon-remove"></span></td>
              </tr>
              <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <form action="<?php echo base_url()?>index.php/home">
      <div class="form-group">
          <button type="submit" value="Home" class="btn btn-primary btn-lg btn-block">Home</button>
      </div>
    </form>

 </body>
</html>