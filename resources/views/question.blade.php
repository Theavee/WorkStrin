@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<form action="{{'question_post'}}" method="post">
			   @csrf
			  <div class="form-group col-md-12">
			    <label>What made you want to start freelancing?</label>
			    <input type="text" class="form-control" name="qus_one" id="qOne" placeholder="Answer">
			    <label>How did you get your first few client?</label>
			    <input type="text" class="form-control" name="qus_two" id="qTwo" placeholder="Answer">
			    <label>Why do your client hire you?</label>
			    <input type="text" class="form-control" name="qus_three" id="qThree" placeholder="Answer">
			    <br>
			    <div class="form-group">
			    	<button class="btn btn-success">Submit</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>		
@endsection