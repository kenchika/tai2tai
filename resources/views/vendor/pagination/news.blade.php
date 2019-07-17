@extends('layouts.app')
<script src="{{ asset('js/post.js') }}" defer></script>
@section('content')


<div class="container-fluid page-header" style="background-image:url('../img/aboutUs.jpg');" >

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

			@foreach ($news as $post)
			<div class="col-md-4 col-sm-12 mt-5">
				<div class="mdc-card my-card mdc-card--outlined">
					<div class="mdc-card__primary-action">
						<div class="mdc-card__media mdc-card__media--square" style="background-image:url(../storage/{{str_replace('\\', '/', $post->image)}});">

					</div>

				</div>
				<div class="demo-card__primary" style="padding: 1rem;">
					<h2 class="demo-card__title mdc-typography mdc-typography--headline6">
						{{$post->title}}
					</h2>
					<div class="row">
						<div class="col-6">
							<h3 class=" mdc-typography mdc-typography--subtitle2">	{{$post->authorId->name}}
							</h3>
							</div>
								<div class="col-6 text-right">
							<h3 class=" mdc-typography mdc-typography--subtitle2">
								{{explode (" ",$post->created_at)[0]}}
							</h3>

						</div>
					</div>
				</div>

			</div>

		</div>
		@endforeach
	</div>
	<div class="row mt-5 ">
		<div class="col-12 text-center">
		{{ $news->links() }}
	</div>
</div>
</div>


</main>


@endsection
