

<div class="container">
<nav class="navbar open-menu">
  <div class="header-menu">
<ul class="nav-list">  
  <a class="navbar-brand" href="#">DENİZ</a>
  <li><a  href="{{ url('/anasayfa') }}" >Anasayfa</a></li>
  <li><a href="">Dersler <i class="fas fa-chevron-down"></i></a>  
          <ul class="opennavbar">     
       <li> <a href="{{ url('/bootstrap') }}" >Bootstrap</a> <li>      
        <li><a href="{{ url('/javascript') }}" >Javascript</a></li>
        <li><a href="{{ url('/csslesson') }}" >CSS 3</a></li>        
        </ul>
      </li>
      <li><a href="{{ url('/contact') }}" >İletişim</a></li>  
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
            <a href="{{ url('/anasayfa') }}" >Deniz</a>
            <div id="myLinks">
                <a href="#news">Anasayfa</a>
                <a href="#contact">Dersler</a>
                  <ul>
                  <li><a href="{{ url('/bootstrap') }}">Bootstrap 4 </a></li>  
                  <li><a href="{{ url('/javascript') }}">Javascript</a></li>                
               <li><a href="{{ url('/csslesson') }}">CSS 3</a></li>    
                                
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
