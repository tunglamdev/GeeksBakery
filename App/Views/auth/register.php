
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
            <form name="registerForm" action="<?= DOCUMENT_ROOT?>/accounts/signup" method="POST" enctype="multipart/form-data" onsubmit="return checkSignUp()">

              <div class="form-floating mb-3">
                <input name="name" type="text" class="form-control" id="floatingInputUsername" placeholder="myusername" onchange="checkName(this.value)" require autofocus>
                <label for="floatingInputUsername">Name<b style="color: red">(*)</b></label>
                <p id="checkName" style="display: none ; color: red">Please enter your name</p>
              </div>

              <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com" onchange="checkEmailAddress(this.value)" require>
                <label for="floatingInputEmail">Email address<b style="color: red">(*)</b></label>
                <p id="checkEmail" style="display: none ; color: red">Please enter your email</p>
                <p id="checkEmailExist" style="display: none ; color: red">Email is already exist</p>
              </div>

              <hr>

              <div class="form-floating mb-3">
                <input name="password"type="password" class="form-control" id="floatingPassword" placeholder="Password" require>
                <label for="floatingPassword">Password<b style="color: red">(*)</b></label>
                <p id="checkPassword" style="display: none ; color: red">Please enter your password</p>
              </div>

              <div class="form-floating mb-3">
                <input name="re-password" type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Confirm Password" require>
                <label for="floatingPasswordConfirm">Confirm Password<b style="color: red">(*)</b></label>
                <p id="checkPrePassword" style="display: none ; color: red">Password is wrong or invalid</p>
              </div>

              <hr>

              <div class="form-floating mb-3">
                <input name="phone" type="text" class="form-control" id="floatingInputPhone" placeholder="myusername" require>
                <label for="floatingInputUsername">Phone number<b style="color: red">(*)</b></label>
                <p id="checkPhone" style="display: none ; color: red">Please enter your phone number</p>
              </div>
              <div class="form-floating mb-3">
                <input name="address" type="text" class="form-control" id="floatingInputAddress" placeholder="myusername" require>
                <label for="floatingInputUsername">Address<b style="color: red">(*)</b></label>
                <p id="checkAddress" style="display: none ; color: red">Please enter your address</p>
              </div>

              <hr>

              <div class="form-floating mb-3">
                <p style="margin-bottom: 5px">Avatar:</p>
                <input name="avatar" type="file">
              </div>

              <hr>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
              </div>

              <a class="d-block text-center mt-2 small" href="<?= DOCUMENT_ROOT?>/accounts">Have an account? Sign In</a>

              <hr class="my-4">

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-google me-2"></i> Sign up with Google
                </button>
              </div>

              <div class="d-grid">
                <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>