 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?php echo $judul?></h1>




<!-- Isi Konten -->
    <?php foreach($admin as $adm):?>
		<form action="<?php echo base_url('admin/edit_data/'.$adm->id.'')?>" method="post"> 
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" required value="<?php echo $adm->nama;?>">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                <option><?php echo $adm->jenis_kelamin;?></option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="2"><?php echo $adm->alamat;?></textarea>
            </div>
			</div>
			<div class="modal-footer">
					<a href="<?php echo base_url('admin')?>" class="btn btn-secondary" data-dismiss="modal">Back</a>
					<button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
		</div>
    <?php endforeach;?>
<!-- Tutup Konten -->




    </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->