<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Personal Portfolio</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/responsive.css">
  <script src="https://kit.fontawesome.com/cc240e617d.js" crossorigin="anonymous"></script>
  <link rel="website icon" href="./img/MR.jpg">
</head>
<body>
  <!-- ....................Bagian Awal Nav Bar.................... -->
  <nav>
    <div class="container nav-container">
      <a class="logo"><span style="color: #1db954;">M</span>R.</a>
      <ul class="nav-links">
        <li><a href="/">About</a></li>
        <li><a href="/experiences">Experience</a></li>
        <li><a href="/projects">Projects</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>
  </nav>
  <!-- ....................Bagian Akhir Nav Bar.................... -->
   @yield('content')

  <!-- ....................Bagian Awal Footer Section.................... -->
  <footer>
    <ul class="nav-links">
      <li><a href="/">About</a></li>
      <li><a href="/experiences">Experiences</a></li>
      <li><a href="/projects">Projects</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
    <p>Copyright © Muhamad Riyansyah </p>
  </footer>
  <!-- ....................Bagian Akhir Footer Section.................... -->

</body>
</html>