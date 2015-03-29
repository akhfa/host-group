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
      <h1>Managing group</h1>
    </div>
    
    <!-- Tabel manajemen grup -->
    <div class="table-responsive">   
    <?php if (!empty($daftargrup)) {?>   
        <h1>Daftar grup</h1>     
        <table class="table">
        <!-- <caption class="row text-center">Manajemen User</caption> -->
          <thead>
            <tr>
              <th>No.</th>
              <th>Group</th>
              <th class="row text-center">Manage Grup Member</th>
              <th class="row text-center">Hapus Grup</th>
            </tr>
          </thead>
          <tbody>
              <?php $no = 1; ?>
              <?php foreach ($daftargrup as $grup): ?>
                <tr>
                  <td><?php echo $no;             ?></td>
                  <td><?php echo $grup->group;    ?></td>
                  <td class="row text-center"> <a href="group_controller/managegroup/<?php echo $grup->group;?>"><span class="glyphicon glyphicon glyphicon-pencil"></span></td>
                  <td class="row text-center"> <?php if(strcmp($grup->group, $group) != 0) { echo '<a href="group_controller/delgroup/'.$grup->group.'">';}?><span class="glyphicon glyphicon-remove"></span></td>
                </tr>
                <?php $no++; ?>
              <?php endforeach; ?>
          </tbody>
        </table>
      <?php } else {echo '<h2>Tidak ada daftar grup di database.</h2>';} ?>
    </div>

    <form action="<?php echo base_url()?>index.php/home">
      <div class="form-group">
          <button type="submit" value="Home" class="btn btn-primary btn-lg btn-block">Back</button>
      </div>
    </form>

 </body>
</html>