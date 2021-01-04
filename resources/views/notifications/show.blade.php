@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @forelse($notifications as $notification)
                <li>
                 @if ($notification->type === 'App\Notifications\SignupComplete')
                    You are signed up. Thank you for your donation of ${{ $notification->data['amount']/100}}.00.
                 @endif
                </li>
            @empty
                <li>You have no unread notifications at this time.</li>
            @endforelse
        </ul>

    </div>

@endsection