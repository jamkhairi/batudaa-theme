<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="list-frame">
	<h2 class='text-title mt0'>LAPORAN PENDUDUK</h2>

	<!-- Tampilkan hanya jika 'flash_message' ada -->
	<?php $label = !empty($_SESSION['validation_error']) ? 'alert-danger' : 'alert-success'; ?>
	<?php if ($flash_message): ?>
		<div class="alert <?= $label?>"><?= $flash_message?></div>
	<?php endif; ?>

	<p class='text-warning'><i class='fa fa-comments-o'></i> Silahkan laporkan perubahan data kependudukan anda.</p>

	<form id="validasi" action="<?php echo site_url('lapor/insert') ?>" method="POST" onSubmit="return validasi(this);">
	<div class='form-group'>
		<label>Pengirim</label>
		<input class="form-control" type="text" readonly="readonly" name="owner" value="<?php echo $_SESSION['nama']?>"/>
	</div>
	<div class='form-group'>
		<label>NIK</label>
		<input class="form-control" type="text" readonly="readonly" name="email" value="<?php echo $_SESSION['nik']?>"/>
	</div>
	<div class='form-group'>
		<label>Laporan</label>
		<textarea name="komentar" rows="10" class='form-control'></textarea>
	</div>

	<input class='btn btn-primary btn-lg' type="submit" value="Kirim Laporan">
	</form>
</div>
