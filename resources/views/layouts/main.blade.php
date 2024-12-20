@extends('layouts.app')

@section('content')
<div id="prepango-program" class="section min-h-screen">
    @include('program.main')
</div>
<div id="prepango-experience" class="section min-h-screen">
    @include('experience.main')
</div>
<div id="prepango-machine" class="section min-h-screen">
    @include('machine.main')
</div>
<div id="prepango-new" class="section min-h-screen">
    @include('new.main')
</div>
<div id="prepango-get-in-touch" class="section min-h-screen bg-light_beige">
    @include('get-in-touch.main')
</div>
@endsection
