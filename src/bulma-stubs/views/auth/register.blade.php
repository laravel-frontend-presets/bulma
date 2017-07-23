@extends('layouts.app')

@section('content')

<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Register
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

            <form class="register-form" method="POST" action="{{ route('register') }}">

                {{ csrf_field() }}

                <div class="field">
                    <label class="label">Name</label>

                    <div class="control has-icons-left has-icons-right">
                        <input class="input" id="name" type="name" name="name" value="{{ old('name') }}" required autofocus>
                    </div>

                    @if ($errors->has('name'))
                        <p class="help is-danger">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>


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
                        <input class="input" id="password" type="password" name="password" required>
                    </div>

                    @if ($errors->has('password'))
                        <p class="help is-danger">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>


                <div class="field">
                    <label class="label">Confirm Password</label>

                    <div class="control has-icons-left has-icons-right">
                        <input class="input" id="password-confirm" type="password" name="password_confirmation" required>
                    </div>
                </div>

                <div class="control">
                    <button type="submit" class="button is-primary">Register</button>
                </div>

            </form>

        </div>

    </div>

@endsection
