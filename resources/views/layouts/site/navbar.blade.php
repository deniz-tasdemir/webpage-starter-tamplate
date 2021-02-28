

<div class="container">
<nav class="navbar open-menu">
  <div class="header-menu">
<ul class="nav-list">  
  <a class="navbar-brand" href="#">PARTAMO</a>
  <li><a href="">Anasayfa</a></li>
  <li><a href="">Dersler <i class="fas fa-chevron-down"></i></a>  
          <ul class="opennavbar">        
        <li><a href="">Bootstrap</a></li>
        <li><a href="">Javascript</a></li>
        <li><a href="">CSS 3</a></li>
        </ul>
      </li>
    <li><a href="#">İletişim</a></li> 
  </ul>
  </div>
  <div class="search">
  <input type="text" placeholder="Search.."><span><i class="fas fa-search"></i></span>
  <button type="submit">Ara</button>
  </div>
  </nav>
  
  <div>

        
        <!-- Hamburger-Menu -->
        <div class="topnav">
            <a href="#home" class="active">PARTAMO</a>
            <div id="myLinks">
                <a href="#news">Anasayfa</a>
                <a href="#contact">Dersler</a>
                  <ul>
                    <li><a href="#">Javascript</a></li>
                    <li><a href="#">Bootstrap</a></li>
                    <li><a href="#">CSS 3</a></li>
                  </ul>
                

                <a href="#">İletişim</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <script>
        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
