<!-- 
    Peter Welter
    2/12/2020
    display results to user after all data passes
    thankyou form
-->
<h1> Thank you for suscribing! </h1>

    <br>

<ul>
    
    <?php

      foreach ($_POST as $key => $value) //Loop through the post array.
      {
          echo("<li>".$_POST[$key] ."</li>"); //Key is what hold the values from the filter input on the subscribe form
          //echo($name);//Was testing to see if my echo syntax was correct

      }//end of for each loop
    
    ?>
</ul>


