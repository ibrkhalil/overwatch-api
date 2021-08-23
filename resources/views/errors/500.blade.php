@extends('layouts.master')

@section('content')
	<h1>Application Error</h1>

	<p>Something unexpected happened. Please try again and, if you still get an error, <a href="{{ route('web.contribution') }}">let us know.</a></p>
@stop
