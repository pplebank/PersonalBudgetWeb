<?php include 'includes/navBarHead.php';?>
<?php include 'includes/headers.php';?>

   <!-- MODAL SIGN UP -->
    <div class="modal fade" id="modalSignUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="signUpForm" action="register.php" method="post">
                      <div class="form-group">
                        <label for="usernameSignUp">Username</label>
                        <input type="text" class="form-control my-2" id="usernameSignUp" name="username" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <label for="emailSignUp">Email address</label>
                        <input type="email" class="form-control my-2" id="emailSignUp" name="email" placeholder="Email address">

                      </div>
                      <div class="form-group">
                        <label for="passwordSignUp">Password</label>
                        <input type="password" class="form-control my-2" id="passwordSignUp" name="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="passwordRepeatSignUp">Repeat password</label>
                        <input type="password" class="form-control my-2"id="passwordRepeatSignUp" name="password2" placeholder="Repeat password">
                      </div>
                    </form>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="signUpForm" form="signUpForm" class="btn btn-primary">Sign Up</button>
            </div>
          </div>
        </div>
      </div>

       <!-- LOGIN-->
      <main id="login" class="my-auto">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-8 mx-auto">
              <div class="card">
                <div class="card-header">
                  <h4>Account Login</h4>
                </div>
                <div class="card-body">
                  <form action="login.php" id="loginForm"  method="post">
                    <div class="form-group">
                      <label for="loginInput">Login</label>
                      <input type="text" class="form-control my-2" name="username" id="loginInput">
                    </div>
                    <div class="form-group">
                      <label for="passwordLogin">Password</label>
                      <input type="password" class="form-control my-2" name="password" id="passwordLogin">
                    </div>
                    <div class="form-check my-2">
                        <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                        <label class="form-check-label" for="rememberMe">
                          Remember me
                        </label>

                      </div>
                      <div class="d-flex justify-content-center">
                    <input type="submit" name="do_login" form="loginForm" class="btn btn-primary col-8 my-2">
                      </div>
                  </form>
                  <div class="d-flex justify-content-center my-2">
                  <a href="#"> Forgot password?</a>
                </div>
                </div>
                <div class="card-footer d-flex justify-content-center py-3">
                   <span> Don't have account?</span>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalSignUp" >Sign up here</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <?php include 'includes/footer.php';?>