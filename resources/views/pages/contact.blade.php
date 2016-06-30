 @section('title', 'Contact US')
@extends('layouts.main')

@section('content')


  	{!! Form::open(array('url' => 'foo/bar', 'class'=>' col-md-5' ,'role'=>'form')) !!}

  	<div class="form-group has-feedback">
	    <label for="inputTwitter" class="control-label">Email</label>
	   
		      {!! Form::input('email', 'email_address', '', 
		  				['class' => 'form-control', 
		  				'id'=>'emailAddres', 
		  				'pattern'=>'^[_A-z0-9]{1,}$',
		  				'required'
		  				 ]) !!}
	     
	    
	    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	    <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
	</div> <!-- Email -->
  	<div class="form-group has-feedback">
	    <label for="inputTwitter" class="control-label">Your Name</label>
	    
		      
		      {!! Form::input('text', 'username', '', 
		  				['class' => 'form-control', 
		  				'id'=>'emailAddres', 
		  				'pattern'=>'^[_A-z0-9]{1,}$',
		  				'required'
		  				 ]) !!}
	     
	    
	    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	    <div class="help-block with-errors">Please add Your Name </div>
	</div>
	<!-- Username -->
    <div class="form-group has-feedback">
	    <label for="inputTwitter" class="control-label">Subject</label>
	   
		      
		      {!! Form::input('text', 'subject', '', 
		  				['class' => 'form-control', 
		  				'id'=>'emailAddres', 
		  				'pattern'=>'^[_A-z0-9]{1,}$',
		  				'required'
		  				 ]) !!}
	     
	  
	    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	    <div class="help-block with-errors">Please add Your Name </div>
	</div>
	<!-- Subject -->
  	<div class="form-group has-feedback">
	    <label for="inputTwitter" class="control-label">Text</label>
	   
		      
		      {!! Form::textarea('msg', '', 
		  				['class' => 'form-control', 
		  				'id'=>'emailAddres', 
		  				'pattern'=>'^[_A-z0-9]{1,}$',
		  				'required'
		  				 ]) !!}
	     
	    
	    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	    <div class="help-block with-errors">Please add Your Name </div>
	</div>
	<!-- Message Text -->
   	{{ Form::submit('Save', array('class' => 'btn')) }}
	{!! Form::close() !!}
@stop