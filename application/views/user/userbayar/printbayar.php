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
										<th>Nama Dokter</th>
										<th>Tanggal</th>
										<th>Tindakan</th>
										<th>Tarif</th>
										

									</tr>
                                    <?php foreach ($bayar as $by) :

$nama_dokter=$by['nama_dokter'];
$tanggal=$by['tanggal'];
$id=$by['id_bayar'];
$tindakan=$by['jenis_tindakan'];
$tarif=$by['tarif'];

?>

								</thead>
								<tbody>
										<tr>	
										<td width="150">
									
											<?php echo $nama_dokter; ?>
										</td>
                                        <td>
											<?php echo $tanggal; ?>
										</td>
                                        <td>
											<?php echo $tindakan; ?>
										</td>
                                        <td>
											<?php echo $tarif; ?>
										</td>
			
									
			
									</tr>
									<?php endforeach; ?>

								</tbody>

                                <tr>
                                <th  colspan="3">Total :</th>
                                <td> <?= $total['total']; ?> </td>
								
                                </tr>
							</table>
						</div>
					</div>
				</div>

            
            
            </div>
                
               
            
            
              
</div>
</body>
</html>
