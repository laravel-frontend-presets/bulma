@extends('layouts.app')

@section('content')
<div class="container">
    <div class="hero is-large">
        <div class="columns">
            <div class="column is-3"></div>
            <div class="column is-6">
                <div class="message is-info">
                    <div class="message-header">Verify E-Mail</div>

                    <div class="message-body">
                        @if (session('resent'))
                            <div class="notification is-success" role="alert">
                                A new link has been sent.
                            </div>
                        @endif
                           If you have not yet recivied the email verification link,
                           you can resend it by <a href="{{ route('verification.resend') }}">clicking here</a>.
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
