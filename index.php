
<!DOCTYPE html>
<html lang="id-ID">
<head>

    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Apotek Buring Farma</title>
    <link rel='stylesheet' id='wp-block-library-css'  href="assets/css/style.min.css" type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href="assets/css/font-awesome.min.css" type='text/css' media='' />
    <link rel='stylesheet' id='flash-style-css'  href="assets/css/style.css" type='text/css' media='all' />
    <link rel='stylesheet' id='flash-style-css'  href="assets/css/web.css" type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'  href="assets/css/responsive.min.css" type='text/css' media='' />
    <style id='kirki-styles-flash_config-inline-css' type='text/css'>
        body{font-family:Comfortaa, "Comic Sans MS", cursive, sans-serif;font-weight:300;}
    </style>
    <script type='text/javascript' src="assets/js/jquery.js"></script>
    <script type='text/javascript' src="assets/js/jquery-migrate.min.js"></script>
    <style type="text/css">
        .recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
    </style>

    <style id='efek-ketik'>
        .efek-ketik
        {
            font-size: 50px;
            width: 100%;
            white-space:nowrap;
            overflow:hidden;
            -webkit-animation: animate 2s infinite alternate-reverse;
            animation: animate 2s infinite alternate-reverse;
        }
 
        @keyframes animate{
            0%   { opacity: 0; filter: blur(28px)}
            40%  { opacity: 0; }
            90%  { opacity: 1; }
        }
 
        @-webkit-keyframes animate{
            0%   { opacity: 0; filter: blur(28px)}
            10%  { opacity: 0; }
            90%  { opacity: 1; }
        }
    </style>
    <link rel="icon" href="assets/img/logo.png" sizes="32x32" />
    <link rel="icon" href="assets/img/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="assets/img/logo.png" />
    <meta name="msapplication-TileImage" content="http://blog.inofarma.com/wp-content/uploads/2019/08/cropped-favicon-3-270x270.png" />
</head>

<body class="post-template-default single single-post postid-112 single-format-standard wp-custom-logo  left-logo-right-menu right-sidebar">
    <?php
    session_start();
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['jabatan']==""){
        header("location:adm");
    }
    ?>
    <div id="preloader-background">
        <div id="spinners">
            <div id="preloader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Loncat ke konten</a>
    <header id="masthead" class="site-header" role="banner">        
        <div class="header-bottom">
            <div class="tg-container">
                <div class="logo">
                    <figure class="logo-image">
                        <a href="/apotek" class="custom-logo-link" rel="home">
                            <img width="250" height="90" src="assets/img/logo.png" class="custom-logo" alt="Aplikasi Apotek Terbaik Inofarma 2.0" srcset="assets/img/logo.png 350w, assets/img/logo.png 300w" sizes="(max-width: 350px) 100vw, 350px" />
                        </a>                                            
                    </figure>
                </div>
                <div class="site-navigation-wrapper">
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <div class="menu-toggle">
                            <i class="fa fa-bars"></i>
                        </div>
                        <div class="menu-blog-inofarma-container">
                            <ul id="primary-menu" class="menu">
                                <?php if($_SESSION['jabatan']=="Administrator"){
                                echo "<li id='menu-item-70' class='menu-item-has-children menu-item menu-item-type-custom menu-item-object-custom menu-item-70'><a href='#'>Master Data</a>
                                    <ul id='sub-menu' class='sub-menu'>
                                        <li class='menu-item'><a href='view/master_user.php'>Master User</a></li>
                                        <li class='menu-item'><a href='view/master_suplier.php'>Master Suplier</a></li>
                                        <li class='menu-item'><a href='view/master_obat.php'>Master Obat</a></li>
                                    </ul>
                                </li>";}
                                if($_SESSION['jabatan']=="Administrator" || $_SESSION['jabatan']=="Operator Gudang"){
                                echo "<li id='menu-item-70' class='menu-item-has-children menu-item menu-item-type-custom menu-item-object-custom menu-item-70'><a href='#''>Transaksi Obat</a>
                                    <ul id='sub-menu' class='sub-menu'>";
                                    if($_SESSION['jabatan']!="Operator Gudang"){
                                        echo "<li class='menu-item'><a href='view/trans_obat_kadaluarsa.php'>Obat Kadaluarsa
                                        </a></li>";
                                    }
                                        echo "<li class='menu-item'><a href='view/trans_penerimaan_obat.php'>Penerimaan Obat
                                        </a></li>
                                        <li class='menu-item'><a href='view/trans_permintaan_obat.php'>Permintaan Obat
                                        </a></li>";
                                    if($_SESSION['jabatan']!="Operator Gudang"){
                                        echo "<li class='menu-item'><a href='view/trans_obat_keluar.php'>Obat Keluar
                                        </a></li>";
                                    }
                                    echo "</ul>
                                </li>";
                                }
                                if($_SESSION['jabatan']=="Administrator" || $_SESSION['jabatan']=="Pemilik"){
                                echo "<li id='menu-item-70' class='menu-item-has-children menu-item menu-item-type-custom menu-item-object-custom menu-item-70'><a href='#'>Laporan</a>
                                    <ul id='sub-menu' class='sub-menu'>
                                        <li class='menu-item'><a href='view/laporan_obat_keluar.php'>Laporan Obat Keluar
                                        </a></li>
                                    </ul>
                                </li>";}
                                if($_SESSION['jabatan']=="Operator Apotek"){
                                echo "<li id='menu-item-70' class='menu-item-has-children menu-item menu-item-type-custom menu-item-object-custom menu-item-70'><a href='#'>Transaksi</a>
                                    <ul id='sub-menu' class='sub-menu'>
                                        <li class='menu-item'><a href='view/trans_permintaan_obat_apotek.php'>Transaksi Permintaan Obat Apotek
                                        </a></li>
                                    </ul>
                                </li>";}
                            echo "</ul>";
                            ?>
                        </div>
                    </nav><!-- #site-navigation -->
                </div>
                <div class="header-action-container">
                    <div class="search-wrap">
                        <div class="search-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <a href="adm/logout.php"><div class="search-box">Keluar</div></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div id="content" class="site-content">
        <div class="tg-container">
            <img class="efek-ketik aligncenter" style="padding-top: 50px; width:40%" src="assets/img/logo.png">
            <h1 style="text-align:center; color: #000000;">Hai, <?php echo $_SESSION['nama_lengkap']; ?></h1>
            <h4 style="text-align:center; color: #000000;">Anda masuk sebagai <?php echo $_SESSION['jabatan']; ?></h4>
        </div>
    </div>
    <script type='text/javascript' src="assets/js/flash.min.js"></script>
    <script type='text/javascript' src="assets/js/webfontloader.js"></script>
    <script type='text/javascript'>
        WebFont.load({google:{families:['Comfortaa:300:cyrillic,cyrillic-ext,devanagari,greek,greek-ext,khmer,latin,latin-ext,vietnamese,hebrew,arabic,bengali,gujarati,tamil,telugu,thai']}});
    </script>
</body>
</html>
