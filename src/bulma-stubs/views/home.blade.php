@extends('layouts.app')

@section('content')

<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Home
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

            <nav class="panel">

                <p class="panel-heading">
                    Dashboard
                </p>

                <div class="notification">
                  You are logged in!
                </div>

            </nav>

        </div>

    </div>

</div>

@endsection
