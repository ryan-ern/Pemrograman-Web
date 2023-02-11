<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $page = $_GET['page'];
    switch($page){
    case 'NikeR6':
        include('detail.html');
    }

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            margin: 0;
        }
        .header{
            background-color: #0097A7;
            padding: 10px;
            text-align: center;
            color: #FFFFFF;
        }
        .navbar{
            background-color: #B2EBF2;
            padding: 10px;
            text-align: center;
        }
        .navbar a{
            color: black;
            text-decoration: none;
            padding: 20px;
            
        }
        .navbar a:hover{
            color: #009688;
        }
        #main{
            display: flex;
        }
        .box {
                background-color: #00BCD4;
                margin: 10px;
                padding: 10px;
                border-radius: 5px;
                width: 50vw;
                height: 50vh;
        }
        .footer{
            background-color: #0097A7;
            padding: 10px;
        }
        img{
            width: 200px;
            border-radius: 8px;
            padding: 4px;
        }
    </style>
    <title>Tugas2-Ryan</title>
</head>
<body>
    <div class="header">
        <h1>Sepatuku</h1>
        <p>belanja dimana aja, kapan aja</p>
    </div>

    <div class="navbar">
        <nav>
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
        </nav>
    </div>

    <div id="main">
        <div class="box">
            <img src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/b05afb11-db22-461d-b94e-49bdc316b445/revolution-6-next-nature-road-running-shoes-NC0P7k.png" alt="Poto Nike">
            <h3>Nike Revolution 6</h3>
            <form action="" method="get">
                <input type="text" name="Sepatu" id="NikeR6" value="NikeR6" hidden>
                <button type="submit">Detail</button>
            </form>
        </div>
        <div class="box">
            <a href="#" pemweb="gagal">box 2</a>
            <p>paragraph 1</p>
        </div>
        <div class="box">
            <a href="#" pemweb="gagal">box 2</a>
            <p>paragraph 1</p>
        </div>
    </div>

    <div class="footer">
        ini footer
    </div>
</body>
</html>