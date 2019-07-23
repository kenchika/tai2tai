@extends('layouts.app')

@section('content')

<style>
@media (min-width: 830px){
	.page-header {

		height: 100vh;
		background-position: center center;
		background-size: cover;
		background-image: url("{{URL::asset('img/aboutUs.jpg')}}");
		display: flex;
		align-items: center;

	}

}
</style>
<div class="container-fluid page-header"  >

	<div class="container pt-5">





		<div class="position-relative overflow-hidden  text-dack row py-5" >
			<div class="col-md-5 col-sm-12"></div>
			<div class="col-md-7 " >

				<h1 class=" mdc-typography--headline2 font-weight-bold   py-2 text-left">{{ __('aboutUsMessages.title') }}</h1>
				<hr >
				<div class=" font-weight-normal mdc-typography--body1 text-justify">{{ __('aboutUsMessages.intro') }}</div>

				<div class="product-device box-shadow d-none d-md-block"></div>
				<div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
			</div>

		</div>
	</div>
</div>

<main class="bg-white shade py-5"  >

	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="text-center  mdc-typography--headline4  font-weight-bold primary pb-5">
					{{ __('aboutUsMessages.text1') }}
				</p>
			</div>
		</div>
		<div class="row">

			<div class="col-md-6 col-sm-12">
				<img src="{{URL::asset('img/greg.jpg')}}"  class="img-fluid my-img " />
			</div>
			<div class="col-md-6 col-sm-12">
				<p class="text-left  mdc-typography--headline5  font-weight-bold primary">
					{{ __('aboutUsMessages.text2') }}
				</p>
				<p class="text-left mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text3') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response1') }}
				</p>
				<p class="text-left mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text4') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response2') }}
				</p>
				<p class="text-left mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text5') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response3') }}
				</p>
			</div>
		</div>
		<div class="row pt-5">
			<div class="col-12">
				<p class="text-left mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text6') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response4') }}
				</p>
				<p class="text-left mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text7') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response5') }}
				</p>
				<p class="text-left mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text8') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response6') }}
				</p>
				<p class="text-left mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text9') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response7') }}
				</p>
				<p class="text-left mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text10') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response8') }}
				</p>
			</div>
		</div>
		<div class="row pt-5">

			<div class="col-md-6 col-sm-12">
				<p class="text-right  mdc-typography--headline5  font-weight-bold primary">
					{{ __('aboutUsMessages.text11') }}
				</p>
				<p class="text-right mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text3') }}
				</p>
				<p class="text-right  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response9') }}
				</p>
				<p class="text-right mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text4') }}
				</p>
				<p class="text-right  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response10') }}
				</p>
				<p class="text-right mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text5') }}
				</p>
				<p class="text-right  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response11') }}
				</p>
			</div>
			<div class="col-md-6 col-sm-12">
				<img src="{{URL::asset('img/alexia.jpg')}}" class="img-fluid my-img " />
			</div>
		</div>
		<div class="row pt-5">
			<div class="col-12">
				<p class="text-right mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text6') }}
				</p>
				<p class="text-right  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response12') }}
				</p>
				<p class="text-right mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text7') }}
				</p>
				<p class="text-right  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response13') }}
				</p>
				<p class="text-right mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text8') }}
				</p>
				<p class="text-right  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response14') }}
				</p>
				<p class="text-right mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text9') }}
				</p>
				<p class="text-right  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response15') }}
				</p>
				<p class="text-right mdc-typography--button font-weight-bold primary">
					{{ __('aboutUsMessages.text10') }}
				</p>
				<p class="text-right  mdc-typography--body2 ">
					{{ __('aboutUsMessages.response16') }}
				</p>
			</div>
		</div>
	</div>


</main>


@endsection
