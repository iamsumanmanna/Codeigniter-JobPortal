

<?php  include_once('header.php'); ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>login Here</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
     <div class="container my-5 py-5 z-depth-1">

 
    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">


      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-md-6">

          <!-- Default form register -->
          <form class="text-center" action="<?php echo site_url().'Log_job/create';?>" method="post">

            <p class="h4 mb-4"style="font-family: 'Comic Neue', cursive ; font-size: 30px;" >Login Here</p>

            <div class="form-row mb-4">
              <div class="col">
                <!-- First name -->
                <input type="text" name="firstname" class="form-control" placeholder="First name" style="font-family: 'Comic Neue', cursive;" value="<?php echo set_value('firstname');?>">
                  <?php echo form_error('firstname');?>
              </div>
              <div class="col">
                <!-- Last name -->
                <input type="text" name="lastname" class="form-control" placeholder="Last name" style="font-family: 'Comic Neue', cursive;" value="<?php echo set_value('lastname');?>">
                <?php echo form_error('lastname');?>
              </div>
            </div>

            <!-- E-mail -->
            <input type="email" name="email" class="form-control mb-4" placeholder="E-mail" style="font-family: 'Comic Neue', cursive;" value="<?php echo set_value('email');?>">
             <?php echo form_error('email');?>

            <!-- Password -->
            <input type="password"  name="password" class="form-control" placeholder="Password"
              aria-describedby="defaultRegisterFormPasswordHelpBlock" style="font-family: 'Comic Neue', cursive;" value="<?php echo set_value('password');?>">
               <?php echo form_error('password');?>
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4" style="font-family: 'Comic Neue', cursive;">
              At least 8 characters and 1 digit
            </small>

   

            <!-- Newsletter -->
            

            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" type="submit" name="submit" style="font-family: 'Comic Neue', cursive;">Sign in</button>

            <!-- Social register -->
            <p>or sign up with:</p>

                <a href="#" class="mx-1" role="button"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="mx-1" role="button"><i class="fab fa-twitter"></i></a>
                <a href="#" class="mx-1" role="button"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="mx-1" role="button"><i class="fab fa-github"></i></a>

            <hr>

            <!-- Terms of service -->
            <p>By clicking
              <em>Sign up</em> you agree to our
              <a href="" target="_blank">terms of service</a>

          </form>
          <!-- Default form register -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>

 
  
  


<!-- end form-->
<?php include_once('footer.php');?>


</body>
</html>