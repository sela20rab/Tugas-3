<?php
// Mulai session
session_start();

// Set cookie
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["address"])&& isset($_POST["kelamin"])&& isset($_POST["ttl"])&& isset($_POST["agama"])&& isset($_POST["pekerjaan"])) {
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
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1,p {
            text-align: center;
        }
        form {
            max-width: 500px;
            margin: auto;
            padding: 50px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="text"], input[type="email"], input[type="tel"], select,textarea {
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
<h1>ADD FORM</h1>
<p>Silahkan Masukan Data Diri Anda Di Bawah Ini.
    <form action="proses.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <label for="kelamin">Jenis Kelamin:</label>
		<select name="kelamin" id="kelamin" required>
			<option value="">-- Pilih kelamin --</option>
			<option value="Wanita">Laki-Laki</option>
			<option value="Perempuan">Perempuan</option>	
		</select>

        <label for="ttl">Tempat, Tanggal Lahir:</label>
		<input type="text" id="ttl" name="ttl" required>

        <label for="agama">Agama:</label>
		<select name="agama" id="agama" required>
			<option value="">-- Pilih Agama --</option>
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>	
            <option value="Hindu">Hindu</option>	
            <option value="Buddha">Buddha</option>	
            <option value="Konghuchu">Konghuchu</option>	
		</select>

        <label for="pekerjaan">Pekerjaan:</label>
		<select name="pekerjaan" id="pekerjaan" required>
			<option value="">-- Pilih Pekerjaan --</option>
			<option value="Mahasiswa">Mahasiswa</option>
			<option value="Pegawai">Pegawai</option>
			<option value="Wiraswasta">Wiraswasta</option>
			<option value="Lainnya">Lainnya</option>
		</select>
		
        <input type="submit" value=" + Add Data ">
    </form>
</body>
</html>
