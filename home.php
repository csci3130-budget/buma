<?php

// Get the user categories
$connection = new createConnection();
$connection->connectToDatabase();

$sql = 'SELECT b.budget_id,
			   c.name,
			   b.amount
		FROM ' . $connection->database . '.category c, ' . $connection->database . '.budget b 
		WHERE b.user_id = ' . htmlentities($user_id) . '
			   AND b.category_id = c.category_id
		ORDER BY c.name ASC';
?>

<p>HI EVERYONE!</p>

<?php		
$budgets = $connection->runSqlWithReturn($sql);
if (count($budgets)) {
	echo '<h4>Budget for this month: $500.00</h4>
		  <h4>Currently spent: $200.00</h4>
		  <table class="table">
			<thead>
				<tr>
					<th><h5><b>Category</b></h5></th>
					<th><h5><b>Goal</b></h5></th>
					<th><h5><b>Current</b></h5></th>
					<th id="nowrap"></th>
				</tr>
			</thead>
			<tbody>';

	$count = 1;
	foreach ($budgets as $k => $budget){
		$count++;
		echo '<tr class="' . ($count % 2 ? 'warning' : 'success') . '">
				  <td><h5>' . ucfirst($budget['name']) . '</h5></td>
				  <td><h5>' . $budget['amount'] . '</h5></td>
				  <td><h5>$85.00</h5><span class="budget_id">' . $budget['budget_id'] . '</span></td>
				  <td id="nowrap"><button class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button><span class="btn-space"></span><button class="btn btn-default btn_delete"><span class="glyphicon glyphicon-remove"></span></button></td></div>
			  </tr>';
	}
	
	echo '</table>
		</tbody>';
} else {
	echo '<h4 class="txt_home_center">' . utf8_encode(ucfirst($_SESSION['user_name'])) . ', welcome to <b>BUMA</b>!<br/><br/>You don\'t have any created budget yet =( </h4>';
}
$connection->closeConnection();

?>
