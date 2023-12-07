<div class="container">
	<div id="hilang">
		<?= $this->session->flashdata('alert') ?>
	</div>
	<!-- Button trigger modal -->

	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
		Tambah User
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content bg-dark">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<form action="<?= base_url('admin/user/simpan') ?>" method="post">
					<div class="modal-body ">
						<div class="col mb-3">
							<label class="form-label text-white">Nama</label>
							<input type="text" class="form-control bg-white" placeholder="Nama" name="nama">
						</div>
						<div class="col mb-3">
							<label class="form-label text-white">Username</label>
							<input type="text" class="form-control bg-white" placeholder="Username" name="username">
						</div>
						<div class="col mb-3">
							<label class="form-label text-white">Password</label>
							<input type="password" class="form-control bg-white" placeholder="Password" name="password">
						</div>
						<div class="col mb-3">
							<label class="form-label text-white">Level</label>
							<select name="level">
								<option value="Admin">Admin</option>
								<option value="Kontributor">Kontributor</option>
							</select>
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
			<h6 class="mb-4">Data User</h6>
			<div class="table-responsive">
				<table class="table text-white">
					<thead>
						<tr>
							<th>Username</th>
							<th>Nama</th>
							<th>Level</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($user as $ac) { ?>
						<tr>
							<td><?= $ac['username']; ?></td>
							<td><?= $ac['nama']; ?></td>
							<td><?= $ac['level']; ?></td>
							<td>
								<a class="btn btn-sm btn-danger"
									onclick="return confirm('Yakin ingin menghapus data ini?')"
									href="<?= base_url('admin/user/hapus/' . $ac['id_user']); ?>">
									<i class="fa fa-trash"></i>
								</a>
								<a type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
									data-bs-target="#edit<?= $ac['id_user']; ?>">
									<i class="fa fa-edit"></i>
								</a>
								<div class="modal fade" id="edit<?= $ac['id_user']; ?>" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog md" role="document">
										<form action="<?= base_url('admin/user/edit') ?>" method="post">
											<input type="hidden" name="id_user" value="<?= $ac['id_user']; ?>">
											<div class="modal-content bg-dark">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLongTitle">Tambah User</h5>
													<button type="button" class="close" data-dismiss="modal"
														aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="col mb-3">
														<label class="form-label">Nama</label>
														<input type="text" class="form-control"
															value="<?= $ac['nama']; ?>" name="nama">
													</div>
													<div class="col mb-3">
														<label class="form-label">Username</label>
														<input type="text" class="form-control"
															value="<?= $ac['username']; ?>" name="username" readonly>
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
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>