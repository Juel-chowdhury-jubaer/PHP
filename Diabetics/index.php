    <?php 
      $currentPage='index';
      require('include/header.php');
      require_once "functions.php";
      $registration=new operation();
    ?>

    <section class="button-section clear">
      <h2>Get prescription for controlling diabetics & Get meal plan</h2>
      <a href="prescriptions.php"><input type="button" value="Take a test"/></a>
    </section>

  	<section class="content-section template clear">
      <div class="content-left clear">
        <h2>For more query </h2>
        <ul class="submenu">
          <li><a href="Questions.php">Important Questions</a></li>
          <li><a href="contactus.php">Contact US</a></li>
          <li><a href="aboutus.php">About US</a></li>
        </ul>
      </div>
      <div class="content-mid clear">
        <ul>
          <li> 
              Diabetes is a chronic condition associated with abnormally high levels of sugar (glucose) in the blood. Insulin produced by the pancreas lowers blood glucose. Absence or insufficient production of insulin, or an inability of the body to properly use insulin causes diabetes.
            Diabetes can be cured, but not by targeting blood sugar
            Increased blood sugar is only a symptom, not the root cause. Treating symptoms is not sufficient to reverse the condition. 
        </li>
          <li>
             Our aim is to change your lifestyle for controlling diabetes and leading a safe diabetic life.
            So you can take a test from the top button.
           </li>
        </ul>
        <h2></h2>
<h2></h2>
<h2>
  
</h2>

     

      </div>
      <div class="content-right clear">
        <h2>Registration Form</h2>
        <p>
              <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                  $name=$_POST['name'];
                  $email=$_POST['email'];
                  $password=$_POST['password'];
                  //echo"thik ache";
                  
                  if(empty($name) or empty($email) or empty($password)){
                    echo"<span style='color:red;'>You must fill all the box</span>";
                  }else{
                      $register= $registration->registerUser($name,$email,$password);
                    if($register){
                      echo"<span style='color:green'>You have successfully registered</span>";
                    }
                    else
                    {
                      echo'<span style="color:red">E-mail already exists</span>';
                    }
                }
              }
              ?>
            </p>
        <form method="post">
          <table>
          
            <tr>
            <td>Name</td>
            <td><input type="text" name="name" placeholder="Enter Name..." /></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><input type="email" name="email" placeholder="Enter email..." /></td>
            </tr>
            <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="Enter password..." /></td>
            </tr>
            <tr>
              <td></td>
              <td>
                <input type="reset" value="Reset" />
                <input type="submit" value="Submit" />
              </td>
            </tr>
          </table>
        </form>
      </div>
    </section>

    <section class="button-section1 clear">
      <h2>Check your weight is healthy or not and get prescription for gaining proper weight</h2>
      <a href="weightandheight.php"><input type="button" value="Check"/></a>
    </section>

    <?php
      require('include/footer.php');
    ?>