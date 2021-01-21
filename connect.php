 <?php
    //  var_dump($_POST);
    //  exit;

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
    $typeOfBusiness = '';
    $photoID = '';



    if (isset($_POST)) {
        if (
            isset($_POST['userName']) && isset($_POST['phoneNumber']) &&
            isset($_POST['email']) && isset($_POST['locationAddress']) &&
            isset($_POST['region']) && isset($_FILES['profilePicture'])
        ) {
            $profilePicture = $_FILES["profilePicture"];
            //start process picture
            $uploadedFile = processFileUpload($profilePicture['name'], $profilePicture['type'], $profilePicture['size'], $profilePicture['tmp_name'], 'image/jpg,image/jpeg,image/png', 10000000);
            //end process picture
            if ($uploadedFile['status'] == 'error') {
                $errorEncoded = base64_encode($uploadedFile['message']);
                header("location: error.php?message=" . $errorEncoded);
                exit;
            }
            if ($_POST["userName"] === '' || $_POST["userName"] == null) {
                $errorEncoded = base64_encode("Enter your full name");
                header("location: error.php?message=" . $errorEncoded);
                exit;
            }
            if ($_POST["phoneNumber"] === '' || $_POST["phoneNumber"] == null) {
                $errorEncoded = base64_encode("Enter your phone number");
                header("location: error.php?message=" . $errorEncoded);
                exit;
            }
            if ($_POST["email"] === '' || $_POST["email"] == null) {
                $errorEncoded = base64_encode("Enter your email");
                header("location: error.php?message=" . $errorEncoded);
                exit;
            }
            if ($_POST["locationAddress"] === '' || $_POST["locationAddress"] == null) {
                $errorEncoded = base64_encode("Enter your Residential Address");
                header("location: error.php?message=" . $errorEncoded);
                exit;
            }
            if ($_POST["region"] === '' || $_POST["region"] == null) {
                $errorEncoded = base64_encode("Enter your region");
                header("location: error.php?message=" . $errorEncoded);
                exit;
            }
            $userName = $_POST["userName"];
            $phoneNumber = $_POST["phoneNumber"];
            $email = $_POST["email"];
            $locationAddress = $_POST["locationAddress"];
            $region = $_POST["region"];
            $profilePicture = $uploadedFile['path'];
        } 
    } else {
        header("Location: index.html");
        exit();
        // exit;
    }

    if (isset($_POST["businessOwnership"])) {
        $businessOwnership = $_POST["businessOwnership"];

        if ($businessOwnership == "Yes") {
            if (
                isset($_POST['businessName']) && isset($_POST['businessNumber']) &&isset($_POST['businessAddress']) &&
                isset($_FILES['businessDocument']) && isset($_FILES['ghPostAddress']) && isset($_POST['landmark']) && isset($_FILES['photoID']) && isset($_POST['typeOfBusiness']) && isset($_POST['businessEmail'])
            ) {


                if ($_POST["businessName"] === '' || $_POST["businessName"] == null) {
                    $errorEncoded = base64_encode("Enter business Name");
                    header("location: error.php?message=" . $errorEncoded);
                    exit;
                }
                if ($_POST["businessEmail"] === '' || $_POST["businessEmail"] == null) {
                    $errorEncoded = base64_encode("Enter business Email");
                    header("location: error.php?message=" . $errorEncoded);
                    exit;
                }
                if ($_POST["businessNumber"] === '' || $_POST["businessNumber"] == null) {
                    $errorEncoded = base64_encode("Enter your business Number");
                    header("location: error.php?message=" . $errorEncoded);
                    exit;
                }
                if ($_POST["businessAddress"] === '' || $_POST["businessAddress"] == null) {
                    $errorEncoded = base64_encode("Enter business address");
                    header("location: error.php?message=" . $errorEncoded);
                    exit;
                }
                if ($_POST["landmark"] === '' || $_POST["landmark"] == null) {
                    $errorEncoded = base64_encode("Enter business landmark");
                    header("location: error.php?message=" . $errorEncoded);
                    exit;
                }
                if ($_POST['ghPostAddress'] === '' || $_POST["ghPostAddress"] == null) {
                    $errorEncoded = base64_encode("Enter ghana post address");
                    header("location: error.php?message=" . $errorEncoded);
                    exit;
                }
                
                if ($_POST["typeOfBusiness"] === '' || $_POST["typeOfBusiness"] == null) {
                    $errorEncoded = base64_encode("Select the type of business");
                    header("location: error.php?message=" . $errorEncoded);
                    exit;
                }
                if ($_FILES["businessDocument"] === '' || $_POST["businessDocument"] == null) {
                    $errorEncoded = base64_encode("Upload business document");
                    header("location: error.php?message=" . $errorEncoded);
                    exit;
                }
                if ($_FILES["photoID"] === '' || $_POST["photoID"] == null) {
                    $errorEncoded = base64_encode("Upload photo ID");
                    header("location: error.php?message=" . $errorEncoded);
                    exit;
                }
                $photoID = $_FILES["photoID"];
                //start process document
                $uploadedID = processFileUpload($photoID['name'], $photoID['type'], $photoID['size'], $photoID['tmp_name'], 'image/jpg,image/jpeg,image/png', 10000000);
                //end process document
                if ($uploadedFile['status'] == 'error') {
                    echo $uploadedFile['message'];
                    $errorEncoded = base64_encode($uploadedFile['message']);
                    header("location: error.php?message=" . $errorEncoded);
                    exit;
                }

                $businessDocument = $_FILES["businessDocument"];
                //start process document
                $uploadedFile = processFileUpload($businessDocument['name'], $businessDocument['type'], $businessDocument['size'], $businessDocument['tmp_name'], 'image/jpg,image/jpeg,image/png', 10000000);
                //end process document
                if ($uploadedFile['status'] == 'error') {
                    echo $uploadedFile['message'];
                    $errorEncoded = base64_encode($uploadedFile['message']);
                    header("location: error.php?message=" . $errorEncoded);
                    exit;
                }
                $businessName = $_POST["businessName"];
                $businessEmail = $_POST["businessEmail"];
                $businessNumber = $_POST["businessNumber"];
                $businessAddress = $_POST["businessAddress"];
                $landmark = $_POST["landmark"];
                $ghPostAddress = $_POST["ghPostAddress"];
                $typeOfBusiness = $_POST["typeOfBusiness"];
                $businessDocument = $uploadedFile['path'];
                $photoID = $uploadedID['path'];
            } else {
                header("Location: error.php");
                exit();
            }
        }
    } else {
        header("location : index.html");
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


    $insert_stmt = $db->prepare("INSERT INTO registration (userName, phoneNumber, email, 
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



    if ($insert_stmt->execute()) {
        header("Location: success.php");
        exit();
    }

    exit;


    ?>