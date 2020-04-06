<!-- <div class="content-wrapper">
        <section class="content-header">
            <h1>STMIK JABAR</h1>
            <small>belajar tanpa batas</small>
            <ol class="breadcumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
                <li><a href="#">Inventaris Barang</a></li>
            </ol>
        </section> -->
    
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">INPUT BARANG</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
         <form action="<?php echo base_url()."Barang/insert"; ?>" method="POST">		 
              <div class="box-body">
                <div class="form-group">
                  <label for="kode_barang">Kode Barang</label>
                  <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Kode Barang">
                </div>
                <div class="form-group">
                  <label for="nama_barang">Nama Barang</label>
                  <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang">
                </div>
                <div class="form-group">
                  <label for="merk">Merk</label>
                  <input type="text" class="form-control" name="merk" id="merk" placeholder="Merk">
                </div>
				<div class="form-group">
                  <label>Sumber</label>
                  <input type="text" class="form-control" name="sumber" id="sumber" placeholder="Sumber">
                </div>
				<div class="form-group">
                  <label for="tahun">Tahun</label>
                  <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun">
                </div>
				<div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
        </div>
        <div class="box-footer">
          &copy; TIM IT SMANSA
        </div>
      </div>
    </section>
<!-- </div> -->