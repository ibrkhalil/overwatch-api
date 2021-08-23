@extends('layouts.master')

@section('content')
	<h1>About</h1>
	<p>
		The Overwatch API is a project aiming to make available as much data about Overwatch as possible.
		It does not concern itself with player data, as made available by other APIs, but instead focuses on 
		base data about the game such as heroes, maps and abilities.
	</p>
	<p>
		The API is currently tracking {{ $heroCount }} heroes, {{ $abilityCount }} abilities, {{ $rewardCount }} rewards, {{ $mapCount }} maps, {{ $achievementCount }} achievements and more.
	</p>
	<p>
		Use the form below to test an endpoint and see the response.
		View the <a href="{{ route('web.docs', ['version' => 'v1']) }}">documentation</a> to see the available endpoints.
	</p>
	<form action="post" class="api-test">
		<div class="row">
			<div class="nine columns">
				<input type="text" placeholder="hero/1" class="endpoint-input">
			</div>
			<div class="three columns">
				<input class="button-primary" type="submit">
			</div>
		</div>
	</form>
	<span class="api-test-endpoint"></span>
	<pre class="api-test-response"></pre>
@stop
