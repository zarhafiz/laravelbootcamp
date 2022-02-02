@extends('layout.public')

@section('content')
    <div>
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

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

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        

        <div class="form-group">
            <input type="email" class="form-control form-control-user"
                placeholder="Enter Email Address..." name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
@endsection
