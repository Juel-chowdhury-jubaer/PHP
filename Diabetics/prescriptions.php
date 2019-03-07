<?php 
      $currentPage='prescriptions';
      require('include/header.php');
      require('functions.php');
      $prescribe_holder=new operation();
    ?>

    <section class="test-section">
      <div class="main-test-section">
    	<table>
      <form id="test_form" name="test_form" method="post">
    		<tr>
    			<td>Select Gender</td>
    			<td><input type="radio" name="gender" value="male" checked> Male
  					<input type="radio" name="gender" value="female"> Female<br></td>
    		</tr>
        <tr>
          <td>Age</td>
          <td><input type="text" name="age" id="age" placeholder="Enter Age in year" /></td>
        </tr>
        <tr>
          <td>Height</td>
          <td>
          <input type="text" name="foot" id="height1" placeholder="enter the feet" />
          <input type="text" name="inch" id="height2" placeholder="enter the Inches" />
        </td>
        </tr>
        <tr>
          <td>Weight</td>
          <td><input type="text" name="weight" id="weight" placeholder="Enter Weight in KG" /></td>
        </tr>
        <tr>
          <td>Amount of effort</td>
          <td><select id="effort">
            <option value="1.2">Light Work</option>
            <option value="1.375">Light exercise (1-3 days’ sports per week)</option>
            <option value="1.55">Medium working(3-5 days’ sports per week)</option>
            <option value="1.725">Heavy labors(6-7 days’ sports in a week)</option>
            <option value="1.9">Too much toil(Rickshaw puller or laborer’s work)</option>
          </select></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="button" value="Your Calorie" onclick="calculate();" /></td>
        </tr>
        </form>
    	</table>
      <form method="post">

        <span id="result" name="result"></span>
        <span class="prescription_show">
          <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                  $value=$_POST['pres_value'];
                  echo "<h2> according to the calculated calorie ".$value." .<br> the meal plan is:</h2>";
                  $get_prescription=$prescribe_holder->get_prescription($value);
                  echo "<span class='prescribed_output'>".$get_prescription['prescriptions'];
                  echo"</span>";
              }
              ?>
        </span>
      </form>
      </div>
    </section>
<?php
      require('include/footer.php');
    ?>