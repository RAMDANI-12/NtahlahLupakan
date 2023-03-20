<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Rent-book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <style>
    .form-register{
        border:  1px solid;
        padding: 15px;
        border-radius: 10px 35px;
        box-shadow: 2px 2px 4px 1px rgba(0,0,0,0.8);
    }
  </style>
  <body>
      <div class="container d-flex flex-column justify-content-center align-items-center" style="height:100vh;">
        <div class="form-register">
            @if ($errors->any())
                <div class=" alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('status'))
            <div class=" alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <form action="" method="post" style="width:455px;">
            @csrf
            <div class="mb-3 text-center">
                <h3>Register</h3>
            </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">Nik</label>
                    <input type="text" name="nik" class="form-control" id="nik">
                </div>
                <div class="mb-3">
                    <label for="no_tlpn" class="form-label">Phone</label>
                    <input type="number" name="no_tlpn" class="form-control" id="no_tlpn">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" class="w-100 btn btn-primary mt-3">Submit</button>
                <div class="mb-3 text-center">
                    <p>Have a Account?  <a href="/login" style="text-decoration: none;">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>