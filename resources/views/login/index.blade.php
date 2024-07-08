<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/css/signin.css" rel="stylesheet">

   
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="/login" method='post'>
    @csrf
    <h1 class="h3 mb-3 fw-normal">AYO LOG IN!!  </h1>

    <div class="form-floating">
      <input type="email" name= 'email'class="form-control @error('email') is-invalid @enderror"  id="email" placeholder="name@example.com" autofocus required>
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name='password' class="form-control" id="password" placeholder="Password" required>
      <label for="password" >Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">LOG IN</button>
  </form>
  <small>Belum Daftar</small>
</main>
  </body>
</html>
