<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_three();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Add New Users</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="save_data.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Username:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtusername" id="focusedInput" type="text" placeholder="Masukkan Username">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtpassword" id="focusedInput" type="password" placeholder="Masukkan Password">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Nama:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtfirstname" id="focusedInput" type="text" placeholder="Masukkan Nama">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Hak Akses:</label>
								<div class="controls">
									
								  <!-- <input class="input-xlarge focused" name="txtlastname" id="focusedInput" type="text" placeholder="Lastname"> -->
								  <select name="hak_akses">
								  	<?php
										include("../koneksi.php");
										$data = mysqli_query($koneksi, "SELECT * FROM hak_akses");

										while ($isi = mysqli_fetch_array($data)) {
											echo "<option value=$isi[id]>$isi[nama]</option>";
										}
									?>
								  </select>
								</div>
							  </div>
							  <!-- <div class="control-group">
								<label class="control-label" for="focusedInput">Email:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtemail" id="focusedInput" type="text" placeholder="Email">
								</div>
							  </div> -->
							  <div class="form-actions">
								<button type="submit" onclick="return confirmAdd()" class="btn btn-primary">Add New Record</button>
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->