
@extends('layouts.app')
@include('cookieConsent::index')
@section('content')

<div class="container-fluid   page-header " style="background-image:url({{ __('homeMessages.background')}});" >
	<div class="container text-white ">
		<div class="row justify-content-end py-5"  >

			<div class="row py-md-5 py-sm-1">
				<div class="col-md-5 col-sm-12"></div>
				<div class="col-md-7 col-sm-12 my-5 py-md-5 py-sm-1  ">







					<h1 class="mdc-typography--headline2 font-weight-bold   text-md-left text-center pb-3">{{ __('homeMessages.title1') }} </h1>
					<h1 class="mdc-typography--headline4 text-md-left text-center pb-3">{{ __('homeMessages.title2') }} </h1>

					<p class="mdc-typography--headline4 text-justify text-md-left text-center pb-3">{{ __('homeMessages.intro') }}</p>


					<div class="row ">
						<div class="col-md-6 col-sm-12 py-2  " align=center>
							<a href="{{ url('/talents') }}"  >
								<button class="mdc-fab mdc-fab--extended secondary-fab my-fab text-white" >
									<span class="mdc-button__label ">{{ __('homeMessages.btn1') }}</span>

								</button>
							</a>

						</div>
						<div class="col-md-6 col-sm-12 py-2 "  align=center>
							<a href="{{ url('/clients') }}"  >
								<button class="mdc-fab mdc-fab--extended secondary-fab my-fab text-white " >
									<span class="mdc-button__label ">{{ __('homeMessages.btn2') }}</span>

								</button>
							</a>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</div>


<main class="bg-white shade py-5" style="    transform: translate3d(0px, 0px, 0px);"  >


	<!-- FOOTER -->




	<div class="container   mb-5" >
		<a href="{{ url('/aboutUs') }}" class="text-decoration-none text-dark">
		<div class="row  justify-content-center mx-2  home-card">


			<div class="col-md-6 col-sm-12 py-4 px-5  " align=center >
				<p class="mdc-typography--button text-left font-weight-bold pt-2 ">About</p>
				<hr>
				<p class="mdc-typography--body1 text-left">{{ __('homeMessages.text1') }}</p>
				<button class=" mdc-button mdc-button--unelevated">
					<span class="mdc-button__label ">more about us</span>
				</button>

			</div>
			<div class="col-md-6 col-sm-12   px-0" align =center >
				<img src="{{URL::asset('img/homePage2.jpg')}}" class="img-fluid my-img " />
			</div>
		</div>
	</a>
	</div>
	<div class="container-fluid  "style="background: rgb(21,144,169);
	background: linear-gradient(90deg, rgba(21,144,169,1) 0%, rgba(255,255,255,1) 50%, rgba(252,216,44,1) 100%);" >
	<div class="container ">
		<div class="row justify-content-center align-items-center "  >
			<div class="col-md-4 col-sm-12 my-5 " >

				<div class="position-relative overflow-hidden text-center  ">
					<div class=" mx-auto ">
						<div class="col-12 my-4">
							<img src="{{URL::asset('img/iconTalent.png')}}" width=200 />
						</div>
						<h1 class="mdc-typography--headline5 font-weight-bold" >{{ __('homeMessages.talent') }}</h1>
						<p class="mdc-typography--body1 text-justify text-center ">{{ __('homeMessages.talentText') }}
						</p>

					</div>
					<div class="product-device box-shadow d-none d-md-block"></div>
					<div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
				</div>

			</div>
			<div class="col-md-4 col-sm-12 ">

				<div class="position-relative overflow-hidden text-center text-dark" >

					<div class="row">
						<div class="col">
							<hr class="my-hr">
						</div>
						<div class="col-6">
							<p class="mdc-typography--headline4 text-justify text-center font-weight-bold " >{{ __('homeMessages.uare') }}</p>
						</div>
						<div class="col">
							<hr class="my-hr">
						</div>
					</div>


				</div>

			</div>
			<div class="col-md-4 col-sm-12 my-5">

				<div class="position-relative overflow-hidden text-center ">

					<div class="col-12 my-4">
						<img src="{{URL::asset('img/iconClient.png')}}" width=200 class="icon_Home"/>
					</div>
					<h1 class="mdc-typography--headline5 font-weight-bold">{{ __('homeMessages.client') }}</h1>
					<p class="mdc-typography--body1 text-justify text-center">{{ __('homeMessages.clientText') }}
					</p>

				</div>


			</div>
		</div>
	</div>
</div>

<div class="container text-dark ">
	<div class="row "  >
		<div class="mx-auto my-5 col text-center">
			<h1 class="mdc-typography--headline4 font-weight-bold primary">{{ __('homeMessages.work') }}</h1>
		</div>
	</div>
	<div class="row mx-2"  >
		<div class="col-md-4 col-sm-12 my-img   bg-white">

			<div class="position-relative overflow-hidden text-center ">

				<div class="col my-4" align="center">
					<img src="{{URL::asset('img/icon1.png')}}" width="200" class=" icon-home  " />
				</div>
<div class="px-5">
				<h1 class="mdc-typography--headline5 font-weight-bold">{{ __('homeMessages.convenienceTitle') }}</h1>
				<p class="mdc-typography--body1 text-justify">{{ __('homeMessages.convenience') }}
				</p>
	</div>
			</div>


		</div>
		<div class="col-md-4 col-sm-12  bg-white">


			<div class="position-relative overflow-hidden text-center ">

				<div class="col my-4" align="center">
					<img src="{{URL::asset('img/icon2.png')}}" width="200" class=" icon-home  "  />
				</div>
				<div class="px-5">
					<h1 class="mdc-typography--headline5 font-weight-bold">{{ __('homeMessages.complianceTitle') }}</h1>
					<p class="mdc-typography--body1 text-justify">{{ __('homeMessages.compliance') }}
					</p>

				</div>
			</div>



		</div>
		<div class="col-md-4 col-sm-12  bg-white px-2">

			<div class="position-relative overflow-hidden text-center">

				<div class="col my-4" align="center">
					<img src="{{URL::asset('img/icon3.png')}}" width="200" class=" icon-home  " />
				</div>
				<div class="px-5">
					<h1 class="mdc-typography--headline5 font-weight-bold">{{ __('homeMessages.peaceOfMindTitle') }}</h1>
					<p class="mdc-typography--body1 text-justify">{{ __('homeMessages.peaceOfMind') }}
					</p>
				</div>



			</div>
		</div>


	</div>
	<div class="row mx-2 "  >

		<div class="col-md-4 col-sm-12">

			<div class="position-relative overflow-hidden  text-center ">


				<div class="col my-4" align="center">
					<img src="{{URL::asset('img/icon4.png')}}" width="200" class=" icon-home  "/>


				</div>
					<div class="px-5">
				<h1 class="mdc-typography--headline5 font-weight-bold">{{ __('homeMessages.communtityTitle') }}</h1>
				<p class="mdc-typography--body1 text-justify">{{ __('homeMessages.communtity') }}
				</p>
	</div>


			</div>
		</div>

		<div class="col-md-4 col-sm-12">

			<div class="position-relative overflow-hidden  text-center">


				<div class="col my-4" align="center">
					<img src="{{URL::asset('img/icon5.png')}}" width="200" class=" icon-home  "/>


				</div>
				<div class="px-5">
				<h1 class="mdc-typography--headline5 font-weight-bold">{{ __('homeMessages.flexibilityTitle') }}</h1>
				<p class="mdc-typography--body1 text-justify">{{ __('homeMessages.flexibility') }}
				</p>

	</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12  bg-white px-2">

			<div class="position-relative overflow-hidden text-center">
				<div class="col my-4" align="center">
					<img src="{{URL::asset('img/icon6.png')}}" width="200" class=" icon-home  "/>
				</div>
					<div class="px-5">
				<h1 class="mdc-typography--headline5 font-weight-bold">{{ __('homeMessages.empowermentTitle') }}</h1>
				<p class="mdc-typography--body1 text-justify">{{ __('homeMessages.empowerment') }}
				</p>
</div>



			</div>
		</div>


	</div>
</div>
<div class="container text-dark ">
	<div class="row "  >
		<div class=" mx-auto py-5">
			<h1 class="mdc-typography--headline4 font-weight-bold primary">{{ __('homeMessages.nextStep') }}</h1>
		</div>
	</div>
	<div class="row justify-content-center px-4 px-md-1">


		<div class="col-md-5 col-sm-12 py-4 px-md-5  home-card  " align =center >
			<a href="{{ url('/visaSimulator') }}" class="text-decoration-none text-dark">
			<div class="row">
				<div class="col-4 my-auto">
					<img src="{{URL::asset('img/iconTalent.png')}}" class="img-fluid" width="100px" />
					<p class="mdc-typography--headline4 font-weight-bold  text-center mt-2">{{ __('homeMessages.talent') }}</p>
				</div>
				<div class="col-8 my-auto">


					<p class="mdc-typography--body1 text-center ">{{ __('homeMessages.nextStepT') }}</p>
					<button class=" mdc-button mdc-button--unelevated">
						<span class="mdc-button__label ">{{ __('homeMessages.nextStepTButton') }}</span>
					</button>
				</div>

			</div>
				</a>
		</div>

		<div class="col-md-2 " align =center >
		</div>

		<div class="col-md-5 col-sm-12 py-4 px-md-5  home-card  mt-5 mt-md-0" align =center >
			<a href="{{ url('/clients') }}" class="text-decoration-none text-dark">
			<div class="row">
				<div class="col-4 my-auto">
					<img src="{{URL::asset('img/iconClient.png')}}" class="img-fluid" width="100px" />
					<p class="mdc-typography--headline4 font-weight-bold  text-center mt-2">{{ __('homeMessages.client') }}</p>
				</div>
				<div class="col-8 my-auto">


					<p class="mdc-typography--body1 text-center ">{{ __('homeMessages.nextStepC') }}</p>
					<button class=" mdc-button mdc-button--unelevated">
						<span class="mdc-button__label ">{{ __('homeMessages.nextStepCButton') }}</span>
					</button>
				</div>

			</div>
				</a>
		</div>

	</div>
</main>

@endsection
