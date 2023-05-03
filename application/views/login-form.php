<!-- Javascript -->
<script language="javascript">
	function insertData()
	{
		var Email=$('#Email').val();
		if (Email=="")
		{
			alert ("Email masih kosong");
			$('#Email').focus();
			return false;	
		}	
		
		var Password=$('#Password').val();
		if (Password=="")
		{
			alert ("Password masih kosong");
			$('#Password').focus();
			return false;	
		}
		
		$('#formlogin').submit();
			
	}
</script>
<!-- End Javascript -->

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Food Journal<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
          <li></li>
          <li><a href="#">Masuk</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->


      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <h1>Register</h1>

          <div class="col-lg-8">
            <form name="formlogin" id="formlogin" action="<?php echo base_url('clogin/proseslogin');?>" method="post" role="form" class="php-email-form">

              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Email</label>
                  <input type="email" name="Email" class="form-control" id="Email" placeholder="your@mail.com" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Password</label>
                  <input type="password" class="form-control" name="Password" id="Password" placeholder="password" required>
                </div>
              </div>
              <!-- <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div> -->
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" onclick=insertData()>Masuk</button></div>
            </form>
          </div><!-- End Register Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->