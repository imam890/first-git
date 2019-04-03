@extends('layout')

@section('content')

<div class="box-content">

	<p class="alert-success">
		<?php
		 $message=Session::get('message');
		 if ($message) {
		 	echo $message;
		 	Session::put('message',null);
		 }

		?>

	</p>
						<form class="form-horizontal" action="{{url('/save_contact')}}" method="POST">
							{{ csrf_field()}}
						 
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Contact Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="contact_name" id="focusedInput" type="text" >
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">Contact Number</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="contact_number" id="focusedInput" type="text"  >
								</div>
							  </div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Contact</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>

@endsection