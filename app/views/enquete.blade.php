<!--
	Dit is de layout voor mijn enquete om mensen te ondervragen naar hun planningervaring
 -->
@extends('baselayout')
 
@section('content')
<p>Een enqute over het maken van een planning</p>
{{Form::model($question, array('action' => array('VraagCtrl@SaveAnswer', $user->naam)))}}

{{Form::text('naam')}}


{{Form::close()}}
@stop
