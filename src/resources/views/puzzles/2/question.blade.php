@include('puzzles.puzzle-header')
<main>
    <div class="puzzle">

        <h1>SSTV</h1>

        <p class="quote">You can provide others the code at the bottom to allow them to access the same question.</p>

        <p>In the amateur radio world SSTV allows you to send images as data to each other over amateur radio.</p>

        <p>This next question requires an app. To make this easier I have the app installed which you can use.</p>

        <audio controls>
            <source src="{{ asset('audio\20230912_172008.wav') }}" type="audio/wav">
          Your browser does not support the audio element.
        </audio>

        <form method="POST" action="{{ route('question2.answer') }}">
            @csrf
            <label for="code">Please enter the answer below to unlock the next question,</label>
            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <input type="text" id="puzzle-answer" name="puzzle-answer" placeholder="Answer...">
            <button id="unlockButton">Unlock</button>
        </form>
        <p class="right-aligned-text">Puzzle code: 396437</p>
    </div>
</main>
@include('footer')
