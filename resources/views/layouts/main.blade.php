@extends('layouts.app')

@section('content')
<div id="prepango-program" class="min-h-screen">
    @include('program.main')
</div>
<div id="prepango-experience" class="min-h-screen">
    @include('experience.main')
</div>
<div id="prepango-machine" class="min-h-screen">
    @include('machine.main')
</div>
<div id="prepango-new" class="min-h-screen">
    @include('new.main')
</div>
<div id="prepango-get-in-touch" class="min-h-screen">
    @include('get-in-touch.main')
</div>
@endsection
