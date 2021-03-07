<!doctype html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="footer.css">
    <title>Hello, world!</title>
</head>

<body> 
    <div class="container container-footer">        
        <div class="kapsa">   
        <section class="color-3">
            <nav class="nav-19">
            <a  href="{{ url('/anasayfa') }}" data-hover="Lorem">Anasayfa</a>               
                <a  href="{{ url('/lessons') }}" data-hover="Lorem">Dersler</a>
                <a  href="{{ url('/aboutus') }}" data-hover="Lorem">Hakkımızda</a>
              <a href="{{ url('/contact') }}" data-hover="Adipisicing">İletişim</a>           
                <a href="{{ url('/help') }}" data-hover="Adipisicing">Yardım</a>  
               
            </nav>
        </section>
    </div>
    <!-- container -->
    <style type="text/css">
        #footer {
            font-family: Tahoma;
            position: fixed;
            left: 0px;
            bottom: 0px;           
            background: #3D3535;
            border-top: 2px solid #CCC2C2;
            opacity: 0.7;
            filter: alpha(opacity=40);
        }
        /* IE 6 */
        
        * html #footer {
            position: absolute;
            top: expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight: document.body.clientHeight)+(ignoreMe=document.documentElement.scrollTop ? document.documentElement.scrollTop: document.body.scrollTop))+'px');
        }
        
        #footer a {
            text-decoration: none;
            line-height: 30px;
            color: #fff;
            padding-left: 10px;
        }
    </style>
    <div id="footer">       
        <!-- Start of StatCounter Code for Default Guide -->
        <script type="text/javascript">
            var sc_project = 9479084;
            var sc_invisible = 1;
            var sc_security = "2a5130fa";
            var scJsHost = (("https:" == document.location.protocol) ? "https://secure." : "http://www.");
            document.write("<sc" + "ript type='text/javascript' src='" + scJsHost + "statcounter.com/counter/counter.js'></" + "script>");
        </script>
        <!-- End of StatCounter Code for Default Guide -->
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>