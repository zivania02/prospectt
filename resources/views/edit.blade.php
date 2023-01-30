@extends('layout.main')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row flex-lg-nowrap">
        <div class="col">
            <div class="row">
                <div class="col mb-3">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="e-profile">
                                <div style="justify-content: center" class="row">
                                    @if(Auth::user()->image)
                                    <img class="profilee mt-3" src="{{asset('image/'.Auth::user()->image)}}" alt="">
                                    @else
                                    <img class="img-account-profile rounded-circle mb-2"
                                        src="{{asset('template/images/faces/pp.jpg')}}" alt="">
                                    @endif
                                </div>
                                <div class="text-center ">
                                    <h4 class="mt-3 text-nowrap">{{Auth::user()->name}}</h4>
                                    <p class="mb-0">{{Auth::user()->email}}</p>
                                    <div class="text-muted"><small>{{Auth::user()->role}}</small>
                                    </div>
                                </div>

                                <div class="tab-pane active">
                                    <form action="{{route('update', auth::user()->id)}}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')

                                        <div class="image mt-5 mb-4"> <span>Change Photo</span>
                                     
                                            <input class="btn btn-primary" type="file" class="form-control" name="image"
                                                id="inputImage">
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Full Name</label>
                                                            <input class="form-control" type="text" name="name"
                                                                id="name" placeholder="{{auth::user()->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input class="form-control" name="email"
                                                                id="inputEmailAddress" type="email"
                                                                placeholder={{auth::user()->email}} required>
                                                        </div>
                                                    </div>
                                                </div>
                                                        <div class="form-group">
                                                    <label for="exampleSelectGender">Role</label>
                                                    <select class="form-control" name="role" id="role">
                                                        <option>{{auth::user()->role}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col d-flex justify-content-end">
                                                <button class="btn btn-primary" type="submit">Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
    .profilee {
        border-radius: 50%;
        width: 130px;
        height: 100px;

    }

</style>
@endsection
