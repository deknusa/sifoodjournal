<html>
<head>
	<title>Sistem Food Jurnaling</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<body>
	
    
<nav class="navbar navbar-expand-sm bg-secondary navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="<?php echo base_url();?>">Food Jurnaling</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo base_url();?>">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">MasterData</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="#">Laporan</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Proses</a>
          <ul class="dropdown-menu ">
            <li><a class="dropdown-item text-dark" href="<?php echo base_url(''); ?>">Ubah Akun</a></li>
            <li><a class="dropdown-item text-dark" href="javascript:void(0)" onclick="logout();">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
Selamat Datang
<?php
    echo $this->session->userdata('Username');
?>
    
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
    
 <!-- AJAX -->
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

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</html>