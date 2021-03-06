@extends('master')
@section('content')
<div class="container">
      <?php foreach ($products as $key => $pr): ?>
<div class="col-3" style="margin: 15px;display: inline-block;border:0px solid black;">
    <div class="card" style="border:none;">
  <img src="source/img/{{$pr->image}}.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="chitiet/{{$pr->id}}">  <h5 class="card-title">{{$pr->name}}</h5></a>
    <p class="card-text">{{$pr->price}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
  <?php endforeach ?>
  <style type="text/css">
    html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
  display: block;
}
body {
  line-height: 1;
}
ol, ul,li {
  list-style: none;
}
a
{
    color: black;
    text-decoration: none;
}
blockquote, q {
  quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}

@font-face {
    font-family: myFirstFont;
    src:url("/font/MyriadPro-Bold.woff2") format("woff2"),
        url("/font/MyriadPro-Bold.woff") format("woff");
  }

.container {
    width: 80%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }
  .container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }
.header
{
padding-top: 40px;
background: #efefef;
padding-bottom: 20px;
}
.header__header
{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.header__logo
{

}
.content
{
    display: flex;
    flex-wrap: nowrap;
}
.header__btn
{
    display: flex;
}
.header__btn-text
{
    padding-right: 30px;
}
.header__btn-signup
{
    padding-right: 8px;
}
.header__btn-support
{

}
.header__btn-text>.water
{
    font-family: 'myFirstFont';
    color: #1699c6;
    font-size: 14px;
    padding-right: 8px;
}
.header__btn-text>span
{
    font-family: 'myFirstFont';
    padding: 8px;
    font-size: 14px;
}
.header__btn-signup>a 
{
    font-family: 'myFirstFont';
    padding: 20px 40px;
    font-size: 13px;
    background: #18a94a;
    color: #ffffff;
    border: 1px solid #80d09c;
}
.header__btn-support>a 
{
    font-family: 'myFirstFont';
    padding: 20px 33px;
    font-size: 13px;
    background: #7dc242; 
    color: #ffffff;
    font-weight: 600;
    border: 1px solid #cde8b6;
    
}
.nav
{
    position: absolute;
    left: 0%;
    transition: 0.5s;
    padding-top: 40px;
    padding-bottom: 40px;
    background: #1699c6;
    width: 100%;
    z-index: 100;
}
.nav__desktop
{
    display: flex;
    justify-content: center;
   
}
.nav__desktop>li>a
{
    font-family: 'myFirstFont';
    text-transform: uppercase;
    padding: 39px;
    color: #f4f9fb;
    letter-spacing: 1px;
    font-size: 15px;
   
}
.nav__desktop>li>a:hover
{
    background: #18a94a;
}
/* n??t slider Start*/
.slider
{
    height: 100%;
    z-index: 20;
    
    position: relative;
}
.slider__slides
{
    width: 100%;
    height: 500px;
    position: relative;
    overflow: hidden;
}
.slide
{
    display: none;
    height: 100%;
    width: 100%;
    position: relative;
}
.slide-img
{
    min-width: 100%;
    min-height: 100%;
    object-fit: cover;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.blueimg
{
    min-width: 100%;
    min-height: 100%;
    object-fit: cover;
    width: 400px;
    left: 47%;
}
.bluecontext
{
    background:#262262 ;
}
.active
{
    display: block;     
}

.arrow-up {
    width: 304px;
    height: 8px;
    border-left: 176px  solid transparent;
    border-right: 25px solid transparent;
    border-bottom: 140px solid #1699c6;
    position: absolute;
    left: -210px;
    bottom: -25px;
    transform: rotate(208deg);
}
.slider__slides-btnul
{
    position: absolute;
    z-index: 3;
    bottom: 5%;
    left: 1%;
}
.slider__slides-btnul>ul
{
display: flex;
}
.white.is-selected
{
    border: 3px solid #a1e04d;
    background: #0d9247;
    width: 9px;
    height: 9px;
}
.white
{
    width: 15px;
    height: 15px;
    border-radius: 50%;
    margin-right: 10px;
    background: #ffffff;
    cursor: pointer;
}

.slider__slides-control
{
    position: absolute;
    z-index: 20;
    top: 50%;
    display: flex;
    width: 100%;
}
.btnctrl
{
    width: 30px;
    height: 30px;
}
.btnctrl img
{
    width: 100%;
    height: 100%;
    object-fit: cover;
}   
.slider__slides:hover div.--pev
{
    left: 0%;
    transition: 0.5s;
   
}
.slider__slides:hover div.--next
{
    right: 0%;
    transition: 0.5s;
   
}
.--pev
{
    transform: rotate(-180deg);
    position: absolute;
    left: -100%;
    transition: 0.5s;
    cursor: pointer;
    
}
.--next
{
    position: absolute;
    right: 0;
    position: absolute;
    right: -100%;
    transition: 0.5s;
    cursor: pointer;
}
.slider__slides-text
{
    position: absolute;
    top: 50%;
    width: 100%;
}
.slider__slides-text p 
{
    font-family: 'myFirstFont';
    width: 520px;
    font-size: 24px;
    color: #6b6863;
    text-transform: uppercase;
    background: #3f3f40;
    padding-left: 40px;
    padding-top: 23px;
    padding-bottom: 23px;
}

/* n??t slider End*/
/* Conten  Start*/
.conten
{
   
    width: 100%;
    height: 100%;
    position: relative;
    height: 500px;
}
.conten__radio
{
    width: 240px;
    height: 245px;
    position: relative;    
    margin-right: 18px;
    

}
.conten__radio-item
{
position: absolute;
transform: rotate(235deg);
position: relative;
border-radius: 100%;
background: #ecf5fc;
text-transform: uppercase;
padding: 30px;
}
.conten__radio-item span
{
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 12.9px;
    color: #1699c6;
    font-family: myFirstFont;
}
.conten__radio-item1
{
position: absolute;
position: relative;
transform: rotate(235deg);
border-radius: 100%;
background: #ecf5fc;
text-transform: uppercase;
padding: 30px;

}
.conten__radio-item1 span
{
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 12px;
    color: #1699c6;
    font-family: myFirstFont;
}

.conten__radio-item2
{
position: absolute;
transform: rotate(235deg);
position: relative;
border-radius: 100%;
background: #ecf5fc;
text-transform: uppercase;
padding: 30px;

}
.conten__radio-item2 span
{
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 12px;
    color: #1699c6;
    font-family: myFirstFont;
}

.conten__radio-item3
{
    position: absolute;
    position: relative;
    transform: rotate(
258deg
);
    border-radius: 100%;
    background: #ecf5fc;
    text-transform: uppercase;
    padding: 29px;

}
.conten__radio-item3 span
{
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 12px;
    color: #1699c6;
    font-family: myFirstFont;
}


.conten__radio-phone
{
    position: absolute;
    width: 150px;
    height: 150px;
    top: 50%;
    left: 50%;
    background: #18a94a;
    transform: translate(-45%, -50%);
    border-radius: 50%;
    border: 1px solid #b1c7a6;
    box-shadow: 1px 1px inset #13883b;
}
.conten__radio-phone .img 
{
    width: 54px;
    height: 72px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%)rotate(-35deg);
}

.conten__radio-wifi
{
    position: absolute;
    width: 150px;
    height: 150px;
    top: 50%;
    left: 50%;
    background: #18a94a;
    transform: translate(-45%, -50%);
    border-radius: 50%;
    border: 1px solid #b1c7a6;
    box-shadow: 1px 1px inset #13883b;
}
.conten__radio-wifi .img 
{
    width: 54px;
    height: 72px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%)rotate(-34deg);
}

.conten__radio-tainghe
{
    position: absolute;
    width: 150px;
    height: 150px;
    top: 50%;
    left: 50%;
    background: #18a94a;
    transform: translate(-45%, -50%);
    border-radius: 50%;
    border: 1px solid #b1c7a6;
    box-shadow: 1px 1px inset #13883b;
}
.conten__radio-tainghe .img 
{
    width: 54px;
    height: 72px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%)rotate(-32deg);
}

.conten__radio-data
{
    position: absolute;
    width: 150px;
    height: 150px;
    top: 50%;
    left: 50%;
    background: #18a94a;
    transform: translate(-45%, -50%);
    border-radius: 50%;
    border: 1px solid #b1c7a6;
    box-shadow: 1px 1px inset #13883b;
}
.conten__radio-data .img 
{
    width: 54px;
    height: 72px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%)rotate(-27deg);
}



.radiowarper
{
    
    /* margin-top: 63px;
    display: flex;
    transform: rotate(27deg);
    position: absolute;
    left: 5%;
    top: 70%;
    width: 100%; */
        /* margin-top: 63px; */
        margin-top: 63px; 
    background: white;
    padding-top: 104px;
    display: flex;
    transform: rotate(25deg);
    position: absolute;
    padding-left: -2px;
    top: 21%;
}
.conten__radio-bottom .ke 
{
    width: 99px;
    height: 15px;
    position: absolute;
    left: 50%;
    bottom: 35px;
    transform: rotate(-29deg);
}
.conten__radio-bottom .cong 
{
    width: 14px;
    height: 12px;
    position: absolute;
    left: 69%;
    bottom: 12%;
    transform: rotate(104deg);
}
/*conten__text Start*/
.conten__text-background
{
    width: 95%;
    height: 468px;
    transform: rotate(27deg);
    position: absolute;
    background: #efefef;
    top: -40%;
    left: 23%;
}
.box
{
    position: relative;
}
.conten__text-text
{
    left: 52%;
    position: absolute;
    right: 30%;
    display: grid;
    grid-template-columns: 210px 351px;
    margin-top: 47px;
}
.text-lef
{
    text-align: center;
}
.text-left>h1
{
    font-size: 60px;
    font-family: myFirstFont ;
    text-transform: uppercase;
    color: #1699c6;
}
.text-left>span
{
font-size: 18px;
font-family: myFirstFont ;
color: #1699c6;
text-transform: uppercase;

}
.text-right
{
    text-align: justify;
}
.text-right>p
{
    font-size: 18px;
    font-family: myFirstFont;
    color: #757575;
}
.text-right>.two 
{
    margin-top: 30px;
}
.text-right>span
{  
    padding-right: 103px;
}
.conten__text
{
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
}
/*conten__text End*/ 
/*Text B??n Tr??i Start*/
.conten__left
{
    position: absolute;
}
.conten__left>h1
{
    width: 339px;
    font-size: 55px;
    font-family: myFirstFont;
    text-transform: uppercase;
    color: #1699c6;
}
.conten__left-textsub>p
{
    width: 672px;
    font-size: 18px;
    font-family: myFirstFont;
    color: #9d9d9d;
    text-align: justify;
}
.text-left
{
    text-align: center;
}
/*Text B??n Tr??i Start*/
/* Conten  End*/

/*Footer Start*/
/* Map Start*/
.footer
{
    width: 100%;
    position: relative;
    top: 53%;
}
.footer__map>iframe
{
    width: 100%;
    height: 480px;
}
/*Map End*/
.boxfooter
{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.footer__nav
{
    display: flex;
    height: 120px;
    justify-content: space-between;
    align-items: center;
    background: #eeeeee;
}
.footer__nav-text>ul
{
display: flex;
}
.footer__nav-text>ul>li>a 
{
 padding: 15px;
 text-transform: uppercase;
 font-size: 15.12px;
 color: #1699c6;
 font-family:myFirstFont;
}
.boxicon
{
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.footer__icon-map
{
    display: flex;
    align-items: center;
}
.footer__icon-map>img
{
    margin-right: 13px;
    width: 30px;
    height: 38px;
}
.footer__icon-map>.text>p:nth-child(1)
{
    font-size: 15.97px;
    color: #434343;
    padding-bottom: 13px;
    font-family:myFirstFont;

}
.footer__icon-map>.text>p
{
    font-size: 15.97px;
    color: #434343;
    font-family:myFirstFont;

}
.footer__icon-phone>.text>p:nth-child(1)
{
    font-size: 15.97px;
    color: #434343;
    padding-bottom: 13px;
    font-family:myFirstFont;

}
.footer__icon-phone>.text>p
{
    font-size: 15.97px;
    color: #434343;
    font-family:myFirstFont;

}
.footer__icon-phone
{
    display: flex;
}
.footer__icon-phone>img
{
    margin-right: 13px;
    width: 30px;
    height: 38px;
}
.footer__icon-gmail
{
    display: flex;
    align-items: center; 
}
.footer__icon-gmail>img
{
    margin-right: 13px;
    width: 30px;
    height: 38px; 
}
.footer__icon-gmail>.text>p
{
    font-size: 15.97px;
    color: #434343;
    font-family:myFirstFont;
}
.footer__icon
{
    background: #dfdfdf;
    padding-top: 35px;
    padding-bottom: 35px;
}
.footer__footer-textmid
{
    text-align: center;
}
.footer__footer-textmid>p
{
    font-size: 14px;
    font-family:myFirstFont;
    color: #303030;
}
.footer__footer-textright
{
    position: absolute;
    right: 0%;
    bottom: -9%;
}
.footer__footer-textright>p
{
    font-size: 15px;
    padding-top: 21px;
    padding-bottom: 25px;
    padding-left: 25px;
    padding-right: 64px;
    background: #303030;
    color: #1894be;
    font-family:myFirstFont;
    border-radius: 11px;
}
.footer__footer
{
    background: #eeeeee;
    position: relative;
    height: 85px;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    display: flex;
}

/*Footer End*/
.mobi
{
    position: fixed;
    top: 0%;
    padding-top: 40px;
    padding-bottom: 40px;
    background: #1699c6;
    width: 100%;
    z-index: 100;
}
/*-----------------------------------------------------------------*/
@media only screen and (max-width: 2001px) and (min-width: 1350px){
    .conten__text-background
    {
        width: 100%;
        height: 482px;
        transform: rotate(
    19deg
    );
        position: absolute;
        background: #efefef;
        top: -36%;
        left: 15%;
        z-index: -1;
    }
    .conten__text-text
{
    left: 46%;
    position: absolute;
    right: 30%;
    display: grid;
    grid-template-columns: 210px 351px;
    margin-top: 15px;
    text-align: justify;
}
.radiowarper
{
    justify-content: space-around;
    margin-top: 63px;
    background: white;
    padding-top: 104px;
    display: flex;
    transform: rotate(
25deg
);
    position: absolute;
    left: 3%;
    padding-left: -2px;
    top: 27%;
    right: -29px;
    width: 95%;
    overflow: hidden;
}
.footer
{
    width: 100%;
    position: relative;
    top: 62%;
}
}

/*---------------------------------------------------------------*/
  @media only screen and (max-width: 2001px) and (min-width: 1800px){
    .radiowarper
    {
    background: white;
    padding-top: 104px;
    display: flex;
    transform: rotate( 17deg);
    position: absolute;
    width: 100??;
    padding-left: -2px;
    justify-content: space-around;
    top: 36%;
    overflow: hidden;
    width: 95%;
    }
    .conten__text-text 
    {
        left: 52%;
        position: absolute;
        right: 30%;
        display: grid;
        grid-template-columns: 210px 351px;
        margin-top: 15px;
        text-align: justify;
    }
  }
  @media  only screen and (max-width: 2000px) and (min-width: 2000px){
    .radiowarper {
        background: white;
        padding-top: 104px;
        display: flex;
        transform: rotate( 
    17deg
    );
        position: absolute;
        width: 100??;
        padding-left: -2px;
        justify-content: space-around;
        top: 30%;
        overflow: hidden;
        width: 96%;
    }
  }
  @media  only screen and (max-width: 1350px) and (min-width: 1200px){
    .conten__text-background
    {
        width: 95%;
        height: 468px;
        transform: rotate(27deg);
        position: absolute;
        background: #efefef;
        top: -40%;
        left: 23%;
    }
  }
 /* Desktops and laptops ----------- */
 /* Desktops */
 @media only screen and (max-width : 1200px) and (min-width: 1024px){
    .radiowarper {
        margin-top: -2px;
        background: white;
        padding-top: 143px;
        display: flex;
        transform: rotate(25deg);
        position: absolute;
        padding-left: -2px;
        top: 20%;
        left: 5%;
    }
    .conten__text-background {
        width: 95%;
        height: 468px;
        transform: rotate(27deg);
        position: absolute;
        background: #efefef;
        top: -51%;
        left: 22%;
    }
    .conten__text-text {
        left: 42%;
        position: absolute;
        right: 30%;
        display: grid;
        grid-template-columns: 210px 351px;
        margin-top: 47px;
    }
    .text-left>h1 {
        font-size: 50px;
        font-family: myFirstFont;
        text-transform: uppercase;
        color: #1699c6;
    }
    .text-left>span {
        font-size: 15px;
        font-family: myFirstFont;
        color: #1699c6;
        text-transform: uppercase;
    }
    .text-right>p {
            font-size: 13px;
            font-family: myFirstFont;
            color: #757575;
    }

    .conten__radio {
            width: 200px;
            height: 205px;
            position: relative;
            
    }
    .conten__radio-item
    {
        width: 159px;
        height: 177px;
        background: white;
    }
    .conten__radio-item3
    {
        width: 159px;
        height: 177px;
        background: white;
    }
    .conten__radio-item2
    {
        width: 159px;
        background: white;
        height: 177px;
    }
    .conten__radio-item1
    {
        width: 159px;
        background: white;
        height: 177px;
    }
    .conten__radio-wifi
    {
        position: absolute;
        width: 120px;
        height: 120px;
        top: 50%;
        left: 50%;
        background: #18a94a;
        transform: translate(-36%, -50%);
        border-radius: 50%;
        border: 1px solid #b1c7a6;
        box-shadow: 1px 1px inset #13883b;
    }
    .conten__radio-data
    {
        position: absolute;
        width: 120px;
        height: 120px;
        top: 50%;
        left: 50%;
        background: #18a94a;
        transform: translate(-36%, -50%);
        border-radius: 50%;
        border: 1px solid #b1c7a6;
        box-shadow: 1px 1px inset #13883b;
    }
    .conten__radio-tainghe
    {
        position: absolute;
        width: 120px;
        height: 120px;
        top: 50%;
        left: 50%;
        background: #18a94a;
        transform: translate(-36%, -50%);
        border-radius: 50%;
        border: 1px solid #b1c7a6;
        box-shadow: 1px 1px inset #13883b;
    }
    .conten__radio-phone {
        position: absolute;
        width: 120px;
        height: 120px;
        top: 50%;
        left: 50%;
        background: #18a94a;
        transform: translate(-36%, -50%);
        border-radius: 50%;
        border: 1px solid #b1c7a6;
        box-shadow: 1px 1px inset #13883b;
    }
    .conten__radio-bottom .ke {
        width: 86px;
        height: 15px;
        position: absolute;
        left: 50%;
        bottom: 29px;
        transform: rotate(
    -23deg
    );
    }
    .conten__radio-bottom .cong {
        width: 14px;
        height: 12px;
        position: absolute;
        left: 69%;
        bottom: 12%;
        transform: rotate(
    104deg
    );
    }
    .conten__left>h1 {
        width: 339px;
        font-size: 50px;
        font-family: myFirstFont;
        text-transform: uppercase;
        color: #1699c6;
    }
    .conten__left-textsub>p {
        width: 486px;
        font-size: 18px;
        font-family: myFirstFont;
        color: #9d9d9d;
        font-size: 13px;
        text-align: justify;
    }
    .footer__footer-textright>p {
        padding-top: 21px;
        padding-bottom: 25px;
        padding-left: 16px;
        padding-right: 19px;
        background: #303030;
        color: #1894be;
        font-family: myFirstFont;
        border-radius: 7px;
    }
    .footer__footer-textmid>p {
        font-size: 13px;
        font-family: myFirstFont;
        color: #303030;
    }
    .footer__footer-textright>p {
        padding-top: 21px;
        padding-bottom: 25px;
        padding-left: 16px;
        padding-right: 19px;
        background: #303030;
        color: #1894be;
        font-family: myFirstFont;
        border-radius: 7px;
    }
    .slider__slides-text p {
        font-family: 'myFirstFont';
        width: 457px;
        font-size: 19px;
        color: #6b6863;
        text-transform: uppercase;
        background: #3f3f40;
        padding-left: 40px;
        padding-top: 23px;
        padding-bottom: 23px;
    }
}
/* m??y t??nh b???ng lo???i to, hi???n th??? chi???u ngang */
@media only screen and (max-width : 1023px)  and (min-width : 767px ) {
.header__logo>img 
{
    width: 100px;
}
.header__btn-text>.water {
    font-family: 'myFirstFont';
    color: #1699c6;
    font-size: 11px;
    padding-right: 8px;
}
.header__btn-text>span {
    font-family: 'myFirstFont';
    padding: 8px;
    font-size: 10px;
}
.header__btn-signup>a {
    font-family: 'myFirstFont';
    padding: 10px 20px;
    font-size: 10px;
    background: #18a94a;
    color: #ffffff;
    border: 1px solid #80d09c;
}
.header__btn-support>a {
    font-family: 'myFirstFont';
    padding: 10px 20px;
    font-size: 10px;
    background: #7dc242;
    color: #ffffff;
    font-weight: 600;
    border: 1px solid #cde8b6;
}
.nav {
    transition: 0.5s;
    padding-top: 20px;
    display: flex;
    padding-bottom: 20px;
    background: #1699c6;
    width: 100%;
    z-index: 100;
    align-content: center;
    justify-content: center;
}
.nav__desktop>li>a {
    font-family: 'myFirstFont';
    text-transform: uppercase;
    padding: 20px;
    color: #f4f9fb;
    letter-spacing: 1px;
    font-size: 10px;
}
.slider__slides-text p {
   display: none;
}
.conten__text-text {
    position: absolute;
    display: grid;
    grid-template-columns: 210px 1fr;
    margin-top: 47px;
}
.text-right>p {
    font-size: 13px;
    font-family: myFirstFont;
    color: #757575;
}
.conten__text-background
{
    display: none;
}
.conten__text-text {
  left: inherit;
  right: inherit;
    width: 100%;
    display: grid;
    grid-template-columns: 210px 443px;
}
.text-right>.two {
    margin-top: 20px;
}

/*------------------*/
.radiowarper {
    /* margin-top: 63px; */
    margin-top: 63px;
    background: white;
    padding-top: 104px;
    display: flex;
    transform: rotate(
25deg
);
    position: absolute;
    padding-left: -2px;
    top: 21%;
}
.conten__radio {
    width: 150px;
    height: 172px;
    position: relative;
    margin-right: 18px;
}
.radiowarper {
        background: white;
        padding-top: 45px; 
        display: flex;
        transform: rotate(0deg);
        position: absolute;
        padding-left: -2px;
        top: 21%;
}
.conten__radio-phone {
    position: absolute;
    width: 130px;
    height: 125px;
    top: 50%;
    left: 50%;
    background: #18a94a;
    transform: translate(-45%, -50%);
    border-radius: 50%;
    border: 1px solid #b1c7a6;
    box-shadow: 1px 1px inset #13883b;
}
.conten__radio-wifi {
    position: absolute;
    width: 130px;
    height: 125px;
    top: 50%;
    left: 50%;
    background: #18a94a;
    transform: translate(-45%, -50%);
    border-radius: 50%;
    border: 1px solid #b1c7a6;
    box-shadow: 1px 1px inset #13883b;
}
.conten__radio-tainghe {
    position: absolute;
    width: 130px;
    height: 125px;
    top: 50%;
    left: 50%;
    background: #18a94a;
    transform: translate(-45%, -50%);
    border-radius: 50%;
    border: 1px solid #b1c7a6;
    box-shadow: 1px 1px inset #13883b;
}
.conten__radio-data {
    position: absolute;
    width: 130px;
    height: 125px;
    top: 50%;
    left: 50%;
    background: #18a94a;
    transform: translate(-45%, -50%);
    border-radius: 50%;
    border: 1px solid #b1c7a6;
    box-shadow: 1px 1px inset #13883b;
}
.conten__radio-item {
    display: none;
    position: absolute;
    transform: rotate(235deg);
    position: relative;
    border-radius: 100%;
     background: white; 
    text-transform: uppercase;
    padding: 30px;
}
.conten__radio-item1 {
 display: none;
}
.conten__radio-bottom
{
    display: none;
}
.conten__radio-item2
{
    display: none;
}
.conten__radio-bottom
{
    display: none;
}
.conten__radio-item3
{
    display: none;
}
.conten__radio-bottom
{
    display: none;
}
.conten__radio-wifi .img {
    width: 40px;
    height: 64px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%)rotate(
-20deg
);
}
.conten__radio-tainghe .img {
    width: 54px;
    height: 72px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%)rotate(
-4deg
);
}
.conten__radio-data .img {
    width: 54px;
    height: 72px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%)rotate(
-3deg
);
}
.conten__left {
    margin-top: -65px;
    position: absolute;
    display: grid;
    grid-template-columns: 323px 430px;
}
.conten__left-textsub>p {
    width: 331px;
    font-size: 15px;
    font-family: myFirstFont;
    color: #9d9d9d;
    text-align: justify;
}
.conten__left>h1 {
    width: 339px;
    font-size: 50px;
    font-family: myFirstFont;
    text-transform: uppercase;
    color: #1699c6;
}
.footer__nav-text>ul>li>a {
    padding: 15px;
    text-transform: uppercase;
    font-size: 11px;
    color: #1699c6;
    font-family: myFirstFont;
}
.footer__nav-logo>img 
{
    width: 100px;
}
.footer__icon-map>img {
    margin-right: 13px;
    width: 20px;
    height: 30px;
}
.footer__icon-map>.text>p:nth-child(1) {
    font-size: 12px;
    color: #434343;
    padding-bottom: 6px;
    font-family: myFirstFont;
}
.footer__icon-map>.text>p {
    font-size: 13px;
    color: #434343;
    font-family: myFirstFont;
}
.footer__icon
{
    padding-top: 20px;
    padding-bottom: 20px;
}
.footer__icon-phone>img {
    margin-right: 13px;
    width: 20px;
    height: 30px;
}
.footer__icon-phone>.text>p:nth-child(1) {
    font-size: 13px;
    color: #434343;
    padding-bottom: 8px;
    font-family: myFirstFont;
}
.footer__icon-phone>.text>p {
    font-size: 13px;
    color: #434343;
    font-family: myFirstFont;
}
.footer__icon-gmail>.text>p {
    font-size: 13px;
    color: #434343;
    font-family: myFirstFont;
}
.footer__icon-gmail>img {
    margin-right: 13px;
    width: 20px;
    height: 30px;
}
.footer__footer {
     justify-content:inherit
}
.footer__footer-textright>p {
    font-size: 12px;
}
}
/*m??y t??nh b???ng lo???i to, hi???n th??? chi???u d???c*/
@media only screen and (max-width : 768px ) and (min-width:600px) {
    .header__logo>img 
    {
        width: 100px;
    }
    .header__btn-text>.water {
        font-family: 'myFirstFont';
        color: #1699c6;
        font-size: 11px;
        padding-right: 8px;
    }
    .header__btn-text>span {
        font-family: 'myFirstFont';
        padding: 8px;
        font-size: 10px;
    }
    .header__btn-signup>a {
        font-family: 'myFirstFont';
        padding: 10px 20px;
        font-size: 10px;
        background: #18a94a;
        color: #ffffff;
        border: 1px solid #80d09c;
    }
    .header__btn-support>a {
        font-family: 'myFirstFont';
        padding: 10px 20px;
        font-size: 10px;
        background: #7dc242;
        color: #ffffff;
        font-weight: 600;
        border: 1px solid #cde8b6;
    }
    .nav {
        transition: 0.5s;
        padding-top: 20px;
        display: flex;
        padding-bottom: 20px;
        background: #1699c6;
        width: 100%;
        z-index: 100;
        align-content: center;
        justify-content: center;
    }
    .nav__desktop>li>a {
        font-family: 'myFirstFont';
        text-transform: uppercase;
        padding: 20px;
        color: #f4f9fb;
        letter-spacing: 1px;
        font-size: 10px;
    }
    .slider__slides-text p {
       display: none;
    }
    .conten__text-text {
        position: absolute;
        display: grid;
        grid-template-columns: 210px 1fr;
        margin-top: 47px;
    }
    .text-right>p {
        font-size: 13px;
        font-family: myFirstFont;
        color: #757575;
    }
    .conten__text-background
    {
        display: none;
    }
    .conten__text-text {
      left: inherit;
      right: inherit;
        width: 100%;
        display: grid;
        grid-template-columns: 210px 443px;
    }
    .text-right>.two {
        margin-top: 20px;
    }
    
    /*------------------*/
    .radiowarper {
        /* margin-top: 63px; */
        margin-top: 63px;
        background: white;
        padding-top: 104px;
        display: flex;
        transform: rotate(
    25deg
    );
        position: absolute;
        padding-left: -2px;
        top: 21%;
    }
    .conten__radio {
        width: 150px;
        height: 172px;
        position: relative;
        margin-right: 18px;
    }
    .radiowarper {
            background: white;
            padding-top: 45px; 
            display: flex;
            transform: rotate(0deg);
            position: absolute;
            padding-left: -2px;
            top: 21%;
    }
    .conten__radio-phone {
        position: absolute;
        width: 130px;
        height: 125px;
        top: 50%;
        left: 50%;
        background: #18a94a;
        transform: translate(-45%, -50%);
        border-radius: 50%;
        border: 1px solid #b1c7a6;
        box-shadow: 1px 1px inset #13883b;
    }
    .conten__radio-wifi {
        position: absolute;
        width: 130px;
        height: 125px;
        top: 50%;
        left: 50%;
        background: #18a94a;
        transform: translate(-45%, -50%);
        border-radius: 50%;
        border: 1px solid #b1c7a6;
        box-shadow: 1px 1px inset #13883b;
    }
    .conten__radio-tainghe {
        position: absolute;
        width: 130px;
        height: 125px;
        top: 50%;
        left: 50%;
        background: #18a94a;
        transform: translate(-45%, -50%);
        border-radius: 50%;
        border: 1px solid #b1c7a6;
        box-shadow: 1px 1px inset #13883b;
    }
    .conten__radio-data {
        position: absolute;
        width: 130px;
        height: 125px;
        top: 50%;
        left: 50%;
        background: #18a94a;
        transform: translate(-45%, -50%);
        border-radius: 50%;
        border: 1px solid #b1c7a6;
        box-shadow: 1px 1px inset #13883b;
    }
    .conten__radio-item {
        display: none;
        position: absolute;
        transform: rotate(235deg);
        position: relative;
        border-radius: 100%;
         background: white; 
        text-transform: uppercase;
        padding: 30px;
    }
    .conten__radio-item1 {
     display: none;
    }
    .conten__radio-bottom
    {
        display: none;
    }
    .conten__radio-item2
    {
        display: none;
    }
    .conten__radio-bottom
    {
        display: none;
    }
    .conten__radio-item3
    {
        display: none;
    }
    .conten__radio-bottom
    {
        display: none;
    }
    .conten__radio-wifi .img {
        width: 40px;
        height: 64px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%)rotate(
    -20deg
    );
    }
    .conten__radio-tainghe .img {
        width: 54px;
        height: 72px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%)rotate(
    -4deg
    );
    }
    .conten__radio-data .img {
        width: 54px;
        height: 72px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%)rotate(
    -3deg
    );
    }
    .conten__left {
        margin-top: -65px;
        position: absolute;
        display: grid;
        grid-template-columns: 323px 430px;
    }
    .conten__left-textsub>p {
        width: 331px;
        font-size: 15px;
        font-family: myFirstFont;
        color: #9d9d9d;
        text-align: justify;
    }
    .conten__left>h1 {
        width: 339px;
        font-size: 50px;
        font-family: myFirstFont;
        text-transform: uppercase;
        color: #1699c6;
    }
    .footer__nav-text>ul>li>a {
        padding: 15px;
        text-transform: uppercase;
        font-size: 11px;
        color: #1699c6;
        font-family: myFirstFont;
    }
    .footer__nav-logo>img 
    {
        width: 100px;
    }
    .footer__icon-map>img {
        margin-right: 13px;
        width: 20px;
        height: 30px;
    }
    .footer__icon-map>.text>p:nth-child(1) {
        font-size: 12px;
        color: #434343;
        padding-bottom: 6px;
        font-family: myFirstFont;
    }
    .footer__icon-map>.text>p {
        font-size: 13px;
        color: #434343;
        font-family: myFirstFont;
    }
    .footer__icon
    {
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .footer__icon-phone>img {
        margin-right: 13px;
        width: 20px;
        height: 30px;
    }
    .footer__icon-phone>.text>p:nth-child(1) {
        font-size: 13px;
        color: #434343;
        padding-bottom: 8px;
        font-family: myFirstFont;
    }
    .footer__icon-phone>.text>p {
        font-size: 13px;
        color: #434343;
        font-family: myFirstFont;
    }
    .footer__icon-gmail>.text>p {
        font-size: 13px;
        color: #434343;
        font-family: myFirstFont;
    }
    .footer__icon-gmail>img {
        margin-right: 13px;
        width: 20px;
        height: 30px;
    }
    .footer__footer {
         justify-content:inherit
    }
    .footer__footer-textright>p {
        font-size: 12px;
    }
    .slider__slides {
        height: 400px;
    }
    .conten__text-text {
        grid-template-columns: 210px 300px;
    }
    .text-left>h1 {
        font-size: 40px;
    }
    .text-left>span {
        font-size: 13px;
    }
    .radiowarper
    {
        display: none;
    }
    .conten {
        height: 300px;
    }
    .conten__left {
        margin-top: -65px;
        position: absolute;
        display: grid;
        grid-template-columns: 200px 306px;
    }
    .conten__left>h1 {
        width: 339px;
        font-size: 33px;
    }
    .conten__left-textsub>p {
        width: 290px;
    }
    .footer__nav-text>ul>li>a {
        padding: 3px;
    }
}
/*m??y t??nh b???ng, hi???n th??? chi???u ngang*/
@media only screen and (max-width : 600px ) and (min-width:460px) {
.header__logo>img 
{
    width: 60px;
}
.header__btn-text
{
    display: none;
}
.header__btn-signup>a {
    font-family: 'myFirstFont';
    padding: 13px 30px;
    font-size: 13px;
    background: #18a94a;
    color: #ffffff;
    border: 1px solid #80d09c;
}
.header__btn-support>a {
    font-family: 'myFirstFont';
    padding: 13px 30px;
    font-size: 13px;
    background: #18a94a;
    color: #ffffff;
    border: 1px solid #80d09c;
}
.mobi {
    position: fixed;
    top: 0%;
    padding-top: 20px;
    padding-bottom: 20px;
    background: #1699c6;
    width: 100%;
    z-index: 100;
}
.nav__desktop>li>a {
    padding: 5px;
    font-size: 11px;
}
.nav {
    padding-top: 20px;
    padding-bottom: 20px;
}
.slider__slides-text p {
  display: none;
}
.slider__slides {

    height: 380px;

}
.arrow-up
{
    display: none;
}
.slider__slides-btnul
{
    display: none;
}
.slide-img {
    min-width: 100%;
    min-height: 100%;
    object-fit: 10% 100%;
    position: absolute;
    top: 50%;
    transform: translate(-56%, -37%);
}

.slider__slides-text p {
    display: none;
 }
 .conten__text-text {
     position: absolute;
     display: grid;
     grid-template-columns: 210px 1fr;
     margin-top: 47px;
 }
 .text-right>p {
     font-size: 13px;
     font-family: myFirstFont;
     color: #757575;
 }
 .conten__text-background
 {
     display: none;
 }
 .conten__text-text {
   left: inherit;
   right: inherit;
     width: 100%;
     display: grid;
     grid-template-columns: 210px 443px;
 }
 .text-right>.two {
     margin-top: 20px;
 }
 
 /*------------------*/
 .radiowarper {
     /* margin-top: 63px; */
     margin-top: 63px;
     background: white;
     padding-top: 104px;
     display: flex;
     transform: rotate(
 25deg
 );
     position: absolute;
     padding-left: -2px;
     top: 21%;
 }
 .conten__radio {
     width: 150px;
     height: 172px;
     position: relative;
     margin-right: 18px;
 }
 .radiowarper {
         background: white;
         padding-top: 45px; 
         display: flex;
         transform: rotate(0deg);
         position: absolute;
         padding-left: -2px;
         top: 21%;
 }
 .conten__radio-phone {
     position: absolute;
     width: 130px;
     height: 125px;
     top: 50%;
     left: 50%;
     background: #18a94a;
     transform: translate(-45%, -50%);
     border-radius: 50%;
     border: 1px solid #b1c7a6;
     box-shadow: 1px 1px inset #13883b;
 }
 .conten__radio-wifi {
     position: absolute;
     width: 130px;
     height: 125px;
     top: 50%;
     left: 50%;
     background: #18a94a;
     transform: translate(-45%, -50%);
     border-radius: 50%;
     border: 1px solid #b1c7a6;
     box-shadow: 1px 1px inset #13883b;
 }
 .conten__radio-tainghe {
     position: absolute;
     width: 130px;
     height: 125px;
     top: 50%;
     left: 50%;
     background: #18a94a;
     transform: translate(-45%, -50%);
     border-radius: 50%;
     border: 1px solid #b1c7a6;
     box-shadow: 1px 1px inset #13883b;
 }
 .conten__radio-data {
     position: absolute;
     width: 130px;
     height: 125px;
     top: 50%;
     left: 50%;
     background: #18a94a;
     transform: translate(-45%, -50%);
     border-radius: 50%;
     border: 1px solid #b1c7a6;
     box-shadow: 1px 1px inset #13883b;
 }
 .conten__radio-item {
     display: none;
     position: absolute;
     transform: rotate(235deg);
     position: relative;
     border-radius: 100%;
      background: white; 
     text-transform: uppercase;
     padding: 30px;
 }
 .conten__radio-item1 {
  display: none;
 }
 .conten__radio-bottom
 {
     display: none;
 }
 .conten__radio-item2
 {
     display: none;
 }
 .conten__radio-bottom
 {
     display: none;
 }
 .conten__radio-item3
 {
     display: none;
 }
 .conten__radio-bottom
 {
     display: none;
 }
 .conten__radio-wifi .img {
     width: 40px;
     height: 64px;
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%)rotate(
 -20deg
 );
 }
 .conten__radio-tainghe .img {
     width: 54px;
     height: 72px;
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%)rotate(
 -4deg
 );
 }
 .conten__radio-data .img {
     width: 54px;
     height: 72px;
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%)rotate(
 -3deg
 );
 }
 .conten__left {
     margin-top: -65px;
     position: absolute;
     display: grid;
     grid-template-columns: 323px 430px;
 }
 .conten__left-textsub>p {
     width: 331px;
     font-size: 15px;
     font-family: myFirstFont;
     color: #9d9d9d;
     text-align: justify;
 }
 .conten__left>h1 {
     width: 339px;
     font-size: 50px;
     font-family: myFirstFont;
     text-transform: uppercase;
     color: #1699c6;
 }
 .footer__nav-text>ul>li>a {
     padding: 15px;
     text-transform: uppercase;
     font-size: 11px;
     color: #1699c6;
     font-family: myFirstFont;
 }
 .footer__nav-logo>img 
 {
     width: 100px;
 }
 .footer__icon-map>img {
     margin-right: 13px;
     width: 20px;
     height: 30px;
 }
 .footer__icon-map>.text>p:nth-child(1) {
     font-size: 12px;
     color: #434343;
     padding-bottom: 6px;
     font-family: myFirstFont;
 }
 .footer__icon-map>.text>p {
     font-size: 13px;
     color: #434343;
     font-family: myFirstFont;
 }
 .footer__icon
 {
     padding-top: 20px;
     padding-bottom: 20px;
 }
 .footer__icon-phone>img {
     margin-right: 13px;
     width: 20px;
     height: 30px;
 }
 .footer__icon-phone>.text>p:nth-child(1) {
     font-size: 13px;
     color: #434343;
     padding-bottom: 8px;
     font-family: myFirstFont;
 }
 .footer__icon-phone>.text>p {
     font-size: 13px;
     color: #434343;
     font-family: myFirstFont;
 }
 .footer__icon-gmail>.text>p {
     font-size: 13px;
     color: #434343;
     font-family: myFirstFont;
 }
 .footer__icon-gmail>img {
     margin-right: 13px;
     width: 20px;
     height: 30px;
 }
 .footer__footer {
      justify-content:inherit
 }
 .footer__footer-textright>p {
     font-size: 12px;
 }
 .slider__slides {
     height: 400px;
 }
 .conten__text-text {
     grid-template-columns: 210px 300px;
 }
 .text-left>h1 {
     font-size: 40px;
 }
 .text-left>span {
     font-size: 13px;
 }
 .radiowarper
 {
     display: none;
 }
 .conten {
     height: 300px;
 }
 .conten__left {
     margin-top: -65px;
     position: absolute;
     display: grid;
     grid-template-columns: 200px 306px;
 }
 .conten__left>h1 {
     width: 339px;
     font-size: 33px;
 }
 .conten__left-textsub>p {
     width: 290px;
 }
 .footer__nav-text>ul>li>a {
     padding: 3px;
 }
 .conten__text-text {
    grid-template-columns: 1fr;
}
.conten__left {
    grid-template-columns: 1fr;
}
.text-right
{
    width: 390px;
}
.conten__left>h1 {
    width: 339px;
    font-size: 32px;
    margin-top: 30px;
}
.conten__left-textsub>p {
    width: 390px;
}
.footer__nav
{
    display: none;
}
.footer__icon-phone>img {
 display: none;
}
.footer__icon-map>img {
  display: none;
}
.footer__icon-gmail>img {
    display: none;
}
.footer__footer-textright
{
    display: none;
}   
.footer__footer {
    justify-content: center;
}

}
@media only screen and (max-width : 460px )  and (min-width:375px)  {
    .header__logo>img 
    {
        width: 60px;
    }
    .header__btn-text
    {
        display: none;
    }
    .header__btn-signup>a {
        font-family: 'myFirstFont';
        padding: 13px 30px;
        font-size: 13px;
        background: #18a94a;
        color: #ffffff;
        border: 1px solid #80d09c;
    }
    .header__btn-support>a {
        font-family: 'myFirstFont';
        padding: 13px 30px;
        font-size: 13px;
        background: #18a94a;
        color: #ffffff;
        border: 1px solid #80d09c;
    }
    .mobi {
        position: fixed;
        top: 0%;
        padding-top: 20px; 
        padding-bottom: 20px;
        background: #1699c6;
        width: 100%;
        z-index: 100;
    }
    .nav__desktop>li>a {
            padding: 4px;
            font-size: 9px;
    }
    .nav {
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .slider__slides-text p {
      display: none;
    }
    .slider__slides {
    
        height: 380px;
    
    }
    .arrow-up
    {
        display: none;
    }
    .slider__slides-btnul
    {
        display: none;
    }
    .slide-img {
        min-width: 100%;
        min-height: 100%;
        object-fit: 10% 100%;
        position: absolute;
        top: 50%;
        transform: translate(-56%, -37%);
    }
    
    .slider__slides-text p {
        display: none;
     }
     .conten__text-text {
         position: absolute;
         display: grid;
         grid-template-columns: 210px 1fr;
         margin-top: 47px;
     }
     .text-right>p {
         font-size: 13px;
         font-family: myFirstFont;
         color: #757575;
     }
     .conten__text-background
     {
         display: none;
     }
     .conten__text-text {
       left: inherit;
       right: inherit;
         width: 100%;
         display: grid;
         grid-template-columns: 210px 443px;
     }
     .text-right>.two {
         margin-top: 20px;
     }
     
     /*------------------*/
     .radiowarper {
         /* margin-top: 63px; */
         margin-top: 63px;
         background: white;
         padding-top: 104px;
         display: flex;
         transform: rotate(
     25deg
     );
         position: absolute;
         padding-left: -2px;
         top: 21%;
     }
     .conten__radio {
         width: 150px;
         height: 172px;
         position: relative;
         margin-right: 18px;
     }
     .radiowarper {
             background: white;
             padding-top: 45px; 
             display: flex;
             transform: rotate(0deg);
             position: absolute;
             padding-left: -2px;
             top: 21%;
     }
     .conten__radio-phone {
         position: absolute;
         width: 130px;
         height: 125px;
         top: 50%;
         left: 50%;
         background: #18a94a;
         transform: translate(-45%, -50%);
         border-radius: 50%;
         border: 1px solid #b1c7a6;
         box-shadow: 1px 1px inset #13883b;
     }
     .conten__radio-wifi {
         position: absolute;
         width: 130px;
         height: 125px;
         top: 50%;
         left: 50%;
         background: #18a94a;
         transform: translate(-45%, -50%);
         border-radius: 50%;
         border: 1px solid #b1c7a6;
         box-shadow: 1px 1px inset #13883b;
     }
     .conten__radio-tainghe {
         position: absolute;
         width: 130px;
         height: 125px;
         top: 50%;
         left: 50%;
         background: #18a94a;
         transform: translate(-45%, -50%);
         border-radius: 50%;
         border: 1px solid #b1c7a6;
         box-shadow: 1px 1px inset #13883b;
     }
     .conten__radio-data {
         position: absolute;
         width: 130px;
         height: 125px;
         top: 50%;
         left: 50%;
         background: #18a94a;
         transform: translate(-45%, -50%);
         border-radius: 50%;
         border: 1px solid #b1c7a6;
         box-shadow: 1px 1px inset #13883b;
     }
     .conten__radio-item {
         display: none;
         position: absolute;
         transform: rotate(235deg);
         position: relative;
         border-radius: 100%;
          background: white; 
         text-transform: uppercase;
         padding: 30px;
     }
     .conten__radio-item1 {
      display: none;
     }
     .conten__radio-bottom
     {
         display: none;
     }
     .conten__radio-item2
     {
         display: none;
     }
     .conten__radio-bottom
     {
         display: none;
     }
     .conten__radio-item3
     {
         display: none;
     }
     .conten__radio-bottom
     {
         display: none;
     }
     .conten__radio-wifi .img {
         width: 40px;
         height: 64px;
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%)rotate(
     -20deg
     );
     }
     .conten__radio-tainghe .img {
         width: 54px;
         height: 72px;
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%)rotate(
     -4deg
     );
     }
     .conten__radio-data .img {
         width: 54px;
         height: 72px;
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%)rotate(
     -3deg
     );
     }
     .conten__left {
         margin-top: -65px;
         position: absolute;
         display: grid;
         grid-template-columns: 323px 430px;
     }
     .conten__left-textsub>p {
         width: 331px;
         font-size: 15px;
         font-family: myFirstFont;
         color: #9d9d9d;
         text-align: justify;
     }
     .conten__left>h1 {
         width: 339px;
         font-size: 50px;
         font-family: myFirstFont;
         text-transform: uppercase;
         color: #1699c6;
     }
     .footer__nav-text>ul>li>a {
         padding: 15px;
         text-transform: uppercase;
         font-size: 11px;
         color: #1699c6;
         font-family: myFirstFont;
     }
     .footer__nav-logo>img 
     {
         width: 100px;
     }
     .footer__icon-map>img {
         margin-right: 13px;
         width: 20px;
         height: 30px;
     }
     .footer__icon-map>.text>p:nth-child(1) {
        font-size: 11px;
         color: #434343;
         padding-bottom: 6px;
         font-family: myFirstFont;
     }
     .footer__icon-map>.text>p {
        font-size: 11px;
         color: #434343;
         font-family: myFirstFont;
     }
     .footer__icon
     {
         padding-top: 20px;
         padding-bottom: 20px;
     }
     .footer__icon-phone>img {
         margin-right: 13px;
         width: 20px;
         height: 30px;
     }
     .footer__icon-phone>.text>p:nth-child(1) {
        font-size: 11px;
         color: #434343;
         padding-bottom: 8px;
         font-family: myFirstFont;
     }
     .footer__icon-phone>.text>p {
        font-size: 11px;
         color: #434343;
         font-family: myFirstFont;
     }
     .footer__icon-gmail>.text>p {
        font-size: 11px;
         color: #434343;
         font-family: myFirstFont;
     }
     .footer__icon-gmail>img {
         margin-right: 13px;
         width: 20px;
         height: 30px;
     }
     .footer__footer {
          justify-content:inherit
     }
     .footer__footer-textright>p {
         font-size: 12px;
     }
     .slider__slides {
         height: 400px;
     }
     .conten__text-text {
         grid-template-columns: 210px 300px;
     }
     .text-left>h1 {
         font-size: 40px;
     }
     .text-left>span {
         font-size: 13px;
     }
     .radiowarper
     {
         display: none;
     }
     .conten {
         height: 300px;
     }
     .conten__left {
         margin-top: -65px;
         position: absolute;
         display: grid;
         grid-template-columns: 200px 306px;
     }
     .conten__left>h1 {
         width: 339px;
         font-size: 33px;
     }
     .conten__left-textsub>p {
         width: 290px;
     }
     .footer__nav-text>ul>li>a {
         padding: 3px;
     }
     .conten__text-text {
        grid-template-columns: 1fr;
    }
    .conten__left {
        grid-template-columns: 1fr;
    }
    .text-right
    {
        width: 302px;
    }
    .conten__left>h1 {
        width: 339px;
        font-size: 30px;
        margin-top: 30px;
    }
    .conten__left-textsub>p {
        width: 316px;
    }
    .footer__nav
    {
        display: none;
    }
    .footer__icon-phone>img {
     display: none;
    }
    .footer__icon-map>img {
      display: none;
    }
    .footer__icon-gmail>img {
        display: none;
    }
    .footer__footer-textright
    {
        display: none;
    }   
    .footer__footer {
        justify-content: center;
    }
    .header__logo
    {
        display: none;
    }
    .footer__footer-textmid>p {
        font-size: 11px;
    }
}
/*??i???n tho???i di ?????ng, hi???n th??? chi???u ngang*/
/* @media only screen and (max-width : 480px   ) {

} */
/*??i???n tho???i di ?????ng, hi???n th??? chi???u d???c*/
/* @media only screen and (max-width : 320px    ) {

} */
.flex.justify-between.flex-1.sm\:hidden
{
    display: none;
}
p.text-sm.text-gray-700.leading-5
{
    display: none;
}
svg.w-5.h-5
{
    display: none;
}
span.relative.inline-flex.items-center.px-2.py-2.text-sm.font-medium.text-gray-500.bg-white.border.border-gray-300.cursor-default.rounded-l-md.leading-5
{
    display: none;
}

a.relative.inline-flex.items-center.px-2.py-2.-ml-px.text-sm.font-medium.text-gray-500.bg-white.border.border-gray-300.rounded-r-md.leading-5.hover\:text-gray-400.focus\:z-10.focus\:outline-none.focus\:ring.ring-gray-300.focus\:border-blue-300.active\:bg-gray-100.active\:text-gray-500.transition.ease-in-out.duration-150
{
    display: none;
}
  </style>
  {{ $products->links() }}


</div>
@endsection