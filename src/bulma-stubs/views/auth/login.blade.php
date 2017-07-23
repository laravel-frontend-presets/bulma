@extends('layouts.app')

@section('content')


<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Login
            </h1>
        </div>
    </div>
</section>

<div class="container">

    <div class="columns">

        <div class="column is-6 is-offset-3">

            <p>
                <br>
                <br>
            </p>

            <form class="login-form" method="POST" action="{{ route('login') }}">

                {{ csrf_field() }}

                <div class="field">
                    <label class="label">E-Mail Address</label>

                    <div class="control has-icons-left has-icons-right">
                        <input class="input" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    </div>

                    @if ($errors->has('email'))
                        <p class="help is-danger">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>

                <div class="field">
                    <label class="label">Password</label>

                    <div class="control has-icons-left has-icons-right">
                        <input class="input" id="password" type="password" name="password" aria-describedby="passwordHelpText" required>
                    </div>

                    @if ($errors->has('password'))
                        <p class="help is-danger">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>


                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-primary">Login</button>
                    </div>

                    <a href="{{ route('password.request') }}">
                        &nbsp;
                        Forgot Your Password?
                    </a>
                </div>

            </form>

        </div>

    </div>

</div>
@endsection
