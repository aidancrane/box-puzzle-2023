@include('puzzles.puzzle-header')
<main>
    <div class="puzzle">

        <h1>Maze</h1>

        <p>Everyone loves a maze right?</p>

        <p>Travel top to bottom taking the shortest path, any numbers you pass through are part of the solution at the end.</p>
        
        <div class="img-container">
            <img src="{{ asset('images/maze1_numbered.png') }}" alt="Maze">
        </div>

        @if (session('question-3') == true)

        <p class="answer">Following the shortest path in the maze reveals the code 4446</p>

            <div class="img-container">
                <img src="{{ asset('images/maze1_numbered_solution_4446.png') }}" alt="Maze Solution">
            </div>

        @endif


        <form method="POST" action="{{ route('question3.answer') }}">
            @csrf
            <label for="code">Please enter the answer below to unlock the next question,</label>
            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <input type="text" id="puzzle-answer" name="puzzle-answer" placeholder="Answer...">
            <button id="unlockButton">Unlock</button>
        </form>
        <p class="right-aligned-text">Puzzle code: 104920</p>
    </div>
</main>
@include('footer')
