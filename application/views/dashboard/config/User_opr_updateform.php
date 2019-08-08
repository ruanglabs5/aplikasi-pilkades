<?php
	$rule = explode(',', $user->rules_akses);
	$data_pemilih 				= false;
	$cek_kehadiran 			= false;
	foreach ($rule as $value) {
		if($value==3){
			$data_pemilih 		= true;
		}else if($value==4){
			$cek_kehadiran 	= true;
		}
	}
?>
<form id="form_update_user" autocomplete="off" action="<?php echo base_url('set_opr/update_user');?>" method="POST">
	<div class="hljs-wrapper">
		<div class="col" style="padding: 20px;">
			<div class="form-row">
					<div class="form-input col-md-7">
						<label>Nama User</label>
						<div class="input-group input-daterange">
							<input type="text" class="form-control form-control-sm" name="nama_depan" id="nama_depan" placeholder="Nama Depan" value="<?php echo $user->nama_depan;?>">
							<input type="text" class="d-none" name="uid" id="uid" value="<?php echo $user->uid;?>">
							<input type="text" class="form-control form-control-sm form-control-sm" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang" value="<?php echo $user->nama_belakang;?>">
						</div>
					</div>
			</div>
			<div class="form-row m-t-10 m-b-10">
					<div class="form-input col-md-4">
						<label>Email/Username/Nomor HP</label>
						<input type="text" value="<?php echo $user->email;?>" autocomplete="nope" class="form-control form-control-sm" name="email_login_user" id="email_login_user">
					</div>
					<div class="form-input col-md-3">
						<label>Password</label>
						<input type="text" autocomplete="new-password" class="form-control form-control-sm" name="password_login_user" id="password_login_user">
					</div>
					<div class="form-input col-md-5">
						<label>Akses</label>
						<div class="row col">
							<div class="checkbox checkbox-css checkbox-inline">
								<input type="checkbox" <?php if($data_pemilih==true){echo 'checked=""';}?> value="3" id="data_pemilih" name="data_pemilih">
								<label for="data_pemilih">Data Pemilih</label>
							</div>
							<div class="checkbox checkbox-css checkbox-inline">
								<input type="checkbox" <?php if($cek_kehadiran==true){echo 'checked=""';}?> value="4" id="cek_kehadiran" name="cek_kehadiran">
								<label for="cek_kehadiran">Cek Kehadiran</label>
							</div>
						</div>
					</div>
			</div>
			<div class="form-row m-t-10 m-b-10">
				<div class="col">
					<button type="button" class="btn btn-danger btn-md" onclick="remove_user(<?php echo $user->uid;?>)">Hapus</button> 
					<button type="button" class="btn btn-warning btn-md" onclick="close_add_user()">Tutup</button>
					<button type="submit" class="btn btn-primary btn-md pull-right">Update</button>
				</div>
			</div>
		</div>
	</div>
</form>