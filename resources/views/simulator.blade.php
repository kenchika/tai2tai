

@extends('layouts.app')
<script src="{{ asset('js/simulatorTalent.js') }}" defer></script>
@section('content')


<div class="container-fluid page-header" style="background-image:url('../img/simulator.jpg');" >

	<div class="container pt-5">





		<div class="position-relative overflow-hidden  text-light row py-5" >
			<div class="col-md-5 col-sm-12"></div>
			<div class="col-md-7 " >

				<h1 class=" mdc-typography--headline2 font-weight-bold  py-2 text-left">{{ __('simulatorMessages.title') }}</h1>
				<hr class="white-hr">
				<div class=" font-weight-normal mdc-typography--body1 text-justify">{{ __('simulatorMessages.intro') }}</div>

				<div class="product-device box-shadow d-none d-md-block"></div>
				<div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
			</div>

		</div>
	</div>
</div>
</div>
<main class="bg-white shade " style="    transform: translate3d(0px, 0px, 0px);" >

<div class="container " align=center >


	<div class="row">
		<div class="col-md-6 col-sm-12 my-md-5 my-sm-2 ">
			 <div class=" mt-5 mb-3 text-left "  >
			<div class=" mdc-typography--headline5">
			{{ __('simulatorMessages.parameters') }}
		</div>


</div>

<div class="container  home-card bg-white py-5 px-5 " style="max-width:600px;    " >


	<div class="row pb-md-5 pb-sm-1 pt-2">
		<div class="col-md-6 col-sm-12">
			<div class="mdc-typography--body1 font-weight-bold text-md-right my-3" > {{ __('simulatorMessages.perDay') }} </div>

		</div>
		<div class="col-md-6  col-sm-12 text-md-left">
			<div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-trailing-icon my-custom-textField mdc-text-field--no-label" id="day" >
				<i class="material-icons mdc-text-field__icon" tabindex="0" role="button"><img src="https://img.icons8.com/windows/96/000000/japanese-yen.png" width="28"></i>

				<input  type="input" class=" mdc-text-field__input form-control" name="daily"   >

				<div class="mdc-notched-outline">
					<div class="mdc-notched-outline__leading"></div>

					<div class="mdc-notched-outline__trailing"></div>
				</div>



			</div>
		</div>

	</div>
	<div class="row py-md-4 py-sm-1 ">
		<div class="col-md-6 col-sm-12">
			<div class="mdc-typography--body1 font-weight-bold text-md-right  my-3">{{ __('simulatorMessages.perMonth') }} </div>


		</div>
		<div class="col-md-6 col-sm-12 text-md-left">

			<div class="mdc-text-field mdc-text-field--outlined  my-custom-textField mdc-text-field--no-label " id="month" >

				<input  type="input" class=" mdc-text-field__input form-control" name="daily"   >
				<div class="mdc-notched-outline">
					<div class="mdc-notched-outline__leading"></div>

					<div class="mdc-notched-outline__trailing"></div>
				</div>
			</div>





		</div>

	</div>
	<div class="row">
		<div class="col-12">
			<div class="row mdc-typography--body1 ">
				<div class="col-2 py-3">
					0d
				</div>
				<div class="col-8">

					<div class="mdc-slider sliderMonth primary-slider" tabindex="0" role="slider"
					aria-valuemin="0" aria-valuemax="7" aria-valuenow="2"
					aria-label="Select Value" data-step="0.5">
					<div class="mdc-slider__track-container">
						<div class="mdc-slider__track"></div>
					</div>
					<div class="mdc-slider__thumb-container">
						<svg class="mdc-slider__thumb" width="21" height="21">
							<circle cx="10.5" cy="10.5" r="7.875"></circle>
						</svg>
						<div class="mdc-slider__focus-ring"></div>
					</div>
				</div>
			</div>
			<div class="col-2 py-3">
				7d
			</div>


		</div>
	</div>
</div>



<div class="row py-md-4 py-sm-1">
	<div class="col-md-6 col-sm-12">
		<div class="mdc-typography--body1 font-weight-bold text-md-right  my-3" > {{ __('simulatorMessages.perYear') }} </div>

	</div>
	<div class="col-md-6 col-sm-12 text-md-left" >
		<div class="mdc-text-field mdc-text-field--outlined  my-custom-textField mdc-text-field--no-label" id="year" >

			<input  type="input" class=" mdc-text-field__input form-control @error('password') is-invalid @enderror" name="daily"   >
			<div class="mdc-notched-outline">
				<div class="mdc-notched-outline__leading"></div>

				<div class="mdc-notched-outline__trailing"></div>
			</div>



		</div>

	</div>

</div>
<div class="row">
	<div class="col-12">
		<div class="row mdc-typography--body1  ">
			<div class="col-2 py-3">
				0m
			</div>
			<div class="col-8">
				<div class="mdc-slider sliderYear primary-slider" tabindex="0" role="slider"
				aria-valuemin="0" aria-valuemax="12" aria-valuenow="10"
				aria-label="Select Value" data-step="1">
				<div class="mdc-slider__track-container">
					<div class="mdc-slider__track"></div>
				</div>
				<div class="mdc-slider__thumb-container">
					<svg class="mdc-slider__thumb" width="21" height="21">
						<circle cx="10.5" cy="10.5" r="7.875"></circle>
					</svg>
					<div class="mdc-slider__focus-ring"></div>
				</div>
			</div>
		</div>
		<div class="col-2 py-3">
			12m
		</div>


	</div>
</div>
</div>









<div class="row py-md-4 py-sm-1">
	<div class="col-md-6 col-sm-12">
		<div class="mdc-typography--body1 font-weight-bold text-md-right  my-3" > {{ __('simulatorMessages.allow') }} </div>

	</div>
	<div class="col-md-6 col-sm-12 text-md-left" >

		<div class=" mdc-text-field--no-label mdc-text-field mdc-text-field--outlined mdc-text-field--with-trailing-icon my-custom-textField mdc-text-field--no-label " id="allow" >
			<i class="material-icons mdc-text-field__icon" tabindex="0" role="button"><img src="https://img.icons8.com/material/48/000000/percentage.png" width="28"></i>
			<input  type="input" class=" mdc-text-field__input form-control " name="daily"   >
			<div class="mdc-notched-outline">
				<div class="mdc-notched-outline__leading"></div>

				<div class="mdc-notched-outline__trailing"></div>
			</div>



		</div>
	</div>

</div>
<div class="row">
	<div class="col-12">
		<div class="row mdc-typography--body1  ">
			<div class="col-2 py-3">
				0%
			</div>
			<div class="col-8">
				<div class="mdc-slider sliderAllow primary-slider" tabindex="0" role="slider"
				aria-valuemin="0" aria-valuemax="25" aria-valuenow="10"
				aria-label="Select Value" data-step="1">
				<div class="mdc-slider__track-container">
					<div class="mdc-slider__track"></div>
				</div>
				<div class="mdc-slider__thumb-container">
					<svg class="mdc-slider__thumb" width="21" height="21">
						<circle cx="10.5" cy="10.5" r="7.875"></circle>
					</svg>
					<div class="mdc-slider__focus-ring"></div>
				</div>
			</div>
		</div>
		<div class="col-2 py-3 ">
			25%
		</div>


	</div>
</div>
</div>



</div>
</div>
<div class="col-md-6 col-sm-12 py-5" >

	 <div class=" mt-5 mb-3 text-left "  >
	<div class=" mdc-typography--headline5 ">
	{{ __('simulatorMessages.results') }}
</div>


</div>

<div class="container   home-card  bg-white py-5 px-5" >





	<div class="row ">
		<div class="col  font-weight-normal mdc-typography--body1">

			<div align=left>{{ __('simulatorMessages.taxfree') }}</div>



		</div>
		<div class="mdc-chip my-custom-chips-w  mdc-chip--selected" tabindex="0">
			<div class="mdc-chip__text">	<div id="HT"  align=right class="font-weight-bold"></div></div>
		</div>
	</div>
	<hr>
	<div class="row ml-2">
		<div class="col  font-italic mdc-typography--body1">

			<div align=left>{{ __('simulatorMessages.tai2part') }}</div>



		</div>
		<div class="mdc-chip my-custom-chips-bl text-white mdc-chip--selected" tabindex="0">
			<div class="mdc-chip__text">	<div id="TAI"  align=right class="font-weight-bold"></div></div>
		</div>
	</div>
	<hr>
	<div class="row ">
		<div class="col font-weight-normal mdc-typography--body1">

			<div align=left >{{ __('simulatorMessages.gross') }}</div>



		</div>
		<div class="mdc-chip my-custom-chips-w  mdc-chip--selected" tabindex="0">
			<div class="mdc-chip__text">	<div id="gross"  align=right class="font-weight-bold"></div></div>
		</div>
	</div>
	<hr>
	<div class="row ml-2">
		<div class="col font-italic font-weight-normal mdc-typography--body1 ">

			<div align=left>{{ __('simulatorMessages.tax') }}</div>



		</div>
		<div class="mdc-chip my-custom-chips-gray mdc-chip--selected" tabindex="0">
			<div class="mdc-chip__text">	<div id="tax"  align=right class="font-weight-bold"></div></div>
		</div>
	</div>
	<hr>




	<div class="row ">
		<div class="col  font-weight-normal mdc-typography--body1">

			<div align=left>{{ __('simulatorMessages.net') }}</div>



		</div>
		<div class="mdc-chip my-custom-chips-y text-dark mdc-chip--selected" tabindex="0">
			<div class="mdc-chip__text">	<div id="net"  align=right class="font-weight-bold"></div></div>
		</div>
	</div>
	<hr>

	<div class="row ">
		<div class="col  font-weight-normal mdc-typography--body1">

			<div align=left>{{ __('simulatorMessages.allow') }}



			</div>



		</div>
		<div class="mdc-chip my-custom-chips-g text-white mdc-chip--selected" tabindex="0">
			<div class="mdc-chip__text">	<div id="allowances"  align=right class="font-weight-bold"></div> </div>
		</div>

	</div>

	<canvas id="myChart" width="250" height="200"></canvas>

	<div class="row " style="margin-top:10px">
		<div class="col  font-weight-bold mdc-typography--body1">

			<div align=left>
				{{ __('simulatorMessages.Cash') }}




			</div>





		</div>
		<div class="mdc-chip my-custom-chips-b mdc-chip--selected" tabindex="0">
			<div class="mdc-chip__text">	<div id="netRemuneration"  align=right class="font-weight-bold text-white"></div></div>
		</div>

	</div>


</div>
</div>
</div>


	<div class="row mb-5">
	<div class="col" align=right >
		<button  class="mdc-fab mdc-fab--extended secondary-fab disabled" id="calc" >
			<span class="material-icons mdc-fab__icon">send</span>
			<span class="mdc-fab__label">{{ __('simulatorMessages.simulate') }}</span>
		</button>
	</div>
</div>


</main>

@endsection
