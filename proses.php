<?php
// Mulai session
session_start();

// Cek cookie
if (isset($_COOKIE["name"]) && isset($_COOKIE["email"]) && isset($_COOKIE["phone"]) && isset($_COOKIE["address"])&& isset($_COOKIE["kelamin"])&& isset($_POST["ttl"])&& isset($_POST["agama"])&& isset($_POST["pekerjaan"])) {
    $name = $_COOKIE["name"];
    $email = $_COOKIE["email"];
    $phone = $_COOKIE["phone"];
    $address = $_COOKIE["address"];
    $kelamin = $_COOKIE["kelamin"];
    $ttl = $_COOKIE["ttl"];
    $agama = $_COOKIE["agama"];
    $pekerjaan = $_COOKIE["pekerjaan"];
} else {
    $name = $_SESSION["name"];
    $email = $_SESSION["email"];
    $phone = $_SESSION["phone"];
    $address = $_SESSION["address"];
    $kelamin = $_SESSION["kelamin"];
    $ttl = $_SESSION["ttl"];
    $agama = $_SESSION["agama"];
    $pekerjaan = $_SESSION["pekerjaan"];
}

// Cek apakah form sudah di-submit
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_COOKIE["address"])&& isset($_COOKIE["kelamin"])&& isset($_POST["ttl"])&& isset($_POST["agama"])&& isset($_POST["pekerjaan"])) {
    // Set cookie
    setcookie("name", $_POST["name"], time() + 3600);
    setcookie("email", $_POST["email"], time() + 3600);
    setcookie("phone", $_POST["phone"], time() + 3600);
    setcookie("address", $_POST["address"], time() + 3600);
    setcookie("kelamin", $_POST["kelamin"], time() + 3600);
    setcookie("ttl", $_POST["ttl"], time() + 3600);
    setcookie("agama", $_POST["agama"], time() + 3600);
    setcookie("pekerjaan", $_POST["pekerjaan"], time() + 3600);

    // Set session
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["phone"] = $_POST["phone"];
    $_SESSION["address"] = $_POST["address"];
    $_SESSION["kelamin"] = $_POST["kelamin"];
    $_SESSION["ttl"] = $_POST["ttl"];
    $_SESSION["agama"] = $_POST["agama"];
    $_SESSION["pekerjaan"] = $_POST["pekerjaan"];

    // Set nilai $name, $email, $phone, dan $address
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $kelamin = $_POST["kelamin"];
    $ttl = $_POST["ttl"];
    $agama = $_POST["agama"];
    $pekerjaan = $_POST["pekerjaan"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1  {
            text-align: center;
        }
      
        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h2 {
           font-size: 8;
            text-align: center;
            
           
        }
        p {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            resize: none;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        input[type="submit"]:hover {
            background-color: #4CAF50;
        }
        label {
            font-weight: bold;
        }
        .remember {
            margin-top: 16px;
        }
        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
            
        }
       
       </style>
</head>
<body>

    <h1>MY BIODATA </h1>
    <h2> Silahkan Lihat Data Diri Anda Di Bawah Ini. </h2>
    <form method="post" action="index.php">
    <p>Nama Lengkap: <?php echo $name; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p> No.Telephone: <?php echo $phone; ?></p>
    <p> Alamat Lengkap: <?php echo $address; ?></p>
    <p> Kelamin: <?php echo $kelamin;?></p>
    <p> Tempat, Tanggal Lahir: <?php echo $ttl; ?></p>
    <p> Agama: <?php echo $agama; ?></p>
    <p> Pekerjaan: <?php echo $pekerjaan; ?></p>


    <a href="index.php" class="button" style="background-color: red; color: white;"><- Back To Form</a>
</body>
</html>
