@extends('layout.public')

@section('content')



@section('content')
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div>
            <div>{{ __('Whoops! Something went wrong.') }}</div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <input type="email" class="form-control form-control-user"
                placeholder="Enter Email Address..." name="email" value="{{ old('email') }}" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-user"
             placeholder="Password" name="password"  required autocomplete="current-password">
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" class="custom-control-input" id="customCheck">
                <label class="custom-control-label" for="customCheck">Remember
                    Me</label>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
               {{ __('Login') }}
            </button>
        </div>

<hr>

        @if (Route::has('password.request'))
        

            <div class="text-center">
                <a class="small" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
            </div>
        @endif

        
    </form>
    <div class="text-center">
        <a class="small" href="{{ route('register') }}">
            {{ __('Create an account?') }}
        </a>
    </div>
@endsection
