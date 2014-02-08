<form class="form-horizontal" role="form">
    <div class="form-group">
   	    <label for="inputAmount" class="col-sm-2 control-label">Amount:</label>
   	    <div class="col-sm-10">
      		<input type="text" class="form-control" id="inputAmount" name="inputAmount" placeholder="Amount">
    	</div>
    </div>	
    <div class="form-group">
   	    <label for="inputCategory" class="col-sm-2 control-label">Category:</label>
   	    	<div class="col-sm-10">
                                <!-- This will need to be manually inserted by the database information later on -->
				<select class="form-control" id="inputCategory" name="inputCategory">
	  				<option value="clothing" selected="selected">Clothing</option>
	  				<option value="food">Food</option>
	  				<option value="entertainment">Entertainment</option>
	 				<option value="other">Other</option>
				</select>
			</div>
    </div>
    <div class="form-group">
   	    <label for="inputOtherCategory" class="col-sm-2 control-label"></label>
    	<div class="col-sm-10">
   			<input type="text" class="form-control" id="inputOtherCategory" placeholder="Other Category">
		</div>
    </div>
    <div class="form-group">
   		 <div class="col-sm-offset-2 col-sm-10">    	
    	    <button class="btn btn-lg btn-success btn-block" type="submit">Add</button>
   		 </div>
	</div>
</form>
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Budget added</strong>
</div>
