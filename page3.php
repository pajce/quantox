<?php
	require_once('page1.php');
	$query_csmb="select id, name, school_board, ifnull(grade_1,0) as grade_1, ifnull(grade_2,0) as grade_2, ifnull(grade_3,0) as grade_3,".
"	ifnull(grade_4,0) as grade_4 from test.student where lower(school_board)='csmb'";
	$ret_csmb=mysqli_query($mysql, $query_csmb);

?>
<html>
	<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>School_board</th>
		<th>Grade_1</th>
		<th>Grade_2</th>
		<th>Grade_3</th>
		<th>Grade_4</th>	
		<th>AVG</th>	
		<th>PASSED</th>	
	</tr>
		<?php while($row=mysqli_fetch_assoc($ret_csmb)){ 
		$sum=0;
		$count=0;
		$pass='NO';
		$min=10;
		?>
	<tr>
		<td><?php echo "{$row['id']}";?></td>
		<td><?php echo "{$row['name']}";?></td>
		<td><?php echo "{$row['school_board']}"?></td>
		<td><?php if ($row['grade_1'] > 0) {echo "{$row['grade_1']}"; $count++; $sum+=$row['grade_1'];}
				  if ($row['grade_1'] > 8) { $pass='YES';}
				  if ($row['grade_1'] < $min and $row['grade_1'] > 0) { $min=$row['grade_1'];}?></td>
		<td><?php if ($row['grade_2'] > 0) {echo "{$row['grade_2']}"; $count++; $sum+=$row['grade_2'];}
				  if ($row['grade_2'] > 8) { $pass='YES';}
				  if ($row['grade_2'] < $min and $row['grade_2'] > 0) { $min=$row['grade_2'];}?></td>
		<td><?php if ($row['grade_3'] > 0) {echo "{$row['grade_3']}"; $count++; $sum+=$row['grade_3'];}
				  if ($row['grade_3'] > 8) { $pass='YES';}
				  if ($row['grade_3'] < $min and $row['grade_3'] > 0 ) { $min=$row['grade_3'];}?></td>
		<td><?php if ($row['grade_4'] > 0) {echo "{$row['grade_4']}"; $count++; $sum+=$row['grade_4'];}
				  if ($row['grade_4'] > 8) { $pass='YES';}
				  if ($row['grade_4'] < $min and $row['grade_4'] > 0) { $min=$row['grade_4'];}?></td>
		<td><?php if ($count>2){echo round(($sum-$min)/($count-1),2);} 
					else {echo round($sum/$count,2);} ?></td>
		<td><?php if($sum/$count>=7) {echo "YES";} else {echo "NO";} ?></td>		
	</tr>
		<?php } ?>
	</table>
</html>
