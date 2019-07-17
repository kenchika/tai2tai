
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Tai2tai') }}</title>

	<!-- Scripts -->



<script src="{{ asset('js/app.js') }}" defer></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	@yield('js')
	@yield('css')

</head>

<style type="text/css">
@font-face {
	font-family: AvenirNextCondensed-Regular;
	src: url('/fonts/AvenirNextCondensed-Regular.ttf');
}
.mdc-typography--body1{
	font-family: AvenirNextCondensed-Regular !important;
}


.md
.mdc-typography--headline1{
	font-family: AvenirNextCondensed-Regular !important;
}
.mdc-typography--headline2{
	font-family: AvenirNextCondensed-Regular !important;
}
.mdc-typography--headline3{
	font-family: AvenirNextCondensed-Regular !important;
}
.mdc-typography--headline4{
	font-family: AvenirNextCondensed-Regular !important;
}
.mdc-typography--headline5{
	font-family: AvenirNextCondensed-Regular !important;
}
.mdc-typography--subtitle1{
	font-family: AvenirNextCondensed-Regular !important;
}
.mdc-typography--subtitle2{
	font-family: AvenirNextCondensed-Regular !important;
}
.mdc-typography--button{
	font-family: AvenirNextCondensed-Regular !important;
}
.mdc-button__label{
	font-family: AvenirNextCondensed-Regular !important;
}

</style>
<body class="d-flex flex-column h-100">

	<div id="app " height="100%">


		<div class="modal fade " id="loginModal" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
			<div class="modal-dialog  modal-dialog-centered " role="document">
				<div class="modal-content home-card">
					<div class="modal-header" style="border:none;">

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="material-icons mdc-button__icon">close</i>
						</button>
					</div>








									<form method="POST" action="{{ route('login') }}">
										@csrf
										<div class="py-2 row ">
											<div class="col " align="center">
												<img src="{{URL::asset('img/logoSimple.png')}}" width="200" height="200" />
											</div>
										</div>
										<div class="py-2 row">

											<div class="col-12 " align="center">
												<div class="text-field-container">
													<div class="mdc-text-field mdc-text-field--outlined email my-custom-textField">
														<input type="email" id="tf-outlined email" class="mdc-text-field__input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
														<div class="mdc-notched-outline">
															<div class="mdc-notched-outline__leading"></div>
															<div class="mdc-notched-outline__notch">
																<label for="tf-outlined" class="mdc-floating-label">e-mail</label>
															</div>
															<div class="mdc-notched-outline__trailing"></div>


														</div>
													</div>
													@error('email')
													<div class="mdc-text-field-helper-line">
														<div class="mdc-text-field-helper-text">{{ $message }}</div>
													</div>
													@enderror
												</div>
											</div>



										</div>
										<div class="row ">
											<div class="col" align="center">

											</div>
										</div>
										<div class="py-2 row">


											<div class="col" align="center">
												<div class="mdc-text-field mdc-text-field--outlined password my-custom-textField">
													<input id="password" type="password" class=" mdc-text-field__input form-control @error('email') is-invalid @enderror" name="password" required autocomplete="current-password" >
													<div class="mdc-notched-outline">
														<div class="mdc-notched-outline__leading"></div>
														<div class="mdc-notched-outline__notch">
															<label for="tf-outlined" class="mdc-floating-label">Password</label>
														</div>
														<div class="mdc-notched-outline__trailing"></div>
													</div>



												</div>
											</div>

										</div>
										<div class="row ">
											<div class="col" align="center">
												@error('password')
												<div class="mdc-snackbar" id="err">
													<div class="mdc-snackbar__surface">
														<div class="mdc-snackbar__label"
															 role="status"
															 aria-live="polite">
															{{ $message }}
														</div>
														<div class="mdc-snackbar__actions">
															<button type="button" class="mdc-button mdc-snackbar__action">Retry</button>
														</div>
													</div>
												</div>
												<span class="text-danger mdc-typography--caption py-2" role="alert">
													<strong>{{ $message }}</strong>
												</span>
												@enderror
											</div>
										</div>
										<div class="py-2 row" >
											<div class="col" align="center">







												<div class="mdc-form-field" >
													<div class="mdc-checkbox">
														<input type="checkbox"
															   class="mdc-checkbox__native-control"
															   type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
														<div class="mdc-checkbox__background">
															<svg class="mdc-checkbox__checkmark"
																 viewBox="0 0 24 24">
																<path class="mdc-checkbox__checkmark-path"
																	  fill="none"
																	  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
															</svg>
															<div class="mdc-checkbox__mixedmark"></div>
														</div>
													</div>


													<label for="remember" class="mdc-typography--caption" style="margin:0px;">
														{{ __('Remember Me') }}
													</label>
												</div>
											</div>
										</div>

										<div class="py-2 row mb-0"  align=center>
											<div class="col-md-12 offset-md-12">

												<button type="submit" class="mdc-button mdc-button--unelevated my-custom-button  ">
													<span class="mdc-button__label shadow-none">{{ __('Login') }}</span>
												</button>



											</div>
										</div>
										<div class="py-2 row mb-0" align=center>
											<div class="col-md-12 offset-md-12 py-3">

												@if (Route::has('password.request'))
												<a class=" mdc-typography--caption text-dark " style="text-decoration:none" href="{{ route('password.request') }}">
													{{ __('Forgot Your Password?') }}
												</a>
												@endif
											</div>
										</div>
									</form>


					<div class="modal-footer" style="border:none;">

					</div>
				</div>
			</div>
		</div>
		<div class="modal fade " id="privacyPolicyModal" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered " role="document">
				<div class="modal-content home-card">
					<div class="modal-header" style="border:none;">

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="material-icons mdc-button__icon">close</i>
						</button>

					</div>
					<div class="modal-body">

							<h1>Welcome to our Privacy Policy</h1>
			<h3>Your privacy is critically important to us.</h3>
			Tai2Tai is located at:<br/>
			<address>
			  Tai2Tai<br/>Shanghai <br />- Shanghai , China<br/>15601948231			</address>

			<p>It is Tai2Tai's policy to respect your privacy regarding any information we may collect while operating our website. This Privacy Policy applies to <a href="http://www.tai2tai.com/">www.tai2tai.com/</a> (hereinafter, "us", "we", or "www.tai2tai.com/"). We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy policy ("Privacy Policy") to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through the Website and does not apply to our collection of information from other sources.</p>
			<p>This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions.</p>

						<h2>Website Visitors</h2>
			<p>Like most website operators, Tai2Tai collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. Tai2Tai's purpose in collecting non-personally identifying information is to better understand how Tai2Tai's visitors use its website. From time to time, Tai2Tai may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.</p>
			<p>Tai2Tai also collects potentially personally-identifying information like Internet Protocol (IP) addresses for logged in users and for users leaving comments on http://www.tai2tai.com/ blog posts. Tai2Tai only discloses logged in user and commenter IP addresses under the same circumstances that it uses and discloses personally-identifying information as described below.</p>

						<h2>Gathering of Personally-Identifying Information</h2>
			<p>Certain visitors to Tai2Tai's websites choose to interact with Tai2Tai in ways that require Tai2Tai to gather personally-identifying information. The amount and type of information that Tai2Tai gathers depends on the nature of the interaction. For example, we ask visitors who sign up for a blog at http://www.tai2tai.com/ to provide a username and email address.</p>

						<h2>Security</h2>
			<p>The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p>

						<h2>Advertisements</h2>
			<p>Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by Tai2Tai and does not cover the use of cookies by any advertisers.</p>


						<h2>Links To External Sites</h2>
			<p>Our Service may contain links to external sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy and terms and conditions of every site you visit.</p>
			<p>We have no control over, and assume no responsibility for the content, privacy policies or practices of any third party sites, products or services.</p>


						<h2>Protection of Certain Personally-Identifying Information</h2>
			<p>Tai2Tai discloses potentially personally-identifying and personally-identifying information only to those of its employees, contractors and affiliated organizations that (i) need to know that information in order to process it on Tai2Tai's behalf or to provide services available at Tai2Tai's website, and (ii) that have agreed not to disclose it to others. Some of those employees, contractors and affiliated organizations may be located outside of your home country; by using Tai2Tai's website, you consent to the transfer of such information to them. Tai2Tai will not rent or sell potentially personally-identifying and personally-identifying information to anyone. Other than to its employees, contractors and affiliated organizations, as described above, Tai2Tai discloses potentially personally-identifying and personally-identifying information only in response to a subpoena, court order or other governmental request, or when Tai2Tai believes in good faith that disclosure is reasonably necessary to protect the property or rights of Tai2Tai, third parties or the public at large.</p>
			<p>If you are a registered user of http://www.tai2tai.com/ and have supplied your email address, Tai2Tai may occasionally send you an email to tell you about new features, solicit your feedback, or just keep you up to date with what's going on with Tai2Tai and our products. We primarily use our blog to communicate this type of information, so we expect to keep this type of email to a minimum. If you send us a request (for example via a support email or via one of our feedback mechanisms), we reserve the right to publish it in order to help us clarify or respond to your request or to help us support other users. Tai2Tai takes all measures reasonably necessary to protect against the unauthorized access, use, alteration or destruction of potentially personally-identifying and personally-identifying information.</p>

						<h2>Aggregated Statistics</h2>
			<p>Tai2Tai may collect statistics about the behavior of visitors to its website. Tai2Tai may display this information publicly or provide it to others. However, Tai2Tai does not disclose your personally-identifying information.</p>


						<h2>Cookies</h2>
			<p>To enrich and perfect your online experience, Tai2Tai uses "Cookies", similar technologies and services provided by others to display personalized content, appropriate advertising and store your preferences on your computer.</p>
			<p>A cookie is a string of information that a website stores on a visitor's computer, and that the visitor's browser provides to the website each time the visitor returns. Tai2Tai uses cookies to help Tai2Tai identify and track visitors, their usage of http://www.tai2tai.com/, and their website access preferences. Tai2Tai visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using Tai2Tai's websites, with the drawback that certain features of Tai2Tai's websites may not function properly without the aid of cookies.</p>
			<p>By continuing to navigate our website without changing your cookie settings, you hereby acknowledge and agree to Tai2Tai's use of cookies.</p>



						<h2>Privacy Policy Changes</h2>
			<p>Although most changes are likely to be minor, Tai2Tai may change its Privacy Policy from time to time, and in Tai2Tai's sole discretion. Tai2Tai encourages visitors to frequently check this page for any changes to its Privacy Policy. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.</p>



			  <h2></h2>
			  	<p></p>

			<h2>Credit & Contact Information</h2>
							<p>This privacy policy was created at <a style="color:inherit;text-decoration:none;" href="https://termsandconditionstemplate.com/privacy-policy-generator/" title="Privacy policy template generator" target="_blank">termsandconditionstemplate.com</a>. If you have any questions about this Privacy Policy, please contact us via <a href="mailto:contact@tai2tai.com">email</a> or <a href="tel:15601948231">phone</a>.</p>
</div>
					<div class="modal-footer" style="border:none;">

					</div>
				</div>
			</div>
		</div>

		<div class="modal fade " id="termsConditions" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
			<div class="modal-dialog  modal-lg modal-dialog-centered " role="document">
				<div class="modal-content home-card">
					<div class="modal-header" style="border:none;">

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="material-icons mdc-button__icon">close</i>
						</button>
					</div>


<div class="modal-body">

					<h2>Welcome to Tai2Tai</h2>
						<p>These terms and conditions outline the rules and regulations for the use of Tai2Tai's Website.</p> <br />
						<span style="text-transform: capitalize;"> Tai2Tai</span> is located at:<br />
						<address>Shanghai <br />- Shanghai , China<br />
						</address>
						<p>By accessing this website we assume you accept these terms and conditions in full. Do not continue to use Tai2Tai's website
						if you do not accept all of the terms and conditions stated on this page.</p>
						<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice
						and any or all Agreements: "Client", "You" and "Your" refers to you, the person accessing this website
						and accepting the Company's terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers
						to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves, or either the Client
						or ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake
						the process of our assistance to the Client in the most appropriate manner, whether by formal meetings
						of a fixed duration, or any other means, for the express purpose of meeting the Client's needs in respect
						of provision of the Company's stated services/products, in accordance with and subject to, prevailing law
						of China. Any use of the above terminology or other words in the singular, plural,
						capitalisation and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p><h2>Cookies</h2>
						<p>We employ the use of cookies. By using Tai2Tai's website you consent to the use of cookies
						in accordance with Tai2Tai's privacy policy.</p><p>Most of the modern day interactive web sites
						use cookies to enable us to retrieve user details for each visit. Cookies are used in some areas of our site
						to enable the functionality of this area and ease of use for those people visiting. Some of our
						affiliate / advertising partners may also use cookies.</p><h2>License</h2>
						<p>Unless otherwise stated, Tai2Tai and/or it's licensors own the intellectual property rights for
						all material on Tai2Tai. All intellectual property rights are reserved. You may view and/or print
						pages from http://www.tai2tai.com/ for your own personal use subject to restrictions set in these terms and conditions.</p>
						<p>You must not:</p>
						<ol>
							<li>Republish material from http://www.tai2tai.com/</li>
							<li>Sell, rent or sub-license material from http://www.tai2tai.com/</li>
							<li>Reproduce, duplicate or copy material from http://www.tai2tai.com/</li>
						</ol>
						<p>Redistribute content from Tai2Tai (unless content is specifically made for redistribution).</p>
					<h2>Hyperlinking to our Content</h2>
						<ol>
							<li>The following organizations may link to our Web site without prior written approval:
								<ol>
								<li>Government agencies;</li>
								<li>Search engines;</li>
								<li>News organizations;</li>
								<li>Online directory distributors when they list us in the directory may link to our Web site in the same
									manner as they hyperlink to the Web sites of other listed businesses; and</li>
								<li>Systemwide Accredited Businesses except soliciting non-profit organizations, charity shopping malls,
									and charity fundraising groups which may not hyperlink to our Web site.</li>
								</ol>
							</li>
						</ol>
						<ol start="2">
							<li>These organizations may link to our home page, to publications or to other Web site information so long
								as the link: (a) is not in any way misleading; (b) does not falsely imply sponsorship, endorsement or
								approval of the linking party and its products or services; and (c) fits within the context of the linking
								party's site.
							</li>
							<li>We may consider and approve in our sole discretion other link requests from the following types of organizations:
								<ol>
									<li>commonly-known consumer and/or business information sources such as Chambers of Commerce, American
										Automobile Association, AARP and Consumers Union;</li>
									<li>dot.com community sites;</li>
									<li>associations or other groups representing charities, including charity giving sites,</li>
									<li>online directory distributors;</li>
									<li>internet portals;</li>
									<li>accounting, law and consulting firms whose primary clients are businesses; and</li>
									<li>educational institutions and trade associations.</li>
								</ol>
							</li>
						</ol>
						<p>We will approve link requests from these organizations if we determine that: (a) the link would not reflect
						unfavorably on us or our accredited businesses (for example, trade associations or other organizations
						representing inherently suspect types of business, such as work-at-home opportunities, shall not be allowed
						to link); (b)the organization does not have an unsatisfactory record with us; (c) the benefit to us from
						the visibility associated with the hyperlink outweighs the absence of Tai2tai; and (d) where the
						link is in the context of general resource information or is otherwise consistent with editorial content
						in a newsletter or similar product furthering the mission of the organization.</p>

						<p>These organizations may link to our home page, to publications or to other Web site information so long as
						the link: (a) is not in any way misleading; (b) does not falsely imply sponsorship, endorsement or approval
						of the linking party and it products or services; and (c) fits within the context of the linking party's
						site.</p>

						<p>If you are among the organizations listed in paragraph 2 above and are interested in linking to our website,
						you must notify us by sending an e-mail to <a href="mailto:contact@tai2tai.com" title="send an email to contact@tai2tai.com">contact@tai2tai.com</a>.
						Please include your name, your organization name, contact information (such as a phone number and/or e-mail
						address) as well as the URL of your site, a list of any URLs from which you intend to link to our Web site,
						and a list of the URL(s) on our site to which you would like to link. Allow 2-3 weeks for a response.</p>

						<p>Approved organizations may hyperlink to our Web site as follows:</p>

						<ol>
							<li>By use of our corporate name; or</li>
							<li>By use of the uniform resource locator (Web address) being linked to; or</li>
							<li>By use of any other description of our Web site or material being linked to that makes sense within the
								context and format of content on the linking party's site.</li>
						</ol>
						<p>No use of Tai2Tai's logo or other artwork will be allowed for linking absent a trademark license
						agreement.</p>
					<h2>Iframes</h2>
						<p>Without prior approval and express written permission, you may not create frames around our Web pages or
						use other techniques that alter in any way the visual presentation or appearance of our Web site.</p>
					<h2>Reservation of Rights</h2>
						<p>We reserve the right at any time and in its sole discretion to request that you remove all links or any particular
						link to our Web site. You agree to immediately remove all links to our Web site upon such request. We also
						reserve the right to amend these terms and conditions and its linking policy at any time. By continuing
						to link to our Web site, you agree to be bound to and abide by these linking terms and conditions.</p>
					<h2>Removal of links from our website</h2>
						<p>If you find any link on our Web site or any linked web site objectionable for any reason, you may contact
						us about this. We will consider requests to remove links but will have no obligation to do so or to respond
						directly to you.</p>
						<p>Whilst we endeavour to ensure that the information on this website is correct, we do not warrant its completeness
						or accuracy; nor do we commit to ensuring that the website remains available or that the material on the
						website is kept up to date.</p>
					<h2>Content Liability</h2>
						<p>We shall have no responsibility or liability for any content appearing on your Web site. You agree to indemnify
						and defend us against all claims arising out of or based upon your Website. No link(s) may appear on any
						page on your Web site or within any context containing content or materials that may be interpreted as
						libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or
						other violation of, any third party rights.</p>
					<h2>Disclaimer</h2>
						<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website (including, without limitation, any warranties implied by law in respect of satisfactory quality, fitness for purpose and/or the use of reasonable care and skill). Nothing in this disclaimer will:</p>
						<ol>
						<li>limit or exclude our or your liability for death or personal injury resulting from negligence;</li>
						<li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
						<li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
						<li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
						</ol>
						<p>The limitations and exclusions of liability set out in this Section and elsewhere in this disclaimer: (a)
						are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer or
						in relation to the subject matter of this disclaimer, including liabilities arising in contract, in tort
						(including negligence) and for breach of statutory duty.</p>
						<p>To the extent that the website and the information and services on the website are provided free of charge,
						we will not be liable for any loss or damage of any nature.</p>
					<h2></h2>
						<p></p>
					<h2>Credit & Contact Information</h2>
						<p>This Terms and conditions page was created at <a style="color:inherit;text-decoration:none;cursor:text;"
							href="https://termsandconditionstemplate.com">termsandconditionstemplate.com</a> generator. If you have
						any queries regarding any of our terms, please contact us.</p>

					</div>

					<div class="modal-footer" style="border:none;">

					</div>
				</div>
			</div>
		</div>



		<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white shade " >
			<div class="container " >
				<a class="navbar-brand" href="{{ url('/') }}">


					<img  src="{{URL::asset('img/logoTai2.png')}}" width="100" class="menu__biglogo active"/>
				</a>
				<button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" >
					<i class="material-icons">
						menu
					</i>
				</button>

				<div class="collapse navbar-collapse " id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto ">
						<a class="nav-item nav-link mdc-typography--button  {{ Request::is('aboutUs') ? 'active font-weight-bold' : '' }}"  href="{{ url('/aboutUs') }}">About us <span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link mdc-typography--button {{ Request::is('clients') ? 'active font-weight-bold' : '' }}" href="{{ url('/clients') }}">Clients</a>
						<a class="nav-item nav-link mdc-typography--button {{ Request::is('talents') ? 'active font-weight-bold' : '' }}" href="{{ url('/talents') }}">Talents</a>

						<a class="nav-item nav-link mdc-typography--button {{ Request::is('visaSimulator') ? 'active font-weight-bold' : '' }}" href="{{ url('/visaSimulator') }} "  >

						Visa Simulator

						</a>


						<a class="nav-item nav-link mdc-typography--button {{ Request::is('getInTouch') ? 'active font-weight-bold' : '' }}" href="{{ url('/getInTouch') }}">Get in touch</a>
						<a class="nav-item nav-link mdc-typography--button {{ Request::is('news') ? 'active font-weight-bold' : '' }}" href="{{ url('/news') }}">News</a>
						<a class="nav-item nav-link mdc-typography--button {{ Request::is('forums') ? 'active font-weight-bold' : '' }}" href="/forums">Forum</a>
					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						@guest
						<li class="nav-item">

							<a  class="nav-link" >


								<button class=" nav-item  mdc-button mdc-button--unelevated  my-custom-button" id="dialog-login"  data-toggle="modal" data-target="#loginModal" >

									<span class="mdc-button__label " href="{{ route('login') }}">Log in</span>
								</button>

							</a>

						</li>


						@else

						<div class="dropdown">
							<a class="nav-item nav-link mdc-typography--button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<button class=" nav-item  mdc-button mdc-button--unelevated  my-custom-button" >
									<i class="material-icons mdc-button__icon">person</i>
									<span class="mdc-button__label " href="{{ route('login') }}">{{ Auth::User()->name }}</span>
								</button>
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="text-decoration-none" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								<li class="mdc-list-item" role="menuitem" >
									<span class="mdc-list-item__text text-dark  mdc-typography--button" >	{{ __('Logout') }}</span>
								</li>
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
							<a href="{{ url('/simulator') }} " class="text-decoration-none">
								<li class="mdc-list-item" role="menuitem" >
									<span class="mdc-list-item__text text-dark  mdc-typography--button" >Simulator</span>
								</li>
							</a>


							<a class="text-decoration-none" href="{{ route('profile.show', ['user' => Auth::id()]) }}">
								<li class="mdc-list-item" role="menuitem">
									<span class="mdc-list-item__text text-dark  mdc-typography--button">dashboard </span>
								</li>
							</a>
						</div>
					</div>
					@endguest
					<!--<li class="nav-item">
						<a  class="nav-link" >
							<button class="mdc-icon-button material-icons secondary-icon-b" id="lang">

								language

							</button>
						</a>
					</li>-->
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')


</div>
@error('add')
<div class="mdc-snackbar mdc-snackbar-login">
	<div class="mdc-snackbar__surface">
		<div class="mdc-snackbar__label"
		role="status"
		aria-live="polite">
		{{ $message }}
	</div>
	<div class="mdc-snackbar__actions">
		<button type="button" class="mdc-button mdc-snackbar__action">ok</button>
	</div>
</div>
</div>

@enderror
@error('email')
<div id="errorLogin"></div>
<div class="mdc-snackbar mdc-snackbar-login">
	<div class="mdc-snackbar__surface">
		<div class="mdc-snackbar__label"
		role="status"
		aria-live="polite">
		{{ $message }}
	</div>
	<div class="mdc-snackbar__actions">
		<button type="button" class="mdc-button mdc-snackbar__action">ok</button>
	</div>
</div>
</div>
@enderror
@error('password')
<div id="errorLogin"></div>
<div class="mdc-snackbar mdc-snackbar--open mdc-snackbar-login">
	<div class="mdc-snackbar__surface">
		<div class="mdc-snackbar__label"
		role="status"
		aria-live="polite">
		{{ $message }}
	</div>
	<div class="mdc-snackbar__actions">
		<button type="button" class="mdc-button mdc-snackbar__action">ok</button>
	</div>
</div>
</div>
@enderror



@stack('scripts')


</body>
<div class="mt-auto footer-clean bg-primary text-white my-font">
	<footer>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-4 col-md-3 item">
					<h3>Services</h3>
					<ul>
						<li><a href="#">Web design</a></li>
						<li><a href="#">Development</a></li>
						<li><a href="#">Hosting</a></li>
					</ul>
				</div>
				<div class="col-sm-4 col-md-3 item">
					<h3>About</h3>
					<ul>
						<li><a href="{{ url('/faq') }}">faq</a></li>
						<li><a data-toggle="modal" data-target="#privacyPolicyModal">Privacy Policy</a></li>
						<li><a data-toggle="modal" data-target="#termsConditions">Terms and Conditions</a></li>
					</ul>
				</div>
				<div class="col-sm-4 col-md-3 item">
					<h3>Careers</h3>
					<ul>
						<li><a href="#">Job openings</a></li>
						<li><a href="#">Employee success</a></li>
						<li><a href="#">Benefits</a></li>
					</ul>
				</div>
				<div class="col-lg-3 item social"><a href="#"><img  src="{{URL::asset('img/linkedin.png')}}" class="img-fluid"/></i></a><a href="#"><img  src="{{URL::asset('img/wechat.png')}}" class="img-fluid"/></a><a href="#"><img  src="{{URL::asset('img/facebook.png')}}" class="img-fluid"/></a>
					<p class="copyright">Tai2Tai
© 2019</p>
				</div>
			</div>
		</div>
	</footer>
</div>

</html>
