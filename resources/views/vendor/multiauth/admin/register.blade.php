@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register New {{ ucfirst(config('multiauth.prefix')) }}</div>
                <div class="card-body">
    @include('multiauth::message')
                    <form method="POST" action="{{ route('admin.register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                    required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                    required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' text-danger' : '' }} row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">Assign Role</label>

                            <div class="col-md-6">
                                <select name="role_id[]" id="role_id" class="form-control {{ $errors->has('role_id') ? ' is-invalid' : '' }}" multiple>
                                    <option selected disabled>Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Register
                                </button>

                                <a href="{{ route('admin.show') }}" class="btn btn-danger btn-sm float-right">
                                    Back
                                </a>
                            </div>
                        </div>
                    </form>
                </div>








                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="birth_date" class="col-md-4 col-form-label text-md-right">birth date</label>

                                <div class="col-md-6">
                                    <input id="birth_date" type="text" class="form-control " name="birth_date" >


                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">phone_number</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control " name="phone_number" >

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nationality" class="col-md-4 col-form-label text-md-right"> nationality</label>

                                <div class="col-md-6">
                                    <input id="nationality" type="text" class="form-control " name="nationality" >

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="wechat_id" class="col-md-4 col-form-label text-md-right"> wechat_id</label>

                                <div class="col-md-6">
                                    <input id="wechat_id" type="text" class="form-control " name="wechat_id" >

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_card_number" class="col-md-4 col-form-label text-md-right"> id_card_number</label>

                                <div class="col-md-6">
                                    <input id="id_card_number" type="text" class="form-control " name="id_card_number" >

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="expiration_date" class="col-md-4 col-form-label text-md-right"> expiration_date</label>

                                <div class="col-md-6">
                                    <input id="expiration_date" type="text" class="form-control " name="expiration_date" >

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_bank_number" class="col-md-4 col-form-label text-md-right">id_bank_number</label>

                                <div class="col-md-6">
                                    <input id="id_bank_number" type="text" class="form-control " name="id_bank_number" >

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bank_name" class="col-md-4 col-form-label text-md-right">bank_name</label>

                                <div class="col-md-6">
                                    <input id="bank_name" type="text" class="form-control " name="bank_name" >

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
@endsection
