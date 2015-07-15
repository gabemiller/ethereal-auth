@extends(Config::get('ethereal-auth::site'))

@section('title', trans('ethereal-auth::forms.signup_title'))

@section('content')

    <form method="POST" action="{{route('signupPost')}}">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="name">{{trans('ethereal-auth::forms.name')}}</label>
            <input id="name" class="form-control" name="name" type="text" placeholder="{{trans('ethereal-auth::forms.name')}}" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">{{trans('ethereal-auth::forms.email')}}</label>
            <input id="email" class="form-control" name="email" type="email" placeholder="{{trans('ethereal-auth::forms.email')}}" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">{{trans('ethereal-auth::forms.password')}}</label>
            <input id="password" class="form-control" name="password" type="password" placeholder="{{trans('ethereal-auth::forms.password')}}">
        </div>
        <div class="form-group">
            <label for="password_confirm">{{trans('ethereal-auth::forms.confirm_password')}}</label>
            <input id="password_confirm" class="form-control" name="password_confirm" type="password" placeholder="{{trans('ethereal-auth::forms.confirm_password')}}">
        </div>
        <button type="submit" class="btn btn-default">{{trans('ethereal-auth::forms.signup')}}</button>
    </form>
@endsection
