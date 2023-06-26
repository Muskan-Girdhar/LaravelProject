<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<style>
    .inputwidth
    {
        width:30%;
    }
    .customlogin
    {
        height:420px;
        padding:100px;
        margin-bottom:50px;
    }
</style>  
</head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Blogging</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addpost">Add post</a>
        </li>    
      </ul>
    </div>
  </div>
</nav>
@yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>