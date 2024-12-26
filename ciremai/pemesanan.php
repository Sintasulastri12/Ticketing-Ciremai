<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>
     MT.Ciremai
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
     body {
              font-family: 'Arial', sans-serif;
              background-color: #f8f9fa;
          }
          .navbar {
              background-color: #333;
          }
          .navbar-brand {
              font-weight: bold;
          }
          .navbar-nav .nav-link {
              color: #fff;
          }
          .navbar-nav .nav-link:hover {
              color: #ddd;
          }
          .header {
              position: relative;
              text-align: center;
              color: white;
          }
          .header img {
              width: 100%;
              height: auto;
          }
          .header .overlay {
              position: absolute;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              background: rgba(0, 0, 0, 0.5);
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
          }
          .header h1 {
              font-size: 3rem;
              font-weight: bold;
          }
          .header p {
              font-size: 1.5rem;
          }
          .content {
              padding: 2rem;
              background-color: #fff;
              border-radius: 10px;
              margin-top: -50px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          }
          .content h2 {
              font-size: 2rem;
              font-weight: bold;
          }
          .content .icon-text {
              display: flex;
              align-items: center;
              margin-bottom: 1rem;
          }
          .content .icon-text i {
              font-size: 2rem;
              margin-right: 1rem;
          }
          .booking-form {
              background-color: #f8f9fa;
              padding: 1rem;
              border-radius: 10px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          }
          .gallery {
              margin-top: 2rem;
          }
          .gallery img {
              width: 100%;
              height: auto;
              border-radius: 10px;
          }
          .gallery .card {
              border: none;
          }
          .gallery .card-title {
              font-size: 1rem;
              font-weight: bold;
          }
          .gallery .card-text {
              font-size: 0.9rem;
          }
          .footer {
              background-image: url('aset/image/gbawah.png');
              color: #fff;
              padding: 2rem;
              text-align: center;
          }
          .footer a {
              color: #fff;
              margin: 0 0.5rem;
          }
          .footer a:hover {
              color: #ddd;
          }
          .nav-tabs .nav-link.active {
              background-color: #fff;
              border-color: #dee2e6 #dee2e6 #fff;
          }
          .form-control, .form-select {
              border-radius: 0.25rem;
          }
          .btn-dark {
              background-color: #333;
              border-color: #333;
          }
          .btn-dark:hover {
              background-color: #555;
              border-color: #555;
          }
    </style>
   </head>
   <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
     <div class="container">
      <a class="navbar-brand" href="#">
       MT.CIREMAI
      </a>
      <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
       <span class="navbar-toggler-icon">
       </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav ms-auto">
        <li class="nav-item">
         <a class="nav-link" href="index.php">
          BERANDA
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="pemesanan.php">
          PEMESANAN
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="#">
          BLOG
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link " href="#">
          DAFTAR
         </a>
        </li>
       </ul>
      </div>
     </div>
    </nav>
    <header class="header">
     <img alt="Mountain view background image" height="600" src="aset/image/gunung.jpg" width="1920"/>
     <div class="overlay">
      <h1>
       MT.Ciremai
      </h1>
      <p>
       Melangkah Bersama Alam, Menyentuh Awan!
      </p>
     </div>
    </header>
<main class="flex-shrink-0">
    <div class="container">
      <form method="post" action="config/process.php">
  <div class="card mt-2">
    <div class="card-header bg-dark text-white">
      Form Pemesanan Paket Wisata
    </div>
    <div class="card-body">
      <div class="mb-3">
        <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan" placeholder="Nama Lengkap Sesuai Tanda Pengenal" required>
      </div>
      <div class="mb-3">
        <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
        <input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" placeholder="Nomor Handphone 08..." required>
      </div>
      <div class="mb-3">
        <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
        <input type="date" class="form-control" id="waktu_wisata" name="waktu_wisata" placeholder="Waktu Mulai Perjalanan" required>
      </div>
      <div class="mb-3">
        <label for="hari_wisata" class="form-label">Hari Wisata</label>
        <input type="number" class="form-control" id="hari_wisata" value="1" name="hari_wisata" placeholder="Jumlah Hari Perjalanan" required>
      </div>
      <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="paket_inap" value="1" id="paket_inap">
            <label class="form-check-label" for="paket_inap">
              Penginapan (Rp. 1.000.000)
            </label>
          </div>
      </div>
      <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="paket_transport" value="1" id="paket_transport">
            <label class="form-check-label" for="paket_transport">
              Transportasi (Rp. 1.200.000)
            </label>
          </div>
      </div>
      <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="paket_makan" value="1" id="paket_makan">
            <label class="form-check-label" for="paket_makan">
              Service/ Makan (Rp. 500.000)
            </label>
          </div>
      </div>
      <div class="mb-3">
        <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
        <input type="number" class="form-control" id="jumlah_peserta" value="1" name="jumlah_peserta" placeholder="Jumlah Hari Perjalanan" required>
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga Paket</label>
        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Paket Perjalanan" readonly>
      </div>
      <div class="mb-3">
        <label for="total" class="form-label">Total Tagihan</label>
        <input type="number" class="form-control" id="total" name="total" placeholder="Total Paket Perjalanan" readonly>
      </div>
    </div>
    <div class="card-footer">
      <input type="submit" class="btn btn-primary" value="Simpan">
      <input type="reset" class="btn btn-danger" value="Ulangi">
    </div>
  </div>
  <script>
  //tentukan konstanta biaya masing-masing
  const paket_inap = 1000000;
  const paket_transport = 1200000;
  const paket_makan = 500000;
  
  function updateTotalCost()
  {
      //inisisi harga paket 0
      let totalCost = 0;
      
      //referensi dari checkbox
      const inapCheckbox = document.getElementById('paket_inap');
      const transportCheckbox = document.getElementById('paket_transport');
      const makanCheckbox = document.getElementById('paket_makan');
      
      //jika inap checkbox ter-check
      if(inapCheckbox.checked)
      {
          totalCost+=paket_inap;
      }
      
      //jika transport checkbox ter-check
      if(transportCheckbox.checked)
      {
          totalCost+=paket_transport;
      }
      
      //jika makan checkbox ter-check
      if(makanCheckbox.checked)
      {
          totalCost+=paket_makan;
      }
      
      document.getElementById('harga').value = totalCost;
  }
  
  function updateTotal()
  {
      let TotalTagihan = 0;
      
      var hari_wisata = document.getElementById('hari_wisata').value;
      var jumlah_peserta = document.getElementById('jumlah_peserta').value;
      var harga = document.getElementById('harga').value;
      
      TotalTagihan = hari_wisata * jumlah_peserta * harga;
      
      document.getElementById('total').value = TotalTagihan;
  }
  
  document.getElementById('paket_inap').addEventListener('change', updateTotalCost);
  document.getElementById('paket_transport').addEventListener('change', updateTotalCost);
  document.getElementById('paket_makan').addEventListener('change', updateTotalCost);
  
  document.getElementById('paket_inap').addEventListener('change', updateTotal);
  document.getElementById('paket_transport').addEventListener('change', updateTotal);
  document.getElementById('paket_makan').addEventListener('change', updateTotal);
  
  document.getElementById('hari_wisata').addEventListener('change', updateTotalCost);
  document.getElementById('jumlah_peserta').addEventListener('change', updateTotalCost);
  
  document.getElementById('hari_wisata').addEventListener('change', updateTotal);
  document.getElementById('jumlah_peserta').addEventListener('change', updateTotal);
  
  updateTotalCost();
  updateTotal();
  </script>  </div>
  </main>
  <footer class="footer mt-5">
    <div class="container">
     <p>
      MT CIREMAI
     </p>
     <p>
      "Jangan lewatkan kesempatan untuk merasakan keajaiban Gunung Ciremai! Ajak teman-temanmu untuk menjelajahi jalur pendakian yang menantang dan menikmati pemandangan alam yang luar biasa. Bersama, kita akan menciptakan kenangan tak terlupakan saat menaklukkan puncak Ciremai!"
     </p>
     <div>
      <a href="#">
       <i class="fab fa-youtube"> gunungciremaijabar
       </i>
      </a>
      <a href="#">
       <i class="fab fa-instagram"> @mtciremai
       </i>
      </a>
      <a href="#">
       <i class="fab fa-twitter"> @mtciremai
       </i>
      </a>
      <a href="#">
       <i class="fab fa-facebook"> gununug ciremai
       </i>
      </a>
     </div>
    </div>
   </footer>
  </body>
 </html>