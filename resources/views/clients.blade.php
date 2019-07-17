@extends('layouts.app')
<script src="{{ asset('js/client.js') }}" defer></script>
@section('content')
<script type="text/javascript" src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/FreddyFY/material-datepicker/1.0.8/dist/material-datepicker.css">
<script type="text/javascript" src="https://cdn.rawgit.com/FreddyFY/material-datepicker/1.0.8/dist/material-datepicker.min.js"></script>

<div class="container-fluid page-header" style="background-image:url('../img/clientsPage.jpg');" >
	<div class="container text-white ">
		<div class="row justify-content-end py-5"  >
			<div class="row py-md-5 py-sm-1">
				<div class="col-md-5 col-sm-12"></div>
				<div class="col-md-7 col-sm-12 my-5 py-md-5 py-sm-1  " >
					<h1 class="mdc-typography--headline2 text-left  font-weight-bold ">{{ __('clientsMessages.title') }} </h1>
					<hr class="white-hr">
					<p class="mdc-typography--body1 text-justify text-left pb-3">{{ __('clientsMessages.intro') }}</p>
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
					<p class="text-justify text-center  font-weight-bold mdc-typography--headline4">{{ __('clientsMessages.tell') }}
					</p>
					<p class="pb-5 text-justify text-center  mdc-typography--subtitle1">{{ __('clientsMessages.subtitle1') }}
					</p>
				</div>
			</div>

		</div>

	</div>
	<div class="container home-card bg-white px-5 py-5" style="margin-top:-100px">
		<form action="{{ route('contactUs') }}" method="post">
			{{csrf_field()}}
			<div class="row justify-content-center align-items-center pb-5 "  >
				<div class="col-md-8 order-md-1">
					<div class="mdc-text-field text-field mdc-text-field--fullwidth mdc-text-field--no-label mdc-text-field--textarea ">
						<textarea id="textarea" class="mdc-text-field__input" rows="8" cols="40" name="description"></textarea>
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
						<div class="col-md-6 mb-3 col-sm-6 text-md-left text-sm-center">
							<div class="row">
								<label class="col">{{ __('clientsMessages.text2') }}</label>
							</div>
							<div class="mdc-text-field mdc-text-field--outlined   mdc-text-field--no-label">
								<input class="mdc-text-field__input form-control" name="number" type=number  >
								<div class="mdc-notched-outline">
									<div class="mdc-notched-outline__leading"></div>

									<div class="mdc-notched-outline__trailing"></div>


								</div>
							</div>
						</div>

						<div class="col-md-6 mb-3 col-sm-6 text-md-left text-sm-center" >
							<div class="row">
								<label  class="col">{{ __('clientsMessages.check1') }}
								</label>
							</div>
							<div class="mdc-checkbox">
								<input type="checkbox" name="sure"
								class="mdc-checkbox__native-control"
								type="checkbox"  id="sure"/>
								<div class="mdc-checkbox__background">
									<svg class="mdc-checkbox__checkmark"
									viewBox="0 0 24 24">
									<path class="mdc-checkbox__checkmark-path"
									fill="none"
									d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
								</svg>
								<div class="mdc-checkbox__mixedmark"></div>
							</div>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3 text-md-left text-sm-center">
						<div class="row">
							<label for="type"  class="col">{{ __('clientsMessages.text3') }}</label>
						</div>


						<div class="mdc-text-field mdc-text-field--outlined   mdc-text-field--no-label">
							<input name="type" id="talentType" class="mdc-text-field__input form-control "   >
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>

								<div class="mdc-notched-outline__trailing"></div>


							</div>
						</div>
					</div>

					<div class="col-md-6 mb-3  text-md-right text-sm-center " >
						<div class="row">
							<label  class="col" >{{ __('clientsMessages.text4') }}</label>
						</div>
						<div class="mdc-text-field mdc-text-field--outlined   mdc-text-field--no-label ">
							<input  id="mandatory" class="mdc-text-field__input form-control" name="mandatory"  >
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>

								<div class="mdc-notched-outline__trailing"></div>
							</div>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3  text-md-left text-sm-center">
						<div class="row">
							<label  class="col" >{{ __('clientsMessages.text5') }} </label>
						</div>
						<div class="mdc-text-field mdc-text-field--outlined  mdc-text-field--no-label">
							<input name="delivrables" id="delivrables" class="mdc-text-field__input form-control"   >
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>

								<div class="mdc-notched-outline__trailing"></div>


							</div>
						</div>



					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3  text-md-left text-sm-center">
						<div class="row">
							<label  class="col" >&nbsp;&nbsp;&nbsp; </label>
						</div>
						<div class="mdc-text-field mdc-text-field--outlined">
							<input type="text" id="startingDate" name="startingDate" class="mdc-text-field__input">

							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>
								<div class="mdc-notched-outline__notch">
									<label for="my-input" class="mdc-floating-label">{{ __('clientsMessages.text6') }}</label>
								</div>
								<div class="mdc-notched-outline__trailing"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 mb-3 text-md-left text-sm-center">
						<div class="row">
							<label   class="col">{{ __('clientsMessages.text7') }}</label>
						</div>


						<div class="mdc-text-field mdc-text-field--outlined   mdc-text-field--no-label">
							<input name="length" id="length"  class="mdc-text-field__input form-control "   >
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>

								<div class="mdc-notched-outline__trailing"></div>


							</div>
						</div>
					</div>
					<div class="col-md-2 mb-3 my-auto text-md-center text-sm-center" >
						<p>OR</p>
					</div>
					<div class="col-md-5 mb-3  text-md-right text-sm-center" >
						<div class="row">
							<label  class="col text-md-right text-sm-center" >{{ __('clientsMessages.text8') }}</label>
						</div>
						<div class="mdc-text-field mdc-text-field--outlined   mdc-text-field--no-label ">
							<input  id="frequency" class="mdc-text-field__input form-control" name="frequency"  >
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>

								<div class="mdc-notched-outline__trailing"></div>
							</div>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3  text-md-left text-sm-center">
						<div class="row">
							<label  class="col" >{{ __('clientsMessages.text10') }} </label>
						</div>
						<div class="mdc-text-field mdc-text-field--outlined  mdc-text-field--no-label">
							<input name="location"  class="mdc-text-field__input form-control"   >
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>

								<div class="mdc-notched-outline__trailing"></div>


							</div>
						</div>



					</div>
				</div>
				<div class="row">
					<div class="col-md-5 mb-3 text-md-left text-sm-center">
						<div class="row">
							<label   class="col">{{ __('clientsMessages.text11') }}</label>
						</div>


						<div class="mdc-text-field mdc-text-field--outlined   mdc-text-field--no-label">
							<input name="budget" id="length"  class="mdc-text-field__input form-control "   >
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>

								<div class="mdc-notched-outline__trailing"></div>


							</div>
						</div>
					</div>
					<div class="col-md-2 mb-3 my-auto text-md-center text-sm-center" >
						<p>OR</p>
					</div>
					<div class="col-md-5 mb-3  text-md-right text-sm-center" >
						<div class="row">
							<label  class="col text-md-right text-sm-center" >{{ __('clientsMessages.text12') }}</label>
						</div>
						<div class="mdc-text-field mdc-text-field--outlined   mdc-text-field--no-label ">
							<input  id="frequency" class="mdc-text-field__input form-control" name="dailyBudget"  >
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>

								<div class="mdc-notched-outline__trailing"></div>
							</div>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3 text-md-left text-sm-center">
						<div class="row">
							<label for=""  class="col">{{ __('clientsMessages.text13') }}</label>
						</div>


						<div class="mdc-text-field mdc-text-field--outlined   mdc-text-field--no-label">
							<input name="name"  class="mdc-text-field__input form-control "   required>
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>

								<div class="mdc-notched-outline__trailing"></div>


							</div>
						</div>
					</div>

					<div class="col-md-6 mb-3  text-md-right text-sm-center " >
						<div class="row">
							<label  class="col" >{{ __('clientsMessages.text14') }}</label>
						</div>
						<div class="mdc-text-field mdc-text-field--outlined   mdc-text-field--no-label ">
							<input   class="mdc-text-field__input form-control" name="company"  required>
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>

								<div class="mdc-notched-outline__trailing"></div>
							</div>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3 text-md-left text-sm-center">
						<div class="row">
							<label for="type"  class="col">{{ __('clientsMessages.text15') }}</label>
						</div>


						<div class="mdc-text-field mdc-text-field--outlined   mdc-text-field--no-label">
							<input   class="mdc-text-field__input form-control " name="email" type=email required>
							<div class="mdc-notched-outline">
								<div class="mdc-notched-outline__leading"></div>

								<div class="mdc-notched-outline__trailing"></div>


							</div>
						</div>
					</div>

					<div class="col-md-12 mb-3  text-md-left text-sm-center " >
						<div class="row">
							<label  class="col" >{{ __('clientsMessages.text16') }}</label>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="mdc-select mdc-select--outlined " id=phone >
									<div class="mdc-notched-outline">
										<div class="mdc-notched-outline__leading"></div>
										<div class="mdc-notched-outline__notch">
										</div>
										<div class="mdc-notched-outline__trailing"></div>
									</div>
									<input type="hidden" name="phone" value=86>
									<i class="mdc-select__dropdown-icon"></i>
									<div class="mdc-select__selected-text" ></div>
									<div class="mdc-select__menu mdc-menu mdc-menu-surface " style="z-index:10000" >
										@include('layouts.phone')
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="mdc-text-field mdc-text-field--outlined   mdc-text-field--no-label ">
									<input   class="mdc-text-field__input form-control" name="phoneNumber" type="number" required>
									<div class="mdc-notched-outline">
										<div class="mdc-notched-outline__leading"></div>

										<div class="mdc-notched-outline__trailing"></div>
									</div>
								</div>
							</div>

						</div>
					</div>


				</div>
				<div class="row">
					<div class="col-md-12 text-center " >
						<button type="" class="mdc-fab mt-5 mdc-fab--extended secondary-fab my-fab text-white" >
							<span class="mdc-button__label ">{{ __('clientsMessages.btn1') }}</span>

						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<div class="container text-dark ">
	<div class="row "  >
		<div class="p-lg-4 mx-auto mt-5">
			<h1 class="mdc-typography--headline4 font-weight-bold primary text-center">{{ __('clientsMessages.title2') }}</h1>
			<p class="mdc-typography--subtitle1 text-justify text-center my-4 text-center">{{ __('clientsMessages.text17') }}
			</p>
		</div>
	</div>
	<div class="row "  >

		<div class="col-md-1 col-sm-12 " >
			<img src="{{URL::asset('img/logoSimple.png')}}" width="80" />
		</div>
		<div class="col-11 " >
			<p class="mdc-typography--body1  my-4 text-left primary">{{ __('clientsMessages.blue1') }}
				<span class="text-dark">{{ __('clientsMessages.black1') }}
				</span>
			</p>
		</div>

	</div>
	<div class="row "  >

		<div class="col-md-1 col-sm-12 " >
			<img src="{{URL::asset('img/logoSimple.png')}}" width="80" />
		</div>
		<div class="col-11 " >
			<p class="mdc-typography--body1  my-4 text-left primary">{{ __('clientsMessages.blue2') }}
				<span class="text-dark">{{ __('clientsMessages.black2') }}
				</span>
			</p>
		</div>

	</div>
	<div class="row "  >

		<div class="col-md-1 col-sm-12" >
			<img src="{{URL::asset('img/logoSimple.png')}}" width="80" />
		</div>
		<div class="col-10 " >
			<p class="mdc-typography--body1  my-4 text-left primary">{{ __('clientsMessages.blue3') }}
				<span class="text-dark">{{ __('clientsMessages.black3') }}
				</span>
			</p>
		</div>

	</div>
	<div class="row "  >

		<div class="col-md-1 col-sm-12 " >
			<img src="{{URL::asset('img/logoSimple.png')}}" width="80" />
		</div>
		<div class="col-11 " >
			<p class="mdc-typography--body1  my-4 text-left primary">{{ __('clientsMessages.blue4') }}
				<span class="text-dark">{{ __('clientsMessages.black4') }}
				</span>
			</p>
		</div>

	</div>
	<div class="row "  >

		<div class="col-md-1 col-sm-12" >
			<img src="{{URL::asset('img/logoSimple.png')}}" width="80" />
		</div>
		<div class="col-11 " >
			<p class="mdc-typography--body1  my-4 text-left primary">{{ __('clientsMessages.blue5') }}
				<span class="text-dark">{{ __('clientsMessages.black5') }}
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


	</div>

</div>

</main>
<script type="text/javascript">
if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	$('#startingDate').prop("type", "text");
	var monthpicker = new MaterialDatepicker('#startingDate', {
		color: "#0092AD",
		lang: 'en',
		orientation: 'portrait'
	});
}
else{
	$('#startingDate').prop("type", "date");
}
</script>
@endsection
