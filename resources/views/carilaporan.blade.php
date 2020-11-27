<!DOCTYPE html>
<html lang="en">
<title>Daftar</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: black;
  color: white;
}
</style>

<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h4 class="w3-padding-64"><b>Sistem Informasi<br>Pengaduan Masyarakat</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Dasbord</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Cari Laporan</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Formulir Laporan</a> 
    <a href="#designers" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Laporan Saya</a> 
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Profil</a>
    <a href="#packages" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-maroon w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-maroon w3-margin-right" onclick="w3_open()">☰</a>
  
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
  <h1>Daftar Laporan</h1>
  </div>

  <form action="/action_page.php">
    <div style='text-align:left;'><input type="submit"value="Formulir Laporan">
    
    </div>
 
 </form>

  <div style='text-align:left;'>Kategori
 </div>
 <div style='text-align:left;'
 >Pilih Kategori:</label>
    <select name="cars" id="cars">
       <option value="All">All</option>
      <option value="Pendidikan">Pendidikan</option>
      <option value="Dana Desa">Dana Desa</option>
      <option value="BPJS">BPJS</option>
      <option value="Acara">Acara</option>
      <option value="--dll--">--dll--</option>
    </select>
  </form>
 </div>
 <br>
 <div style='text-align:left;'>

     <p>1-5 dari Daftar Laporan</p>
 </div>
 <table id="customers">

   <tr>
     <th>ID</th>
     <th>Nama</th>
     <th>Email</th>
     <th>Kategori</th>
     <th>Tingkat</th>
   </tr>
   
     <?php
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ID"]. "</td>";
            echo "<td>" . $row["Nama"]. "</td>";
            echo "<td>" . $row["Email"]. "</td>";
            echo "<td>" . $row["Judul"]. "</td>";
            echo "<td>" . $row["Tingkat"]. "</td>";
           echo "</tr>";
          }
        } else {
          echo "0 results";
        }
     ?>
   
 </table>
 
 <div style='text-align:right;'><button type="button" onclick="alert('Hello world!')">Berikutnya-></button>
</div>

</div>


<div>
 <aside class="card">

   <p>Sistem Informasi Pelaporan Masyarakat</p>
      
       <section>
   <nav> 
       <ul>
     <li><a href="Home.html">Dasbord</a></li>
     <li><a href="Formulir Laporan.html">cari Laporan</a></li>
     <li><a href="Formulir Laporan.html">Formulir Laporan</a></li>
     <li><a href="myreport.html">Laporan Saya</a></li>
     <li><a href="pengaduan.html">Beranda</a></li>
     <li><a href="Sistem Pengaduan.html">Logout</a></li>
       </ul>
    <nav>
   </section>

 </aside>
</div>

<style>
            .footer {
               left: 0;
               bottom: 0;
               width: 100%;
               background-color: rgba(55, 50, 78, 0.247);
               color: black;
               text-align: center;
            }
            </style>
            </head>
            <body>
           
            <div class="footer">
              <p>© 2020 Copyright: SIADU-10 PPW</p>
            </div>

</body>
</html>