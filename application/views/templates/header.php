<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI Blog</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">CI Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
        </li>
        </ul>
        <div class="nav navbar-nav navbar-right">
            <?php if(!$this->session->userdata("logged_in")):?>
                <a class=" btn btn-link" href="<?php echo site_url(); ?>users/register">Register</a>
                <a class=" btn btn-primary" href="<?php echo site_url(); ?>users/login">Login</a>
            <?php endif; ?>
            <?php if($this->session->userdata("logged_in")):?>

                <a class="ml-2 btn btn-link" href="<?php echo base_url(); ?>users/logout">Log out</a>
                <a class=" btn btn-link" href="<?php echo site_url(); ?>categories/create">Create Category</a>
                <a class="ml-2 btn btn-primary" href="<?php echo base_url(); ?>posts/create">Create Post</a>
            <?php endif;?>
        </div>
    </div>
  </div>
</nav>

<div class="container">

<?php if($this->session->flashdata("user_registered")): 
    echo "<p class='mt-2 alert alert-success'>".$this->session->flashdata("user_registered")."</p>";
 endif;?>

<?php if($this->session->flashdata("post_created")): 
    echo "<p class='mt-2 alert alert-success'>".$this->session->flashdata("post_created")."</p>";
 endif;?>

 <?php if($this->session->flashdata("post_updated")): 
    echo "<p class='mt-2 alert alert-success'>".$this->session->flashdata("post_updated")."</p>";
 endif;?>

<?php if($this->session->flashdata("post_deleted")): 
    echo "<p class='mt-2 alert alert-success'>".$this->session->flashdata("post_deleted")."</p>";
 endif;?>

 <?php if($this->session->flashdata("category_created")): 
    echo "<p class='mt-2 alert alert-success'>".$this->session->flashdata("category_created")."</p>";
 endif;?>

<?php if($this->session->flashdata("login_failed")): 
    echo "<p class='mt-2 alert alert-danger text-center'>".$this->session->flashdata("login_failed")."</p>";
 endif;?>

<?php if($this->session->flashdata("user_loggedin")): 
    echo "<p class='mt-2 alert alert-success'>".$this->session->flashdata("user_loggedin")."</p>";
 endif;?>

 <?php if($this->session->flashdata("logged_out")): 
    echo "<p class='mt-2 alert alert-success'>".$this->session->flashdata("logged_out")."</p>";
 endif;?>

 <?php if($this->session->flashdata("category_deleted")): 
    echo "<p class='mt-2 alert alert-success'>".$this->session->flashdata("category_deleted")."</p>";
 endif;?>