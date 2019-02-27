<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @page {
        margin: 0;
    },
    body {
        margin:0;
        
        
    },
    h4{
        font-size:5px;
    },
    h5{
        font-size:5px;
    },
    h6{
        font-size:7px;
    },
    div{
        margin-top: 0px;
        margin-bottom: 0px;
        margin-right: 5px;
        margin-left: 5px;
    }
    </style>
    <script src="main.js"></script>
</head>
<body>
<div class='w3-display-left'><img src="{{ public_path('/img/logo_kemkes.png') }}" alt="" width=60px height=60px></div>
<div class='w3-display-middle w3-center'>

<h6>{{ $satker }}</h6>
<h5>{{ $nama_barang }}</h5>
<h4>{{ $kode_barang }}</h4>
</div>
<div class='w3-display-right'><img src="{{ $qrcode }}" alt="" width=60px height=60px></div>
</body>
</html>