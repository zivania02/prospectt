@extends('layout.main')
@section('content')
<div class="container-fluid">

    <div class="container">
        <!-- Title -->
         <nav class="nav nav-borders mb-3">
           <a class="nav-link active" href="/settings" target="__blank">Configuration</a>
            <a class="nav-link" href="/roles" target="__blank">Roles</a>
            <a class="nav-link" href="/menu" target="__blank">Menu</a>
        </nav>
        <h4 class="mt-4">Menu</h4>
        <p>Please enable system alert you will get.</p>
        <div class="list-group mb-5 shadow">
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col">
                        <strong class="mb-0">Notify me about new features and updates</strong>
                        <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-auto">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="alert3" checked="" />
                            <span class="custom-control-label"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col">
                        <strong class="mb-0">Notify me by email for latest news</strong>
                        <p class="text-muted mb-0">Nulla et tincidunt sapien. Sed eleifend volutpat elementum.</p>
                    </div>
                    <div class="col-auto">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="alert4" checked="" />
                            <span class="custom-control-label"></span>
                        </div>
                    </div>
                </div>
            </div>
             <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col">
                        <strong class="mb-0">Notify me by email for latest news</strong>
                        <p class="text-muted mb-0">Nulla et tincidunt sapien. Sed eleifend volutpat elementum.</p>
                    </div>
                    <div class="col-auto">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="alert4" checked="" />
                            <span class="custom-control-label"></span>
                        </div>
                    </div>
                </div>
            </div>
             <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col">
                        <strong class="mb-0">Notify me by email for latest news</strong>
                        <p class="text-muted mb-0">Nulla et tincidunt sapien. Sed eleifend volutpat elementum.</p>
                    </div>
                    <div class="col-auto">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="alert4" checked="" />
                            <span class="custom-control-label"></span>
                        </div>
                    </div>
                </div>
            </div>
             <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col">
                        <strong class="mb-0">Notify me by email for latest news</strong>
                        <p class="text-muted mb-0">Nulla et tincidunt sapien. Sed eleifend volutpat elementum.</p>
                    </div>
                    <div class="col-auto">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="alert4" checked="" />
                            <span class="custom-control-label"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col">
                        <strong class="mb-0">Notify me about tips on using account</strong>
                        <p class="text-muted mb-0">Donec in quam sed urna bibendum tincidunt quis mollis mauris.</p>
                    </div>
                    <div class="col-auto">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="alert5" />
                            <span class="custom-control-label"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .nav-borders .nav-link.active {
        color: #0061f2;
        border-bottom-color: #0061f2;
    }

    .nav-borders .nav-link {
        color: #69707a;
        border-bottom-width: 0.125rem;
        border-bottom-style: solid;
        border-bottom-color: transparent;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 0;
        padding-right: 0;
        margin-left: 1rem;
        margin-right: 1rem;
    }

</style>
@endsection
