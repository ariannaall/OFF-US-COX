<?php



//error_reporting(E_ALL);
        $namef=$_POST['name']; 
	$emailf=$_POST['email'];
        $mobilef=$_POST['mobile'];
	$countryf=$_POST['country'];
	$keyFieldf=$_POST['productkey'];
	//$ipf=$_POST['field6'];
	
 	
$sub="Enquiry Mail from : Office";
	
	 
	 $msg="Name :$namef\n";
         $msg.="Mob :$mobilef\n";
	 $msg.="Email :$emailf\n";
         $msg.="Country :$countryf\n\n";
	 $msg.="Key :$keyFieldf\n";
         //$msg.="IP :$ipf\n";
	 
        
         
   $headers = "From: ${emailf}\nReply-To: ${emailf}";
   

mail("vishranti.mehra@gmail.com", "Enquiry Mail from: office USA", "$msg","From:$emailf");



	
    echo '<script>  window.location.href = "my-account.html";</script>';

?>
