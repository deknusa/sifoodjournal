<!-- Javascript -->
<script language="javascript">
	function insertData()
	{
		var NamaLengkap=$('#NamaLengkap').val();
		if (NamaLengkap=="")
		{
			alert ("Nama lengkap masih kosong");
			$('#NamaLengkap').focus();
			return false;	
		}	
		
		var JenisKelmin=$('#JenisKelmin').val();
		if (JenisKelmin=="")
		{
			alert ("Jenis Kelamin masih kosong");
			$('#JenisKelmin').focus();
			return false;	
		}

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
		
		$('#formregister').submit();
			
	}
</script>
<!-- End Javascript -->

      <!-- ======= Register Section ======= -->
      <section id="contact" class="contact" style="height: 700px;">
      <div class="container" data-aos="fade-up">

        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <h1 style="text-align: center; margin-top: 30px">Register</h1>
              <form name="formregister" id="formregister" action="<?php echo base_url('cregister/procregister');?>" method="post" role="form" class="php-email-form position-relative" style="z-index:1; position: relative;">
  
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="NamaLengkap" class="form-control" id="NamaLengkap" placeholder="john appleased" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label>Jenis Kelamin</label>
                    <!-- <input type="text" class="form-control" name="JenisKelamin" id="JenisKelamin" placeholder="Gender" required> -->
                    <select class="form-select" id="JenisKelamin" name="JenisKelamin">
                       <option>PILIH</option>
                       <option>Laki-Laki</option>
                       <option>Perempuan</option>
                    </select>
                  </div>
                </div>
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
                <div class="text-center"><button type="submit" onclick=insertData()>Daftar</button></div>
              </form>
            </div><!-- End Register Form -->
        </div>

        </div>

      </div>
    </section><!-- End Register Section -->