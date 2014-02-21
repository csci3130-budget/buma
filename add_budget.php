<form class="form-horizontal" role="form" action="add_budget_post.php" id="add_budget_form">
    <div class="form-group">
   	    <label for="amount" class="col-sm-2 control-label">Amount:</label>
   	    <div class="col-sm-10">
      		<input type="text" class="form-control" name="amount" placeholder="Amount">
    	</div>
    </div>	
    <div class="form-group">
   	    <label for="category" class="col-sm-2 control-label">Category:</label>
        <div class="col-sm-10">
            <select class="form-control" id="category" name="category">
                <option value="clothing" selected="selected">Clothing</option>
                <option value="food">Food</option>
                <option value="entertainment">Entertainment</option>
                <option value="other">Other</option>
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

    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <div class="alert"></div>
</form>