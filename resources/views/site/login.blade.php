@extends(config('ethereal-auth.site'))

@section('title', trans('ethereal-auth::forms.login_title'))

@section('content')

    @include('_partials.message')
    <form method="POST" action="{{route('login.post')}}">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="email">{{trans('ethereal-auth::forms.email')}}</label>
            <input id="email" class="form-control" name="email" type="email" placeholder="{{trans('ethereal-auth::forms.email')}}" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="password">{{trans('ethereal-auth::forms.password')}}</label>
            <input id="password" class="form-control" name="password" type="password" placeholder="{{trans('ethereal-auth::forms.password')}}">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> {{trans('ethereal-auth::forms.remember_me')}}
            </label>
        </div>
        <button type="submit" class="btn btn-default">{{trans('ethereal-auth::forms.login')}}</button>
    </form>
@endsection