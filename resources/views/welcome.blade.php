<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PT Automata Info Nusantara</title>
  <link rel="icon" type="image/png" href="{{ asset('storage/image/logo.png') }}">
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

   body {
    font-family: 'Lora', serif;
    background-color: #111;
    color: white;
    display: flex;
    flex-direction: column;
    background: #f5f5f5;
    }

  .hero {
    background: linear-gradient(to top, #000 3%, rgba(13, 13, 141, 0.0) 100%),
    url('{{ asset('storage/image/Background_home.png') }}') no-repeat right center;
    background-size: cover;
    padding-top: 180px;
    padding-bottom: 50px;
    text-align: center;
}

.navigation {
      background-color: white;
      padding: 10px 30px;
      border-bottom: 1px solid white;
      position: fixed;
      top: 0;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      z-index: 1000;
    }

    .logo img {
      height: 50px;
    }

    .nav-links {
      display: flex;
      gap: 25px;
      align-items: center;
    }

    .nav-links a {
      text-decoration: none;
      color: black;
      font-size: 16px;
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: #ccc;
    }

    .contact-btn {
      background-color: #1E2188;
      color: white;
      padding: 8px 16px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: Regular;
      transition: background 0.3s;
    }

    .contact-btn:hover {
      background: #;
    }

    .contact-us {
      display: block;
      margin: 80px auto 0 auto;
      width: 150px;
      background-color: transparent;
      color: white;
      border: 2px solid #fff;
      border-radius: 6px;
      padding: 8px 16px;
      text-align: center;
      transition: background 0.3s;
    }
   .contact-us:hover {
      background: #1E2188;
    }
    .Title{
       align-items: center;
       text-align: center;
       font-size: 70px;
       max-width: 900px;
       margin: 100px auto 0 auto;
       margin-top:10px;
    }

    .services p {
        font-size: 28px;
        max-width:950px;
        text-align: center;
        margin-left:auto;
        margin-right:auto;
        margin-top:50px;
        margin-bottom: 80px;
    }

    .Title2{
      font-family: 'Lora', serif;
      text-align : center;
      max-width:950px;
      margin:auto;
      color:black;
    }

    .Title2 h2{
      font-weight: 20;
      font-size: 70px;
      margin-top: 80px;
    }

    .Title2 p{
      font-size: 25px;
    }
    .outservice {
      text-align: center;
      max-width:950px;
    }

    .oservice{
      background-color: white;
      border-radius:8px;
      height: 200px;
      width: 1135px;
      margin: 40px auto;
      box-shadow:0 4px 10px rgba(0, 0, 0, 0.1);
    }


  .services .container {
    max-width: 700px;
    margin-top: 30px;
    margin-right: 0;
    margin-bottom: -115px;
    margin-left : auto; 
    background-color: #1E2188;
    color: white;
    text-align:left;
    padding: 50px 20px 5px 20px;
}

.services .container p{
  margin:5px 20px 40px 5px;
  text-align:left;
}

.caption .OurServices p{
  font-family: "Instrument Sans", sans-serif;
  padding: 50px 40px 30px 50px;
  font-size: 80px;
  color:#1E2188;
  font-weight:1000;
  text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
}

.cont-service {
  padding: 30px;
  display: flex;
  justify-content: center;
}

.service1 {
  display: flex;
  flex-direction: column;
  background-color: white;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  padding: 20px;
  max-width: 1200px;
  width: 100%;
}

.service-row {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  align-items: flex-start;
}

.service-image img {
  width: 300px;
  height: auto;
  border-radius: 8px;
}

.service-text {
  flex: 1;
}

.service-text .judul {
  font-weight: 700;
  font-size: 20px;
  font-family: "Instrument Sans", sans-serif;
  margin-bottom: 10px;
  color: #000;
}

.deskripsi1 p {
  font-weight: 400;
  font-size: 16px;
  margin-bottom: 20px;
  color:black;
  text-align:justify;
  max-width:1000px;
}

.kategori-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.kategori-grid button {
  padding: 10px 20px;
  border: 1px solid #1E2188;
  background: white;
  color: #1E2188;
  border-radius: 6px;
  font-family: "Instrument Sans", sans-serif;
  cursor: pointer;
  transition: 0.3s;
  margin: 25px 0 0 0 ;
}

.kategori-grid button:hover {
  background: #1E2188;
  color: white;
}

.alamat-website {
  display: flex;
  justify-content: space-between; 
  align-items: center;
  gap: 20px; 
  
}

.alamat-website p {
  margin: 0;
  font-size: 30px;
  flex: 1;
}


html{
  scroll-behavior: smooth;
}

.service1 {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.6s ease, transform 0.6s ease;
}

.fade-in-up {
  opacity: 1 !important;
  transform: translateY(0) !important;
}

.footer {
  width:100%;
  height: 250px;
  margin-top:60px;
  background: #EEEEEE;
}

.wrapper{
  display:flex;
  gap:50px;
}

.kiri1 img{
  width: 306px;
  height:78px;
  margin-top:30px;
  margin-left: 20px;
}

.kiri1 input[type="email"]{
  padding: 10px;
  border: none;
  border-radius: 20px;
  width: 300px;
  margin-left:30px;
  box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.15);
}

.kiri1 button{
  margin-left:-50px;
  border:none;
  border-radius:20px;
  padding:5px;
  background: #FF6600;
  color:white;
}

.menus{
  margin-top:30px;
  
}

.menus h4{
  font-size:18px;
  color:black;
}

.menus a{
  display: block;
  margin-top: 5px;
  text-decoration: none;
  color: black;
  font-size: 14px;
}
.contact{
  display:flex;
  margin-top:10px;
}

.contact img{
  width:20px;
  height:20px;
  margin-right:5px;
}

.location{
  display:flex;
  margin-top:10px;
}

.location img{
  width:20px;
  height:20px;
  margin-right:5px;
}

.crcont{
  width: 100%;
  height:40px;
  background: #1E2188;
  padding-top:12px;
}

.crcont p{
  text-align:center;
}



@keyframes slideUp {
  from {
    transform: translateY(30px);
    opacity: 0;
  }
  to {
    transform: translateY(0px);
    opacity: 1;
  }
}

.slide-up {
  animation: slideUp 1s ease forwards;
}

  </style>
</head>
<body>
  <nav class="navigation">
    <div class="logo">
      <img src="{{ asset('storage/image/logo.png') }}" alt="PT Logo" />
    </div>
    <div class="nav-links"> 
      <a href="{{route('welcome')}}">Home</a>
      <a href="{{ route('welcome') }}#services">Services</a>
      <a href="{{route('solution')}}">Solution</a>
      <a href="{{ route('aboutus') }}">About Us</a>
      <a href="{{route('project')}}">Project</a>
    </div>

    <a href="#" class="contact-btn">Contact Us</a>
  </nav>

  <section class="hero">
    <div class="Title" id="heroTitle">
      <p>Your Solution on IT Specialist answer your needs</p>
    </div>
    
    <div class="services">
      <p>Melalui layanan menyeluruh di bidang pengadaan, penyewaan perangkat, pengembangan web, dan infrastruktur IT. Kami menghadirkan layanan yang efisien,
          fleksibel, dan tepat sasaran untuk mendukung kelancaran operasional serta pertumbuhan bisnis Anda di era digital</p>
      <a href="#" class="contact-us"> Contact Us</a>
      <div class="container alamat-website">
          <p class="alamat"> Jl Rambutan No 1A </p> 
            
          <p class="website"> www.automata.co.id </p> 
          
    </div>
  </section>

  <section class="caption" id="services">
    <div class="OurServices">
      <p> Our Services</p> 
    </div>
  </section>

 <section class="cont-service">
  <div class="service1">
    <div class="service-row">
      <div class="service-image">
        <img src="{{ asset('storage/image/sewaperangkat.jpg')}}" alt="Laptop" />
      </div>
      <div class="service-text">
        <p class="judul">Sewa Perangkat Teknologi Informasi</p>
        <div class="deskripsi1">
          <p>
            layanan penyewaan perangkat Teknologi Informasi (TI) yang lengkap dan terpercaya untuk mendukung kebutuhan operasional bisnis Anda.
Mulai dari laptop, viewboard, televisi, proyektor, hingga berbagai perangkat pendukung lainnya, kami hadir sebagai solusi efisien dan fleksibel bagi perusahaan yang membutuhkan peralatan berkualitas tinggi
          </p>
        </div>
        <div class="kategori-grid">
           <button>PC</button>
           <button>Fotocopy</button>
           <button>Printer</button>
           <button>Kebutuhan CPNS</button>
           <button>Laptop</button>
           <button>Televisi</button>
           <button>Dll</button>
         </div>
       </div>
     </div>
   </div>
  </section>


  <section class="cont-service">
  <div class="service1">
    <div class="service-row">
      <div class="service-image">
        <img src="{{ asset('storage/image/instalasi.png')}}" alt="Laptop" />
      </div>
      <div class="service-text">
        <p class="judul">Infrastruktur Teknologi Informasi</p>
        <div class="deskripsi1">
          <p>
           Dengan dukungan tim ahli berpengalaman dan teknologi terkini, kami memastikan setiap solusi yang diberikan mampu meningkatkan efisiensi kerja, mendukung produktivitas, serta menjaga kestabilan koneksi di lingkungan kerja Anda.
           , kami siap menjadi mitra terpercaya dalam membangun fondasi digital yang kuat dan siap untuk masa depan.
          </p>
        </div>
        <div class="kategori-grid">
           <button>Instalasi Jaringan</button>
           <button>Maintenance Lab </button>
           <button>Sistem Keamanan</button>
         </div>
       </div>
     </div>
   </div>
  </section>

  <section class="cont-service">
  <div class="service1">
    <div class="service-row">
      <div class="service-image">
        <img src="{{ asset('storage/image/pengadaan.png')}}" alt="Laptop" />
      </div>
      <div class="service-text">
        <p class="judul">Pengadaan Teknologi Informasi</p>
        <div class="deskripsi1">
          <p>
         pengadaan perangkat Teknologi Informasi (TI) yang lengkap dan terpercaya untuk memenuhi berbagai kebutuhan perusahaan, instansi, maupun organisasi Anda. Mulai dari perangkat komputer, laptop, server, printer, hingga perangkat presentasi seperti proyektor dan viewboard — semua kami hadirkan melalui proses pengadaan yang efisien, dan sesuai standar industri.
          </p>
        </div>
        <div class="kategori-grid">
           <button>Perangkat IT</button>
           <button>Alat Tulis Kantor </button>

         </div>
       </div>
     </div>
   </div>
  </section>

  <section class="cont-service">
  <div class="service1">
    <div class="service-row">
      <div class="service-image">
        <img src="{{ asset('storage/image/webdevelop.png')}}" alt="Laptop" />
      </div>
      <div class="service-text">
        <p class="judul">Pengembangan Aplikasi dan Website</p>
        <div class="deskripsi1">
          <p>
        solusi pengembangan aplikasi dan website yang disesuaikan dengan kebutuhan bisnis, instansi, maupun organisasi Anda. Mulai dari sistem informasi internal, aplikasi mobile, hingga website dan profesional Didukung oleh tim developer dan mengikuti standar industri.
          </p>
        </div>
        <div class="kategori-grid">
           <button>Website</button>
           <button>Aplikasi </button>
         </div>
       </div>
     </div>
   </div>
  </section>

  <section class="cont-service">
  <div class="service1">
    <div class="service-row">
      <div class="service-image">
        <img src="{{ asset('storage/image/webdevelop.png')}}" alt="Laptop" />
      </div>
      <div class="service-text">
        <p class="judul">Maintenance Perangkat Teknologi Informasi</p>
        <div class="deskripsi1">
          <p>
        Kami menyediakan layanan maintenance perangkat teknologi informasi untuk memastikan seluruh sistem dan perangkat keras Anda tetap berfungsi optimal dan mencegah gangguan. Kami membantu menjaga stabilitas operasional bisnis tetap berjalan tanpa hambatan
          </p>
        </div>
        <div class="kategori-grid">
           <button>Mesin Fotocopy</button>
           <button>Printer</button>
           <button>Laptop</button>
           <button>PC AIO</button>
           <button>UPS</button>
           <button>Server</button>
         </div>
       </div>
     </div>
   </div>
  </section>

<section class="footer">
  <div class="wrapper">
    <div class="kiri1">
      <img src="{{ asset('storage/image/footer.png')}}" alt="">
      <form>
        <input type="email" placeholder="Write your email here">
        <button type="submit">Send</button>
      </form>
    </div>
    <div class="menus">
      <h4>Company</h4>
      <a href="">About Us</a><br>
      <a href="">Customer</a><br>
      <a href="">Team</a><br>
    </div>
    <div class="menus">
      <h4>Services</h4>
      <a href="">Sewa</a><br>
      <a href="">Pengadaan</a><br>
      <a href="">Maintenance</a><br>
      <a href="">Website</a><br>
      <a href="">Jaringan</a><br>
    </div>
    <div class="menus">
      <h4>Solution</h4>
      <a href="">Planned Maintenance<br>System</a><br>
      <a href="">Internet of Things</a><br>
    </div>

    <div class="menus">
      <h4>Contact</h4>
      <div class="contact">
        <img src="{{asset('storage/image/freepik.png')}}" rel="icon" alt="">
        <a href="">Jl Rambutan No 1A</a><br>
      </div>
      <div class="location">
        <img src="{{asset('storage/image/browser.png')}}" alt="">
        <a href="">automata.co.id</a><br>
      </div>
      
    </div>
    <div class="menus">
      <h4>Social Media</h4>
    </div>
  </div>
</section>

<section class="copyright">
  <div class="crcont">
    <p> Copyright © 2025 Automata Info Nusantara. All rights reserved</p>
  </div>
</section>


  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const heroTitle = document.getElementById("heroTitle");
    const navHome = document.querySelector('.nav-links a[href*="welcome"]');

    // Observer untuk scroll biasa
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          heroTitle.classList.add("slide-up");
        }
      });
    });

    observer.observe(heroTitle);

    // Trigger manual saat tombol 'Home' diklik
    navHome.addEventListener("click", () => {
      // Timeout agar scroll ke #hero selesai dulu
      setTimeout(() => {
        heroTitle.classList.remove("slide-up"); // reset
        void heroTitle.offsetWidth; // trigger reflow
        heroTitle.classList.add("slide-up"); // apply again
      }, 500);
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const services = document.querySelectorAll(".service1");

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add("fade-in-up");
          }, index * 300); // Delay agar satu per satu
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });

    services.forEach(service => {
      observer.observe(service);
    });
  });
</script>


</body>
</html>
