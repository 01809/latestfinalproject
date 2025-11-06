<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Imperial+Script&family=Karantina:wght@300;400;700&family=Petit+Formal+Script&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Italianno&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Manufacturing+Consent&family=Parastoo:wght@400..700&display=swap" rel="stylesheet">
    <title>A.F LABEL</title>
    <link rel="icon" type="image/png" href="logoaflabelicon.png">
    <style>

:root{
    --main-color: linear-gradient(rgb(113, 10, 10),rgb(90, 5, 5),rgb(205, 6, 6));
    --dkr: rgb(53,9,9);
    --cbr:  rgb(104,10,10);
    --mdr: rgb(75,9,9);

   --bre: rgb(46, 3, 3);

    --h: "\2630";

    --wsm: #f5f5f5;   /*cc*/
  --wol:  #fdf5e6;
  --wdw: #ecefec;  
}


       body{

filter: contrast(90%), sepia(90%);

background-image: linear-gradient(to left, rgba(0,0,0,0.048), rgba(19,18,18,0.24)),rgba(37,37,37,0.301),rba(20,20,20,0.801);

overflow: scroll;

font-family: "Playfair Display", serif;

font-optical-sizing: auto;

font-size: 13px;

font-style: normal;

max-width: 120dvw;


background-position: 100% 50%;


justify-content: center;

text-align: center;

align-items: center;



animation: transparent_intro 6s ease-in ;


letter-spacing: 1px;

font-weight: lighter;

}


@keyframes transitor{
    0%{
     background-color: black;
    }
    20%{
        background-color: black;
    }

    30%{
        background-color: rgba(0, 0, 0, 0.658);
    }
    50%{
    background-color: black;
}
60%{
    background-color: gray;
}
}


@keyframes Opacity_change{

0%{

filter: blur(4px);

}

20%{

filter: blur(3px);

}

50%{

filter: blur(2px);

transform: scale(1.0);

}

60%{

filter: blur(1px);


}

70%{

filter: blur(1px);


}

}



@keyframes transparent_intro{

0%{

background-color: black;

-webkit-text-fill-color: rgba(0, 0, 0, 0.432);

text-decoration: rgba(0, 0, 0, 0.541);

background-position: 100% 0%;

background-size: 100% 50%;


}

10%{

background-color: rgba(36, 35, 35, 0.596);

filter: blur(3px);



}

20%{

background-image: linear-gradient(to left, white,gray,white,white);

filter: blur(3px);



}

30%{

background-image: linear-gradient(to right, white,rgba(128, 128, 128, 0.432),white,white);

filter: blur(3px);

transform: scale(1.0);

}

50%{

background-image: linear-gradient(to right, white,gray,white,white);

filter: blur(1px);

transform: scale(1.0);

}

60%{


filter: brightness(3px);

}

80%{


filter: brightness(2px);

}

}



@keyframes Background-change{

0%{

background-position: 100% 50%;

background-color: black;

}

20%{

background-position: 100% 100%;

background-color: black;

}

50%{

background-position: 100% 50%;

background-image: linear-gradient(to left, gray,gray);

}

100%{

background-position: 0% 100%;

background-image: linear-gradient(to left, black,black);

}}




@keyframes rotate{

0%{

transform: rotate(-180deg);

}

10%{

transform: rotate(-180deg);

}

20%{

transform: rotate(180deg)

}

30%{

transform: rotate

}


}




.rolling_form{


display: grid;

gap: 10px;

width: 190px;

height: 30vh;

animation: rotate 17s ease forwards infinite ;

margin-left: -83px;

margin-bottom: 10px;

margin-top: 12%;

border-image: url(form_borderimage-eraser.png) 20 round;

border-image-width: 20px;

border: 20px solid transparent;

border-radius: 20%;


}


@keyframes pause{

0%{

transform: rotate(180deg);

}

100%{

transform: rotate(180deg);

}

}


header{


background-color: rgba(0, 0, 0, 0.856);

z-index: 3;

margin-left: 10%;

width: 80vw;

height: 20px;

padding: 5px;

margin-top: -10px;

position: sticky;

top: 0;

border-top-left-radius: 20px;

border-top-right-radius: 20px;

border-bottom: 2px solid rgba(97, 94, 94, 0.848);

border-bottom-left-radius: 50px;

border-bottom-right-radius: 50px;

animation: transparent_intro 3s ;

display: flex;

flex-direction: row;

flex-wrap: wrap nowrap;

text-align: center;

transform: perspective(500);

transform-style: preserve-3d;

animation: transparent_intro 6s ease-in-out;



}





nav{
filter: contrast(96%), sepia(90%);
background-color: rgb(0, 0, 0);

border-bottom: 2px solid black;

padding: 22px;


border-bottom: 1px solid rgba(97, 94, 94, 0.904);

width: 100vw;

max-width: 100vw;

z-index: 3;

margin-top: -6vh;

margin-left: -10px;

margin-right: -10px;

grid-row: auto;

gap: 20px;

height: 16vh;


}



input[type="range"]{


accent-color: rgba(109, 108, 108, 0.801);

margin-left: 40vw;

}



input[type="range"]::-webkit-slider-runnable-track{

background-color: rgb(0, 0, 0);

border-radius: 17px;

border: 1px solid rgba(73, 70, 70, 0.274);

outline: 3px solid rgba(0, 0, 0, 0.89) ;


}


span{

font-weight: lighter;

color: rgb(86, 84, 84);

letter-spacing: 4px;

}


.range_content{

margin-top: 10px;

margin-left: 50%;

display: flex;


}



details{



width: 40px;

display: none;

padding: 4px;

margin-left: 10vw;



}



details:hover{

cursor: pointer;

transform: scale(1.1);

}





.top_intro{



background-image: url(e7845096-ff1b-4f53-8360-8cd3f977b321.jpeg);
filter: contrast(50%), brightness(50%), sepia(80%);
height: 60vh;

max-width: 140vw;


background-repeat: no-repeat;

background-size: cover;


display: flex;

width: 100vw;

margin-left: -10px;

margin-top: -6px;

animation: Opacity_change 6s;




}



.top_intro:hover{

cursor: none;

}



@keyframes Infinittest{

0%{

background-position: 0% 50%;

background-image: linear-gradient(to left, black,gray,white,white );

}

20%{

background-position: 50% 100%;

}

50%{

background-position: 100% 50%;

}

80%{

background-position: 50% 0%;

}

100%{

background-position: 0% 100%;

}

}



@keyframes UniversalBlur{

0%{

filter: blur(4px);

}

20%{

filter: blur(4px)

}

50%{

filter: blur(3px)

}



60%{

filter: blur(2px)

}



100%{

filter: brightness(3px);

}

}





@keyframes old_newTransition{

0%{

background-color: rgba(0, 0, 0, 0.281);

background-position: 100% 50%;



}



20%{

background-color: rgba(22, 22, 22, 0.774);

background-position: 100% 50%;

}



50%{

background-color: rgba(85, 83, 83, 0.288);

background-position: 100% 50%;

}



60%{

background-position: 100% 50%;

background-color: linear-gradient(to left, rgba(0,rgba(0, 0, 0, 0.815), 0.801), rgba(0, 0, 0, 0.575), rgba(0, 0, 0, 0.39))


}



70%{

background-color: black;

}




}



@keyframes form_changeBackground_Intro{

0%{

background-color: black;

filter: blur(4px);

}

20%{

filter: blur(3px);

background-image: linear-gradient(to left, gray,black,black,gray,black);

}

50%{

filter: blur(2px);

}

80%{

filter: blur(1px);

}

}



form:hover{

transform: rotate(0deg);

}



input[type="text"]{

width: 60px;

}


#p2{

margin-left: -40px;


}



#p3{

margin-left: -20px;


}

section{

margin-top: 5vh;

margin-left: 20px;



padding: 30px;

border-radius: 10px;

background-color: rgba(0, 0, 0, 0);

height: 70vh;

transform: perspective(900);

width: 90vw;

animation: UniversalBlur 10s ease-in ;



}



svg{

color: rgb(54, 53, 53);


padding: 7px;

}



a{

text-decoration: none;



letter-spacing: 2px;


}





#res{

margin-top: 45px;

color: rgb(63, 58, 9);

margin-left: -10%;

}



footer{

background-color: rgb(0, 0, 0);

padding:20px;

margin-top: 9%;

margin-left: -15px;

height: 220px;

width: 100vw;

border-top-left-radius: 10px;

border-top-right-radius: 10px;

transform: none;

text-align: center;

justify-content: center;

margin-bottom: -20px;


}




.footer-textcontent{



display: flex;

flex-flow: row wrap;

padding: 10px;

margin-left: 44%;


}



@keyframes FadeinTop{

0%{

display: none;

margin-top: 900px;

opacity: 3;

filter: blur(3px);

}

20%{

filter: blur(4px);

opacity: 2;

}

30%{

filter: blur(3px);

}



50%{

margin-top: 20%;

transition: 5s

ease-in-out;

filter: blur(2px);

}

60%{

margin-top: 20%;

transition: 5s

ease-in-out;

filter: blur(3px);

}

70%{

margin-top: 24%;

transition: 3s ease-in-out;

filter: blur(2px);

}





100%{

margin-top: 8%;

filter: brightness(3px);

}

}



#imeio-img{

margin-left: 45%;

animation: FadeinTop 3s ease-in-out alternate;

height: 250px;

margin-top: 7%;

position: absolute;

}



@media screen and (max-width: 300px){

.sep{

margin-bottom: 120px;

margin-top: 20px;

margin-left: 50%;



background-color: transparent;

height: 10px;


}


     #link_lift{
    display: none;
  }



}



.eraser_screenlink{

display: none;

}

@media screen and (max-width: 700px){

body{

max-width: 7vw;

}



     #link_lift{
    display: none;
  }


#p2as{
display: none;}

#p3as{
display: none;}


.eraser_screenlink{

display: block;

}



.sep{

margin-bottom: 120px;

margin-top: 20px;

margin-left: 50%;


display: none;

background-color: transparent;

height: 10px;




}

input[type="range"]{

margin-left: -20px;

}

.top_intro{

display: none;

}

#ilink_catalogotoiframe{

margin-left: 19px;

}



.panflete-catalog{

display: none;

}


#res{

margin-left: 30%;

}

input[type="range"]{

border: none;

border-radius: 30px;

margin-top: 10px;


}




.feedback_usercomments{

margin-top: 30px;

}



input[type="range"]::-webkit-slider-thumb{

color: gray;


}

svg{

margin-left: -3px;

}



video{

width: 30px;

}


     #link_lift{
    display: none;
  }


button{
    margin-left: -15px;
}



}

@media screen and (max-width: 900px){

body{

max-width: 3vw;

background-color: white;



}


     #link_lift{
    display: none;
  }






option{

margin-top: -10px;

}

header{

border-radius: 1px;

border-bottom-left-radius: 1px;

border-bottom-right-radius: 1px;

}

#imidi-p{

margin-left: 30%;

}



video{

margin-left: 20%;

width: 10px;

}



.topo_intro{

display: none;

}

.panflete-catalog{

display: none;

}


#res{

display: none;

}



.sep{

margin-bottom: 120px;

margin-top: 20px;

margin-left: 0%;


position: relative;

background-color: transparent;

height: 10px;

}

#p2as{
display: none;}

#p3as{
display: none;}


.feedback_usercomments{

margin-top: 30px;

margin-left: 50px;

}


}


option{

background-color: black;

color: rgb(126, 119, 119);

letter-spacing: 8px;

font-size: 10px;


}

@keyframes Background-ColorChange_foriframe{

0%{

background-image: linear-gradient(to left, black,gray,white);

background-position: 100% 50%;

}

}



@media screen and (max-width: 980px){

body{

max-width: 2vw;

background-color: white;

animation: none;

background-position: 100% 50%;

}


 #link_lift{
    display: none !important;
  }


.feedback_usercomments{

margin-top: 30px;

margin-left: 50px;

}



footer{

margin-top: 25vh;

}

details{

display: flex;

}



select{

margin-top: -30px;

}



.panflete-catalog{

margin-left: 40%;

border-radius: 10px;

width: 120vw;


display: none;

}



#parag_top{

display: none;

}

details{

width: 1px;

height: 1px;

display: flex;

}

#send_experience{

margin-left: -7%;

margin-top: -20vh;

}

button{
    margin-left: -15px;
}


nav{


height: 17px;

z-index: 3;

margin-top: -10px;

position: absolute;

padding: 7px;

background-color: transparent;


}



button[type="button"]{

margin-left: 20vw;

}



table{

display: flex;

flex-flow: row wrap;

}



.top_intro{

width: 120vw;

margin-left: -80px;

margin-top: -3px;

border-bottom-left-radius: 1px;

border-bottom-right-radius: 1px;

height: 50vh;

display: flex;

position: relative;

}

input[type="range"]{

margin-left: -20px;

margin-top: 5px;

}


.rolling_form{

display: none;

}



.ads_videocontainer{

margin-left: 9px;

width: 10px;

margin-top: -30vh;

background-color: black;

height: 20px;


}

.footer-textcontent{

display: flex;

margin-left: -13px;

}


header{



margin-left: -20px;

background-color: rgba(128, 128, 128, 0.507);

margin-top: 12px;

border-top-left-radius: 1px;

border-top-right-radius: 1px;

z-index: 1;

width: 104vw;



}



details{

color: rgba(0, 0, 0, 0.781);

margin-left: 30px;

}

#spaceuser_topo{
    margin-left: -30px;
}



iframe{

background-color: rgba(231, 229, 229, 0.753);

margin-left: 11vw;

width: 70vw;

margin-top: 80px;

border-image: url(form_borderimage-eraser.png) 30 round;

border: 20px solid transparent;

}




#dark_select{

margin-left: -20px;

margin-right: -70px;

}



section{


margin-left: -40vw;

margin-bottom: 45px;

background-color: transparent;

border: none;

margin-top: -30vh;

width: 80vw;


}

#p2as{
display: none;}

#p3as{
display: none;}


#ilink_catalogotoiframe{

margin-left: px;

position: relative;

display: none;

}

.englobeforheader{

z-index: 2;

height: 36vh;


margin-left: -10px;

border-bottom-left-radius: 2px;

border-radius: 1px;

border-bottom-left-radius: 2px;



}


.eraser_screenlink{

filter: none;

margin-top: 20px;

margin-bottom: 20px;

}



textarea{

margin-left: -30px;

}

figure{

margin-bottom: 20px;

}



#imeio-img{

margin-left: 29vw;

}

thead a{

display: flex;

flex-direction: row;


}



.sumario{

margin-top: -20px;

margin-left: -60px;

}



.sep{

margin-top: 20%;

margin-left: 39%;

background-color: black;


}

#spaceuser_topo{
    margin-left: -20px;
}

nav a:hover{
    animation: none;
}
}



@media screen and (max-width: 600px){

   
article{
    display:none;
}
form{

display: none;

}

.explain_site{
    display: none;
}

#spaceuser_topo{
    margin-left: 20px;
}

#send_experience{

margin-left: 50vw;

}

button{
    margin-left: -25px;
}

video{

width: 10px;



}

nav a:hover{
    animation: none;
}


.ads_videocontainer{

background-color: black;

}


     #link_lift{
    display: none !important;
  }


}



@media screen and (max-width: 1600px){



}





@media screen and (max-width: 200vw){

    #spaceuser_topo{
        margin-left: -90px;
    }

    article{
        display: none;
    }

section{


color: rgb(151, 142, 142);

margin-left: -50px;

display: flex;

position: inherit;

max-width: 290vw;

z-index: 2;

}


nav a:hover{
    animation: none;
}


#send_experience{

margin-left: 30vw;



}



.ads_videocontainer{

margin-top: -10px;

width: 10px;

background-color: black;



}



.sep{

margin-bottom: 120px;

margin-top: 20px;

margin-left: 20%;


z-index: 1;

background-color: transparent;

height: 10px;

}



 body{
        filter: contrast(83%), sepia(60%);
    }

    .sep{
        animation: none;
    }
    nav a {
        animation: none;
    }

    nav a:hover{
        animation: none;
    }
   
    .top_intro{
    filter: contrast(20%), sepia(10%), brightness(20%);
}

figure{
    filter: contrast(30%), sepia(55%), brightness(30%), opacity(13%)
}

video{
    filter: contrast(80%), brightness(10%)
}

.panflete-catalog{
    filter: contrast(10%), brightness(10%), opacity(27%)
}

button{
    margin-left: -10px
}
}



.sep{

margin-bottom: 120px;

margin-top: 4px;

margin-left: 30%;



background-color: rgb(83, 46, 4);

height: 10px;




}



.ads_videocontainer{

width: 20px;

background-color: black;

}


button:hover{

cursor: scale(1.1);

}


thead {

display: flex;

flex-flow: row wrap;

margin-top: -10vh;

}


thead{

justify-content: center;

text-align: center;

margin-top: -10vh;

}



#pianotop_link{

margin-top: 50px;

margin-left: 10vw;

margin-right: 10vw;

letter-spacing: 3px;

}



#empty_iframedbcl{

margin-left: 59vw;

color: rgb(63, 58, 9);

}



input[type="radio"]:checked{

border: 2px solid black;

display: flex;

accent-color: var(--maincolor);

flex-flow: row nowrap;

flex-shrink: 2;


padding: 9px;


}



@media screen and (max-width: 1200px){


    section{
        margin-top: 15px;
    }

.sep{

margin-top: 40%;

margin-left: 30%;

height: 20px;

z-index: 1;

display: none;

}

#imeio-img{
    margin-left: 20vw;
}

.englobeforheader{
    background: var(--dkr);
}



#spaceuser_topo{

margin-left: -70px;

margin-top: 20px;

}



body{

max-width: 110vw;

background-color: #f5f5f5;

}



input[type="range"]{


accent-color: rgba(173, 169, 169, 0.753);

margin-top: -2px;

margin-left: 20vw;



margin-bottom: -2px;



}



svg{

display: none;

}



input[type="range"]::-webkit-slider-runnable-track{

background-color: rgb(44, 8, 8);

border: 1px solid rgba(109, 108, 108, 0.137) ;

offset:2px solid black;

box-shadow: 10px 10px 80px rgba(255, 0, 0, 0.226);

outline: 1px solid rgba(0, 0, 0, 0.336);

}


#pianotop_link{

margin-top: 18px;

margin-left: 3vw;


padding: 5px;


}



#logolv-pin{

display: none;

}



details{

margin-top: 4px;

margin-left: 30vw;

height: 10px;

}



summary{

height: 20px;

}

select{

margin-top: -5px;

}

header{

padding: 7px;

height: 28px;

padding: 5px;

max-height: 15vh;

margin-top: -14px;

background-color: white !important;



}



.scroll{

display: block;

background-color: black;

background-position: 50% 50%;

animation: none;


height: 2px;

}



.scroll:hover + main header{

padding: 10px;

height: 10vh;

background-color: gray;

}



header.scroll{

position: sticky;

padding: 10px;

height: 10vh;

}

#piano_link:after{

content: ' none ';

color: black;

}



#piano_link:hover{

cursor: arow;

}





nav{


z-index: 2;

height: 14vh;

width: 140vw;

font-size: 12px;

letter-spacing: 1px;

padding: 4px;

margin-top: -22px;

background-color: rgb(0, 0, 0);

}

thead{

margin-top: 5px;

margin-left: 0px;


}


.top_intro{

margin-top: -25px;

}



select{

margin-top: -7vh;

}

nav a:hover{
    animation: none;
}

}



@media screen and (max-width: 1900px){

section{

margin-left: -40px; /*para sectio funcionar*/

}



details{

width: 5vw;

display: flex;


}



#res{

margin-left: -33vw;

}



header{

background-color: white;



}

nav a:hover{
    animation: none;
}

.sep{
animation: none;

}



}


@keyframes UniversalBlur{



}


@media screen and (max-width: 200px){
article{
    display: none;
}

 #link_lift{
    display: none !important;
  }

#imeio-img{

margin-left: 70%;

}
 body{
        filter: contrast(83%), sepia(60%);
    }

    .sep{
        animation: none;
    }
    nav a {
        animation: none;
    }

    nav a:hover{
        animation: none;
    }
   
    .top_intro{
    filter: contrast(20%), sepia(10%), brightness(20%);
}

figure{
    filter: contrast(30%), sepia(55%), brightness(30%), opacity(13%)
}

video{
    filter: contrast(20%), brightness(10%)
}

.panflete-catalog{
    filter: contrast(10%), brightness(10%), opacity(27%)
}

#spaceuser_topo{
    margin-left: -120px;
}

nav a:hover{
    animation: none;
}

.sep{
    animation: none
}

body{
    animation: none;
    filter: contrast(67%)
}

section{
    margin-top: 15px;
}
}



#send_experience{



margin-top: 50px;

margin-left: 50%;

animation: transparent_intro 6s ease-in-out;

padding: 13px;

border-radius: 30px;

outline: none;

border: 1px solid gray;

margin-bottom: 20px;

font-family: "Playfair Display", serif;

font-optical-sizing: auto;

font-size: 13px;

letter-spacing: 2px;



}


header:hover{

cursor: url();

}


select{

display: inline;

height: 10px;

overflow: hidden;

background-position: 100% 50%;

padding: 10px;

border: 1px solid black;



}



.custom_select{

overflow: hidden;

position: relative;

}



input[type="search"]{

width: 20vw;

height: 30px;

padding: 11px;

margin-left: 70%;

border-bottom-left-radius: 10px;

border-top-left-radius: 10px;

outline: none;

margin-top: 7px;

background-color: rgba(126, 119, 119, 0.144);

border: 1px solid rgba(0, 0, 0, 0.24);

}



input[type="search"]:focus{

letter-spacing: 1px;

font-family: "Instrument Serif", serif;

font-weight: 400;

font-style: italic;



}


textarea{

margin-top: 90px;

height: 50vh;

animation: transparent_intro 6s ease-in-out;



width: 70vw;

margin-left: 15vw;

border-radius: 20px;

padding: 10px;

background-position: 100% 50%;

}



textarea::placeholder{

color: rgba(128, 128, 128, 0.685);

letter-spacing: 2px;

margin-top: 8px;

font-family: "Playfair Display", serif;



}



footer a{

color: rgb(82, 76, 29);


}

#gh-link {margin-right: 15px; border-right: 2px solid rgba(73, 68, 29, 0.753); padding: 5px} #ig-link{padding: 5px;}



#res:hover{

cursor: none;

}


#comment-impress{
    display: inline-block;
    padding: 8px;
    border-right: 1px solid;
}

a{
      color: rgb(235, 219, 190) ;
}


.panflete-catalog{
    height: 20vh;
    padding: 60px;
    width: 9vw;
    margin-top: -18vh;
    border: 1px solid #80808033;
  background-image: url(pianosketchesiframe.jpg);
  background-repeat: no-repeat;
  background-size: cover;
animation: Blur_alb 5s ease-in-out;
    mask-image: linear-gradient(to top,black, rgb(97, 95, 95), black);
    justify-content: center;
    margin-left: -5px;
border-top-left-radius: 8px;
border-bottom-left-radius: 7px;
filter: contrast(40%) , sepia(90%);
    z-index: 3;


}

.sep{
    width: 50vw;
    height: 40vh;
    margin-left: 26%;
    margin-top: 13vh;
    position: relative;
 border-top-left-radius: 8px;
 border-bottom-left-radius: 6px;
 border-top-right-radius: 15px;
 border-bottom-right-radius: 15px;
 box-shadow: insert 10px 30px 20px;
    padding: 18px;
    z-index: 2;
background: var(--wdw);

}

#res{
    margin-left: 8vw;
    filter: brightness(3px);
    color: rgb(75, 53, 5);
    margin-top: 13vh;
    margin-bottom: 5px;
}


@keyframes Blur_alb{
    0%{
         filter: blur(4px);

    }

    20%{
         filter: blur(4px);
    }
    50%{
         filter: blur(3px);
    }
    80%{
         filter: blur(2px);
    }

    100%{
         filter: brightness(3px);
    }
}

#ilink_catalogotoiframe{

    background-color: rgba(145, 73, 5, 0.678);


    list-style: none;

  font-family: "Petit Formal Script", cursive;
  font-weight: lighter;
font-size: 9px;
margin-left: 30vw;
margin-bottom: 5px;
display: flex;
position: absolute;
filter: contrast(89%),brightness(69%);
mask-image: linear-gradient(to 20deg, black,gray,white );
box-shadow: inset 40px 40px 40px black;
z-index: 2;
margin-top: -15vh;
    width: 10vw;
    padding: 15px 3px 15px 15px;

     border-radius: 22px;
     
  
  
}



#ilink_catalogoiframe:hover{
    animation:  pin-btn_back 5s ease-in;
    background-color: black;

}

#ilink_catalogotoiframe a{
    color: rgba(112, 98, 26, 0.966);
}

#search_but{

   animation: none;
   background-repeat: no-repeat;
  border-top-right-radius: 10px;
    height: 30px;
  background-image:  url(search_icon.png);
    margin-top: 7px;
    border-bottom-right-radius:  10px ;
    margin-left: 10px;
    margin-right: 120px;
    width: 40px;
    padding: 2px;
    border: none;
}

#searchicon{
    margin-top: -5px;
}

.radius-logo{
    border-radius: 53%;
}



.eraser_screenlink{
      margin-left: 30%;

      margin-bottom: 20px;
}



figure{
    width: 100vw;
   height: 20vh;

    height: 56vh;
   background-attachment: scroll;
    filter: contrast(96%), sepia(90%) !important;
    margin-left: -12px;
   margin-top: 2%;
  background-position: 20% 20%;
    background-image: url(figurerepresuserspace2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    transform: perspective(500), background-position ease-in-out, box-shadow ease-in-out 5s;
    box-shadow: 30px 70px 80px rgba(0, 0, 0, 0.726);

}

@keyframes insertset{
    0%{
        box-shadow: inset -30px 70px 50px black;
    }
    20%{
      box-shadow: inset -30px 70px 50px rgba(0, 0, 0, 0.726);
    }
    50%{
box-shadow: inset 20px 80px 30px black
    }
    70%{
box-shadow: inset -30px 70px 50px rgba(0, 0, 0, 0.726);
    }
    100%{
         box-shadow: inset -30px 70px 50px black;
    }
}

@keyframes changeposforfigure{
    0%{
   background-position: 20% 20%;
}
3%{
    background-position:100% 27%;
}
5%{
    background-position: 100% 30%
}
6%{
    background-position: 100% 35%;
}
10%{
    background-position: 100% 44%;
}
11%{
    background-position: 100% 45%;
}
12%{
    background-position: 100% 47%;
}
13%{
    background-position: 100% 50%;
}
15%{
    background-position: 100% 55%;
}
20%{
    background-position: 100% 60%;
}

22%{
    background-position: 100% 65%;
}

25%{
    background-position: 100% 70%;
}
26%{
    background-position: 100% 71%;
}
27%{
    background-position: 100% 72%;
}
28%{
    background-position: 100% 73%;
}
29%{
    background-position: 100% 74%;
}
30%{
    background-position: 100% 75%;
}

35%{
    background-position: 20% 80%;
}

50%{
    background-position: 20% 75%;
}
55%{
    background-position: 20% 60%;
}
60%{
    background-position: 20% 55%;
}
65%{
    background-position: 20% 50%;
}
70%{
    background-position: 20% 45%;
}

75%{
    background-position: 20% 40%;
}
80%{
    background-position: 20% 32%;
}
85%{
    background-position: 20% 25%;
}
90%{
    background-position: 20% 25%;
}
95%{
    background-position: 20% 20%
}


100%{
    background-position: 20% 20%;
}
}

figure:hover{
   
   animation: changeposforfigure 10s ease-in-out, insertset 7s ease-in-out alternate;
   transform: background-position ease-in-out;
   mask-image: linear-gradient(to middle,rgba(0, 0, 0, 0.63),rgba(128, 128, 128, 0.822));
}

#parag_top{
  z-index: 1;
    color: rgb(75, 53, 5);
    letter-spacing: 3px;
    text-align: start;
    max-width: 40vw;
}

.top_links{

    display: flex;
    flex-direction: row;
    flex-flow: row wrap;
    max-height: 1vh;
    justify-content: center;

    max-width: 10vw;
    position: relative;
}

.sumario{
    position: relative;
    display: flex;
    flex-flow: row wrap;
}

.links_extra{
    margin-left: 20%;
    margin-top: 10px;
    border-radius: 10px;
}

.links_extra:focus{
    border: none;
    outline: none;
    offset: none;
}

.sumario::-webkit-details-marker{
    display: none;
}


.sumario:before{
    content: var(--h);
    margin-top: 15px;
    position: absolute;


}

@media screen and (max-width: 1200px){
#imeio-img{

    margin-left: 36%;
}


}
option:hover{
    background-color: black;
}


video{
    height: 52vh;
  filter: contrast(90%) !important;
   margin-top: 13vh;
    width: 110vw;
  border-radius: 30px !important;
  margin-left: 93px;

}

input[type="range"]{
    width: 50px;
    margin-left: 45vw;


}

@media screen and (-webkit-min-device-pixel-ratio: 1.4){
.top_intro{
    filter: contrast(20%), sepia(30%), brightness(20%);
}

video{
    filter: contrast(20%), brightness(20%)
}
}

@media screen and (max-resolution: 144dpi){
   
    body{
        filter: contrast(83%), sepia(60%);
    }

    .sep{
        animation: none;
    }
    nav a {
        animation: none;
    }

    nav a:hover{
        animation: none;
    }
   
    .top_intro{
    filter: contrast(20%), sepia(10%), brightness(20%);
}

figure{
    filter: contrast(30%), sepia(55%), brightness(30%), opacity(13%)
}

video{
    filter: contrast(20%), brightness(10%)
}

.panflete-catalog{
    filter: contrast(10%), brightness(10%), opacity(27%)
}
}


@media screen and (max-resolution: 288dpi){
      .top_intro{
    filter: contrast(90%), sepia(40%), brightness(30%), blur(20%);
}

video{
    filter: contrast(36%), brightness(20%)
}

.panflete-catalog{
    filter: contrast(26%), brightness(10%), opacity(14%)
}

figure{
    filter: contrast(50%), sepia(55%), brightness(40%), opacity(5%)
}
}





video::-webkit-media-controls-panel{
    display: none;
}

.ads_videocontainer{
    width: 101vw;
    margin-left: -30px;
    height: 79vh;
    display: flex;
    padding: min(10px, 20px);
 background-color: black;
    justify-content: center;
    margin-top: 19vh;
    margin-right: -20px;
    border: none;

}

.ads_videocontainer:hover{
    cursor: url(dedo.png), auto;
}

.feedback_usercomments{
    background-color: rgb(0, 0, 0);
   position: absolute;
margin-top: 38vh;
 color: rgba(139, 97, 18, 0.596);
  margin-left: -20px;

    z-index: 1;

}

#send_experience{
    position: absolute;
    margin-left: 6px;
    z-index: 2;
    margin-top: 10px;
    animation: none;
    margin-bottom: 20px;
}


#dark_select{
margin-top: 50px;
height: 10px;

max-width: 10vw;

max-height: 5vh;
margin-left: 20vw !important;
margin-right: -20px;
width: 10px;

color: rgba(59, 40, 4, 0.6);

offset: 2px solid gray;

}


#logolv-pin{

height: 40px;

color: black;

filter: contrast(90%), saturate(30%), brightness(80%);

text-shadow: 1px 1px 1px black;

width: 10vw;

margin-left: 10%;

margin-top: 5px;



padding: 4px;


}

nav a{
 color: rgb(102, 95, 40);
  margin-top: 70vh;
}

#olv-pin{ /**/
    margin-top: 15px;
    margin-left: -8px;

    
   height: 5vh;
   max-width: 170px;
}

.openbookformidle{
    display: none;
}

#spaceuser_topo{
    margin-left: -40px;
}

#send_experience:hover{
    transform: scale(1.1);
    color: var(--wsm);
    background-color: rgba(0, 0, 0, 0.747);
    filter: contrast(80%), brightness(96%);
}



@keyframes fade_inleftparagpin{

    0%{
        display: none;
        margin-left: -30px;
    }

    20%{
       
        margin-left: -30px;
        filter: blur(4px);
    }

    40%{
        filter: blur(3px);
        margin-left: -20px;
    }

    50%{
        margin-left: -10px;
    }
    60%{
        margin-left: 10px;
    }
    70%{
        margin-left: 20vw;
    }
    100%{
        margin-left: 30vw;
    }
}

@keyframes pin-btn_back{
    0%{
        background-position: 50% 100%;
        background-image: linear-gradient(to left,black,gray)
    }

    20%{
        background-position: 100% 50%;
        background-image: linear-gradient(to right, black,gray)
    }
    50%{
        background-position: 50% 0%;
        background-image: linear-gradient(to left,black,gray)
        }
    70%{
  background-position: 0% 50%;
  background-image: linear-gradient(to right, black,gray)
    }

    100%{
        background-position: 100% 100%;
        background-color: black;
    }
}


#parag_top{
    margin-left: 30vw;
    animation: fade_inleftparagpin 5s ease-in-out;
}

.eraser_screenlink{
    display: block;
    
}


@keyframes hoverFadeOpfil{
  0%{
    display: none;
  }
  10%{
    opacity: 3;
    filter: blur(3px);
    letter-spacing: 4px;
    transform: scale(1.1)
  }

  30%{
 filter: blur(2px);
 letter-spacing: 3px;
  }

  50%{
    filter: blur(1px);
    letter-spacing: 2px;
  }

  100%{
    filter: brightness(2px), contrast(50%), sepia(45%);
    letter-spacing: 2px;
  }
}

nav a:hover{
  
    animation: hoverFadeOpfil 3s ease-in-out;
}

#figure_navegador{
    background-color: black;
    width: 105%;
    height: 68px;
    padding: 7px 7px 8px;
   
    z-index: 1;
    margin-left: -14px;
    margin-top: -16px;
}

#blockna{
     background-color: black;
    width: 105%;
    margin-left: -14px;
   height: 37px;
   padding: 7px 7px 8px;
   
    z-index: 1;
    border: none;
    margin-top: 40px;

    
}

 #figure_navegador p{
    color: rgb(102, 95, 40);
    margin-left: -30vw;
   
}

#figure_navegador a{
  margin-top: -10vh !important;
    margin-left: 35vw;
        background-color: rgba(145, 73, 5, 0.411);
    padding: 10px;
    width: 20px;
    border-radius: 15px;
    margin-bottom: 7px;
    color: rgb(102, 95, 40);
 
        box-shadow: inset 10px 20px 10px 40px black;
}

#figure_navegador a:hover{
    animation: none;
    background-color: gray;
    transition: transform ease;
    transform: scale(1.3);
}




#figure_navegador h4{
     color: rgb(102, 95, 40);
    letter-spacing: 2px;
     margin-top: -46px;
     margin-left: 16px;
     
}

article{
    max-width: 90vw;
    width: 16vw;
    border-top: 10px solid rgb(36, 1, 1);
    border-bottom: 10px solid rgb(36, 1, 1);
    padding: 18px 6px 5px 8px;;
    background: var(--wdw);
    height: 25vh;
   
     font-family: "Karantina", system-ui;
  font-weight: lighter;
display: inline-block;
transition: height ease-in;
    letter-spacing: 2px;
    z-index: 2;
    font-size: 15px;
    margin-top: 5vw;
    margin-left: -11vw;
}

article:hover{
    transform: scale(1.0);
    cursor: zoom-in;
}

details:hover{
    transform: scale(1.1)
}

summary:hover{
    transform: scale(1.1)
}

#p1as{
    display: inline-block;
    height: 10px;
    transition: height ease-in;
    max-width: 100vw;
    align-items: start;
    text-align: start;
    width: 300px;
    z-index: 1;
    padding: 7px;

    margin-top: 1vh;
    
}


summary::-webkit-details-marker{
    display: none;
}

.bookopen_det:before{
    color: var(--mdr);
z-index:1;
    margin-left: 13px;
    margin-top: 2px;
content: "\1F4D6";
height: 20px;
font-size: 17px;
}

.explain_site{
    margin-left: 90%;
    margin-top: -22px;
    z-index: 1;
}

#ilink_catalogotoiframe:hover{
    transform: scale(1.1);
    background-color: black;
    box-shadow: 10px 10px 0px rgba(0, 0, 0, 0.473);
}

textarea:focus{
    border: 2px solid rgba(128, 128, 128, 0.726);
}

@media screen and (max-width: 400px){
    #figure_navegador h4{
        display: none;
    }
    header{
        padding: 15px;
        height: 30px;
        z-index: 3;
    }



video{

        margin-left: 10vw;
    }

    #figure_navegador p{
        letter-spacing: 3px;
        margin-left: 5px;
    }

    #figure_navegador a{
        margin-left: -5px;
    }

.ads_videocontainer{
    background-color: transparent;
    margin-top: -35px;
    height: 10vh;
}

figure{
    margin-top: 50vh;
    width: 110vw;
    margin-right: -7px;
    z-index: 1;
}
section{
    margin-top: 15vh;
}

.englobeforheader{
    display:none;
}
#res{
display: inline-block;
}
.footer-textcontent{
    margin-left: 22vw;
    margin-top: 8vh;
}
#figure_navegador{
    margin-top: -5vh;
    height: 70px;
    z-index: 1;

    letter-spacing: 3px;
}

textarea{
    width: 80vw;
    margin-left: 10vw;
    
}
}

@media (min-width: 414px) and (max-width: 896px){
    .ads_videocontainer{
        height: 30px;
        margin-top: -10vh;
        margin-left: -15px;
    }

    header{
        height: 45px;
    padding: 15px;
}
    video{
    margin-left: -10px; }

    figure{
        margin-top: 24vh;
        height: 4px;
        
    }
    .topnava{
        display: none;
    }

    #blocna{
        margin-top: 80px;
    }
    #send_experience{
        display: none;
        margin-left: -22px;
    }

     #figure_navegador h4{
        display: none;
     }
     details{
        margin-top: 15px;
         transform: scale(1.1);
     }

     #figure_navegador p{
        margin-top: 12px;
        letter-spacing: 4px;
     }
footer{
    margin-top: 26vh;
}
#comment-impress{
    display: none;
}


#imeio-img{
    display: none;
}

.footer-textcontent{
    margin-left: 5vw;
    margin-top: 4vh;
}
     #figure_navegador a{
        margin-top: 35px;
       
     }

     #figure_navegador{
        z-index: 1;
        margin-top: 22px;
     }
    .englobeforheader{
        display: none;
    }

    textarea{
        margin-top: 25vh;
    height: 35px;
display: none;}

    textarea:focus{
    border: 1px solid gray !important;}

    section{
    height: 25px;
    display: none;
}

 #link_lift{
    display: none !important;
  }

.top_intro{
    height: 30vh;
    filter: contrast(87%), sepia(78%);
}
}
@media   (min-width: 430px) and (max-width: 932px){
  figure{
    display: none;
  }
  #link_lift{
    display: none !important;
  }

  #res{
    display: none !important;
  }

  footer{
    margin-top: 60vh !important
  }

  #figure_navegador{
    margin-top: 50vh !important;
  }
}

@media (min-width: 375px) and (max-width: 667px){
    details{
        margin-top: 14px;
         transform: scale(1.1);
    }

         #link_lift{
    display: none !important;
  }
}

@media (min-width: 390px) and (max-width: 844px){

    #send_experience{
        margin-top: -24px;
    }

    #link_lift{
        margin-left: -17px;
        display: none !important;
    }

    textarea{
        margin-left: 5vw;
    }

    .footer-textcontent{
        margin-top: -10px;
        margin-left: -10px;
    }

    .top_intro{
    height: 38vh;
    filter: contrast(27%), sepia(18%);
}
   
#res{
    margin-left: -5px;
}

#imeio-img{
    display: none;
}

header{
    padding: 15px;
}
}

@media (min-width: 412px) and (max-width: 915px){
    video{
        margin-left: -10vw;
    }
.ads_videocontainer{
    height: 15vh;
    margin-left: -20px;
    background-color: white;
    margin-top: -40px;
}

  .top_intro{
    height: 38vh;
    filter: contrast(27%), sepia(18%);
}

textarea{
    margin-left: 7vw;
    margin-top: 10vh;
}

header{
    height: 40px;
    padding: 15px;

}

details{
    margin-top: 8px;
    width: 10px;
    transform: scale(1.1);
}

#res{
    display: inline-block;
}

.topnava{
    display: none;
}


#figure_navegador h4{
        display: none;
     }

}

@media (min-width: 412px) and (max-width: 915px){
    #res{
        display: none !important;
    }
    textarea{
        margin-left: 15vw;
        margin-top: 10vh;
    }
}

@media (min-width: 768px) and (max-width: 1024px){

    header{
        width: 100vw;
        padding: 17px;
    }

    .top_intro{
        width: 90vh;
        height: 50vh;
    }

    .sep{
        display: inline-block;
      
        margin-left: 3vw;
        width: 70vw;
        height: 30vh;
        padding: 8px 5px 5px 16px;
    }

    .ads_videocontainer{
        display: inline-block;
        height: 80px;
        
    }

    .panflete-catalog{
        display: block;
        margin-top: 10vh;
        height: 50px;
        margin-left: 5px;
        margin-top: 3px;
        background-color: gray;
        
    }

    #parag_top{
        display: inline-block;
    }
    details{
        margin-top: 5px;
    }
}

@media (min-width: 912px) and (max-width: 1368px){
    .sep{
    display: none;
    }

    video{
        margin-left: 28vw !important;
    }

    #blockna{
        display: none
    }

    #figure_navegador{
        margin-top: -70vw !important
    }
   header{
    height: 40px;
    padding: 20px;
   }
}

@media (min-width: 1024px) and (max-width: 1366px){
    header{
       
        padding: 16px;
        height: 50px;
        
        margin-left: -10px;

    }


    #ilink_catalogotoiframe{
       margin-top: 18vh !important
    }
    nav{
        width: 160vw !important;
    }
    .top_intro{
        height: 50vh
    }

    .panflete-catalog{
        margin-top: 3vh !important;
    }

    #imeio-img{
        display: none;
    }

    section{
        margin-top: 15vh;
    }

    figure{
        width: 105vw
    }

    .topnava{
        padding: 23px;
    }
    .englobeforheader{
        display: block;
       
    }

    article{
         width: 10vw;
        height: 35vh;
         margin-left: -4vw;
         margin-top: 22px;
    }

    textarea{
        border-radius: 25px;
        font-size: 12px;
    }
    .sep{
  display: none r;
margin-top: -10px;
margin-left: 35px;

 }


 figure{
    margin-top: -5px;
 }
    .ads_videocontainer{
        margin-top: -15vh;
        margin-left: -32vw !important;
        margin-right: -4px;
        background-color: transparent;
    }

    #resp{
        display: inline-block;
        margin-left: 69px;
    }
    video{
      margin-left: 30vw;
        margin-right: -3px
    }

    #blockna{
        margin-top: 10vh;
    }

    .explain_site{
        margin-top: -68px;
        z-index: 2;
    }

    .footer-textcontent{
        margin-left: -5px;
    }

    .bookopen_det{
        margin-top: -20px;
    }
    details{
        height: 20vh;
        z-index: 3;
      

        }

  
}

@media (min-width: 820px) and (max-width: 1180px){
    header{
        z-index: 3;
        
    }

    .sep{
        z-index: 1;
        
    }

    #ilink_catalogotoiframe{
        margin-top: -5px;
    }
}

@media screen and (width: 1280px){
    #pianotop_link{
        margin-top: 20px;
    }
    .topnava{
        padding: 42px;
        height: 10vh;
    }

    header{
        margin-left: 45px;
    }

    .top_intro{
        height: 50vh;

    }

     #ilink_catalogotoiframe{
        margin-top: -15px;
    }

  
}

@media screen and (width: 540px) {
    #blockna{
        display: none;
    }

    #figure_navegador{
        margin-top: 56vh;
        letter-spacing: 4px;
    }

    #res{
        display: inline;
    }

    

    
}

@media (min-width: 480px) and (max-width:760px){
    video{
        margin-left: 10px;
    }

    #blockna{
        display: none;
    }

   #res{
    display: inline-block;
   }

   #figure_navegador{
    margin-top: 40vh;
   }

   footer{
    margin-top: 60vh;
   }
}


#link_lift{
    display: inline;
    color: rgba(0, 0, 0, 0.719);
    margin-top: 10vh;
    
    border-radius: 50%;
    height: 1px;
   padding: 5px 10px 5px 10px;
 margin-left: -25vw;
 width: 17px;
 border: 1px solid rgba(0, 0, 0, 0.514);
 font-size: 28px;
 position: sticky;
 top: 0;
 z-index: 2;
}

textarea::placeholder{
    animation: hoverFadeOpfil 5s ease-in-out;
}

@media (min-width: 400px) and (max-width: 867px ){
   #blockna{
    display: none;
   }

   nav{
 width: 180vw !important;
 margin-right: 30px !important;
   }

   header{
    margin-top: -10px !important
   }
}

@media (min-width: 375px) and (max-width: 667px){
    #blockna{
    display: none;
   }

   
   nav{
 width: 180vw !important;
 margin-right: 30px !important;
   }

}

@media (min-width: 414px) and (max-width: 896px){
    #figure_navegador{
        margin-top: 30vw !important;
        margin-right: -20vw !important;
        width: 120vw !important;
        max-width: 350vw !important;
    }

    footer{
        margin-top: 80vw;
    }

   .top_intro{
    width: 130vw;
   }

   
}

@media (min-width: 390px) and (max-width:844px){
    textarea{
        margin-left: 8vw;
    }
    .ads_videocontainer{
        margin-top: -20vh !important;
    }

    #res{
        margin-top: 8vh
    }

    header{
        width: 110vw;
    }

    footer{
        width: 110vw;
    }
    #figure_navegador{
        margin-top: 70vw !important;
    }

    video{
        margin-left: 22vw
    }
    footer{
        margin-top: 50vh !important;
    }
}

@media (min-width: 412px) and (max-width: 915px){
    .englobeforheader{
        display: none;
    }
}

@media (min-width: 768px) and (max-width: 1024px){
    .panflete-catalog{
        margin-top: -3vh;
        z-index: 1;
    }

    .ads_videocontainer{
        margin-top: -8vh !important;
        margin-left: -60vw !important;
    }
    .explain_site{
        z-index: 2 !important;
        position: absolute;
        display: none;
    }

    #figure_navegador{
        margin-top: 10vh !important;
    }
    header{
        padding: 20px !important;
    }
}

@media (min-width: 540px) and (max-width: 720px){
     #figure_navegador{
        margin-top: 50vw !important
     }
}

@media (min-width: 344px) and (max-width: 882px){
    #imeio-img{
       display: none;
    }

    .top_intro{
        height: 40vh;
        margin-top: 10vw
    }

    
}

@media (min-width: 853px) and (max-width: 1280px){
    .panflete-catalog{
        margin-top: 1vh;
        margin-left: 3vw;
    }
}

@media (min-width: 412px) and (max-width: 914px){

    .top_intro{
        margin-top: -5vh;
    }

    figure{
        display: none;
    }

    #figure_navegador{

        margin-top: 36vh;
    }

    footer{
        margin-top: 10vh;
    }

    section{
        margin-top: 50vh
    }
#comment-impress{
    margin-top: 20vh;
    display: none !important;
}
   
    textarea{
   margin-left: 13vw !important;
    }
}

@media (min-width: 800px) and (max-width: 1280px){
    .englobeforheader{
      height: 40px !important;
      margin-top: -120vw;
    }

    .explain_site{
        margin-top: -40vh !important
    }

    #ilink_catalogotoiframe{
 margin-top: -16vh;
    }

    .panflete-catalog{
        margin-top: -13vh;
    }
}

@media screen and (min-width: 1000px){
    .explain_site{
        display: block;
        margin-top: -6vw !important;

    }

    article{
        height: 120px;
        display: inline-block;
        text-align: center !important;
        width: 20vw
    }

    header{
        padding: 28px;
        background: var(--wdw);
    }

    .englobeforheader{
        margin-top: -10vh !important;
        height: 14vh !important
    }
    .panflete-catalog{
        margin-top: -7vh;
        margin-left: 1vw
    }
}


@media (min-width: 375px) and (max-width: 667px){
  figure{
    margin-top: 67vw !important
  }
}

.englobeforheader{

height: 15vh;



background: rgb(53, 10, 10) ;

padding: 6px;
     margin-left: -10px;
     border: 1px solid black;
   border-bottom: 1px solid  rgba(97, 94, 94, 0.848);
position: relative;

     width: 120vw;
      animation:  transparent_intro 5s ease-in-out;
margin-top: -10vh !important;
max-width: 150vw;
 z-index: 1;

}

@media screen and (max-width: 820px){
    .top_intro{
        margin-top: -10px;
    }
    .sep{
        display: none !important;
    }
}

@media (min-width: 430px) and (max-width: 932px){
      #figure_navegador{
    margin-top: 30vh !important;
  }
}

@media (min-width: 360px) and (max-width: 740px){
    #blockna{
        display: none !important;
    }

    header{
        margin-top: -12px !important;
    }

    .ads_videocontainer{
        margin-top: -17vh;
      margin-left: -14vw;
    }

    textarea{
        margin-left: 3vw;
    }

    input[type="range"]{
        margin-left: 60px;
    }
    figure{
        margin-top: 46vh !important;
    }

    .footer-textcontent{
        margin-top: -10px !important;
        margin-left: 50px !important;
    }

    #res{
    margin-left: -12px;}
}

@media (min-width: 853px) and (max-width: 1280px){
    video{
        margin-left: 28vw !important;
    }

    .sep{
        display: none;
    }
}

@media (min-width: 600px) and (max-width: 1024px){
    .top_intro{
        width: 100vw !important;
        height: 70vh
    }

    figure{
        margin-top: 20vh !important
    }

    #figure_navegador{
        margin-top: -10vh !important;
    }

    .englobeforheader{
        width: 100vw
    }
}

@media (min-width: 800px) and (max-width: 1280px){
    .sep{
        display: inline-block;
        margin-left: 8vw;
        margin-top: 10vh;
    }

    #figure_navegador{
        margin-top: 60vh !important;
    }


    header{
        margin-left: 10vw !important
    }

    video{
        margin-left: 69vw !important;
    }

    .panflete-catalog{
        margin-top: -19vh !important
    }
    
    #res{
        margin-left: 11vw !important;
    }

    article{
        margin-top: -1px ;
        margin-left: -11vw !important;
    }

    .englobeforheader{
        margin-top: -7vw !important;
        height: 20vh !important
    }

    #blockna{
        display: block;
        height: 15vh;
        margin-top: 0vh !important
    }

    #figure_navegador{
        margin-top: -2vw !important;
        padding: 20px;
    }

    .detalink{
        display: block !important;
      transform: scale(1.2);
    }

   
   figure{
    box-shadow: none !important;
   }
}

#figure_navegador{
    background-color: transparent !important;
    border-bottom: 40px solid black;
    height: 10vh;
    padding: 38px 10px 38px;
}

.detalink{
    display: block !important;
    margin-top: -15px;
    transform: scale(1.2)
}

#logolv-pin{
    margin-top: -9px
}

article{
    height: 24vh;
    width: 20vh;
    margin-left: -1vw
}

.ads_videocontainer{
    background-color: transparent;
}

#blockna{
    display: none;
}

figure{
    margin-top: 10vh;
}
   </style>

</head>


<body>
 <nav class="topnava" id="liftnava">
       <table>
         <thead>
           <img id="olv-pin" src="olv_pin.png" alt="Logo Preto e Branco" > 

            <a  href="impress_audio.html" onclick="javascript:history.go(1)"  id="pianotop_link" title="Ouça o álbum demo ">PIANO SKETCHES | </a> <a href="magela.php" id="spaceuser_topo" title="Envie seu Som!"> ESPAÇO DE USUÁRIO</a> <svg id="dark_select" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
  <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/></svg>
   <span>
</svg></span></h4> <span><svg id="lighter_side" draggable="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16" style="color: rgba(59, 40, 4, 0.6);">
  <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
</svg> </span>

         </thead>
       </table>
 
       <details class="openbookformidle">
        <summary >
        <option value=""></option>
        </summary>
       </details>
    
     </nav>
    
     <header id="scroller_header">

         <details title="Abrir menu de links" class="detalink">

<summary class="sumario" title="Menu Aberto"> </summary>

         <select name="" id="" class="links_extra">

         <option value="" class="options_linkstop"><a onclick="javascript:history.go(1)"  href="impress_audio.html">PIANO SKETCHES</a></option>
         <option value="" class="options_linkstop"><a onclick="javascript:history.go(1)" href="magela.php">ESPAÇO DE USUÁRIO</a></option>
         
         </select>

         </div>
       
         </details>
                  <label for="select_theme" title="Selecione o Tema da página"></label> <input id="select_theme" type="range" min="0" max="1" step="1">  

          <img id="logolv-pin" src="logoeraser_template.png" >

         <div class="range_content">
 
    
     </header>
    
     <div class="englobeforheader" id="englobe"></div>
    
    

     </div>

 
     <div class="top_intro">
    <img id="imeio-img" style="transform: scale(1.2);display: none" src="logofadetop.png" class="radius-logo" alt="Imagem Logo Subindo">
     </div>

 
<div id="res"></div>

<details class="explain_site" title="Prefácio" >
<summary  class="bookopen_det" ></summary>
<article>

  <p style="text-align: start;letter-spacing: 3px;">Este site foi criado no intuito de trazer mais clareza e menor burocracia na distribuição para novos artistas. Gerenciando o trabalho novo, se é criado  a ponte direta e simples na publicação de criações livres. </p>


</article>
</summary>
</details>

  

<div class="sep" id="sep_forpinbox" title="ADS Álbum" >  
     <p id="parag_top"> Ouça Piano Sketches, <br> uma coletanea de registros intimistas contendo  composições e <br> improvisos de piano</p>
     <div class="panflete-catalog" id="cardenglobe-catalog">
        <a onclick="javascript:history.go(1)" href="impress_audio.html" class="eraser_screenlink">Piano Sketches</a>
       
         </div>
         <li title="Álbum" id="ilink_catalogotoiframe" ><a target="_iframe" href="impress_audio.html">Piano Sketches</a></li>
        
</div> 
</div>

 

<div class="ads_videocontainer">

<video  src="adsvideo.mp4" controls autoplay muted loop ></video>

</div>


<aside></aside>

<div id="blockna" style="z-index:1;"></div>
<div class="blokofig" style="z-index: 1;" ></div>
<figure class="user_space" id="linklog_user">

</figure>

<nav title="Área do Usuário" id="figure_navegador" style="z-index: 1;"> <p id="arslip">Envie sua Música</p>  <a id="arslia" onclick="javascript:history.go(1)" href="magela.php"> Formulário</a>  </nav>

    
    
 <section>

    
</div>


     <label for="feedback" title="Avalie">
     <textarea name="feddback" id="comment-area" maxlength="120" placeholder="&nbsp; Deixe seu Feedback (opcional) (max 120 caracteres)"></textarea>
  </label>

     </div>
 </section>


 

 <button value="send_comment" id="send_experience" type="button" onclick="show()" >FeedBack</button>   <a id="link_lift" title="Ir para o topo" href="#imeio-img">^</a>
 <div class="feedback_usercomments" id="comment-impress"></div>

  <footer>
 
       <div class="footer-textcontent" title="Criador">
       <p id="gh-link" ><a onclick="javascript:history.go(1)"   href="https://github.com/01809?tab=repositories&fbclid=PAZXh0bgNhZW0CMTEAAafQY8M2VdaSH2yBPtQmS_mn7XT4MoNRqbfPBaAnGxzjiG6rz2JH8FuzJb_aqg_aem_yS-eJoDu6Ro_CpN6X90_HQ">&copy; 01809 &nbsp;</a></p>
       <p id="ig-link"><a onclick="javascript:history.go(1)"   href="https://www.instagram.com/_.andreydamas/">@andrey_damas</a></p>
       </div>

      
<p></p>

 </div>


     </footer>


     <script>


     const feedbackArea = document.getElementById('comment-area');
     const btfeed = document.getElementById('send_experience');
     const userCommentSpace = document.getElementById('comment-impress');

     var cbr = 'rgb(104,10,10)'
     var mdr = 'rgb(75,9,9)'
     var dkr = 'rgb(53,9,9)'  

      var wsm = '#f5f5f5'
      var wol = '#fdf5e6'
      var wdw = '#ecefec'

const cardPinChanger = document.getElementById('sep_forpinbox');


  
    btfeed.addEventListener("click", ()=>{
  const commentContent = feedbackArea.value;

         userCommentSpace.textContent = commentContent;
        
    
    })

    function emptyFeed(){
    
    if(feedbackArea === ' '){
    alert('digite')
    }
    else{
     userCommentSpace.style.borderRight = '1px solid rgb(63, 58, 9);';
    }

}
       
    
const englobe = document.getElementById('englobe')
   const seletor = document.querySelector("input[type='range']")
         const head = document.getElementById('scroller_header');
         const range = document.getElementById('select_theme');
         const body = document.body;

         var root= document.querySelector(':root');
         root.style.setProperty('--main-color', 'linear-gradient(rgb(113, 10, 10),rgb(90, 5, 5),rgb(205, 6, 6))');
         const ifr = document.getElementById('iframe_n1');
         const respIfr = document.getElementById('empty_iframedbcl')
         let chave = range.value;

const resp = document.getElementById('res');
let data= new Date();
let atual= data.toLocaleString('pt-BR')


resp.innerHTML = `${atual}`;


        
         range.addEventListener("input", () =>{

             const oldShadow = head.querySelector('.shadow')
                    
chave = range.value;

englobe.style.backgroundColor = 'white';
body.style.backgroundColor = 'white'
  head.style.boxShadow = "10px 10px 10px rgba(113, 10, 10, 0.5)";
  head.style.backgroundColor = 'white'
             
             if(chave>0){
                 
                 let styles = {
                              backgroundColor: "white"
                          
                 };

                 for(let prop in styles){
                    
                     if(prop === "backgroundColor"){
                        
                         englobe.style[prop] = [prop];
                         head.style[prop] = [prop];

                     }
                    
                 }

 
             }   

             else{

                 let styles= {
                   backgroundColor: "black"
                          
                 }

                   for(let prop in styles){
                     if(prop === "backgroundColor"){
                        head.style.backgroundColor = ' rgb(0, 0, 0, 0.774)'
                         body.style[prop] = styles[prop];
                      
                        
                     }
 
                 }
                
                

                 if(chave=0){
                     
                     body.style.backgroundColor ='white'
                     englobe.style.backgroundColor = 'var(--maincolor)'    
              
                   head.style.animation = 'none';
                                cardPinChanger.style.borderRadius = '20px';
                                cardPinChanger.style.boxShadow = '28px 28px 0px rgba(0, 0, 0, 0.918)'
                 }

                 else{   //!dark-theme
                    
  head.style.boxShadow = 'none';
head.style.backgroundColor = ' rgb(0, 0, 0, 0.774)'
  englobe.style.backgroundColor = 'black'
  body.style.backgroundColor = 'black'



                 }
             }
         })

           window.addEventListener("scroll",()=>{
             if(window.scrollY>50){
                body.style.scrollBehavior = 'smooth'
                  head.classList.add("scroller");
                  
             }
             else{
                  head.classList.remove("scroller");
             }

            
         })

 function Eraser(){

     if(ifr){

     ifr.src = 'empty.html';
     respIfr.innerHTML = `Volta`;

     }

 }

     </script>
</body>
</html>