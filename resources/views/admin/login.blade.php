@extends(Config::get('ethereal-auth::admin'))

@section('title', lang('ethereal-auth::forms.login_title'))

@section('content')

    <form method="POST" action="{{route('loginPost')}}">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="email">{{lang('ethereal-auth::forms.email')}}</label>
            <input id="email" class="form-control" name="email" type="email" placeholder="{{lang('ethereal-auth::forms.email')}}" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">{{lang('ethereal-auth::forms.password')}}</label>
            <input id="password" class="form-control" name="password" type="password" placeholder="{{lang('ethereal-auth::forms.password')}}">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> {{lang('ethereal-auth::forms.remember_me')}}
            </label>
        </div>
        <button type="submit" class="btn btn-default">{{lang('ethereal-auth::forms.login')}}</button>
    </form>

@endsection