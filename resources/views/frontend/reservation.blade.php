@extends('frontend.layouts.app')

@section('header', '')

@php
    $hideAbout = true;
@endphp


@section('content')
    <!-- Page title -->
    <section id="title" class="pt-30 text-center">
        <div class="container">
            <div data-cue="fadeIn">
                <span
                    class="text-uppercase h-sub-font fw-medium ls-2 d-block mb-4 text-secondary">{{ $globalVilla->name }}</span>
                <h1 class="display-4 h-special-font mb-3 text-body-emphasis">Reservation</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-12">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reservation</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- /Page title -->
    <!-- content -->
    <!-- Check rooms -->
    <div class="pb-4 pt-lg-0 pb-lg-0">
        <div class="container">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-6">
                    <form class="row g-4" method="GET" action="{{ route('reservation') }}">
                        <div class="col-12 col-lg-6 col-md-7">
                            <!-- Input date -->
                            <div class="mb-0">
                                <div class="position-relative">
                                    <label
                                        class="hicon hicon-menu-calendar hicon-bold text-secondary cursor-pointer position-absolute top-50 start-0 translate-middle-y ms-5 z-1"
                                        for="txtCheckDate"></label>
                                    <input id="txtCheckDate" name="date" type="text" value="{{ $date }}"
                                        class="check-date form-select cursor-pointer shadow-none ps-11 fw-medium bg-body-tertiary"
                                        placeholder="" readonly>
                                </div>
                            </div>
                            <!-- /Input date -->
                        </div>
                        <div class="col-12 col-lg-6 col-md-5">
                            <!-- Input number of guests -->
                            <div class="mb-0">
                                <div class="position-relative">
                                    <label
                                        class="hicon hicon-couple hicon-bold text-secondary cursor-pointer position-absolute top-50 start-0 translate-middle-y ms-5 z-1"
                                        for="btnCheckGuest"></label>
                                    <div class="dropdown" data-total-guest="">
                                        <button
                                            class="form-select w-100 text-start shadow-none ps-11 fw-medium bg-body-tertiary"
                                            id="btnCheckGuest" data-bs-auto-close="outside" type="button"
                                            data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="text-nowrap">
                                                <span data-total-adults=""></span>, <span data-total-children=""></span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu animate slideIn p-6 border-0 shadow">
                                            <li>
                                                <div class="mb-3">
                                                    <label for="txtCheckAdults" class="form-label">Adults</label>
                                                    <div class="input-group shadow-sm">
                                                        <button
                                                            class="btn btn-light bg-body-tertiary text-secondary border link-hover-primary"
                                                            type="button" data-minus-adults="">
                                                            <i class="hicon hicon-minus-thin small"></i>
                                                        </button>
                                                        <input type="text" class="form-control text-center"
                                                            placeholder="Adults" value="1" aria-label="Adults"
                                                            id="txtCheckAdults" name="adults" value="{{ $adults }}"
                                                            data-adults-max="10" data-input-adults="">
                                                        <button
                                                            class="btn btn-light bg-body-tertiary text-secondary border link-hover-primary"
                                                            type="button" data-plus-adults="">
                                                            <i class="hicon hicon-plus-thin small"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mb-1">
                                                    <label for="txtCheckChildren" class="form-label">Children</label>
                                                    <div class="input-group shadow-sm">
                                                        <button
                                                            class="btn btn-light bg-body-tertiary text-secondary border link-hover-primary"
                                                            type="button" data-minus-children="">
                                                            <i class="hicon hicon-minus-thin small"></i>
                                                        </button>
                                                        <input type="text" class="form-control text-center"
                                                            placeholder="Children" value="0" aria-label="Children"
                                                            id="txtCheckChildren" name="children"
                                                            value="{{ $children }}" data-children-max="20"
                                                            data-input-children="">
                                                        <button
                                                            class="btn btn-light bg-body-tertiary text-secondary border link-hover-primary"
                                                            type="button" data-plus-children="">
                                                            <i class="hicon hicon-plus-thin small"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Input number of guests -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Check rooms -->
    <!-- Dashboard -->
    <section id="dashboard" class="pt-10 pb-19">
        <div class="container">
            <div class="row g-0 g-lg-8" data-cues="fadeIn">
                <div class="col-12 col-xl-6 col-lg-5 pb-8 pb-lg-0">
                    <!-- Booking details -->
                    <div class="card bg-body shadow-sm h-100" data-aos-delay="300" data-aos="fade-up">
                        <div class="card-body">
                            <div>
                                <h2 class="h3 h-special-font">1. Booking details</h2>
                            </div>
                            <hr>
                            <!-- Book Date -->
                            <div>
                                <div>
                                    <i class="hicon hicon-menu-calendar"></i>
                                    <span>Check-In: <strong>{{ $checkIn?->format('d M Y') }}</strong></span>
                                </div>
                                <div>
                                    <i class="hicon hicon-menu-calendar"></i>
                                    <span>Check-Out: <strong>{{ $checkOut?->format('d M Y') }}</strong></span>
                                </div>
                                <em>(Duration of stay: <strong>{{ $night }}</strong>)</em>
                                <div class="mt-3">
                                    <span>
                                        <i class="hicon hicon-adults-line"></i><span>Adults:
                                        </span><strong>{{ $adults }}</strong>
                                    </span>
                                    <span>-</span>
                                    <span>
                                        <i class="hicon hicon-child-line"></i><span>Children:
                                        </span><strong>{{ $children }}</strong>
                                    </span>
                                </div>
                            </div>
                            <!-- Book Date -->
                            <hr>
                            <!-- Room list -->
                            <div>
                                <!-- Room Item -->
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Price / Night: @if ($night > 1)
                                                ({{ $night }} Nights)
                                            @endif
                                            <strong>${{ number_format($pricePerNight) }}</strong> </span>
                                        <strong
                                            class="fw-semibold fs-6"><sup>$</sup>${{ number_format($priceTotal) }}</strong>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Special Offer: </span>
                                        <strong
                                            class="fw-semibold fs-6"><sup>$</sup>${{ number_format($discount) }}</strong>
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
                                    <strong class="fw-bold fs-4"><sup>$</sup>${{ number_format($total) }}</strong>
                                </div>
                                <p class="m-0"><em>*No payment required.
                                        Our team will confirm availability via WhatsApp.</em></p>
                            </div>
                            <!-- Total Amount-->
                            <hr>
                        </div>
                    </div>
                    <!-- /Booking details -->
                </div>
                <div class="col-12 col-xl-6 col-lg-7">
                    <!-- Your Information -->
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <form class="needs-validation h-100" method="post"
                                action="{{ route('reservation.whatsapp') }}" novalidate="">
                                @csrf
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
                                                name="name" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-5">
                                            <label class="form-label" for="txtYourEmail">Email<span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control shadow-sm" id="txtYourEmail"
                                                name="email" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-5">
                                            <label class="form-label" for="selYourCountry">Country<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select dselect shadow-sm" id="selYourCountry"
                                                name="country" data-dselect-search="true" required="">
                                                <option value=""> Select </option>
                                                <option value="+93"> Afghanistan (+93) </option>
                                                <option value="+358"> Åland Islands (+358) </option>
                                                <option value="+355"> Albania (+355) </option>
                                                <option value="+213"> Algeria (+213) </option>
                                                <option value="+1"> American Samoa (+1) </option>
                                                <option value="+376"> Andorra (+376) </option>
                                                <option value="+244"> Angola (+244) </option>
                                                <option value="+1"> Anguilla (+1) </option>
                                                <option value="+1"> Antigua and Barbuda (+1) </option>
                                                <option value="+54"> Argentina (+54) </option>
                                                <option value="+374"> Armenia (+374) </option>
                                                <option value="+297"> Aruba (+297) </option>
                                                <option value="+61"> Australia (+61) </option>
                                                <option value="+43"> Austria (+43) </option>
                                                <option value="+994"> Azerbaijan (+994) </option>
                                                <option value="+1"> Bahamas (+1) </option>
                                                <option value="+973"> Bahrain (+973) </option>
                                                <option value="+880"> Bangladesh (+880) </option>
                                                <option value="+1"> Barbados (+1) </option>
                                                <option value="+375"> Belarus (+375) </option>
                                                <option value="+32"> Belgium (+32) </option>
                                                <option value="+501"> Belize (+501) </option>
                                                <option value="+229"> Benin (+229) </option>
                                                <option value="+1"> Bermuda (+1) </option>
                                                <option value="+975"> Bhutan (+975) </option>
                                                <option value="+591"> Bolivia (+591) </option>
                                                <option value="+599"> Bonaire (+599) </option>
                                                <option value="+387"> Bosnia and Herzegovina (+387) </option>
                                                <option value="+267"> Botswana (+267) </option>
                                                <option value="+55"> Brazil (+55) </option>
                                                <option value="+246"> British Indian Ocean Territory (+246) </option>
                                                <option value="+1"> British Virgin Islands (+1) </option>
                                                <option value="+673"> Brunei (+673) </option>
                                                <option value="+359"> Bulgaria (+359) </option>
                                                <option value="+226"> Burkina Faso (+226) </option>
                                                <option value="+257"> Burundi (+257) </option>
                                                <option value="+855"> Cambodia (+855) </option>
                                                <option value="+237"> Cameroon (+237) </option>
                                                <option value="+1"> Canada (+1) </option>
                                                <option value="+238"> Cape Verde (+238) </option>
                                                <option value="+1"> Cayman Islands (+1) </option>
                                                <option value="+236"> Central African Republic (+236) </option>
                                                <option value="+235"> Chad (+235) </option>
                                                <option value="+56"> Chile (+56) </option>
                                                <option value="+86"> China (+86) </option>
                                                <option value="+61"> Christmas Island (+61) </option>
                                                <option value="+61"> Cocos Islands (+61) </option>
                                                <option value="+57"> Colombia (+57) </option>
                                                <option value="+269"> Comoros (+269) </option>
                                                <option value="+243"> Congo-Brazzaville (+243) </option>
                                                <option value="+682"> Cook Islands (+682) </option>
                                                <option value="+506"> Costa Rica (+506) </option>
                                                <option value="+225"> Côte d'Ivoire (+225) </option>
                                                <option value="+385"> Croatia (+385) </option>
                                                <option value="+599"> Curaçao (+599) </option>
                                                <option value="+357"> Cyprus (+357) </option>
                                                <option value="+420"> Czech Republic (+420) </option>
                                                <option value="+45"> Denmark (+45) </option>
                                                <option value="+253"> Djibouti (+253) </option>
                                                <option value="+1"> Dominica (+1) </option>
                                                <option value="+1"> Dominican Republic (+1) </option>
                                                <option value="+593"> Ecuador (+593) </option>
                                                <option value="+20"> Egypt (+20) </option>
                                                <option value="+503"> El Salvador (+503) </option>
                                                <option value="+240"> Equatorial Guinea (+240) </option>
                                                <option value="+291"> Eritrea (+291) </option>
                                                <option value="+372"> Estonia (+372) </option>
                                                <option value="+251"> Ethiopia (+251) </option>
                                                <option value="+500"> Falkland Islands (+500) </option>
                                                <option value="+298"> Faroe Islands (+298) </option>
                                                <option value="+679"> Fiji (+679) </option>
                                                <option value="+358"> Finland (+358) </option>
                                                <option value="+33"> France (+33) </option>
                                                <option value="+594"> French Guiana (+594) </option>
                                                <option value="+689"> French Polynesia (+689) </option>
                                                <option value="+241"> Gabon (+241) </option>
                                                <option value="+220"> Gambia (+220) </option>
                                                <option value="+995"> Georgia (+995) </option>
                                                <option value="+49"> Germany (+49) </option>
                                                <option value="+233"> Ghana (+233) </option>
                                                <option value="+350"> Gibraltar (+350) </option>
                                                <option value="+30"> Greece (+30) </option>
                                                <option value="+299"> Greenland (+299) </option>
                                                <option value="+1"> Grenada (+1) </option>
                                                <option value="+590"> Guadeloupe (+590) </option>
                                                <option value="+1"> Guam (+1) </option>
                                                <option value="+502"> Guatemala (+502) </option>
                                                <option value="+44"> Guernsey (+44) </option>
                                                <option value="+224"> Guinea (+224) </option>
                                                <option value="+245"> Guinea-Bissau (+245) </option>
                                                <option value="+592"> Guyana (+592) </option>
                                                <option value="+509"> Haiti (+509) </option>
                                                <option value="+504"> Honduras (+504) </option>
                                                <option value="+852"> Hong Kong (+852) </option>
                                                <option value="+36"> Hungary (+36) </option>
                                                <option value="+354"> Iceland (+354) </option>
                                                <option value="+91"> India (+91) </option>
                                                <option value="+62"> Indonesia (+62) </option>
                                                <option value="+964"> Iraq (+964) </option>
                                                <option value="+353"> Ireland (+353) </option>
                                                <option value="+44"> Isle of Man (+44) </option>
                                                <option value="+972"> Israel (+972) </option>
                                                <option value="+39"> Italy (+39) </option>
                                                <option value="+1"> Jamaica (+1) </option>
                                                <option value="+81"> Japan (+81) </option>
                                                <option value="+44"> Jersey (+44) </option>
                                                <option value="+962"> Jordan (+962) </option>
                                                <option value="+7"> Kazakhstan (+7) </option>
                                                <option value="+254"> Kenya (+254) </option>
                                                <option value="+686"> Kiribati (+686) </option>
                                                <option value="+383"> Kosovo (+383) </option>
                                                <option value="+965"> Kuwait (+965) </option>
                                                <option value="+996"> Kyrgyz Republic (+996) </option>
                                                <option value="+856"> Laos (+856) </option>
                                                <option value="+211"> Laos (+211) </option>
                                                <option value="+371"> Latvia (+371) </option>
                                                <option value="+961"> Lebanon (+961) </option>
                                                <option value="+266"> Lesotho (+266) </option>
                                                <option value="+231"> Liberia (+231) </option>
                                                <option value="+218"> Libya (+218) </option>
                                                <option value="+423"> Liechtenstein (+423) </option>
                                                <option value="+370"> Lithuania (+370) </option>
                                                <option value="+352"> Luxembourg (+352) </option>
                                                <option value="+853"> Macao (+853) </option>
                                                <option value="+261"> Madagascar (+261) </option>
                                                <option value="+265"> Malawi (+265) </option>
                                                <option value="+60"> Malaysia (+60) </option>
                                                <option value="+960"> Maldives (+960) </option>
                                                <option value="+223"> Mali (+223) </option>
                                                <option value="+356"> Malta (+356) </option>
                                                <option value="+692"> Marshall Islands (+692) </option>
                                                <option value="+596"> Martinique (+596) </option>
                                                <option value="+222"> Mauritania (+222) </option>
                                                <option value="+230"> Mauritius (+230) </option>
                                                <option value="+262"> Mayotte (+262) </option>
                                                <option value="+52"> Mexico (+52) </option>
                                                <option value="+691"> Micronesia (+691) </option>
                                                <option value="+373"> Moldova (+373) </option>
                                                <option value="+377"> Monaco (+377) </option>
                                                <option value="+976"> Mongolia (+976) </option>
                                                <option value="+382"> Montenegro (+382) </option>
                                                <option value="+1"> Montserrat (+1) </option>
                                                <option value="+212"> Morocco (+212) </option>
                                                <option value="+258"> Mozambique (+258) </option>
                                                <option value="+95"> Myanmar (+95) </option>
                                                <option value="+264"> Namibia (+264) </option>
                                                <option value="+674"> Nauru (+674) </option>
                                                <option value="+977"> Nepal (+977) </option>
                                                <option value="+31"> Netherlands (+31) </option>
                                                <option value="+687"> New Caledonia (+687) </option>
                                                <option value="+64"> New Zealand (+64) </option>
                                                <option value="+505"> Nicaragua (+505) </option>
                                                <option value="+227"> Niger (+227) </option>
                                                <option value="+234"> Nigeria (+234) </option>
                                                <option value="+683"> Niue (+683) </option>
                                                <option value="+672"> Norfolk Island (+672) </option>
                                                <option value="+389"> North Macedonia (+389) </option>
                                                <option value="+1"> Northern Mariana Islands (+1) </option>
                                                <option value="+47"> Norway (+47) </option>
                                                <option value="+968"> Oman (+968) </option>
                                                <option value="+92"> Pakistan (+92) </option>
                                                <option value="+680"> Palau (+680) </option>
                                                <option value="+970"> Palestine (+970) </option>
                                                <option value="+507"> Panama (+507) </option>
                                                <option value="+675"> Papua New Guinea (+675) </option>
                                                <option value="+595"> Paraguay (+595) </option>
                                                <option value="+51"> Peru (+51) </option>
                                                <option value="+63"> Philippines (+63) </option>
                                                <option value="+48"> Poland (+48) </option>
                                                <option value="+351"> Portugal (+351) </option>
                                                <option value="+1"> Puerto Rico (+1) </option>
                                                <option value="+974"> Qatar (+974) </option>
                                                <option value="+242"> Republic of the Congo (+242) </option>
                                                <option value="+262"> Réunion (+262) </option>
                                                <option value="+40"> Romania (+40) </option>
                                                <option value="+7"> Russia (+7) </option>
                                                <option value="+250"> Rwanda (+250) </option>
                                                <option value="+590"> Saint Barthélemy (+590) </option>
                                                <option value="+290"> Saint Helena (+290) </option>
                                                <option value="+1"> Saint Kitts and Nevis (+1) </option>
                                                <option value="+1"> Saint Lucia (+1) </option>
                                                <option value="+590"> Saint Martin (+590) </option>
                                                <option value="+508"> Saint Pierre and Miquelon (+508) </option>
                                                <option value="+1"> Saint Vincent and the Grenadines (+1) </option>
                                                <option value="+685"> Samoa (+685) </option>
                                                <option value="+378"> San Marino (+378) </option>
                                                <option value="+239"> São Tomé and Príncipe (+239) </option>
                                                <option value="+966"> Saudi Arabia (+966) </option>
                                                <option value="+221"> Senegal (+221) </option>
                                                <option value="+381"> Serbia (+381) </option>
                                                <option value="+248"> Seychelles (+248) </option>
                                                <option value="+232"> Sierra Leone (+232) </option>
                                                <option value="+65"> Singapore (+65) </option>
                                                <option value="+1"> Sint Maarten (+1) </option>
                                                <option value="+421"> Slovakia (+421) </option>
                                                <option value="+386"> Slovenia (+386) </option>
                                                <option value="+677"> Solomon Islands (+677) </option>
                                                <option value="+252"> Somalia (+252) </option>
                                                <option value="+27"> South Africa (+27) </option>
                                                <option value="+82"> South Korea (+82) </option>
                                                <option value="+34"> Spain (+34) </option>
                                                <option value="+94"> Sri Lanka (+94) </option>
                                                <option value="+249"> Sudan (+249) </option>
                                                <option value="+597"> Suriname (+597) </option>
                                                <option value="+47"> Svalbard and Jan Mayen (+47) </option>
                                                <option value="+268"> Swaziland (+268) </option>
                                                <option value="+46"> Sweden (+46) </option>
                                                <option value="+41"> Switzerland (+41) </option>
                                                <option value="+886"> Taiwan (+886) </option>
                                                <option value="+992"> Tajikistan (+992) </option>
                                                <option value="+255"> Tanzania (+255) </option>
                                                <option value="+66"> Thailand (+66) </option>
                                                <option value="+670"> Timor-Leste (+670) </option>
                                                <option value="+228"> Togo (+228) </option>
                                                <option value="+690"> Tokelau (+690) </option>
                                                <option value="+676"> Tonga (+676) </option>
                                                <option value="+1"> Trinidad and Tobago (+1) </option>
                                                <option value="+216"> Tunisia (+216) </option>
                                                <option value="+90"> Turkey (+90) </option>
                                                <option value="+993"> Turkmenistan (+993) </option>
                                                <option value="+1"> Turks and Caicos Islands (+1) </option>
                                                <option value="+688"> Tuvalu (+688) </option>
                                                <option value="+256"> Uganda (+256) </option>
                                                <option value="+380"> Ukraine (+380) </option>
                                                <option value="+971"> United Arab Emirates (+971) </option>
                                                <option value="+44"> United Kingdom (+44) </option>
                                                <option value="+1"> United States (+1) </option>
                                                <option value="+598"> Uruguay (+598) </option>
                                                <option value="+1"> US Virgin Islands (+1) </option>
                                                <option value="+998"> Uzbekistan (+998) </option>
                                                <option value="+678"> Vanuatu (+678) </option>
                                                <option value="+58"> Venezuela (+58) </option>
                                                <option value="+84"> Vietnam (+84) </option>
                                                <option value="+681"> Wallis and Futuna (+681) </option>
                                                <option value="+212"> Western Sahara (+212) </option>
                                                <option value="+967"> Yemen (+967) </option>
                                                <option value="+260"> Zambia (+260) </option>
                                                <option value="+263"> Zimbabwe (+263) </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-5">
                                            <label class="form-label" for="txtYourPhone">Phone<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control shadow-sm" id="txtYourPhone"
                                                name="phone" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-5">
                                            <label class="form-label" for="txtYourAddress">Address<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control shadow-sm" id="txtYourAddress"
                                                name="address" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-5">
                                            <label class="form-label">Request (Option)</label>
                                            <textarea rows="5" name="note"class="form-control shadow-sm" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="date" value="{{ $date }}">

                                    <input type="hidden" name="adults" value="{{ $adults }}">

                                    <input type="hidden" name="children" value="{{ $children }}">

                                    <input type="hidden" name="night" value="{{ $night }}">

                                    <input type="hidden" name="total" value="{{ $total }}">
                                    <div class="col-12">
                                        <!-- Next - Back Step -->
                                        <div class="pt-2">
                                            <button type="submit" class="btn btn-primary mw-160">
                                                <span>Book via WhatsApp</span>
                                                <i class="hicon hicon-message-circle"></i>
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

@push('scripts')
    <script>
        window.addEventListener(
            'load',
            function() {

                const date =
                    @json($date);

                const adults =
                    @json($adults);

                const children =
                    @json($children);



                if (
                    date
                ) {

                    document
                        .getElementById(
                            'txtCheckDate'
                        )
                        .value =
                        date;

                }



                document
                    .getElementById(
                        'txtCheckAdults'
                    )
                    .value =
                    adults;

                document
                    .getElementById(
                        'txtCheckChildren'
                    )
                    .value =
                    children;



                document
                    .querySelector(
                        '[data-total-adults]'
                    )
                    .innerText =
                    adults +
                    ' Adults';



                document
                    .querySelector(
                        '[data-total-children]'
                    )
                    .innerText =
                    children +
                    ' Children';

            }
        );
    </script>

    <script>
        window.addEventListener(
            'load',
            function() {

                const form =
                    document.querySelector(
                        'form'
                    );



                const date =
                    document.getElementById(
                        'txtCheckDate'
                    );



                const adults =
                    document.getElementById(
                        'txtCheckAdults'
                    );



                const children =
                    document.getElementById(
                        'txtCheckChildren'
                    );



                let previous =
                    JSON.stringify({

                        date: date?.value,

                        adult: adults?.value,

                        child: children?.value,

                    });



                setInterval(
                    () => {

                        const current =
                            JSON.stringify({

                                date: date?.value,

                                adult: adults?.value,

                                child: children?.value,

                            });



                        if (
                            current !==

                            previous
                        ) {

                            previous =
                                current;



                            clearTimeout(
                                window.bookingTimer
                            );

                            window.bookingTimer =
                                setTimeout(
                                    () => {

                                        form.submit();

                                    },
                                    400
                                );

                        }

                    },
                    500
                );

            }
        );
    </script>
@endpush
