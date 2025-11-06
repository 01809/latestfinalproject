<?php

$host = 'localhost';
$user = 'root';
$db = 'received_users';
$pass ='';

$dsn = "mysql:host=$host;dbname=$db";

try{


    $tabela = "CREATE TABLE IF NOT EXISTS `sendsound` (
        `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `nome` varchar(100) NOT NULL,
        `musica` varchar(250) NOT NULL,
        `duracao` time(5) NOT NULL,
        `arquivo` varchar(255) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

    $pdo = new PDO($dsn,$user,$pass);

  $pdo->exec($tabela);

}

catch(\PDOException $e){
    die("ERRO". $e->getmessage());
}

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    if(isset($_POST['nome'],$_POST['musica'],$_POST['duracao']) && isset($_FILES['arquivo'])){

        $nome = $_POST['nome'];
        $musica = $_POST['musica'];
        $duracao = $_POST['duracao'];

        $sduracao = $_POST['duracao'];

 



        $subp = "userfiles/";

        $arquivo = $_FILES['arquivo'];

 
    
        $destino = $subp. basename($arquivo['tmp_name']);

  

        if(move_uploaded_file($arquivo['tmp_name'],$destino)){

            $stmt = $pdo->prepare("INSERT INTO sendsound(nome,musica,duracao,arquivo) VALUES (?,?,?,?)");
            $stmt->execute([$nome,$musica,$duracao,$destino]);
            
            header("Location: sende_filesok.php");
        }

    }
}


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
       
    <meta charset="UTF-8">
       
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>USER_SPACE</title>
</head>

<body>
          <style>
        :root {

            --main-color: linear-gradient(rgb(113, 10, 10), rgb(90, 5, 5), rgb(205, 6, 6));

            --dkr: rgb(53, 9, 9);

            --cbr: rgb(104, 10, 10);

            --mdr: rgb(75, 9, 9);



            --bre: rgb(46, 3, 3);



            --h: "\2630";



            --wsm: #f5f5f5;

            /*cc*/

            --wol: #fdf5e6;

            --wdw: #ecefec;



            --dg: rgba(0, 0, 0, 0.918);





            --tf: linear-gradient(to left, gray, black, gray, rgb(70, 69, 69));

        }

body{
    animation: transparent_intro 6s ease-in ;

}

        form {

            display: grid;

            gap: 30px;

            margin-top: -10px;

            width: 20vw;

            margin-left: 25vw !important;

            border: 2px solid;

            padding: min(30px, 30px, 60px);

            background-color: transparent;



        }



        body {

            background: var(--wdw);

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


        input[type="text"],
        input[type="number"] {

            border: none;

            border-bottom: 1px solid rgba(0, 0, 0, 0.514);



        }



        input[type="text"] {

            padding: 5px;

        }



        .values_title:after {

            content: ':'

        }



        #audio_rece {

            margin-left: 20%
        }



        #send {

            margin-top: 47px;

            padding: 10px;



            border-radius: 20px;

            background-color: transparent;

            color: rgba(124, 119, 119, 0.856);

            letter-spacing: 15px;

            margin-left: 19vw
        }



        aside {



            height: 120vh;

            background-image: url(apap.jpeg);

            background-repeat: no-repeat;

            background-size: cover;

            width: 28vw;

            margin-left: 53%;

            margin-top: -50%;

            position: relative;

            z-index: 2;

        }



        footer {

            background-color: rgb(0, 0, 0);

            padding: 20px;

            margin-top: 100vh !important;

            margin-left: -15px;

            height: 60px;

            position: absolute;

            width: 110vw;

            border-top-left-radius: 10px;

            border-top-right-radius: 10px;

            transform: none;

            text-align: center;

            justify-content: center;

            margin-bottom: -20px;

        }



        input[type="text"] {

            padding: 5px;

        }



        input[type="file"] {

            border-bottom: 10px solid black;
            display: none;
            margin-top: 10vh !important
        }



        @media screen and (max-width: 980px) {





            button {

                height: 50px;

            }



            body {

                justify-content: center;

                max-width: 100vw;

            }



            aside {

                display: none;

            }



            form {

                margin-left: 23%;



                padding: 20px;

                width: 50vw
            }



            input {

                border-radius: 10px;



                color: gray;

                height: 30px
            }



            footer {

                margin-top: 90px
            }

        }



        @media screen and (min-width: 667px) {

            form {

                width: 120vw;

                margin-left: 100px;

                padding: 2px;

            }



            button {

                margin-top: -10px;

            }



            input {

                height: 70px;

            }

        }



        @media screen and (min-width:375px) {

            input {

                height: 40px;

            }

        }



        @media screen and (max-width: 820px) {

            footer {

                margin-top: 30%;

            }

        }



        @media screen and(max-width: 300px) {

            input {

                width: 10px;

            }

        }



        @media (min-width: 600px) and (max-width: 1024px) {

            form {

                width: 70vw;

                margin-left: -10px;

                padding: 4px;

                height: 20px;

                margin-top: 1vh;

            }


        }



        @media screen and (max-width:414px) {

            footer {

                margin-top: 50%;

            }



            form {

                width: 84vw;

                margin-left: 3px;

                border-radius: 30px;

            }

        }



        @media screen and (max-width: 430px) {

            form {

                width: 80vw;

                margin-left: 15px;

                border-radius: 30px;

            }



            footer {

                margin-top: 70%;

            }





        }



        @media screen and (min-width: 768px) {

            form {

                width: 70vw;

                margin-left: 12vw;

                font-size: 15px;

                letter-spacing: 3px;

            }



            input {

                height: 50px;

            }

        }



        @media screen and (max-width: 360px) {

            input {

                height: 40px;

            }



            form {

                margin-left: 8px;

            }

        }



        @media screen and (max-width: 769px) {

            form {

                width: 60vw;

                padding: 20px 20px;

            }

        }



        @media screen and (max-width: 820px) {

            form {

                padding: 30px;

                margin-left: 75px;

                margin-top: 20px;

                border: 1px solid rgba(128, 128, 128, 0.836);



            }



            nav {

                height: 10px;

                padding: 10px;

                letter-spacing: 4px;

            }

        }



        @media screen and (min-width: 1024px) {

            footer {

                margin-top: -20%;

                position: absolute;

                z-index: 3;

                height: 10vw
            }



            aside {

                height: 185vh;

                margin-top: -70vh !important;

                border: none;

                margin-left: 60vw;

                z-index: 1;



            }



            form {

                margin-left: 10vw;

                width: 150px;

                height: 60px;

                font-size: 22px;

                letter-spacing: 3px;

                border: none;

                margin-top: -30px;

            }



            input {

                width: 30vw;

                height: 50px;

            }



            button {

                height: 70px;

                font-size: 20px;

                letter-spacing: 7px;

            }



            nav {



                z-index: 3;

            }

        }



        @media screen and (min-width: 912px) {

            form {

                width: 80vw;

                margin-left: 6vw;

                padding: 20px;

                letter-spacing: 16px;

                font-size: 20px;

                padding: 20px 17px 16px 10px;

                border-radius: 20px;





            }



            input {

                height: 4vh;

                width: 40vw;

                margin-left: 5px;

            }



            button {

                height: 8vh;

            }



            span {

                margin-left: 20px
            }



            footer {

                margin-top: 43%;



            }



            aside {

                height: 50vh;

            }

        }



        @media screen and (max-resolution: 300dpi) {}



        @media screen and (-webkit-min-device-pixel-ratio: 900px) {

            aside {

                filter: contrast(50%), grayscale(70%);



            }

        }



        @media screen and (max-width: 344px) {

            form {



                margin-left: 50px;

                letter-spacing: 4px;

                border: none;

                color: rgb(104, 81, 20);



            }



            footer {

                margin-top: 70%;

            }

        }



        @media screen and (min-width: 853px) {

            footer {

                margin-top: 33%;

            }



            form {

                margin-top: 30px;

                margin-left: 5vw;

                padding: 20px;

                font-size: 20px;



            }

        }



        @media screen and (min-width: 1280px) {

            form {

                margin-top: 33px;

                position: relative;

                font-size: 13px;

                letter-spacing: 17px
            }



            button {

                width: 20px;



            }



            input {

                border-top-left-radius: 20px;

            }



            aside {

                margin-top: 10px;

                height: 50vh;

            }

        }



        .buttenglobe {

            background-color: black;

            width: 75vw;

            height: 20vh;

            margin-left: -30px;

        }



        nav {

            height: 30px;

            margin-left: -10px;

            margin-top: -10px;

            margin-right: -20px;

            padding: 28px;



            color: gray;

            display: flex;

            flex-flow: row wrap;

            letter-spacing: 2px;

            z-index: 3 !important;

        }



        input::placeholder {

            font-weight: lighter;

            font-size: 9px;

            letter-spacing: 6px;

            color: rgba(0, 0, 0, 0.397);

            letter-spacing: 9px;

            filter: brightness(2px);

            padding: 20px;





        }



        @keyframes placesome {

            0% {



                opacity: 1;

                letter-spacing: 6px;

                margin-left: 10px;



            }



            20% {

                opacity: 1;

                letter-spacing: 5px;

                margin-left: -5px
            }



            50% {

                opacity: 1;

                margin-left: -8px;

                letter-spacing: 3px;

            }



            100% {

                opacity: 0;

                margin-left: -10px;

                display: nne;

                letter-spacing: 1px;

            }



        }



        input:focus {

            outline: none;





        }



        input:focus(:placeholder-shown) {



            animation: placesome 3.5s forwards;



        }



        a {



            text-decoration: none;

        }



        #firstpg_linkagem {

            margin-left: 15px;

            color: rgb(83, 83, 83);

            font-family: "Karantina", system-ui;

            font-weight: 300;

            font-style: normal;

            letter-spacing: 3px;

        }



        #firstpg_linkagem:before {

            content: '< ';

        }



        @media screen and (width: 1024px) {

            form {

                margin-top: 20px;

            }



            footer {

                margin-top: 90vh;

            }

        }



        input[type="range"] {

            margin-left: 20vw;



            width: 50px;



            accent-color: rgba(65, 63, 63, 0.801);

            height: 30px;



            margin-left: 40vw;

        }



        input[type="range"]::-webkit-slider-runnable-track {

            accent-color: black;

            background-color: black;



            border-radius: 17px;



            border: 1px solid rgba(73, 70, 70, 0.274);



            outline: 3px solid rgba(0, 0, 0, 0.418);



        }



        @media (min-width: 800px) and (max-width: 1280px) {

            aside {

                margin-top: -2vh;

                height: 62vh;

            }



            nav {



                margin-top: -2px;

                width: 98vw;

                height: 7vh;

                padding: 39px;

            }



            form {

                margin-top: 10vh !important;



            }



            #changer {

                margin-top: 16px;

                transform: scale(1.2)
            }



            #firstpg_linkagem {

                margin-top: 15px;

                font-size: 20px;

                margin-left: 38px;

            }



            button {

                width: 120px;

                padding: 28px 15px 35px 7px;

            }



            input[type="range"]::-webkit-slider-runnable-track {

                background-color: rgb(70, 69, 69);

            }

        }



        @media screen and (width: 1280px) {

            form {

                margin-top: 30vh;



            }



            aside {

                margin-top: -35vh;



            }



            button {

                transform: scale(0.7) !important;

                margin-left: -10px !important;

                margin-top: 4px !important;

                margin-bottom: 20px !important;

            }



            input[type="number"] {

                background-color: rgba(245, 238, 238, 0.904) !important;

            }



            input[type="text"] {

                background-color: white !important;

            }



            input[type-="file"] {

                margin-top: 10vh !important
            }

        }





        button:hover {

            letter-spacing: 4px;

        }



        button {

            outline: none;

            offset: none;

            border: none;

            width: 120px;

            letter-spacing: 3px !important;

            height: 34px;

            transition: transform ease-in-out 5s !important;

            transition: scale ease-in-out 7s;

            transition: background-color ease-in-out 3s !important;



        }



        @media (min-width: 768px) and (max-width:1024px) {





            form {

                margin-top: 10vh;

                height: 50vh;

                margin-left: 13vw;



            }



            footer {

                margin-top: 50vh;

            }

        }



        @media (min-width: 1024px) and (max-width: 1366px) {}



        @keyframes fadepaste {

            0% {

                display: none;

                margin-left: -10vh;

            }



            10% {

                display: none;

            }



            20% {



                filter: blur(4px);

                margin-left: -50vw;



            }



            50% {

                margin-left: -30px;

            }

        }







        #arquivohide {

            animation: fadepaste 5s ease-in;

        }



        #resp {

            letter-spacing: 1px;

            margin-top: -10px;

            margin-left: -10px;

            color: rgb(41, 36, 4);

        }



        input[type="file"] {

            margin-top: 20px;

        }



        @media screen and (max-width: 980px) {

            input[type="file"] {

                animation: none !important;

                background-color: black;

                padding: 14px;

                border-radius: 35px;

            }

        }



        @media (min-width: 375px) and (max-width: 667px) {

            form {

                margin-left: 3px !important;

                width: 80vw
            }



            footer {

                margin-top: 20vh !important;

            }

        }



        @media (min-width: 360px) and (max-width: 740px) {

            form {

                margin-left: 19px;

                border: none;

                letter-spacing: 4px;

                ;

                color: rgb(100, 100, 100);

                gap: 20px;

            }



            input[type="text"] {

                background-color: white;

            }



            button:hover {

                transform: scale(1.1);

                background-color: rgb(80, 79, 79) !important;

            }



            input[type="file"] {

                background: var(--wdw);

                padding: 20px;

            }



        }



        button:hover {

            transform: scale(1.1);

            background-color: rgb(80, 79, 79) !important;



        }



        @media (min-width: 344px) and (max-width: 882px) {

            form {

                margin-left: -10px;

            }



            input[type="file"] {

                background-color: white;

            }

        }







        @media (min-width: 800px) and (max-width: 1280px) {

            nav {

                margin-top: -80px;

            }



            input[type="text"] {

                background-color: rgb(245, 242, 242);

                border-bottom: 1px solid rgba(0, 0, 0, 0.555);

            }



            form {

                gap: 20px;

            }



            button {

                height: 60px !important;

                transform: scale(0.9);

                letter-spacing: 4px;

                color: rgb(170, 169, 169) !important;

            }



            footer {

                margin-top: 85vh !important;

            }



            input[type="file"] {

                margin-top: 50px;

                padding: 15px;

                background-color: white;

                border-bottom: 25px solid black
            }

        }



        .englobefornav {

            height: 80px;

            margin-left: -10px;

            margin-right: -10px;

            z-index: 1;

            position: relative;



        }



        @media (min-width: 1024px) and (max-width:1366px) {}



        @media (min-width: 375px) and (max-width: 667px) {

            #firstpg_linkagem {

                margin-top: 8px
            }



            form {

                margin-left: -24px !important
            }



            input[type='text'] {

                width: 70vw;

                height: 20px;

            }



            input[type='number'] {

                width: 70vw;

                height: 30px;

            }



            input[type='file'] {

                width: 65vw;

                height: 40px;

                padding: 15px;
                ;

                border-radius: 1px;

            }

            span {

                letter-spacing: 5px !important;

            }

        }



        @media (min-width:360px) and (max-width: 740px) {

            #firstpg_linkagem {

                margin-top: 8px
            }

        }

        body {

            scroll-behavior: initial;

        }



        /*input[type="text"]:focus+:placeholder{

    display: none;

} */



        @media (min-width: 600px) and (max-width:1024px) {

            form {

                margin-left: -10px !important
            }



            nav {

                background-color: transparent;

                height: 17px
            }



            #firstpg_linkagem {

                margin-top: 18px;



            }

        }

        @media (min-width:768px) and (max-width: 1024px) {

            form {

                margin-left: 130px !important
            }

        }


        @media (min-width: 600px) and (max-width:1024px) {

            form {

                margin-left: 25vw !important
            }



            #firstpg_linkagem {

                margin-top: 33px !important;

                height: 15px
            }



            nav {

                background-color: black;

                height: 48px;

            }





            input[type="range"] {

                margin-left: 10vw;

                margin-top: 43px !important
            }



            details {

                height: 70vh !important;

            }

        }



        @media (min-width: 720px) and (max-width:1024px) {

            footer {

                margin-top: 150vh !important;

            }

        }


        @media (min-width: 768px) and (max-width: 1024px) {

            form {

                margin-left: 26vw !important;

            }



            footer {

                margin-top: 25vh !important;

                height: 20vh;

            }



            #firstpg_linkagem {

                margin-top: 5vh !important;

                color: black;

                background-color: black;

                display: block;

                margin-left: 30px;

                transform: scale(1.3);

            }



            input[type="range"] {

                margin-top: 67px !important;

            }



            nav {

                height: 10vh;

                width: 90vh
            }



            button {

                transform: scale(1.1);

                background-color: transparent;

            }



            input[type="file"] {

                margin-top: 80px !important;

            }



        }

        @media (min-width:360px) and (max-width: 740px) {

            #firstpg_linkagem {

                margin-top: 21px
            }



            input[type="text"],
            input[type="number"] {

                width: 65vw;

                height: 20px;

            }



            form {

                letter-spacing: 9px;

                margin-left: 8vw !important
            }



            span {

                color: rgba(136, 133, 133, 0.705);

            }



            button {

                transform: scale(0.8);

            }



            input[type="file"] {

                width: 60vw;

                height: 20px;

                border-radius: 1px;

            }



            footer {

                margin-top: 20vh !important;

            }

        }


        @media (min-width: 800px) and (max-width: 1280px) {

            form {

                margin-left: 10vh !important;

            }



            button {

                transform: scale(0.6);

                margin-left: -10px;

                letter-spacing: 3px !important;

            }



            input[type="number"] {

                height: 30px;

                background-color: white;

                border-bottom: 2px solid rgba(0, 0, 0, 0.753);

            }



            #firstpg_linkagem {

                margin-top: 80px !important;

            }

            footer {

                display: block;

                margin-top: -20vh !important;

                height: 20vh;

            }

        }

        @media (min-width: 600px) and (max-width: 1024px) {

            form {



                margin-top: 18vh !important;

                font-size: 13px;

                gap: 30px;

                color: rgb(107, 105, 105);

                margin-left: 45vh !important
            }



            span {

                -webkit-text-fill-color: var(--tf) !important;

            }



            aside {

                margin-top: -62vh !important;

                height: 125vh;

                width: 55vw;

                margin-left: 50vw;

            }



            nav {

                margin-top: -20vh;

                background-color: black;

                width: 100vw !important;

                height: 20vh !important;

            }



            footer {

                margin-top: 50vh !important;

                padding: 20px;

                ;



                margin-left: -10px;



            }


            input[type="file"] {

                border-top-left-radius: 10px;

                background: var(--wsm);

                margin-top: 5px;

                margin-left: 5vw !important;

            }



            button {

                transform: scale(0.7);

                margin-left: 17vw;

                padding: 20px;

                color: rgba(233, 229, 229, 0.692) !important;

                letter-spacing: 4px !important;

            }



            #firstpg_linkagem {

                margin-top: 15vh !important;

                background: rgb(87, 1, 1);

                padding: 15px;

                display: block;

                color: rgb(158, 155, 155) !important;

                margin-left: 73px !important;

                transform: scale(1.3);

            }



            input[type='range'] {

                margin-top: 103px !important;

                margin-left: 10vh;



            }



            input[type="text"] {

                background-color: white;

            }


        }



        button:hover {

            color: black;

            transform: scale(1.1);

            background-color: rgb(80, 79, 79) !important;

        }




        @media screen and (min-width: 1000px) {

            input[type="text"],
            input[type="number"] {

                border-radius: 1px;

                background: var(--wsm);

            }



            span {

                letter-spacing: 17px;

                color: rgba(114, 113, 113, 0.918);

            }



            #firstpg_linkagem {

                margin-top: 7vh !important;

                margin-left: 11vw !important;

                transform: scale(1.5);

            }



            input[type="range"] {

                margin-top: 7vh;

                transform: scale(1.1);

            }



            form {

                margin-top: 17vh;

            }

        }

        @media (min-width: 820px) and (max-width: 1180px) {





            aside {

                display: none;

            }

            #firstpg_linkagem {

                background-color: black;

                margin-top: 39vh !important
            }



            nav {

                margin-top: -18px !important;

                height: 10px !important;

                padding: 88px
            }



            input[type="file"] {

                border-radius: 1px;

                margin-top: -2vh !important;

                margin-left: 8px !important;



                background-color: white;

            }



            footer {

                margin-top: 30vh !important;

                height: 20vh;

            }



            input[type="range"] {

                margin-top: 15vh !important;

                margin-left: 40vw;

                transform: scale(1.5) !important;

            }

        }


        @media (min-width: 1024px) and (max-width:1366px) {

            form {

                margin-left: -15vw !important;

            }

            nav {
                height: 20vw !important;
                padding: 4px 5px 5px 19px !important;
                display: grid;
                background-color: transparent !important;
                grid-column: auto;
                gap: 20px;
                justify-content: start !important;
            }

            aside {

                margin-top: 15% !important;

                height: 70vh;

            }



            button {

                margin-left: -70vw !important;


                transform: scale(0.9) !important;

            }



            input[type="file"] {

                width: 30vw;

                margin-top: 19px !important;

                margin-left: 54px !important
            }



            footer {

                margin-top: 65% !important;

                height: 20vh
            }



            input[type="range"] {

                transform: scale(1.9) !important;
                margin-top: -10vh;
                margin-left: 50vw !important;



            }


            #firstpg_linkagem {
                margin-left: 43vw !important;
                margin-top: 29vh !important;
                display: flex;
                padding: 15px;

            }


        }

        @media (min-width: 768px) and (max-width: 1024px) {

            form {

                margin-left: 16vw !important;

                margin-top: 20vh !important;

                padding: 40px;

                border: 1px solid rgba(128, 128, 128, 0.13);

            }


            #firstpg_linkagem {
                margin-top: 41px !important;
            }


            input[type="file"] {

                background-color: white;
                border-radius: 1px !important;
            }



            button {

                margin-left: 25vw !important;

                color: rgb(0, 0, 0) !important;

                letter-spacing: 8px !important;

                transform: scale(1.0);

            }



            nav {

                height: 11vh !important;
                background-color: black !important;
                margin-top: -20px
            }

            input[type="text"],
            input[type="number"] {

                background-color: white;

            }



            footer {

                margin-top: 40vh !important
            }



            input[type="range"] {
                margin-left: 50vw;

                transform: scale(1.8);
                margin-top: 6vh !important;

            }

        }



        @media (min-width: 800px) and (max-width: 1280px) {
            input[type="range"] {

                transform: scale(0.9) !important;
                margin-top: 20px !important;
                margin-left: 46vw !important;

            }

            nav{
                width: 110vw;
                
            }

            form {

                border: none !important;

                margin-left: 27vw !important;

                margin-top: 35vh !important
            }

            aside {
                margin-top: -20vw !important;

            }

        
        }

        @media (min-width: 820px) and (max-width: 1180px) {
            form {
                margin-left: 22vw !important;
            }

            input[type="range"] {
                margin-top: 12vh !important;
                transform: scale(1.3) !important;
            }

            #firstpg_linkagem {
                margin-top: 10vh !important;
            }

            input[type="file"] {
                margin-top: 10vh !important;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            #firstpg_linkagem {
                background-color: black !important;
                margin-top: -12px;
            }
            form{
                border: none ;
                margin-top: -10px !important;
            }

            input[type="range"]{
                margin-left: -10px;
            }

            nav{
                margin-top: -50px;
            }
        }

       
        @media (min-width: 344px) and (max-width: 882px) {
            form {
                margin-left: 2vw !important;
            }

        }

        @media (min-width: 412px) and (max-width: 915px) {
            footer {
                height: 20vh
            }
        }

        @media (min-width: 820px) and (max-width: 1180px) {
            form {
                margin-left: 40vw !important;
                margin-top: 20vh !important;
            }

            nav {
                background-color: transparent !important;
                margin-top: -15vh !important;
            }

            footer {
                margin-top: 10vh !important;
                height: 20vh !important;
                display: block !important;
                margin-right: -10vw;
            }

            #firstpg_linkagem {
                background-color: transparent !important;
            }
        }



        #figure_navegador {
            background-color: transparent !important;
        }

        footer{
            margin-top: 80vh !important;
            height: 30vh;;
        }

        #firstpg_linkagem{
            background-color: transparent !important;
        }

        form{
            margin-left: 30px !important;
        }

        input[type="range"]{
            margin-left: 10px !important;
            
        }
        
        footer{
            margin-top: 80vw !important;
        }
        form{
            margin-top: -100px !important;
        }

        
        @media (min-width: 600px) and (max-width: 1024px) {
            footer {
                display: none !important;
              height: 40vh !important;
            }
        }

        @media (min-width: 1024px) and (max-width: 1366px) {
            form {
                margin-top: 18vh !important;
                margin-left: 25vw !important;
            }

            aside {
                margin-top: 20px !important;
            }

            input[type="number"] {
                background-color: gray !important;
            }

            input[type="range"]{
                margin-left: 42vw !important;
            }
            nav {
                margin-top: -60px !important;
               
                height: 30vh !important;
            }
        }

         @media (min-width: 1024px) and (max-width: 1366px) {
            nav {
                background-color: transparent !important;
            }

            #firstpg_linkagem {
                background-color: transparent !important;
            }

            input[type="range"] {
                margin-left: 46vw !important;
                margin-top: 3vh !important;
            }

            form {
                margin-top: 18vh !important;
                margin-left: 10vw !important;
            }
        }

        input[type="file"]{
            display: block !important;
        }

         @media (min-width: 344px) and (max-width: 882px) {

            #firstpg_linkagem {

                margin-top: 18px
            }



            form {
     margin-left: -10px !important;
                gap: 20px;

            }



            span {

                color: rgb(104, 103, 103);

            }



            input[type='range'] {

                margin-top: 15px;

            }

        }

        
        @media (min-width: 912px) and (max-width: 1368px) {

            form {

                margin-left: 25vw !important;
              margin-top: -4vw !important;
                border: none;

            }



            input[type="file"] {

                background-color: white;

            }



            button {

                transform: scale(1.2);

                margin-left: 10px !important;

            }



            nav {

                margin-top: -14vw !important;

                padding: 15px 5px 10px 10px;

                height: 20vh !important
            }



            #firstpg_linkagem {


                margin-top: 10vh !important;
                transform: scale(1.6);

            }


            input[type="text"] {

                background-color: rgb(247, 244, 244) !important;

            }



            input[type="number"] {

                background-color: rgb(126, 123, 123);

                height: 50px
            }

            input[type="range"] {

                transform: scale(1.6) !important;



            }

            

        }

           @media (min-width:853px) and (max-width:1280px) {



            input[type="range"] {

                transform: scale(1.3) !important;

                margin-top: 7vh !important;

            }

            form{
                margin-top: 10vh !important;
            }

            button{
                margin-top: 6px !
            }

          

        }

       @media (min-width: 800px) and (max-width: 1280px) {
            aside {
                margin-top: -13vh !important;
                width: 54vw;
                margin-left: 56vw;
                height: 78vw;
                margin-right: -25px !important;
            
            }

            nav{
                background-color: black !important;
                padding: 20px  15px 40px  !important;
                height: 33vh !important;
             
            }
            form {
                margin-top: 4vw !important;
                margin-left: 5vw !important
            }

            footer {
                margin-top: -3vh !important
            }

            input[type="range"]{
                margin-top: -47px !important;
               
            }

            input[type="range"]::-webkit-slider-runnable-track{
    background-color: black ;
   
            }

        input[type="range"]:focus{
            border: 2px solid gray !important;
        }

        input[type="number"]{
            background: var(--wdw) !important;
        }


        input[type="file"]{
            margin-left: -4px !important;
        }
        
        input[type="text"]{  /**/ /**/ 
            background: var(--wdw) !important;
        }
            .footer-text-content {
                margin-top: 60px !important;
            }

            #firstpg_linkagem{
                margin-top: 15vh !important;
            }

            input[type="file"]{
                border-radius: 1px !important;
                padding: 30px;
                margin-top: 15px !important;
            }

            button{
                letter-spacing: 18px !important;
   
                transition: letter-spacing 4s ease-in-out forwards smooth;
                
                margin-top: -6vh !important;
                margin-left: -18px !important
            }
        }

        .footer-text-content {
            color: white !important;
        }

        footer a {
            color: rgba(82, 76, 29, 0.842);
        }

        span{
            color: gray ;
        }

        
        input[type="text"]:focus::placeholder{

          animation: placesome 3s ease-in-out forwards !important;
          color: gray;
          filter: blur(12px)

        }

          input[type="number"]:focus::placeholder{

          animation: placesome 3s ease-in-out forwards !important;
          color: gray;
          filter: blur(12px)

        }



    </style>

    </head>



    <body>



            <div class="englobefornav">

                    <nav>



                            <a href="index.php" onclick="javascript:history.go(-1)" id="firstpg_linkagem" title="Voltar para Primeira Página">Voltar </a>

                            <input id="changer" type="range" min="0" max="1" step="1">

                            </nav>

                    </div>

            <form action="" method="post"  enctype="multipart/form-data">



                 <div id="resp" style="color: rgb(102, 95, 40);"></div>



                  <label for=""></label>

                   <span class="values_title">Nome </span> <input id="creator_nome" name="nome" placeholder="Digite" type="text"    
                        required>


                    <label for=""></label>

                    <span id="sps" class="values_title">Título</span><input id="sound_nome" name="musica" type="text" placeholder="Digite o nome da Música" required>



                   <label for=""></label>

               <span id="spd" class="values_title">Duração</span> <input id="time_exp" name="duracao" placeholder="Tempo Estimado..." type="number" required>



                   
<input id="arquivohide" name="arquivo" type="file" accept="audio/*">

                   <button id="send" type="submit"  > Enviar</button>

                   

                    
    
                   </form>


           <aside id="panflete-right"></aside>



          <footer id="foot">

               <div class="footer-textcontent" id="footp" title="Criador">
                       <p id="gh-link"><a onclick="javascript:history.go(1)"   href="https://github.com/01809?tab=repositories&fbclid=PAZXh0bgNhZW0CMTEAAafQY8M2VdaSH2yBPtQmS_mn7XT4MoNRqbfPBaAnGxzjiG6rz2JH8FuzJb_aqg_aem_yS-eJoDu6Ro_CpN6X90_HQ">&copy;01809 &nbsp;</a></p>
                       <p id="ig-link"><a onclick="javascript:history.go(1)" href="https://www.instagram.com/_.andreydamas/">@andrey_damas</a></p>
                       </div>

                 
            <p></p>

             </div>


                   
        </footer>

        <!--input[type="range"]::-webkit-slider-runnable-track{

background-color: rgb(44, 8, 8);

border: 1px solid rgba(109, 108, 108, 0.137) ;

offset:2px solid black;

box-shadow: 10px 10px 80px rgba(255, 0, 0, 0.226);

outline: 1px solid rgba(0, 0, 0, 0.336);

}-->
        


<script>



    const spSps = document.getElementById('sps');
const duracao = document.getElementById('time_exp')
    const spSpd = document.getElementById('spd');

const burnBrown = ' rgba(82, 76, 29, 0.842)'
    var wdw = '#ecefec'
    var wsm = '#f5f5f5'


const spa = document.querySelector('.values_title');

    const panflete = document.getElementById('panflete-right')
    const seletor = document.getElementById('changer');
    
    const b = document.body;


   seletor.addEventListener("input", ()=>{
  
    const chave = seletor.value;
    b.style.backgroundColor = wdw;

    if(chave>0){
        b.style.backgroundColor= 'white';
        spa.style.color = 'gray';
        spSps.style.color = 'gray'
        spSpd.style.color = 'gray';
        duracao.style.backgroundColor = 'gray'
      
    }  else{
        b.style.backgroundColor = 'black';
        spa.style.color= burnBrown;
        spSps.style.color = burnBrown;
        spSpd.style.color = burnBrown;
        duracao.style.backgroundColor = 'white'

    }

   })


</script>


    </body>

</html>
