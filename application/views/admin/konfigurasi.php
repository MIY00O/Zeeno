<div id="hilang">
    <?= $this->session->flashdata('alert') ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
    <div class="modal-content bg-dark width: 100%; height: 100%;">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfigurasi</h1>
        </div>

        <div class="modal-body ">
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label text-white">Judul Website</label>
                    <input type="text" class="form-control bg-white" name="judul_website" value="<?= $konfig->judul_website; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label text-white">Profile</label>
                    <textarea name="profil_website" class="form-control bg-white"><?= $konfig->profil_website; ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label text-white">Instagram</label>
                    <input type="text" class="form-control bg-white" name="instagram" value="<?= $konfig->instagram; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label text-white">Email</label>
                    <input type="email" class="form-control bg-white" name="email" value="<?= $konfig->email; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label text-white">Alamat</label>
                    <input type="text" class="form-control bg-white" name="alamat" value="<?= $konfig->alamat; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label text-white">Whatsapp</label>
                    <input type="text" class="form-control bg-white" name="no_wa" value="<?= $konfig->no_wa; ?>">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
</form>