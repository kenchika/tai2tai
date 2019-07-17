
@extends('layouts.app')

<script src="{{ asset('js/profile.js') }}" defer></script>

@section('content')
<div class="container-fluid " style="background-image:url('../img/bg.jpg'); -webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;" >
<div class="container text-white">
	<div class="row py-4"></div>
	<div class="row my-padding"  >



		<div class="col-md-12 col-sm-12 my-5 py-md-5 py-sm-1 " align=center >



		</div>
	</div>
</div>
</div>

<main class="bg-white main-raised py-5" style="    transform: translate3d(0px, 0px, 0px);" >
	<div class="row">
		<div class="col-md-12 col-sm-12 my-5" align= center >
			<img src="{{URL::asset('img/city.jpg')}}" class=" my-img mdc-elevation--z4" width="250px"  style="border-radius:100%; margin-top:-250px"/>



		</div>


	</div>

	<h1 class="mdc-typography--headline4 text-center text-capitalize font-weight-bold primary">contracts</h1>
	<div class=" mdc-typography--subtitle1  text-center ">

	</div>
	<div class="container  bg-white px-md-2 my-5 px-sm-1" style="max-width:600px;    " >





		<div class=" mt-1 mb-3 text-left "  >
			<div class=" mdc-typography--button ">
				my contracts
			</div>


		</div>






		<div class="row justfy-content-end">
			<div class="col" align=right>
				<button class="mdc-fab mr-5 my-fab" aria-label="Favorite"  data-toggle="modal" data-target="#skillsModal" style="margin-top:-30px;">
					<span class="mdc-fab__icon material-icons">add</span>
				</button>
			</div>
		</div>



	</div>




</div>







</div>

<div class="row">



</div>



</main>





@endsection
