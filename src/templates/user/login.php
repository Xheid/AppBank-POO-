<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Connexion utilisateur</title>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//bootswatch.com/paper/bootstrap.css" crossorigin="anonymous">
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body class="login">

<div class="login-panel panel panel-default">
    <div class="panel-heading" style="padding-bottom: 10px;">
        <h3 class="panel-title">Utilisateur</h3>
    </div>
    <div class="main">
        <form role="form" method="post">
            <fieldset style="padding-top: 23px;">
                <div class="form-group">
                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <button type="submit" class="btn btn-lg btn-success">Login</button>
                <button class="btn btn-lg btn-primary"><a style="color:white; text-decoration: none;" href="/inscription">S'enregistrer</a></button>
            </fieldset>
        </form>
    </div>
</div>
</div>
</body>
</html>
