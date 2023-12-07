<div class="container">
	<div id="hilang">
		<?= $this->session->flashdata('alert') ?>
	</div>
	<!-- Button trigger modal -->

	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
		Tambah Konten
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
				<div class="modal-content bg-dark">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Konten</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="modal-body ">
						<div class="col mb-3">
							<label class="form-label text-white">Judul</label>
							<input type="text" class="form-control bg-white" placeholder="Judul" name="judul">
						</div>
						<div class="col mb-3">
							<label class="form-label text-white">Kategori</label>
							<select name="id_kategori" class="form-control bg-white">
								<?php foreach ($kategori as $ab) { ?>
								<option value="<?= $ab['id_kategori']; ?>"><?= $ab['nama_kategori']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col mb-3">
							<label class="form-label text-white">Keterangan</label>
							<textarea name="keterangan" class="form-control bg-white"></textarea>
						</div>
						<div class="col mb-3">
							<label class="form-label text-white">Foto</label>
							<input type="file" name="foto" class="form-control bg-white" accept="image/png, image/jpeg">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
			</form>

		</div>
	</div>
</div>

<div class="col-xl col-xl">
	<div class="bg-secondary rounded h-100 p-4">
		<h6 class="mb-4">Kategori Konten</h6>
		<div class="table-responsive">
			<table class="table text-white">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul</th>
						<th>Kategori Konten</th>
						<th>Tanggal</th>
						<th>Kreator</th>
						<th>Foto</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($konten as $ab) { ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $ab['judul']; ?></td>
						<td><?= $ab['nama_kategori']; ?></td>
						<td><?= $ab['tanggal']; ?></td>
						<td><?= $ab['nama']; ?></td>
						<td>
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#foto<?= $ab['judul'] ?>">
								<i class="fa fa-regular fa-camera"></i>
							</button>
						</td>
						<td>
							<a class="btn btn-primary" onclick="return confirm('Yakin ingin menghapus data ini?')"
								href="<?= base_url('admin/konten/hapus/' . $ab['foto']); ?>">
								<i class="fa fa-trash"></i>
							</a>

							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#konteng<?= $no; ?>">
								<i class="fa fa-edit"></i>
							</button>

							<!-- Modal -->
							<div class="modal fade" id="konteng<?= $no; ?>" tabindex="-1"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content bg-dark">
										<div class="modal-header">
											<h1 class="modal-title fs-5" id="exampleModalLabel"><?= $ab['judul']; ?>
											</h1>
											<button type="button" class="btn-close bg-white" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>

										<form action="<?= base_url('admin/konten/edit') ?>" method="post"
											enctype="multipart/form-data">
											<input type="hidden" name="nama_foto" value="<?= $ab['foto']; ?>">
											<div class="modal-body ">
												<div class="col mb-3">
													<label class="form-label text-white">Judul</label>
													<input type="text" class="form-control bg-white"
														value="<?= $ab['judul']; ?>" name="judul">
												</div>
												<div class="col mb-3">
													<label class="form-label text-white">Kategori</label>
													<select name="id_kategori" class="form-control bg-white">
														<?php foreach ($kategori as $ah) { ?>
														<option
															<?php if($ah['id_kategori']==$ab['id_kategori']){echo"selected";} ?>
															value="<?= $ah['id_kategori']; ?>">
															<?= $ah['nama_kategori']; ?></option>
														<?php } ?>
													</select>
												</div>
												<div class="col mb-3">
													<label class="form-label text-white">Keterangan</label>
													<textarea name="keterangan"
														class="form-control bg-white"><?= $ab['keterangan']; ?></textarea>
												</div>
												<div class="col mb-3">
													<label class="form-label text-white">Foto</label>
													<input type="file" name="foto" class="form-control bg-white"
														accept="image/png, image/jpeg">
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Simpan</button>
											</div>
										</form>

									</div>
								</div>
							</div>
						</td>
					</tr>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php foreach ($konten as $ab) { ?>
<!-- Modal -->
<div class="modal fade" id="foto<?= $ab['judul'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content bg-dark">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Foto</h5>
				<button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body d-flex justify-content-center">
				<div class="card" style="width: 18rem;">
					<img src="<?= base_url('assets/upload/konten/'. $ab['foto']) ?>" alt="">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary bg-danger" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<?php } ?>
