@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card-body">
				<div class="form-group row ">
						<div class="col " align="center">
							<img src="{{URL::asset('img/logoSimple.png')}}" width="200" height="200" />
						</div>
					</div>
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif

					<form method="POST" action="{{ route('password.email') }}">
						@csrf

						<div class="form-group row">
							


								<div class="col" align=center>
									<div class="mdc-text-field mdc-text-field--outlined password">
									<input id="email" type="email" class=" mdc-text-field__input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
									<div class="mdc-notched-outline">
										<div class="mdc-notched-outline__leading"></div>
										<div class="mdc-notched-outline__notch">
											<label for="tf-outlined" class="mdc-floating-label">email</label>
										</div>
										<div class="mdc-notched-outline__trailing"></div>
									</div>
									
								</div>
									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col " align=center>
								<button type="submit" class="mdc-button mdc-button--unelevated my-custom-button">
								<span class="mdc-button__label">	{{ __('Send Password Reset Link') }}</span>
								</button>
								
							</div>
						</div>
					</form>
				</div>
			
		
		</div>
	</div>
</div>
@endsection
