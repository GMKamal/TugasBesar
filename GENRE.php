<?php
include('db/koneksi.php');
session_start();
?>
<html>
<head>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<title>Genre</title>
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
	padding-bottom: 100px;
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
/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 24%;
  padding: 0px 45px ;
  height: 80px;
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

.button {
  color: white;
  width: 200px;
  height: 35px; 
  text-align: center;
  display: block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  font-weight: bold;
  background-color: #3498db;
  letter-spacing: 1.5px;
  
  box-shadow: 3px 3px 2px black;
  border-radius: 7px;
}

/* Style the footer */
.footer {
  background-color: #D3D3D3;
  height: 37px;
  text-align: center;
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
  background-color: #333;
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
  <a href="HOME.php"><span class='ihome'><i class="fas fa-home-lg"></i></span>Home</a>
  <a href="NEW NOVELS.php">New Novels</a>
  <a href="GENRE.php" style="background-color: #00bc8c; border-radius: 10px;">Genre</a>
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
	<h1 style="letter-spacing: 3px;">Genre</h1>
	<hr>
<div class="row">
<form method="GET" action="AllNovel.php">
  <div class="column">
    <button class="button" name="action">Action</button>
  </div>
  
  <div class="column">
    <button class="button" name="adventure">Adventure</button>
  </div>

  <div class="column">
    <button class="button" name="comedy">Comedy</button>
  </div>

  <div class="column">
    <button class="button" name="fantasy">Fantasy</button>
  </div>

  <div class="column">
    <button class="button" name="harem">Harem</button>
  </div>
  
  <div class="column">
    <button class="button" name="martialart">Martial Arts</button>
  </div>

  <div class="column">
    <button class="button" name="mecha">Mecha</button>
  </div>

  <div class="column">
    <button class="button" name="romance">Romance</button>
  </div>

  <div class="column">
    <button class="button" name="school">School Life</button>
  </div>

  <div class="column">
    <button class="button" name="sci-fi">Sci-fi</button>
  </div>

  <div class="column">
    <button class="button" name="xianxia">Xianxia</button>
  </div>

  <div class="column">
    <button class="button" name="xuanhuan">Xuanhuan</button>
  </div>
</form>
</div>
</div>

<div class="footer">
  <p style="padding: 10px;">&copy; 2021 - Tugas Besar</p>
</div>
</body>
</html>