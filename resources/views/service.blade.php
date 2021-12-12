{{-- <x-layout>
    <x-slot name="title"> Service </x-slot>
    <x-slot name="content">
        <div class="container mt-5">
            <h1 class="text-warning mb-5 border-bottom">SERVICES</h1>
            <div class="row text-white text-center mb-5">
                <div class="col-sm-4">
                    <i class="fas fa-search-dollar fa-2x mb-3 i-color"></i>
                    <h3>SEO</h3>
                    <p class="ss-color">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-palette fa-2x mb-3 i-color"></i>
                    <h3>Web Development</h3>
                    <p class="ss-color">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                <div class="col-sm-4">
                    <i class="fas fa-database fa-2x mb-3 i-color"></i>
                    <h3>Hosting</h3>
                    <p class="ss-color">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                
            </div>
        </div>
    </x-slot>
</x-layout> --}}

@extends('components.layout')
@section('title', "SERVICES")

@section('content')

<div class="container mt-5">
    <h1 class="text-warning mb-5 border-bottom">SERVICES</h1>
    <div class="row text-white text-center mb-5">
        <div class="col-sm-4">
            <i class="fas fa-search-dollar fa-2x mb-3 i-color"></i>
            <h3>SEO</h3>
            <p class="ss-color">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
        <div class="col-sm-4">
            <i class="fas fa-palette fa-2x mb-3 i-color"></i>
            <h3>Web Development</h3>
            <p class="ss-color">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
        <div class="col-sm-4">
            <i class="fas fa-database fa-2x mb-3 i-color"></i>
            <h3>Hosting</h3>
            <p class="ss-color">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
        
    </div>
</div>

@endsection