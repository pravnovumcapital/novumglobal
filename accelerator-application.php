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
  <?php if(!empty($_GET['success'])){ ?>
  <div class="alert alert-success">
    <strong>Success!</strong> Your application has been submitted. We will get back to you soon!
  </div>
  <?php } ?>
  <form action="submitapplication.php" name="application" method="POST">
    <div class="row">
      <div class="col-lg-6 v-pad home-r">
        <img src="img/img-form-apply.png" alt="">
      </div>
      <div class="col-lg-6 v-pad">
        <h1>Accelerator Application Form</h1>
        <br><br>
        <div class="v-pad">
          <p>Full Name*</p>
          <input type="text" class="input-style" name="fullname" id="fullname">
        </div>
        <div class="v-pad">
          <p>Email Address*</p>
          <input type="email" class="input-style" name="email" id="email">
        </div>
        <div class="v-pad">
          <p>Contact Number (With area code)*</p>
          <input type="number" class="input-style" name="contactnumber" id="contactnumber">
        </div>
        <div class="v-pad">
          <p>Based in*</p>
          <select name="companybasedin" id="companybasedin">
            <option value="default">Select country</option>
            <option >Afghanistan</option>
            <option>Åland Islands</option>
            <option>Albania</option>
            <option>Algeria</option>
            <option>American Samoa</option>
            <option>Andorra</option>
            <option>Angola</option>
            <option>Anguilla</option>
            <option>Antarctica</option>
            <option>Antigua and Barbuda</option>
            <option>Argentina</option>
            <option>Armenia</option>
            <option>Aruba</option>
            <option>Australia</option>
            <option>Austria</option>
            <option>Azerbaijan</option>
            <option>Bahamas</option>
            <option>Bahrain</option>
            <option>Bangladesh</option>
            <option>Barbados</option>
            <option>Belarus</option>
            <option>Belgium</option>
            <option>Belize</option>
            <option>Benin</option>
            <option>Bermuda</option>
            <option>Bhutan</option>
            <option>Bolivia, Plurinational State of</option>
            <option>Bonaire, Sint Eustatius and Saba</option>
            <option>Bosnia and Herzegovina</option>
            <option>Botswana</option>
            <option>Bouvet Island</option>
            <option>Brazil</option>
            <option>British Indian Ocean Territory</option>
            <option>Brunei Darussalam</option>
            <option>Bulgaria</option>
            <option>Burkina Faso</option>
            <option>Burundi</option>
            <option>Cambodia</option>
            <option>Cameroon</option>
            <option>Canada</option>
            <option>Cape Verde</option>
            <option>Cayman Islands</option>
            <option>Central African Republic</option>
            <option>Chad</option>
            <option>Chile</option>
            <option>China</option>
            <option>Christmas Island</option>
            <option>Cocos (Keeling) Islands</option>
            <option>Colombia</option>
            <option>Comoros</option>
            <option>Congo</option>
            <option>Congo, the Democratic Republic of the</option>
            <option>Cook Islands</option>
            <option>Costa Rica</option>
            <option>Côte d'Ivoire</option>
            <option>Croatia</option>
            <option>Cuba</option>
            <option>Curaçao</option>
            <option>Cyprus</option>
            <option>Czech Republic</option>
            <option>Denmark</option>
            <option>Djibouti</option>
            <option>Dominica</option>
            <option>Dominican Republic</option>
            <option>Ecuador</option>
            <option>Egypt</option>
            <option>El Salvador</option>
            <option>Equatorial Guinea</option>
            <option>Eritrea</option>
            <option>Estonia</option>
            <option>Ethiopia</option>
            <option>Falkland Islands (Malvinas)</option>
            <option>Faroe Islands</option>
            <option>Fiji</option>
            <option>Finland</option>
            <option>France</option>
            <option>French Guiana</option>
            <option>French Polynesia</option>
            <option>French Southern Territories</option>
            <option>Gabon</option>
            <option>Gambia</option>
            <option>Georgia</option>
            <option>Germany</option>
            <option>Ghana</option>
            <option>Gibraltar</option>
            <option>Greece</option>
            <option>Greenland</option>
            <option>Grenada</option>
            <option>Guadeloupe</option>
            <option>Guam</option>
            <option>Guatemala</option>
            <option>Guernsey</option>
            <option>Guinea</option>
            <option>Guinea-Bissau</option>
            <option>Guyana</option>
            <option>Haiti</option>
            <option>Heard Island and McDonald Islands</option>
            <option>Holy See (Vatican City State)</option>
            <option>Honduras</option>
            <option>Hong Kong</option>
            <option>Hungary</option>
            <option>Iceland</option>
            <option>India</option>
            <option>Indonesia</option>
            <option>Iran, Islamic Republic of</option>
            <option>Iraq</option>
            <option>Ireland</option>
            <option>Isle of Man</option>
            <option>Israel</option>
            <option>Italy</option>
            <option>Jamaica</option>
            <option>Japan</option>
            <option>Jersey</option>
            <option>Jordan</option>
            <option>Kazakhstan</option>
            <option>Kenya</option>
            <option>Kiribati</option>
            <option>Korea, Democratic People's Republic of</option>
            <option>Korea, Republic of</option>
            <option>Kuwait</option>
            <option>Kyrgyzstan</option>
            <option>Lao People's Democratic Republic</option>
            <option>Latvia</option>
            <option>Lebanon</option>
            <option>Lesotho</option>
            <option>Liberia</option>
            <option>Libya</option>
            <option>Liechtenstein</option>
            <option>Lithuania</option>
            <option>Luxembourg</option>
            <option>Macao</option>
            <option>Macedonia, the former Yugoslav Republic of</option>
            <option>Madagascar</option>
            <option>Malawi</option>
            <option>Malaysia</option>
            <option>Maldives</option>
            <option>Mali</option>
            <option>Malta</option>
            <option>Marshall Islands</option>
            <option>Martinique</option>
            <option>Mauritania</option>
            <option>Mauritius</option>
            <option>Mayotte</option>
            <option>Mexico</option>
            <option>Micronesia, Federated States of</option>
            <option>Moldova, Republic of</option>
            <option>Monaco</option>
            <option>Mongolia</option>
            <option>Montenegro</option>
            <option>Montserrat</option>
            <option>Morocco</option>
            <option>Mozambique</option>
            <option>Myanmar</option>
            <option>Namibia</option>
            <option>Nauru</option>
            <option>Nepal</option>
            <option>Netherlands</option>
            <option>New Caledonia</option>
            <option>New Zealand</option>
            <option>Nicaragua</option>
            <option>Niger</option>
            <option>Nigeria</option>
            <option>Niue</option>
            <option>Norfolk Island</option>
            <option>Northern Mariana Islands</option>
            <option>Norway</option>
            <option>Oman</option>
            <option>Pakistan</option>
            <option>Palau</option>
            <option>Palestinian Territory, Occupied</option>
            <option>Panama</option>
            <option>Papua New Guinea</option>
            <option>Paraguay</option>
            <option>Peru</option>
            <option>Philippines</option>
            <option>Pitcairn</option>
            <option>Poland</option>
            <option>Portugal</option>
            <option>Puerto Rico</option>
            <option>Qatar</option>
            <option>Réunion</option>
            <option>Romania</option>
            <option>Russian Federation</option>
            <option>Rwanda</option>
            <option>Saint Barthélemy</option>
            <option>Saint Helena, Ascension and Tristan da Cunha</option>
            <option>Saint Kitts and Nevis</option>
            <option>Saint Lucia</option>
            <option>Saint Martin (French part)</option>
            <option>Saint Pierre and Miquelon</option>
            <option>Saint Vincent and the Grenadines</option>
            <option>Samoa</option>
            <option>San Marino</option>
            <option>Sao Tome and Principe</option>
            <option>Saudi Arabia</option>
            <option>Senegal</option>
            <option>Serbia</option>
            <option>Seychelles</option>
            <option>Sierra Leone</option>
            <option>Singapore</option>
            <option>Sint Maarten (Dutch part)</option>
            <option>Slovakia</option>
            <option>Slovenia</option>
            <option>Solomon Islands</option>
            <option>Somalia</option>
            <option>South Africa</option>
            <option>South Georgia and the South Sandwich Islands</option>
            <option>South Sudan</option>
            <option>Spain</option>
            <option>Sri Lanka</option>
            <option>Sudan</option>
            <option>Suriname</option>
            <option>Svalbard and Jan Mayen</option>
            <option>Swaziland</option>
            <option>Sweden</option>
            <option>Switzerland</option>
            <option>Syrian Arab Republic</option>
            <option>Taiwan, Province of China</option>
            <option>Tajikistan</option>
            <option>Tanzania, United Republic of</option>
            <option>Thailand</option>
            <option>Timor-Leste</option>
            <option>Togo</option>
            <option>Tokelau</option>
            <option>Tonga</option>
            <option>Trinidad and Tobago</option>
            <option>Tunisia</option>
            <option>Turkey</option>
            <option>Turkmenistan</option>
            <option>Turks and Caicos Islands</option>
            <option>Tuvalu</option>
            <option>Uganda</option>
            <option>Ukraine</option>
            <option>United Arab Emirates</option>
            <option>United Kingdom</option>
            <option>United States</option>
            <option>United States Minor Outlying Islands</option>
            <option>Uruguay</option>
            <option>Uzbekistan</option>
            <option>Vanuatu</option>
            <option>Venezuela, Bolivarian Republic of</option>
            <option>Viet Nam</option>
            <option>Virgin Islands, British</option>
            <option>Virgin Islands, U.S.</option>
            <option>Wallis and Futuna</option>
            <option>Western Sahara</option>
            <option>Yemen</option>
            <option>Zambia</option>
            <option>Zimbabwe</option>
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
            <option>Protocols & Infrastructure</option>
	    <option>Decentralised Applications</option>
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
          <p>List all team members’ LinkedIn profile URLs - including yours.*</p>
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
