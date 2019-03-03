<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Novum Global Ventures - Accelerator Application Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap & Jquery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/form-validation.js"></script>
    <!-- Fonts & FontAwesome -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,600,600i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
      .error{
        color: red;
        margin-top: 12px;
      }
    </style>

    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="animate.css" rel="stylesheet" type="text/css" />
    <link href="magnific-popup.css" rel="stylesheet">
    <link href="sidemenu.css" rel="stylesheet">
    <link href="flexslider.css" rel="stylesheet" type="text/css" />
    <link href="media-queries.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>


<style>

.white-popup {
	position: relative;
	background: #252525;
	width: auto;
	max-width: 750px;
	margin: 25px auto;
	padding: 50px 25px;
}

#participateform {
	max-width: 555px !important;
}

.white-popup h1, .white-popup h2, .white-popup p {color:;}

.mfp-bg {
	background: #f8992b;
}
.mfp-close-btn-in .mfp-close {
	color: #360e0e;
}
.mfp-close {
	font-size: 36px;
}


</style>

<!-- Add sidemenu -->
<script>
(function($){
	// Menu Functions
	$(document).ready(function(){
  	$('#menuToggle').click(function(e){
    	var $parent = $(this).parent('nav');
      $parent.toggleClass("open");
      var navState = $parent.hasClass('open') ? "hide" : "show";
      $(this).attr("title", navState + " navigation");
			// Set the timeout to the animation length in the CSS.
			setTimeout(function(){
				console.log("timeout set");
				$('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
			}, 200);
    	e.preventDefault();
  	});
  });
})(jQuery);

          function closeSidebar(e) {
            var obj = event.target;
            var $parent = $('nav');
            $parent.toggleClass("open");
            var navState = $parent.hasClass('open') ? "hide" : "show";
            $(obj).attr("title", navState + " navigation");
            setTimeout(function () {
              $('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
            }, 200);
          }

   </script>

</head>
<body>
  
<!------------ Navigation start ------------>
<header>
  <div class="container">
    <a href="index.html"><div id="logo"><img src="img/logo.png" alt=""></div></a>
    <ul id="menu">
      <li>
        <div class="dropdown">
          <a href="">What we do <i class="fa fa-angle-down"></i></a>
          <div class="dropdown-content">
            <p><a href="accelerator.html">Accelerator</a></p>
            <p><a href="sto.html">STOs</a></p>
            <p><a href="ico.html">ICOs</a></p>
            <p><a href="fundraising.html">Fundraising</a></p>
          </div>
        </div>      
      </li>
      <!--<li>
        <div class="dropdown">
          <a href="">Resources <i class="fa fa-angle-down"></i></a>
          <div class="dropdown-content">
            <p><a href="ideas-and-analysis.html">Ideas and Analysis</a></p>
            <p><a href="conference.html">Conference</a></p>
            <p><a href="collaboration.html">Collaboration</a></p>
          </div>
        </div>      
      </li>-->
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
    <nav>
      <a href="" id="menuToggle" title="show menu">
        <span class="navClosed"></span>
      </a>
      <label for="drop-1" href="#" class="nav-dropdown toggle">What we do
        <i class="fa fa-angle-down"></i>
      </label>
      <a href="#">What we do</a>
      <input type="checkbox" id="drop-1" />
      <div class="drop-content">
        <p>
          <a href="accelerator.html">Accelerator</a>
        </p>
        <p>
          <a href="sto.html">STOs</a>
        </p>
        <p>
          <a href="ico.html">ICOs</a>
        </p>
        <p>
          <a href="fundraising.html">Fundraising</a>
        </p>
      </div>
      <!--<label for="drop-2" href="#" class="nav-dropdown toggle">Resources
        <i class="fa fa-angle-down"></i>
      </label>
      <a href="#">Resources</a>
      <input type="checkbox" id="drop-2" />
      <div class="drop-content">
        <p>
          <a href="ideas-and-analysis.html">Ideas and Analysis</a>
        </p>
        <p>
          <a href="conference.html">Conference</a>
        </p>
        <p>
          <a href="collaboration.html">Collaboration</a>
        </p>
      </div>-->
      <a href="about.html">About</a>
      <a href="contact.html">Contact</a>
    </nav>
  </div>
</header>
<!------------ Navigation end ------------>

<!------------ Accelerator Application form start ------------>
<section class="acc-application">
  <div class="container">
  <form action="submitapplication.php" name="application" method="POST">
    <div class="row">
      <div class="col-lg-6 v-pad home-r">
        <img src="img/img-form-apply.png" alt="">
      </div>
      <div class="col-lg-6 v-pad">
        <h1>Accelerator Application Form</h1>
        <br><br>
        <div class="v-pad">
          <p>Full Name</p>
          <input type="text" class="input-style" name="fullname" id="fullname">
        </div>
        <div class="v-pad">
          <p>Email Address</p>
          <input type="email" class="input-style" name="email" id="email">
        </div>
        <div class="v-pad">
          <p>Contact Number (With area code)</p>
          <input type="number" class="input-style" name="contactnumber" id="contactnumber">
        </div>
        <div class="v-pad">
          <p>Based in</p>
          <select name="companybasedin" id="companybasedin">
            <option value="default">Select country</option>
            <option value="AF">Afghanistan</option>
            <option value="AX">Åland Islands</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AO">Angola</option>
            <option value="AI">Anguilla</option>
            <option value="AQ">Antarctica</option>
            <option value="AG">Antigua and Barbuda</option>
            <option value="AR">Argentina</option>
            <option value="AM">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaijan</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia, Plurinational State of</option>
            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
            <option value="BA">Bosnia and Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BV">Bouvet Island</option>
            <option value="BR">Brazil</option>
            <option value="IO">British Indian Ocean Territory</option>
            <option value="BN">Brunei Darussalam</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="KH">Cambodia</option>
            <option value="CM">Cameroon</option>
            <option value="CA">Canada</option>
            <option value="CV">Cape Verde</option>
            <option value="KY">Cayman Islands</option>
            <option value="CF">Central African Republic</option>
            <option value="TD">Chad</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CX">Christmas Island</option>
            <option value="CC">Cocos (Keeling) Islands</option>
            <option value="CO">Colombia</option>
            <option value="KM">Comoros</option>
            <option value="CG">Congo</option>
            <option value="CD">Congo, the Democratic Republic of the</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CI">Côte d'Ivoire</option>
            <option value="HR">Croatia</option>
            <option value="CU">Cuba</option>
            <option value="CW">Curaçao</option>
            <option value="CY">Cyprus</option>
            <option value="CZ">Czech Republic</option>
            <option value="DK">Denmark</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="DO">Dominican Republic</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egypt</option>
            <option value="SV">El Salvador</option>
            <option value="GQ">Equatorial Guinea</option>
            <option value="ER">Eritrea</option>
            <option value="EE">Estonia</option>
            <option value="ET">Ethiopia</option>
            <option value="FK">Falkland Islands (Malvinas)</option>
            <option value="FO">Faroe Islands</option>
            <option value="FJ">Fiji</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GF">French Guiana</option>
            <option value="PF">French Polynesia</option>
            <option value="TF">French Southern Territories</option>
            <option value="GA">Gabon</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadeloupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GG">Guernsey</option>
            <option value="GN">Guinea</option>
            <option value="GW">Guinea-Bissau</option>
            <option value="GY">Guyana</option>
            <option value="HT">Haiti</option>
            <option value="HM">Heard Island and McDonald Islands</option>
            <option value="VA">Holy See (Vatican City State)</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IR">Iran, Islamic Republic of</option>
            <option value="IQ">Iraq</option>
            <option value="IE">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JE">Jersey</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="KP">Korea, Democratic People's Republic of</option>
            <option value="KR">Korea, Republic of</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Lao People's Democratic Republic</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macao</option>
            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
            <option value="MG">Madagascar</option>
            <option value="MW">Malawi</option>
            <option value="MY">Malaysia</option>
            <option value="MV">Maldives</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MH">Marshall Islands</option>
            <option value="MQ">Martinique</option>
            <option value="MR">Mauritania</option>
            <option value="MU">Mauritius</option>
            <option value="YT">Mayotte</option>
            <option value="MX">Mexico</option>
            <option value="FM">Micronesia, Federated States of</option>
            <option value="MD">Moldova, Republic of</option>
            <option value="MC">Monaco</option>
            <option value="MN">Mongolia</option>
            <option value="ME">Montenegro</option>
            <option value="MS">Montserrat</option>
            <option value="MA">Morocco</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Namibia</option>
            <option value="NR">Nauru</option>
            <option value="NP">Nepal</option>
            <option value="NL">Netherlands</option>
            <option value="NC">New Caledonia</option>
            <option value="NZ">New Zealand</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Niger</option>
            <option value="NG">Nigeria</option>
            <option value="NU">Niue</option>
            <option value="NF">Norfolk Island</option>
            <option value="MP">Northern Mariana Islands</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau</option>
            <option value="PS">Palestinian Territory, Occupied</option>
            <option value="PA">Panama</option>
            <option value="PG">Papua New Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PH">Philippines</option>
            <option value="PN">Pitcairn</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="RE">Réunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russian Federation</option>
            <option value="RW">Rwanda</option>
            <option value="BL">Saint Barthélemy</option>
            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
            <option value="KN">Saint Kitts and Nevis</option>
            <option value="LC">Saint Lucia</option>
            <option value="MF">Saint Martin (French part)</option>
            <option value="PM">Saint Pierre and Miquelon</option>
            <option value="VC">Saint Vincent and the Grenadines</option>
            <option value="WS">Samoa</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome and Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SX">Sint Maarten (Dutch part)</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="SO">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="GS">South Georgia and the South Sandwich Islands</option>
            <option value="SS">South Sudan</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SJ">Svalbard and Jan Mayen</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syrian Arab Republic</option>
            <option value="TW">Taiwan, Province of China</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania, United Republic of</option>
            <option value="TH">Thailand</option>
            <option value="TL">Timor-Leste</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad and Tobago</option>
            <option value="TN">Tunisia</option>
            <option value="TR">Turkey</option>
            <option value="TM">Turkmenistan</option>
            <option value="TC">Turks and Caicos Islands</option>
            <option value="TV">Tuvalu</option>
            <option value="UG">Uganda</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela, Bolivarian Republic of</option>
            <option value="VN">Viet Nam</option>
            <option value="VG">Virgin Islands, British</option>
            <option value="VI">Virgin Islands, U.S.</option>
            <option value="WF">Wallis and Futuna</option>
            <option value="EH">Western Sahara</option>
            <option value="YE">Yemen</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
          </select>
        </div>
      </div>
    </div>
    <br><br>
    <h2>The Company</h2>
    <div class="separator"></div>
    <div class="row">
      <div class="col-lg-6">
        <div class="v-pad">
          <p>Company Name</p>
          <input type="text" class="input-style" name="companyname" id="companyname">
        </div>
        <div class="v-pad">
          <p>Company Website if applicable</p>
          <input type="text" class="input-style" name="companywebsite" id="companywebsite">
        </div>
        <div class="v-pad">
          <p>Industry*</p>
          <select  name="industry" id="industry">
            <option value="default">Select a category</option>
            <option>Financial Services</option>
            <option>Blockchain Enterprise Solutions</option>
            <option>Stable Currencies</option>
            <option value="1">Others (state)</option>
          </select>
        </div>
        <div id="hidden_div" class="v-pad" style="display: none;" >
          <input type="text" class="input-style" placeholder="Please state" name="industrystate" id="industrystate">
        </div>
        <div class="v-pad">
          <p>Describe Concept*</p>
          <textarea class="input-style" placeholder="Elevator Pitch (Max 60 characters)" name="concept_desc" id="concept_desc" ></textarea>
        </div>
        <div class="v-pad">
          <p>What is the current stage of your concept?*</p>
          <input type="text" class="input-style" placeholder="eg: idea, Proof of Concept, MVP, Live" name="concept_stage" id="concept_stage">
        </div>
      </div>
      <div class="col-lg-6 ">
        <div class="v-pad">
          <p>Do you have a working prototype or product?</p>
          <input type="text" class="input-style" placeholder="If yes, please share link to prototype/product/demo" name="working_prototype" id="working_prototype">
        </div>  
        <div class="v-pad">
          <p>What real-world problem are you solving with your concept?</p>
          <input type="text" class="input-style" name="realworld_problem" id="realworld_problem">
        </div>  
        <div class="v-pad">
          <p>How many people would your solution help? (Market size)</p>
          <input type="text" class="input-style" name="market_size" id="market_size">
        </div>  
        <div class="v-pad">
          <p>Why did you choose this concept?</p>
          <textarea class="input-style" name="concept_reason" id="concept_reason"></textarea>
        </div>
        <div class="v-pad">
          <p>Give two use-cases for your concept in detail.</p>
          <textarea class="input-style" style="height:185px;" name="use_cases" id="use_cases"></textarea>
        </div>
      </div>
    </div>
    <br><br><br><br>
    <h2>The Team and Experience</h2>
    <div class="separator"></div>
    <div class="row">
      <div class="col-lg-6">
        <div class="v-pad">
          <p>What is your experience running a start-up or tech company?*</p>
          <textarea class="input-style" name="experience" id="experience"></textarea>
        </div> 
        <div class="v-pad">
          <p>What is your team size?</p>
          <input type="text" class="input-style" name="team_size" id="team_size">
        </div>
        <div class="v-pad">
          <p>List all team members’ LinkedIn profile URLs - including yours.</p>
          <textarea class="input-style" name="linked_in_profiles" id="linked_in_profiles"></textarea>
        </div>  
        <div class="v-pad">
          <p>Do you have a go-to-market strategy? If yes, please explain in detail.</p>
          <textarea class="input-style" name="goto_market_strategy" id="goto_market_strategy"></textarea>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="v-pad">
          <p>Who are your competitors and what is your advantage?</p>
          <textarea class="input-style" name="competetors" id="competetors"></textarea>
        </div> 
        <div class="v-pad">
          <p>Do you currently generate any revenue from the company?</p>
          <input type="text" class="input-style" name="current_revenew" id="current_revenew">
        </div> 
        <div class="v-pad">
          <p>What do you hope to get out of this accelerator programme?</p>
          <textarea class="input-style" name="hope_accelarator" id="hope_accelarator"></textarea>
        </div> 
        <div class="v-pad">
          <p>How did you hear about us?</p>
          <input type="text" class="input-style" name="how_did_hear" id="how_did_hear">
        </div> 
      </div>
    </div>
    <br><br><br>
    <div style="text-align:center">
      <button class="btn" type="submit">Submit</button>
    </div>
  </div>
  </form>
</section>
<!------------ Accelerator Application form end ------------>




<footer>
  <div class="container">
    <p class="small-font">© 2019 Novum Global Ventures. ALL RIGHTS RESERVED.</p>
  </div>
</footer>

<script>
document.getElementById('industry').addEventListener('change', function () {
    var style = this.value == 1 ? 'block' : 'none';
    document.getElementById('hidden_div').style.display = style;
});
</script>

<!---------- Add tab ------------>
<script>
function tokenCurrency(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<!-- Apply class change on window scroll --> 
<script>
$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("header")[addRemClass]('bgChange');
});
</script>    


<!-- Animate element -->
<script src="js/wow.js"></script>
<script>
new WOW().init();
</script>

<script>
$(window).scroll(function() {
  var addRemClass = $(window).scrollTop() > 0 ? 'addClass' : 'removeClass';
    $("#header")[addRemClass]('bgChange');
});
</script>

<script>
(function(d){d.each(["backgroundColor","borderBottomColor","borderLeftColor","borderRightColor","borderTopColor","color","outlineColor"],function(f,e){d.fx.step[e]=function(g){if(!g.colorInit){g.start=c(g.elem,e);g.end=b(g.end);g.colorInit=true}g.elem.style[e]="rgb("+[Math.max(Math.min(parseInt((g.pos*(g.end[0]-g.start[0]))+g.start[0]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[1]-g.start[1]))+g.start[1]),255),0),Math.max(Math.min(parseInt((g.pos*(g.end[2]-g.start[2]))+g.start[2]),255),0)].join(",")+")"}});function b(f){var e;if(f&&f.constructor==Array&&f.length==3){return f}if(e=/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(f)){return[parseInt(e[1]),parseInt(e[2]),parseInt(e[3])]}if(e=/rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(f)){return[parseFloat(e[1])*2.55,parseFloat(e[2])*2.55,parseFloat(e[3])*2.55]}if(e=/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(f)){return[parseInt(e[1],16),parseInt(e[2],16),parseInt(e[3],16)]}if(e=/#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(f)){return[parseInt(e[1]+e[1],16),parseInt(e[2]+e[2],16),parseInt(e[3]+e[3],16)]}if(e=/rgba\(0, 0, 0, 0\)/.exec(f)){return a.transparent}return a[d.trim(f).toLowerCase()]}function c(g,e){var f;do{f=d.css(g,e);if(f!=""&&f!="transparent"||d.nodeName(g,"body")){break}e="backgroundColor"}while(g=g.parentNode);return b(f)}var a={aqua:[0,255,255],azure:[240,255,255],beige:[245,245,220],black:[0,0,0],blue:[0,0,255],brown:[165,42,42],cyan:[0,255,255],darkblue:[0,0,139],darkcyan:[0,139,139],darkgrey:[169,169,169],darkgreen:[0,100,0],darkkhaki:[189,183,107],darkmagenta:[139,0,139],darkolivegreen:[85,107,47],darkorange:[255,140,0],darkorchid:[153,50,204],darkred:[139,0,0],darksalmon:[233,150,122],darkviolet:[148,0,211],fuchsia:[255,0,255],gold:[255,215,0],green:[0,128,0],indigo:[75,0,130],khaki:[240,230,140],lightblue:[173,216,230],lightcyan:[224,255,255],lightgreen:[144,238,144],lightgrey:[211,211,211],lightpink:[255,182,193],lightyellow:[255,255,224],lime:[0,255,0],magenta:[255,0,255],maroon:[128,0,0],navy:[0,0,128],olive:[128,128,0],orange:[255,165,0],pink:[255,192,203],purple:[128,0,128],violet:[128,0,128],red:[255,0,0],silver:[192,192,192],white:[255,255,255],yellow:[255,255,0],transparent:[255,255,255]}})(jQuery);
</script>

</body>
</html>