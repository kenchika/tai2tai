@extends('layouts.app')
<script src="{{ asset('js/visaSimulator.js') }}" defer></script>
@section('content')


<div class="container-fluid page-header" style="background-image:url('../img/faq.jpg');" >

	<div class="container pt-5">





		<div class="position-relative overflow-hidden  text-white row py-5" >
			<div class="col-md-5 col-sm-12"></div>
			<div class="col-md-7 " >

				<h1 class=" mdc-typography--headline2 font-weight-bold  py-2 text-left">{{ __('faqMessages.title') }}</h1>
				<hr class="white-hr">
				<div class=" font-weight-normal mdc-typography--body1 text-justify">{{ __('faqMessages.intro') }}</div>

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
				<p class="text-left  mdc-typography--headline4 primary font-weight-bold">
					{{ __('faqMessages.text1') }}
				</p>
				<hr>
				<p class="text-left  mdc-typography--button font-weight-bold primary ">
					{{ __('faqMessages.text2') }}
				</p>
				<p class="text-left  mdc-typography--body2">
					{{ __('faqMessages.response1') }}
				</p>
				<p class="text-left  mdc-typography--button font-weight-bold primary">
					{{ __('faqMessages.text3') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('faqMessages.response2') }}
				</p>
				<p class="text-left  mdc-typography--headline4 primary font-weight-bold">
					{{ __('faqMessages.text4') }}
				</p>
					<hr>
				<p class="text-left  mdc-typography--button font-weight-bold primary">
					{{ __('faqMessages.text5') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('faqMessages.response3') }}
				</p>

				<p class="text-left  mdc-typography--button font-weight-bold primary">
					{{ __('faqMessages.text6') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('faqMessages.response4') }}
				</p>
				<p class="text-left  mdc-typography--button font-weight-bold primary">
					{{ __('faqMessages.text7') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('faqMessages.response5') }}
				</p>
				<p class="text-left  mdc-typography--button font-weight-bold primary">
					{{ __('faqMessages.text8') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('faqMessages.response6') }}
				</p>
				<p class="text-left  mdc-typography--button font-weight-bold primary">
					{{ __('faqMessages.text9') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('faqMessages.response7') }}
				</p>
				<p class="text-left  mdc-typography--button font-weight-bold primary">
					{{ __('faqMessages.text10') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('faqMessages.response8') }}
				</p>

				<p class="text-left  mdc-typography--button font-weight-bold primary ">
					{{ __('faqMessages.text11') }}
				</p>

				<p class="text-left  mdc-typography--body2 ">
					{{ __('faqMessages.response9') }}
				</p>
				<p class="text-left  mdc-typography--button font-weight-bold primary">
					{{ __('faqMessages.text12') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('faqMessages.response10') }}
				</p>
				<p class="text-left  mdc-typography--button font-weight-bold primary">
					{{ __('faqMessages.text13') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('faqMessages.response11') }}
				</p>

				<p class="text-left  mdc-typography--button font-weight-bold primary">
					{{ __('faqMessages.text14') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('faqMessages.response12') }}
				</p>
				<p class="text-left  mdc-typography--headline4 primary font-weight-bold">
					{{ __('faqMessages.text15') }}
				</p>
				<hr>
				<p class="text-left  mdc-typography--button font-weight-bold primary">
					{{ __('faqMessages.text16') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('faqMessages.response13') }}
				</p>
				<p class="text-left  mdc-typography--button font-weight-bold primary">
					{{ __('faqMessages.text17') }}
				</p>
				<p class="text-left  mdc-typography--body2 ">
					{{ __('faqMessages.response14') }}
				</p>
			</div>
		</div>
	</div>


</main>


@endsection
