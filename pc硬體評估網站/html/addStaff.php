
<?php
	session_start();
	include("db_conn.php");
	?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body,html {
    background-image: url('https://i.imgur.com/xhiRfL6.jpg');
    height: 100%;
    }
    #profile-img {
        height:180px;
    }
</style>
<div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center">
            <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form  class="form-signin" action='addStaff1.php' method="POST">
                <input type="text" name="name" id="name" class="form-control form-group" placeholder="name" required autofocus>
                <input type="password" name="password" id="inputPassword" class="form-control form-group" placeholder="password" required autofocus>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">add</button>
            </form><!-- /form -->
        </div>
    </div>
</div>
</div>