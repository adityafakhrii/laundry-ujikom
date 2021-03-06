<title>Edit Member | Laundry</title>

<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-lg-10 mr-auto">
			<h3>Edit Member</h3>
		</div>
	</div>

	<form action="/updatemember/<?php echo e($member->id); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<div class="form-group row">
		    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
		    <div class="col-sm-10">
		      <input type="text" name="nama_member" id="nama" class="form-control" placeholder="Masukkan nama member" value="<?php echo e($member->nama_member); ?>">
		    </div>
		</div>
		
		<div class="form-group row">
			<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
			<div class="col-sm-10">
				<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat member" value="<?php echo e($member->alamat); ?>">
			</div>
		</div>

		<fieldset class="form-group">
			<div class="row">
				<legend class="col-form-label col-sm-5  pt-0">Jenis Kelamin</legend>
				<div class="col-sm-10">
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" name="jenis_kelamin" id="p" value="P">
						<label class="custom-control-label" for="p">Perempuan</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" class="custom-control-input" name="jenis_kelamin" id="l" value="l">
						<label class="custom-control-label" for="l">Laki-laki</label>
					</div>
				</div>
			</div>
		</fieldset>

		<div class="form-group row">
			<label for="tlp" class="col-sm-5 col-form-label">No. Telfon</label>
			<div class="col-sm-10">
				<input type="text" name="tlp" id="tlp" class="form-control" placeholder="Masukkan no.telfon member" value="<?php echo e($member->tlp); ?>">
			</div>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="/member" class="btn btn-warning">Batal</a>

		</div>

	</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laundry-ujikom\resources\views/member/edit-member.blade.php ENDPATH**/ ?>