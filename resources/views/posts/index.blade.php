{{-- <x-app-layout> --}}
@extends('layouts.app2')

@section('title', 'Coders Free')

@push('meta')
    <meta name="description" content="Cursos de programación gratis">
@endpush


@section('content')
    <x-slot name="title">
        Posts
    </x-slot>

    @include('partials.test')
    {{-- @includeIf('partials.test', ['color' => 'red']); --}}
    {{-- @includeWhen(true, 'partials.test', ['color' => 'red']); --}}

    @php
        $type = 'danger';
    @endphp

    <div class = "container mx-auto py-12">
        <x-alert :type="$type" class="mt-12">
            <x-slot name="title">
                Título de Prueba
            </x-slot>
            <p>
                Hola Mundo
            </p>
        </x-alert>
    </div>
@endsection
{{-- </x-app-layout> --}}
