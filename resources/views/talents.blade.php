@extends('layouts.app')

@section('content')


<div class="container-fluid   page-header"style="background-image:url('../img/talentsPage.jpg');" >
<div class="container  text-white ">
	<div class="row justify-content-end py-5"  >

		<div class="row py-md-5 py-sm-1">
			<div class="col-md-5 col-sm-12"></div>
			<div class="col-md-7 col-sm-12 my-5 py-md-5 py-sm-1  " >







				<h1 class="mdc-typography--headline2 text-left pt-5 font-weight-bold ">{{ __('talentsMessages.title') }} </h1>
<hr class="white-hr">
				<p class="mdc-typography--body1 text-justify text-left pb-3">{{ __('talentsMessages.intro') }}</p>




			</div>
		</div>
	</div>
</div>
</div>


<main class="bg-white shade pb-5" style="    transform: translate3d(0px, 0px, 0px);" >


	<!-- FOOTER -->





	
	<div class="container text-dark ">
		<div class="row "  >
			<div class="p-lg-4 mx-auto mt-5">
				<h1 class="mdc-typography--headline4 font-weight-bold primary text-center">{{ __('talentsMessages.title2') }}</h1>
				<p class="mdc-typography--subtitle1 text-justify text-center my-4 text-center">{{ __('talentsMessages.subtitle2') }}
				</p>
			</div>
		</div>
		<div class="row "  >

			<div class="col-md-1 col-sm-12 " >
				<img src="{{URL::asset('img/logoSimple.png')}}" width="80" />
			</div>
			<div class="col-10 " >
				<p class="mdc-typography--body1  my-4 text-left primary">{{ __('talentsMessages.blue1') }}
					<span class="text-dark">{{ __('talentsMessages.black1') }}
					</span>
				</p>
			</div>

		</div>
		<div class="row "  >

			<div class="col-md-1 col-sm-12 " >
				<img src="{{URL::asset('img/logoSimple.png')}}" width="80" />
			</div>
			<div class="col-10 " >
				<p class="mdc-typography--body1  my-4 text-left primary">{{ __('talentsMessages.blue2') }}
					<span class="text-dark">{{ __('talentsMessages.black2') }}
					</span>
				</p>
			</div>

		</div>
		<div class="row "  >

			<div class="col-md-1 col-sm-12" >
				<img src="{{URL::asset('img/logoSimple.png')}}" width="80" />
			</div>
			<div class="col-10 " >
				<p class="mdc-typography--body1  my-4 text-left primary">{{ __('talentsMessages.blue3') }}
					<span class="text-dark">{{ __('talentsMessages.black3') }}
					</span>
				</p>
			</div>

		</div>
		<div class="row "  >

			<div class="col-md-1 col-sm-12 " >
				<img src="{{URL::asset('img/logoSimple.png')}}" width="80" />
			</div>
			<div class="col-10 " >
				<p class="mdc-typography--body1  my-4 text-left primary">{{ __('talentsMessages.blue4') }}
					<span class="text-dark">{{ __('talentsMessages.black4') }}
					</span>
				</p>
			</div>

		</div>
		<div class="row "  >

			<div class="col-md-1 col-sm-12" >
				<img src="{{URL::asset('img/logoSimple.png')}}" width="80" />
			</div>
			<div class="col-10 " >
				<p class="mdc-typography--body1  my-4 text-left primary">{{ __('talentsMessages.blue5') }}
					<span class="text-dark">{{ __('talentsMessages.black5') }}
					</span>
				</p>
			</div>

		</div>
		<div class="row "  >
			<div class="p-lg-4 mx-auto mt-5">
				<h1 class="mdc-typography--headline4 font-weight-bold primary text-center">{{ __('talentsMessages.title3') }}</h1>

			</div>
		</div>
		<div class="row justify-content-center align-items-center pb-5 "  >
			<div class="col-md-4 col-sm-12 " >

				<div class="position-relative overflow-hidden text-center ">
					<div class=" mx-auto ">
						<a class="" href="/visaSimulator" >
							<i class="material-icons">
	question_answer
	</i>
						</a>
						<p class="mdc-typography--body1 text-justify text-center my-4">{{ __('TalentsMessages.faq') }}
						</p>

					</div>

				</div>

			</div>

			<div class="col-md-4 col-sm-12 ">

				<div class="position-relative overflow-hidden text-center ">

					<a class="" href="/simulator" >
						<i class="material-icons">
	question_answer
	</i>
					</a>
					<p class="mdc-typography--body1 text-justify text-center my-4">{{ __('talentsMessages.text2') }}
					</p>

				</div>


			</div>
		</div>

	</div>

</main>

@endsection
