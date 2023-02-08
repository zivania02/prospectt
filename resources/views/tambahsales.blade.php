@extends('layout.main')
@section('content')
   <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                     <h3 class=" mb-5 welcome-text">Create<span class="text-black fw-bold">Sales</span></h3>
                   <form action="/insertdata" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="row">
                    <div class="mb-3">
                      <label for="exampleInputEmail1">No Faktur</label>
                      <input type="text" name="no_faktur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1">Tanggal</label>
                      <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    </div>
                     <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>


          </div>
        </div>
@endsection