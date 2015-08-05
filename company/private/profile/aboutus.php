<?php include('../../../components/config.php'); ?><? $preview_link=$root_path."company/public/profile/about-us.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../favicon.ico">

    <title>Bootstrap</title>

    <?php include('../../../components/private/layout/header_css.php'); ?>   
    
	<?php include('../../../components/private/layout/header_js.php'); ?>
    
  </head>

<body>
<!-- header logo: style can be found in header.less -->

<div class="wrapper row-offcanvas row-offcanvas-left">
<?php include('../../../components/private/menus/left_menu_private.php'); ?>
            
            
            
            <aside class="right-side">
            <?php include('../../../components/private/menus/top_menu_private.php'); ?>
                

                <!-- Main content -->
                <section class="content">
                <!-- Content Header (Page header) -->
                <section class="content-header col-md-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> <a href="../../../general/private/index.php">Home</a></li>
                        <li><a href="../index.php">Company Home</a></li>
                        <li class="active">About us</li>
                    </ol>
                </section>
                
                
                
                
                
                
                
                
                <div class="row clearfix">
                <div class="col-lg-8 col-md-9 col-sm-12">
                <div class="box-user-info">
                <div class="row clearfix">
                <div class="col-md-4">
                <p><strong>Name:</strong> Jan-Willem Dijkstra</p>
                <p><strong>Street:</strong> Denfielstraat</p>
                <p><strong>Postcode/City:</strong> 1834 LK</p>
                <p><strong>State:</strong> Noord-Holland</p>
                <p><strong>Country:</strong> The Netherlands</p>
                </div>
                <div class="col-md-4">
                <p><strong>Age:</strong> 45</p>
                <p><strong>Telephone:</strong> 06-89453487</p>
                <p><strong>Mobile:</strong> 06-893487</p>
                <p><strong>Email:</strong> Info@peperkamp.nl</p>
                <p><strong>Availability:</strong> Yes</p>
                </div>
                <div class="col-md-4">
                <p><strong>Date published:</strong> 09/06/2013</p>
                <p><strong>Last updated:</strong> 09/09/2013</p>
                <p><strong>Verified status:</strong> Status</p>
                <p><a href="#">Download vcard</a></p>
                <p><a href="#">Export profile to csv</a></p>
                </div>
                </div>
                </div>
                
                <div class="box">
                
                <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"><a href="#company" aria-controls="home" role="tab" data-toggle="tab">Company info</a></li>
    	<li role="presentation" class="active"><a href="#about" aria-controls="home" role="tab" data-toggle="tab">About us</a></li>  
    <li role="presentation"><a href="#upload" aria-controls="profile" role="tab" data-toggle="tab">Upload</a></li>
    </ul>
                
                
                
                 <!-- Tab panes -->
  <div class="tab-content">
  
          <div role="tabpanel" class="tab-pane" id="company">
          <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <span>Locations </span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
      <p><strong>Address</strong></p>
      
      <p>Type of location [Location]</p>
      
      <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					 <input type="checkbox" name="answer" value="answer1"> Visitors address
                     <br>
                     <input type="checkbox" name="answer" value="answer3">  Headquarter
                     <br>
					  </div>
					  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <input type="checkbox" name="answer" value="answer5"> Postal address
                      <br>
                      <input type="checkbox" name="answer" value="answer4">  Branch office
                      <br>
					  </div>
					 <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					 <input type="checkbox" name="answer" value="answer2"> Schipping address
					 </div>
      
        </div>
        
        <div class="row body-box">
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
					<label><strong>Street</strong></label>
                    <br>
					<input type="text" class="form-control" placeholder="Street name">
				</div>

				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					<label><strong>Housenumber</strong></label>
                    <br>
					<input type="text" class="form-control" placeholder="Housenumber">
				</div>
			</div>
            
          <div class="row body-box">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Postal code</strong></label>
                    <br>
					<input type="text" class="form-control" placeholder="Postal code">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>City</strong></label>
                    <br>
					<input type="text" class="form-control" placeholder="City">
				</div>
			</div>  
        
        <div class="row body-box">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<b>Province/County</b><br>
					<input type="text" class="form-control" placeholder="Province/County">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<b>Country</b><br>
					<select class="select form-control">
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
      
      <hr>
      
      <p><strong>Contact</strong></p>
      
      <label><strong>Telephone number</strong></label>
      <br>
      <input type="text" class="form-control" placeholder="Telephone number">
      <br>
      <label><strong>URL Website</strong></label>
      <br>
      <input type="text" class="form-control" placeholder="URL website">
      <br>
      <label><strong>Email address</strong></label>
      <br>
      <input type="text" class="form-control" placeholder="Email address">
      
      <hr>
      
      
      <p><strong>Messengers</strong></p>
      
      <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Skype</strong></label>
                    <br>
					<input type="text" class="form-control" placeholder="Skype">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Facebook messenger</strong></label>
                    <br>
					<input type="text" class="form-control" placeholder="Facebook messenger">
				</div>
			</div>
      
      
      <div class="row body-box">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Google talk</strong></label>
                    <br>
					<input type="text" class="form-control" placeholder="Skype">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>ICQ</strong></label>
                    <br>
					<input type="text" class="form-control" placeholder="Facebook messenger">
				</div>
			</div>
            
            <hr>
            
            <div class="row">
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					<input type="checkbox" name="answer" value="answer3">&nbsp;Monday
				</div>
				
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
                
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                to
                </div>
                
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
			</div>
            <br>

            
            <div class="row">
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					<input type="checkbox" name="answer" value="answer3">&nbsp;Tuesday
				</div>
				
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
                
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                to
                </div>
                
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
			</div>
            <br>

            
            
            <div class="row">
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					<input type="checkbox" name="answer" value="answer3">&nbsp;Wednesday
				</div>
				
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
                
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                to
                </div>
                
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
			</div>
            <br>

            
            
            <div class="row">
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					<input type="checkbox" name="answer" value="answer3">&nbsp;Thursday
				</div>
				
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
                
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                to
                </div>
                
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
			</div>
            <br>

            
            
            <div class="row">
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					<input type="checkbox" name="answer" value="answer3">&nbsp;Friday
				</div>
				
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
                
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                to
                </div>
                
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
			</div>
            <br>
            
            
            <div class="row">
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					<input type="checkbox" name="answer" value="answer3">&nbsp;Saturday
				</div>
				
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
                
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                to
                </div>
                
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
			</div>
            <br>

            
            <div class="row">
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					<input type="checkbox" name="answer" value="answer3">&nbsp;Sunday
				</div>
				
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
                
                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                to
                </div>
                
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="input-group clockpicker">
                    <input type="text" class="form-control" value="09:30">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                    </div>
				</div>
			</div>
            
            
      
        
        </div>
        </li>
        </ul>
        </li>
        
        <li class="treeview active">
          <a href="#">
            <span>Financial</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <label><strong>CoC number</strong></label>
              <br>
              <input type="text" class="form-control" placeholder="CoC number">
              <br>
              <label><strong>VAT number</strong></label>
              <br>
              <input type="text" class="form-control" placeholder="VAT number">
              <br>
              
              <label><strong>Fiscal number</strong></label>
              <br>
              <input type="text" class="form-control" placeholder="Fiscal number">
              <br>
              
              <div class="row">

		
		<div class="col-xs-4 col-sm-2 col-md-1 text-center">	
				<label for="visa"><img src="../../../img/Visa.png" class="payment-icons" /></label><br>
				<input class="paymethod" type="checkbox" name="paymethod" value="ideal" id="ideal"/>
		</div>
		<div class="col-xs-4 col-sm-1 col-md-1 text-center">	
				<label for="mastercard"><img src="../../../img/Mastercard.png" class="payment-icons"  /></label><br>
				<input class="paymethod" type="checkbox" name="paymethod" value="ideal" id="ideal"/>
		</div>	


		<div class="col-xs-2 col-sm-1 col-md-1 text-center">		
				<label for="americ_expr"><img src="../../../img/American-Express.png" class="payment-icons" /></label><br>
				<input class="paymethod" type="checkbox" name="paymethod" value="ideal" id="ideal"/>
		</div>	


		<div class="col-xs-4 col-sm-3 col-md-1 text-center">		
				<label for="paypal"><img src="../../../img/PayPal-logo.png" class="payment-icons" /></label><br>
				<input class="paymethod" type="checkbox" name="paymethod" value="ideal" id="ideal"/>
		</div>	


		<div class="col-xs-3 col-sm-2 col-md-1 text-center">		
				<label for="skrill"><img src="../../../img/skrill.jpg" class="payment-icons" /></label><br>
				<input class="paymethod" type="checkbox" name="paymethod" value="ideal" id="ideal"/>
		</div>
		
          		<div class="col-xs-1 col-sm-2 col-md-1 text-center" st>
				<label for="ideal"><img src="../../../img/iDeal.png" class="payment-icons" /> </label><br>
					<input class="paymethod" type="checkbox" name="paymethod" value="ideal" id="ideal"/>
				
		</div>


		          		<div class="col-xs-1 col-sm-2 col-md-1 text-center" st>
				<label for="ideal"><img src="../../../img/Western-Union.png" class="payment-icons" /> </label><br>
					<input class="paymethod" type="checkbox" name="paymethod" value="ideal" id="ideal"/>
				
		</div>
				          		<div class="col-xs-1 col-sm-2 col-md-1 text-center" st>
				<label for="ideal"><img src="../../../img/Ukash.png" class="payment-icons" /> </label><br>
					<input class="paymethod" type="checkbox" name="paymethod" value="ideal" id="ideal"/>
				
		</div>
				          		<div class="col-xs-1 col-sm-2 col-md-1 text-center" st>
				<label for="ideal"><img src="../../../img/CB.png" class="payment-icons" /> </label><br>
					<input class="paymethod" type="checkbox" name="paymethod" value="ideal" id="ideal"/>
				
		</div>

		<div class="col-xs-1 col-sm-2 col-md-1 text-center" st>
				<label for="ideal"><img src="../../../img/escrow.png" class="payment-icons" /> </label><br>
					<input class="paymethod" type="checkbox" name="paymethod" value="escrow" id="ideal"/>
				
		</div>
			</div>
            
            <label><strong>IBAN</strong></label>
            <br>
            <input type="text" class="form-control" placeholder="IBAN">
            <br>
            
            <label><strong>BIC/SWIFT</strong></label>
            <br>
            <input type="text" class="form-control" placeholder="BIC/SWIFT">
            <br>
            
            <label><strong>Paypal</strong></label>
            <br>
            <input type="text" class="form-control" placeholder="Paypal">
            <br>
            
            <label><strong>Skrill</strong></label>
            <br>
            <input type="text" class="form-control" placeholder="Skrill">
            <br>
            
            
            
            
              
              </div>
              </li>
              </ul>
              </li>
             
        <li class="treeview active">
          <a href="#">
            <span>Partners</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <select class="select form-control">
							<option>Select a partner</option>
							<option>Video 1</option>
							<option>Video 2</option>
					</select>
              <div>&nbsp;</div>
              
              <label><strong>Partner company name</strong></label>
              <br>
              <input type="text" class="form-control" placeholder="Title partner">
              <br>
              
              <label><strong>Partner company e-mail</strong></label>
              <br>
              <input type="text" class="form-control" placeholder="Title partner">
              <br>
              
              <label><strong>Partner company title</strong></label>
              <br>
              <input type="text" class="form-control" placeholder="Title partner">
              <br>
              
              <label><strong>Partner company URL</strong></label>
              <br>
              <input type="text" class="form-control" placeholder="URL Partner">              
              <br>
              
              <label><strong>Description partner</strong></label>
              <br>
              <textarea class="form-control" rows="5" style="max-width:750px" placeholder="hupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepup"></textarea>
              
              <div>&nbsp;</div>
              
              <div class="btn-pull-right"><button id="loading-example-btn" class="btn btn-info">Add another</button>
              <button id="loading-example-btn" class="btn btn-info">Delete</button>
              </div>
              
              
              </div>
              </li>
              </ul>
              </li>
              
              
               <li class="treeview active">
          <a href="#">
            <span>Shipping address</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <p><strong>Shipping address</strong></p>
              <input class="paymethod" type="checkbox" name="Shipping address" value="false" /> Same as default address
              
              <div>&nbsp;</div>
              
              <div class="row body-box">
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
					<label><strong>Street</strong></label>
                    <br>
					<input type="text" class="form-control" placeholder="Street name">
				</div>

				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					<label><strong>Housenumber</strong></label>
                    <br>
					<input type="text" class="form-control" placeholder="Housenumber">
				</div>
			</div>
            
            <div class="row body-box">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Postal code</strong></label>
                    <br>
					<input type="text" class="form-control" placeholder="Postal code">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>City</strong></label>
                    <br>
					<input type="text" class="form-control" placeholder="City">
				</div>
			</div>
            
            <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Province/County</strong></label>
                    <br>
					<input type="text" class="form-control" placeholder="Province/County">
				</div>

				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Country</strong></label>
                    <br>
					<select class="select form-control">
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
      <hr>

              
              
              </div>
              </li>
              </ul>
              </li>
        
        </ul>
        
        </div>
        
        <div class="btn-pull-right"><button id="loading-example-btn" class="btn btn-info">Edit/save</button></div>
        
        </div>


  <div role="tabpanel" class="tab-pane active" id="about">
  <div class="pull-right">share: 
    <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
    <div class="clear">&nbsp;</div>
    
    
 
    <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <span>Company description </span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
				
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label><strong>Number of employees</strong></label>
                    <br>
						<input type="text" class="form-control" placeholder="Test 2"> 
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<label>Staff association</label><br>
						<input type="text" class="form-control" placeholder="Test 2"> 
					</div>
				</div>
                
                <label><strong>What we do</strong></label>
                <br>
                <textarea class="form-control" rows="5" placeholder="hupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepup"></textarea>
                <br>
                <label><strong>Company ambitions</strong></label>
                <br>
                <textarea class="form-control" rows="5" placeholder="hupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepup"></textarea>
                <br>
                <label><strong>Tags</strong></label>
                <br>
                <input type="text" value="Click enter to add a tag" data-role="tagsinput">
                <br>
                <button id="delete" class="btn btn-info" style="float: left;">Remove All Tags</button>


                </div>
              </li>
            
            </ul>
          </li>
        <li class="treeview active">
          <a href="#">
            <span>Embed Photo</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body">
				<select class="select form-control">
							<option>Selection</option>
							<option>Photo 1</option>
							<option>Photo 2</option>
					</select>
                  <div>&nbsp;</div>
                  <label><strong>Title photo</strong></label>
                  <br>
                  <input type="text" class="form-control" placeholder="Test 2">
                  <br>
                  <label><strong>Enter photo url</strong></label>
                  <br>
                  <input type="text" class="form-control" placeholder="Test 2">
                  <br>
                  <label><strong>Preview photo</strong></label>
                  <br>
                  <img src="../../../img/onze.mensen.jpg" class="img-responsive">
                  <br>
                  <label><strong>Description photo</strong></label>
                  <br>
                  <textarea class="form-control" rows="5" placeholder="hupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepup"></textarea>
                  <br>
                  <label><strong>Tags</strong></label>
                  <br>
                  <input type="text" value="Click enter to add a tag" data-role="tagsinput">
                  <br>
                  <button id="delete" class="btn btn-info" style="float: left;">Remove All Tags</button>
                  <div class="clear">&nbsp;</div>
                  <div class="btn-pull-right"><button id="delete" class="btn btn-info" style="float: left;">Add another</button>
                  <button id="delete" class="btn btn-info" style="float: left;">Delete</button></div>

                  
                  
                  
                </div>
              </li>
            </ul>
          </li>
        <li class="treeview active">
          <a href="#">
            <span>Embed Video</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body">
				<select class="select form-control">
							<option>Selection</option>
							<option>Video 1</option>
							<option>Video 2</option>
					</select>
                    
                    <div>&nbsp;</div>
                    
                    <label><strong>Title video</strong></label>
                    <br>
                    <input type="text" class="form-control" placeholder="Test 2"> 
                    <br>
            <div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<label><strong>Select video channel</strong></label>
                <br>
      		<select class="select form-control">
							<option>Select Test to edit</option>
							<option>Current Type of test B</option>
							<option>Type of test A</option>
					</select>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<label><strong>Video url</strong></label>
                    <br>
						<input type="text" class="form-control" placeholder="Test 2"> 
					</div>
				</div>
			
            <div>&nbsp;</div>
            <iframe width="560" height="315" src="//www.youtube.com/embed/d1cianvOyJU" frameborder="0" allowfullscreen></iframe>
            <div>&nbsp;</div>
            <label><strong>Description video</strong></label>
            <br>
            <textarea class="form-control" rows="5" placeholder="hupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepup"></textarea>
            
            <label><strong>Tags</strong></label>
            <br>
            <input type="text" value="Click enter to add a tag" data-role="tagsinput">
            <br>

            <button id="delete" class="btn btn-info" style="float: left;">Remove All Tags</button>
            
            <div>&nbsp;</div>
            <div class="btn-pull-right">
            <button id="loading-example-btn" class="btn btn-info">Add another</button>
            <button id="loading-example-btn" class="btn btn-info">Delete</button></div>


                </div>
              </li>
            </ul>
            </li>
            
            <li class="treeview active">
          <a href="#">
            <span>Embed presentation </span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body">
              
              <select class="select form-control">
							<option>Selection</option>
							<option>Document 1</option>
							<option>Document 2</option>
					</select>
              <div>&nbsp;</div>
              
              <label><strong>Title presentation</strong></label>
              <br>
              <input type="text" class="form-control" placeholder="Test 2">
              <br>
              <div class="row body-box">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
				<label><strong>Type document</strong></label>
                <br>
      		<select class="select form-control">
							<option>Select a type</option>
							<option>Current Type of test B</option>
							<option>Type of test A</option>
					</select>
			</div>
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
					<label><strong>URL file</strong></label>
                    <br>
						<input type="text" class="form-control" placeholder="Test 2"> 
					</div>
				</div>
              <div>&nbsp;</div>
             <label><strong>Embed code presentation</strong></label>
             <br>
             <textarea class="form-control" rows="5" style="max-width:750px" placeholder="hupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepup"></textarea>
             <br>
             <label><strong>Description presentation</strong></label>
             <br>
             <textarea class="form-control" rows="5" style="max-width:750px" placeholder="hupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepuphupellepup"></textarea>
             <br>
             
             <label><strong>Tags</strong></label>
             <br>
             <input type="text" value="Click enter to add a tag" data-role="tagsinput">
             <br>
             <button id="delete" class="btn btn-info">Remove All Tags</button>
             
             <div>&nbsp;</div>
             
             <div class="btn-pull-right"><button id="loading-example-btn" class="btn btn-info">Add another</button>
             <button id="loading-example-btn" class="btn btn-info">Delete</button>
             </div>
                    
                    
                </div>
              </li>
            </ul>
            </li>
            
            
          
          
          
        
        
        
        </ul>
        </div>
        </div>
        
        
        <div role="tabpanel" class="tab-pane" id="upload">
        <div class="pull-right">share: 
    <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></div>
    <div class="clear">&nbsp;</div>
    
    
 
    <div class="sidebar accordion">
      <ul class="sidebar-menu">
        <li class="treeview active">
          <a href="#">
            <span>Business casees</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <div class="row body-box">
      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<label><strong>Select Business case to edit</strong></label>
            <br>
              <select class="select form-control">
            <option>Current succes 2</option>
            <option>Business case 1</option>        
          </select>
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
             <label><strong>Title Business case</strong></label>
             <br>
              <input type="text" class="form-control" placeholder="Business case 2">
             </div>
			</div>
            
            
            <div class="row body-box">
		        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		          <label><strong>Upload Business case</strong></label>
                  <br>
                  <input type="text" class="form-control" placeholder="">
		        </div>

		         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		          <label><strong>URL Business case</strong></label>
                  <br>
                  <input type="text" class="form-control" placeholder="">
		        </div>
		      </div>
              
              <input type="file" data-bfi-disabled />
			<script>
				$('input[type=file]').bootstrapFileInput();
				$('.file-inputs').bootstrapFileInput();
			</script>
            <br>

            <label><strong>Description business case</strong></label>
            <br>
            <textarea class="form-control" rows="5"></textarea>
            <br>
            
            <label><strong><strong>Tags</strong></strong></label>
            <br>
            <input type="text" value="Click enter to add a tag" data-role="tagsinput">
            <br>
			<button id="delete" class="btn btn-danger">Remove All Tags</button>
            <div>&nbsp;</div>
            
            <div class="btn-pull-right">
            <button class="btn btn-info">Add another</button>
            <button class="btn btn-info">Delete</button>
            </div>
            
            
              
              </div>
              </li>
              </ul>
              </li>
              
              
              <li class="treeview active">
          <a href="#">
            <span>Whitepapers</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <div class="row">
      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<label><strong>Select Whitepaper to edit</strong></label>
            <br>
            <select class="select form-control">
                <option>Current Whitepaper 2</option>
                <option>Whitepaer 1</option>
            </select>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
             <label><strong>Title whitepaper</strong></label>
              <input type="text" class="form-control" placeholder="Whitepaper 2">
             </div>
			</div>
            
            <div class="row">
		        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label><strong>Upload whitepaper</strong></label>
                <br>
		          <input type="text" class="form-control" placeholder="">
		        </div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <br>

			<input type="file" data-bfi-disabled />
			<script>
				$('input[type=file]').bootstrapFileInput();
				$('.file-inputs').bootstrapFileInput();
			</script>
			</div>
		      </div>
              
              
              <label><strong>Description whitepaper</strong></label>
              <br>
              <textarea class="form-control" rows="5"></textarea>
              <br>
              
              <label><strong>Tags</strong></label>
              <br>
              <input type="text" value="Click enter to add a tag" data-role="tagsinput">
              <br>
              <button id="delete" class="btn btn-danger">Remove All Tags</button>
              <div>&nbsp;</div>
              
              <div class="btn-pull-right">
              <button class="btn btn-info">Add another</button>
              <button class="btn btn-info">Delete</button>
              </div>
              
              </div>
              </li>
              </ul>
              </li>
              
              
              <li class="treeview active">
          <a href="#">
            <span>Chamber of Commerce</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <div class="row body-box">
      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<label><strong>Select CoC extract to edit</strong></label>
            <br>
      		<select class="select form-control">
            <option>Current Chamber of Commerce extract 2</option>
            <option>Chamber of Commerce extract 1</option>
          </select>
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
             <label><strong>Title Chamber of Commerce extract</strong></label>
             <br>
              <input type="text" class="form-control" placeholder="Chamber of Commerce extract 2">
             </div>
			</div>
            
            <div class="row body-box">
		        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		          <label><strong>Upload Chamber of Commerce</strong></label>
                  <br>
                  <input type="file" data-bfi-disabled />
			<script>
				$('input[type=file]').bootstrapFileInput();
				$('.file-inputs').bootstrapFileInput();
			</script>
		        </div>
		         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                     <label><strong>Valid to date</strong></label>
                     <br>
                     <input type="text" class="span2 form-control" value="" id="dp1">
                     <script>
		$(function(){
			$('#dp1').datepicker({
				format: 'mm-dd-yyyy'
			});
});
	</script>
                     </div>
		      </div>
              
              <label><strong>Description Chamber of Commerce extract</strong></label>
              <br>
              <textarea class="form-control" rows="5"></textarea>
              <br>
              
              <label><strong>Tags</strong></label>
              <br>
              <input type="text" value="Click enter to add a tag" data-role="tagsinput">
			<br>
            <button id="delete" class="btn btn-danger" >Remove All Tags</button>
            <div>&nbsp;</div>
            
            <div class="btn-pull-right">
            <button class="btn btn-info">Add another</button>
            <button class="btn btn-info">Delete</button>
            </div>
              

              </div>
              </li>
              </ul>
              </li>
              
              <li class="treeview active">
          <a href="#">
            <span>Brochures</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <div class="row">
      		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<label><strong>Select Brochure to edit</strong></label>
            <br>
      		<select class="select form-control">
            <option>Current Brochure 2</option>
            <option>Brochure 1</option>
          </select>
			</div>
            
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
             <label><strong>Title brochure</strong></label>
             <br>
              <input type="text" class="form-control" placeholder="Brochure 2">
             </div>
			</div>
            
            
            <div class="row">
		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">	
              <label><strong>Upload Brochure</strong></label>
              <br>
			<input type="file" data-bfi-disabled />
			<script>
				$('input[type=file]').bootstrapFileInput();
				$('.file-inputs').bootstrapFileInput();
			</script>
		      </div>
		        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <br>
		          <input type="text" class="form-control" placeholder="" style="width:100%">
		        </div>
		        </div>
                
                <label><strong>Description brochure</strong></label>
                <br>
                <textarea class="form-control" rows="5"></textarea>
                <br>
                
                <label><strong>Tags</strong></label>
                <br>
                <input type="text" value="Click enter to add a tag" data-role="tagsinput">
				<br>
                <button id="delete" class="btn btn-danger">Remove All Tags</button>
            <div>&nbsp;</div>
            
            <div class="btn-pull-right">
            <button class="btn btn-info">Add another</button>
            <button class="btn btn-info">Delete</button>
            </div>

              
              </div>
              </li>
              </ul>
              </li>
              
              
              <li class="treeview active">
          <a href="#">
            <span>Organisation chart</span>
            <i class="fa fa-plus-circle pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li>
              <div class="panel-body link">
              
              <label><strong>Title organisation chart</strong></label>
              <br>
              <input type="text" class="form-control">
              <br>

              <div class="row body-box">
		        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <label><strong>Upload organisation chart</strong></label>
                <br>
		          <input type="text" class="form-control" placeholder="">
		        </div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<br>
			<input type="file" data-bfi-disabled />
			<script>
				$('input[type=file]').bootstrapFileInput();
				$('.file-inputs').bootstrapFileInput();
			</script>
			</div>
		      </div>
              
              <label><strong>Description organisation chart</strong></label>
              <br>
              <textarea class="form-control" rows="5" style="width:100%"></textarea>
              <br>
              
              <label><strong>Tags</strong></label>
              <br>
              <input type="text" value="Click enter to add a tag" data-role="tagsinput">
			<br>
            <button id="delete" class="btn btn-danger">Remove All Tags</button>
            
            <div>&nbsp;</div>
            
            <div class="btn-pull-right">
            <button class="btn btn-info">Add another</button>
            <button class="btn btn-info">Delete</button>
            </div>
              
              
              </div>
              </li>
              </ul>
              </li>
              
              
              </ul>
              </div>
              
              
        </div>
    </div>   
    </div>
    
                              </div>
                <div class="col-lg-4 col-md-3 col-sm-12">
                <?php include('../../../components/private/menus/preview_menu_private.php'); ?>
                </div>
                </div>
                
                
                </section>
                <footer>
<div class="footer-top">
<h3>GLOBAL LAUNCH 2015</h3>
<p>Feature rich community portal aimed at businesses and professionals.</p>
<p>Objective 1: Remove all barriers between supply of and demand for labor.<br>
Objective 2: Improve the quality of the match between companies & professionals.<br>
Objective 3: Quick matching & direct contact; absolutely free!
</p>
<div>&nbsp;</div>
<a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>     
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
</div>
<div class="footer-bottom">
<a href="#">All rights reserved</a>
<a href="#">Contact</a>
<a href="#">Imprint</a>
</div>
</footer>
                </aside>

</div>



  

</body>
</html>
