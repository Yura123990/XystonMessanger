@extends('layouts.customApp')

@section('content')
@if(Auth::check())
    <ul class="flex flex-col">
        <h1 class="font-semibold text-xl text-center my-3">Teams List</h1>
        @livewire('chats-list' )
    </ul>
      
@else 
    <div class="mx-auto w-56 md:w-96">
        <h1 class="font-bold text-center text-lg mb-3 md:text-2xl">Get Started</h1>
        <p class="text-center mb-5 text-base md:text-lg">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima vitae accusamus eligendi autem iste perspiciatis dolor illum eos, odit quaerat asperiores accusantium praesentium consectetur placeat expedita ea quidem recusandae voluptatibus.</p>
        @livewire('button', ['link' => route('register')])
    </div>
@endif
@endsection