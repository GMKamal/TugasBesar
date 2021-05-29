<?php
include('db/koneksi.php');
session_start();
?>
<html>
<head>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title>Home</title>
<style>
* {
  box-sizing: border-box;
}

body {
	margin: 0;
  height: 100%;
	background-color: #483D8B;
}

.konten {
	margin-top: 40px; 
	margin-left: 65px; 
	margin-right: 65px;
	margin-bottom: 60px;
	background: #C0C0C0;
	padding-right: 100px;
	padding-left: 100px;
	padding-bottom: 120px;
  border-radius: 7px;
  min-height: 100%;
  position: relative;
}
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px 16px;
  text-decoration: none;
  letter-spacing: 1px;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  border-radius: 10px;
  color: black;
}
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
h3 {
	text-align: center;
}
img {
	display: block;
	margin-left: auto;
	margin-right: auto;
}
/* Style the footer */
.footer {
  background-color: #D3D3D3;
  height: 37px;
  text-align: center;
}
.link {
  color: black;
  text-decoration: none;
}
h3{
  box-shadow: 1.5px 3px 2px 2px grey;
  border-radius: 5px;
  padding: 2px;
  background-color: #ddd;
  width: 77%;
  margin-bottom:30px;
}
.src{
  float: left;
  margin: 10px 0px 10px 10px;
  height: 27px;
  width: 20%;
  border-radius: 7px;
  padding: 5px;
  margin-left: 130px;
}
.isrc{
  float: left;
  margin: 9px 25px 9px 5px;
  height: 30px;
  border:none;
  color: white;
  font-size: 21px;
  background-color: #333;
  cursor: pointer;
}
.ibookmark{
  margin: 1px 5px;
  border:none;
  color: #00bc8c;
  font-size: 15px;
  background-color: #333;
  border-radius: 50%;
}
.iuser{
  margin: 1px 5px;
  border:none;
  color: lightblue;
  font-size: 15px;
  background-color: #333;
  border-radius: 50%;
}
.iout{
  margin: 1px 5px;
  border:none;
  color: red;
  font-size: 15px;
  background-color: #333;
  border-radius: 50%;
}
.ihome{
  margin: 1px 5px;
  border:none;
  color: white;
  font-size: 15px;
  background-color: #00bc8c;
  border-radius: 50%;
}
</style>

</head>
<body>
<div class="topnav">
<?php
  if (isset($_SESSION['user'])){
    echo "<a href='LOGOUT.php' style='float:right;'><span class='iout'><i class='fad fa-sign-out-alt'></i></span>Logout</a>
          <a href='BOOKMARK.php' style='float:right;'><span class='ibookmark'><i class='far fa-bookmark'></i></span>Bookmark</a>";
  }
  else{
    echo "<a href='LOGIN.php' style='margin-left: 50px; float:right;'><span class='iuser'><i class='fas fa-user'></i></span>Login</a>";
  }
?>
  <a href="HOME.php" style="background-color: #00bc8c; border-radius: 0px 10px 10px 0px;"><span class='ihome'><i class="fas fa-home-lg"></i></span>Home</a>
  <a href="NEW NOVELS.php">New Novels</a>
  <a href="GENRE.php">Genre</a>
  <a href="COMPLETED.php">Completed</a>
  <a href="AllNovel.php">All Novel</a>
  <a href="ABOUT.php">About</a>
  <form method="GET" action="AllNovel.php">
    <input class="src" type="text" name="keyword" placeholder="Search...">
    <button class="isrc" type="submit" name="cari" style="width: 30px;"><i class="fas fa-search"></i></button>
  </form>
</div>
<div class="konten">
	<br>
	<h1 style="letter-spacing: 3px;">Novels</h1>
	<hr>
<div class="row">
  <?php
    $cari = "SELECT * FROM tb_novels order by rand() LIMIT 3";

    $tampil = mysqli_query($koneksi, $cari);
    while ($data = mysqli_fetch_assoc($tampil)){
      ?>
      <div class="column">
        <?php echo "<a class='link'  href='NOVEL.php?id_novel=".$data['id_novel']."'>"; ?>
          <center><h3 style='letter-spacing: 0.5px; width: 90%;'><?php echo $data['judul_novel']; ?></h3></a></center>
        <?php echo "<a class='link'  href='NOVEL.php?id_novel=".$data['id_novel']."'>"; ?>
  	      <img src="foto/<?php echo $data['gambar_novel']; ?>" alt="" class="gambar" style="border-radius: 7px; box-shadow: 6px 6px 4px black; width: 160px; height: 190px"></a>
        </div>
    <?php 
    } ?>
</div>
</div>

<div class="footer">
  <p style="padding: 10px;">&copy; 2021 - Tugas Besar</p>
</div>