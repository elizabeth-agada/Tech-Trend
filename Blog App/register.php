<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      <link href="css/style2.css" rel="stylesheet" type="text/css">

    <title>registration</title>
  </head>
    <body>
      
            <?php
           

            
            
            ?>
        
      

      <div class="header">
        
        <h3>Sign Up</h3>
        <p>Already got an account? <a href="#loginform" data-toggle="modal" 
        data-dismiss="modal">Login Here</a></p>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-6 col-sm-6">
              <form  method="post" name="signup">
                      <br>
                <div class="form-group">
                  <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required="required"><br>
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div><br>
                <div class="form-group">
                  <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="required">
                </div><br>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required">
                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div><br>
                <div class="form-group">
                  <input type="submit" value="Sign Up" name="create" id="submit" class="btn btn-danger">
                </div><br>
                  
        
      </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
     

        
        
         <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>
</html>