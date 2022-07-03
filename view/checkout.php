<?php require_once("shared/header.php") ?>
<section class="container my-5 py-5">


    <form action="#" class="form-checkout">
      <h1 class="text-center">Checkout Form</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Intro"
        ></div>
        <div class="progress-step" data-title="Contact"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="username">Name</label>
          <input class="input-checkout" required type="text" name="username" id="username" required/>
        </div>
        <div class="input-group">
          <label for="position">Phone</label>
          <input class="input-checkout" type="text" name="position" id="position" required/>
        </div>
        <div class="input-group">
          <label for="position">Email</label>
          <input class="input-checkout" type="email" name="position" id="position" required/>
        </div>
        <div class="input-group">
          <label for="position">City</label>
          <input class="input-checkout" type="text" name="position" id="position" required/>
        </div>
        <div class="input-group">
          <label for="position">Address</label>
          <input class="input-checkout" type="text" name="position" id="position" required/>
        </div>
    
        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="password">Password</label>
          <input class="input-checkout" type="password" name="password" id="password" />
        </div>
        <div class="input-group">
          <label for="confirmPassword">Confirm Password</label>
          <input class="input-checkout"
            type="password"
            name="confirmPassword"
            id="confirmPassword"
          />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <input class="input-checkout" id="checkout-submit" type="submit" value="Submit" class="btn" />
        </div>
      </div>
    </form>
    
</section>
<script src="<?php $_SERVER['DOCUMENT_ROOT']?>/javascript/checkout.js"></script>
<?php require_once("shared/footer.php") ?>