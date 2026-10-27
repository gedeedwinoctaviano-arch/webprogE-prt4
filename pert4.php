<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar CSS dan JavaScrip</title>

        <link rel="stylesheet" href="style.css">

    <style>
        .sembunyi{
            display : none;
            
        }

        .kotak-info{
                background-color: #fff;
                padding: 16px;
                margin: 10px;
                border: 2px solid #3e3be4;
                border-radius: 6px;
        }
        .btn-close{
            position: relative;
            top: 8px;
            right: 10px;
            border: none;
            background: none;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            color: #555;
        }
        .btn-close:hover{
            color: #ff0000;
        }

    </style>



</head>
<body>



    <h2>contoh text pada h2</h2>
    <div class="flex-center">
    <div class="kartu-profile">
        <h2>Octa</h2>
        <p>web instiki</p>
        <button id="btndetail" onclick="info()" class="btn-detail">info lengkap</button>
    </div>
    </div>

    <div class="kotak-info sembunyi" id="infobox">
        <button onclick="tutupdetail()" class="btn-close">&times;</button>
        <h1>informasi detail</h1>
    </div>
    <script>
        function info(){
            //alert("tombol lengkap di click");
            let info = document.getElementById("infobox");
            let btndetail= document.getElementById("btndetail");

            info.style.display = "block";
            btndetail.style.display = "none";
        }
        function tutupdetail(){
            //alert("tombol lengkap di click");
            let info = document.getElementById("infobox");
            let btndetail= document.getElementById("btndetail");

            info.style.display = "none";
            btndetail.style.display = "inline-block";
        }

    </script>
</body>
</html>