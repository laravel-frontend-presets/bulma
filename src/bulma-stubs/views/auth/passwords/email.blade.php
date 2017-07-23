@extends('layouts.app')

@section('content')


<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Reset Password
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

            @if (session('status'))
                <div class="notification">
                    {{ session('status') }}
                </div>
            @endif

            <form class="forgot-password-form" method="POST" action="{{ route('password.email') }}">

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

                <div class="control">
                    <button type="submit" class="button is-primary">Send Password Reset Link</button>
                </div>

            </form>


        </div>

    </div>

@endsection
