<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h2>Form Login</h2>
    <?= form_open("login/auth"); ?>
    <form>
        <div class="form-group row">
            <label for="username" class="col-4 col-form-label">Username</label> 
            <div class="col-8">
                <input id="username" name="username" placeholder="Masukkan Username anda" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-4 col-form-label">Password</label> 
            <div class="col-8">
                <input id="password" name="password" placeholder="Masukkan Password anda" type="password" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <?= form_close(); ?>

</body>
</html>