	<?php
		if (isset($_POST['submit']))
		{
   			$sodautien = $_POST["sodautien"];
   			$sothuhai = $_POST["sothuhai"];
   			$sothuba = $_POST["sothuba"];
   			$tinh = $sodautien + ($sodautien * $sothuhai * 0.01);
       	}
 		echo "<table>
 			<thead>
 				<tr>
 					<th>Máy tính giá trị tương lai</th>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<td><span style='color:red'>Số tiền đầu tư: $$sodautien</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Lãi suất hằng năm: $sothuhai %</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Số năm: $sothuba</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Giá trị tương lai: $$tinh</span></td>
 				</tr>
 			</tbody>
 		</table>"
?>