<html>
<head>
    <title>Daftar</title>
    <style>
        .konten{
            width: 30%;
	        margin: 0 auto;
            margin-top: 85px;
            border-radius: 7px;
            background-color: #82E0AA;
            padding:10px;
            border: 2px solid black;
            box-shadow: -5px 5px 7px 3px black;
        }
        input{
            margin: 10px 0;
            width: 100%;
            height: 35px;
            border: 2.5px solid grey;
            border-radius: 7px;
            font-weight: bold;
        }
        .btn{
            height: 35px;
            width: 100px;
            border: none;
            margin-top: 40px;
            margin-left:70px;
            background-color: #5DADE2;
            box-shadow: -3px 3px 2px black;
            border-radius: 7px;
            letter-spacing: 3px
        }
        span{
            padding: 7px;
            font-weight: bold;
        }
    </style>
</head>
<body style="background-color: #ABB2B9;">
<div class="konten">
	<center><h2 style='letter-spacing: 3px;'>Daftar</h2><br></center>
  <div class="form-input">
	<form method = "post">
        <span style='letter-spacing: 3px;'>Nama Lengkap</span>
			<input type="text" name="nama" required placeholder = " ......"><br>

        <span style='letter-spacing: 3px;'>E-mail</span>
			<input type="email" name="email" required placeholder = " ......"><br>	

		<span style='letter-spacing: 3px;'>Username</span>
			<input type="text" name="user" required placeholder = " ......"><br>	
	
        <span style='letter-spacing: 3px;'>Password</span>
			<input type="password" name="pass" required placeholder = " ......"><br>
        
		<input type="submit" value="Daftar" name="daftar" class="btn">
		<input type="reset" value="Reset" class="btn"><br><br>
        <a href='LOGIN.php'>Kembali</a>
	</form>
  </div>
</div>
</body>
</html>
<?php
    include('db/koneksi.php');
	
    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $email= $_POST['email'];
        $user = $_POST['user'];
        $pass = md5($_POST['pass']);

        $tambah = mysqli_query($koneksi,"INSERT INTO tb_login VALUES('$user','$pass','$nama','$email')");
        if ($tambah) {
            echo "<script>
                alert('Berhasil Daftar');
                window.location='LOGIN.php';
            </script>";
        }else {
            $us= "select * from tb_login where username = '$user'";
            if ($us){
                echo "<script>
                    alert('Username sudah ada!');
                    window.location='DAFTAR.php';
                </script>"; 
            }
            echo "<script>
                alert('Gagal Daftar');
                window.location='DAFTAR.php';
            </script>";
        }
    }
?>