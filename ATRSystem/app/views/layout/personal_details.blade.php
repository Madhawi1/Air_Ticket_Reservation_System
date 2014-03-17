@extends ('layout.main')

@section('content')
	Please enter details of your journey to reserve flights.
	<form action="{{URL ::route('details-personal')}}" method='post'>
		<div class="field">
			Lastname:<input type="text" name="lastname" {{(Input::old('lastname'))?'value="' . e(Input::old('lastname')) . '"':''}}>
			@if($errors->has("lastname"))
				{{$errors->first("lastname")}}
			@endif
		</div>

		<div class="field">
			Firstname:<input type="text" name="firstname" {{(Input::old('firstname'))?'value="' . e(Input::old('firstname')) . '"':''}}>
			@if($errors->has("firstname"))
				{{$errors->first("firstname")}}
			@endif
		</div>
		<div class="field">
			Initials:<input type="text" name="initials" {{(Input::old('initials'))?'value="' . e(Input::old('initials')) . '"':''}}>
			@if($errors->has("initials"))
				{{$errors->first("initials")}}
			@endif
		</div>
		<div class="field">
			Email:<input type="text" name="email" {{(Input::old('email'))?'value="' . e(Input::old('email')) . '"':''}}>
			@if($errors->has("email"))
				{{$errors->first("email")}}
			@endif
		</div>
		<div class="field">
			Telephone:<input type="text" name="telephone" {{(Input::old('telephone'))?'value="' . e(Input::old('telephone')) . '"':''}}>
			@if($errors->has("telephone"))
				{{$errors->first("telephone")}}
			@endif
		</div>
		
	<input type="submit" value="Find flights">
	{{Form::token()}}
	</form>
@stop