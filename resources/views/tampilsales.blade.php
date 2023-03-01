@extends('layout.main')
@section('content')
   <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                     <h3 class=" mb-5 welcome-text">Edit<span class="text-black fw-bold">  Prospect</span></h3>
                   <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <div class="mb-3">
                            <label for="exampleInputEmail1">No Faktur</label>
                            <input type="text" name="no_nota" class="form-control" id="no_nota" aria-describedby="emailHelp" value="{{ $data->no_faktur }}">
                          </div>
    
                            <div class="mb-3">
                              <label for="exampleInputEmail1">Nama</label>
                              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1">Tanggal</label>
                              <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->tanggal }}">
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