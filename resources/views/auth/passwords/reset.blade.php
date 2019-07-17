@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



                <div class="card-body text-center">
                  <div class="form-group row ">
          						<div class="col " align="center">
          							<img src="{{URL::asset('img/logoSimple.png')}}" width="200" height="200" />
          						</div>
          					</div>
                    <form method="POST" action="{{ route('password.update') }}" >
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">


                            <div class="col-md-12 ">
                              <div class="mdc-text-field mdc-text-field--outlined password">
                              <input id="email" type="email" class=" mdc-text-field__input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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

                        <div class="form-group row">


                            <div class="col-md-12">
                              <div class="mdc-text-field mdc-text-field--outlined password">
                                <input id="password" type="password" class="mdc-text-field__input  form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                              <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                  <label for="tf-outlined" class="mdc-floating-label">Password</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                              </div>

                            </div>


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="col-md-12">
                              <div class="mdc-text-field mdc-text-field--outlined password">
                              <input id="password-confirm" class="mdc-text-field__input" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                              <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                  <label for="tf-outlined" class="mdc-floating-label">Confirm password</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                              </div>

                            </div>


                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

  </div>
    </div>
</div>
@endsection
