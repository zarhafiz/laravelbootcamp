@extends('layout.public')

@section('content')
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

    <form method="POST" action="{{ route('register') }}">
        @csrf


        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input class="form-control form-control-user" id="exampleFirstName" type="text" name="name" value="{{ old('name') }}" 
                required autofocus autocomplete="name" placeholder="Name">
            </div>

            <div class="col-sm-6">
                <input class="form-control form-control-user" id="exampleEmail" type="email" name="email" value="{{ old('email') }}" required
                    placeholder="Email" >
            </div>

        </div>

        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input class="form-control form-control-user" type="password" name="password" required autocomplete="new-password" placeholder="Password">
            </div>

            <div class="col-sm-6">
                <input class="form-control form-control-user" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            </div>

        </div>




        
        <div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                {{ __('Register') }}
            </button>
        </div>
        <hr>
        <div class="text-center">
        <a class="small" href="{{ route('login') }}">
            {{ __('Already have an account? Login!') }}
        </a>
    </div>

    </form>
@endsection
