@extends(Config::get('ethereal-auth::site'))

@section('title', lang('ethereal-auth::forms.signup_title'))

@section('content')

    <form method="POST" action="{{route('signupPost')}}">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="name">{{lang('ethereal-auth::forms.name')}}</label>
            <input id="name" class="form-control" name="name" type="text" placeholder="{{lang('ethereal-auth::forms.name')}}" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">{{lang('ethereal-auth::forms.email')}}</label>
            <input id="email" class="form-control" name="email" type="email" placeholder="{{lang('ethereal-auth::forms.email')}}" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">{{lang('ethereal-auth::forms.password')}}</label>
            <input id="password" class="form-control" name="password" type="password" placeholder="{{lang('ethereal-auth::forms.password')}}">
        </div>
        <div class="form-group">
            <label for="password_confirm">{{lang('ethereal-auth::forms.confirm_password')}}</label>
            <input id="password_confirm" class="form-control" name="password_confirm" type="password" placeholder="{{lang('ethereal-auth::forms.confirm_password')}}">
        </div>
        <button type="submit" class="btn btn-default">{{lang('ethereal-auth::forms.signup')}}</button>
    </form>
@endsection
