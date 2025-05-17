<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Zadanie projektu webovej prezentácie</title>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>

<body>
    <div class="top1">
        <header>
            <div class="main">
                
                <h1><a href="index.html"><div class="logo">MIRKUZOV<br>|K63XN|</div></a></h1>
                <div class="inside" style="padding-left: 140px; padding-top: 40px">
                    
                    <nav>
                        <ul class="sf-menu">
                            <li><a href="index.html">home</a></li>
                            <li><a href="index-1.html">models</a></li>
                            <li><a href="index-2.html" class="current">purchase</a></li>
                            <li><a href="index-5.html">test drive</a></li>
                            <li><a href="index-6.html">contact us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>
    <div class="bg_cont1">
        <div class="bg_cont">
            <section id="content">
                <div class="main">
                    <div class="inside">
                        <div class="container_16">
                            <div class="container">
                                <div class="grid_16">
                                    
                                    <h2>Contact Form Submission</h2>
                                    
                                    <p>Thank you for your request of purchasing of the <?php echo $_GET["model"];?>!</p>
                                   
                                    <p>Your submitted information:</p>
                                    <ul>
                                        <li><strong>Name:</strong> <?php echo $_GET["name"];?></li>
                                        <li><strong>Email:</strong> <?php echo $_GET["email"];?></li>
                                        <li><strong>Phone:</strong> <?php echo $_GET["phone"];?></li>
                                        <li><strong>Model:</strong> <?php echo $_GET["model"];?></li>
                                    </ul>
                                    <p>
                                    
                                    <h2>Please await further instructions at the e-mail you provided.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <footer>
        <div class="main">
            <div class="inside">
                <div class="container">
                    <div class="fright"></div>
                    <div class="fleft">
                        
                        <span>Myroslav Kuznietsov MLD 1</span> &bull; <a href="index-6.html">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>