@extends('layout.main')
@section('content')
<div class="row">
    <div class="content-wrapper">
        <a href="/tambahsales" class="btn btn-transparant  mb-4"><h4>Add Sales ( + )</h4></a>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-2 mt-3">Sales Order</h4>
                    <div class="table-responsive">
                        <div x class="div">
                            <a style="width:70px;" href="/expdf" class="btn btn-primary text-white me-0 mb-4"><i
                                    class="icon-download"></i></a>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">No Faktur</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Tanggal</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $row->no_faktur }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->tanggal }}</td>
                    <td>{{ $row->total }}</td>
                    <td>
                        <a href="{{ route('tampilsales',$row->id) }}"><button type="button" class="btn btn-icon rounded-circle btn-outline-warning">
                          <svg xmlns="http://www.w3.org/2000/svg" role="img" width="1em" height="1,5em" viewBox="0 0 24 24">
                              <path d="M5 20h14a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2zm-1-5L14 5l3 3L7 18H4v-3zM15 4l2-2l3 3l-2.001 2.001L15 4z" fill="currentColor" fill-rule="evenodd" />
                          </svg>
                      </button></a>

                        <a href="{{ route('deletesales',$row->id) }}"> <button type="button" class="btn btn-icon rounded-circle btn-outline-danger">
                          <svg xmlns="http://www.w3.org/2000/svg" role="img" width="1,5em" height="1em" viewBox="0 0 24 24">
                              <g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M3 6h18" />
                                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                              </g>
                          </svg>
                      </button></a>
                     <a href="{{ route('listsales',$row->id) }}"> <button type="button" class="btn btn-icon rounded-circle btn-outline-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1,5em" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                          <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                        </button></a>


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
@endsection
