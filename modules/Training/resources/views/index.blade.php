@extends('laravolt::layouts.app')

@section('content')


    <x-titlebar title="Training">
        <x-item>
            <x-link label="Tambah" icon="plus" url="{{ route('modules::training.create') }}"></x-link>
        </x-item>
    </x-titlebar>

    {!! $table !!}
@stop
