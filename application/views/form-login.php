<section class="pb-4">
      <div class="bg white border rounded-5">
      <h1 style="text-align: center; margin-top: 30px">Login</h1>

        <section class="w-100 p-4 d-flex justify-content-center pb-4">
          <form name="formlogin" id="formlogin" action="<?php echo base_url('clogin/proseslogin');?>" style="width: 22rem">
            <!-- Input email disini -->
            <div class="form-outline mb-4">
              <label class="form-label" style="margin-left: 0px;">Email</label>
              <input type="email" name="Email" id="Email" placeholder="your@mail.com" required class="form-control">
              <div class="form-notch">
                <div class="form-notch-leading" style="width: 9px;"></div>
                <div class="form-notch-middle" style="width: 88.8px;"></div>
                <div class="form-notch-trailing"></div>
            </div>
            <br>
            <!-- Input password disini -->
            <div class="form-outline mb-4">
              <label class="form-label" style="margin-left: 0px;">Password</label>
              <input type="password" name="Password" id="Password" placeholder="password" required class="form-control">
              <div class="form-notch">
                <div class="form-notch-leading" style="width: 9px;"></div>
                <div class="form-notch-middle" style="width: 88.8px;"></div>
                <div class="form-notch-trailing"></div>
            </div>
            <br>
            <!-- Submit button -->
            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-block mb-4 text-center contact php-email-form">Masuk</button>
            </div>            
            <!-- Register buttons -->
            <div class="text-center">
              <p>Bukan member? <a href="<?php echo base_url('cregister/formregister');?>">Daftar disini.</a></p>
            </div>
          </form>
        </section>
      </div>
  </section>