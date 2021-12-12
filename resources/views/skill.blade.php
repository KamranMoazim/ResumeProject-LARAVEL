{{-- <x-layout>
    <x-slot name="title"> Skills </x-slot>
    <x-slot name="content">
        <div class="container mt-5">
            <h1 class="text-warning mb-5 border-bottom">SKILLS</h1>
            <div class="row text-white">
                <div class="col-sm-5">
                    <h3 class="mt-5">HTML/CSS</h3>
                    <div class="progress">
                        <div style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-danger" role="progressbar">
                            100%
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 offset-sm-2">
                    <h3 class="mt-5">Javascript</h3>
                    <div class="progress">
                        <div style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar">
                            95%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout> --}}

@extends('components.layout')
@section('title', "SKILLS")

@section('content')

<div class="container mt-5">
    <h1 class="text-warning mb-5 border-bottom">SKILLS</h1>
    <div class="row text-white">
        <div class="col-sm-5">
            <h3 class="mt-5">HTML/CSS</h3>
            <div class="progress">
                <div style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-danger" role="progressbar">
                    100%
                </div>
            </div>
        </div>
        <div class="col-sm-5 offset-sm-2">
            <h3 class="mt-5">Javascript</h3>
            <div class="progress">
                <div style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar">
                    95%
                </div>
            </div>
        </div>
    </div>
</div>

@endsection