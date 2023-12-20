@extends('templates/master')

@section('title')
    Round Details
@endsection

@section('content')
    <h2>Round Details</h2>

    <ul>
        <li>Round ID: {{ $round['id'] }}</li>
        <li>Player's Choice: {{ $round['choice'] }}</li>
        <li>Player {{ $round['result'] ? 'won' : 'lost' }}</li>
        <li>Timestamp: {{ $round['timestamp'] }}</li>

    </ul>

    <a href="/history">Back to Round History</a>
@endsection
