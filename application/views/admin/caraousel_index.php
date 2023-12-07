<div id="hilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-sm-12 col-xl-12">
	<div class="bg-secondary rounded h-100 p-4">
		<form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype="multipart/form-data">
			<h6 class="mb-4">File Input</h6>
			<div class="card-body">
				<div class="col mb-3">
					<label class="form-label text-white">Judul</label>
					<input type="text" class="form-control bg-white" placeholder="Judul Foto" name="judul">
				</div>
				<div class="mb-3">
					<label for="formFile" class="form-label text-white">Pilih Foto Dengan Ukuran (1:3)</label>
					<input class="form-control bg-dark text-white" type="file" name="foto">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>

<div class="d-flex row">
	<?php foreach ($caraousel as $ac) { ?>
		<div class="mt-3 col-lg-4">
			<div class="card bg-dark">
				<img style="height: 25vh; object-fit: cover;" src="<?= base_url('assets/upload/caraousel/' . $ac['foto']); ?>" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title"><?= $ac['judul'] ?></h5>
					<a class="btn btn-primary" onclick="return confirm('Yakin ingin menghapus data ini?')" href="<?= base_url('admin/caraousel/hapus/' . $ac['foto']); ?>">
						<i class="fa fa-trash"></i>
					</a>
				</div>
			</div>
		</div>
	<?php } ?>
</div>