<?php
include "part/html_first.php";
include "part/header.php";
include "part/function_header.php";
?>


<!--MAIN-->
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3" style="background: #008080; color: white">
			<?php
				include "part/function_sidebar.php";
			?>
		</div>
		<div class="col-sm-9">
			<br><h2 align="center" class='judul'>Daftar Rekrutmen Lembaga Kemahasiswaan/Kepanitiaan</h2><br>
					<center>
					<?php
					if ($dataketemu==0){
						echo "<br><br><p>Maaf, data yang dicari tidak ada di dalam database.</p><br><br>";
					}
					?>
					<center/>
				<div class="row">				
					<?php
					$c=1;
					foreach($hslquery->result() as $row){
						echo "<div class='col-sm-4'><tr>";
						echo "<table style='width:100%;'><td>";
						echo "Nama Lowongan : ".$row->nama_lowongan;
						echo br();
						echo "Kategori : ".$row->kategori_lowongan;
						echo br();
						echo "Lingkup : ".$row->lingkup_lowongan;
						echo br();
						$id_lowongan=$row->id_lowongan;
						echo "<br><a class='tombol tombolwarna2' href='".site_url()."/detail_lowongan?id_lowongan=".$id_lowongan."'>Detail dan Pendaftaran</a>";
						echo "</td>";
						echo "</tr></table><br></div>";
					}
					?>
					<?php
					if ($dataketemu!=0 && $dataketemu>9){
						echo"<div class='col-sm-12 centercontainer' style='background:#006680ff; color:white; padding:10px'>".$pagination."</div>";
					}
					?>
					
				</div>
		</div>
	</div>
</div>

<!--FOOTER-->
<?php
include "part/footer.php";
include "part/html_last.php";
?>