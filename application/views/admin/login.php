<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
  integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Agenda</title>
</head>
<body>

    <div class="row" style="margin-top:200px">
        <div class="col-md-4 offset-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form action="<?= base_url('login/login_aksi'); ?>" method="POST">
                        <div class="form-group">
                            <label for="Username">Username</label>
                            <input type="text" name="Username" class="form-control" autocomplete="off">
                            <small><span class="text-danger"><?= form_error('username'); ?></span></small>
                        </div>
                        <div>
                            <label for="Password">Password</label>
                            <input type="password" name="Password" class="form-control" autocomplete="off">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<br>