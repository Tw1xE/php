    <html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
    // Hide the second form initially
    $('#secondPageForm').hide();

    // Handle the submission of the first form
    $('#custom-contact-form').submit(function (e) {
        e.preventDefault(); // Prevent the default form submission behavior

        // Serialize form data
        var formData = $(this).serialize();

        // Log the serialized form data
        console.log("First form data: " + formData);

        // Send data to PHP script using AJAX
        $.ajax({
            type: 'POST',
            url: 'submit_form.php',
            data: formData,
            success: function (response) {
                // Handle success response
                console.log(response);

                // Show the second form and hide the first form
                $('#custom-contact-form').hide();
                $('#secondPageForm').show();
            },
            error: function (error) {
                // Handle error
                console.log(error);
            }
        });
    });

    // Handle the submission of the second form
    $('#secondPageForm').submit(function (e) {
        e.preventDefault(); // Prevent the default form submission behavior

        // Serialize form data
        var formData = $(this).serialize();

        // Log the serialized form data
        console.log("Second form data: " + formData);

        // Send data to PHP script using AJAX
        $.ajax({
            type: 'POST',
            url: 'submit_form.php',
            data: formData,
            success: function (response) {
                // Handle success response
                console.log(response);
                // Optionally, redirect the user to a thank you page or perform other actions
            },
            error: function (error) {
                // Handle error
                console.log(error);
            }
        });
    });
});

    </script>
</head>
        <link rel="stylesheet" href="./style.css">
        <form id="custom-contact-form" action="submit_form.php" method="post">
            
            <div id="firstpage">
                <img src="./UCR Logo.PNG" alt="">
                <div id="row1">
                    
                    <label for="usdot" style="font-weight: 600;">USDOT<span style="color: red;"> *</span></label>
                    <input type="text" name="usdot" pattern="\d{5,7}" title="USDOT should be 5 to 7 digits" required>
                    </div>
                    <div id="check">
                    <div id="checkbox-group-one">
                    <input class="center" type="checkbox" id="PrivacyPolicy" title="Make sure to read the Terms & conditions, then check the box to proceed" name="privacy_policy" style="margin-top: 28px;" required>
                            <a id="PrivacyPolicy" href="https://registrationucr.com/privacy-policy/">
                            Privacy Policy</a>
                    </div>
                    <div id="checkbox-group-two">
                    <input class="center" title="Make sure to read the Terms & conditions, then check the box to proceed" id="TermsandConditions" type="checkbox" name="terms_conditions" style="margin-top: 28px;" required>
                            <a id="TermsandConditions" href="https://registrationucr.com/terms-conditions/">
                            Terms & Conditions</a>
                    </div>
                    </div>
                    <input type="submit" value="Submit" onclick="
                    if(
                        console.log('switchToFirstPage'));
                        document.getElementById('custom-contact-form').style.display = 'none';
                        document.getElementById('secondPageForm').style.display = 'block';
                            " id="submit-button1" >
                            </div>
            </form>
            <form id="secondPageForm" style="display: none;" action="submit_form.php" method="post">
                <div id="Secondpage">
                <div id="row">
                    <label for="legal_name">Company Name<span style="color: red;"> *</span></label>
                    <input type="text" title="This field is required" name="legal_name" placeholder="John Peterson" required>
                    </div>
                <div id="row">
                    <label for="dba_name">DBA Name</label>
                    <input type="text" name="dba_name">
                </div>              
                    <div id="row">
                    <p for="Company_Address" style="font-weight: 600;">Company address</p>
                    <hr>
                        <label for="physical_street">Street address<span style="color: red;"> *</span></label>
                        <input type="text" placeholder="567 jackson st" name="physical_street" required title="Zip code should be 5 digits">
                    </div>
                    <div id="row">
                        <label for="physical_city">City<span style="color: red;"> *</span></label>
                        <input type="text" placeholder="New York" title="This field is required" name="physical_city" required>
                    </div>
                    
                    <div id="row">
                    <label for="physical_state">State<span style="color: red;"> *</span></label>
                    <select name="physical_state" title="This field is required" required>
                    <option value="select">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
    <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>               
                    </select>
                    </div>
                    <div id="row">
                        <label for="physical_zip_code">Zip Code<span style="color: red;"> *</span></label>
                        <input type="text" id="Physicalzipcode" placeholder="57567" name="physical_zip_code" pattern="\d{5}" required title="Zip code should be 5 digits">
                    </div>
                    <div id="row">
                    <p for="Personal_info" style="font-weight: 600;">Personal info</p>
                    <hr>
                        <label for="email">Email<span style="color: red;"> *</span></label>
                        <input type="email" name="email" title="This field is required, make sure you entered a valid email" placeholder="Example@gmail.com" required>
                    </div>
                    <div id="row">
                        <label for="mobile_phone_number">Phone Number<span style="color: red;"> *</span></label>
                        <input type="tel" id="MobilePhone" name="mobile_phone_number" title="This field is required, you can enter the phone number with or without country code" placeholder="e.g., +1 123-456-7890" pattern="\d{10,15}" required>
                    </div>
                    <div id="row">
                        <label for="registration_creator">Who is Creating This Registration?<span style="color: red;"> *</span></label>
    <input type="text" name="registration_creator" title="This field is required" placeholder="Name and Last Name" required>
                    </div>
                    <div id="rowcheck">
                        <input type="checkbox" id="authorization_checkbox" name="authorization_checkbox" style="margin-top: 28px;" required>
                        <label for="authorization_checkbox"> 
                        I certify that I have been given proper authorization to perform or modify UCR registration information for USDOT <?php echo '<span id="usdot_display"></span>,<span style="color: red;"> *</span>'; ?>
                        </label>
                    </div>
                    <div id="row">
                    <p for="Truck_Info" style="font-weight: 600;">Truck info</p>
                        <hr>
                        <fieldset id="years">
                            <legend title="This field is required, you need to select minimum of 1 year" required>Select Registration Years<span style="color: red;"> *</span></legend>
                            <label for="year_2021"><input type="checkbox" name="years[]" value="2021" id="year_2021"> 2021</label><br>
                            <label for="year_2022"><input type="checkbox" name="years[]" value="2022" id="year_2022"> 2022</label><br>
                            <label for="year_2023"><input type="checkbox" name="years[]" value="2023" id="year_2023"> 2023</label><br>
                            <label for="year_2024"><input type="checkbox" name="years[]" value="2024" id="year_2024"> 2024</label><br>
                        </fieldset>
                        </div>
                        <div id="row">
                            <fieldset id="carrier-classification">
                                <legend class="required" id="carrier-classification" title="This field is required" required>Carrier Classification<span style="color: red;"> *</span></legend>
                                    <label for="motor_carrier"> 
                                        <input type="checkbox" name="carrier_classification[]" value="Motor Carrier (For hire)" id="motor_carrier"> Motor Carrier (For hire)
                                    </label>
                                    <label for="motor_private_carrier">
                                        <input type="checkbox" name="carrier_classification[]" value="Motor Private Carrier (Not For hire)" id="motor_private_carrier"> Motor Private Carrier (Not For hire)
                                    </label>
                                    <label for="freight_forwarder">
                                        <input type="checkbox" name="carrier_classification[]" value="Freight Forwarder" id="freight_forwarder"> Freight Forwarder
                                    </label>
                                    <label for="broker">
                                        <input type="checkbox" name="carrier_classification[]" value="Broker" id="broker"> Broker
                                    </label>
                                        <label for="leasing_company">
                                    <input type="checkbox" name="carrier_classification[]" value="Leasing Company" id="leasing_company"> Leasing Company
                                </label>
                            </fieldset>
                        </div>
                        <div id="row">
                        <label for="straightTrucks">Number of Straight Trucks<span style="color: red;"> *</span></label>
                        <input type="number" pattern="\d" placeholder="0" name="straightTrucks" id="straightTrucks" required>
                        
                        </div>
                        <div id="row">
                        <label for="exemptionsStraightTrucks">Number of Exemptions for Straight Trucks<span style="color: red;"> *</span></label>
                        <input type="number" pattern="\d" placeholder="0" name="exemptionsStraightTrucks" required>
                        </div>
                        <div id="row">
                        <label for="passengerVehicles">Number of Passenger Vehicles<span style="color: red;"> *</span></label>
    <input type="number" pattern="\d" name="passengerVehicles" placeholder="0" id="passengerVehicles" required>
                        </div>
                        <div id="row">
                        <label for="exemptionsPassengerVehicles">Number of Exemptions for Passenger Vehicles<span style="color: red;"> *</span></label>
                        <input type="number" pattern="\d" name="exemptionsPassengerVehicles" placeholder="0" required >
                    </div>
                        <div id="row">
                        <label for="additionalVehicles">Additional Number of Vehicles<span style="color: red;"> *</span></label>
                        <input type="number" pattern="\d" placeholder="0" name="additionalVehicles" required>
                        </div>
                        <div id="row">
                        <p>Total Vehicles: <span id="sum">0</span></p>
                        </div>
                        <div id="row">
                        
                        <label for="totalAmount">Total Amount: $<span id="totalAmountValue">0</span></label>
                        <button id="calculateButton" type="button" onclick="calculateTotal()">Calculate</button>
                        <input type="submit" value="Submit" name="submit-button" id="submit-button2" onclick="if(
        console.log('switchToFirstPage'));
        document.getElementById('custom-contact-form').style.display = 'none';
        document.getElementById('secondPageForm').style.display = 'block';" >


                        </div>
                        <canvas id="signatureCanvas" width="200" height="200" style="background-color: #ff4d4d; display:none;" ></canvas>
                </div>
            </form>
    </html>
