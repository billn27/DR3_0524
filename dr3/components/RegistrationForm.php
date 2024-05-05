<?php

class RegistrationForm extends CComponent
{
    public function getTestForm(){
        return 'testform';
    }
    public function getForm()
    {
        $email = '';
        $returnText = '
        <span class="subhead1">Registration</span><br><br>
        <form id="registration_form" action="?r=user/registrationFileUpdate" 
        method = "POST">
            <p>Welcome aboard Democracy Rules - aa free of charge, nonpartisan political lobbying community dedicated to
                affecting 355 essential issues each month. Upon registration, you will be receive a private account which
                securely displays your pledge activity and financial transactions. </p>
            <p>Most of the information requested on
                this form, including your occupation and the name of your employer, is required under federal law. The
                Federal Election Commission also requires members to affirm they are eligible to make contributions to
                federal legislators.</p>
            <p>Except when complying with FEC regulations, Democracy Rules will never sell, share or voluntarily divulge a member\'s personal information to any third party.
                <A HREF="https://democracyrules.org/dr3/index.php?r=issues/privacy">Click here</A> to view our Privacy Policy. Once registered, your password will be sent to the email address entered below.</p>
            <div id="policy_error" ">
            
            
            <p> <input id="privacy_box" type="checkbox" name="policy_confirm" 
            value="1" style="background-color:yellow"/> Please check this box if the following statements are true and accurate:</p>
            </div>
            <div id ="policy_text">
                <ol>
                    <li>This contribution is made from my own funds and not those of another.</li>
                    <li>This contribution is not from the general treasury funds of a corporation, labor organization or national bank.</li>
                    <li>I am not a foreign national who lacks permanent resident status in the United States.</li>
                    <li>I am over the age of 18, and if not, I am a minor making this contribution of my own volition, and not at the request or direction of another individual.</li>
                    <li>I understand that contributions to individual federal legislators cannot exceed $2,700 each year.</li>
                    <li>I understand DR cannot be held responsible for its lobbying results.</li>
                    <li>I understand the recipient of my pledge will be decided by the majority vote of those who pledged to that issue.</li>
                    <li>I understand that if an advocate group becomes unavailable, or if a bill changes chambers or Congresses, or is combined with another bill, or if the
sponsor of a new or reintroduced bill is changed if that sponsor declines to do so, or a trustee currently displayed on our website is updated
before pledge funds are forwarded to them, DR will make these changes in accordance with, and in promotion of, the interests of that pledge
group. Such changes will then be announced on our website’s home page Announcement Section.</li>
                
                </ol></div>
            <br><br>
            <input type="hidden" id="phoneVerified" name="phoneVerified" value="not"/>
            <input type="hidden" id="addressVerified" name="addressVerified" />
            <input type="hidden" id="submitLatitude" name="submitLatitude" value="0"/>
            <input type="hidden" id="submitLongitude" name="submitLongitude" value="0"/>
            <input type ="hidden" name ="referer" value ="user_registration.php">
 
            <div style="width:100%; float:left;">
                <div  class="bodybold" style="width:20%;float:left;">
                Email Address*
                </div>
                <div style=" float:left;width:40%;">
                    <input type="text" name="email" id="email" size="50" value = "">
                </div>
                <div style=" float:left;width:40%;">
                    <span style="color: red;" id="errorEmail" class="errorMessage"></span>
                </div>
            </div> 
 
            <div style="width:100%; float:left;">
                <div  class="bodybold" style="width:20%;float:left;">
                Name Prefix*</div>
                <div style=" float:left;width:40%;">
                 <select name="namePrefix">
                        <option value="0" >Select</option>
                        <option value="Mr." >Mr.</option>
                        <option value="Ms." >Ms.</option>
                        <option value="Mrs." >Mrs.</option>
                    </select>
                </div>
                <div style=" float:left;width:40%;">
                
                <span style="color: red;" id="errorNamePrefix" class="errorMessage"></span></div>
            </div>  
 
          <div style="width:100%; float:left;">
                <div  class="bodybold" style="width:20%;float:left;">
                First Name*
                </div>
                <div style=" float:left;width:40%;">
                    <input type="text" name="firstName" id="firstName" size="50" value = "" >
                </div>
                <div style=" float:left;width:40%;">
                    <span style="color: red;" id="errorFirstName" class="errorMessage"></span>
                </div>
            </div> 
            
            <div style="width:100%; float:left;">
                <div  class="bodybold" style="width:20%;float:left;">
                Last Name*
                </div>
                <div style=" float:left;width:40%;">
                    <input type="text" name="lastName" id="lastName" size="50" value = "">
                </div>
                <div style=" float:left;width:40%;">
                    <span style="color: red;" id="errorLastName" class="errorMessage"></span>
                </div>
            </div> 
            
            <div style="width:100%; float:left;">
                <div  class="bodybold" style="width:20%;float:left;">
                Address*
                </div>
                <div style=" float:left;width:40%;">
                    <input type="text" name="address1" id="address1" size="50" value = "">
                </div>
                <div style=" float:left;width:40%;">
                    <span style="color: red;" id="errorAddress1" class="errorMessage"></span>
                </div>
            </div> 
            
            <div style="width:100%; float:left;">
                <div  class="bodybold" style="width:20%;float:left;">
                Address
                </div>
                <div style=" float:left;width:40%;">
                    <input type="text" name="address2" id="address2" size="50" value = "">
                </div>
                <div style=" float:left;width:40%;">
                   
                </div>
            </div> 
            <div style="width:100%; float:left;">
                <div  class="bodybold" style="width:20%;float:left;">
                City*
                </div>
                <div style=" float:left;width:40%;">
                    <input type="text" name="city" id="city" size="20" >
                </div>
                <div style=" float:left;width:40%;">
                   <span style="color: red;" id="errorCity" class="errorMessage"></span>
                </div>
            </div>
            <div style="width:100%; float:left;">
                <div  class="bodybold" style="width:20%;float:left;">
                State*
                </div>
                <div style=" float:left;width:40%;">
                    <input type="text" name="state" id="state" size="2" value = "">
                </div>
                <div style=" float:left;width:40%;">
                  <span style="color: red;" id="errorState" class="errorMessage"></span> 
                </div>
            </div> 
            
            <div style="width:100%; float:left;">
                <div  class="bodybold" style="width:20%;float:left;">
                ZIP
                </div>
                <div style=" float:left;width:40%;">
                    <input type="text" name="zipcode" id="zipcode" size="50" value = "">
                </div>
                <div style=" float:left;width:40%;">
                   <span style="color: red;" id="errorZipcode" class="errorMessage"></span>
                </div>
            </div> 
            
            <div style="width:100%; float:left;">
                <div  class="bodybold" style="width:20%;float:left;">
                Country/Region*
                </div>
                <div style=" float:left;width:40%;">
                    <select name="country" id="country" onchange="checkCountry();">
                        <option value="329">United States of America</option>
                        <?php
                        while($res_countries = $this->db->fetch_assoc())
                        {
                            ?>
                            <option value="" ></option>
                        <?php } ?>
                    </select>
                </div>
                <div style=" float:left;width:40%;">
                   
                </div>
            </div> 
            
            
            
            
             
            
             
             <p   class="bodybold">
                    <input type ="hidden" name ="referer" value ="user_registration.php">
                    <input id="submit_btn" class="submit_btn" type="button"
                           value="Click here to submit your registration"
                           onclick="checkForm();">
            </p>
    ';

    return $returnText;
    }

    public function getScripts()
    {
        $returnText = '
        <script>
            async function checkForm() {
               // alert("check form");
                let validate = true;
                //let valResult = await validateAddress();
                //alert("valResult = " +valResult);
                //if (validateAddress()) {submitForm("reg")};
                var privacy = document.getElementById("privacy_box");
                var street = document.getElementById("address1");
                var city = document.getElementById("city");
                var state = document.getElementById("state");
                var zipcode = document.getElementById("zipcode");
                var longitude =  document.getElementById("longitude");
                var latitude = document.getElementById("latitude");
                var email = document.getElementById("email");
                var firstName = document.getElementById("firstName");
                var lastName = document.getElementById("lastName");
                if (privacy.checked == false){
                   document.getElementById("policy_text").style.backgroundColor="yellow";
                   document.getElementById("policy_error").style.backgroundColor="red";
                   
                   validate = false;
                  } else {
                    document.getElementById("policy_text").style.backgroundColor="white";
                   document.getElementById("policy_error").style.backgroundColor="white";
                  }
                    
                if (email.value == "") {
                    document.getElementById("errorEmail")
                    .innerHTML = "Required!";
                    validate = false;
                } else document.getElementById("errorEmail")
                    .innerHTML = "";
                if (firstName.value == "") {
                    document.getElementById("errorFirstName")
                    .innerHTML = "Required!";
                    validate = false;
                } else document.getElementById("errorFirstName")
                    .innerHTML = "";
                if (lastName.value == "") {
                    document.getElementById("errorLastName")
                    .innerHTML = "Required!";
                    validate = false;
                } else document.getElementById("errorLastName")
                    .innerHTML = "";
                if (street.value == "") {
                    document.getElementById("errorAddress1")
                    .innerHTML = "Required!";
                    validate = false;
                } else document.getElementById("errorAddress1")
                    .innerHTML = "";
                if (city.value == "") {
                    document.getElementById("errorCity")
                    .innerHTML = "Required!";
                    validate = false;
                } else document.getElementById("errorCity")
                    .innerHTML = "";
                if (state.value == "") {
                    document.getElementById("errorState")
                    .innerHTML = "Required!";
                    validate = false;
                } else document.getElementById("errorState")
                    .innerHTML = "";
                if (zipcode.value == "") {
                    document.getElementById("errorZipcode")
                    .innerHTML = "Required!";
                    validate = false;
                } else document.getElementById("errorZipcode")
                    .innerHTML = "";
                var addresses = {
                    street: street.value,
                    city: city.value,
                    state: state.value,
                    zipcode: zipcode.value,
    
                }; 
                if(validate === true)
                validateAddress(addresses);
               
            }
            
            function submitForm(formName) {
                if (formName == "reg"){
                    //document.getElementById("email").value = "test";
                    //document.getElementById("errorEmail")
                    //.innerHTML = "Required!"
                    document.getElementById("registration_form").submit();
                }
                    /*if (formName == "up"){
                        document.getElementById("registration_update").submit();
                    }*/
            }
            
            function validateAddress(addresses) {
                //alert("validating address");
                
                //alert(addresses);
               var xxx =123;
               var url_string = addresses.street+" "+addresses.city+" "+addresses.state;
                
               
               //addresses.street + " " + addresses.city + " " 
               //+ addresses.state =" " +addresses.zipcode;//"1124 Thomas St Eureka CA 95503";
               let apikey = "2e48ff3f56a04fa4886379ffc380a9f8";
               var api_url = "https://api.opencagedata.com/geocode/v1/json"; 
               
               
               var request_url = api_url
                    + "?"
                    + "key=" + apikey
                    + "&q=" + encodeURIComponent(url_string)
                    + "&pretty=1"
                    + "&no_annotations=1"
                    + "&limit=1"
               //alert(request_url);
               //document.getElementById("errorEmail")
                    //.innerHTML = request_url;
                
                var request = new XMLHttpRequest();
                request.open("GET", request_url, true);
                request.onload = function() { 
                    //alert(request.status);
                    
                    if (request.status === 200){
                        // Success!
                        var data = JSON.parse(request.responseText);
                        //alert(JSON.stringify(data.results[0],null,5));
                        document.getElementById("errorEmail")
                            .innerHTML = JSON.stringify(data.results[0].components._category,null,5)
                        //alert(data.results[0].confidence+">>"+ data.results[0].formatted); // print the location
                            if (data.results[0].confidence > 6) {
                                var addressVerified = document.getElementById("addressVerified");
                                addressVerified.value = "true";
                                var lat = document.getElementById("submitLatitude");
                                lat.value = data.results[0].geometry.lat;
                                var long = document.getElementById("submitLongitude");
                                long.value = data.results[0].geometry.lng;
                                submitForm("reg");
                            } else {
                                alert("That is NOT a valid address");
                                addressVerified.value = "false";
                                
                            }
                         
                    } else if (request.status <= 500){
                        // We reached our target server, but it returned an error
    
                        console.log("unable to geocode! Response code: " + request.status);
                        var data = JSON.parse(request.responseText);
                        console.log("error msg: " + data.status.message);
                    } else {
                        console.log("server error");
                    }
                   
                }
                
                request.onerror = function() {
                    // There was a connection error of some sort
                    console.log("unable to connect to server");
                };

                request.send();  // make the request
            }
            
        </script>
        ';
        return $returnText;
        ;
    }
}?>