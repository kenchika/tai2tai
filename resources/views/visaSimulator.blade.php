@extends('layouts.app')
<script src="{{ asset('js/visaSimulator.js') }}" defer></script>
@section('content')


<div class="container-fluid page-header" style="background-image:url('../img/simulator.jpg');" >

	<div class="container pt-5">





		<div class="position-relative overflow-hidden  text-light row py-5" >
			<div class="col-md-5 col-sm-12"></div>
			<div class="col-md-7 " >

				<h1 class=" mdc-typography--headline2 font-weight-bold  py-2 text-left">{{ __('visa.title') }}</h1>
				<hr class="white-hr">
				<div class=" font-weight-normal mdc-typography--body1 text-justify">{{ __('visa.intro') }}</div>

				<div class="product-device box-shadow d-none d-md-block"></div>
				<div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
			</div>

		</div>
	</div>
</div>

<main class="bg-white shade py-5" style="transform: translate3d(0px, 0px, 0px);" >

	<form id="sendForm" method="GET"  >
		@csrf
		<div class="container  bg-white py-5 px-5 home-card" style="max-width:600px;">

			<div class="row pb-5 pt-2">
				<div class="col-md-6 col-sm-12">
					<div class="mdc-typography--body1 font-weight-bold text-md-right"> Education </div>
					<div class="mdc-typography--body1 font-weight-normal text-md-right"> Enter your highest degree </div>
				</div>
				<div class="col-md-6  col-sm-12 text-md-left">

					<div class="mdc-select mdc-select--outlined mu-custom-button my-select" id="education">
						<div class="mdc-notched-outline">
							<div class="mdc-notched-outline__leading"></div>
							<div class="mdc-notched-outline__notch">

							</div>
							<div class="mdc-notched-outline__trailing"></div>
						</div>
						<input type="hidden" name="degree">
						<i class="mdc-select__dropdown-icon"></i>
						<div class="mdc-select__selected-text"></div>
						<div class="mdc-select__menu mdc-menu mdc-menu-surface demo-width-class">
							<ul class="mdc-list">

								<li class="mdc-list-item" data-value="20">
									Doctor or equivalent
								</li>
								<li class="mdc-list-item" data-value="15">
									Master or equivalent
								</li>
								<li class="mdc-list-item" data-value="10">
									Bachelor or equivalent
								</li>
							</ul>
						</div>


					</div>
				</div>
			</div>

			<div class="row py-4">
				<div class="col-md-6 col-sm-12">
					<div class="mdc-typography--body1 font-weight-bold text-md-right">Remuneration per year </div>
					<div class="mdc-typography--body1 font-weight-normal text-md-right"> your estimated year salary </div>
				</div>
				<div class="col-md-6 col-sm-12 text-md-left">

					<div class="mdc-select mdc-select--outlined my-select" id="remuneration">
						<div class="mdc-notched-outline">
							<div class="mdc-notched-outline__leading"></div>
							<div class="mdc-notched-outline__notch">

							</div>
							<div class="mdc-notched-outline__trailing"></div>
						</div>
						<input type="hidden" name="enhanced-select">
						<i class="mdc-select__dropdown-icon"></i>
						<div class="mdc-select__selected-text"></div>
						<div class="mdc-select__menu mdc-menu mdc-menu-surface demo-width-class">
							<ul class="mdc-list">

								<li class="mdc-list-item" data-value="20">
									&gt;450,000
								</li>
								<li class="mdc-list-item" data-value="17">
									450,000 - 350,000
								</li>
								<li class="mdc-list-item" data-value="14">
									350,000 - 250,000
								</li>
								<li class="mdc-list-item" data-value="11">
									250,000 - 150,000
								</li>
								<li class="mdc-list-item" data-value="8">
									150,000 - 70,000
								</li>
								<li class="mdc-list-item" data-value="5">
									70,000 - 50000
								</li>
								<li class="mdc-list-item" data-value="0">
									&lt;50,000
								</li>
							</ul>
						</div>


					</div>
				</div>
			</div>

			<div class="row py-4">
				<div class="col-md-6 col-sm-12">
					<div class="mdc-typography--body1 font-weight-bold text-md-right"> Related Working Year </div>
					<div class="mdc-typography--body1 font-weight-normal text-md-right"> highest 20 </div>
				</div>
				<div class="col-md-6 col-sm-12 text-md-left">

					<div class="mdc-select mdc-select--outlined my-select" id="year">
						<div class="mdc-notched-outline">
							<div class="mdc-notched-outline__leading"></div>
							<div class="mdc-notched-outline__notch">

							</div>
							<div class="mdc-notched-outline__trailing"></div>
						</div>
						<input type="hidden" name="enhanced-select">
						<i class="mdc-select__dropdown-icon"></i>
						<div class="mdc-select__selected-text"></div>
						<div class="mdc-select__menu mdc-menu mdc-menu-surface demo-width-class">
							<ul class="mdc-list">

								<li class="mdc-list-item" data-value="20">
									17  or more
								</li>
								<li class="mdc-list-item" data-value="19">
									16
								</li>
								<li class="mdc-list-item" data-value="18">
									15
								</li>

								<li class="mdc-list-item" data-value="17">
									14
								</li>
								<li class="mdc-list-item" data-value="16">
									13
								</li>
								<li class="mdc-list-item" data-value="15">
									12
								</li>
								<li class="mdc-list-item" data-value="14">
									11
								</li>
								<li class="mdc-list-item" data-value="13">
									10
								</li>
								<li class="mdc-list-item" data-value="12">
									9
								</li>
								<li class="mdc-list-item" data-value="11">
									8
								</li>
								<li class="mdc-list-item" data-value="10">
									7
								</li>
								<li class="mdc-list-item" data-value="9">
									6
								</li>
								<li class="mdc-list-item" data-value="8">
									5
								</li>
								<li class="mdc-list-item" data-value="7">
									4
								</li>
								<li class="mdc-list-item" data-value="6">
									3
								</li>
								<li class="mdc-list-item" data-value="5">
									2
								</li>
								<li class="mdc-list-item" data-value="0">
									1
								</li>
								<li class="mdc-list-item" data-value="0">
									0
								</li>


							</ul>
						</div>


					</div>
				</div>
			</div>

			<div class="row py-4">
				<div class="col-md-6 col-sm-12">
					<div class="mdc-typography--body1 font-weight-bold text-md-right"> Annual working time </div>
					<div class="mdc-typography--body1 font-weight-normal text-md-right"> in months </div>
				</div>
				<div class="col-md-6 col-sm-12 text-md-left">

					<div class="mdc-select mdc-select--outlined mu-custom-button my-select" id="working">
						<div class="mdc-notched-outline">
							<div class="mdc-notched-outline__leading"></div>
							<div class="mdc-notched-outline__notch">

							</div>
							<div class="mdc-notched-outline__trailing"></div>
						</div>
						<input type="hidden" name="enhanced-select">
						<i class="mdc-select__dropdown-icon"></i>
						<div class="mdc-select__selected-text"></div>
						<div class="mdc-select__menu mdc-menu mdc-menu-surface demo-width-class">
							<ul class="mdc-list">

								<li class="mdc-list-item" data-value="15">
									&gt;9
								</li>
								<li class="mdc-list-item" data-value="10">
									6 - 9
								</li>
								<li class="mdc-list-item" data-value="5">
									3 - 6
								</li>
								<li class="mdc-list-item" data-value="0">
									&lt;3
								</li>
							</ul>
						</div>


					</div>
				</div>
			</div>

			<div class="row py-4">
				<div class="col-md-6 col-sm-12">
					<div class="mdc-typography--body1 font-weight-bold text-md-right"> your age </div>
					<div class="mdc-typography--body1 font-weight-normal text-md-right">  </div>
				</div>
				<div class="col-md-6 col-sm-12 text-md-left">

					<div class="mdc-select mdc-select--outlined mu-custom-button my-select" id="age">
						<div class="mdc-notched-outline">
							<div class="mdc-notched-outline__leading"></div>
							<div class="mdc-notched-outline__notch">

							</div>
							<div class="mdc-notched-outline__trailing"></div>
						</div>
						<input type="hidden" name="enhanced-select">
						<i class="mdc-select__dropdown-icon"></i>
						<div class="mdc-select__selected-text"></div>
						<div class="mdc-select__menu mdc-menu mdc-menu-surface demo-width-class">
							<ul class="mdc-list">


								<li class="mdc-list-item" data-value="10">
									18 - 25
								</li>
								<li class="mdc-list-item" data-value="15">
									26 - 45
								</li>
								<li class="mdc-list-item" data-value="10">
									46 - 55
								</li>
								<li class="mdc-list-item" data-value="5">
									56 - 60
								</li>
								<li class="mdc-list-item" data-value="0">
									&gt;60
								</li>
							</ul>
						</div>


					</div>
				</div>
			</div>

			<div class="row py-4">
				<div class="col-md-6 col-sm-12">
					<div class="mdc-typography--body1 font-weight-bold text-md-right"> your Chinese level </div>
					<div class="mdc-typography--body1 font-weight-normal text-md-right">  </div>
				</div>
				<div class="col-md-6 col-sm-12 text-md-left">

					<div class="mdc-select mdc-select--outlined mu-custom-button my-select" id="chinese">
						<div class="mdc-notched-outline">
							<div class="mdc-notched-outline__leading"></div>
							<div class="mdc-notched-outline__notch">

							</div>
							<div class="mdc-notched-outline__trailing"></div>
						</div>
						<input type="hidden" name="enhanced-select">
						<i class="mdc-select__dropdown-icon"></i>
						<div class="mdc-select__selected-text"></div>
						<div class="mdc-select__menu mdc-menu mdc-menu-surface demo-width-class">
							<ul class="mdc-list">


								<li class="mdc-list-item" data-value="5">
									HSK 5
								</li>
								<li class="mdc-list-item" data-value="4">
									HSK 4
								</li>
								<li class="mdc-list-item" data-value="3">
									HSK 3
								</li>
								<li class="mdc-list-item" data-value="2">
									HSK 2
								</li>
								<li class="mdc-list-item" data-value="1">
									HSK 1
								</li>
								<li class="mdc-list-item" data-value="0">
									I don't speak chinese
								</li>
							</ul>
						</div>


					</div>
				</div>
			</div>


			<div class="row py-4">
				<div class="col-md-6 col-sm-12">
					<div class="mdc-typography--body1 font-weight-bold text-md-right my-auto"> Bonus point </div>

				</div>
				<div class="col-md-6 col-sm-12 text-md-left">

					<div class="mdc-form-field">
						<div class="mdc-checkbox">
							<input type="checkbox"
								   class="mdc-checkbox__native-control"
								   id="university100"/>
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
						<label for="university100" class="mdc-typography--body1">studied in a top 100 university</label>
					</div>

					<div class="mdc-form-field">
						<div class="mdc-checkbox">
							<input type="checkbox"
								   class="mdc-checkbox__native-control"
								   id="work500"/>
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
						<label for="work500" class="mdc-typography--body1">worked in a top 500 company</label>
					</div>


					<div class="mdc-form-field">
						<div class="mdc-checkbox">
							<input type="checkbox"
								   class="mdc-checkbox__native-control"
								   id="patent"/>
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
						<label for="patent" class="mdc-typography--body1">you hold a patent or an intellectual property</label>
					</div>

					<div class="mdc-form-field">
						<div class="mdc-checkbox">
							<input type="checkbox"
								   class="mdc-checkbox__native-control"
								   id="china5"/>
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
						<label for="china5" class="mdc-typography--body1">worked 5 year or more in china</label>
					</div>
				</div>
			</div>
		</div>





		<div class="container">


@if (empty($simulation))

			<div class="col-md-12 col-sm-12 text-center py-5 " >
				<div class="mdc-text-field mdc-text-field--outlined "  id="name">
					<input  class="mdc-text-field__input form-control" name="name"  autocomplete="name" required>
					<div class="mdc-notched-outline">
						<div class="mdc-notched-outline__leading"></div>
						<div class="mdc-notched-outline__notch">
							<label for="tf-outlined" class="mdc-floating-label">name</label>
						</div>
						<div class="mdc-notched-outline__trailing"></div>


					</div>
				</div>
				<div class="mdc-text-field mdc-text-field--outlined mt-3 mt-md-1" id="email">
					<input   class="mdc-text-field__input form-control" name="email"  autocomplete="email" required>
					<div class="mdc-notched-outline">
						<div class="mdc-notched-outline__leading"></div>
						<div class="mdc-notched-outline__notch">
							<label for="tf-outlined" class="mdc-floating-label">e-mail</label>
						</div>
						<div class="mdc-notched-outline__trailing"></div>


					</div>
				</div>


			</div>
@endif
			<input id="result" type="hidden" name="result" >
				</form>
			<div class="row justify-content-center">
				@if (empty($simulation))
				<a class="mdc-button my-button mdc-button--raised text-white" id="calc" >
					<i class="material-icons mdc-button__icon text-white" aria-hidden="true">send</i>
					<span class="mdc-button__label text-white">Send me the results</span>
				</a>
				@else
				<a class="mdc-button my-button mdc-button--raised text-white mt-5" id="calc" >
					<i class="material-icons mdc-button__icon text-white" aria-hidden="true">send</i>
					<span class="mdc-button__label text-white">Start !</span>
				</a>
				@endif
			</div>
			<div class="row justify-content-center pt-5 mx-5">
				<div id="title"  class=" font-weight-bold text-dark mdc-typography--body1 " ></div>


			</div>
			<div class="row justify-content-center pt-2">

				<div id="results" class="lead font-weight-normal text-dark mdc-typography--body2"> </div>
			</div>
		</div>


</main>

<div class="mdc-snackbar mdc-snackbar-simulator">
	<div class="mdc-snackbar__surface">
		<div class="mdc-snackbar__label"
		role="status"
		aria-live="polite">
		You must fill all the fields
	</div>
	<div class="mdc-snackbar__actions">
		<button type="button" class="mdc-button mdc-snackbar__action">ok</button>
	</div>
</div>
</div>
@endsection
