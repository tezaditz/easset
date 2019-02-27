<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QRcodeController extends Controller
{
    public function make($id)
    {
        $kode_nup = explode('.',$id);
        
        $file = public_path('/QRCODE/'.$id.'.png');
        
        $data = DB::table('barang')
        ->where('kd_brg' ,  $kode_nup[0])
        ->where('no_aset' , $kode_nup[1])
        ->first();

        $text = implode('</br>' , $kode_nup);
        
        
        return \QRCode::text($text)->setOutFile($file)->png();    
    }

   
}
