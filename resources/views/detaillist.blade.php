@extends('layout.main')
@section('content')
   <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                     <h3 class=" mb-5 welcome-text">Edit<span class="text-black fw-bold">  Prospect</span></h3>
                   <form action="/insertpost/{{$data->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No Faktur</label>
                          <div class="col-sm-9">
                            <input type="text" name="no_faktur" class="form-control"value="{{$data->no_faktur}}" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control"value="{{$data->name}}" />
                          </div>
                        </div>
                      </div>
                    </div>
                 
              
                    <div class="row">
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Alamat</label>
                          <div class="col-sm-9">
                            <input type="date" name="alamat" class="form-control" value="{{$data->alamat}}"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No Telpon</label>
                          <div class="col-sm-9">
                            <input type="number" name="no_telpon" class="form-control"value="{{$data->no_telpon}}" />
                          </div>
                        </div>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Quantity</label>
                          <div class="col-sm-9">
                            <input type="text" name="quantity" class="form-control "value="{{$data->quantity}}" />
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Unit Price</label>
                          <div class="col-sm-9">
                            <input type="text" name="unit_price" class="form-control"value="{{$data->unit_price}}"/>
                          </div>
                        </div>
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