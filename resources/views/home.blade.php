{{-- <x-layout>
    <x-slot name="title"> HOME </x-slot>
    <x-slot name="content">
        <div class="mt-5">
            <div class="text-center">
                <img src="{{asset('images/pic1.jpeg')}}" class="img-thumbnail" alt="" height="150px" width="250px" />
            </div>
            <div class="mt-5 text-white mx-5 text-justify">
                <h1 class="fw-bold st-font"> Hello, </h1>
                <div class="px-4">
                    <p style="text-indent:100px;">
                        I am
                        <b class="text-warning">
                            Kamran Moazim
                        </b>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, enim totam tenetur nulla beatae voluptate, laboriosam ipsam esse corporis accusamus alias error ea, dignissimos suscipit deleniti praesentium tempora autem iusto.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, enim totam tenetur nulla beatae voluptate, laboriosam ipsam esse corporis accusamus alias error ea, dignissimos suscipit deleniti praesentium tempora autem iusto.</p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route('contact')}}" class="btn btn-outline-warning"> Hire Me </a>
                <a href="{{route('contact')}}" class="btn btn-outline-info"> Contact </a>
            </div>
        </div>
    </x-slot>
</x-layout> --}}

@extends('components.layout')
@section('title', "HOME")

@section('content')

<div class="mt-5">
    <div class="text-center">
        <img src="{{asset('images/pic1.jpeg')}}" class="img-thumbnail" alt="" height="150px" width="250px" />
    </div>
    <div class="mt-5 text-white mx-5 text-justify">
        <h1 class="fw-bold st-font"> Hello, </h1>
        <div class="px-4">
            <p style="text-indent:100px;">
                I am
                <b class="text-warning">
                    Kamran Moazim
                </b>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, enim totam tenetur nulla beatae voluptate, laboriosam ipsam esse corporis accusamus alias error ea, dignissimos suscipit deleniti praesentium tempora autem iusto.
            </p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, enim totam tenetur nulla beatae voluptate, laboriosam ipsam esse corporis accusamus alias error ea, dignissimos suscipit deleniti praesentium tempora autem iusto.</p>
        </div>
    </div>
    <div class="text-center">
        <a href="{{route('contact')}}" class="btn btn-outline-warning"> Hire Me </a>
        <a href="{{route('contact')}}" class="btn btn-outline-info"> Contact </a>
    </div>
</div>

@endsection