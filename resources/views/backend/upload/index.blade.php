<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')
<!-- Your custom  HTML goes here -->
<div class='panel panel-default'>
    <div class='panel-heading'>
      <div class='panel-title pull-left'></div>
      <div class='panel-title pull-right'>
      <a href="javascript:void(0)" class='btn btn-primary btn-sm' data-toggle="modal" data-target="#import-nominatif"><i class='fa fa-upload'></i> Upload</a>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class='panel-body'>  
    <table class='table table-striped table-bordered'>
        <thead>
            <tr>
            <th>Kode Lokasi</th>
            <th>Kode Barang</th>
            <th>Uraian</th>
            <th>No Aset</th>
            <th>Merk</th>
            <th>Thn Perolehan</th>
            <th>Kuantitas</th>
            <th>Rp Perolehan</th>
            <th>Rp Akhir</th>
            <th>Penyusutan Pertama</th>
            <th>Penyusutan Reguler</th>
            <th>Penyusutan Transaksi</th>
            <th>Rupiah Buku</th>
            <th>Asal Perolehan</th>
            <th>No Bukti</th>
            <th>Keterangan</th>
            <th>Tercatat</th>
            <th>Kondisi</th>
            <th>Transaksi</th>

            </tr>
        </thead>
    </table>
    </div>
</div>
<div class="modal fade" id="import-nominatif">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('import-barang') }}"enctype='multipart/form-data' method="POST" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Upload</h4>
                </div>
                <div class="modal-body">

                    {{ csrf_field() }}
                    
                <input type="file" name="import_file" value="{{ old('import_file') }}" required class ='form-control'>
                </div>
                <div class="modal-footer">
                    
                    <button type="submit" class="btn bg-light-blue btn-sm"><i class="fa fa-plus"></i> Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ADD A PAGINATION -->
<p>{!! urldecode(str_replace("/?","?",$result->appends(Request::all())->render())) !!}</p>
@endsection