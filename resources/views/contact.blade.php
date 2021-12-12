{{-- <x-layout>
    <x-slot name="title"> Contact </x-slot>
    <x-slot name="content">
        <div class="container mt-5">
            <h1 class="text-warning mb-5 border-bottom">CONTACT ME</h1>
            <div class="row text-white mb-5">
                <p class="mx-auto mb-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio reiciendis vero voluptate dolor cupiditate exercitationem reprehenderit corrupti incidunt? Asperiores reiciendis quia porro accusantium ipsa possimus quibusdam praesentium, temporibus debitis beatae!
                </p>
                <div class="col-sm-9 mb-5">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="inputName">Your Name</label>
                                <input type="text" class="form-control mt-2" name="name" id="inputName">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail">Your Email *</label>
                                <input type="email" class="form-control mt-2" name="email" id="inputEmail" required>
                            </div>
                            <div class="col-md-12">
                                <label for="inputSubject">Your Subject</label>
                                <input type="text" class="form-control mt-2" name="subject" id="inputSubject">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inputTextArea">Your Message *</label>
                                <input type="text" class="form-control mt-2" name="message" id="inputTextArea" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Send</button>
                    </form>
                </div>
                <div class="col-sm-3 text-center">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fas fa-map-marker-alt fa-2x i-color"></i>
                            <p>Lahore, Punjab, Pakistan</p>
                        </li>
                        <li>
                            <i class="fas fa-phone fa-2x i-color"></i>
                            <p>+92 323 1445957</p>
                        </li>
                        <li>
                            <i class="fas fa-envelope fa-2x i-color"></i>
                            <p>kamrannaseer765@gmail.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" target="_blank"> <i class="fab fa-twitter i-color"></i> </a>
            <a href="#" target="_blank"> <i class="fab fa-facebook-f i-color mx-3"></i> </a>
            <a href="#" target="_blank"> <i class="fab fa-instagram i-color"></i> </a>
            <a href="#" target="_blank"> <i class="fab fa-dribbble i-color mx-3"></i> </a>
        </div>
    </x-slot>
</x-layout>

 --}}


@extends('components.layout')
@section('title', "CONTACT")

@section('content')
<div class="container mt-5">
    <h1 class="text-warning mb-5 border-bottom">CONTACT ME</h1>
    <div class="row text-white mb-5">
        <p class="mx-auto mb-5">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio reiciendis vero voluptate dolor cupiditate exercitationem reprehenderit corrupti incidunt? Asperiores reiciendis quia porro accusantium ipsa possimus quibusdam praesentium, temporibus debitis beatae!
        </p>
        <div class="col-sm-9 mb-5">
            <form action="">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="inputName">Your Name</label>
                        <input type="text" class="form-control mt-2" name="name" id="inputName">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail">Your Email *</label>
                        <input type="email" class="form-control mt-2" name="email" id="inputEmail" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputSubject">Your Subject</label>
                        <input type="text" class="form-control mt-2" name="subject" id="inputSubject">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="inputTextArea">Your Message *</label>
                        <input type="text" class="form-control mt-2" name="message" id="inputTextArea" required>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Send</button>
            </form>
        </div>
        <div class="col-sm-3 text-center">
            <ul class="list-unstyled">
                <li>
                    <i class="fas fa-map-marker-alt fa-2x i-color"></i>
                    <p>Lahore, Punjab, Pakistan</p>
                </li>
                <li>
                    <i class="fas fa-phone fa-2x i-color"></i>
                    <p>+92 323 1445957</p>
                </li>
                <li>
                    <i class="fas fa-envelope fa-2x i-color"></i>
                    <p>kamrannaseer765@gmail.com</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="text-center">
    <a href="#" target="_blank"> <i class="fab fa-twitter i-color"></i> </a>
    <a href="#" target="_blank"> <i class="fab fa-facebook-f i-color mx-3"></i> </a>
    <a href="#" target="_blank"> <i class="fab fa-instagram i-color"></i> </a>
    <a href="#" target="_blank"> <i class="fab fa-dribbble i-color mx-3"></i> </a>
</div>
@endsection