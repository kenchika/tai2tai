@extends('layouts.app')
<script src="{{ asset('js/post.js') }}" defer></script>
@section('content')


<div class="container-fluid page-header" style="background-color: #fed832;
background-image: linear-gradient(62deg, #fed832 0%, #F7CE68 100%);
" >

<div class="container pt-5">





	<div class="position-relative overflow-hidden  text-dack row py-5" >
		<div class="col-md-5 col-sm-12"></div>
		<div class="col-md-7 " >

			<h1 class=" mdc-typography--headline2 font-weight-bold   py-2 text-left">{{ __('newsMessages.title') }}</h1>
			<hr >
			<div class=" font-weight-normal mdc-typography--body1 text-justify">{{ __('newsMessages.intro') }}</div>

			<div class="product-device box-shadow d-none d-md-block"></div>
			<div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
		</div>

	</div>
</div>
</div>

@if($news->currentPage()==1)
<div class="container mt-5  ">

	<form class="row justify-content-center">

		<div class="col-12 text-center mb-5 ">

			<div class=" mdc-text-field text-field mdc-text-field--outlined mdc-text-field--with-leading-icon container-fluid ">
				<a href="#">
					<i class="material-icons mdc-text-field__icon" role="button"  tabindex="0">
						search
					</i>
				</a>
				<input type="text" id="search" class="mdc-text-field__input" aria-describedby="text-field-outlined-leading-helper-text">
				<div class="mdc-notched-outline mdc-notched-outline--upgraded">
					<div class="mdc-notched-outline__leading">
					</div>
					<div class="mdc-notched-outline__notch" >
						<label class="mdc-floating-label" for="text-field-outlined-leading" >
							Rechercher
						</label>
					</div>
					<div class="mdc-notched-outline__trailing">
					</div>
				</div>
			</div>


		</div>

	</form>

</div>
@endif
<main class="bg-white shade py-5"  >

	<div class="container">
		<div class="row post">

			@foreach ($news->reverse() as $post)
			<a href="{{ route('post.show', ['post' => $post->id]) }}" class="text-decoration-none text-dark">
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
			</a>
			@endforeach
		</div>
		<div class="row mt-5 ">
			<div class="col-12 text-center">
				{{ $news->links() }}
			</div>
		</div>
	</div>


</main>
<script type="text/javascript">
$('#search').on('keyup',function(){
	$value=$(this).val();
	$.ajax({
		type : 'get',
		url : 'http://127.0.0.1:8000/news/search',
		data:{'search':$value},
		success:function(data){
			$('.post').html(data);
		}
	});
})
</script>

@endsection
