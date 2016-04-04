@extends('layouts.master')
@section('content')
    <h1>Welcome to TODOParrot</h1>
    {{-- output the $name variable. --}}
    <p>you last visited {{ $name }} on {{$date}}.</p>
    <br/>
    <ul>
      @foreach ($lists as $list)
      <li>{{ $list }}</li>
      @endforeach
    </ul>
@endsection
