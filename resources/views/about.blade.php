@extends('master')
@section('content')
  <!-- ....................Bagian Awal Header Section.................... -->
  <header>
    <div class="container header-container">
      <div class="header-left">
        <img src="./img/Profile.jpg" alt="">
      </div>
      <div class="header-right">
        <p><b>Hello, I'm</b></p>
        <h1>Muhamad <span style="color: #1db954;">Riyan</span>syah</h1>
        <h2>Frontend Developer</h2>
        <div class="header-action-aria">   
          <a href="/contact" class="btn btn-dark">Contact info</a>              
        </div>
        <div class="header-social">
          <i class="fa-brands fa-instagram" style="color: #1db954;"></i>
          <i class="fa-brands fa-linkedin" style="color: #1db954;"></i>
          <i class="fa-brands fa-github" style="color: #1db954;"></i>
        </div>
      </div>
    </div>
  </header>
<!-- ....................Bagiam Akhir Header Section.................... -->

<!-- ....................Bagian Awal About Section.................... -->
  <section id="About">
    <p class="heading-p">Get To Know More</p>
    <h1 class="heading">About Me</h1>
    <div class="container about-container">
      <div class="about-left">
        <img src="./img/Saya.jpg" alt="">
      </div>
      <div class="about-right">
        <div class="basic-edu">
          <div class="edu-box">
            <i class="fa-solid fa-briefcase" style="color: #1db954;"></i>
            <h4>Experience</h4>
            <p>
              1 years <br>
              Frontend Development              
            </p>
          </div>
          <div class="edu-box">
            <i class="fa-solid fa-school" style="color: #1db954;"></i>
            <h4>Education</h4>
            <p>
              Wikrama Vocational High School            
            </p>
          </div>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas earum eaque harum deleniti quibusdam sed delectus velit nobis cumque officiis, labore, perferendis hic repudiandae. Dolorem, earum neque. A corporis ut veritatis provident. Voluptatem magnam eos ratione doloribus nam praesentium maiores.
        </p>
      </div>
    </div>
  </section> 
<!-- ....................Bagian Akhir About Section.................... -->
@endsection