@extends('laravolt::layouts.app')

@section('content')


    <x-titlebar title="Mission">
        <a href="{{ route('modules::mission.create') }}" class="ui button primary">
            <i class="icon plus"></i> Tambah
        </a>
    </x-titlebar>

    {!! $table !!}
@stop
