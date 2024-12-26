<!DOCTYPE html>
<html lang="en">
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
       <a class="nav-link" href="#">
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
  <div class="container content">
  <h2 class="mt-5">
    Gunung Ciremai
   </h2>
   <div class="row">
    <div class="col-md-12 icon-text">
     <i class="fas fa-mountain">
     </i>
     <div>
      <h3>
       The Highest Mountain in West Java.
      </h3>
     </div>
    </div>
    <div class="col-md-4 icon-text">
     <i class="fas fa-map-signs">
     </i>
     <div>
      <h3>
       Panduan Pendakian
      </h3>
      <p>
       Tips keselamatan dan etika saat mendaki
      </p>
     </div>
    </div>
    <div class="col-md-4 icon-text">
     <i class="fas fa-route">
     </i>
     <div>
      <h3>
       Rute Pendakian
      </h3>
      <p>
       Informasi estimasi waktu tempuh untuk masing-masing rute, peta setiap jalur
      </p>
     </div>
    </div>
    <div class="col-md-4 icon-text">
     <i class="fas fa-cloud-sun">
     </i>
     <div>
      <h3>
       Cuaca Jalur
      </h3>
      <p>
       Prediksi cuaca terkini untuk jalur pendakian, seperti suhu, hujan, dan kecepatan angin
      </p>
     </div>
    </div>
   </div>
  </div>
  <div class="container booking-form mt-4">
   <ul class="nav nav-tabs">
    <li class="nav-item">
     <a class="nav-link active" href="#">
      Check Tiket
     </a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="#">
      Moda Transportasi
     </a>
    </li>
   </ul>
   <form class="mt-3">
    <div class="row">
     <div class="col-md-12 mb-3">
      <label class="form-label" for="jalurPendakian">
       Jalur Pendakian
      </label>
      <div class="input-group">
       <span class="input-group-text">
        <i class="fas fa-search">
        </i>
       </span>
       <input class="form-control" id="jalurPendakian" placeholder="Apuy, LinggaJati, Linggasana, Sadarehe, Palutungan" type="text"/>
      </div>
     </div>
     <div class="col-md-4 mb-3">
      <label class="form-label" for="checkIn">
       Check In
      </label>
      <div class="input-group">
       <span class="input-group-text">
        <i class="fas fa-calendar-alt">
        </i>
       </span>
       <input class="form-control" id="checkIn" type="date"/>
      </div>
     </div>
     <div class="col-md-4 mb-3">
      <label class="form-label" for="durasi">
       Durasi
      </label>
      <div class="input-group">
       <span class="input-group-text">
        <i class="fas fa-clock">
        </i>
       </span>
       <select class="form-select" id="durasi">
        <option selected="">
         1 Malam
        </option>
        <option value="2">
         2 Malam
        </option>
        <option value="3">
         3 Malam
        </option>
       </select>
      </div>
     </div>
     <div class="col-md-4 mb-3">
      <label class="form-label" for="checkOut">
       Check Out
      </label>
      <div class="input-group">
       <span class="input-group-text">
        <i class="fas fa-calendar-alt">
        </i>
       </span>
       <input class="form-control" id="checkOut" type="date"/>
      </div>
     </div>
    </div>
    <button class="btn btn-dark w-100" type="submit">
     Book Now
    </button>
   </form>
  </div>
  <div class="container gallery mt-5">
   <h2>
    Asset
   </h2>
   <div aria-label="Gallery Filters" class="btn-group mb-3" role="group">
    <button class="btn btn-outline-secondary" type="button">
     Puncak
    </button>
    <button class="btn btn-outline-secondary" type="button">
     Apuy
    </button>
    <button class="btn btn-outline-secondary" type="button">
     Sadarehe
    </button>
    <button class="btn btn-outline-secondary" type="button">
     Palutungan
    </button>
   </div>
   <div class="row">
    <div class="col-md-4 mb-4">
     <div class="card">
      <img alt="Simpang Apuy" class="card-img-top" height="200" src="aset/image/simpang apuy.jpg" width="300"/>
      <div class="card-body">
       <h5 class="card-title">
        Simpang Apuy
       </h5>
       <p class="card-text">
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
       </p>
      </div>
     </div>
    </div>
    <div class="col-md-4 mb-4">
     <div class="card">
      <img alt="Atas Goa Walet" class="card-img-top" height="200" src="aset/image/atasgoawalet.jpg" width="300"/>
      <div class="card-body">
       <h5 class="card-title">
        Atas Goa Walet
       </h5>
       <p class="card-text">
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
       </p>
      </div>
     </div>
    </div>
    <div class="col-md-4 mb-4">
     <div class="card">
      <img alt="Puncak Atas" class="card-img-top" height="200" src="aset/image/puncak.jpg" width="300"/>
      <div class="card-body">
       <h5 class="card-title">
        Puncak Atas
       </h5>
       <p class="card-text">
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
       </p>
      </div>
     </div>
    </div>
    <div class="col-md-4 mb-4">
     <div class="card">
      <img alt="Simpangan" class="card-img-top" height="200" src="aset/image/simpangan.jpg" width="300"/>
      <div class="card-body">
       <h5 class="card-title">
        Simpangan
       </h5>
       <p class="card-text">
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
       </p>
      </div>
     </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card">
         <img alt="Simpangan" class="card-img-top" height="200" src="aset/image/bunga.jpg" width="300"/>
         <div class="card-body">
          <h5 class="card-title">
           Bunga Edelweis
          </h5>
          <p class="card-text">
           <i class="fas fa-star">
           </i>
           <i class="fas fa-star">
           </i>
           <i class="fas fa-star">
           </i>
           <i class="fas fa-star">
           </i>
           <i class="fas fa-star">
           </i>
          </p>
         </div>
        </div>
       </div>
    <div class="col-md-4 mb-4">
     <div class="card">
      <img alt="Tengah Puncak" class="card-img-top" height="200" src="aset/image/puncak tengah.jpg" width="300"/>
      <div class="card-body">
       <h5 class="card-title">
        Tengah Puncak
       </h5>
       <p class="card-text">
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
        <i class="fas fa-star">
        </i>
       </p>
      </div>
     </div>
    </div>
   </div>
  </div>
  <title>
   Testimoni Pengunjung
  </title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
        .testimonial {
            margin-bottom: 1.5rem;
        }
        .testimonial img {
            width: 64px;
            height: 64px;
            border-radius: 50%;
        }
        .testimonial .name {
            font-weight: bold;
        }
        .testimonial .date {
            font-size: 0.875rem;
            color: #6c757d;
        }
  </style>
 </head>
 <body>
  <div class="container mt-5">
   <h1 class="mb-4">
    Testimoni Pengunjung
   </h1>
   <div class="row">
    <div class="col-md-8">
     <div class="card mb-4">
      <div class="card-body">
       <h5 class="card-title">
        Tinggalkan Testimoni Anda
       </h5>
       <form id="testimonialForm">
        <div class="mb-3">
         <label class="form-label" for="name">
          Nama
         </label>
         <input class="form-control" id="name" required="" type="text"/>
        </div>
        <div class="mb-3">
         <label class="form-label" for="email">
          Email
         </label>
         <input class="form-control" id="email" required="" type="email"/>
        </div>
        <div class="mb-3">
         <label class="form-label" for="message">
          Pesan
         </label>
         <textarea class="form-control" id="message" required="" rows="3"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">
         Kirim
        </button>
       </form>
      </div>
     </div>
     <div id="testimonials">
      <div class="testimonial card">
       <div class="card-body">
        <div class="d-flex align-items-center">
         <img alt="Profile picture of a visitor" height="64" src="https://storage.googleapis.com/a1aa/image/l9QAf5hdm72iDyUEqYDewZSLH4fCp0JCXDzcHo4yVWxIqStnA.jpg" width="64"/>
         <div class="ms-3">
          <div class="name">
           John Doe
          </div>
          <div class="date">
           12 Oktober 2024
          </div>
         </div>
        </div>
        <p class="mt-3">
         pengalaman yang tak akan terlupakan!
        </p>
       </div>
      </div>
      <div class="testimonial card">
       <div class="card-body">
        <div class="d-flex align-items-center">
         <img alt="Profile picture of a visitor" height="64" src="https://storage.googleapis.com/a1aa/image/l9QAf5hdm72iDyUEqYDewZSLH4fCp0JCXDzcHo4yVWxIqStnA.jpg" width="64"/>
         <div class="ms-3">
          <div class="name">
           Jane Smith
          </div>
          <div class="date">
           10 Oktober 2024
          </div>
         </div>
        </div>
        <p class="mt-3">
         Pengalaman yang luar biasa! Saya pasti akan kembali lagi.
        </p>
       </div>
      </div>
      <div class="testimonial card">
       <div class="card-body">
        <div class="d-flex align-items-center">
         <img alt="Profile picture of a visitor" height="64" src="https://storage.googleapis.com/a1aa/image/l9QAf5hdm72iDyUEqYDewZSLH4fCp0JCXDzcHo4yVWxIqStnA.jpg" width="64"/>
         <div class="ms-3">
          <div class="name">
           Michael Johnson
          </div>
          <div class="date">
           8 Oktober 2024
          </div>
         </div>
        </div>
        <p class="mt-3">
         keindahan alam yang tak ada duanya,kalian harus coba ke gn ciremaiiii!
        </p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <script>
   document.getElementById('testimonialForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            const date = new Date().toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });

            const testimonialHTML = `
                <div class="testimonial card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="https://placehold.co/64x64" alt="Profile picture of a visitor">
                            <div class="ms-3">
                                <div class="name">${name}</div>
                                <div class="date">${date}</div>
                            </div>
                        </div>
                        <p class="mt-3">${message}</p>
                    </div>
                </div>
            `;

            document.getElementById('testimonials').insertAdjacentHTML('beforeend', testimonialHTML);

            document.getElementById('testimonialForm').reset();
    </script>
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
