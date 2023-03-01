@extends('layout.main')
@section('content')
   <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                     <h3 class=" mb-5 welcome-text">Edit<span class="text-black fw-bold">list</span></h3>
                   <form action="/updatelist{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf  
                    <div class="row">
                        <div class="mb-3">
                            <label for="exampleInputEmail1">No Faktur</label>
                            <input type="number" name="no_nota" class="form-control" id="no_nota" aria-describedby="emailHelp" value="{{ $data->no_faktur }}">
                          </div>
    
                            <div class="mb-3">
                              <label for="exampleInputEmail1">Nama</label>
                              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                            </div>z
                            <div class="mb-3">
                              <label for="exampleInputEmail1">Alamat</label>
                              <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->alamat }}">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1">No Telpon</label>
                              <input type="number" name="no_telpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->no_telpon }}">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1">Quantity</label>
                              <input type="text" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->quantity }}">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1">Unit Price </label>
                              <input type="number" name="unit_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->unit_price }}">
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