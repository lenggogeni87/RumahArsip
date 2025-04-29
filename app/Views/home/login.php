<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertical Navbar - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <style>
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Full viewport height */
        }

        .form-container {
            max-width: 400px;
            /* Set a maximum width for the form */
            width: 100%;
            /* Full width within the max */
            padding: 20px;
            /* Add some padding */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Optional shadow for better visibility */
            border-radius: 20px;
            /* Rounded corners */
            background-color: white;

        }
    </style>
</head>

<body>
    <div class="centered-form">
        <div class="form-container">
            <div class="row">
                <div class="auth-logo text-center" style="margin-bottom: 20px;"> <!-- Menambahkan kelas text-center -->
                    <a href="index.html"><img src="assets/images/logo/manrisk.png" alt="Logo" style="width: 40%;"></a>
                </div>

                <h3 class="auth-title text-center">Log in.</h1>
                    <p class="auth-subtitle mb-3">Log In menggunakan data yang kamu masukan saat mendaftaryaa</p>
            </div>
            <div class="row">
                <form action="<?= base_url('/') ?>">
                    <div class="form-group position-relative has-icon-left mb-3">
                        <input type="text" class="form-control form-control-lg" placeholder="Username">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-3">
                        <input type="password" class="form-control form-control-lg" placeholder="Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Tetap Log in
                        </label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-4">Log in</button>
                </form>
            </div>
            <div class="row">
                <div class="text-center mt-4 text-lg fs-4">
                    <p class="text-gray-600 small" style="font-size: 0.8em;">Belum punya akun ? <a href="auth-register.html" class="font-bold" style="font-size: 0.8em;">Daftar</a>.</p>
                    <p class="small"><a class="font-bold" href="auth-forgot-password.html" style="font-size: 0.8em;">Lupa password?</a>.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>