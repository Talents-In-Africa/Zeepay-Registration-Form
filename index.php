<?php 
    session_start();
    include_once "img.php"
?>
<!DOCTYPE html>
<html>
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="ZeeAgent">
    <title>Register </title>

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://agents.myzeepay.com/portal/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css"
        href="https://agents.myzeepay.com/portal/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="https://agents.myzeepay.com/portal/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="https://agents.myzeepay.com/portal/app-assets/css/components.css">

    <!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu-padding 2-columns pace-done menu-collapsed horizontal-menu"
    data-open="click" data-menu="horizontal-menu" data-col="2-columns" data-new-gr-c-s-check-loaded="14.991.0"
    data-gr-ext-installed="">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <!-- END: Main Menu-->
    <div id="register" >
        <div class="content-body">
            <div class="row d-flex justify-content-center" style="margin-top: 30px;">
                <div class="col-md-4">
       -              <div class="row">
                        <div class="col-md-12" style="margin-top: 7px; text-align: center;"><img
                                src="https://agents.myzeepay.com/portal/assets/images/zeepay.png" alt=""
                                style="width: 140px;"></div>
                    </div>
            <form enctype="multipart/form-data" action="connect.php" method="post">
                    <h5><b> Personal Details</b></h5>
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="subject">Name</label><br> 
                                            <input placeholder="Enter Full Name "  type="text" name="userName"
                                                class="form-control" required></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="subject">Phone</label><br> 
                                            <input
                                                placeholder="Enter Phone Number Eg 024..."   name="phoneNumber"type="text"
                                                class="form-control"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="subject">Email </label><br> <input
                                                placeholder="Enter email"  type="text" name="email"class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="subject">Residential Address </label><br>
                                            <input placeholder="Enter Location"  name="locationAddress" type="text"
                                                class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label>Region</label>
                                            <div class="form-group"><select id="mno" name="region" style="width: 100%; padding: 6px;">
                                                    <option value="0">Select Region </option>
                                                    <option value="1">Greater Accra Region</option>
                                                    <option value="2">Ashanti Region</option>
                                                    <option value="4">Volta Region</option>
                                                    <option value="5">Oti Region</option>
                                                    <option value="6">Central Region</option>
                                                    <option value="7">Western Region</option>
                                                    <option value="8">Bono East Region</option>
                                                    <option value="9">Bono Region</option>
                                                    <option value="10">Eastern Region</option>
                                                    <option value="11">Savannah Region</option>
                                                    <option value="12">Northern Region</option>
                                                    <option value="13">North East</option>
                                                    <option value="14">Upper West</option>
                                                    <option value="15">Western North</option>
                                                    <option value="16">Ahafo Region</option>
                                                </select></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"style="padding: 5px;"><label for="subject">Upload
                                                Profile Picture
                                            </label><br>
                                            <div class="form-group"><input type="file"  name="profilePicture" class="form-control-file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5><b>General Business Details</b></h5>
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h6>Do you Own a Business</h6><br>
                                            <label class="radio-inline" style="font-size: 12px; margin-right: 10px;">
                                                <input type="radio" onClick="businessOwners('yes-option')" id="yes-option" name="businessOwnership" style="margin-right: 4px;" value="Yes" checked>Yes
                                            </label>
                                            <label class="radio-inline" style="font-size: 12px; margin-left: 10px;">
                                                <input type="radio" onClick="businessOwners('no-option')"  id="no-option"style="margin-right: 4px;" name="businessOwnership" value="No">No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="businessDetails">
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="subject">Business Name</label><br> <input
                                                placeholder="Enter Business name"  name="businessName" type="text"
                                                class="form-control"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="subject">Business Phone Number</label><br>
                                            <input placeholder="Enter Business Phone Number Eg 024..."  name="businessNumber"
                                                type="text" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="subject">Business Email </label><br> <input
                                                placeholder="Enter Business email" name="businessEmail" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="subject">Business Address </label><br>
                                            <input placeholder="Enter Business Address" name="businessAddress"  type="text"
                                                class="form-control"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="subject">Ghana Post Address
                                                (Optional)</label><br> <input placeholder="Enter Ghana Post Address"
                                                name="ghPostAddress" type="text" class="form-control"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="subject">Closest Landmark </label><br>
                                            <input placeholder="Closest Landmark Business to Location" name="Landmark"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="businessDocuments">
                    <h5><b>Business Documents</b></h5>
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                                <h6>Type of Business (Sole
                                                    Proprietorship / Limited Liability)</h6>
                                             
                                                <label  class="radio-inline" style="font-size: 12px; margin-right: 5px;">
                                                    <input type="radio" name="typeOfBusiness" value="Sole-Proprietorship"  checked> Sole Proprietorship
                                                </label>
                                                <label  class="radio-inline" style="font-size: 12px; ">
                                                    <input type="radio"  style="margin-right: 4px;" name="typeOfBusiness" value="Ltd Liability">Limited Liability
                                                </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                <h6>Photo ID (Drivers License / Voters ID Passport)</h6>
                                            </label>
                                            <div class="form-group">
                                                <input type="file" class="form-control-file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                <h6>Incorporation Certificate (Different Business Name)</h6>
                                            </label>
                                            <input type="file" class="form-control-file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <h5><b>Settlement Details</b></h5>
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h6>How would you want to be paid</h6><br>
                                            <label for="bank-channel" class="radio-inline" style="font-size: 12px; margin-right: 5px;">
                                                <input type="radio" onClick="paymentOption('bank-channel')" id="bank-channel" name="paymentmethod" style="margin-right: 4px;" value="Bank" checked>Bank
                                            </label>
                                            <label for="wallet-channel" class="radio-inline" style="font-size: 12px;">
                                                <input type="radio" onClick="paymentOption('wallet-channel')" id="wallet-channel" style="margin-right: 4px;" name="paymentmethod" value="wallet">Wallet
                                            </label>
                                        </div>
                                    </div>
                                </div>  

                               
                            </div>
                        </div>
                    </div>
                <div id="bankTransaction">
                    <h5><b>Bank Details</b></h5>
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">  
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Account Name</label>
                                                <div class="form-group">
                                                    <input placeholder="Enter Account Name" namee="bankName" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Branch</label>
                                                <div class="form-group">
                                                    <input placeholder="Enter Branch Name"  name="bankBranch" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Account Number</label>
                                                <div class="form-group">
                                                    <input placeholder="Enter Account Number" name="bankNumber" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="walletTransaction">
                    <h5><b>Wallet Details</b></h5>
                    <div class="card">
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">  
                                <div id="mobileWallet">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"><label>Network / MNO</label>
                                                <div class="form-group">
                                                    <select  name="walletNetwork" id="mno"
                                                        style="width: 100%; padding: 6px;">
                                                        <option selected hidden value="">Select Network</option>
                                                        <option value="MTN">MTN</option>
                                                        <option value="Vodafone">Vodafone</option>
                                                        <option value="AirtelTigo">AirtelTigo</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6" style="margin-top: 5px;">
                                                        <label style="margin-bottom: 5pxpx;">Wallet Number</label>
                                                    </div>
                                                    <div class="col-md-6" style="text-align: right;">
                                                        <button data-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-original-title="Validate Wallet No."
                                                            class="btn-success btn" style="height: 15px; width: 20px; margin-top: 4px;"></button>
                                                            <i class="la la-check"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <input id="wallet_number" placeholder="Enter wallet phone number" name="walletNumber"
                                                    value="" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name on Account</label>
                                                <div class="form-group">
                                                    <input placeholder="Name on Wallet Account" name="walletName" type="text"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                    <div class="row" style="margin-top: 10px;">
                        <div class="col-sm-12" style="text-align: center;">
                            <label>By clicking register you agree to the Terms and Conditions on this
                                platform.</label><br>
                            <div class="form-group" style="display: inline-block;">
                                <button type="submit" class="btn btn-outline-success" style="padding: 10px;">
                                    Register as a ZeeAgent
                                </button>
                                <br><br>
                            </div>
                        </div>
                    </div>
            </form>
                </div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="sidenav-overlay"
        style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
    </div>
    <div class="drag-target"
        style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
    </div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-transparent footer-light navbar-shadow fixed-bottom">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout"><span
                class="d-block d-md-inline-block">Copyright © 2021 <a class="text-bold-900 grey darken-2"
                    style="color: red" href="https://www.myzeepay.com" target="_blank">Zeepay</a></span></p>
    </footer>
    <!-- END: Footer-->

    <input type="file" id="" name="file" style="display: none;">
    <div data-v-0a2a5063="" class="container_selected_area"
        style="cursor: url(&quot;chrome-extension://ialiedlpfknneamnbemcgmaboleiccdd/assets/images/cursor-imagen.svg&quot;) 9 9, crosshair;">
        <div data-v-0a2a5063="" class="area"></div>
    </div>

    <script>
        function paymentOption(option){
            if (option == "bank-channel"){
                document.getElementById("bankTransaction").style.display = "block"
                document.getElementById("walletTransaction").style.display = "none"
            }

            if (option == "wallet-channel"){
                document.getElementById("walletTransaction").style.display = "block"
                document.getElementById("bankTransaction").style.display = "none"
            }
        }
        (function() {
            paymentOption("bank-channel")
        })();
      

        function businessOwners(owners){
            if (owners == "yes-option"){
                document.getElementById("businessDetails").style.display = "block"
                document.getElementById("businessDocuments").style.display = "block"
            }
            if (owners == "no-option"){
                document.getElementById("businessDetails").style.display = "none"
                document.getElementById("businessDocuments").style.display = "none"
            }
        }
    </script>
</body>

</html>