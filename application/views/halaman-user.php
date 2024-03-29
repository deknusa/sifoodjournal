<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="<?php echo base_url('application/assets/dashboard/css/styles.css');?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?php echo base_url();?>">Food Journal.</a>
            <!-- Sidebar Toggle-->
            <!-- <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> -->
             Navbar Search
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="<?php echo base_url('cSearch_User/search'); ?>" method="get">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" name="keyword" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button> -->
                </div>
            </form> 
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!-- <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                        <!-- <li><hr class="dropdown-divider" /></li> -->
                        <li><a class="dropdown-item" href="javascript:void(0)" onclick="logout();"><i class="fas fa-right-from-bracket"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="true" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Pencatatan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse show" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url('cMakan/formMakan'); ?>">Makan</a>
                                    <a class="nav-link" href="<?php echo base_url('cMood/formMood'); ?>">Mood</a>
                                    <a class="nav-link" href="<?php echo base_url('cGejala/formGejala'); ?>">Gejala</a>
                                    <a class="nav-link" href="<?php echo base_url('cBAB/formBAB'); ?>">BAB</a>
                                    <a class="nav-link" href="<?php echo base_url('cTidur/formTidur'); ?>">Tidur</a>
                                    <a class="nav-link" href="<?php echo base_url('cCatatan/formCatatan'); ?>">Catatan Harian</a>
                                   
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Pencarian
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url('cSearchMood/searchBar'); ?>">Pencarian Mood</a>
                                    <a class="nav-link" href="<?php echo base_url('cSearchGejala/searchBar'); ?>">Pencarian Gejala</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="<?php echo base_url();?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-house"></i></div>
                                Laman Depan
                                <div></i></div>
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $this->session->userdata('NamaLengkap');?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    
                    <?php
                        if(empty($konten))
                        {
                            echo "";	
                        }
                        else
                        {
                            echo $konten;	
                        }
                    ?>

                    <?php
                        if(empty($table))
                        {
                            echo "";	
                        }
                        else
                        {
                            echo $table;	
                        }
                    ?>
            </div>  
        </div>
        <div id="script"></div>
        <script src="<?php echo base_url(); ?>/jquery/app.js"></script>
        <script language="javascript">
            var site = "<?php echo base_url()?>index.php/";
            var loading_image_large = "<?php echo base_url()?>gambar/loading_large.gif";
        </script>   
        <script language='javascript'>
        function logout(){
            if (confirm("Apakah yakin keluar?")){
                window.open("<?php echo base_url()?>clogin/logout","_self");
            }
        }
        </script>    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('application/assets/dashboard/js/script.js');?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('application/assets/dashboard/assets/demo/chart-area-demo.js');?>"></script>
        <script src="<?php echo base_url('application/assets/dashboard/assets/demo/chart-bar-demo.js');?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('application/assets/dashboard/js/datatables-simple-demo.js');?>"></script>

    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</html>
