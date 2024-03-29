<?php
session_start();
$c = require_once 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Automated Registrar Onboarding | Namingo</title>
    <meta name="msapplication-TileColor" content="#0054a6"/>
    <meta name="theme-color" content="#0054a6"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>
    <meta name="description" content="Automated Registrar Onboarding @ Namingo"/>
    <meta name="canonical" content="/">
    <meta name="twitter:image:src" content="https://tabler.io/demo/static/og.png">
    <meta name="twitter:site" content="@tabler_ui">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Automated Registrar Onboarding | Namingo">
    <meta name="twitter:description" content="Automated Registrar Onboarding @ Namingo">
    <meta property="og:image" content="https://tabler.io/demo/static/og.png">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="640">
    <meta property="og:site_name" content="Tabler">
    <meta property="og:type" content="object">
    <meta property="og:title" content="Automated Registrar Onboarding | Namingo">
    <meta property="og:url" content="https://tabler.io/demo/static/og.png">
    <meta property="og:description" content="Automated Registrar Onboarding @ Namingo">
    <!-- CSS files -->
    <link href="./assets/css/tabler.min.css" rel="stylesheet"/>
    <link href="./assets/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="./assets/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="./assets/css/tabler-vendors.min.css" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
          --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
          font-feature-settings: "cv03", "cv04", "cv11";
      }
      .step-2, .step-3, .step-4, .step-5, .step-6 {
        display: none;
      }
    </style>
  </head>
  <body class="d-flex flex-column">
    <div class="page page-center">
      <form action="/onboarding.php" method="post" class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark">
            <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
          </a>
        </div>
        <div class="card card-md">
          <div class="card-body text-center py-4 p-sm-5">
            <img src="./static/onboarding.svg" height="120" class="mb-n2" alt="Automated Registrar Onboarding">
            <h1 class="mt-5">Automated Registrar Onboarding</h1>
            <p class="text-secondary">Welcome! You're about to set up your domain registrar account with Namingo. Follow a few simple steps to unlock all the tools you need for easy domain management.</p>
          </div>
          <div class="card-body step-1">
          <h2>Registrar Details</h2>
            <div class="mb-3">
              <label class="form-label required">Name</label>
              <input type="text" class="form-control ps-1" id="name" name="name" autocomplete="off" required>
              <small class="text-muted">The official name of the registrar.</small>
            </div>
            <div class="mb-3">
              <label class="form-label">IANA ID</label>
              <input type="number" class="form-control ps-1" id="ianaId" name="ianaId" autocomplete="off">
              <small class="text-muted">Unique identifier assigned by IANA.</small>
            </div>
            <div class="mb-3">
              <label class="form-label required">Email</label>
              <input type="email" class="form-control ps-1" id="email" name="email" autocomplete="off" required autocapitalize="none">
              <small class="text-muted">Primary contact email of the registrar.</small>
            </div>
            <div class="mb-3">
              <label class="form-label required">URL</label>
              <input type="url" class="form-control ps-1" id="url" name="url" autocomplete="off" required autocapitalize="none">
              <small class="text-muted">Registrar&#039;s official website URL.</small>
            </div>
            <div class="mb-3">
              <label class="form-label required">WHOIS Server</label>
              <input type="text" class="form-control ps-1" id="whoisServer" name="whoisServer" autocomplete="off" required autocapitalize="none">
              <small class="text-muted">Address of the registrar&#039;s WHOIS server.</small>
            </div>
            <div class="mb-3">
              <label class="form-label required">RDAP Server</label>
              <input type="text" class="form-control ps-1" id="rdapServer" name="rdapServer" autocomplete="off" required autocapitalize="none">
              <small class="text-muted">Address of the registrar&#039;s RDAP server.</small>
            </div>
            <div class="mb-3">
              <label class="form-label required">Abuse Email</label>
              <input type="email" class="form-control ps-1" id="abuseEmail" name="abuseEmail" autocomplete="off" required autocapitalize="none">
              <small class="text-muted">Email address for reporting abuse.</small>
            </div>
            <div class="mb-3">
              <label class="form-label required">Abuse Phone</label>
              <input type="tel" class="form-control ps-1" id="abusePhone" name="abusePhone" autocomplete="off" required>
              <small class="text-muted">Phone number for reporting abuse.</small>
            </div>
          </div>
          
          <div class="card-body step-2">
          <h2>Registrar Owner Contact</h2>
            <div class="mb-3">
              <label class="form-label required">First Name</label>
              <input type="text" class="form-control ps-1" id="ownerFirstName" name="ownerFirstName" autocomplete="off" required>
            </div>
            <div class="mb-3">
              <label class="form-label required">Last Name</label>
              <input type="text" class="form-control ps-1" id="ownerLastName" name="ownerLastName" autocomplete="off" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Organization</label>
              <input type="text" class="form-control ps-1" id="ownerOrg" name="ownerOrg" autocomplete="off">
            </div>
            <div class="mb-3">
              <label class="form-label">Street Address</label>
              <input type="text" class="form-control ps-1" id="ownerStreet1" name="ownerStreet1" autocomplete="off">
            </div>
            <div class="mb-3">
              <label class="form-label required">City</label>
              <input type="text" class="form-control ps-1" id="ownerCity" name="ownerCity" autocomplete="off" required>
            </div>
            <div class="mb-3">
              <label class="form-label">State/Province</label>
              <input type="text" class="form-control ps-1" id="ownerSp" name="ownerSp" autocomplete="off">
            </div>
            <div class="mb-3">
              <label class="form-label">Postal Code</label>
              <input type="text" class="form-control ps-1" id="ownerPc" name="ownerPc" autocomplete="off">
            </div>
            <div class="mb-3">
              <label class="form-label required">Country</label>
              <select class="form-select ps-1" id="ownerCc" name="ownerCc" required="required">
                <option value="af">Afghanistan</option>
                <option value="ax">Åland Islands</option>
                <option value="al">Albania</option>
                <option value="dz">Algeria</option>
                <option value="as">American Samoa</option>
                <option value="ad">Andorra</option>
                <option value="ao">Angola</option>
                <option value="ai">Anguilla</option>
                <option value="aq">Antarctica</option>
                <option value="ag">Antigua and Barbuda</option>
                <option value="ar">Argentina</option>
                <option value="am">Armenia</option>
                <option value="aw">Aruba</option>
                <option value="au">Australia</option>
                <option value="at">Austria</option>
                <option value="az">Azerbaijan</option>
                <option value="bs">Bahamas</option>
                <option value="bh">Bahrain</option>
                <option value="bd">Bangladesh</option>
                <option value="bb">Barbados</option>
                <option value="by">Belarus</option>
                <option value="be">Belgium</option>
                <option value="bz">Belize</option>
                <option value="bj">Benin</option>
                <option value="bm">Bermuda</option>
                <option value="bt">Bhutan</option>
                <option value="bo">Bolivia (Plurinational State of)</option>
                <option value="bq">Bonaire, Sint Eustatius and Saba</option>
                <option value="ba">Bosnia and Herzegovina</option>
                <option value="bw">Botswana</option>
                <option value="bv">Bouvet Island</option>
                <option value="br">Brazil</option>
                <option value="io">British Indian Ocean Territory</option>
                <option value="bn">Brunei Darussalam</option>
                <option value="bg">Bulgaria</option>
                <option value="bf">Burkina Faso</option>
                <option value="bi">Burundi</option>
                <option value="cv">Cabo Verde</option>
                <option value="kh">Cambodia</option>
                <option value="cm">Cameroon</option>
                <option value="ca">Canada</option>
                <option value="ky">Cayman Islands</option>
                <option value="cf">Central African Republic</option>
                <option value="td">Chad</option>
                <option value="cl">Chile</option>
                <option value="cn">China</option>
                <option value="cx">Christmas Island</option>
                <option value="cc">Cocos (Keeling) Islands</option>
                <option value="co">Colombia</option>
                <option value="km">Comoros</option>
                <option value="cg">Congo</option>
                <option value="cd">Congo (Democratic Republic of the)</option>
                <option value="ck">Cook Islands</option>
                <option value="cr">Costa Rica</option>
                <option value="ci">Côte d&#039;Ivoire</option>
                <option value="hr">Croatia</option>
                <option value="cu">Cuba</option>
                <option value="cw">Curaçao</option>
                <option value="cy">Cyprus</option>
                <option value="cz">Czechia</option>
                <option value="dk">Denmark</option>
                <option value="dj">Djibouti</option>
                <option value="dm">Dominica</option>
                <option value="do">Dominican Republic</option>
                <option value="ec">Ecuador</option>
                <option value="eg">Egypt</option>
                <option value="sv">El Salvador</option>
                <option value="gq">Equatorial Guinea</option>
                <option value="er">Eritrea</option>
                <option value="ee">Estonia</option>
                <option value="et">Ethiopia</option>
                <option value="sz">Eswatini</option>
                <option value="fk">Falkland Islands (Malvinas)</option>
                <option value="fo">Faroe Islands</option>
                <option value="fj">Fiji</option>
                <option value="fi">Finland</option>
                <option value="fr">France</option>
                <option value="gf">French Guiana</option>
                <option value="pf">French Polynesia</option>
                <option value="tf">French Southern Territories</option>
                <option value="ga">Gabon</option>
                <option value="gm">Gambia</option>
                <option value="ge">Georgia</option>
                <option value="de">Germany</option>
                <option value="gh">Ghana</option>
                <option value="gi">Gibraltar</option>
                <option value="gr">Greece</option>
                <option value="gl">Greenland</option>
                <option value="gd">Grenada</option>
                <option value="gp">Guadeloupe</option>
                <option value="gu">Guam</option>
                <option value="gt">Guatemala</option>
                <option value="gg">Guernsey</option>
                <option value="gn">Guinea</option>
                <option value="gw">Guinea-Bissau</option>
                <option value="gy">Guyana</option>
                <option value="ht">Haiti</option>
                <option value="hm">Heard Island and McDonald Islands</option>
                <option value="va">Holy See</option>
                <option value="hn">Honduras</option>
                <option value="hk">Hong Kong</option>
                <option value="hu">Hungary</option>
                <option value="is">Iceland</option>
                <option value="in">India</option>
                <option value="id">Indonesia</option>
                <option value="ir">Iran (Islamic Republic of)</option>
                <option value="iq">Iraq</option>
                <option value="ie">Ireland</option>
                <option value="im">Isle of Man</option>
                <option value="il">Israel</option>
                <option value="it">Italy</option>
                <option value="jm">Jamaica</option>
                <option value="jp">Japan</option>
                <option value="je">Jersey</option>
                <option value="jo">Jordan</option>
                <option value="kz">Kazakhstan</option>
                <option value="ke">Kenya</option>
                <option value="ki">Kiribati</option>
                <option value="kp">Korea (Democratic People&#039;s Republic of)</option>
                <option value="kr">Korea (Republic of)</option>
                <option value="kw">Kuwait</option>
                <option value="kg">Kyrgyzstan</option>
                <option value="la">Lao People&#039;s Democratic Republic</option>
                <option value="lv">Latvia</option>
                <option value="lb">Lebanon</option>
                <option value="ls">Lesotho</option>
                <option value="lr">Liberia</option>
                <option value="ly">Libya</option>
                <option value="li">Liechtenstein</option>
                <option value="lt">Lithuania</option>
                <option value="lu">Luxembourg</option>
                <option value="mo">Macao</option>
                <option value="mk">North Macedonia</option>
                <option value="mg">Madagascar</option>
                <option value="mw">Malawi</option>
                <option value="my">Malaysia</option>
                <option value="mv">Maldives</option>
                <option value="ml">Mali</option>
                <option value="mt">Malta</option>
                <option value="mh">Marshall Islands</option>
                <option value="mq">Martinique</option>
                <option value="mr">Mauritania</option>
                <option value="mu">Mauritius</option>
                <option value="yt">Mayotte</option>
                <option value="mx">Mexico</option>
                <option value="fm">Micronesia (Federated States of)</option>
                <option value="md">Moldova (Republic of)</option>
                <option value="mc">Monaco</option>
                <option value="mn">Mongolia</option>
                <option value="me">Montenegro</option>
                <option value="ms">Montserrat</option>
                <option value="ma">Morocco</option>
                <option value="mz">Mozambique</option>
                <option value="mm">Myanmar</option>
                <option value="na">Namibia</option>
                <option value="nr">Nauru</option>
                <option value="np">Nepal</option>
                <option value="nl">Netherlands</option>
                <option value="nc">New Caledonia</option>
                <option value="nz">New Zealand</option>
                <option value="ni">Nicaragua</option>
                <option value="ne">Niger</option>
                <option value="ng">Nigeria</option>
                <option value="nu">Niue</option>
                <option value="nf">Norfolk Island</option>
                <option value="mp">Northern Mariana Islands</option>
                <option value="no">Norway</option>
                <option value="om">Oman</option>
                <option value="pk">Pakistan</option>
                <option value="pw">Palau</option>
                <option value="ps">Palestine, State of</option>
                <option value="pa">Panama</option>
                <option value="pg">Papua New Guinea</option>
                <option value="py">Paraguay</option>
                <option value="pe">Peru</option>
                <option value="ph">Philippines</option>
                <option value="pn">Pitcairn</option>
                <option value="pl">Poland</option>
                <option value="pt">Portugal</option>
                <option value="pr">Puerto Rico</option>
                <option value="qa">Qatar</option>
                <option value="re">Réunion</option>
                <option value="ro">Romania</option>
                <option value="ru">Russian Federation</option>
                <option value="rw">Rwanda</option>
                <option value="bl">Saint Barthélemy</option>
                <option value="sh">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="kn">Saint Kitts and Nevis</option>
                <option value="lc">Saint Lucia</option>
                <option value="mf">Saint Martin (French part)</option>
                <option value="pm">Saint Pierre and Miquelon</option>
                <option value="vc">Saint Vincent and the Grenadines</option>
                <option value="ws">Samoa</option>
                <option value="sm">San Marino</option>
                <option value="st">Sao Tome and Principe</option>
                <option value="sa">Saudi Arabia</option>
                <option value="sn">Senegal</option>
                <option value="rs">Serbia</option>
                <option value="sc">Seychelles</option>
                <option value="sl">Sierra Leone</option>
                <option value="sg">Singapore</option>
                <option value="sx">Sint Maarten (Dutch part)</option>
                <option value="sk">Slovakia</option>
                <option value="si">Slovenia</option>
                <option value="sb">Solomon Islands</option>
                <option value="so">Somalia</option>
                <option value="za">South Africa</option>
                <option value="gs">South Georgia and the South Sandwich Islands</option>
                <option value="ss">South Sudan</option>
                <option value="es">Spain</option>
                <option value="lk">Sri Lanka</option>
                <option value="sd">Sudan</option>
                <option value="sr">Suriname</option>
                <option value="sj">Svalbard and Jan Mayen</option>
                <option value="se">Sweden</option>
                <option value="ch">Switzerland</option>
                <option value="sy">Syrian Arab Republic</option>
                <option value="tw">Taiwan (Province of China)</option>
                <option value="tj">Tajikistan</option>
                <option value="tz">Tanzania, United Republic of</option>
                <option value="th">Thailand</option>
                <option value="tl">Timor-Leste</option>
                <option value="tg">Togo</option>
                <option value="tk">Tokelau</option>
                <option value="to">Tonga</option>
                <option value="tt">Trinidad and Tobago</option>
                <option value="tn">Tunisia</option>
                <option value="tr">Turkey</option>
                <option value="tm">Turkmenistan</option>
                <option value="tc">Turks and Caicos Islands</option>
                <option value="tv">Tuvalu</option>
                <option value="ug">Uganda</option>
                <option value="ua">Ukraine</option>
                <option value="ae">United Arab Emirates</option>
                <option value="gb">United Kingdom of Great Britain and Northern Ireland</option>
                <option value="us">United States of America</option>
                <option value="um">United States Minor Outlying Islands</option>
                <option value="uy">Uruguay</option>
                <option value="uz">Uzbekistan</option>
                <option value="vu">Vanuatu</option>
                <option value="ve">Venezuela (Bolivarian Republic of)</option>
                <option value="vn">Viet Nam</option>
                <option value="vg">Virgin Islands (British)</option>
                <option value="vi">Virgin Islands (U.S.)</option>
                <option value="wf">Wallis and Futuna</option>
                <option value="eh">Western Sahara</option>
                <option value="ye">Yemen</option>
                <option value="zm">Zambia</option>
                <option value="zw">Zimbabwe</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Phone</label>
              <input type="tel" class="form-control ps-1" id="ownerVoice" name="ownerVoice" autocomplete="off">
            </div>
            <div class="mb-3">
              <label class="form-label required">Email</label>
              <input type="email" class="form-control ps-1" id="ownerEmail" name="ownerEmail" autocomplete="off" required autocapitalize="none">
            </div>
          </div>
          
          <div class="card-body step-3">
          <h2>Registrar Users</h2>
            <div class="mb-3">
              <label class="form-label required">Panel Login Email</label>
              <input type="email" class="form-control ps-1" id="user_email" name="user_email" autocomplete="off" required>
              <small class="text-muted">Choose the email address you'll use to log in to the registrar portal. Note: Password setup will follow the onboarding process.</small>
            </div>
            <div class="mb-3">
              <label class="form-label required">EPP Username</label>
              <input type="text" class="form-control ps-1" id="user_name" name="user_name" autocomplete="off" required>
              <small class="text-muted">Choose a username for managing your domains through the Extensible Provisioning Protocol (EPP). It should be one word, containing only lowercase letters and numbers. Note: Password setup will follow the onboarding process.</small>
            </div>
          </div>
          
          <div class="card-body step-4">
          <h2>IP Whitelisting for EPP Access</h2>
            <div class="mb-3">
              <label class="form-label required">Initial IP Address</label>
              <input type="text" class="form-control ps-1" id="ipAddress" name="ipAddress" autocomplete="off" required>
              <small class="text-muted">Enter the IP address to be whitelisted for EPP (Extensible Provisioning Protocol) access. This IP will have the authorization to manage domain transactions. Additional IP whitelisting options will be available after completing the onboarding process.</small>
            </div>
          </div>

        </div>
        <div class="row align-items-center mt-3">
          <div class="col-4">
            <div class="progress">
              <div class="progress-bar" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" aria-label="25% Complete">
                <span class="visually-hidden">25% Complete</span>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="btn-list justify-content-end">
              <button type="button" class="btn btn-outline-secondary prev-btn">
                Previous
              </button>
              <button type="button" class="btn btn-primary next-btn">
                Continue
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./assets/js/tabler.min.js" defer></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      let currentStep = 1;
      const totalSteps = 4;
      const progressBar = document.querySelector('.progress-bar');
      const nextBtn = document.querySelector('.next-btn');
      const prevBtn = document.querySelector('.prev-btn');

      function updateProgress(step) {
        let percentage = step === totalSteps ? 100 : ((step - 1) * 25); // Adjusted for a step out of 6 total steps
        progressBar.style.width = percentage + '%';
        progressBar.setAttribute('aria-valuenow', percentage);
        if (progressBar.querySelector('.visually-hidden')) { // Check if the element exists
            progressBar.querySelector('.visually-hidden').textContent = percentage + '% Complete';
        }
      }

      function updateButtonVisibility(step) {
        if(step === 1) {
          prevBtn.style.visibility = 'hidden'; // Hide the Previous button on the first step
        } else {
          prevBtn.style.visibility = 'visible';
        }

        if(step === totalSteps) {
          nextBtn.textContent = 'Submit'; // Change to Submit on the last step
          nextBtn.type = 'submit';
        } else {
          nextBtn.textContent = 'Continue';
          nextBtn.type = 'button';
        }
      }

      function showStep(step) {
        for (let i = 1; i <= totalSteps; i++) {
          let stepElements = document.querySelectorAll('.step-' + i);
          stepElements.forEach(element => {
            if (i === step) {
              // Explicitly set display property based on your layout needs
              element.style.display = 'inline';
            } else {
              element.style.display = 'none';
            }
          });
        }
        updateProgress(step);
        updateButtonVisibility(step);
      }

      nextBtn.addEventListener('click', () => {
        if (currentStep < totalSteps) {
          currentStep++;
          showStep(currentStep);
        } else {
          // Handle form submission here if the form is complete
          console.log('Form submission logic here.');
        }
      });

      prevBtn.addEventListener('click', () => {
        if (currentStep > 1) {
          currentStep--;
          showStep(currentStep);
        }
      });

      // Initialize the first step
      showStep(currentStep);
    });
    </script>
  </body>
</html>