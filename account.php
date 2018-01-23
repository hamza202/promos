<!doctype html>
<html class="no-js">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Account || Promos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->

    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Archivo+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- style css -->
    <link rel="stylesheet" href="css/summernote.css">
    <link rel="stylesheet" href="css/fileinput.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/space.css">

    <!-- modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<?php include('header.php') ?>

<!-- Header Area End -->
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-title text-center">
                    <h1>انشاء حساب \ تسجيل دخول</h1>
                    <div class="top-page">
                        <ul>
                            <li><a href="index.php">الرئيسية</a></li>
                            <li>التسجيل \ تسجيل الدخول</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area End -->
<!-- Login Area Start -->
<div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="right-box">
                    <div class="single-sidebar-widget">
                        <div class="single-service-list-widget">
                            <ul class="">
                                <li class="active"><a data-toggle="tab" href="#home">اضافة مقال</a></li>
                                <li><a data-toggle="tab" href="#menu1">اضافة منتج</a></li>
                                <li><a data-toggle="tab" href="#menu2">اضافة اعلان</a></li>
                                <li><a data-toggle="tab" href="#menu3">اضافة عقار</a></li>
                                <li><a data-toggle="tab" href="#menu4">وسائل التواصل الأجتماعي</a></li>
                                <li><a data-toggle="tab" href="#menu5">تعديل الملف الشخصي</a></li>
                                <li><a data-toggle="tab" href="#menu6">تغير كلمة المرور</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 md-pt-30">
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <form action="#" class="login">
                            <p class="form-row-wide">
                                <label>
                                    العنوان
                                    <span class="required">*</span>
                                </label>
                                <input type="text" required/>
                            </p>
                            <p class="form-row-wide">
                                <label>
                                    وصف
                                    <span class="required">*</span>
                                </label>
                                <textarea type="text" required></textarea>
                            </p>
                            <div class="form-row-wide">
                                <label class="pt-20">
                                    تفاصيل
                                </label>
                                <div id="sumernote" class="summernote  tabcontent">
                                    <textarea class="summernotee">
                                        <p>اضافة تفاصيل</p>
                                    </textarea>
                                </div>
                                <p class="form-row-wide">
                                    <label for="b2b" class="required m_bottom_5 d_inline_b">إضافة صورة<span class="required">*</span> <small>(pdf , jpg , png , jpeg)</small></label>
                                    <input id="" name="b2b" type="file" class="file b2b" required>
                                </p>
                                <p class="form-row pt-20">
                                    <input type="submit" value="اضافة" class="button">

                                </p>

                            </div>

                        </form>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <form action="#" class="login">
                            <p class="form-row-wide">
                                <label>
                                    العنوان
                                    <span class="required">*</span>
                                </label>
                                <input type="text" required/>
                            </p>
                            <p class="form-row-wide">
                                <label>
                                    وصف
                                    <span class="required">*</span>
                                </label>
                                <textarea type="text" required></textarea>
                            </p>
                            <p class="form-row-wide pt-20">
                                <label>
                                    نسبة الخصم
                                    <span class="required">*</span>
                                </label>
                                <select>
                                    <option >0%</option>
                                    <option >5%</option>
                                    <option >10%</option>
                                    <option >15%</option>
                                    <option >20%</option>
                                    <option >25%</option>
                                    <option >30%</option>
                                    <option >35%</option>
                                    <option >40%</option>
                                    <option >45%</option>
                                    <option >50%</option>
                                    <option >55%</option>
                                    <option >60%</option>
                                    <option >65%</option>
                                    <option >70%</option>
                                    <option >75%</option>
                                    <option >80%</option>
                                    <option >85%</option>
                                    <option >90%</option>
                                    <option >95%</option>
                                    <option >100%</option>
                                </select>
                            </p>
                            <div class="form-row-wide">
                                <label class="pt-20">
                                    تفاصيل
                                </label>
                                <div id="sumernote" class="summernote  tabcontent">
                                    <textarea class="summernotee">
                                        <p>اضافة تفاصيل</p>
                                    </textarea>
                                </div>
                                <p class="form-row-wide">
                                    <label for="b2b" class="required m_bottom_5 d_inline_b">إضافة صورة<span class="required">*</span> <small>(pdf , jpg , png , jpeg)</small></label>
                                    <input id="" name="b2b" type="file" class="file b2b" required>
                                </p>
                                <p class="form-row pt-20">
                                    <input type="submit" value="اضافة" class="button">

                                </p>

                            </div>

                        </form>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <form action="#" class="login">

                            <p class="form-row-wide">
                                <label>
                                    اضافة اعلان
                                    <span class="required">*</span>
                                </label>
                                <textarea type="text" required></textarea>
                            </p>

                                <p class="form-row pt-20">
                                    <input type="submit" value="اضافة" class="button">

                                </p>


                        </form>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <form action="#" class="login">

                            <p class="form-row-wide">
                                <label>
                                    اضافة عقار
                                    <span class="required">*</span>
                                </label>
                                <textarea type="text" required></textarea>
                            </p>

                            <p class="form-row pt-20">
                                <input type="submit" value="اضافة" class="button">

                            </p>


                        </form>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <form action="#" class="login">



                            <div class="form-row-wide">
                                <label>
                                    اضافة روابط مواقع التواصل
                                </label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                <input type="text" class="form-control" placeholder="رابط FaceBook">
                            </div>
                                <div class="input-group pt-20">
                                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                    <input type="text" class="form-control" placeholder="رابط Twitter">
                                </div>
                                <div class="input-group pt-20">
                                    <span class="input-group-addon"><i class="fa fa-youtube-play"></i></span>
                                    <input type="text" class="form-control" placeholder="رابط YouTube">
                                </div>
                            </div>

                            <p class="form-row pt-20">
                                <input type="submit" value="اضافة" class="button">

                            </p>


                        </form>
                    </div>
                    <div id="menu5" class="tab-pane fade">
                        <div class="login-form">
                                <div class="login-content">
                                    <form action="#" class="login">
                                        <p class="form-row-wide">
                                            <label>
                                                اسم المستخدم
                                            </label>
                                            <input type="text" />
                                        </p>
                                        <p class="form-row-wide">
                                            <label>
                                                الإيميل
                                            </label>
                                        </p>
                                        <p class="form-row-wide">
                                            <label>
                                                الرقم المحمول
                                            </label>
                                            <input type="text" />
                                        </p>
                                        <p class="form-row-wide">
                                            <label>
                                                الجنسية
                                            </label>
                                            <select >
                                                <option value="">الجنسية</option>
                                                <option value="Afganistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bonaire">Bonaire</option>
                                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Canary Islands">Canary Islands</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Channel Islands">Channel Islands</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos Island">Cocos Island</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaco">Curacao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands">Falkland Islands</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Ter">French Southern Ter</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Great Britain">Great Britain</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Hawaii">Hawaii</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea North">Korea North</option>
                                                <option value="Korea Sout">Korea South</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Midway Islands">Midway Islands</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Nambia">Nambia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherland Antilles">Netherland Antilles</option>
                                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                <option value="Nevis">Nevis</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau Island">Palau Island</option>
                                                <option value="Palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Phillipines">Philippines</option>
                                                <option value="Pitcairn Island">Pitcairn Island</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                <option value="Republic of Serbia">Republic of Serbia</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="St Barthelemy">St Barthelemy</option>
                                                <option value="St Eustatius">St Eustatius</option>
                                                <option value="St Helena">St Helena</option>
                                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                <option value="St Lucia">St Lucia</option>
                                                <option value="St Maarten">St Maarten</option>
                                                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                <option value="Saipan">Saipan</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="Samoa American">Samoa American</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Tahiti">Tahiti</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Erimates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States of America">United States of America</option>
                                                <option value="Uraguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City State">Vatican City State</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                <option value="Wake Island">Wake Island</option>
                                                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zaire">Zaire</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </p>
                                        <p class="form-row-wide">
                                            <label>
                                                الجنس
                                            </label>
                                            <select>
                                                <option value="a">ذكر</option>
                                                <option value="n">انثى</option>
                                            </select>
                                        </p>
                                        <p class="form-row-wide">
                                            <label for="b2b" class="required m_bottom_5 d_inline_b">تعديل الصورة الشخصية<span class="required">*</span> <small>(pdf , jpg , png , jpeg)</small></label>
                                            <input id="b2b" name="b2b" type="file" class="file" >
                                        </p>
                                        <p class="form-row-wide pt-20">
                                            <label>
                                                نوع العضوية
                                            </label>

                                        </p>

                                        <!--_________________________________________________________-->

                                        <label class="radio-inline">
                                            <input type="radio" name="optradio" >شركة
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio" >عضو
                                        </label>

                                        <div class="clear"></div>
                                        <p class="form-row pt-20">
                                            <input type="submit" value="تسجيل" class="button">
                                        </p>
                                    </form>
                                </div>

                        </div>
                    </div>
                    <div id="menu6" class="tab-pane fade">
                        <form class="login">
                            <p class="form-row-wide pt-20">
                                <label>
                                    كلمة المرور القديمة
                                    <span class="required">*</span>
                                </label>
                                <input type="password" id="old_password" required/>
                            </p>
                        <p class="form-row-wide ">
                            <label>
                                كلمة المرور
                                <span class="required">*</span>
                            </label>
                            <input type="password" id="password" required/>
                        </p>
                        <p class="form-row-wide">
                            <label>
                                تأكيد كلمة المرور
                                <span class="required">*</span>
                            </label>
                            <input id="confirm_password" type="password" required/>
                        </p>

                        <div class="clear"></div>
                        <p class="form-row">
                            <input type="submit" value="تسجيل" class="button">
                        </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Area End -->

<?php include('footer.php') ?>
<!-- all js here -->
<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap-select.min.js"></script>
<!-- owl.carousel js -->
<script src="js/fileinput.min.js"></script>
<script>
    $(document).on('ready', function () {
        $(.b2b").fileinput();
    });
</script>
<script src="js/owl.carousel.min.js"></script>
<!-- jquery-ui js -->
<script src="js/jquery-ui.min.js"></script>
<!-- Img Zoom js -->
<script src="js/jquery.simpleLens.min.js"></script>
<!-- fancybox js -->
<script src="js/summernote.js"></script>
<script>
    $(document).ready(function () {
        $('.summernotee').summernote();
    });
</script>
<script src="js/jquery.fancybox.pack.js"></script>
<!-- jquery countdown js -->
<script src="js/jquery.countdown.min.js"></script>
<!-- Nivo Slider JS -->
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<!-- meanmenu js -->
<script src="js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();

    var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("كلمة المرور لا تطابق");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>
<!-- scrollUp JS -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>

</html>
