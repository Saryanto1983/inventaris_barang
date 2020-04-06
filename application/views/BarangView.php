    <section class="content">
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">DATA BARANG</h3>
            </div>
			
            <div class="box-body">
			  <div class="row" style="margin-bottom: 10px">
				<div class="col-md-4">
					<?php echo anchor(site_url('Barang/form_input'),'Input', 'class="btn btn-primary"'); ?>
				</div>
			  </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Merk</th>
                  <th>Sumber</th>
                  <th>Tahun</th>
                  <th>Harga</th>
				  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no = 1;
					foreach ($barang as $brg)
					{
				?>
                <tr>
				  <td width="80px"><?php echo $no++ ?></td>
                  <td><?php echo $brg->kode_barang ?></td>
                  <td><?php echo $brg->nama_barang ?></td>
                  <td><?php echo $brg->merk ?></td>
                  <td><?php echo $brg->sumber ?></td>
                  <td><?php echo $brg->tahun ?></td>
                  <td><?php echo $brg->harga ?></td>
                  <td>
					<?php
						echo anchor(site_url('Barang/form_update/'.$brg->kode_barang),'<button type="button" class="btn btn-warning btn-xs">Update</button>'); 
						echo '&nbsp';
						echo anchor(site_url('Barang/hapus/'.$brg->kode_barang),'<button type="button" class="btn btn-danger btn-xs">Hapus</button>','onclick="javasciprt: return confirm(\'Apakah Anda yakin ingin menghapus data?\')"'); 
					?>
				  </td>
                </tr>  
				<?php
					}
				?>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
    </section>