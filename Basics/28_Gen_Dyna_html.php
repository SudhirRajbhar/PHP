<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="POST">
           Enter Your Fav Color: <input type="text" name="favcolor">
           <input type="submit" name="submit" value="Check Now">
        </form>

        <p> My Fav color is
            <?php
               if(isset($_POST['submit'])){
                   $favcolor = $_POST['favcolor'];
                   //echo $favcolor;
                   switch($favcolor){
                     case "blue": echo'your fav color is Blue';
                          break;   
                     case "red": echo'your fav color is Red';
                          break; 
                     case "green": echo'your fav color is Green';
                          break; 
                     default: echo 'Sorry, I am not sure about your fav color.';
                }

               }
            ?>
        </p>
    </body>
</html>