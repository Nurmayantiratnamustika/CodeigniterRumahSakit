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
            <table class="table table-hover" id="dataTable" width="100%" height="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Id Pasien</th>
										<th>Tanggal Periksa</th>
										<th>Keluhan Utama</th>
										<th>Riwayat Penyakit Sekarang</th>
                                        <th>Riwayat Penyakit Dahulu</th>
                                        <th>Riwayat Penyakit Keluarga</th>
                                        <th>Riwayat Alergi</th>
                                   

									</tr>
                                   
								</thead>
								<tbody>
										<tr>	
										<td width="150">
											<?= $riwayat['id_pasien']; ?>
										</td>
                                        <td>
                                        <?= $riwayat['tanggal_periksa'];?>
										</td>
										<td>
											<?php echo $riwayat['keluhan_utama']; ?>
										</td>
										<td>
											<?php echo $riwayat['riwayat_sekarang']; ?>
										</td>
										<td>
											<?php echo $riwayat['riwayat_dahulu']; ?>
										</td>
                                        <td>
											<?php echo $riwayat['riwayat_keluarga']; ?>
										</td>
                                        <td>
											<?php echo $riwayat['riwayat_alergi']; ?>
										</td>
							
			
									</tr>
								

									</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
            
            
            </div>
                
               
            
            
              
</div>
</body>
</html>
