 <?php  
// var_dump($_POST);
// exit;

     $userName = '';
     $phoneNumber = '';
     $email = '';
     $locationAddress = '';
     $region = '';
     $profilePicture ='';
     $businessName ='';
     $businessNumber ='';
     $businessEmail = '';
     $businessAddress = '';
     $ghPostAddress = '';
     $landmark = '';
     $paymentOption ='';
     $bankName = '';
     $bankBranch = '';
     $accountNumber = '';
     $walletNetwork = '';
     $walletNumber = '';
     $walletName= '';
     $businessDocument = '';


    if (isset($_POST)) {

        $userName = $_POST["userName"];
        $phoneNumber = $_POST["phoneNumber"];
        $email = $_POST["email"];
        $locationAddress = $_POST["locationAddress"];
        $region = $_POST["region"];
        $profilePicture = $_FILES["profilePicture"];
    }else{
        echo "Can not Continue";
        exit;
    } 
    

    if(isset($_POST["businessOwnership"])){
        $businessOwnership = $_POST["businessOwnership"];

       if ($businessOwnership == "yes"){

        if( isset($_POST['businessName']) && isset($_POST['businessNumber']) &&
        isset($_POST['businessDocument']) && isset($_POST['landmark'])){
            $businessName = $_POST["businessName"];
            $businessNumber = $_POST["businessNumber"];
            $businessEmail = $_POST["businessEmail"];
            $businessAddress = $_POST["businessAddress"];
            $ghPostAddress = $_POST["ghPostAddress"];
            $businessDocument = $_FILES["businessDocument"];
            $landmark = $_POST["landmark"];
          
      }else{
          echo "business details required";
          exit;
      }

       } 

    } else{
        echo "cannot continue business ownership not set";
        exit;
    };


    if(isset($_POST["paymentOption"])){
        $paymentOption = $_POST["paymentOption"];

       if ($paymentOption == "bank"){

        if( isset($_POST["bankName"]) && isset($_POST["bankBranch"]) &&
        isset($_POST["accountNumber"])){
            $bankName = $_POST["bankName"];
            $bankBranch = $_POST["bankBranch"];
            $accountNumber = $_POST["accountNumber"];
               
      }else{
          echo "bank details required";
          exit;
      }
    } 

    if ($paymentOption == "wallet"){

        if( isset($_POST["walletNetwork"]) && isset($_POST["walletNumber"]) &&
        isset($_POST["walletName"])){
            $walletNetwork = $_POST["walletNetwork"];
            $walletNumber = $_POST["walletNumber"];
            $walletName= $_POST["walletName"];
               
      }else{
          echo "wallet details required";
          exit;
      }
    }
}
    

   
   
    

    // Datebase Connection
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "HolySpirit08%";
        $dbname = "zeepayregistration";

        // create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
        }

        else{
            // $SELECT  = "SELECT email From zeepay-registration where email = ? Limit 1";
            $INSERT = "INSERT Into registration (userName, phoneNumber, email, 
            locationAddress, region, profilePicture, businessName, landmark, accountNumber,
            walletNetwork, walletNumber, bankName, bankBranch, businessDocument, walletNumber)  
            values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";     
    }

        

        // $stmt = $conn->prepare($SELECT);
        // $stmt ->bind_param('s', $email);
        // $stmt ->execute();
        // $stmt ->bind_result($email);
        // $stmt ->store_result();
        // $rnum = $stmt->num_rows;

        // if ($rnum==0){
        //     $stmt->close();
        //     $stmt =$conn->prepare($INSERT);
        //     $stmt->bind_param("iiiiiiissssssss", $userName, $phoneNumber, $email, 
        //     $locationAddress, $region, $profilePhoto, $businessName, $landmark, $accountNumber,
        //     $walletNetwork, $walletNumber, $bankName, $bankBranch, $businessDocument, $walletNumber);
        //     $stmt->execute();
        //     echo "Registered successfully";
        // } else{
        //     echo "You have already registered";
        // }

        $stmt =$conn->prepare($INSERT);
        $stmt->bind_param("iiiiiiissssssss", $userName, $phoneNumber, $email, 
        $locationAddress, $region, $profilePhoto, $businessName, $landmark, $accountNumber,
        $walletNetwork, $walletNumber, $bankName, $bankBranch, $businessDocument, $walletNumber);
        $stmt->execute();
        echo "Registered successfully";

        $stmt->close();
        $conn->close();

 ?>