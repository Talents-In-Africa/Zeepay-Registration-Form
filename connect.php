 <?php
    //var_dump($_POST);
    //exit;
    require('db/db_connection.php');
    require('services/process_file.php');
    $userName = '';
    $phoneNumber = '';
    $email = '';
    $locationAddress = '';
    $region = '';
    $profilePicture = '';
    $businessName = '';
    $businessNumber = '';
    $businessEmail = '';
    $businessAddress = '';
    $ghPostAddress = '';
    $landmark = '';
    $paymentOption = '';
    $bankName = '';
    $bankBranch = '';
    $accountNumber = '';
    $walletNetwork = '';
    $walletNumber = '';
    $walletName = '';
    $businessDocument = '';


    if (isset($_POST)) {
        if (
            isset($_POST['userName']) && isset($_POST['phoneNumber']) &&
            isset($_POST['email']) && isset($_POST['locationAddress']) &&
            isset($_POST['region']) && isset($_FILES['profilePicture'])
        ) {
            $profilePicture = $_FILES["profilePicture"];
            //start process picture
            $uploadedFile = processFileUpload($profilePicture['name'], $profilePicture['type'], $profilePicture['size'], $profilePicture['tmp_name'], 'image/jpg,image/jpeg,image/png' ,10000000);
            //end process picture
            if($uploadedFile['status'] == 'error')
            {
                echo $uploadedFile['message'];
                exit;
            } else{
                $userName = $_POST["userName"];
                $phoneNumber = $_POST["phoneNumber"];
                $email = $_POST["email"];
                $locationAddress = $_POST["locationAddress"];
                $region = $_POST["region"];
                $profilePicture = $uploadedFile['path'];
            }


        } else {
            echo "Can not Continue";
            exit;
        }
    }

    if (isset($_POST["businessOwnership"])) {
        $businessOwnership = $_POST["businessOwnership"];

        if ($businessOwnership == "yes") {

            if (
                isset($_POST['businessName']) && isset($_POST['businessNumber']) &&
                isset($_POST['businessDocument']) && isset($_POST['landmark'])
            ) {
                $businessDocument = $_FILES["businessDocument"];
                //start process document
                $uploadedFile = processFileUpload($businessDocument['name'], $businessDocument['type'], $businessDocument['size'], $businessDocument['tmp_name'], 'image/jpg,image/jpeg,image/png' ,10000000);
                //end process document
                if($uploadedFile['status'] == 'error')
                {
                    echo $uploadedFile['message'];
                    exit;
                } else{
                    $businessName = $_POST["businessName"];
                    $businessNumber = $_POST["businessNumber"];
                    $businessEmail = $_POST["businessEmail"];
                    $businessAddress = $_POST["businessAddress"];
                    $ghPostAddress = $_POST["ghPostAddress"];
                    $businessDocument = $uploadedFile['path'];
                    $landmark = $_POST["landmark"];

                }
            } else {
                echo "business details required";
                exit;
            }
        }
    } else {
        echo "cannot continue business ownership not set";
        exit;
    };


    if (isset($_POST["paymentOption"])) {
        $paymentOption = $_POST["paymentOption"];

        if ($paymentOption == "bank") {

            if (
                isset($_POST["bankName"]) && isset($_POST["bankBranch"]) &&
                isset($_POST["accountNumber"])
            ) {
                $bankName = $_POST["bankName"];
                $bankBranch = $_POST["bankBranch"];
                $accountNumber = $_POST["accountNumber"];
            } else {
                echo "bank details required";
                exit;
            }
        }

        if ($paymentOption == "wallet") {

            if (
                isset($_POST["walletNetwork"]) && isset($_POST["walletNumber"]) &&
                isset($_POST["walletName"])
            ) {
                $walletNetwork = $_POST["walletNetwork"];
                $walletNumber = $_POST["walletNumber"];
                $walletName = $_POST["walletName"];
            } else {
                echo "wallet details required";
                exit;
            }
        }
    }


$insert_stmt =$db->prepare("INSERT INTO registration (userName, phoneNumber, email, 
locationAddress, region, profilePicture, businessName,	businessNumber,  businessEmail, businessAddress, 
ghPostAddress, landmark, paymentOption, accountNumber, walletNetwork, walletName, walletNumber, bankName, bankBranch, businessDocument)  
VALUES(:fuserName, :fphoneNumber, :femail, :flocationAddress, :fregion, :fprofilePicture, :fbusinessName, 
:fbusinessNumber,  :fbusinessEmail, :fbusinessAddress, :fghPostAddress, :flandmark,	:fpaymentOption, :faccountNumber,
:fwalletNetwork, :fwalletName, :fwalletNumber, :fbankName, :fbankBranch, :fbusinessDocument )");
$insert_stmt->bindParam(":fuserName", $userName);
$insert_stmt->bindParam(":fphoneNumber", $phoneNumber);
$insert_stmt->bindParam(":femail",  $email);
$insert_stmt->bindParam(":flocationAddress", $locationAddress);
$insert_stmt->bindParam(":fregion", $region);
$insert_stmt->bindParam(":fprofilePicture", $profilePicture);
$insert_stmt->bindParam(":fbusinessName", $businessName);
$insert_stmt->bindParam(":fbusinessNumber", $businessNumber);
$insert_stmt->bindParam(":fbusinessEmail", $businessEmail);
$insert_stmt->bindParam(":fbusinessAddress", $businessAddress);
$insert_stmt->bindParam(":fghPostAddress", $ghPostAddress);
$insert_stmt->bindParam(":flandmark", $landmark);
$insert_stmt->bindParam(":fpaymentOption", $paymentOption);
$insert_stmt->bindParam(":faccountNumber", $accountNumber);
$insert_stmt->bindParam(":fwalletNetwork", $walletNetwork);
$insert_stmt->bindParam(":fwalletName", $walletName);
$insert_stmt->bindParam(":fwalletNumber", $walletNumber);
$insert_stmt->bindParam(":fbankName", $bankName);
$insert_stmt->bindParam(":fbankBranch", $bankBranch);
$insert_stmt->bindParam(":fbusinessDocument", $businessDocument);


  
if($insert_stmt->execute()){
    $insertMsg="File uploaded successfully";
}

echo "Going to db now";
exit;


    ?>