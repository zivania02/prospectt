@extends('layout.main')
@section('content')
<div class="container-fluid">

    <div class="container">
        <!-- Title -->
        <nav class="nav nav-borders">
            <a class="nav-link active" href="/settings" target="__blank">Settings</a>
               <a class="nav-link" href="/roles" target="__blank">Roles</a>
            <a class="nav-link" href="/menu" target="__blank">Menu</a>
        </nav>
        <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
            <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i
                        class="bi bi-arrow-left-square me-2"></i></a> Create new customer</h2>
            <div class="hstack gap-3">
                <button class="btn btn-light btn-sm btn-icon-text m-2"><i class="bi bi-x"></i> <span
                        class="text">Cancel</span></button>
                <button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span
                        class="text">Save</span></button>
            </div>
        </div>

        <!-- Main content -->
        <div class="row">
            <!-- Left side -->
            <div class="col-lg-8">
                <!-- Basic information -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6 mb-4">Basic information</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">First name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Last name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Address -->
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th scope="col">NO</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td><button type="button" class="btn btn-primary m-2"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
                                        <button type="button" class="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0014FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></button></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>


                </div>
            </div>
            <!-- Right side -->
            <div class="col-lg-4">
                <!-- Status -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6">Role</h3>
                        <select class="form-select">
                            <option value="draft" selected="">Choose</option>
                            <option value="active">Admin</option>
                            <option value="active">Use</option>
                            <option value="active">SPV</option>
                        </select>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>
<style>
    body {
        background: #eee;
    }

    .card {
        box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: 1rem;
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.5rem 1.5rem;
    }

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
