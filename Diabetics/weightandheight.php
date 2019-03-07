<?php 
      $currentPage='weightandheight';
      require('include/header.php');
      include "functions.php";
      $bmi_user=new operation();
    ?>

    <section class="weightclass">
      <div class="weightclass1">
      <form method="post">
        <table class="bmi_calculation">
          <tr>
            <td class="td1w">Weight</td>
            <td class="input1 td1w"><input type="type" name="weight" placeholder="Enter the Weight in Kg"> kg </td>
          </tr>
          <tr>
            <td class="td1w">Height</td>
            <td class="input1 td1w">
              <input type="text" name="hght_ft" placeholder="Foot" /> ft
              <input type="text" name="hght_inch" placeholder="Inch" /> inch
            </td>
          </tr>
          <tr>
            <td></td>
            <td class="input1"><input type="submit" name="submit" value="Calculate BMI"></td>
          </tr>
        </table>
        <?php
        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
          $weight=$_POST['weight'];
          $height_foot=$_POST['hght_ft'];
          $height_inch=$_POST['hght_inch'];
          if(!empty($weight) && !empty($height_foot) && !empty($height_inch)){
          $total_inch=($height_foot*12)+$height_inch;
          $total_meter=$total_inch/39.3701;
          $calculation=$weight/($total_meter*$total_meter);
          echo"<pre>Your BMI Value= ".round($calculation)."</pre>";
          $get_bmi_all=$bmi_user->bmi_suggestion($calculation);
          echo"<pre>According to the BMI you are ".$get_bmi_all['type']."</pre>";
          echo "<h2>Suggestion for you</h2>"; 
          echo"<pre>".$get_bmi_all['suggestions']."</pre>";
          $lowest_weight=18.6*$total_meter*$total_meter;
          $highest_weight=24.9*$total_meter*$total_meter;
          $ideal_weight=($lowest_weight+$highest_weight)/2;
          if($weight<$ideal_weight){
            $weight_diff=round($ideal_weight-$weight);
            $msg="<span style='color:red;'>You need to increase the amount of Weight ".$weight_diff."KG to balance.</span>";
            
          }
          elseif($weight>$ideal_weight){
            $weight_diff=round($weight-$ideal_weight);
            $msg="<span style='color:blue;'>You need to lose the amount of Weight ".$weight_diff."KG to balance.</span>";
          }elseif($weight==$ideal_weight){
            $msg="<span style='color:green;'>Your weight is already balanced with your height.</span>";
          }
          ?>
          <h2 class="tdh2"> weight Information</h2>
          <table border="1" style="text-align: center;">
            <tr>
              <th class="td12">Category</th>
              <th class="td12">Value</th>
            </tr>
            <tr>
              <td class="td1">Your weight</td>
              <td class="td1"><?php echo $weight; ?></td>
            </tr>
            <tr>
              <td class="td1">Max Weight</td>
              <td class="td1"><?php echo round($highest_weight); ?></td>
            </tr>
            <tr>
              <td class="td1">Minimum Weight</td>
              <td class="td1"><?php echo round($lowest_weight); ?></td>
            </tr>
            <tr>
              <td class="td1">Ideal Weight</td>
              <td class="td1"><?php echo round($ideal_weight); ?></td>
            </tr>
            <tr>
              <td class="td1">Our Suggestions</td>
              <td class="td1"><?php echo $msg; ?></td>
            </tr>
          </table>

        <?php }else{
          echo"<span class='err_msg'>Fill all the boxes.</span>";
        }

        ?>
        <?php }?>

      </form>
      </div>
    </section>
    
<?php
      require('include/footer.php');
    ?>