@extends('layout.main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
    integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <h2 class="h3 mb-4 page-title">Settings</h2>
            <div class="my-4">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                            aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Notifications</a>
                    </li>
                </ul>
                <h5 class="mb-0 mt-5">Security Settings</h5>
                <p>These settings are helps you keep your account secure.</p>
                <div class="list-group mb-5 shadow">
                    <div class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col">
                                <strong class="mb-2">Enable Activity Logs</strong>
                                <p class="text-muted mb-0">Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                            <div class="col-auto">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="activityLog" checked="">
                                    <span class="custom-control-label"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col">
                                <strong class="mb-2">2FA Authentication</strong>
                                <span class="badge badge-pill badge-success">Enabled</span>
                                <p class="text-muted mb-0">Maecenas sed diam eget risus varius blandit.</p>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary btn-sm">Disable</button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col">
                                <strong class="mb-2">Activate Pin Code</strong>
                                <p class="text-muted mb-0">Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                            <div class="col-auto">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="pinCode">
                                    <span class="custom-control-label"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="mb-0">Keterangan Waktu</h5>
                <p>ketentuan absensi</p>
                <table class="table border bg-white">
                    <thead>
                        <tr>
                            <th>Keterangan</th>
                            <th>Waktu </th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col"><i class="fe fe-globe fe-12 text-muted mr-2"></i>Jam Masuk</th>
                            <td>08:00 p.m</td>

                            <td><a hreff="#" class="text-muted"><i class="fe fe-x"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="col"><i class="fe fe-smartphone fe-12 text-muted mr-2"></i>Jam Keluar</th>
                            <td>17:00 a.m</td>

                        </tr>
                        <tr>
                            <th scope="col"><i class="fe fe-globe fe-12 text-muted mr-2"></i>Ketentuan Terlambat</th>
                            <td>12:00 p.m</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<style>
    body {
        margin-top: 20px;
        color: #8e9194;
        background-color: #f4f6f9;
    }

    .text-muted {
        color: #aeb0b4 !important;
    }

    .text-muted {
        font-weight: 300;
    }

</style>
@endsection
