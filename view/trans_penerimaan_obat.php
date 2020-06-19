
<!DOCTYPE html>
<html lang="id-ID">
<head>

    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Apotek Buring Farma</title>
    <!-- <link rel='stylesheet' id='wp-block-library-css'  href="../assets/css/style.min.css" type='text/css' media='all' /> -->
    <link rel='stylesheet' id='font-awesome-css'  href="../assets/css/font-awesome.min.css" type='text/css' media='' />
    <link rel='stylesheet' id='flash-style-css'  href="../assets/css/style.css" type='text/css' media='all' />
    <!-- <link rel='stylesheet' id='flash-style-css'  href="../assets/css/web.css" type='text/css' media='all' /> -->
    <link rel='stylesheet' id='responsive-css'  href="../assets/css/responsive.min.css" type='text/css' media='' />
    <link rel='stylesheet'  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" type='text/css' media='' />
    <link rel='stylesheet'  href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" type='text/css' media='' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <style id='kirki-styles-flash_config-inline-css' type='text/css'>
        body{font-family:Comfortaa, "Comic Sans MS", cursive, sans-serif;font-weight:300;}
    </style>
    <script type='text/javascript' src="../assets/js/jquery.js"></script>
    <script type='text/javascript' src="../assets/js/jquery-migrate.min.js"></script>
    <script type='text/javascript' src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type='text/javascript' src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type='text/javascript' src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <style type="text/css">
        .recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}
    </style>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="icon" href="../assets/img/logo.png" sizes="32x32" />
    <link rel="icon" href="../assets/img/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="../assets/img/logo.png" />
</head>

<body class="post-template-default single single-post postid-112 single-format-standard wp-custom-logo  left-logo-right-menu right-sidebar">
    <?php
    session_start();
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['jabatan']==""){
        header("location:../adm");
    }else if($_SESSION['jabatan']!="Operator Gudang" && $_SESSION['jabatan']!="Administrator"){
        header("location:..");
    }
    ?>
    
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Loncat ke konten</a>
    <header id="masthead" class="site-header" role="banner">        
        <div class="header-bottom">
            <div class="tg-container">
                <div class="logo">
                    <figure class="logo-image">
                        <a href="/apotek" class="custom-logo-link" rel="home">
                            <img width="250" height="90" src="../assets/img/logo.png" class="custom-logo" alt="Aplikasi Apotek Terbaik Inofarma 2.0" srcset="../assets/img/logo.png 350w, ../assets/img/logo.png 300w" sizes="(max-width: 350px) 100vw, 350px" />
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
                                        <li class='menu-item'><a href='master_user.php'>Master User</a></li>
                                        <li class='menu-item'><a href='master_suplier.php'>Master Suplier</a></li>
                                        <li class='menu-item'><a href='master_obat.php'>Master Obat</a></li>
                                    </ul>
                                </li>";}
                                if($_SESSION['jabatan']=="Administrator" || $_SESSION['jabatan']=="Operator Gudang"){
                                echo "<li id='menu-item-70' class='menu-item-has-children menu-item menu-item-type-custom menu-item-object-custom menu-item-70'><a href='#''>Transaksi Obat</a>
                                    <ul id='sub-menu' class='sub-menu'>";
                                    if($_SESSION['jabatan']!="Operator Gudang"){
                                        echo "<li class='menu-item'><a href='trans_obat_kadaluarsa.php'>Obat Kadaluarsa
                                        </a></li>";
                                    }
                                        echo "<li class='menu-item'><a href='trans_penerimaan_obat.php'>Penerimaan Obat
                                        </a></li>
                                        <li class='menu-item'><a href='trans_permintaan_obat.php'>Permintaan Obat
                                        </a></li>";
                                    if($_SESSION['jabatan']!="Operator Gudang"){
                                        echo "<li class='menu-item'><a href='trans_obat_keluar.php'>Obat Keluar
                                        </a></li>";
                                    }
                                    echo "</ul>
                                </li>";
                                }
                                if($_SESSION['jabatan']=="Administrator" || $_SESSION['jabatan']=="Pemilik"){
                                echo "<li id='menu-item-70' class='menu-item-has-children menu-item menu-item-type-custom menu-item-object-custom menu-item-70'><a href='#'>Laporan</a>
                                    <ul id='sub-menu' class='sub-menu'>
                                        <li class='menu-item'><a href='laporan_obat_keluar.php'>Laporan Obat Keluar
                                        </a></li>
                                    </ul>
                                </li>";}
                                if($_SESSION['jabatan']=="Operator Apotek"){
                                echo "<li id='menu-item-70' class='menu-item-has-children menu-item menu-item-type-custom menu-item-object-custom menu-item-70'><a href='#'>Transaksi</a>
                                    <ul id='sub-menu' class='sub-menu'>
                                        <li class='menu-item'><a href='trans_permintaan_obat_apotek.php'>Transaksi Permintaan Obat Apotek
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
                        <a href="../adm/logout.php"><div class="search-box">Keluar</div></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div id="content" class="site-content">
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="input"){
                echo"<div class='alert alert-success alert-dismissible' style='text-align: center;'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses!</strong> Berhasil ditambahkan.</div>";
            }
            else if($_GET['pesan']=="update"){
                echo"<div class='alert alert-success alert-dismissible' style='text-align: center;'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses!</strong> Berhasil diupdate.</div>";
            }
            else if($_GET['pesan']=="delete"){
                echo"<div class='alert alert-success alert-dismissible' style='text-align: center;'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Sukses!</strong> Berhasil dihapus.</div>";
            }
            else if($_GET['pesan']=="gagal"){
                echo"<div class='alert alert-danger alert-dismissible' style='text-align: center;'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Gagal!</strong> Terjadi kesalahan.</div>";
            }
            else if($_GET['pesan']=="gagalukuran"){
                echo"<div class='alert alert-danger alert-dismissible' style='text-align: center;'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Gagal!</strong> Ukuran gambar terlalu besar.</div>";
            }
            else if($_GET['pesan']=="gagaleks"){
                echo"<div class='alert alert-danger alert-dismissible' style='text-align: center;'><a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Gagal!</strong> Jenis file yang diperbolehkan hanya png dan jpg.</div>";
            }
        }
        ?>
        <h1 style="text-align:center; font-weight: bold; padding-bottom: 30px;">PENERIMAAN OBAT</h1>
        <div class="tg-container">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Obat</th>
                        <th>Jumlah Obat</th>
                        <th>Suplier</th>
                        <th>Tanggal Kadaluarsa</th>
                        <th>Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include '../koneksi/conn.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from penerimaan_obat");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['tanggal']; ?></td>
                        <td><?php echo $d['nama_obat']; ?></td>
                        <td><?php echo $d['jumlah_obat']; ?></td>
                        <td><?php echo $d['suplier']; ?></td>
                        <td><?php echo $d['tanggal_kadaluarsa']; ?></td>
                        <td><?php echo $d['harga']; ?></td>
                        <td><button type="button" class="btn btn-<?php if ($d['status']=="1") echo 'success'; else echo 'info';?> btn-xs" data-toggle="modal" data-target="#kirim<?php echo $d['id']; ?>" <?php if ($d['status']=="1") echo 'disabled'; ?>><?php if ($d['status']=="1") echo 'sudah digudang'; else echo 'kirim ke gudang';?></button>
                        </td>
                    </tr>
                    <!-- modal tambah -->
                    <div class="modal fade" id="kirim<?php echo $d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="../action/update_penerimaan_obat.php" enctype="multipart/form-data">
                                        <input type="hidden" class="form-control" id="recipient-name" name="id" value="<?php echo $d['id']; ?>">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Nama Obat:</label>
                                            <input type="text" class="form-control" id="recipient-name" value="<?php echo $d['nama_obat']; ?>" disabled>
                                            <input type="hidden" class="form-control" id="recipient-name" name="nama_obat" value="<?php echo $d['nama_obat']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Jenis Obat:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="jenis_obat">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Satuan:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="satuan" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Tanggal Terima:</label>
                                            <input type="date" class="form-control" id="recipient-name" value="<?php echo $d['tanggal']; ?>" disabled>
                                            <input type="hidden" class="form-control" id="recipient-name" name="tanggal_terima" value="<?php echo $d['tanggal']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Tanggal Kadaluarsa:</label>
                                            <input type="date" class="form-control" id="recipient-name" name="tanggal_kadaluarsa">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Stok:</label>
                                            <input type="text" class="form-control" id="recipient-name" onkeypress="return hanyaAngka(event)" value="<?php echo $d['jumlah_obat']; ?>" disabled>
                                            <input type="hidden" class="form-control" id="recipient-name" name="stok" onkeypress="return hanyaAngka(event)" value="<?php echo $d['jumlah_obat']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Suplier:</label>
                                            <select class="btn form-control" style="border: 1px solid #ccc;height: 36px;" name="suplier">
                                            <option value="<?php echo $d['suplier']; ?>"><?php echo $d['suplier'];?></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">No. Faktur:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="no_faktur" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Tanda Terima:</label>
                                            <input type="file" class="form-control" id="recipient-name" name="tanda_terima" accept="image/x-png,image/jpg,image/jpeg">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Harga:</label><br/>
                                            Rp <input type="text" class="form-control" id="recipient-name" name="harga" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="submit" value="TAMBAH" name="tambah" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script type='text/javascript' src="../assets/js/flash.min.js"></script>
    <script type='text/javascript' src="../assets/js/webfontloader.js"></script>
    <script type='text/javascript'>
        WebFont.load({google:{families:['Comfortaa:300:cyrillic,cyrillic-ext,devanagari,greek,greek-ext,khmer,latin,latin-ext,vietnamese,hebrew,arabic,bengali,gujarati,tamil,telugu,thai']}});
    </script>
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script type="text/javascript">
        $('.dropdown-toggle').dropdown()
    </script>
    <script type="text/javascript">
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }
    </script>
</body>
</html>
