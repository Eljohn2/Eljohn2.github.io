<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <Style>
        header{
            background-color:#333;
            color:black;
            padding:20px;
        }
        nav ul{
            list-style:none;
        }
        nav ul li{
            display:inline;
            margin-right:20px;
        }
        nav ul li a{
            color:#fff;
            text-decoration:none;
        }
        .hero{
            text-align:center;
            padding:100px 10px;
            background-color:#f0f0f0;
        }
        .hero h1{
            font-size:3em;
            margin-bottom:20px;
        }
        .hero p{
            font-size:1.2em;
            margin-bottom:30px;
        }
        .btn{
            display:inline block;
            padding:10px 20px;
            background-color:#333;
            color:#fff;
            text-decoration:none;
            border-radius:5px;
        }
    </Style>
</head>
<body>
    
    <header>
        <nav>
             <div class="container">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
            </div>
        </nav>
    </header>
     <main>
        <section class="hero">
        <h1>Welcome to my Website</h1>
        <p>5 little monkey humpty dumpty</p>
        <a href="index.php" class="btn" >Get Started</a>
        </section>
    </main>
</body>
</html>
