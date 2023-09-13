@include('puzzles.puzzle-header')
<main>
    <div class="puzzle">

        <h1><s>Maze 3</s> Code</h1>

        <p class="quote">The website did let me make an even bigger maze but I thought it was a bit mean at that point.</p>

        <p>This is the last question online before I let you have access to the box, you've made it this far.</p>

        <p>It's another audio question.</p>

        <audio controls>
            <source src="{{ asset('audio\morsecode_5jf5mrkhvodo4ufl2a52336mg3.wav') }}" type="audio/wav">
            Your browser does not support the audio element.
        </audio>

        @if (session('question-5') == true)
            <p class="answer">..-. --- ..- .-.  ..-. --- ..- .-.  ..-. .. ...- .  --- -. .  ..-. --- ..- .-.  - .... .-. . .  ..-. --- ..- .-.  ..-. --- ..- .-.  - .... .-. . .  ... .. -..-  ... . ...- . -.  . .. --. .... -
                Original Text: four four five one four three four four three six seven eight </p>
        @endif


        <form method="POST" action="{{ route('question5.answer') }}">
            @csrf
            <label for="code">Please enter the answer below to unlock the next question,</label>
            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <input type="text" id="puzzle-answer" name="puzzle-answer" placeholder="Answer...">
            <button id="unlockButton">Unlock</button>
        </form>
        <p class="right-aligned-text">Puzzle code: 990914</p>
    </div>
</main>
@include('footer')
