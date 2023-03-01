@extends('layout.main')
@section('content')

<div class="container">
    <!-- Title -->
    <nav class="nav nav-borders mb-3">
        <a class="nav-link active" href="/settings" target="__blank">Configuration</a>
        <a class="nav-link" href="/roles" target="__blank">Roles</a>
        <a class="nav-link" href="/menu" target="__blank">Menu</a>
    </nav>
    <div class="card mt-3">
        <div class="card-body">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Role
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Role Here!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form action="/insertrole" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                            <select name="role" class="form-select" required>
                            <option>Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                            <option value="spv"></option>
                        </select>
                    </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
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
                        <td>{{$row->role}}</td>
                        <td><button type="button" class="btn btn-primary mx-2">Delete</button>


                    </tr>
                    @endforeach
                </tbody>
            </table>

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
