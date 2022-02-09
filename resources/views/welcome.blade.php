@extends('layouts.app')

@section('content')
    <x-banner url="{{ asset('images/banner001.jpg') }}">
        <h1>Kazoku</h1>
        <p>Lorem ipsum dolor</p>
    </x-banner>

    <section class="centered">
        <div class="container">
            <h1>Hello World</h1>
            <p>Lorem ipsum dolor sit amet</p>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col medium-4">
                <x-card>
                    <h3>Component based</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </x-card>
            </div>
            <div class="col medium-4">
                <x-card>
                    <h3>Component based</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </x-card>
            </div>
            <div class="col medium-4">
                <x-card>
                    <h3>Component based</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </x-card>
            </div>
        </div>
    </div>
@endsection
