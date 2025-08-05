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
    color: white;
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
  align-items: flex-start; 
  height: 100vh;
  max-width:400px ;
  margin-top: 200px;
}

.hero-left h1 {
  font-weight: 700; 
  font-size: 98px;
  margin: 200px auto 10px 20px;
}

.hero-left .desc-solution {
  font-size: 20px;
  max-width: 600px;
  margin-top: 10px;
  margin-left: 20px;
  color: white;
  font-weight: 400;
  line-height: 1.5;
}




.fitur .text-feature {
  display: flex;
  align-items: center; 
  justify-content: flex-start; 
  gap: 40px; 
  padding: 30px;
  color: black;
}

.fitur .text-feature h3 { 
    font-family: 'Lora', serif;
    color:#1E2188;
    font: weight 50px;
    font-size:40px;
    margin-top:20px;
    margin-left:100px;
    max-width: 1100px;
}

.fitur .text-feature p { 
    font-family: 'Lora', serif;
    color:black;
    font-weight:1px;
    font-size:18px;
    margin-top:6px;
    margin-left:70px;
}

.imagecard {
  display:flex;
  justify-content:center;
  gap:30px;
  flex-wrap: wrap;
}

.card {
  position: relative;
  width: 300px;
  height: 200px;
  overflow: hidden;
  border-radius: 5px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: scale(1.05); 
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3); 
}

.card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.stock {
  position: absolute;
  bottom: 0;
  width: 100%;
  padding: 15px;
  background: linear-gradient(to top, rgba(0, 0, 0, 0.7 )50%, transparent);
  color: white;
  font-size: 16px;
  font-weight: bold;
  line-height: 1.4;
}
 .demo{
      background: linear-gradient(to right, #0d0d8d 60%, rgba(13, 13, 141, 0.0) 100%),
    url('{{ asset('storage/image2/dashboard.png') }}') no-repeat right center;
      background-color: #1E2188;
      height: 200px;
      width: 960px;
      margin-top: 50px;
      margin-left: 150px;
      box-shadow:0 4px 10px rgba(0, 0, 0, 0.5);
    }
  

  .solusi{
    font-family:'Lora';
    
  }

  .solusi p{
    font-family:'Lora';
    font-size:25px;
    margin-top:20px;
    font-weight:5px;
    margin-left:10px;
  }

  .subsolusi{
    font-family:'Lora';
    font-size:15px;
    margin-top:10px;
    font-weight:5px;
    margin-left:10px;
  }
  
  .reqdemo{
    display: inline-block;
    margin: 20px 10px ;
    padding: 8px 16px;
    background-color: transparent;
    color: white;
    border: 2px solid #fff;
    border-radius: 6px;
    text-align: center;
    text-decoration: none;
  }

  .demo-right img {
  width: 300px;
  height: 200px;
  object-fit: cover;
}

.kata{
      background: linear-gradient(to right, #FF6600 70%, rgba(13, 13, 141, 0.0) 100%),
    url('{{ asset('storage/image2/dashboard.png') }}') no-repeat right center;
      background-color: #1E2188;
      height: 200px;
      width: 960px;
      margin-top: 50px;
      box-shadow:0 4px 10px rgba(0, 0, 0, 0.5);
    }
  

  .kata .container1{
    font-family:'Lora';
    
  }

  .kata .container1 p{
    font-family:'Lora';
    font-size:20px;
    margin-top:20px;
    font-weight:5px;
    margin-left:15px;
    max-width: 500px;
  }

  .kata .nama .sumbono{
    font-family:'Lora';
    font-size:25px;
    margin-top:40px;
    font-weight:10px;
    margin-left:15px;
    max-width: 700px;
  }

  .kata .nama .jabatan{
    font-family:'Lora';
    font-size:15px;
    margin-top:6px;
    font-weight:10px;
    margin-left:15px;
    max-width: 700px;
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
        <h1>Our<br>Solution</h1>
        <p class="desc-solution">Solusi digital yang dirancang untuk memastikan setiap kapal tetap
terawat, aman, dan beroperasi tanpa gangguan</p>
        </div>
        
        </div>
    </div>
</section>

<section class="fitur">
    <div class="text-feature">
        <h3>Planned Maintenance<br> System Feature</h3>
        <p> Fitur PMS memudahkan Anda dalam melakukan perawatan, manajemen<br> pegawai dan lain sebagainya</p>
    </div>
</section>

<section class="gambarfitur">
  <div class="imagecard">
    <div class="card">
      <img src="{{ asset('storage/image2/inventory.png') }}" alt="Inventory">
      <div class="stock">Pantau stock<br> secara realtime</div>
    </div>

    <div class="card">
      <img src="{{ asset('storage/image2/dashboard.png') }}" alt="Dashboard">
      <div class="stock">Tampilan dashboard<br> real-time</div>
    </div>

    <div class="card">
      <img src="{{ asset('storage/image2/request.png') }}" alt="Request Order">
      <div class="stock">Request Kebutuhan<br> Partisi Kapal</div>
    </div>
  </div> 
</section>

<section class="demo">
  <div class="solusi">
    <p>Ready to Improve the Operational<br>Effeciency of Your Ship</p>   
  </div>
  <div class="subsolusi">
    <p>Fitur PMS memudahkan Anda dalam melakukan penawaran, manajemen pegawai dan lain<br>sebagainya</p>
  </div>
  <a href="#" class="reqdemo">Request Demo</a>
</section>

<section class="fitur">
    <div class="text-feature">
        <h3>Creating Internet<br> of Things</h3>
        <p> Fitur PMS memudahkan Anda dalam melakukan perawatan, manajemen<br> pegawai dan lain sebagainya</p>
    </div>
</section>

<section class="gambarfitur">
  <div class="imagecard">
    <div class="card">
      <img src="{{ asset('storage/image2/iot1.png') }}" alt="Inventory">
      <div class="stock">Instalasi IoT<br> Kebutuhan Bisnis</div>
    </div>

    <div class="card">
      <img src="{{ asset('storage/image2/iot2.png') }}" alt="Dashboard">
      <div class="stock">Perawatan<br> Internet of Things</div>
    </div>

    <div class="card">
      <img src="{{ asset('storage/image2/iot3.png') }}" alt="Request Order">
      <div class="stock">Pembuatan<br>Internet of Things</div>
    </div>
  </div> 
</section>

<section class="kata">
  <div class="container1" >
    <p>“PMS yang dibangun oleh PT. Automata sangat simpel dan membantu perusahaan kami dalam memonitor material-material kami”</p>
  </div>
  <div class="nama">
    <p class="sumbono">Sumbono</p>
    <p class="jabatan">Vice President - PT. Pelayaran Bahtera Adhiguna (Subsidiary PT. PLN Persero)</p>
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





