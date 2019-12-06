<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lime Light International</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>home_css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>home_css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>home_css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>home_css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>home_css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>home_css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>home_css/ionicons.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>home_css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>home_css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin_css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin_css/bootstrap.min.css">
  </head>
  <body>
    
    <div class="sidenav">
        <img src="<?php echo base_url(); ?>images/logo2.png" width="150px" alt="" style="margin-left: 20px;">
      <div class="navbar">
        <a href="<?php echo base_url(); ?>admin">Dashboard</a>
        <a href="<?php echo base_url(); ?>admin/admins"  class="active">Admins</a>
        <a href="<?php echo base_url(); ?>admin/opport">Oportunities</a>
        <a href="#contact">Contact</a>
        <a href="#contact">Logout</a>
      </div>
    </div>

 
    <div class="main">
      <h1 class="text-primary text-center">Admins</h1>
          <?php if($this->session->flashdata('success') != ''){?>
                  <div class="alert alert-success">
                    <?php echo $this->session->flashdata('success'); ?>
                  </div>
          <?php }elseif ($this->session->flashdata('error') != '') {?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error'); ?>
              </div>
          <?php } ?> 

    <div class="container">
      <h1>Add Admin</h1>

      <form action="<?php echo base_url(); ?>admin/admins" method="POST">
        <fieldset class="fieldset">
              <div class="form-group">
              <label><h3>Name</h3></label><br>
                <input type="text" name="name" class="form-control" placeholder="Enter name here">
              </div>
              <div class="form-group">
              <label><h3>Email:</h3></label><br>
                <input type="email" name="email" class="form-control" placeholder="Enter email here">
              </div>
              <div class="form-group">
              <label><h3>Password:</h3></label><br>
                <input type="password" name="password" class="form-control" placeholder="Enter password here" value="">
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg" name="save" value="Add">Add</button>
              </div>
          </fieldset>
      <?php echo form_close(); ?>
    </div>

  </div>

  </body>
  </html>
