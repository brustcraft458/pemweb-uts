<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <!-- <h1>Register</h1>
    <form action="./backend/register.php" method="post">
        <input type="text" name="name" placeholder="masukkan nama anda">
        <input type="email" name="email" placeholder="masukkan email anda">
        <input type="password" name="password" placeholder="masukkan password anda">
        <input type="password" name="confirm" placeholder="masukkan konfirmasi password anda">
        <input type="submit" value="register" name="submit">
    </form> -->

    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center mx-auto">
        <div class="d-flex justify-content-center py-4">
            <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="./img/ubp.png" style="width: 30px; height: 30px" alt="">
                <span class="d-none d-lg-block">Karawang</span>
            </a>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Register Your Account</h5>
                    <p class="text-center small">Enter data</p>
                </div>
                <form action="./backend/register.php" method="post" class="row g-3 needs-validation">
                    <div class="col-12">
                        <label for="yourNama" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="yourNama" required="">
                        <div class="invalid-feedback">Please enter your nama.</div>
                    </div>
                    <div class="col-12">
                        <label for="yourEmail" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="email" name="email" class="form-control" id="yourEmail" required="">
                            <div class="invalid-feedback">Please enter your email.</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" required="">
                        <div class="invalid-feedback">Please enter your email.</div>
                    </div>
                    <div class="col-12">
                        <label for="yourPasswordConfirm" class="form-label">Konfirmasi Password</label>
                        <input type="password" name="confirm" class="form-control" id="yourPasswordConfirm" required="">
                        <div class="invalid-feedback">Please enter your email.</div>
                    </div>
                    <div class="col-12">
                        <input type="submit" class="btn btn-primary w-100" value="Register" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>