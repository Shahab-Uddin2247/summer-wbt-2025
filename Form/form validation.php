<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
    <style>
        .error {
            color: #FF0000;
        }

    </style>
     <link rel="stylesheet" href="./style.css" />
</head>

<body>

    <?php
   
    $fnameErr = $lnameErr = $companyErr = $address1Err = $address2Err = $cityErr = $stateErr = $zipcodeErr = $countryErr = "";
    $emailErr  = $phoneErr = $faxErr = $amountErr = $nameErr = $adtErr = $addressErr =  "";
    $fname = $lname = $company = $address1 = $address2 = $city = $state = $zipcode = $country = "";
    $email  = $phone = $fax = $amount = $otherAmount = $comment = $name = $adt = $address = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        
        if (empty($_POST["fname"])) {
            $fnameErr = "First Name is required";
        } else {
            $fname = test_input($_POST["fname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
                $fnameErr = "Only letters and white space allowed";
            }
        }

       
        if (empty($_POST["lname"])) {
            $lnameErr = "Last Name is required";
        } else {
            $lname = test_input($_POST["lname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
                $lnameErr = "Only letters and white space allowed";
            }
        }

     
        if (!empty($_POST["company"])) {
            $company = test_input($_POST["company"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $company)) {
                $companyErr = "Only letters and white space allowed";
            }
        }

       
        if (empty($_POST["address1"])) {
            $address1Err = "Address 1 is required";
        } else {
            $address1 = test_input($_POST["address1"]);
           
            if (!preg_match("/^[a-zA-Z0-9\s,.'-]+$/", $address1)) {
                $address1Err = "Invalid characters in Address 1";
            }
        }

      
        if (!empty($_POST["address2"])) {
            $address2 = test_input($_POST["address2"]);
            if (!preg_match("/^[a-zA-Z0-9\s,.'-]+$/", $address2)) {
                $address2Err = "Invalid characters in Address 2";
            }
        }

    
        if (empty($_POST["city"])) {
            $cityErr = "City is required";
        } else {
            $city = test_input($_POST["city"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $city)) {
                $cityErr = "Only letters and white space allowed";
            }
        }

        
        if (empty($_POST["state"]) || $_POST["state"] == "Select a State") {
            $stateErr = "State is required";
        } else {
            $state = test_input($_POST["state"]);
        }

    
        if (empty($_POST["zipcode"])) {
            $zipcodeErr = "Zip Code is required";
        } else {
            $zipcode = test_input($_POST["zipcode"]);
            if (!preg_match("/^[0-9]{4}$/", $zipcode)) {
                $zipcodeErr = "Invalid Zip Code format";
            }
        }

        
        if (empty($_POST["country"]) || $_POST["country"] == "Select a Country") {
            $countryErr = "Country is required";
        } else {
            $country = test_input($_POST["country"]);
        }

       
        if (!empty($_POST["phone"])) {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/^\+?\d{7,15}$/", $phone)) {
                $phoneErr = "Invalid phone number";
            }
        }

       
        if (!empty($_POST["fax"])) {
            $fax = test_input($_POST["fax"]);
            if (!preg_match("/^\+?\d{7,15}$/", $fax)) {
                $faxErr = "Invalid fax number";
            }
        }

   
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        

        if (empty($_POST["amount"])) {
            $amountErr = "Please select a donation amount";
        } else {
            $amount = test_input($_POST["amount"]);
            if ($amount == "Other") {
                if (empty($_POST["otherAmount"])) {
                    $amountErr = "Please enter an other amount";
                } else {
                    $otherAmount = test_input($_POST["otherAmount"]);
                    if (!is_numeric($otherAmount) || $otherAmount <= 0) {
                        $amountErr = "Invalid other amount";
                    }
                }
            }
        }

      
if (!empty($_POST["name"])) {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

if (!empty($_POST["adt"])) {
            $adt = test_input($_POST["adt"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $adt)) {
                $adtErr = "Only letters and white space allowed";
            }
        }
if (!empty($_POST["address"])) {
            $address = test_input($_POST["address"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $address)) {
                $addressErr = "Only letters and white space allowed";
            }
        }



        if (!empty($_POST["comment"])) {
            $comment = test_input($_POST["comment"]);
        }
    }




    ?>

    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <p><span class="required-marker">*</span> - Denotes Required Information</p>
        <pre>
<p><strong> > 1 Donation </strong>      > 2 Confirmation         > Thank You!</p>
        </pre>
        <h2>Donor Information</h2>

        <div class="input-row">
            <label for="fname">First Name<span class="required-marker">*</span></label>
            <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>">
            <span class="error">* <?php echo $fnameErr; ?></span>
        </div>

        <div class="input-row">
            <label for="lname">Last Name<span class="required-marker">*</span> </label>
            <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>">
            <span class="error">* <?php echo $lnameErr; ?></span>
        </div>

        <div class="input-row">
            <label for="company">Company </label>
            <input type="text" id="company" name="company" value="<?php echo $company; ?>">
            <span class="error"><?php echo $companyErr; ?></span>
        </div>

        <div class="input-row">
            <label for="address1">Address 1<span class="required-marker">*</span> </label>
            <input type="text" id="address1" name="address1" value="<?php echo $address1; ?>">
            <span class="error">* <?php echo $address1Err; ?></span>
        </div>

        <div class="input-row">
            <label for="address2">Address 2 </label>
            <input type="text" id="address2" name="address2" value="<?php echo $address2; ?>">
            <span class="error"><?php echo $address2Err; ?></span>
        </div>

        <div class="input-row">
            <label for="city">City<span class="required-marker">*</span> </label>
            <input type="text" id="city" name="city" value="<?php echo $city; ?>">
            <span class="error">* <?php echo $cityErr; ?></span>
        </div>

        <div class="input-row">
            <label for="state">State<span class="required-marker">*</span> </label>
            <select id="state" name="state">
                <option>Select a State</option>
                <option value="Dhaka" <?php if ($state == "Dhaka") echo "selected"; ?>>Dhaka</option>
                <option value="Khulna" <?php if ($state == "Khulna") echo "selected"; ?>>Khulna</option>
                <option value="Rajshahi" <?php if ($state == "Rajshahi") echo "selected"; ?>>Rajshahi</option>
            </select>
            <span class="error">* <?php echo $stateErr; ?></span>
        </div>

        <div class="input-row">
            <label for="zipcode">Zip Code<span class="required-marker">*</span> </label>
            <input type="text" id="zipcode" name="zipcode" value="<?php echo $zipcode; ?>">
            <span class="error">* <?php echo $zipcodeErr; ?></span>
        </div>

        <div class="input-row">
            <label for="country">Country<span class="required-marker">*</span> </label>
            <select id="country" name="country">
                <option>Select a Country</option>
                <option value="Bangladesh" <?php if ($country == "Bangladesh") echo "selected"; ?>>Bangladesh</option>
                <option value="China" <?php if ($country == "China") echo "selected"; ?>>China</option>
                <option value="India" <?php if ($country == "India") echo "selected"; ?>>India</option>
                <option value="Bhutan" <?php if ($country == "Bhutan") echo "selected"; ?>>Bhutan</option>
                <option value="Australia" <?php if ($country == "Australia") echo "selected"; ?>>Australia</option>
            </select>
            <span class="error">* <?php echo $countryErr; ?></span>
        </div>

        <div class="input-row">
            <label for="phone">Phone </label>
            <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>">
            <span class="error"><?php echo $phoneErr; ?></span>
        </div>

        <div class="input-row">
            <label for="fax">Fax </label>
            <input type="text" id="fax" name="fax" value="<?php echo $fax; ?>">
            <span class="error"><?php echo $faxErr; ?></span>
        </div>

        <div class="input-row">
            <label for="email">Email<span class="required-marker">*</span> </label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr; ?></span>
        </div>

        

        <div class="input-row" id="donation-amount">
            <label>Donation Amount<span class="required-marker">*</span>
                <p>(Check a button or type in your amount)</p>
            </label>
            <input type="radio" id="none" name="amount" value="None" <?php if ($amount == "None") echo "checked"; ?>>None
            <input type="radio" id="50" name="amount" value="50" <?php if ($amount == "50") echo "checked"; ?>>$50
            <input type="radio" id="75" name="amount" value="75" <?php if ($amount == "75") echo "checked"; ?>>$75
            <input type="radio" id="100" name="amount" value="100" <?php if ($amount == "100") echo "checked"; ?>>$100
            <input type="radio" id="250" name="amount" value="250" <?php if ($amount == "250") echo "checked"; ?>>$250
            <input type="radio" id="other" name="amount" value="Other" <?php if ($amount == "Other") echo "checked"; ?>>Other
            <span class="error">* <?php echo $amountErr; ?></span>
        </div>

        <div class="input-row">
            <label for="otherAmount">Other Amount $</label>
            <input type="text" id="otherAmount" name="otherAmount" value="<?php echo $otherAmount; ?>">
        </div>






        <div class="input-row">
            <label for="">Recuring Donation </label>
            <input type="checkbox" style="width: 30px" /> I am interested in giving
            on a regular basis.
        </div>

        <div class="input-row">
            <label>Monthly Credit Card $</label>
            <input type="text" style="width: 50px" />
            For
            <input type="text" style="width: 50px" /> Months
        </div>

        <h2>Honorarium and Memorial Donation Infromation</h2>

        <div class="input-row">
            <label for="">I would like to make this donation</label>
            <div class="contact-options">
                <input type="radio" name="honor" style="width: 50px" /> To Honor <br>
                <input type="radio" name="honor" style="width: 50px" /> In Memory of
            </div>
        </div>


          <div class="input-row">
            <label for="name"> Name</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>">
            <span class="error"> <?php echo $nameErr; ?></span>
        </div>


          <div class="input-row">
            <label for="name"> Acknowledge Donation to</label>
            <input type="text" id="adt" name="adt" value="<?php echo $adt; ?>">
            <span class="error"> <?php echo $adtErr; ?></span>
        </div>


 <div class="input-row">
            <label for="name"> Address</label>
            <input type="text" id="address" name="address" value="<?php echo $address; ?>">
            <span class="error"> <?php echo $addressErr; ?></span>
        </div>





        <div class="input-row">
            <label for="">City</label>
            <input type="text" />
        </div>

        <div class="input-row">
            <label for="">State</label>
            <select>
                <option>Select a State</option>
                <option value="">Dhaka</option>
                <option value="">Khulna</option>
                <option value="">Rajshahi</option>
            </select>
        </div>

        <div class="input-row">
            <label for="">Zip</label>
            <input type="text" />
        </div>

        <h2>Additional Information</h2>
        <p>
            Please enter your name, company or organization as you would like it to
            appear in our publication:
        </p>

        <div class="input-row">
            <label>Name</label>
            <input type="text" />
        </div>

        <input type="checkbox" /> I would like my gift to remain anonymous. <br />
        <input type="checkbox" /> My employer offers a matching gift program. I
        will mail the matching gift form. <br />
        <input type="checkbox" /> Please save the cost of acknowledging this gift
        by not mailing a thank you letter. <br /><br />

        <div class="input-row">
            <label>Comments <br> (Please type any questions or feedback here)</label>
            <textarea></textarea>
        </div>

        <div class="input-row">
            <label>How may we contact you?</label>
            <div class="contact-options">
                <input type="checkbox" /> E-mail <br />
                <input type="checkbox" /> Postal Mail <br />
                <input type="checkbox" /> Telephone <br />
                <input type="checkbox" /> Fax
            </div>
        </div>

        <div class="input-row">
            <label>I would like to receive newsletters and event info by:</label>
            <div class="contact-options">
                <input type="checkbox" /> E-mail <br />
                <input type="checkbox" /> Postal Mail
            </div>
        </div>

        <input type="checkbox" /> I would like information about volunteering with the <br /><br />


        <div class="input-row">
            <button id="button1" type="reset">Reset</button><br />
            <button type="submit">Continue</button>
        </div>

     
    </form>

  <p>
            Donate online with confidence. You are on a secure server. <br />
            If you have any problems or questions, please contact support.
        </p>

</body>

</html>
