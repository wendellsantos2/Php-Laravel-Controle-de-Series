
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .card {
      margin-top: 50px;
      max-width: 500px;
    }
  </style>
</head>
<body>
  <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card text-center">
      <img class="card-img-top" src="https://picsum.photos/400/400" alt="Random Image">
      <div class="card-body">
        <h5 class="card-title">Login</h5>

        <form method="POST" action="{{ route('login') }}">
            @csrf


    <div class="flex items-center justify-end mt-4">


    </div>
     <div class="form-group">
        <label for="">Email</label>
        <input class="form-control"  id="email" type="email" name="email" :value="old('email')" required autofocus >
      </div>
      <div class="form-group">
        <label for="">Senha</label>
        <input class="form-control" id="password"
        type="password"
        name="password"
        required autocomplete="current-password">
      </div>
      <x-button class="ml-3 btn btn-sucess">
        {{ __('Logar') }}

    </x-button>

    <a class= "btn btn-sucess ml-3" href="./register">Registro</a>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
          crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
          crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
          crossorigin="anonymous"></script>
</body>
</html>


