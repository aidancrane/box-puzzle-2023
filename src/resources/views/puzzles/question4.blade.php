@include('puzzles.puzzle-header')
<main>
    <div class="puzzle">

        <h1>Maze</h1>

        <p>The first maze was just a warm-up. Here is the real maze.</p>

        <div class="img-container">
            <img src="{{ asset('images/maze2_numbered.png') }}" alt="Maze">
        </div>

        @if (session('question-4') == true)
            <p class="answer">Following the shortest path in the maze reveals the code 00574971</p>

            <div class="img-container">
                <img src="{{ asset('images/maze2_numbered_solution_00574971.png') }}" alt="Maze Solution">
            </div>
        @endif


        <form method="POST" action="{{ route('question4.answer') }}">
            @csrf
            <label for="code">Please enter the answer below to unlock the next question,</label>
            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <input type="text" id="puzzle-answer" name="puzzle-answer" placeholder="Answer...">
            <button id="unlockButton">Unlock</button>
        </form>
        <p class="right-aligned-text">Puzzle code: 001149</p>
    </div>
</main>
@include('footer')
