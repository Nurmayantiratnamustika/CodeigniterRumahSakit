<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laporan Data Pasien</title>
    <style type="text/css">
    #outtable{
        padding: 20px;
        border: 1px solid #e3e3e3;
        width:600px;
        border-radius: 5px;
    }
    .short{
        width:50px;

    }
    .normal{
        width: 150px;
    }
    table{
        border-collapse:collapse;
        font-family:arial;
        color:#5E5B5C;
    }
    thead th{
        text-align:left;
        padding: 10px;
    }
    tbody tr:nth-child(even){
        background:#f6f5fA;
    }
    tbody tr:hover{
        background:#EAE9F5;
    }
    </style>
</head>
<body>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                No: 01
            </div>
            <div class="card-body">
                <h2 style="margin-left:150px; text-align: center;"> RUMAH SAKIT HARAPAN BUNDA </h2>
                <h3 style="margin-left:150px; text-align: center;"> Jl.Kebahagiaan no.15 Malang,Telp(0411)6218272 </h3>
                <h3 style="margin-left:150px; text-align: center;"> Email : tikanurma@gmail.com</h3>
                <br>
                <br>
                <div style="text-align:justify;width:75%; padding:8px;" >
                <img src="<?php echo base_url('upload/pasien/'.$pasien['image']) ?>" width="100" height="200"  /> <p> Nama : <?=$pasien['nama'];?></p><br>
                <p><label for=""><b> Alamat: </b>  <?= $pasien['alamat'];?> </label></p><br>
                <p><label for=""><b> Umur:</b><?= $pasien['umur'];?></label> </p><br>
                <p><label for=""><b> Keluhan:</b>  <?= $pasien['keluhan'];?> </label></p><br>
                <p><label for=""><b> Ruang Rawat Inap:</b>  <?= $pasien['ruanginap'];?></label></p><br>
                <p><label for=""><b> Telepon:</b>  <?= $pasien['telepon'];?></label></p><br>
                <p><label for=""><b> Email:</b>  <?= $pasien['email'];?></label></p><br>
            
            </div>
                
               
            
            
              
</div>
</body>
</html>
