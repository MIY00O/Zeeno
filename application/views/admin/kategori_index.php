<div class="container">
	<div id="hilang">
		<?= $this->session->flashdata('alert') ?>
	</div>
	<!-- Button trigger modal -->

	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
		Tambah Kategori
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content bg-dark">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
					<div class="modal-body ">
						<div class="col mb-3">
							<label class="form-label text-white">Nama Kategori</label>
							<input type="text" class="form-control bg-white" placeholder="Nama" name="nama_kategori">
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
							<th>Nama Kategori Konten</th> 
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach ($kategori as $ab) { ?>
						<tr>
							<td><?= $no; ?></td>
							<td><?= $ab['nama_kategori']; ?></td>
							<td>
								<a class="btn btn-sm btn-danger"
									onclick="return confirm('Yakin ingin menghapus data ini?')"
									href="<?= base_url('admin/kategori/hapus/' . $ab['id_kategori']); ?>">
									<i class="fa fa-trash"></i>
								</a>

								<a type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
									data-bs-target="#edit<?= $ab['id_kategori']; ?>">
									<i class="fa fa-edit"></i>
								</a>
								<div class="modal fade" id="edit<?= $ab['id_kategori']; ?>" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog md" role="document">
										<form action="<?= base_url('admin/kategori/edit') ?>" method="post">
											<input type="hidden" name="id_kategori" value="<?= $ab['id_kategori']; ?>">
											<div class="modal-content bg-dark">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLongTitle">Perbarui Kategori</h5>
													<button type="button" class="close" data-dismiss="modal"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="col mb-3">
														<label class="form-label">Nama Kategori Konten</label>
														<input type="text" class="form-control bg-white"
															value="<?= $ab['nama_kategori']; ?>" name="nama_kategori">
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
							</td>
						</tr>
						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
