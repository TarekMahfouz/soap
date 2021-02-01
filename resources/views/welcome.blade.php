<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    {{--<form action="{{ route('send.soap') }}" method="post" class="mt-3 col-md-6 offset-md-3">
        @csrf()
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div> 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div> 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div> 
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div> 
        <div class="mb-3">
            <input type="submit" class="btn btn-info btn-block" value="Send">
        </div> 
    </form>--}}
    <!-- <form data-toggle="validator" role="form" action="/wp-content/themes/gulfmedical/registration-action.php" method="post" enctype="multipart/form-data" novalidate="true"> -->
    <form  class="mt-3 mb-3 col-md-8 offset-md-2" data-toggle="validator" role="form" action="{{ route('send.soap') }}" method="post" enctype="multipart/form-data" novalidate="true">
        @csrf()
        <input type="hidden" name="LifeCyleStatusCode" value="2">
        <h2 style="margin-bottom: 20px">Personal Info</h2>
        <div class="row">
            <div class="form-group col-sm-4">
                <label class="control-label" for="FormOfAddressCode">Title</label>
                <div class="ui-widget">
                    <select id="comboProcessing" name="FormOfAddressCode" class="combobox" required="" value="0002">
                        <option value="">Select one...</option>
                        <option value="0001">Ms.</option>
                        <option value="0002" selected="selected">Mr.</option>
                        <option value="Z003">Company</option>
                        <option value="Z004">Mr. and Mrs.</option>
                    </select>
                </div>
                <div class="help-block with-errors"></div>
            </div>


            <div class="form-group col-sm-4">
                <label class="control-label" for="AcademicTitleCode">Academic Title</label>
                <div class="ui-widget">
                    <select id="comboProcessing" name="AcademicTitleCode" value="0001" class="combobox" required="">
                        <option value="">Select one...</option>
                        <option value="0001" selected="selected">Dr.</option>
                        <option value="0002">Prof.</option>
                        <option value="0003">Prof. Dr.</option>
                        <option value="0004">B.A.</option>
                        <option value="0005">MBA</option>
                        <option value="0006">Ph.D.</option>
                    </select>
                </div>
                <div class="help-block with-errors"></div>
            </div>


            <div class="form-group col-sm-4">
                <label class="control-label" for="GenderCode">Gender</label>
                <div class="ui-widget">
                    <select id="comboProcessing" name="GenderCode" value="1" class="combobox" required="">
                        <option value="">Select one...</option>
                        <option value="0">Gender not known</option>
                        <option value="1" selected="selected">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="row">

            <div class="form-group col-sm-4">
                <label class="control-label" for="GivenName">Given Name</label>
                <input class="form-control" data-error="Please enter given name" data-maxlength="255" name="GivenName" id="inputGivenName" value="Mahmoud" placeholder="Given name" type="text" required="">
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-sm-4">
                <label class="control-label" for="MiddleName">Middle Name</label>
                <input class="form-control" data-error="Please enter middle name" data-maxlength="255" name="MiddleName" id="inputMiddleName" value="Mohamad" placeholder="Middle name" type="text" required="">
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-sm-4">
                <label class="control-label" for="FamilyName">Family Name</label>
                <input class="form-control" data-error="Please enter family name" data-maxlength="255" name="FamilyName" id="inputFamilyName" value="Azab" placeholder="Family name" type="text" required="">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label class="control-label" for="BirthName">Birth name</label>
                <input class="form-control" data-error="Please enter birth name" data-maxlength="255" name="BirthName" id="inputBirthName" value="" placeholder="Birth name" type="text" required="">
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group col-sm-6">
                <label class="control-label" for="NickName">Nickname</label>
                <input class="form-control" data-error="Please enter nickname" data-maxlength="255" name="NickName" id="inputNickName" value="" placeholder="Nickname" type="text" required="">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label class="control-label" for="NameFormatCountryCode">Name Format Country</label>
                <div class="ui-widget">
                    <select id="comboProcessing" name="NameFormatCountryCode" class="combobox" required="" value="">
                        <option value="" selected="selected">Select one...</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AG">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AG">Antigua &amp; Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AA">Armenia</option>
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
                        <option value="BO">Bolivia</option>
                        <option value="BL">Bonaire</option>
                        <option value="BA">Bosnia &amp; Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BR">Brazil</option>
                        <option value="BC">British Indian Ocean Ter</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="IC">Canary Islands</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CD">Channel Islands</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CI">Christmas Island</option>
                        <option value="CS">Cocos Island</option>
                        <option value="CO">Colombia</option>
                        <option value="CC">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CT">Cote D'Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CB">Curacao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="TM">East Timor</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FA">Falkland Islands</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="FS">French Southern Ter</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GB">Great Britain</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HW">Hawaii</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IA">Iran</option>
                        <option value="IQ">Iraq</option>
                        <option value="IR">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="NK">Korea North</option>
                        <option value="KS">Korea South</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia</option>
                        <option value="MG">Madagascar</option>
                        <option value="MY">Malaysia</option>
                        <option value="MW">Malawi</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="ME">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="MI">Midway Islands</option>
                        <option value="MD">Moldova</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Nambia</option>
                        <option value="NU">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="AN">Netherland Antilles</option>
                        <option value="NL">Netherlands (Holland, Europe)</option>
                        <option value="NV">Nevis</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NW">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau Island</option>
                        <option value="PS">Palestine</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PO">Pitcairn Island</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="ME">Republic of Montenegro</option>
                        <option value="RS">Republic of Serbia</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="NT">St Barthelemy</option>
                        <option value="EU">St Eustatius</option>
                        <option value="HE">St Helena</option>
                        <option value="KN">St Kitts-Nevis</option>
                        <option value="LC">St Lucia</option>
                        <option value="MB">St Maarten</option>
                        <option value="PM">St Pierre &amp; Miquelon</option>
                        <option value="VC">St Vincent &amp; Grenadines</option>
                        <option value="SP">Saipan</option>
                        <option value="SO">Samoa</option>
                        <option value="AS">Samoa American</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome &amp; Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="OI">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syria</option>
                        <option value="TA">Tahiti</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad &amp; Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TU">Turkmenistan</option>
                        <option value="TC">Turks &amp; Caicos Is</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States of America</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VS">Vatican City State</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="VB">Virgin Islands (Brit)</option>
                        <option value="VA">Virgin Islands (USA)</option>
                        <option value="WK">Wake Island</option>
                        <option value="WF">Wallis &amp; Futana Is</option>
                        <option value="YE">Yemen</option>
                        <option value="ZR">Zaire</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                </div>
                <div class="help-block with-errors"></div>
            </div>


            <div class="form-group col-sm-6">
                <label class="control-label" for="NonVerbalCommunicationLanguageCode">Nonverbal communication
                    language</label>
                <div class="ui-widget">
                    <select id="comboProcessing" name="NonVerbalCommunicationLanguageCode" class="combobox" required="" value="">
                        <option value="" selected="selected">Select one...</option>
                        <option value="AF">Afrikanns</option>
                        <option value="SQ">Albanian</option>
                        <option value="AR">Arabic</option>
                        <option value="HY">Armenian</option>
                        <option value="EU">Basque</option>
                        <option value="BN">Bengali</option>
                        <option value="BG">Bulgarian</option>
                        <option value="CA">Catalan</option>
                        <option value="KM">Cambodian</option>
                        <option value="ZH">Chinese (Mandarin)</option>
                        <option value="HR">Croation</option>
                        <option value="CS">Czech</option>
                        <option value="DA">Danish</option>
                        <option value="NL">Dutch</option>
                        <option value="EN">English</option>
                        <option value="ET">Estonian</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finnish</option>
                        <option value="FR">French</option>
                        <option value="KA">Georgian</option>
                        <option value="DE">German</option>
                        <option value="EL">Greek</option>
                        <option value="GU">Gujarati</option>
                        <option value="HE">Hebrew</option>
                        <option value="HI">Hindi</option>
                        <option value="HU">Hungarian</option>
                        <option value="IS">Icelandic</option>
                        <option value="ID">Indonesian</option>
                        <option value="GA">Irish</option>
                        <option value="IT">Italian</option>
                        <option value="JA">Japanese</option>
                        <option value="JW">Javanese</option>
                        <option value="KO">Korean</option>
                        <option value="LA">Latin</option>
                        <option value="LV">Latvian</option>
                        <option value="LT">Lithuanian</option>
                        <option value="MK">Macedonian</option>
                        <option value="MS">Malay</option>
                        <option value="ML">Malayalam</option>
                        <option value="MT">Maltese</option>
                        <option value="MI">Maori</option>
                        <option value="MR">Marathi</option>
                        <option value="MN">Mongolian</option>
                        <option value="NE">Nepali</option>
                        <option value="NO">Norwegian</option>
                        <option value="FA">Persian</option>
                        <option value="PL">Polish</option>
                        <option value="PT">Portuguese</option>
                        <option value="PA">Punjabi</option>
                        <option value="QU">Quechua</option>
                        <option value="RO">Romanian</option>
                        <option value="RU">Russian</option>
                        <option value="SM">Samoan</option>
                        <option value="SR">Serbian</option>
                        <option value="SK">Slovak</option>
                        <option value="SL">Slovenian</option>
                        <option value="ES">Spanish</option>
                        <option value="SW">Swahili</option>
                        <option value="SV">Swedish</option>
                        <option value="TA">Tamil</option>
                        <option value="TT">Tatar</option>
                        <option value="TE">Telugu</option>
                        <option value="TH">Thai</option>
                        <option value="BO">Tibetan</option>
                        <option value="TO">Tonga</option>
                        <option value="TR">Turkish</option>
                        <option value="UK">Ukranian</option>
                        <option value="UR">Urdu</option>
                        <option value="UZ">Uzbek</option>
                        <option value="VI">Vietnamese</option>
                        <option value="CY">Welsh</option>
                        <option value="XH">Xhosa</option>
                    </select>
                </div>
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="form-group col-sm-6" style="padding-right: 0; padding-left: 0">
                    <label class="control-label" for="BirthDate">Birth Date</label>
                    <input class="form-control" data-error="Please enter your birth date" name="BirthDate" id="inputBirthDate" value="" type="date" required="">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-4">
                <label class="control-label" for="CountryCode">Country</label>
                <div class="ui-widget">
                    <select id="comboProcessing" name="CountryCode" value="SA" class="combobox" required="">
                        <option value="">Select one...</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AG">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AG">Antigua &amp; Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AA">Armenia</option>
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
                        <option value="BO">Bolivia</option>
                        <option value="BL">Bonaire</option>
                        <option value="BA">Bosnia &amp; Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BR">Brazil</option>
                        <option value="BC">British Indian Ocean Ter</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="IC">Canary Islands</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CD">Channel Islands</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CI">Christmas Island</option>
                        <option value="CS">Cocos Island</option>
                        <option value="CO">Colombia</option>
                        <option value="CC">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CT">Cote D'Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CB">Curacao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="TM">East Timor</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FA">Falkland Islands</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="FS">French Southern Ter</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GB">Great Britain</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HW">Hawaii</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IA">Iran</option>
                        <option value="IQ">Iraq</option>
                        <option value="IR">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="NK">Korea North</option>
                        <option value="KS">Korea South</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia</option>
                        <option value="MG">Madagascar</option>
                        <option value="MY">Malaysia</option>
                        <option value="MW">Malawi</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="ME">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="MI">Midway Islands</option>
                        <option value="MD">Moldova</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Nambia</option>
                        <option value="NU">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="AN">Netherland Antilles</option>
                        <option value="NL">Netherlands (Holland, Europe)</option>
                        <option value="NV">Nevis</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NW">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau Island</option>
                        <option value="PS">Palestine</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PO">Pitcairn Island</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="ME">Republic of Montenegro</option>
                        <option value="RS">Republic of Serbia</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="NT">St Barthelemy</option>
                        <option value="EU">St Eustatius</option>
                        <option value="HE">St Helena</option>
                        <option value="KN">St Kitts-Nevis</option>
                        <option value="LC">St Lucia</option>
                        <option value="MB">St Maarten</option>
                        <option value="PM">St Pierre &amp; Miquelon</option>
                        <option value="VC">St Vincent &amp; Grenadines</option>
                        <option value="SP">Saipan</option>
                        <option value="SO">Samoa</option>
                        <option value="AS">Samoa American</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome &amp; Principe</option>
                        <option value="SA" selected="selected">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="OI">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syria</option>
                        <option value="TA">Tahiti</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad &amp; Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TU">Turkmenistan</option>
                        <option value="TC">Turks &amp; Caicos Is</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States of America</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VS">Vatican City State</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="VB">Virgin Islands (Brit)</option>
                        <option value="VA">Virgin Islands (USA)</option>
                        <option value="WK">Wake Island</option>
                        <option value="WF">Wallis &amp; Futana Is</option>
                        <option value="YE">Yemen</option>
                        <option value="ZR">Zaire</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                </div>
                <div class="help-block with-errors"></div>
            </div>


            <div class="form-group col-sm-4">
                <label class="control-label" for="CityName">City</label>
                <input class="form-control" data-error="Please enter your city name" name="CityName" id="inputCityName" value="Jiddah" type="text" required="">
                <div class="help-block with-errors"></div>
            </div>


            <div class="form-group col-sm-4">
                <label class="control-label" for="StreetName">Street name</label>
                <input class="form-control" data-error="Please enter your Street name" name="StreetName" id="inputStreetName" value="" type="text" required="">
                <div class="help-block with-errors"></div>
            </div>

        </div>

        <div class="row">

            <div class="form-group col-sm-6">
                <label class="control-label" for="StreetPostalCode">Postal code</label>
                <input class="form-control" data-error="Street postal code must be 5 characters long" name="StreetPostalCode" value="12345" id="inputStreetPostalCode" type="text" required="" pattern=".{5,5}">
                <div class="help-block with-errors"></div>
            </div>


            <div class="form-group col-sm-6">
                <label class="control-label" for="HouseID">House number</label>
                <input class="form-control" data-error="Please enter your house number" name="HouseID" id="inputHouseID" value="" type="text" required="">
                <div class="help-block with-errors"></div>
            </div>

        </div>

        <input type="hidden" name="t1-FormattedNumberDescription" value="213454">

        <input type="hidden" name="t1-MobilePhoneNumberIndicator" value="true">

        <input type="hidden" name="t2-FormattedNumberDescription" value="213454">

        <input type="hidden" name="t2-MobilePhoneNumberIndicator" value="false">

        <div class="row">
            <div class="col-sm-12 divider-line"></div>
        </div>
        <h2 style="margin-bottom: 20px">Business Info</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group col-sm-6" style="padding-right: 0; padding-left: 0">
                    <label class="control-label" for="OccupationCode">Occupation</label>
                    <div class="ui-widget">
                        <select id="comboProcessing" name="OccupationCode" value="" class="combobox" required="">
                            <option value="" selected="selected">Select one...</option>
                            <option value="0001">CEO/Chairman/President</option>
                            <option value="0002">CFO,COO,CTO,CIO</option>
                            <option value="0003">Director/Board Member</option>
                            <option value="0004">Manager</option>
                            <option value="0005">Administrator</option>
                            <option value="0006">Supervisor</option>
                            <option value="0007">Government official</option>
                            <option value="0008">Architect</option>
                            <option value="0009">Secretary</option>
                            <option value="0010">Admin assistant</option>
                            <option value="0011">Accountant</option>
                            <option value="0012">Auditor/Controller/Comptroller</option>
                            <option value="0013">HR officer</option>
                            <option value="0014">Production officer</option>
                            <option value="0015">Quality assurance officer</option>
                            <option value="0016">Engineer</option>
                            <option value="0017">Researcher</option>
                            <option value="0018">Developer</option>
                            <option value="0019">Scientist</option>
                            <option value="0020">Investor</option>
                            <option value="0021">Broker/Trader/Adviser</option>
                            <option value="0022">Credit/Lending</option>
                            <option value="0023">Logistics/Warehouse Specialist</option>
                            <option value="0024">Technician/Engineer Trainee</option>
                            <option value="0025">IT expert</option>
                            <option value="0026">Consultant</option>
                            <option value="0027">Doctor</option>
                            <option value="0028">Health care worker</option>
                            <option value="0029">Service and support</option>
                            <option value="0030">Partner/Principal/Owner</option>
                            <option value="0031">Educator</option>
                            <option value="0032">Lawyer/Judge</option>
                            <option value="0033">Operator</option>
                            <option value="0034">Salesperson</option>
                            <option value="0035">Marketing</option>
                            <option value="0036">Purchasing Specialist/Staff</option>
                            <option value="0037">Trainer</option>
                            <option value="0038">Treasurer</option>
                            <option value="0039">Artist/Designer</option>
                            <option value="0040">Professor/Teacher</option>
                        </select>
                    </div>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>

        <input type="hidden" name="ContactPermissionCode" value="1">

        <input type="hidden" name="RelationshipBusinessPartnerInternalID" value="1005128">

        <input type="hidden" name="MainBusinessPartnerIndicator" value="true">

        <div class="row">
            <div class="form-group col-sm-6">
                <label class="control-label" for="WorkplaceEmailURI">Workplace Email</label>
                <input class="form-control" data-error="Please enter your workplace email" name="WorkplaceEmailURI" value="" id="inputWorkplaceEmailURI" type="email" required="">
                <div class="help-block with-errors"></div>
            </div>

            <input type="hidden" name="w1-FormattedNumberDescription" value="213454">

            <input type="hidden" name="w1-MobilePhoneNumberIndicator" value="true">

            <input type="hidden" name="w2-FormattedNumberDescription" value="213454">

            <input type="hidden" name="w2-MobilePhoneNumberIndicator" value="false">


            <input type="hidden" name="workplaceTelephoneListCompleteTransmissionIndicator" value="true">

            <input type="hidden" name="telephoneListCompleteTransmissionIndicator" value="true">


            <div class="form-group col-sm-6">
                <label class="control-label" for="EmailURI">Email</label>
                <input class="form-control" data-error="Please enter your email" name="EmailURI" id="inputEmailURI" value="mahmoud-azab@hotmail.com" type="email" required="">
                <div class="help-block with-errors"></div>
            </div>
        </div>

        <div class="form-group">

            <button class="btn btn-primary disabled" style="float: right;" type="submit">
                Submit
            </button>
        </div>
    </form> 
</body>
</html>