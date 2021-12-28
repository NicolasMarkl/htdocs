<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="/hotel.css" rel="stylesheet" crossorigin="anonymous">
    <title>Registrieren</title>
</head>
<body>
    <form method="post" action="register.php">
        <img class="mb-4" src="logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Erstellen Sie ein neues Konto</h1>
    
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email Adresse</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingPrefix" placeholder=" ">
            <label for="floatingPrefix">Prefix</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingVorname" placeholder=" ">
            <label for="floatingVorname">Vorname</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingNachname" placeholder=" ">
            <label for="floatingNachname">Nachname</label>
          </div>
          <div class="form-floating">
            <input type="number" class="form-control" id="floatingPLZ" placeholder=" ">
            <label for="floatingPLZ">PLZ</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingOrt" placeholder=" ">
            <label for="floatingOrt">Ort</label>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingStrasse" placeholder=" ">
            <label for="floatingStrasse">Straße</label>
          </div>
          <div class="form-floating">
            <input type="number" class="form-control" id="floatingHausnummer" placeholder=" ">
            <label for="floatingHausnummer">Hausnummer</label>
          </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Passwort</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPasswordCheck" placeholder="Password">
            <label for="floatingPasswordCheck">PasswortCheck</label>
          </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Registrieren</button>
        <a class="w-100 h4 mb-3 fw-light" href="./login.html" >Ich habe bereits ein Konto</a>
      </form>
</body>
</html>