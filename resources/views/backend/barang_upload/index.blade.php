<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')
<!-- Your custom  HTML goes here -->
<div class='panel panel-default'>
    <div class='panel-heading'>
        <div class='panel-title pull-right'>
        <a href="javascript:void(0)" class='btn btn-primary btn-sm' data-toggle="modal" data-target="#import-nominatif"><i class='fa fa-upload'></i> Upload</a>
        </div>
        <div class="clearfix"></div>
    </div>
        <div class='panel-body'>
            <table class='table table-striped table-bordered'>
                <thead>
                    <tr>
                        <th>Kode barang</th>
                        <th>Uraian</th>
                        <th>NUP</th>
                        <th>Merk</th>
                        <th>Tahun Perolehan</th>
                        <th>Rupiah Perolehan</th>
                        <th>Rupiah Buku</th>
                        <th>Asal Perolehan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($result as $key => $value)
                    <tr>
                        <td>{{ $value->kd_brg }}</td>
                        <td>{{ $value->ur_sskel }}</td>
                        <td>{{ $value->no_aset }}</td>
                        <td>{{ $value->merk_type }}</td>
                        <td>{{ $value->thn_perlh }}</td>
                        <td>{{ $value->rph_perlh }}</td>
                        <td>{{ $value->rph_buku }}</td>
                        <td>{{ $value->asal_perlh }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
<div class="modal fade" id="import-nominatif">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="{{ route('import-data') }}" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Upload Nominatif</h4>
                </div>
                <div class="modal-body">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="import_file" class="col-sm-3 control-label">FILE</label>
                        <div class="col-sm-9 {{ $errors->has('import_file') ? 'has-error' : '' }}">
                            <input type="file" name="import_file" class="form-control" id="import_file" value="{{ old('import_file') }}" required>
                            @if($errors->has('import_file'))
                                <span class="help-block">
                                    {{ $errors->first('import_file') }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm pull-left" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Batal </button>
                    <button type="submit" class="btn bg-light-blue btn-sm"><i class="fa fa-plus"></i> Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ADD A PAGINATION -->
<p>{!! urldecode(str_replace("/?","?",$result->appends(Request::all())->render())) !!}</p>
@endsection