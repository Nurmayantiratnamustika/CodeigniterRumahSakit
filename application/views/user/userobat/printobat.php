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
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Id Pasien</th>
										<th>Nama Obat</th>
										<th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total</th>
									
									</tr>
                                    <?php foreach ($obat as $ob) :

$id_obat=$ob['id_obat'];
                                
$id_pasien=$ob['id_pasien'];
$nama_obat=$ob['nama_obat'];
$jumlah=$ob['jumlah'];
$harga=$ob['harga'];
$total=$ob['total'];

?>

								</thead>
								<tbody>
										<tr>	
										<td width="150">
									
											<?php echo $id_pasien; ?>
										</td>
                                        <td>
											<?php echo $nama_obat; ?>
										</td>
                                        <td>
											<?php echo $jumlah; ?>
										</td>
                                        <td>
											<?php echo $harga; ?>
                                        </td>
                                        <td>
											<?php echo $total; ?>
										</td>
			
			
									
			
									</tr>
									<?php endforeach; ?>

								</tbody>

                                <tr>
                                <th  colspan="4">Total Harga :</th>
                                <td> <?php echo $obattot['totalobat']; ?> </td>
                                </tr>
							</table>
						</div>
					</div>
				</div>

            
            
            </div>
                
               
            
            
              
</div>
</body>
</html>
