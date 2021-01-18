@extends('layouts.app')

@section('content')
    <div class="m-10">
        <form action="/schedule" method="POST" >
         @csrf
            <fieldset>
                <label for="startDate">Choose a date:</label>
                <input class="my-3 border-2 border-gray-300 rounded focus:outline-none focus:border-blue-200" type="date" name="startDate">
                <label for="startTime">... and start time</label>
                <input class="my-3 border-2 border-gray-300 rounded focus:outline-none focus:border-blue-200" type="time" name="startTime">

                <label for="startTime">... and ending time</label>
                <input class="my-3 border-2 border-gray-300 rounded focus:outline-none focus:border-blue-200" type="time" name="endTime">
            </fieldset>
            <fieldset>
                <label for="">Length of each appointment:</label>
                <input class="my-3 border-2 border-gray-300 rounded focus:outline-none focus:border-blue-200 w-16" type="number" name="length" value="15">
            </fieldset>
            <input class="" type="submit" value="Submit">
        </form>
    </div>
@endsection