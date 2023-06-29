<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <!-- <tittle>Login | STUDIO FOTO POLARIS</tittle> -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

<style>
    *{
        padding: 0;
        margin: 0;
        font-family:system-ui, '-apple-system', 'BlinkMacSystemFont', 'Lato', 'Roboto', 'Kollektif', 'Ubuntu', 'Cantarel', 'Open Sans', 'Bebas Neue', sans-serif;
    }
    body {
        background-color: #ced4da;
    }
    body h2 {
        color: #495057;
        font-family: "Segoe UI", 'Tahoma', 'Geneva', 'Verdana', 'sans-serif'
    }
    #bg-login{
        display: flex;
        height: 120vh;
        justify-content: center;
        align-items: center;
    }
.box-login{
    text-align: center;
    width: 300px;
    min-height: 250px;
    border: 1x solid #cccccc;
    background-color: #adb5bd;
    padding: 20px;
    box-sizing: border-box;
}
.box-login.h2 {
    text-align: center;
    margin-bottom: 15px;
}
.input-control{
    width: 100%;
    padding: 15px;
    margin-bottom: 15px;
    box-sizing: border-box; 
}
.btn {
    padding: 8px 15px;
    background-color: #495057;
    color: #FFF;
    border: none;
    cursor: pointer;
}
</style>

</head>
<body id="bg-login">
    <div class="box-login">
    <h2>LOGIN STUDIO POLARIS</h2>
<form action="<?php echo site_url('auth/login') ?>" method="POST">
<label></label><br>
<input type="text" name="kd_admin" placeholder="kd Admin" class="input-control"><p></p>
<label></label><br>
<input type="pswd_admin" name="pswd_admin" placeholder="pswd_admin" class="input-control"><p></p>
<input type="submit" value="Login" class="btn">
</form>
</body>
</html>