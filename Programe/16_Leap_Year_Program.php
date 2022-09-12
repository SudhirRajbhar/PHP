<?php  
/*
function isLeap($year)  
{  
    return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);  
}  
//For testing  
for($year=1991; $year<2022; $year++)  
{  
    If (isLeap($year))  
    {  
        echo "$year : LEAP YEAR<br />\n";  
    }  
    else  
    {  
        echo "$year : Not leap year<br />\n";  
    }  
}  
*/



?>
Leap Year Program in Form

<html>  
<body>  
    <form method="post">  
        Enter the Year: <input type="text" name="year">  
        <input type="submit" name="submit" value="Submit">  
    </form>  
</body>  
</html>  
<?php   
    if($_POST)  
    {     
        //get the year  
        $year = $_POST['year'];   
        //check if entered value is a number  
        if(!is_numeric($year))  
        {  
            echo "Strings not allowed, Input should be a number";  
            return;  
        }   
        //multiple conditions to check the leap year  
        if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )  
        {  
            echo "$year is a Leap Year";    
        }  
        else  
        {  
            echo "$year is not a Leap Year";    
        }  
    }   
?>  