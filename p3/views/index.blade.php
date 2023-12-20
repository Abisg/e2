@extends('templates/master')

@section('content')

    <a href="/history">Game History</a>
    <h2>Instructions</h2>
    <p>Select a word. If you guess correctly, you win!</p>

    <form method="POST" action="/process">
        <input type="radio" id="community" test="first-word" name="choice" value="community"><label
            for="community">Community</label>
        <input type="radio" id="develop" test="second-word" name="choice" value="develop"><label
            for="develop">Develop</label>
        <input type="radio" id="environment" test="third-word" name="choice" value="environment"><label
            for="environment">Environment</label>
        <input type="radio" id="excellent" test="fourth-word" name="choice" value="excellent"><label
            for="excellent">Excellent</label>

        <button type="submit" test="submit-btn" class="submit-btn">Guess</button>
    </form>

    @if ($app->errorsExist())
        <div test='validation-outcome' class='error-alert-alert-danger'>
            @foreach ($app->errors() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @if ($choice)
        <div test="answer-div" class="answer">
            You guessed {{ $choice }}. The correct word was <span test='outcome'> {{ $correct }}.</span>
            @if ($result)
                <span test='won-outcome' class="won"> You guessed correctly! </span>
            @else
                <span test='lost-outcome' class="lost"> Incorrect. Please try again. </span>
            @endif
        </div>
    @endif

@endsection
