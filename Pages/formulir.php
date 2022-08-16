<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css"href="css/formulir.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../Assets/Logo_PLN.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">PLN UNIT INDUK WILAYAH</span>
                    <span class="profession">ACEH</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Cari">
                </li>

                <ul class="menu-links"> 
                <li class="nav-link">
                        <a href="../index.php">
                        <i class='bx bxs-dashboard icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="menu-links">
                      <a href="penempatan.php">
                      <i class='bx bxs-archive-in icon' ></i>
                            <span class="text nav-text">Penempatan Barang</span>
                      </a>

                    </li>

                    <li class="menu-links">
                      <a href="penarikan.php">
                      <i class='bx bxs-archive-out icon' ></i>
                            <span class="text nav-text">Penarikan Barang</span>
                      </a>

                    </li>

                    <li class="menu-links">
                      <a href="pengeluaran.php">
                      <i class='bx bxs-archive icon' ></i>
                            <span class="text nav-text">Pengeluaran Sementara Barang</span>
                      </a>

                    </li>

                    <li class="menu-links">
                      <a href="#">
                      <i class='bx bxs-file icon' ></i>
                            <span class="text nav-text">Formulir</span>
                      </a>

                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Keluar</span>
                    </a>
                </li>

                
                
            </div>
        </div>

    </nav>

    <section class="home" id="home">
    <h1 class="text"><b>Formulir Pendataan Inventaris</b><br>Fasiltas Pendukung</h1>
    <div class="container">
    <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title"><b>Detail Barang</b></span>

                    <div class="fields">
                    <div class="input-field">
                            <label>Jenis</label>
                            <select required>
                                <option disabled selected>Pilih Jenis Formulir</option>
                                <option>Penempatan Barang</option>
                                <option>Penarikan Barang</option>
                                <option>Pengeluaran Sementara Barang</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Nama Barang</label>
                            <input type="text" placeholder="Masukkan Nama Barang" required>
                        </div>

                        <div class="input-field">
                            <label>Merk/Type</label>
                            <input type="text" placeholder="Masukkan Merk/Type" required>
                        </div>

                        <div class="input-field">
                            <label>Nomor Seri</label>
                            <input type="text" placeholder="Masukkan Nomor Seri" required>
                        </div>

                        <div class="input-field">
                            <label>Nomor Barang</label>
                            <input type="text" placeholder="Masukkan Nomor Barang" required>
                        </div>

                        <div class="input-field">
                            <label>Satuan Jumlah</label>
                            <input type="number" placeholder="Masukkan Satuan Jumlah" required>
                        </div>

                        <div class="input-field">
                            <label>Jumlah</label>
                            <input type="number" placeholder="Masukkan Jumlah" required>
                        </div>
                        <div class="input-field">
                            <label>Keterangan</label>
                            <input type="text" placeholder="Masukkan Keterangan" required>
                        </div>
                        <div class="input-field">
                            <label>Tanggal</label>
                            <input type="date" placeholder="Masukkan Tanggal" required>
                        </div>
                       
                        
                    </div>
                    
                </div>

                

                    <div class="buttons">
                        
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Kembali</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Simpan</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                        
                    </div>
                </div> 
            </div>
        </form>


            
        </div>
        
  
</section>

<!--
    <section class="home">
        <div class="text"><b>Sistem Pendataan Inventaris</b><br class="br">Fasilitas Pendukung</div>
        
       
        <h1 id="dashboard">Dashboard</h1>
    </section>
-->


   

</body>
<script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");




toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});





    </script>
</html>
