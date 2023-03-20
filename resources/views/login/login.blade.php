<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Rent-book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <style>
    .form-login{
        border:  1px solid;
        padding: 15px;
        border-radius: 15px 70px;
        box-shadow: 1px 2px 3px 1px rgba(0,0,0,0.8);
    }
    .alert{
        border:  1px solid;
        padding: 15px;
        border-radius: 15px 70px;
        box-shadow: 1px 2px 3px 1px rgba(0,0,0,0.8);
    }
  </style>
  <body>
      <div class="container d-flex flex-column justify-content-center align-items-center" style="height:100vh;">
        <div class="form-login">
            @if (session('status'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif
            <form action="" method="post" style="width:450px;">
            @csrf
            <div class="mb-3 text-center">
               <!-- <div class="mb-3 logo">
				<img src="assets/img/landing.png" style="width:150px;"/>
			   </div> -->
                <h3>Login</h3>
            </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter a name">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter a password">
                </div>
                <button type="submit" class="w-100 btn btn-primary" style="border-radius: 0 2rem">Submit</button>
                <div class="mb-3 text-center">
                    <p>Don't Have a account? <a href="/register" style="text-decoration: none;">Register</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>