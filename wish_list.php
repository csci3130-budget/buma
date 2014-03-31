<?php

include_once dirname(__FILE__) . '/config.php';
    $connection = new createConnection();
    $connection->connectToDatabase();

    $sql = 'SELECT w.name,
               w.price,
               w.wish_list_id
        FROM ' . $connection->database . '.wish_list w 
        WHERE w.user_id = ' . htmlentities($user_id) . '
        ORDER BY w.name ASC';
        
    $wishes = $connection->runSqlWithReturn($sql);
    
    $sql = 'SELECT sum(e.amount) as Amount
            FROM ' . $connection->database . '.expense e, ' . $connection->database . '.budget b
            WHERE b.user_id = ' . htmlentities($user_id) . '
               AND b.budget_id = e.budget_id';
    
    $TotalSpentAmount = $connection->runSqlWithReturn($sql);

    $sql = 'SELECT sum(b.amount) as Amount
            FROM ' . $connection->database . '.budget b
            WHERE b.user_id = ' . htmlentities($user_id) . '';

    
    $TotalBudgetAmount = $connection->runSqlWithReturn($sql);

    foreach ($TotalSpentAmount as $ts){
        foreach ($TotalBudgetAmount as $tb){
            $save = $tb['Amount'] - $ts['Amount'];
        }
    }

    echo '<h1 class="page-title">Wish List</h1>
        <form class="container" role="form" action="wish_list" id="wish_list_form">';

    foreach ($wishes as $w){
        echo '  <div class="progress progress-striped active">
                <div class="progress-bar" role="progressbar" aria-valuenow="' . $save. '" aria-valuemin="100" aria-valuemax="' . $w['price'] . '" style="width: '.($save*100)/$w['price'].'%;"></div>
                </div>
                <div class="align-bar"><h5 class="wish_text">' . $w['name'] . '</h5><h5 class="wish_text">$'. number_format($w["price"], 2, '.', ',') . '</h5></div>
                <button class="remove btn_wish_list btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>
                <span class="btn-space align1"></span>
                <button class="complete btn_wish_list btn btn-default"><span class="glyphicon glyphicon-ok"></span></button>
                <span class="btn-space align1"></span>
                <button class="edit btn_wish_list btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button>
                <div class="clear"></div>';
    }

    echo '<h5 class="saved-text">Saved: $'. number_format($save, 2, '.', ',') . '</h5>';
?>
    
	

    <!-- REMOVE WISH ALERT -->
    <div class="alert alert-danger fade in remove-wish">
        <h4>Are you sure you want to remove this wish?</h4>
        <p>
            <button type="button" class="btn btn-success">Yes</button>
            <button type="button" class="btn btn-danger">Cancel</button>
        </p>
    </div>
    
    <!-- COMPLETE WISH ALERT -->
    <div class="alert alert-success fade in complete-wish">
        <h4>Are you sure you want to complete this wish?</h4>
        <p>
            <button type="button" class="btn btn-success">Yes</button>
            <button type="button" class="btn btn-danger">Cancel</button>
        </p>
    </div>

	<div class="col-sm-offset-2 col-sm-10 wish-btn">
		<a id="my_wish" class="btn btn-success wish">New</a>
	</div>

	<!-- EDIT WISH FORM -->
	<div id="edit-wish">
        <h2 class="page-title">Edit wish</h2>
        <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputItem" placeholder="Item">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputValue" placeholder="Value">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10 wish-btn">    	
                <a class="btn btn-success">Update</a>
            </div>
        </div>
    </div>
	
	<!-- NEW WISH FORM -->		
	<div id="new_wish">
        <h2 class="page-title">New wish</h2>
        <div class="form-group">
            <div class="col-sm-10">
                <input type="text" name="description" class="form-control" placeholder="Item">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                <input type="text" name="amount" class="form-control" placeholder="Amount">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10 wish-btn">    	
                <a class="btn btn-success btn_add_wish">Add</a>
            </div>
        </div>
    </div>
    
    <div class="alert my_alert"></div>
</form>
