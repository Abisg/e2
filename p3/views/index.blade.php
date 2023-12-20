@extends('templates/master')

@section('content')
    <h2>Instructions</h2>
    <p>Select a word. If you guess correctly, you win!</p>

    <form method="POST" action="/process">
        <input type="radio" id="community" name="choice" value="community"><label for="community">Community</label>
        <input type="radio" id="develop" name="choice" value="develop"><label for="develop">Develop</label>
        <input type="radio" id="environment" name="choice" value="environment"><label
            for="environment">Environment</label>
        <input type="radio" id="excellent" name="choice" value="excellent"><label for="excellent">Excellent</label>

        <button type="submit" class="submit-btn">Guess</button>
    </form>

    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if ($choice)
        <div class="answer">
            You guessed {{ $choice }}. The correct word was {{ $correct }}.
        </div>

        @if ($result)
            <span class="won"> You guessed correctly! </span>
        @else
            <span class="lost"> Incorrect. Please try again. </span>
        @endif
    @endif

@endsection
