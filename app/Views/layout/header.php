<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/popup.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        .chart-container {
            width: 100%;
            /* max-width: 600px; */
            height: 300px;
        }
    </style>

</head>

<body>

    <!-- Sidebar -->
    <?php echo view('layout/sidebar');?>        
    <!-- Sidebar -->

    <div id="main">
        
        <?php echo view('layout/headerpage');?>