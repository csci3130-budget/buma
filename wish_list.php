<h1 class="page-title">Wish List</h1>
<div class="container">
	<div class="align-bar"><h5 class="wish_text">Laptop</h5><h5 class="wish_text">$1000.00</h5></div>
	<div class="progress progress-striped active">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
	</div>
	<button id="nowrap" class="edit btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button><span class="btn-space"></span><button class="complete btn btn-default"><span class="glyphicon glyphicon-ok"></span></button><span class="btn-space"><button class="remove btn btn-default"><span class="glyphicon glyphicon-remove"></span></button><br /><br />

	<div class="align-bar"><h5 class="wish_text">TV</h5><h5 class="wish_text">$100.00</h5></div>
	<div class="progress progress-striped active">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="80" style="width: 8%;"></div></div>
	<button id="nowrap" class="edit btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button><span class="btn-space"></span><button class="complete btn btn-default"><span class="glyphicon glyphicon-ok"></span></button><span class="btn-space"><button class="remove btn btn-default"><span class="glyphicon glyphicon-remove"></span></button>
	</div>
	<h5 class="saved-text">Saved: $80.00</h5>

		<!-- REMOVE WISH ALERT -->
		<div class="alert alert-danger fade in remove-wish">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
			<h4>Are you sure you want to remove this wish?</h4>
			<p>
				<button type="button" class="btn-danger">Yes</button>
				<button type="button" class="btn-danger">Cancel</button>
			</p>
		</div>
		
		<!-- COMPLETE WISH ALERT -->
		<div class="alert alert-success fade in complete-wish">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
			<h4>Are you sure you want to complete this wish?</h4>
			<p>
				<button type="button" class="btn-success">Yes</button>
				<button type="button" class="btn-success">Cancel</button>
			</p>
		</div>

	<div class="col-sm-offset-2 col-sm-10 wish-btn">    	
		<button id="my_wish" class="btn btn-success wish">New</button>
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
			<button class="btn btn-success " type="submit">Update</button>
		</div>
	</div>
	</div>

	<!-- NEW WISH FORM -->		
	<div id="new_wish">
	<h2 class="page-title">New wish</h2>
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
			<button class="btn btn-success " type="submit">Add</button>
		</div>
	</div>
	</div>
</div>
