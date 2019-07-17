@extends('layouts.app')

@section('content')
<script type="text/javascript" src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/FreddyFY/material-datepicker/1.0.8/dist/material-datepicker.css">
<script type="text/javascript" src="https://cdn.rawgit.com/FreddyFY/material-datepicker/1.0.8/dist/material-datepicker.min.js"></script>

<div class="container-fluid page-header" style="background-image:url('../img/getInTouch.jpg');" >
	<div class="container text-dark ">
		<div class="row justify-content-end py-5"  >

			<div class="row py-md-5 py-sm-1">
	<div class="col-md-5 col-sm-12"></div>
				<div class="col-md-7 col-sm-12 my-5 py-md-5 py-sm-1  " >
					<h1 class="mdc-typography--headline2 text-left  font-weight-bold ">{{ __('getInTouchMessages.title') }} </h1>
					<hr >
					<p class="mdc-typography--body1 text-justify text-left pb-3">{{ __('getInTouchMessages.intro') }}</p>
				</div>
				<div class="col-md-5 col-sm-12"></div>
			</div>
		</div>
	</div>
</div>


<main class="bg-white shade pb-5" style="    transform: translate3d(0px, 0px, 0px);" >
	<div class="container-fluid bg-primary text-white pb-5" >
		<div class="container" >
			<div class="row justify-content-center align-items-center "  >
				<div class="col-md-6 col-sm-12 my-5" >


				</div>
			</div>

		</div>

	</div>
	<div class="container home-card bg-white px-5 py-5" style="margin-top:-100px">
		<form action="{{ route('getInTouchMail') }}" method="post">
			@csrf
		<div class="row justify-content-center align-items-center pb-5 "  >
			<div class="col-md-8 order-md-1">
				<div class="mdc-text-field text-field mdc-text-field--fullwidth mdc-text-field--no-label mdc-text-field--textarea ">
					<textarea id="textarea" class="mdc-text-field__input" rows="8" cols="40" name="description" required></textarea>
					<div class="mdc-notched-outline">
						<div class="mdc-notched-outline__leading"></div>
						<div class="mdc-notched-outline__notch">
							<label for="textarea" class="mdc-floating-label">{{ __('clientsMessages.text1') }}</label>
						</div>
						<div class="mdc-notched-outline__trailing"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center align-items-start pb-5 "  >


			<div class="col-md-8 order-md-1">








					<div class="row">
						<div class="col-md-6 mb-3 text-md-left text-sm-center">
							<div class="mdc-text-field mdc-text-field--outlined  ">
								<input type="text" class="mdc-text-field__input form-control " name="name" required>
								<div class="mdc-notched-outline">
									<div class="mdc-notched-outline__leading"></div>
									<div class="mdc-notched-outline__notch">
										<label for="tf-outlined" class="mdc-floating-label">Name</label>
									</div>
									<div class="mdc-notched-outline__trailing"></div>


								</div>
							</div>
						</div>

						<div class="col-md-6 mb-3  text-md-right text-sm-center " >

							<div class="mdc-text-field mdc-text-field--outlined email ">
								<input type="text" id="tf-outlined " class="mdc-text-field__input form-control " name="company" required>
								<div class="mdc-notched-outline">
									<div class="mdc-notched-outline__leading"></div>
									<div class="mdc-notched-outline__notch">
										<label for="tf-outlined" class="mdc-floating-label">Company</label>
									</div>
									<div class="mdc-notched-outline__trailing"></div>


								</div>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3 text-md-left text-center">
							<div class="mdc-text-field mdc-text-field--outlined  ">
								<input type="email" class="mdc-text-field__input form-control " name="email" required>
								<div class="mdc-notched-outline">
									<div class="mdc-notched-outline__leading"></div>
									<div class="mdc-notched-outline__notch">
										<label for="tf-outlined" class="mdc-floating-label">email</label>
									</div>
									<div class="mdc-notched-outline__trailing"></div>


								</div>
							</div>
						</div>

						<div class="col-md-6 mb-3  text-md-right text-sm-center " >
							<div class="mdc-text-field mdc-text-field--outlined  ">
								<input type="text" class="mdc-text-field__input form-control " name="wechatid" required>
								<div class="mdc-notched-outline">
									<div class="mdc-notched-outline__leading"></div>
									<div class="mdc-notched-outline__notch">
										<label for="tf-outlined" class="mdc-floating-label">wechat ID</label>
									</div>
									<div class="mdc-notched-outline__trailing"></div>


								</div>
							</div>
						</div>


					</div>
					<div class="row">
						<div class="col-md-12 text-center " >
							<button  class="mdc-fab mt-5 mdc-fab--extended secondary-fab my-fab text-white" >
							<span class="mdc-button__label ">{{ __('getInTouchMessages.btn1') }}</span>

						</button>
						</div>
					</div>
					</div>
			</div>
</form>
		</div>


		</main>

	@endsection
