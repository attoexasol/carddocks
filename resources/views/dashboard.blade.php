{{--  <x-app-layout>  --}}
    {{--  <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>  --}}

    {{--  <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                <div class="mb-2">
                    <a href="{{ route('test') }}" class="btn btn-info">Click here to view a custom page!</a>
                </div>
            </div>
        </div>
    </div>  --}}
{{--  </x-app-layout>  --}}
@extends('layouts.admin')
@section('page_content')
<div class="mb-3">
    <h3 class="text-center">Hello Buddy</h3>
</div>
<div class="mb-3">
    <div class="text-center">
        <a href="{{ route('form') }}" class="btn btn-info">Goto Form</a>
    </div>
</div>
@endsection
