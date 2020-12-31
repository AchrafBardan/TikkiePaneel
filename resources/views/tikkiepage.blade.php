<!DOCTYPE html>
<html lang="en">
    <head>


		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Betaalverzoekjes via Tikkie</title>
		<meta name="description" content="Eenvoudig en veilig je vrienden terugbetalen met iDEAL.">
		<meta name="robots" content="noindex, nofollow">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="-1">
		<meta http-equiv="Content-Language" content="nl">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
		<meta property="og:title" content="Betaalverzoekjes via Tikkie">
		<meta property="og:description" content="Eenvoudig en veilig je vrienden terugbetalen met iDEAL.">
		<meta property="og:image" content="https://tikkie.me/images/favicon.png">
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" sizes="256x256">

		<!--[if IE]>
		<link rel="shortcut icon" href="favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<base href="/">
		<!-- CSS -->
		<link rel="stylesheet" href="/styles/style.css">


		<!-- start chatpixel -->
		<!-- <script type=‘text/javascript’>  (function(win, doc, sdk_url){  if(win.snaptr) return;  var tr=win.snaptr=function(){  tr.handleRequest? tr.handleRequest.apply(tr, arguments):tr.queue.push(arguments);};  tr.queue = [];  var s=‘script’;  var new_script_section=doc.createElement(s);  new_script_section.async=!0;  new_script_section.src=sdk_url;  var insert_pos=doc.getElementsByTagName(s)[0];  insert_pos.parentNode.insertBefore(new_script_section, insert_pos);})(window, document, ’https://sc-static.net/scevent.min.js');  snaptr(‘init’,‘c9401dc7-67c9-414d-88b4-0eb7fbe27b1b’,{  ‘user_email’:‘<USER-EMAIL>’})  snaptr(‘track’,‘PAGE_VIEW’) </script> -->
			<!-- end chatpixel -->

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-32ZT8HLND1&amp;l=dataLayer&amp;cx=c"></script><script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/qc5B-qjP0QEimFYUxcpWJy5B/recaptcha__nl.js" crossorigin="anonymous" integrity="sha384-UZHiFYFELtF4gxUDkGPy0WgATWQrAwUsPvj0Q1RV3/tc4QrGnBzOz1ydmC/insuu"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-128079487-3"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'G-32ZT8HLND1');
		</script>
		<!-- End Google Analytics -->
		<script src="https://www.google.com/recaptcha/api.js?render=6LdyrvYUAAAAANlp7Jge5bPDfhT1R4X94ibZ4KEZ"></script>
	</head>
<body style="background-color: rgb(66, 67, 128);">
    

    <div class="page " ng-view>
<div ng-if="loadSuccess" class="ng-scope" style="">
    <div class="container2" id="page-top">
        <div class="msgBox">
            <!-- ngIf: showMessage -->
        </div>
        <div class="event-details">
            <p class="ng-binding">Betaal via </p> <img ng-src="./images/logo-tikkie.png" src="./images/logo-tikkie.png">
            <div class="ticket">
                <div id="txtDescr" class="description ng-binding">{{ $tikkie->description }}<br>
                    <div class="retail-name"><span class="small ng-binding">Naar</span>
                        <!-- ngIf: !showOrangeWarning --><span class="small ng-binding ng-scope"
                            ng-if="!showOrangeWarning">&nbsp;{{ $tikkie->receiver }} </span><!-- end ngIf: !showOrangeWarning -->
                        <!-- ngIf: showOrangeWarning -->
                    </div>
                </div>
                <div class="amount">
                    <!-- ngIf: fixedAmount -->
                    <div id="txtPrice" ng-if="fixedAmount" class="ng-scope">
                        <h1 class="ng-binding">€ {{ $tikkie->amount / 100 }}</h1>
                    </div><!-- end ngIf: fixedAmount  ngIf: openAmount -->
                </div>
                <!-- ngIf: openAmount  ngIf: openAmount  ngIf: openAmount  ngIf: openAmount  ngIf: openAmount  ngIf: !messageFlippedOpen -->
                <div ng-if="!messageFlippedOpen"
                    ng-class="{'message-border-en' : english, 'message-border-nl' : !english}" ng-click="openMessage()"
                    class="ng-scope message-border-nl"><span class="ng-binding">+ Berichtje toevoegen?</span></div>
                <!-- end ngIf: !messageFlippedOpen  ngIf: messageFlippedOpen  ngIf: firstPayment && !payEnabled  ngIf: firstPayment && payEnabled -->
                <div ng-if="firstPayment &amp;&amp; payEnabled" class="ng-scope"><select
                        ng-class="{'hidden' : payButtonPressed, 'pay-button' : !payButtonPressed}"
                        ng-model="selectedIssuer"
                        ng-options="issuer as issuer.name for issuer in issuers track by issuer.code"
                        ng-change="GetSelectedIssuer(selectedIssuer, false)"
                        class="ng-pristine ng-untouched ng-valid ng-not-empty pay-button">
                        <option label="Kies je bank" value="selectBank" selected="selected">Kies je bank</option>
                        <option label="ABN AMRO" value="ABNANL2A">ABN AMRO</option>
                        <option label="ING" value="INGBNL2A">ING</option>
                        <option label="Rabobank" value="RABONL2U">Rabobank</option>
                        <option label="ASN Bank" value="ASNBNL21">ASN Bank</option>
                        <option label="bunq" value="BUNQNL2A">bunq</option>
                        <option label="Handelsbanken" value="HANDNL2A">Handelsbanken</option>
                        <option label="Knab" value="KNABNL2H">Knab</option>
                        <option label="Moneyou" value="MOYONL21">Moneyou</option>
                        <option label="RegioBank" value="RBRBNL21">RegioBank</option>
                        <option label="Revolut" value="REVOLT21">Revolut</option>
                        <option label="SNS" value="SNSBNL2A">SNS</option>
                        <option label="Triodos Bank" value="TRIONL2U">Triodos Bank</option>
                        <option label="van Lanschot" value="FVLBNL22">van Lanschot</option>
                    </select><!-- ngIf: !payButtonPressed --><img ng-if="!payButtonPressed" class="ideal-logo"
                        ng-src="./images/ideal-logo.svg" src="./images/ideal-logo.svg">
                    <!-- end ngIf: !payButtonPressed --> <button
                        ng-class="{'hidden' : !payButtonPressed, 'pay-button pressed' : payButtonPressed}"
                        class="hidden">
                        <div id="lottie" class="lottie"></div>
                    </button></div><!-- end ngIf: firstPayment && payEnabled  ngIf: english  ngIf: !english -->
                <div ng-if="!english" class="ng-scope">
                    <!-- ngIf: idealIssuerDown -->
                </div><!-- end ngIf: !english  ngIf: !firstPayment -->
                <div class="terms-line-background">
                    <div class="terms-line-business">
                        <div ng-bind-html="accept_msg" class="ng-binding">Door Tikkie te gebruiken ga je akkoord met de
                            <br><a href="https://www.tikkie.me/voorwaarden-betaling">Algemene voorwaarden</a>.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq-payment-page">
            <p class="ng-binding">Heb je vragen?</p>
            <div class="wrapper" in-view="checkBottomView($index, $inview, $inviewpart, $event)">
                <v-accordion class="vAccordion--payconfirmation ng-isolate-scope" onexpand="expandCallback(index, id)"
                    oncollapse="collapseCallback(index, id)" role="tablist">
                    <!-- ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage' -->
                    <v-pane ng-repeat="pane in items track by $index" ng-if="pane.category == 'landingpage'"
                        class="ng-scope ng-isolate-scope">
                        <v-pane-header class="ng-scope ng-isolate-scope" role="tab" tabindex="0" aria-selected="false"
                            aria-expanded="false">
                            <div ng-transclude=""><span class="ng-binding ng-scope">Hoe werkt het?</span></div>
                        </v-pane-header>
                        <v-pane-content class="ng-scope ng-isolate-scope" role="tabpanel" aria-hidden="true"
                            style="max-height: 0px;">
                            <div ng-transclude="">
                                <div ng-bind-html="pane.content" class="ng-binding ng-scope">Betalen regel je snel in
                                    een paar stappen:<br>
                                    <ol>
                                        <li>Bovenaan deze pagina kies je je eigen bank.</li>
                                        <li>Je logt in bij je eigen bank, zoals je dat altijd doet.</li>
                                        <li>Je checkt de gegevens van de betaling, die zijn al voor je ingevuld.</li>
                                        <li>Je bevestigt de betaling op de manier die bij jouw bank gebruikelijk is.
                                        </li>
                                        <li>Klaar! Appeltje eitje toch?</li>
                                    </ol>
                                </div>
                            </div>
                        </v-pane-content>
                    </v-pane>
                    <!-- end ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage' -->
                    <v-pane ng-repeat="pane in items track by $index" ng-if="pane.category == 'landingpage'"
                        class="ng-scope ng-isolate-scope">
                        <v-pane-header class="ng-scope ng-isolate-scope" role="tab" tabindex="0" aria-selected="false"
                            aria-expanded="false">
                            <div ng-transclude=""><span class="ng-binding ng-scope">Is Tikkie voor iedereen?</span>
                            </div>
                        </v-pane-header>
                        <v-pane-content class="ng-scope ng-isolate-scope" role="tabpanel" aria-hidden="true"
                            style="max-height: 0px;">
                            <div ng-transclude="">
                                <div ng-bind-html="pane.content" class="ng-binding ng-scope">Ja, iedereen met een
                                    Nederlandse betaalrekening kan Tikkie gebruiken. Het maakt niet uit bij welke bank
                                    je zit. Je betaalt altijd eenvoudig via je eigen bank met iDEAL.</div>
                            </div>
                        </v-pane-content>
                    </v-pane>
                    <!-- end ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage' -->
                    <v-pane ng-repeat="pane in items track by $index" ng-if="pane.category == 'landingpage'"
                        class="ng-scope ng-isolate-scope">
                        <v-pane-header class="ng-scope ng-isolate-scope" role="tab" tabindex="0" aria-selected="false"
                            aria-expanded="false">
                            <div ng-transclude=""><span class="ng-binding ng-scope">Is Tikkie veilig?</span></div>
                        </v-pane-header>
                        <v-pane-content class="ng-scope ng-isolate-scope" role="tabpanel" aria-hidden="true"
                            style="max-height: 0px;">
                            <div ng-transclude="">
                                <div ng-bind-html="pane.content" class="ng-binding ng-scope">Tikkie is mogelijk gemaakt
                                    door ABN AMRO en voldoet aan strenge veiligheidseisen. De link begint met https. Dit
                                    betekent dat je gegevens versleuteld zijn. Een Tikkie betaalverzoekje ziet er altijd
                                    zo uit: https://tikkie.me/pay/... Als dit niet zo is, klik er dan niet op en <a
                                        class="exampleLink" href="https://api.whatsapp.com/send?phone=31613768528">meld
                                        het ons</a>.</div>
                            </div>
                        </v-pane-content>
                    </v-pane>
                    <!-- end ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage' -->
                    <v-pane ng-repeat="pane in items track by $index" ng-if="pane.category == 'landingpage'"
                        class="ng-scope ng-isolate-scope">
                        <v-pane-header class="ng-scope ng-isolate-scope" role="tab" tabindex="0" aria-selected="false"
                            aria-expanded="false">
                            <div ng-transclude=""><span class="ng-binding ng-scope">Heb ik mijn paslezer nodig om te
                                    betalen?</span></div>
                        </v-pane-header>
                        <v-pane-content class="ng-scope ng-isolate-scope" role="tabpanel" aria-hidden="true"
                            style="max-height: 0px;">
                            <div ng-transclude="">
                                <div ng-bind-html="pane.content" class="ng-binding ng-scope">Bij de meeste banken kun je
                                    in je mobiel bankieren-app instellen of je tot een bepaald bedrag zonder paslezer
                                    wilt betalen. Soms is het nodig om de paslezer alleen bij de eerste betaling aan een
                                    vriend te gebruiken.</div>
                            </div>
                        </v-pane-content>
                    </v-pane>
                    <!-- end ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage' -->
                    <v-pane ng-repeat="pane in items track by $index" ng-if="pane.category == 'landingpage'"
                        class="ng-scope ng-isolate-scope">
                        <v-pane-header class="ng-scope ng-isolate-scope" role="tab" tabindex="0" aria-selected="false"
                            aria-expanded="false">
                            <div ng-transclude=""><span class="ng-binding ng-scope">Is het gratis?</span></div>
                        </v-pane-header>
                        <v-pane-content class="ng-scope ng-isolate-scope" role="tabpanel" aria-hidden="true"
                            style="max-height: 0px;">
                            <div ng-transclude="">
                                <div ng-bind-html="pane.content" class="ng-binding ng-scope">We rekenen geen
                                    transactiekosten voor de betalingen via iDEAL.</div>
                            </div>
                        </v-pane-content>
                    </v-pane>
                    <!-- end ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage' -->
                    <v-pane ng-repeat="pane in items track by $index" ng-if="pane.category == 'landingpage'"
                        class="ng-scope ng-isolate-scope">
                        <v-pane-header class="ng-scope ng-isolate-scope" role="tab" tabindex="0" aria-selected="false"
                            aria-expanded="false">
                            <div ng-transclude=""><span class="ng-binding ng-scope">Waarom zie ik een onbekende
                                    rekening?</span></div>
                        </v-pane-header>
                        <v-pane-content class="ng-scope ng-isolate-scope" role="tabpanel" aria-hidden="true"
                            style="max-height: 0px;">
                            <div ng-transclude="">
                                <div ng-bind-html="pane.content" class="ng-binding ng-scope">Je betaalt eerst aan ABN
                                    AMRO. ABN AMRO betaalt aan jouw vriend.</div>
                            </div>
                        </v-pane-content>
                    </v-pane>
                    <!-- end ngIf: pane.category == 'landingpage'  end ngRepeat: pane in items track by $index  ngIf: pane.category == 'landingpage' -->
                    <v-pane ng-repeat="pane in items track by $index" ng-if="pane.category == 'landingpage'"
                        class="ng-scope ng-isolate-scope">
                        <v-pane-header class="ng-scope ng-isolate-scope" role="tab" tabindex="0" aria-selected="false"
                            aria-expanded="false">
                            <div ng-transclude=""><span class="ng-binding ng-scope">Misbruik melden</span></div>
                        </v-pane-header>
                        <v-pane-content class="ng-scope ng-isolate-scope" role="tabpanel" aria-hidden="true"
                            style="max-height: 0px;">
                            <div ng-transclude="">
                                <div ng-bind-html="pane.content" class="ng-binding ng-scope">Als je echt het idee hebt
                                    dat het verzoekje niet oké is, kun je hier <a class="exampleLink"
                                        href="https://api.whatsapp.com/send?phone=31613768528">misbruik melden</a>. In
                                    de <a class="exampleLink" href="/privacy/nl/v2/">privacyverklaring</a> lees je hier
                                    meer over.</div>
                            </div>
            </div>
        </div>
    </div>
    <div class="support xPad">
        <p class="ng-binding">Kom je er niet uit?</p><button class="app-met-tikkie ng-binding"
            ng-click="whatsAppTikkie()"><img class="whatsappIcon" ng-src="./images/whats-app-logo.svg"
                src="./images/whats-app-logo.svg"> App met Tikkie</button>
    </div>
    <div class="page-footer-2"><span ng-bind-html="footer_terms" class="ng-binding"><a
                href="https://www.tikkie.me/voorwaarden-betaling">
                <p class="ex1">Algemene voorwaarden</p>
            </a></span> <span ng-bind-html="footer_privacy" class="ng-binding"><a
                href="https://www.tikkie.me/privacyverklaring">
                <p class="ex2">Privacy</p>
            </a></span>
        <p class="ex3">© Tikkie</p>
    </div>
</div>
</body>
</html>