@extends('layouts.app')

@section('content')
    <x-banner url="{{ asset('images/banner001.jpg') }}">
        <h1>About Us</h1>
        <p>Meet the team !</p>
    </x-banner>

    <x-sections.centered>
        <div class="container">
            <div class="row">
                <div class="col medium-6">
                    <x-card>
                        <h5>Hello</h5>
                        <p>Lorem ipsum</p>
                    </x-card>
                </div>
            </div>
        </div>
    </x-sections.centered>
@endsection
