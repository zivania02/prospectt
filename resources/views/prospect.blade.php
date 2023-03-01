@extends('layout.main')
@section('content')

<div class="row">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="/tambahprospect" type="button" class="btn btn-primary mb-4 mt-2 mr-2">+ Prospect</a>
                    <form class="forms-sample ">
                        <div class="form-group col-3 mx-3">
                            <label for="exampleInputUsername1">Tanggal awal</label>
                            <input type="date" name="tglawal" id="tglawal" class="form-control"
                                placeholder="tanggal awal" />
                        </div>
                        <div class="form-group col-3">
                            <label for="exampleInputEmail1">Tanggal akhir</label>
                            <input type="date" name="tglakhir" id="tglakhir" class="form-control"
                                placeholder="tanggal akhir" />
                        </div>
                        <div class="btn-group mt-4" role="group" aria-label="Button group with nested dropdown">
                            <a href="" onclick="this.href='/filter-data/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value " class="btn">
                                <i class="mdi mdi-filter-outline"></i>
                            </a>
                            <a href="/expdf" class="btn text-black me-0 mb-4"><i class="mdi mdi-cloud-download"></i></a>
                        </div>
                    </form>
                    {{-- <div  style="margin-left: 14px;" class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    urutkan
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item" href="#">Week</a></li>
                    <li><a class="dropdown-item" href="#">Mounth</a></li>
                    <li><a class="dropdown-item" href="#">Year</a></li>
                </ul>
            </div> --}}
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>

                                    <th scope="col">No</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date of Brith</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Offie</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Potensial value</th>
                                    <th scope="col">Remark</th>
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
                                    <td>{{$row->date}}</td>
                                    <td>{{$row->firstname}} {{$row->lastname}}</td>
                                    <td>{{$row->tgl_lahir}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->address}}</td>
                                    <td>{{$row->office}}</td>
                                    <td>{{$row->phone}}</td>
                                    <td>{{$row->potenvalue}}</td>
                                    <td>{{$row->remark}}</td>
                                    <td>
                                        <a href="/tampilpros/{{$row->id}}" class="btn btn-primary">Edit</a>
                                        <a href="#" class="btn btn-danger  delete" data-id="{{$row->id}}"
                                            data-email="{{$row->email}}">Delete</a>
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

</center>
<style>
    .forms-sample {
        display: flex;
    }

    .col-2 {
        height: 20px;
    }

    .card {
        justify-content: center;
    }
    th{
        text-align: center;
    }

</style>

{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
    integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('.delete').click(function () {
        var prosid = $(this).attr('data-id');
        var email = $(this).attr('data-email');

        swal({
                title: "Yakin?",
                text: "kamu akan menghapus data dengan email " + email + "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/delete/" + prosid + ""
                    swal("Data berhasil dihapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data tidak terhapus");
                }
            });
    });

</script>
@endsection
