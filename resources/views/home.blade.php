{{-- /resources/views/home.blade.php --}}

@extends('layouts.engine')

@section('title', 'Clash of Raja')

@section('csslinks')
	<input type="hidden" value="home" id="smartHead">
@endsection

@section('content')
	<canvas id="canvas1" width="500" height="500">
		<img id="canvas1" src ='glix.png' />
	</canvas>

@endsection
