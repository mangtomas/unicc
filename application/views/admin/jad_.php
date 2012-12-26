
<div class="container" id="admin">
	<div class="wrapper minh">
					<h1 class="title2">Departments and Positions</h1>
				<?=(isset($errordel)) ? $errordel : null;?>
					<div class="thebox">
					<h1 class="ttle">Departments</h1>
			<div class="left" style="width:100" id="depdiv">
				<div class="datagrid">
				<table cellspacing="0" width="100%" id="deptbl">
					<thead>
					<tr>
						<th>Department Name</th>
						<th>Positions</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
						$alt = 1;
						for ($x=0; $x<=count ($deps)-1; $x++){
						if (is_int($alt/2)){
							$class = "class='even'";
						} else {
							$class= "";
						}
					?>
							<tr <?php echo $class; ?>>
								<td style="width:130px"><?php echo $deps[$x]['dep_name']; ?></td>
								<td><a href="<?=base_url()."jobanddep/department/view/".$deps[$x]['id'];?>">View</a></td>
								<td class="act" style="text-align:right">
									<!--<a href="<?=base_url()."admin/jobAndDep/view/".$deps[$x]['id']; ?>" class="g-button blue mini">View</a>//-->
									<a href="<?=base_url()."admin/jobAndDep/modify/".$deps[$x]['id'];?>" class="to_modf g-button green mini no-text" title="Modify" data-reveal-id='myModal' id="to_modf/<?=$deps[$x]['id'];?>"><i class="icon-edit icon-white"></i></a>
									<a onclick="return confirm('Are you sure you want to delete this Department?')" href="<?=base_url()."jobanddep/delete/".$deps[$x]['id'];?>" class="g-button red mini no-text" class="Delete" title="Delete"><i class="icon-trash icon-white"></i></a>
								</td>
							</tr>
					<?php $alt++; } ?>
					</tbody>
				</table>
				</div>
			</div>
			
			<!--add new department//-->
			<div class="right addn">
			<h1 class="ttle brd">Add New Department</h1>
				<form action="<?=base_url()."jobanddep";?>" name="add_dep" method="post">
					<?=(isset($rs)) ? $rs : null;?>
					<?=(isset($error)) ? $error : null;?>
			<p>Department Name:<br />
			<input type="text" name="dep_n" value="" class="inp-search">
			</p>
			<p>Add Position<br />
			<input type="text" value="" name="pos[]" class="inp-search"> <a href="#" onClick="addmore()">[+]Add more</a>
			</p>
			<span id="addmorespan">
			</span>
			<p><input type="submit" name="adddep" value="Save" class="g-button blue small"/></p>
			</form>
		
			</div>
						<br class="clear" />
		</div>
					
							
	</div>
</div>