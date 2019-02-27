<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')
<!-- Your custom  HTML goes here -->
<div class='panel panel-default'>
    <div class='panel-heading'>
    <div class='panel-title pull-right'>
      
      <a href="javascript:void(0)" class='btn btn-info btn-sm' name='printall' id='printall'><i class='fa fa-print'></i> Cetak Label</a>
    </div>
    <div class="clearfix"></div>
    
    
    
    </div>
    <div class='panel-body'>
<table class='table table-striped table-bordered'>
  <thead>
      <tr>
        
        <th>Kode Barang</th>
        <th>Uraian</th>
        <th>NUP</th>
        <th>Merk</th>
        <th>Tahun Perolehan</th>
        <th>Nilai Perolehan</th>
        <th>Nilai Buku</th>
        <th>QRCode</th>
        <th class='text-center'>
        <div class="checkbox">
        <label><input type="checkbox" value="" name='chkAll' class='pilihcetak'></label>
        </div>
        </th>
        <th>Action</th>
       </tr>
  </thead>
  <tbody>
    @foreach($result as $row)
      <tr>
      
        <td>{{$row->kd_brg}}</td>
        <td>{{$row->ur_sskel}}</td>
        <td>{{$row->no_aset}}</td>
        
        <td>{{$row->merk_type}}</td>
        <td>{{$row->thn_perlh}}</td>
        <td>{{$row->rph_perlh}}</td>
        <td>{{$row->rph_buku}}</td>
        <td>      
        <?php
        $kodebarang = $row->qrcode_path;
        ?>
        
         
        <img src="<?php echo asset( $kodebarang ) ?>" alt="" width=50px height=50px>
        
        </td>
        <td class='text-center'>
      <div class="checkbox">
        <label><input type="checkbox" value="" name='cetak[{{ $row->id }}]' id='cetak[{{ $row->id }}]' class='pilihcetak'></label>
        </div>
      </td>
        <td>
          <a href="{{ route('print-qrcode' , $row->id) }}" target='_blank' class='btn btn-primary btn-sm'><i class='fa fa-print'></i> Cetak Label</a>
        </td>
       </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>

<!-- ADD A PAGINATION -->
<p>{!! urldecode(str_replace("/?","?",$result->appends(Request::all())->render())) !!}</p>
@endsection