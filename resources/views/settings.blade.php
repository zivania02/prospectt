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
        <!-- Main content -->
        <div class="row">
            <!-- Basic information -->
            <div class="card">
                <div class="card-body">
                    <form action="/insertset" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                placeholder="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleFormControlInput1"
                                placeholder="password">
                        </div>
                        <h3 class="h6">Role</h3>
                        <select name="role" class="form-select" required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                        <button type="submit" class="btn btn-primary mt-4 mb-4">Submit</button>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>

                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp

                                @foreach ($data as $row)
                                <tr>
                                    <th scope="row">{{$no++}}</th>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->role}}</td>
                                    <td><a href="/tampilset/{{$row->id}}" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{$row->id}}">Edit</a>
                                        <button type="button" class="btn btn-light">Hapus</button>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('updatedata', $row->id) }}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            id="exampleFormControlInput1" placeholder="name"
                                                            value="{{$row->name}}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Email</label>
                                                        <input type="email" name="email" class="form-control"
                                                            id="exampleFormControlInput1" placeholder="email"
                                                            value="{{$row->email}}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Password</label>
                                                        <input type="password" name="password" class="form-control"
                                                            id="exampleFormControlInput1" placeholder="password"
                                                            value="{{$row->password}}">
                                                    </div>
                                                    <h3 class="h6">Role</h3>
                                                    <select class="form-select" name="role">
                                                        <option selected>{{$row->role}}</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="user">User</option>
                                                    </select>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
