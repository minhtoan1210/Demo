<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="source/css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   




</head>
<body>
           @include('header')
         <!--Slider Img End-->
          <!--Container Start-->
              @yield('content')
           <!--Text Bên Trái End-->
           <!--Container End-->
           <!--Google Map Start-->
          <div class="footer">
            <div class="footer__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.3651338268587!2d106.69243501425693!3d10.859808160619961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529c17978287d%3A0xec48f5a17b7d5741!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBOZ3V54buFbiBU4bqldCBUaMOgbmggLSBDxqEgc-G7nyBxdeG6rW4gMTI!5e0!3m2!1svi!2s!4v1619762216784!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
           <!--Google Map End-->
           <!--Nav-Footer Start-->
             <div class="footer__nav">
                  <div class="container boxfooter">
                  <div class="footer__nav-logo">
                 <img src="source/img/logo.png" alt="" >
                  </div>
                   <div class="footer__nav-text">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">Producten & diensten</a></li>
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Referenties</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                   </div>
             </div>
           </div>
           <div class="footer__icon">
               <div class="container boxicon">
                 <div class="footer__icon-map">
                    <img src="source/img/map.png" alt="" srcset="">
                    <div class="text">
                        <p>Peerstaraat 184B</p>
                        <p>9030 Gents</p>
                </div>
                 </div>
                 <div class="footer__icon-phone">
                    <img src="source/img/phone-icon.png" alt="">
                    <div class="text">
                        <p>Tel: 010/395 55 54</p>
                        <p>GSM: 0271/61 39 832</p>
                </div>
                 </div>
                 <div class="footer__icon-gmail">
                    <img src="source/img/gmail.png" alt="">
                    <div class="text">
                        <p>Email: info@website.be</p>
                </div>
                 </div>
            </div>
           </div>
           <div class="footer__footer">
               <div class="footer__footer-textmid">
                 <p>
                    © 2015 Copyright LOGO. Created by Viivue Web Design Company
                 </p>
               </div>
               <div class="footer__footer-textright">
                   <p>
                       Vraag nu uw gratis demo account aan
                   </p>
               </div>
           </div>
        </div>
           <!--Nav-Footer End-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="source/js/jquery-1.11.1.min.js"></script>
    <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script> -->
    
</body>
<script src="source/js/main.js"></script>





  

</html>