<?php

include_once dirname(__FILE__) . '/config.php';

?><h1 class="page-title">Wish List</h1>
<form class="container" role="form" action="wish_list" id="wish_list_form">
	<div class="progress progress-striped active">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
	</div>
	<div class="align-bar"><h5 class="wish_text">Laptop</h5><h5 class="wish_text">$1000.00</h5></div>
    <button class="remove btn_wish_list btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>
    <span class="btn-space align1"></span>
    <button class="complete btn_wish_list btn btn-default"><span class="glyphicon glyphicon-ok"></span></button>
    <span class="btn-space align1"></span>
	<button class="edit btn_wish_list btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button>
    <div class="clear"></div>

	<div class="progress progress-striped active">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="80" style="width: 8%;"></div>
	</div>
	<div class="align-bar"><h5 class="wish_text">TV</h5><h5 class="wish_text">$100.00</h5></div>
    <button class="remove btn_wish_list btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>
    <span class="btn-space align1"></span>
    <button class="complete btn_wish_list btn btn-default"><span class="glyphicon glyphicon-ok"></span></button>
    <span class="btn-space align1"></span>
	<button class="edit btn_wish_list btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button>
    <div class="clear"></div>
    
	<h5 class="saved-text">Saved: $80.00</h5>

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