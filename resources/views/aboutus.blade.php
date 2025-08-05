<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/png" href="{{ asset('storage/image/logo.png') }}">
  <title>PT Automata Info Nusantara</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

   body {
    font-family: 'Lora', serif;
    background-color: #111;
    display: flex;
    flex-direction: column;
    background: white;
    }

  .hero {
  background: url('{{ asset('storage/image2/pms.png') }}') no-repeat center center;
  background-size: cover;
  height: 100vh;
  position: relative;
  display: flex;
  align-items: flex-end;
  padding: 50px;
  color: white;
  font-family: 'Lora', serif;
}

.navigation {
      background-color:white;
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

.hero-content {
  display: flex;
  width: 100%;
}

.hero-left {
  display: flex;
  flex-direction: column; 
  justify-content: center;
  height: 100vh;
  max-width:400px ;
  margin-top: 200px;
}

.hero-left h1 {
  font-weight: 700; 
  font-size: 98px;
  margin-top: 150px;
}

.hero-left .desc-solution {
  font-size: 20px;
  max-width: 600px;
  margin-top: 10px;
  margin-left: 10px;
  color: white;
  font-weight: 400;
  line-height: 1.5;
}

.aboutusuper{
  display: flex;                                     
  justify-content: space-between;                         
  gap: 20px;         
}

.aboutusimg img{
    margin: 50px auto auto 70px;
    width:559px ;
    height:373px ;
    border-radius:20px;
}

.container{
  width:257px ;
  height:70px ;
  background: #FF6600;
  margin-top: -50px;
  margin-left: 30px;
  position: relative; 
  z-index:1;
  }

.container p{
    font-family: "Lora" sans-serif;
    font-size:30px;
    font-weight: 700;
    color: white;
    position: relative;
    top: 20px;
    left:0;
    margin-left: 60px;  
    z-index: 2;
  }


.statistik{
    max-width:600px;
    padding-left:
}

.statistik h2{
    color: #1E2188;
    font-family: "Lora" sans-serif;
    font-size:40px;
    margin : 50px 150px auto 10px;
}

.lingkaran {
    width:103px;
    height:105px;
    border-radius:50%;
    border: 3px solid #FF6600;
    align-items: center;
    display: flex;
    flex-direction: column;
    background-color:white;
    box-shadow:0 4px 8px rgba(0, 0, 0, 0.2);
    opacity: 0;
    transform: translateX(-50px);
    transition: all 0.6s ease-out;
}

.lingkaran.visible {
  opacity: 1;
  transform: translateX(0);
}

.grup {
  display: flex;
  gap: 40px;
  flex-wrap: wrap;
  margin-top: 30px;
  margin-left: 30px;
  
}

.content h2{
    color:black;
    margin-left: 150px; 
    margin-top: 30px;
}

.grup2 {
  display: flex;
  gap: 40px;
  flex-wrap: wrap;
  margin-top: 20px;
  margin-left: 40px;
  gap: 60px;
  
}

.caption p{
    color:black;
    text-align:center; 

}

.garis-horizontal {
  width: 80%;
  height: 1px;
  background-color: #ccc;
  margin: 50px 0 30px 0; 
}

.utama{
    display: flex;
}


.containerdeskripsi{
    width:845px;
    height: 380px;
    background: #1E2188;
    position: absolute;
    right:0; 
    margin: 100px 20px 0px 30px;
    box-shadow:0 4px 8px rgba(0, 0, 0, 0.2);
}

.image img{
    width:550px ;
    height:420px;
    margin-top:10px;
    margin-left:-698px ;
   
}

.isian h2{
    margin: 30px auto auto 30px;
    max-width: 350px;
    font-size:50px;
    color: white;
}

.isian p{
    margin: 30px auto auto 30px;
    max-width: 600px;
    font-size:20px;
    color: white;
}

.contanerwaktu {
    margin-top:-30px;
    width: 1000px;
    height:212px;
    background-color: #EEEEEE;
    position:absolute;
    box-shadow:0 4px 8px rgba(0, 0, 0, 0.2);
    
}

.waktuwrap {
  display: flex;
  justify-content: space-around;
  text-align: center;
  padding-top: 60px;
  margin-right: 60px;
  gap: 80px;
}

.waktu-item {
  flex: 1;
  max-width: 250px;
}

.waktu-item h2 {
  color: #1E2188;
  font-size: 50px;
  margin-bottom: 10px;
}

.waktu-item p {
  font-size: 14px;
  color: black;
  line-height: 1.4;
  text-align: center;

}

.customer{
    color: ;
    font-size:50px;
    margin-top: 200px;
    align-items:center;
    text-align:center;
    color: #1E2188;
}
.subsupport h2{
    max-width: 600px;
    font-size:40px;
    margin-left: 30px;
    color: #1E2188;
}

.subsupport img{
  weight:800px;
  height:660px;
  align-items: center;
  justify-content: center;
  display: flex;
  margin: 0 auto;
}

.ceocont .deskripsi{
    justify-content:center;
    align-items:center;
    text-align:center;
    font-size:50px;
    color: #1E2188;
}

.containerceo {
    width: 750px;
    height:400px;
    background-color: #1E2188;
    margin-top:100px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.containerceo h2{
    color: white;
    font-size:30px;
    max-width:500px;
    margin-left: 20px;
    margin-top: 20px;

}

.containerceo p{
    color: white;
    max-width:500px;
    margin-left: 20px;
    font-size:20px;
    margin-top:20px; 

}

.gambarceo img {
    width:296px;
    height:400px;
    position:absolute;
    right:30%;
    margin-top:-450px;
}
.containernama{
    background-color: #FF6600;
    width:315px;
    height: 50px;
    margin-top:20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}


.containernama h2{
    font-size:20px;
}

.containernama p{
    margin-top:2px;
}

.putih{
    width:150px;
    height:8px;
    background-color:white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.ourteam{
    margin-top:60px;
    margin-left:40px;
    font-size:40px;
    color:#1E2188;
    text-shadow:0 4px 8px rgba(0, 0, 0, 0.3);
}

.utama{
    gap:100px;
    margin-top:40px;
    align-items:center;
    justify-content:center;

}

.card {
  position: relative;
  width: 250px;
  height: 300px;
  overflow: hidden;
}

.card img {
  width: 250px;
  height: 300px;
  object-fit: cover;
  display: block;
  border-radius:10px;
}

.bgstaff {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100px;
  background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 60%, transparent);
  border-radius:10px;
  z-index: 1;
}

.namastaff{
  background: #FF6600;
  width: 200px;
  height:51px;
}

 

  @keyframes slideInLeft {
  from {
    transform: translateX(-100px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

.hero-left h1.animate {
  animation: slideInLeft 1s ease-out forwards;
}

.bgstaff{
  object-fit: cover;
  display: block;
}

.namastaff{
  margin-bottom:10px;
}
.namastaff h2{
  margin-left:10px;
  color:white;
}

.namastaff p{
  margin-left:12px;
  color:white;
}

.warnaputih{
  background:white;
  width: 147px;
  height: 7px;
  margin-top:5px;
}

.slider{
  height: 250px;
  margin:auto;
  position:relative;
  width:90%;
  display:grid;
  place-items:center;
  overflow:hidden;
}

.frame{
  display:flex; 
  width: calc(250px * 18);
  height: calc(150px *18);
  animation: scroll 40s linear infinite;
}

.frame:hover{
  animation-play-state:paused;
}

.gambar{
  height:200px;
  width:200px;
  display:flex;
  align-items:center; 
  padding:15px;
  perspective:100px;
}

.gambar img{
  width: 100%;
}

.slider::before,
.slider::after{
  background: linear-gradient(to right, rgba(255, 255,255,1)0%, rgba(255,255,255,0) 100%);
  content:'';
  height:100%;
  position:absolute;
  width:15%;
  z-index:2;
}

.slider::before{
  left:0;
  top:0;
}

.slider::after{
  right:0;
  top:0;
  transform: rotateZ(180deg);
}

.gambar img:hover {
  transform: translateZ(20px);
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
  color:white;
}

.crcont p{
  text-align:center;
}

@keyframes scroll {
  0% {
    transform: translateX(0);
  }
   100% { transform: translateX(-50%);
   }
  
}

  </style>
</head>
<body>
  <nav class="navigation">
    <div class="logo">
      <img src="{{asset('storage/image/logo.png') }}" alt="PT Logo" />
    </div>
    <div class="nav-links"> 
      <a href="{{route('welcome')}}">Home</a>
      <a href="{{ route('welcome') }}#services">Services</a>
      <a href="">Solution</a>
      <a href="{{ route('aboutus') }}">About Us</a>
      <a href="{{route('project')}}">Project</a>
    </div>

    <a href="#" class="contact-btn">Contact Us</a>
  </nav>
  <section class="hero">
    <div class="hero-content">
        <div class="hero-left">
        <h1>About Us</h1>
        <p class="desc-solution">Automata Info Nusantara adalah perusahaan Teknologi Informasi yang mendukung dan menghadirkan inovasi dalam solusi bagi industri teknologi.</p>
        </div>
        
        </div>
    </div>
</section>

<section class="aboutusuper">
  <div class="aboutusimg">
    <img src="{{asset('storage/image 4/automata.png') }}" alt="Upgrade Your Browser">
    <div class="container">
      <p>About Us</p>  
    </div>
  </div>
  <div class="statistik">
    <h2>A Glimpse Closer to Our Company</h2>
    <div class="statistikItem">
        <div class="grup">
            <div class="lingkaran">
                <div class="content">
                    <h2>20+</h2>
                </div>
            </div>
            <div class="lingkaran">
                <div class="content"><h2>100+</h2></div>
            </div>
            <div class="lingkaran">
                <div class="content"><h2>50+</h2></div>
            </div>
        </div>
        <div class="grup2">
            <div class="caption">
                <p>Happy Client</p> 
            </div>
            <div class="caption">
                <p>Completed<br>Project</p> 
            </div>
            <div class="caption">
                <p>Business Partner</p> 
            </div>
        </div>
        <div class="garis-horizontal"></div>
    </div>
  </div>
</section>

<section class="history">
    <div class="utama">
        <div class="image">
            <img src="{{asset('storage/image 4/logonew.png') }}">
        </div>
        <div class="containerdeskripsi">
            <div class="isian">
                <h2>What We Do in IT Area</h2>
                <p>Fokus utama perusahaan adalah mendukung kebutuhan teknologi informasi secara menyeluruh untuk berbagai jenis bisnis dan institusi. Setiap layanan dirancang untuk memberikan kemudahan, efisiensi, dan keandalan, guna menunjang operasional yang optimal di era digital.</p>
        </div>
    </div>
</section>

<section>
    <div class="contanerwaktu">
        <div class="waktuwrap">
            <div class="waktu-item">
                <h2>2003</h2>
                <p>Berdiri dengan nama<br> CV. Info Solusi Pratama</p>
            </div>
            <div class="waktu-item">
                <h2>2017</h2>
                <p>Berubah nama menjadi PT<br> Automata Info Nusantara</p>
            </div>
            <div class="waktu-item">
                <h2>2020 - Now</h2>
                <p>Dipercaya 20+ Client Besar<br>Tersebar di Seluruh Indonesia</p>
            </div>
        </div>
    </div>
</section>

<section class="seccustomer">
    <div class="customer">
        <h2>Our Customer</h2>
    </div>
    <div class="slider">
      <div class="frame">
        <div class="gambar">
          <img src="{{asset('storage/image 4/1.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/2.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/3.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/4.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/5.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/6.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/7.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/8.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/9.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/10.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/11.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/12.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/13.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/14.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/15.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/16.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/17.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/18.png') }}" alt="">
        </div>
        <div class="gambar">
          <img src="{{asset('storage/image 4/19.png') }}" alt="">
        </div>
      </div>
    </div>
</section>

<section class ="support">
    <div class="subsupport">
        <h2>Supporting Your Business Needs across Technology and Marine in Indonesia</h2>
        <img src="{{asset('storage/image 4/indonesia.png') }}" alt="">
    </div>
</section>

<section class="CEO">
    <div class="ceocont">
        <h2 class="deskripsi">Meet Our CEO</h2>
        <div class="containerceo">
            <h2>“We Are Ready to Support  Information Technology for Your Business”</h2>
            <p>Kami hadir untuk menjadi bagian dari transformasi digital yang membawa dampak nyata. Dengan semangat inovasi dan teknologi, kami berkomitmen memberikan solusi IT yang handal, efisien, dan berkelanjutan.</p>
            <p class="caption2">Hormat kami,</p>
            <div class="containernama">
                <h2>Rakim Adi Wijaya</h2>
                <p>Chief Executive Officer</p>
            </div>
            <div class="putih"></div>
        </div>
    </div>
    <div class="gambarceo">
        <img src="{{asset('storage/image 4/ceo.png') }}" alt="">
    </div>
</section>

<section class="teamutama">
    <div class="ourteam">
        <h2>Our Expert</h2>
    </div>
    <div class="utama">
        <div class="card">
            <img src="{{asset('storage/image 4/AGUS.jpg') }}" alt="">
              <div class="bgstaff">
                <div class="namastaff">
                  <h2>Agus Rusyana</h2>
                   <p>Head of Finance</p>
                   <div class="warnaputih"></div>
                </div>
              </div>
        </div>
        <div class="card">
            <img src="{{asset('storage/image 4/YADI.jpg') }}" alt="">
              <div class="bgstaff">
                <div class="namastaff">
                  <h2>Yadi Karyadi</h2>
                   <p>Head of Operation</p>
                   <div class="warnaputih"></div>
                </div>
              </div>
        </div>
        <div class="card">
            <img src="{{asset('storage/image 4/EKA.jpg') }}" alt="">
              <div class="bgstaff">
                <div class="namastaff">
                  <h2>Eka Nugraha</h2>
                  <p>Head of Warehouse</p>
                  <div class="warnaputih"></div>
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
    const target = document.querySelector(".hero-left h1");

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          target.classList.add("animate");
        }
      });
    });

    observer.observe(target);
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const lingkaranItems = document.querySelectorAll(".lingkaran");

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add("visible");
          }, index * 300); // delay antar elemen
          observer.unobserve(entry.target); // agar hanya muncul sekali
        }
      });
    }, {
      threshold: 0.5
    });

    lingkaranItems.forEach(item => {
      observer.observe(item);
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const frame = document.querySelector(".frame");
    frame.innerHTML += frame.innerHTML; // duplikat isi frame
  });
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const staff = document.querySelectorAll(".utama");

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
          setTimeout(() => {
            entry.target.classList.add("visible");
          }, index * 300); // delay antar elemen
          observer.unobserve(entry.target); // agar hanya muncul sekali
        }
      });
    }, {
      threshold: 0.5
    });

    staff.forEach(item => {
      observer.observe(item);
    });
  });
</script>







