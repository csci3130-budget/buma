<?php

include_once dirname(__FILE__) . '/config.php';

?><form class="form-horizontal" role="form" action="add_budget_post.php" id="add_budget_form">
    <div class="form-group">
   	    <label for="amount" class="col-sm-2 control-label">Amount:</label>
   	    <div class="col-sm-10">
      		<input type="text" class="form-control" name="amount" placeholder="Amount">
    	</div>
    </div>	
    <div class="form-group">
   	    <label for="category" class="col-sm-2 control-label">Category:</label>
        <div class="col-sm-10">
            <select class="form-control" id="category" name="category_id"><?php
				
				// Get the user categories
				$connection = new createConnection();
				$connection->connectToDatabase();
				
				$sql = 'SELECT DISTINCT c.category_id,
							   		    c.name
						FROM ' . $connection->database . '.category c LEFT JOIN ' . $connection->database . '.budget b ON c.category_id = b.category_id
						WHERE (b.user_id = ' . htmlentities($user_id) . ')
							   OR (c.category_id = 1 OR
							   	   c.category_id = 2 OR
							   	   c.category_id = 3)
						ORDER BY c.name ASC';
				$categories = $connection->runSqlWithReturn($sql);

				foreach ($categories as $k => $category)
					echo '<option value="' . $category['category_id'] . '">' . ucfirst($category['name']) . '</option>';
				
				$connection->closeConnection();
				
				?><option value="other">Other</option>
            </select>
        </div>
    </div>
    <div class="form-group">
   	    <label for="new_category" id="otherLabel" class="col-sm-2 control-label">Other:</label>
    	<div class="col-sm-10">
   			<input type="text" class="form-control" id="new_category" name="new_category" placeholder="New Category">
		</div>
    </div>

    <div class="form-group">
   		 <div class="col-sm-offset-2 col-sm-10">    	
    	    <!--<button class="btn btn-lg btn-success btn-block" type="submit">Add</button>-->
            <button id="btn_add_budget_form" class="btn btn-lg btn-success btn-block" type="button">Add</button>
   		 </div>
	</div>

    <div class="alert my_alert"></div>
</form>
