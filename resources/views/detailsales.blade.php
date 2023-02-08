                                @extends('layout.main')
@section('content')
<div class="row">
    <div class="content-wrapper">
        <a href="" class="btn btn-transparant  mb-4"></a>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-2 mt-3">List Sales</h4>
                    <div class="table-responsive">
                        <div x class="div">
                            <a style="width:70px;" href="/expdf" class="btn btn-primary text-white me-0 mb-4"><i
                                    class="icon-download"></i></a>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">No faktur</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No telepon</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Unit price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                   
                                  
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
