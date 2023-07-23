<?php $this->extend('layouts/main') ?>

<?php $this->section('content'); ?>
<h1 class="mt-3 mb-3 text-center">Edit Data Mahasiswa</h1>
<a href="<?= base_url('/mahasiswa'); ?>" class="btn btn-primary mb-4"><i class="bi bi-arrow-left"></i> Kembali</a>
<form action="<?= base_url('/mahasiswa/update/'); ?>/<?= $id; ?>" method="post">
  <div class="mb-3">
    <label for="nim" class="form-label">NIM <span class="text-danger">*</span></label>
    <input type="number" class="form-control <?= ($validation) ? ($validation->hasError('nim')) ? 'is-invalid' : '' : ''; ?>" maxlength="14" minlength="9" value="<?= old('nim') ? old('nim') : $data['nim']; ?>" id="nim" name="nim" placeholder="Masukkan NIM" required>
    <input type="hidden" name="old_nim" value="<?= $data['nim']; ?>">
    <?php if ($validation) : ?>
      <?php if ($validation->hasError('nim')) : ?>
        <div class="invalid-feedback">
          <?= $validation->getError('nim'); ?>
        </div>
      <?php endif; ?>
    <?php endif; ?>
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
    <input type="text" class="form-control <?= ($validation) ? ($validation->hasError('nama')) ? 'is-invalid' : '' : ''; ?>" value="<?= old('nama') ? old('nama') : $data['nama']; ?>" id="nama" name="nama" placeholder="Masukkan Nama" required>
    <?php if ($validation) : ?>
      <?php if ($validation->hasError('nama')) : ?>
        <div class="invalid-feedback">
          <?= $validation->getError('nama'); ?>
        </div>
      <?php endif; ?>
    <?php endif; ?>
  </div>
  <div class="mb-3">
    <label for="prodi" class="form-label">Program Studi <span class="text-danger">*</span></label>
    <?php $prodi = ['Teknik Informatika', 'Teknologi Rekayasa Keamanan Jaringan', 'Teknik Rekayasa Multimedia', 'Akuntansi'] ?>
    <select name="prodi" class="form-select <?= ($validation) ? ($validation->hasError('prodi')) ? 'is-invalid' : '' : ''; ?>" id="prodi" required>
      <option value="">--- Pilih Prodi ---</option>
      <?php $old_prodi = old('prodi') ? old('prodi') : $data['prodi']; ?>
      <?php foreach ($prodi as $index => $row) : ?>
        <?php if ($row == $old_prodi) : ?>
          <option selected value="<?= $row; ?>"><?= $row; ?></option>
        <?php else : ?>
          <option value="<?= $row; ?>"><?= $row; ?></option>
        <?php endif; ?>
      <?php endforeach; ?>
    </select>
    <?php if ($validation) : ?>
      <?php if ($validation->hasError('prodi')) : ?>
        <div class="invalid-feedback">
          <?= $validation->getError('prodi'); ?>
        </div>
      <?php endif; ?>
    <?php endif; ?>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
<?php $this->endSection(); ?>