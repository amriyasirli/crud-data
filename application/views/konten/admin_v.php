



        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
		  <h1 class="h3 mb-4 text-gray-800"><?php echo $judul?></h1>
		  
		  

		  <!-- Button trigger modal -->
		<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#staticBackdrop">
		Tambah Data
		</button>
		

		<!-- Modal -->
		<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
					<div class="modal-body">
						<form action="<?php echo base_url('admin/tambah')?>" method="post"> 
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" name="nama" id="nama">
							</div>
							<div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin</label>
								<select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
								<option>--Pilih--</option>
								<option>Laki-Laki</option>
								<option>Perempuan</option>
								</select>
							</div>
							<div class="form-group">
								<label for="Alamat">Alamat</label>
								<textarea class="form-control" name="alamat" id="alamat" rows="2"></textarea>
							</div>
						
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				</div>
				</form>
			</div>
		</div>

          
          <table class="table bordered hovered">
			<thead>
				<tr>
					<td>No</td>
					<td>Nama</td>
					<td>Jenis Kelamin</td>
					<td>Alamat</td>
					<td>aksi</td>
				</tr>
			</thead>
			<tbody>
			<?php 
			$no = 1;
			foreach($admin as $adm):?>
				<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $adm->nama;?></td>
					<td><?php echo $adm->jenis_kelamin;?></td>
					<td><?php echo $adm->alamat?></td>
					<td>					
						<a class="btn btn-info" href="<?php echo base_url('admin/edit/'.$adm->id.'')?>">Edit</a>

						<a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="<?php echo base_url('admin/del/'.$adm->id.'')?>">Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>

		
            

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
