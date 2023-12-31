<?php

function displayTable($rows, $headers) {
		?>

		<table border="2">
		    <tr>
		    <?php foreach ($headers as $header): ?>
		        <th ><?php echo $header; ?></th>
		    <?php endforeach; ?>
		    </tr>

			<?php foreach ($rows as $row): ?>
			    <tr>
			    <?php for ($k = 0; $k < count($headers); $k++): ?>
			    	<?php if ($k == 0){ ?>
			    		<td><?php echo '<a href=crud/userForm.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
			    	<?php } else { ?>
			    		<td><?php echo $row[$k]; ?></td>
			    	<?php } ?>
			        
			    <?php endfor; ?>
			    </tr>
			<?php endforeach; ?>

		</table>
		<?php

}

function getHeaderTable() {
	$headers = array();
	$headers[] = "id";
	$headers[] = "titre";
	$headers[] = "genre";
	$headers[] = "auteur";
	$headers[] = "note";
	return $headers;
}


?>
            