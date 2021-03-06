<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>		

<script>
window.onload=function(){
document.getElementById("defaultOpen").click(); 	
}
</script>

<!--MAIN-->
<div class="container" >
	<div class="row centercontainer " align="center">
		<div class="col-sm-8">
			<h2 align="center" style="padding-top:20px">Masuk</h2>
			<p align="center" style="padding-buttom:20px">Masuk sebagai Mahasiswa atau Lembaga Kemahasiswaan sesuai dengan NPM/Username dan Password yang telah didaftarkan.</p>
		</div>
	</div>
	<div class="row centercontainer" align="center" >
		<div class="col-sm-8">
			<button class="tablink radiuskiri" onclick="openPage('mahasiswa', this, '#008080')" id="defaultOpen">Mahasiswa</button>
			<button class="tablink radiuskanan" onclick="openPage('lembagakemahasiswaan', this, '#008080')">Lembaga Kemahasiswaan</button>
			<div id="mahasiswa" class="tabcontent">
				<div id="form" style="padding: 10px; margin-top: 10px;margin-bottom: 10px">
					<form style="position: static" action="<?php echo $login_action;?>" method="post" enctype="multipart/form-data">
						<?php if($this->session->userdata('login_message')){ ?><br>
							<div class="peringatan peringatan-primary" role="alert">
								<?php echo $this->session->userdata('login_message'); ?>
							</div>
						<?php }?>
						NPM:<br>
						<input type="text" id="inputnpm" name="inputnpm" class="rcorners" size=40 placeholder="NPM terdaftar" <?php if($this->session->userdata('login_valid')) { echo 'value="'.$this->session->userdata('login_valid').'"';}?> required autofocus><br>
						Password:<br>
						<input type="password" id="inputPassword" name="inputPassword" class="rcorners" size=40 placeholder="Password terdaftar" required> <br><br>
						<button class="tombol tombolwarna2" type="submit">Masuk</button>
					</form>
				</div>
			</div>

			<div id="lembagakemahasiswaan" class="tabcontent">
				<div id="form" style="padding: 10px; margin-top: 10px;margin-bottom: 10px">	
					<form style="position: static" action="<?php echo $login_actionLK;?>" method="post" enctype="multipart/form-data">
						<?php if($this->session->userdata('login_message')){ ?><br>
							<div class="peringatan peringatan-primary" role="alert">
								<?php echo $this->session->userdata('login_message'); ?>
							</div>
						<?php }?>
						Username:<br>
						<input type="text" id="inputUsernameLembaga" name="inputUsernameLembaga" class="rcorners" size=40 placeholder="Username lembaga terdaftar" <?php if($this->session->userdata('login_valid')) { echo 'value="'.$this->session->userdata('login_valid').'"';}?> required autofocus><br>
						Password:<br>
						<input type="password" id="inputPasswordLembaga" name="inputPasswordLembaga" class="rcorners" size=40 placeholder="Password terdaftar" required> <br><br>
						<button class="tombol tombolwarna2" type="submit">Masuk</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<br>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>