<h2>Mainīt personisko informāciju:</h2>
<form action="<?=URL::site('profile')?>" method="post">
	<table>
		<?php foreach($data as $my): ?>
		<tr>
			<td ><strong>Vārds, uzvārds</strong></td>
			<td width="60%"><input type="text" name="name" value="<?=$my['name']?>" /></td>
		</tr>
		<tr>
			<td><strong>Valūta</strong></td>
			<td>
				<select name="valute" id="" style="width:100%">
				<?php if($my['valute'] == 'LVL'): ?>
					<option value="LVL" selected="selected">Latvijas lati - Ls</option>
					<option value="EUR">Euro - €</option>
					<option value="USD">Dollars - $</option>
				<?php elseif($my['valute'] == 'EUR'): ?>
					<option value="LVL">Latvijas lati - Ls</option>
					<option value="EUR" selected="selected">Euro - €</option>
					<option value="USD">Dollars - $</option>
				<?php elseif($my['valute'] == 'USD'): ?>
					<option value="LVL">Latvijas lati - Ls</option>
					<option value="EUR">Euro - €</option>
					<option value="USD" selected="selected">Dollars - $</option>
				<?php else: ?>
					<option value="LVL" selected="selected">Latvijas lati - Ls</option>
					<option value="EUR">Euro - €</option>
					<option value="USD">Dollars - $</option>
				<?php endif; ?>
				</select>
				</td>
			</tr>
			<?php endforeach;?>
			<tr>
				<td></td>
				<td><input style="float:right" type="submit" value="Apstiprinu!" /></td>
			</tr>
		</table>
	</form>
