<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Регистрация</title>
    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" >
    <link href="/css/alertify.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post">
        {!! csrf_field() !!}
        <h2 class="form-signin-heading">Пожалуйста зарегистрируйтесь</h2>
        <label for="inputEmail" class="sr-only">Email адрес</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email адрес" required autofocus>
        <label for="inputPasswordFirst" class="sr-only">Пароль</label>
        <input type="password" id="inputPasswordFirst" name="password" class="form-control" placeholder="Пароль" required>
          <label for="inputPassword" class="sr-only">Повторите пароль</label>
          <input type="password" id="inputPassword" name="password_confirmation"class="form-control" placeholder="Повторите пароль" required>

          <div class="checkbox">
          <label>
            <input type="checkbox" value="1" name="remember"> Запомнить
</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Регистрация</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="/js/alertify.js"></script>
    @extends('inc.messages')
  </body>
</html>
