@extends('layout.index')

@section('Daftar Tanaman')
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Daftar Tanaman</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.3.5/sweetalert2.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.3.5/sweetalert2.min.js"></script>
    </head>
    <body>
    @section('content')
        <label for="tanaman" style="font-size:37px;">Daftar Tanaman</label>
        <hr>
        <button type="button" class="button button2" data-toggle="modal" data-target="#exampleModal">+ Tambah</button>
        <br>
        @if (session('status'))
        <div class="alert alert-success"> 
        {{ session('status')}} 
            <button type="button" class="close" data-dismiss="alert">×</button> 
        </div> 
        @endif

         <!-- Create Materi Popup -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Tanaman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <form action="{{ route('listtanaman.store') }}" style="width:100%;" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_tanaman">Nama Tanaman</label>
                            <input type="text" class="form-control" id="nama_tanaman" placeholder="Masukkan Nama Tanaman" name="nama_tanaman">
                        </div>
                        <div class="form-group">
                            <label for="harga_tanaman">Harga</label>
                            <input type="text" class="form-control" id="harga_tanaman" placeholder="Masukkan Harga" name="harga_tanaman">
                        </div>
                        <div class="form-group">
                            <label for="jumlah_stok">Jumlah Stok</label>
                            <input type="text" class="form-control" id="jumlah_stok" placeholder="Masukkan Jumlah Stok" name="jumlah_stok">
                        </div>
                            <!-- <div class="form-group">
                                <label for="gambar">Upload Gambar</label>
                                <input type="file" class="form-control-file" name="gambar">
                            </div> -->
                    </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>

    

        <!-- tabel -->
        <div class="table-hover table-responsive-sm">
            <table class="table">
                <thead class="thead-white" style="background-color:#C0C0C0;">
                    <tr>
                        <th scope="col">Nama Tanaman</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah Stok</th>
                        <th scope="co1">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listtanaman as $tn)
                        <tr>
                            <td hidden>{{$tn->id_tanaman}}</td>
                            <td>{{$tn->nama_tanaman}}</td>
                            <td>{{$tn->harga_tanaman}}</td>
                            <td>{{$tn->jumlah_stok}}</td>
                            <td>
                                <!-- <a href="daftarpemesanan/{{$tn->id_tanaman}}/index" class="btn btn-success btn-sm">Pesan</a> -->
                                <a href="#" method="POST" class="btn btn-warning btn-sm" data-toggle="modal">Edit</a>
                                <a id="btn-delete" href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody> 
            </table>
        </div>



</body>
</html>
@endsection