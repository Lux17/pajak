<?php
$penghasilan = $_POST['gaji'];

$angka= str_replace(".", "", $penghasilan);

if(is_numeric($angka)){
    //total gaji dalam setahun

    $total_gaji = $angka * 12; 

    // var_dump($total_gaji);
    if($total_gaji < 0){
        $hasil_akhir = 'Silahkan Cek kembali pastikan format gaji anda benar';
    }
    elseif($total_gaji > 54000000 && $total_gaji <= 60000000)
    {
        $ptkp = 54000000;
        $pkp = $total_gaji - $ptkp;
        $total = $pkp * (5 /100);
        $hasil_akhir = 'Rp.'.  number_format($total,2,',','.');
    }
    elseif ($total_gaji > 60000000 && $total_gaji <= 250000000 )
    {
        $ptkp = 54000000;
        $pkp = $total_gaji - $ptkp;
        $total = $pkp * (15 /100);
        $hasil_akhir = 'Rp.'.  number_format($total,2,',','.');
    }
    elseif ($total_gaji > 250000000 && $total_gaji <= 500000000)
    {
        $ptkp = 54000000;
        $pkp = $total_gaji - $ptkp;
        $total= $pkp * (25 /100);
        $hasil_akhir = 'Rp.'.  number_format($total,2,',','.');
    }
    elseif ($total_gaji > 500000000 && $total_gaji <= 5000000000)
    {
        $ptkp = 54000000;
        $pkp = $total_gaji - $ptkp;
        $total = $pkp * (30 /100);
        $hasil_akhir = 'Rp.'.  number_format($total,2,',','.');
    }
    elseif ($total_gaji >= 5000000001)
    {
        $ptkp = 54000000;
        $pkp = $total_gaji - $ptkp;
        $total = $pkp * (35 /100);
        $hasil_akhir = 'Rp.'.  number_format($total,2,',','.');
    }else{
        $hasil_akhir = "Tidak Wajib Pajak";
    }
}else{
    $hasil_akhir = "Format salah gunakanlah Angka";
}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css" >
    <title>Hitung Pajak Penghasilan</title>
  </head>
  <body>
<div class="col d-flex justify-content-center mt-5">
  <div class="card " style="width: 30rem;">
  <div class="card-body ">
  <h1 class="text-center">Aplikasi Hitung Pajak Penghasilan</h1>

    <form action="index.php" method="post">
    <table>
    <div class="mb-3">
    <label class="form-label ">Gaji/bln</label>
    <input type="text" class="form-control" name="gaji" placeholder="total gaji" value="" Required="">
    </div>
    <div class="mb-3">
    <tr><td>
    <Input class="btn btn-primary" type="submit" value="Cek Pajak" size=5 />
    <Input class="btn btn-danger" type="reset"  value="Reset" size=5 />
    </td></tr>
    </div>

    </table>
    <div class="mb-3">
    <label  class="form-label">Total Pajak</label>
    <textarea class="form-control"  rows="3" value=""> <?php echo $hasil_akhir ?></textarea>
    </div>
    </form>
    </card>


  
  </div>
</div>
</div>
    <card>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>