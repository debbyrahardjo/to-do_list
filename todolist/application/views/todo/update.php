<div >
	<div > 
		<?php  echo validation_errors();  ?>
		<form action="" accept-charset="utf-8" method="post">
		    <table>
		    <tr >
				<td><label for="aktivitas">Aktifitas</label></td>
		        <td><input type="text"  name="aktivitas" id="aktivitas" value="<?php echo $todo_list['aktivitas']; ?>" placeholder="Nama Aktifitas..."/></td>
		    </tr>

		    <tr >
				<td><label for="deskripsi">Deskripsi</label></td>
				<td><textarea name="deskripsi"  placeholder="Deskripsi Aktifitas..."><?php echo $todo_list['deskripsi']; ?></textarea></td>
		    </tr>

		    <tr >
				<td><label for="tanggal">Deadline Aktivitas</label></td>
		        <td>
		            
		            <input type="text" name="tanggal" id="tanggal" value="<?php echo $todo_list['tanggal']; ?>" style="width:175px;" class="form-control"/>
		       <!-- /.input group -->
				<script type="text/javascript">
		            $(function() {
			           $("#tanggal").datepicker({
			              dateFormat: "yy-mm-dd",
			              changeMonth: true,
			              changeYear: true
			            });
				   });
		        </script>
		    	</td>
		    </tr>
		    </table>

	        <div >
	            <button type="button" id="simpan" onclick="submit()">Submit</button>
	        </div>
		</form>
	</div>
</div>
	