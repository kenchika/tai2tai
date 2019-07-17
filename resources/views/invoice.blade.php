@extends('layouts.app')

<script src="{{ asset('js/profile.js') }}" defer></script>

@section('content')
<div class="container-fluid jarallax " style="background-image:url('../img/bg.jpg'); -webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;" >
<div class="container text-white">
	<div class="row py-4"></div>
	<div class="row my-padding"  >
		<div class="col-md-12 col-sm-12 my-5 py-md-5 py-sm-1 " align=center data-aos="fade-up" data-aos-offset="-10000" data-aos-anchor-placement="center-center"  data-aos-easing="ease-out-quad"  data-aos-duration="230">
		</div>
	</div>
</div>
</div>

<main class="bg-white main-raised py-5" style="    transform: translate3d(0px, 0px, 0px);" >
	<div class="row">

	</div>
  lulz {{$invoice->finalAmount}}
	<a href="{{ route('invoice.pdf',[ 'user'=> Auth::id(), 'contract_id'=> $contract->id, '$invoice_id'=> $invoice->id ]) }}">pdf !!</a>




</main>
