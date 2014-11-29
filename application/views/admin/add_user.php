<form class="form-horizontal" role="form" action="<?php echo route_url('manageuser', 'add_user') ?>" method="POST">
	
	<div class="col-md-12">
		<h3>Informasi Akun</h3>
		<hr>
		<div class="form-group">
			<label class="col-sm-4 control-label">Akses</label>
			<div class="col-sm-7">
				<div class="radio">
					<label>
						<input type="radio" name="akses" id="akses-1" value="<?php echo USER_MEMBER ?>" checked> Member
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="akses" id="akses-2" value="<?php echo USER_OPERATOR ?>"> Operator
					</label>
				</div>
				<div class="radio">
					<label>
						<input type="radio" name="akses" id="akses-3" value="<?php echo USER_ADMIN ?>"> Admin
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Username</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Password</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="password" name="password" placeholder="Password" required>
			</div>
		</div>
	</div>
	
	<div class="col-md-12">
		<h3>Data Pribadi</h3>
		<hr>
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-sm-4 control-label">Nama Lengkap</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="nama-lengkap" name="nama-lengkap" placeholder="Nama Lengkap" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Alamat</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Kota</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="kota" name="kota" placeholder="Kota" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Propinsi</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="propinsi" name="propinsi" placeholder="Propinsi" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Kode Post</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="kode-post" name="kode-post" placeholder="Kode Post">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Tempat/Tanggal Lahir</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="tempat-lahir" name="tempat-lahir" placeholder="Tempat Lahir">
				</div>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="tgl-lahir" name="tgl-lahir" placeholder="Tanggal Lahir">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Agama</label>
				<div class="col-sm-7">
					<div class="radio">
					  <label>
						<input type="radio" name="agama" id="agama-1" value="Islam">
						Islam
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="agama" id="agama-2" value="Kristen">
						Kristen
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="agama" id="agama-3" value="Katolik">
						Katolik
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="agama" id="agama-4" value="Hindu">
						Hindu
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="agama" id="agama-5" value="Budha">
						Budha
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="agama" id="agama-6" value="Lainnya">
						Lainnya
					  </label>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="form-group">
				<label class="col-sm-4 control-label">Jenis Kelamin</label>
				<div class="col-sm-7">
					<div class="radio">
					  <label>
						<input type="radio" name="jenis-kelamin" id="jenis-kelamin-1" value="Laki-Laki">
						Laki-Laki
					  </label>
					</div>
					<div class="radio">
					  <label>
						<input type="radio" name="jenis-kelamin" id="jenis-kelamin-2" value="Perempuan">
						Perempuan
					  </label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Telp/HP</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="phone" name="phone" placeholder="Telp/HP">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">No KTP</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="no-ktp" name="no-ktp" placeholder="Nomer KTP" required />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Email</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="email" name="email" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">No Rekening</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="no-rekening" name="no-rekening" placeholder="Nomer Rekening" required />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Bank</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="bank" name="bank" placeholder="Bank" required />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Nama Rekening</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="nama-rekening" name="nama-rekening" placeholder="Nama Rekening" required />
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-12">
		<h3>Kuasa Ahli Waris</h3>
		<hr>
		<div class="form-group">
			<label class="col-sm-4 control-label">Nama Lengkap</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="nama-ahli-waris" name="nama-ahli-waris" placeholder="Nama Lengkap Ahli Waris" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-4 control-label">Hubungan Keluarga</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="hubungan-keluarga" name="hubungan-keluarga" placeholder="Hubungan Keluarga" required>
			</div>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary btn-lg pull-right">Register</button>
		</div>
	</div>
</form>