@extends('frontend.layouts.app')

@section('header', '')

@section('content')
    <!-- Page title -->
    <section id="title" class="pt-30 text-center">
        <div class="container">
            <div data-cue="fadeIn">
                <span class="text-uppercase h-sub-font fw-medium ls-2 d-block mb-4 text-secondary">My Account</span>
                <h1 class="display-4 h-special-font mb-3 text-body-emphasis">Reservation</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-12">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Villas & Suites</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reservation</li>
                    </ol>
                </nav>
                <div class="position-relative m-6">
                    <div class="progress bg-body-secondary" role="progressbar" aria-label="Progress" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100" style="height: 2px;">
                        <div class="progress-bar" style="width: 33.333333%"></div>
                    </div>
                    <a href="javascript:void(0);" class="position-absolute top-0 start-0 translate-middle"></a>
                    <a href="javascript:void(0);"
                        class="position-absolute top-0 start-33 translate-middle btn btn-square btn-primary rounded-circle">1</a>
                    <a href="javascript:void(0);"
                        class="position-absolute top-0 start-66 translate-middle btn btn-square btn-primary rounded-circle">2</a>
                    <a href="javascript:void(0);" class="position-absolute top-0 start-100 translate-middle"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Page title -->
    <!-- content -->
    <!-- Dashboard -->
    <section id="dashboard" class="pt-19 pb-19">
        <div class="container">
            <div class="row g-0 g-lg-8" data-cues="fadeIn">
                <div class="col-12 col-xl-6 col-lg-5 pb-8 pb-lg-0">
                    <!-- Booking details -->
                    <div class="card bg-body shadow-sm h-100 card-selected" data-aos-delay="300" data-aos="fade-up">
                        <div class="card-body">
                            <div>
                                <h2 class="h3 h-special-font">1. Booking details</h2>
                            </div>
                            <hr>
                            <!-- Book Date -->
                            <div>
                                <div>
                                    <i class="hicon hicon-menu-calendar"></i>
                                    <span>Check-In: <strong>19 Jul 2022</strong></span>
                                </div>
                                <div>
                                    <i class="hicon hicon-menu-calendar"></i>
                                    <span>Check-Out: <strong>20 Jul 2022</strong></span>
                                </div>
                                <em>(Duration of stay: <strong>1 Night</strong>)</em>
                                <div class="mt-3">
                                    <span>
                                        <i class="hicon hicon-adults-line"></i><span>Adults: </span><strong>1</strong>
                                    </span>
                                    <span>-</span>
                                    <span>
                                        <i class="hicon hicon-child-line"></i><span>Children: </span><strong>0</strong>
                                    </span>
                                </div>
                            </div>
                            <!-- Book Date -->
                            <hr>
                            <!-- Room list -->
                            <div>
                                <!-- Room Item -->
                                <div class="mb-4">
                                    <h3 class="h6 mb-0 d-flex align-items-center">
                                        <span>Coconut Tree Villa</span>
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Quantity <strong>1</strong>: </span>
                                        <strong class="fw-semibold fs-6"><sup>$</sup>1,169.00</strong>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Extra bed: </span>
                                        <strong class="fw-semibold fs-6"><sup>$</sup>150.00</strong>
                                    </div>
                                </div>
                                <!-- Room Item -->
                                <!-- Room Item -->
                                <div class="mb-4">
                                    <h3 class="h6 mb-0 d-flex align-items-center">
                                        <span>Garden View Suite</span>
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Quantity <strong>2</strong>: </span>
                                        <strong class="fw-semibold fs-6"><sup>$</sup>2,690.00</strong>
                                    </div>
                                </div>
                                <!-- Room Item -->
                            </div>
                            <!-- Room list -->
                            <hr>
                            <!-- Total Amount-->
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="h4 mb-0">Total:</h3>
                                    <strong class="fw-bold fs-4"><sup>$</sup>3,699.00</strong>
                                </div>
                                <p><em>*All taxes and fees included</em></p>
                            </div>
                            <!-- Total Amount-->
                            <hr>
                            <a href="./reservation-step-1.html" class="fw-semibold d-inline-block">
                                <i class="hicon hicon-edit"></i>
                                <span>Edit</span>
                            </a>
                        </div>
                    </div>
                    <!-- /Booking details -->
                </div>
                <div class="col-12 col-xl-6 col-lg-7">
                    <!-- Your Information -->
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <form class="needs-validation h-100" method="post" action="./reservation-step-3.html"
                                novalidate="">
                                <!-- Heading -->
                                <h2 class="h3 h-special-font">2. Your information</h2>
                                <hr>
                                <!-- /Heading -->
                                <!-- Information -->
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="mb-5">
                                            <label class="form-label" for="txtYourFullname">Full Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control shadow-sm" id="txtYourFullname"
                                                placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-5">
                                            <label class="form-label" for="txtYourEmail">Email<span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control shadow-sm" id="txtYourEmail"
                                                placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-5">
                                            <label class="form-label" for="selYourCountry">Country<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select dselect shadow-sm" id="selYourCountry"
                                                data-dselect-search="true" required="">
                                                <option value=""> Select </option>
                                                <option value="AF"> Afghanistan (+93) </option>
                                                <option value="AX"> Åland Islands (+358) </option>
                                                <option value="AL"> Albania (+355) </option>
                                                <option value="DZ"> Algeria (+213) </option>
                                                <option value="AS"> American Samoa (+1) </option>
                                                <option value="AD"> Andorra (+376) </option>
                                                <option value="AO"> Angola (+244) </option>
                                                <option value="AI"> Anguilla (+1) </option>
                                                <option value="AG"> Antigua and Barbuda (+1) </option>
                                                <option value="AR"> Argentina (+54) </option>
                                                <option value="AM"> Armenia (+374) </option>
                                                <option value="AW"> Aruba (+297) </option>
                                                <option value="AU"> Australia (+61) </option>
                                                <option value="AT"> Austria (+43) </option>
                                                <option value="AZ"> Azerbaijan (+994) </option>
                                                <option value="BS"> Bahamas (+1) </option>
                                                <option value="BH"> Bahrain (+973) </option>
                                                <option value="BD"> Bangladesh (+880) </option>
                                                <option value="BB"> Barbados (+1) </option>
                                                <option value="BY"> Belarus (+375) </option>
                                                <option value="BE"> Belgium (+32) </option>
                                                <option value="BZ"> Belize (+501) </option>
                                                <option value="BJ"> Benin (+229) </option>
                                                <option value="BM"> Bermuda (+1) </option>
                                                <option value="BT"> Bhutan (+975) </option>
                                                <option value="BO"> Bolivia (+591) </option>
                                                <option value="BQ"> Bonaire (+599) </option>
                                                <option value="BA"> Bosnia and Herzegovina (+387) </option>
                                                <option value="BW"> Botswana (+267) </option>
                                                <option value="BR"> Brazil (+55) </option>
                                                <option value="IO"> British Indian Ocean Territory (+246) </option>
                                                <option value="VG"> British Virgin Islands (+1) </option>
                                                <option value="BN"> Brunei (+673) </option>
                                                <option value="BG"> Bulgaria (+359) </option>
                                                <option value="BF"> Burkina Faso (+226) </option>
                                                <option value="BI"> Burundi (+257) </option>
                                                <option value="KH"> Cambodia (+855) </option>
                                                <option value="CM"> Cameroon (+237) </option>
                                                <option value="CA"> Canada (+1) </option>
                                                <option value="CV"> Cape Verde (+238) </option>
                                                <option value="KY"> Cayman Islands (+1) </option>
                                                <option value="CF"> Central African Republic (+236) </option>
                                                <option value="TD"> Chad (+235) </option>
                                                <option value="CL"> Chile (+56) </option>
                                                <option value="CN"> China (+86) </option>
                                                <option value="CX"> Christmas Island (+61) </option>
                                                <option value="CC"> Cocos Islands (+61) </option>
                                                <option value="CO"> Colombia (+57) </option>
                                                <option value="KM"> Comoros (+269) </option>
                                                <option value="CD"> Congo-Brazzaville (+243) </option>
                                                <option value="CK"> Cook Islands (+682) </option>
                                                <option value="CR"> Costa Rica (+506) </option>
                                                <option value="CI"> Côte d'Ivoire (+225) </option>
                                                <option value="HR"> Croatia (+385) </option>
                                                <option value="CW"> Curaçao (+599) </option>
                                                <option value="CY"> Cyprus (+357) </option>
                                                <option value="CZ"> Czech Republic (+420) </option>
                                                <option value="DK"> Denmark (+45) </option>
                                                <option value="DJ"> Djibouti (+253) </option>
                                                <option value="DM"> Dominica (+1) </option>
                                                <option value="DO"> Dominican Republic (+1) </option>
                                                <option value="EC"> Ecuador (+593) </option>
                                                <option value="EG"> Egypt (+20) </option>
                                                <option value="SV"> El Salvador (+503) </option>
                                                <option value="GQ"> Equatorial Guinea (+240) </option>
                                                <option value="ER"> Eritrea (+291) </option>
                                                <option value="EE"> Estonia (+372) </option>
                                                <option value="ET"> Ethiopia (+251) </option>
                                                <option value="FK"> Falkland Islands (+500) </option>
                                                <option value="FO"> Faroe Islands (+298) </option>
                                                <option value="FJ"> Fiji (+679) </option>
                                                <option value="FI"> Finland (+358) </option>
                                                <option value="FR"> France (+33) </option>
                                                <option value="GF"> French Guiana (+594) </option>
                                                <option value="PF"> French Polynesia (+689) </option>
                                                <option value="GA"> Gabon (+241) </option>
                                                <option value="GM"> Gambia (+220) </option>
                                                <option value="GE"> Georgia (+995) </option>
                                                <option value="DE"> Germany (+49) </option>
                                                <option value="GH"> Ghana (+233) </option>
                                                <option value="GI"> Gibraltar (+350) </option>
                                                <option value="GR"> Greece (+30) </option>
                                                <option value="GL"> Greenland (+299) </option>
                                                <option value="GD"> Grenada (+1) </option>
                                                <option value="GP"> Guadeloupe (+590) </option>
                                                <option value="GU"> Guam (+1) </option>
                                                <option value="GT"> Guatemala (+502) </option>
                                                <option value="GG"> Guernsey (+44) </option>
                                                <option value="GN"> Guinea (+224) </option>
                                                <option value="GW"> Guinea-Bissau (+245) </option>
                                                <option value="GY"> Guyana (+592) </option>
                                                <option value="HT"> Haiti (+509) </option>
                                                <option value="HN"> Honduras (+504) </option>
                                                <option value="HK"> Hong Kong (+852) </option>
                                                <option value="HU"> Hungary (+36) </option>
                                                <option value="IS"> Iceland (+354) </option>
                                                <option value="IN"> India (+91) </option>
                                                <option value="ID"> Indonesia (+62) </option>
                                                <option value="IQ"> Iraq (+964) </option>
                                                <option value="IE"> Ireland (+353) </option>
                                                <option value="IM"> Isle of Man (+44) </option>
                                                <option value="IL"> Israel (+972) </option>
                                                <option value="IT"> Italy (+39) </option>
                                                <option value="JM"> Jamaica (+1) </option>
                                                <option value="JP"> Japan (+81) </option>
                                                <option value="JE"> Jersey (+44) </option>
                                                <option value="JO"> Jordan (+962) </option>
                                                <option value="KZ"> Kazakhstan (+7) </option>
                                                <option value="KE"> Kenya (+254) </option>
                                                <option value="KI"> Kiribati (+686) </option>
                                                <option value="XK"> Kosovo (+383) </option>
                                                <option value="KW"> Kuwait (+965) </option>
                                                <option value="KG"> Kyrgyz Republic (+996) </option>
                                                <option value="LA"> Laos (+856) </option>
                                                <option value="SS"> Laos (+211) </option>
                                                <option value="LV"> Latvia (+371) </option>
                                                <option value="LB"> Lebanon (+961) </option>
                                                <option value="LS"> Lesotho (+266) </option>
                                                <option value="LR"> Liberia (+231) </option>
                                                <option value="LY"> Libya (+218) </option>
                                                <option value="LI"> Liechtenstein (+423) </option>
                                                <option value="LT"> Lithuania (+370) </option>
                                                <option value="LU"> Luxembourg (+352) </option>
                                                <option value="MO"> Macao (+853) </option>
                                                <option value="MG"> Madagascar (+261) </option>
                                                <option value="MW"> Malawi (+265) </option>
                                                <option value="MY"> Malaysia (+60) </option>
                                                <option value="MV"> Maldives (+960) </option>
                                                <option value="ML"> Mali (+223) </option>
                                                <option value="MT"> Malta (+356) </option>
                                                <option value="MH"> Marshall Islands (+692) </option>
                                                <option value="MQ"> Martinique (+596) </option>
                                                <option value="MR"> Mauritania (+222) </option>
                                                <option value="MU"> Mauritius (+230) </option>
                                                <option value="YT"> Mayotte (+262) </option>
                                                <option value="MX"> Mexico (+52) </option>
                                                <option value="FM"> Micronesia (+691) </option>
                                                <option value="MD"> Moldova (+373) </option>
                                                <option value="MC"> Monaco (+377) </option>
                                                <option value="MN"> Mongolia (+976) </option>
                                                <option value="ME"> Montenegro (+382) </option>
                                                <option value="MS"> Montserrat (+1) </option>
                                                <option value="MA"> Morocco (+212) </option>
                                                <option value="MZ"> Mozambique (+258) </option>
                                                <option value="MM"> Myanmar (+95) </option>
                                                <option value="NA"> Namibia (+264) </option>
                                                <option value="NR"> Nauru (+674) </option>
                                                <option value="NP"> Nepal (+977) </option>
                                                <option value="NL"> Netherlands (+31) </option>
                                                <option value="NC"> New Caledonia (+687) </option>
                                                <option value="NZ"> New Zealand (+64) </option>
                                                <option value="NI"> Nicaragua (+505) </option>
                                                <option value="NE"> Niger (+227) </option>
                                                <option value="NG"> Nigeria (+234) </option>
                                                <option value="NU"> Niue (+683) </option>
                                                <option value="NF"> Norfolk Island (+672) </option>
                                                <option value="MK"> North Macedonia (+389) </option>
                                                <option value="MP"> Northern Mariana Islands (+1) </option>
                                                <option value="NO"> Norway (+47) </option>
                                                <option value="OM"> Oman (+968) </option>
                                                <option value="PK"> Pakistan (+92) </option>
                                                <option value="PW"> Palau (+680) </option>
                                                <option value="PS"> Palestine (+970) </option>
                                                <option value="PA"> Panama (+507) </option>
                                                <option value="PG"> Papua New Guinea (+675) </option>
                                                <option value="PY"> Paraguay (+595) </option>
                                                <option value="PE"> Peru (+51) </option>
                                                <option value="PH"> Philippines (+63) </option>
                                                <option value="PL"> Poland (+48) </option>
                                                <option value="PT"> Portugal (+351) </option>
                                                <option value="PR"> Puerto Rico (+1) </option>
                                                <option value="QA"> Qatar (+974) </option>
                                                <option value="CG"> Republic of the Congo (+242) </option>
                                                <option value="RE"> Réunion (+262) </option>
                                                <option value="RO"> Romania (+40) </option>
                                                <option value="RU"> Russia (+7) </option>
                                                <option value="RW"> Rwanda (+250) </option>
                                                <option value="BL"> Saint Barthélemy (+590) </option>
                                                <option value="SH"> Saint Helena (+290) </option>
                                                <option value="KN"> Saint Kitts and Nevis (+1) </option>
                                                <option value="LC"> Saint Lucia (+1) </option>
                                                <option value="MF"> Saint Martin (+590) </option>
                                                <option value="PM"> Saint Pierre and Miquelon (+508) </option>
                                                <option value="VC"> Saint Vincent and the Grenadines (+1) </option>
                                                <option value="WS"> Samoa (+685) </option>
                                                <option value="SM"> San Marino (+378) </option>
                                                <option value="ST"> São Tomé and Príncipe (+239) </option>
                                                <option value="SA"> Saudi Arabia (+966) </option>
                                                <option value="SN"> Senegal (+221) </option>
                                                <option value="RS"> Serbia (+381) </option>
                                                <option value="SC"> Seychelles (+248) </option>
                                                <option value="SL"> Sierra Leone (+232) </option>
                                                <option value="SG"> Singapore (+65) </option>
                                                <option value="SX"> Sint Maarten (+1) </option>
                                                <option value="SK"> Slovakia (+421) </option>
                                                <option value="SI"> Slovenia (+386) </option>
                                                <option value="SB"> Solomon Islands (+677) </option>
                                                <option value="SO"> Somalia (+252) </option>
                                                <option value="ZA"> South Africa (+27) </option>
                                                <option value="KR"> South Korea (+82) </option>
                                                <option value="ES"> Spain (+34) </option>
                                                <option value="LK"> Sri Lanka (+94) </option>
                                                <option value="SD"> Sudan (+249) </option>
                                                <option value="SR"> Suriname (+597) </option>
                                                <option value="SJ"> Svalbard and Jan Mayen (+47) </option>
                                                <option value="SZ"> Swaziland (+268) </option>
                                                <option value="SE"> Sweden (+46) </option>
                                                <option value="CH"> Switzerland (+41) </option>
                                                <option value="TW"> Taiwan (+886) </option>
                                                <option value="TJ"> Tajikistan (+992) </option>
                                                <option value="TZ"> Tanzania (+255) </option>
                                                <option value="TH"> Thailand (+66) </option>
                                                <option value="TL"> Timor-Leste (+670) </option>
                                                <option value="TG"> Togo (+228) </option>
                                                <option value="TK"> Tokelau (+690) </option>
                                                <option value="TO"> Tonga (+676) </option>
                                                <option value="TT"> Trinidad and Tobago (+1) </option>
                                                <option value="TN"> Tunisia (+216) </option>
                                                <option value="TR"> Turkey (+90) </option>
                                                <option value="TM"> Turkmenistan (+993) </option>
                                                <option value="TC"> Turks and Caicos Islands (+1) </option>
                                                <option value="TV"> Tuvalu (+688) </option>
                                                <option value="UG"> Uganda (+256) </option>
                                                <option value="UA"> Ukraine (+380) </option>
                                                <option value="AE"> United Arab Emirates (+971) </option>
                                                <option value="GB"> United Kingdom (+44) </option>
                                                <option value="US"> United States (+1) </option>
                                                <option value="UY"> Uruguay (+598) </option>
                                                <option value="VI"> US Virgin Islands (+1) </option>
                                                <option value="UZ"> Uzbekistan (+998) </option>
                                                <option value="VU"> Vanuatu (+678) </option>
                                                <option value="VE"> Venezuela (+58) </option>
                                                <option value="VN"> Vietnam (+84) </option>
                                                <option value="WF"> Wallis and Futuna (+681) </option>
                                                <option value="EH"> Western Sahara (+212) </option>
                                                <option value="YE"> Yemen (+967) </option>
                                                <option value="ZM"> Zambia (+260) </option>
                                                <option value="ZW"> Zimbabwe (+263) </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-5">
                                            <label class="form-label" for="txtYourPhone">Phone<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control shadow-sm" id="txtYourPhone"
                                                placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-5">
                                            <label class="form-label" for="txtYourAddress">Address<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control shadow-sm" id="txtYourAddress"
                                                placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-5">
                                            <label class="form-label">Request (Option)</label>
                                            <textarea rows="5" class="form-control shadow-sm" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <!-- Next - Back Step -->
                                        <div class="pt-2">
                                            <button type="submit" class="btn btn-primary mw-160">
                                                <span>Next step</span>
                                                <i class="hicon hicon-flights-one-ways"></i>
                                            </button>
                                        </div>
                                        <!-- /Next - Back Step -->
                                    </div>
                                </div>
                                <!-- Information -->
                            </form>
                        </div>
                    </div>
                    <!-- Your Information -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Dashboard -->
    <!-- /content -->
@endsection
