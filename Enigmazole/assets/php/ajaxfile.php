<?php

include 'config.php';

if(isset($_POST['ans'])){
    $ans = mysqli_real_escape_string($con,$_POST['ans']);

    $query = "select count(*) as cntUser from whois where answer='".$ans."'";
    
    $result = mysqli_query($con,$query);
    $response = "<span style='color: red;'>Wrong.</span>";
    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_array($result);
    
        $count = $row['cntUser'];
        
        if($count > 0){
            $response = "<span style='color: green;'>Success</span>";
        }
       
    }
    
    echo $response;
    die;
}
