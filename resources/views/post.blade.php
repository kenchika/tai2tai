@extends('layouts.app')
<script src="{{ asset('js/post.js') }}" defer></script>
@section('content')


<div class="container-fluid " style="height: 50vh;background-image:url(../storage/{{str_replace('\\', '/', $post->image)}});background-size: cover;" >

	<div class="container pt-5">





		<div class="position-relative overflow-hidden  text-dack row py-5" >
			<div class="col-md-5 col-sm-12 py-5"></div>
			<div class="col-md-7 py-5 " >



			</div>

		</div>
	</div>
</div>

<div class="container home-card bg-white px-5 py-5 mb-5" style="margin-top:-100px">


	<div class="row justify-content-center pb-5 "  >
		<div class="col-md-8">
						<h1 class="mdc-typography--headline4 font-weight-bold text-center pb-2">{{$post->title}}</h1>
							<h1 class="mdc-typography--button text-center pb-5">Published by <span>{{$post->authorId->name}}</span> the {{explode (" ",$post->created_at)[0]}}</h1>
						<p class="text-justify "><?php echo($post->body) ?></p>
		</div>
	</div>
</div>

@endsection
