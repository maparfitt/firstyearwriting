@extends('layouts.app')

@section('content')
<form action="/import">
    <input type="file" id="myFile" name="filename">
    <input type="submit">
  </form>

@endsection