<?php 
    if (isset($_SESSION['user'])) {
        echo '<script> location.replace("index.php?site=home"); </script>';
    }
?>

<!DOCTYPE html>
<html>
<body>
    <div style="display: flex; align-items: center; justify-content: center; height: 35rem;" data-aos="zoom-in">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card card-bg">
                        <div class="card-header">
                            <h2 class="text-center">Bejelentkezés</h2>
                        </div>
                        <div class="card-body"> 
                            <form action="operations/op_login.php" id="loginForm" name="loginForm" method="POST">
                                <div class="form-group">
                                    <label for="email">E-mail:</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                    <small id="emailError" class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label for="password">Jelszó:</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <small id="passwordError" class="text-danger"></small>
                                </div>
                                <h6 class="text-center">Még nincs fiókod? <a href="?site=register">Regisztrálj be!</a></h6>
                                <button type="submit" class="btn btn-dark w-100">Belépés</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="scripts/login.js"></script>
</body>
</html>