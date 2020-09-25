@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input id="gender" type="radio" class="" name="gender" value="male" required autofocus> Male
                                <br>
                                <input id="gender" type="radio" class="" name="gender" value="female" required autofocus> Female
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required autofocus>

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ old('age') }}" required autofocus>

                                @if ($errors->has('age'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specilization" class="col-md-4 col-form-label text-md-right">{{ __('Specilization') }}</label>

                            <div class="col-md-6">
                                <input id="specilization" type="text" class="form-control{{ $errors->has('specilization') ? ' is-invalid' : '' }}" name="specilization" value="{{ old('specilization') }}" required autofocus>

                                @if ($errors->has('specilization'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('specilization') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ old('location') }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="schedule" class="col-md-4 col-form-label text-md-right">{{ __('Schedule') }}</label>
                            <div class="weekDays-selector">
                                <div class="col-md-12">
                                    <input id="sunday" type="checkbox" class="weekday" name="appointment[sunday]"  value="sunday" checked autofocus>
                                    <label for="sunday">S</label>
                                    <input id="monday" type="checkbox" class="weekday" name="appointment[monday]" value="monday"  autofocus>
                                    <label for="monday">M</label>
                                    <input id="tuesday" type="checkbox" class="weekday" name="appointment[tuesday]" value="tuesday"  autofocus>
                                    <label for="tuesday">T</label>
                                    <input id="wednesday" type="checkbox" class="weekday" name="appointment[wednesday]" value="wednesday"  autofocus>
                                    <label for="wednesday">W</label>
                                    <input id="thursday" type="checkbox" class="weekday" name="appointment[thursday]" value="thursday"  autofocus>
                                    <label for="thursday">T</label>
                                    <input id="friday" type="checkbox" class="weekday" name="appointment[friday]" value="friday"  autofocus>
                                    <label for="friday">F</label>
                                    <input id="saturday" type="checkbox" class="weekday" name="appointment[saturday]" value="saturday"  autofocus>
                                    <label for="saturday">S</label>
                                    <!-- @if ($errors->has('location'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('location') }}</strong>
                                        </span>
                                    @endif -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="schedule" class="col-md-4 col-form-label text-md-right">{{ __('Schedule') }}</label>

                            <div class="col-md-6">
                                <input id="schedule" type="date" class="form-control{{ $errors->has('schedule') ? ' is-invalid' : '' }}" name="schedule" value="{{ old('schedule') }}" min="2020-09-25" max="2030-12-31"required autofocus>

                                @if ($errors->has('schedule'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('schedule') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="hours_from" class="col-md-4 col-form-label text-md-right">{{ __('Your hours from') }}</label>

                            <div class="col-md-6">
                                <input id="hours_from" type="time" class="form-control{{ $errors->has('hours_from') ? ' is-invalid' : '' }}" name="hours_from" value="{{ old('hours_from') }}" min="07:00" max="20:00" required autofocus>

                                @if ($errors->has('hours_from'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hours_from') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hours_to" class="col-md-4 col-form-label text-md-right">{{ __('Your hours to') }}</label>

                            <div class="col-md-6">
                                <input id="hours_to" type="time" class="form-control{{ $errors->has('hours_to') ? ' is-invalid' : '' }}" name="hours_to" value="{{ old('hours_to') }}" min="12:00" max="23:00" required autofocus>

                                @if ($errors->has('hours_to'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hours_to') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <a class="btn btn-primary" href="{{ route('register') }}">
                                        {{ __('Register as a user') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
