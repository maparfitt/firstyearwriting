@extends('layouts.app')

@section('content')
<div class="container">
    <p class="font-bold text-2xl text-center p-4">Payments</p>
</div>

<div class="container">
    <form
        method="POST"
        action="/payments"
        class="bg-white p-6 rounded shadow-md"
        style="width: 300px"
    >

    @csrf

        <button
            type="submit"
            class="bg-blue-500 py-2 text-white rounded-full text-sm w-full"
            formmethod="POST"
        >
        Make Payment
        </button>

    </form>
</div>
@endsection