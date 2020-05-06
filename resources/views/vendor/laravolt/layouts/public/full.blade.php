@extends('laravolt::layouts.base', ['bodyClass' => 'login'])
@section('body')

    <div class="layout--full" data-position="center">
        <div class="tablet or lower hidden"></div>
        <div class="content">
            <div class="ui segment center aligned p-2">
                @include('laravolt::components.brand-image', ['class' => 'tiny centered'])
                <h2 class="ui header">
                    {{ config('app.name') }}
                    <div class="sub header">{{ config('app.description') }}</div>
                </h2>

                <div class="ui divider hidden section"></div>

                @yield('content')
            </div>
        </div>
        <div class="tablet or lower hidden"></div>
    </div>
@endsection

<style>
    body.login {
        background-color: #333;
    }
</style>
