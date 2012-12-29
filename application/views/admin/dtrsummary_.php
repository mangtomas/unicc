<div class="container" id="compensation">
	<div class="wrapper">
	<h1 id="ttle">Daily time record summary (<?=$d;?>)</h1>
	<div class="datagrid">
	<table width="100%" class="data-table" cellspacing="0">
		<thead>
			<tr><th>EId</th><th>Employee Name</th> <th>Total lates</th><th>Total hours</th></tr>
		</thead>
		<tbody>
	<?php
		$ctr = 0;
		foreach($emp as $key){
			$oddoreven = (($ctr++)%2) ? "even" : "odd";
			echo "<tr class=".$oddoreven."><td>".$key[0]['id']."</td><td>".$key[0]['fname']."</td><td>".$key[0]['lates']."</td><td>".$key[0]['totalhours']."</td></tr>";
		}
	?>
	</tbody>
	</table>
	</div>
	
	<div class="action-con" style="margin:10px 0 10px 0">
			<form action="<?=base_url()."dailytimerecord/summary";?>" method="POST" >
			<input type="hidden" value="<?=$fora;?>" name="sdte" />
			<input type="submit" value="Submit" name="submitpayroll" class="g-button green" />
			</form>
			</div>