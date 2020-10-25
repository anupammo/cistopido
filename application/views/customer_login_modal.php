  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">STOPIDO Login</h5>
          <button type="button" class="close shadow-none" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <!-- <label for="exampleInputEmail1">Email address</label> -->
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Email/Mobile">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <!-- <label for="exampleInputPassword1">Password</label> -->
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <!-- <button type="submit" class="btn btn-primary float-right">Submit</button> -->
            <div class="form-group">
              <a href="<?php echo base_url(); ?>index.php/welcome/cart" class="btn btn-warning px-5">Submit</a>
            </div>
          </form>
          <p>
            <a href="" class="btn">Forgot Password?</a>
            <br>
            <a href="customer_reg.html" class="btn">New user, create account</a>
          </p>
        </div>
      </div>
    </div>
  </div>