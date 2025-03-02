@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu correo eléctronico') }}</div>

                <div class="card-body">
                @if (session('resent'))
    <div class="alert alert-success" role="alert">
        {{ __('Un nuevo enlace de verificación ha sido enviado a tu dirección de correo electrónico.') }}
    </div>
@endif

{{ __('Antes de proceder, por favor revisa tu correo electrónico para el enlace de verificación.') }}
{{ __('Si no recibiste el correo electrónico') }},
<form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
    @csrf
    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('haz clic aquí para solicitar otro') }}</button>.
</form>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
