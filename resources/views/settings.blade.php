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
                        <select class="form-select" name="role">
                            <option value="role" selected="">Choose</option>
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
                                    <td><button type="button" class="btn btn-primary m-2"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="#ffff" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg></button>
                                        <button type="button" class="btn btn-light"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="#0014FF" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                </path>
                                            </svg></button>
                                    </td>
                                </tr>

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
