@extends('layouts.app')

@section('content')
<div class="container">
    <form
        method="POST"
        action="/signups"
        class="bg-white p-6 rounded shadow-md"
        style="width: 300px"
    >

    @csrf

        <button
            type="submit"
            class="bg-blue-500 py-2 text-white rounded-full text-sm w-full"
            formmethod="POST"
        >
        Sign me up
        </button>


    </form>
</div>
@endsection