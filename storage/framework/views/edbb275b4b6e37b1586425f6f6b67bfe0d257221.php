<title>Edit Kasir | Laundry</title>

<?php $__env->startSection('content'); ?>
	<div class="row mt-lg-5 ml-lg-0">
		<div class="col-lg-10 mr-auto">
			<h3>Edit Kasir</h3>
		</div>
	</div>

	<form action="/updatekasir/<?php echo e($kasir->id); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<div class="form-row col">
			<div class="form-group col-lg">
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama kasir" value="<?php echo e($kasir->nama); ?>">
			</div>
			<div class="form-group col-lg">
				<label for="outlet">Outlet</label>
				<select name="id_outlet" id="outlet" class="form-control">
						<option disabled selected>Pilih Outlet</option>

					<?php $__currentLoopData = $outlet; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($o->id); ?>"><?php echo e($o->nama_outlet); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</div>
		</div>
		<div class="form-row col">
			<div class="form-group col-lg">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" value="<?php echo e($kasir->username); ?>">
			</div>
		</div>

		<input type="hidden" value="kasir" name="role">
		
		<div class="col">
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="/kasir" class="btn btn-warning">Batal</a>
			
		</div>

	</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laundry-ujikom\resources\views/kasir/edit-kasir.blade.php ENDPATH**/ ?>