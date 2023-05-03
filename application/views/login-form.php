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


      <!-- ======= Login Section ======= -->
      <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <h1 style="text-align: center; padding-top: 30px;">Login</h1>

          <div class="col-lg-8">
            <form name="formlogin" id="formlogin" action="<?php echo base_url('clogin/proseslogin');?>" method="post" role="form" class="php-email-form">

              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Email</label>
                  <input type="text" name="Email" class="form-control" id="Email" placeholder="your@mail.com" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label>Password</label>
                  <input type="password" class="form-control" name="Password" id="Password" placeholder="password" required>
                </div>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" onclick=insertData()>Masuk</button></div>
            </form>
          </div><!-- End Login Form -->

        </div>

      </div>
    </section><!-- End Login Section -->

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


      <!-- ======= Login Section ======= -->
      <section id="contact" class="contact" style="height: 500px;">
      <div class="container" data-aos="fade-up">

        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
              <h1 style="text-align: center; margin-top: 30px;">Login</h1>
              <form name="formlogin" id="formlogin" action="<?php echo base_url('clogin/proseslogin');?>" method="post" role="form" class="php-email-form position-relative" style="z-index:1; position: relative;">
  
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
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" onclick=insertData()>Masuk</button></div>
              </form>
            </div><!-- End Login Form -->
  
          </div>
        </div>

      </div>
    </section><!-- End Login Section -->