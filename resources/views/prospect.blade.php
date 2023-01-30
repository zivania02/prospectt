@extends('layout.main')
@section('content')

<div class="row">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="/tambahprospect" type="button" class="btn btn-primary mb-4 mt-2">Add Prospect</a>
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
                                        <a href="/tampilpros/{{$row->id}}" class="btn"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                viewBox="0 0 24 24" fill="none" stroke="blue" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-edit">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                </path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                </path>
                                            </svg></a>
                                        <a href="#" class="btn  delete" data-id="{{$row->id}}"
                                            data-email="{{$row->email}}"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="red"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg></a>
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
