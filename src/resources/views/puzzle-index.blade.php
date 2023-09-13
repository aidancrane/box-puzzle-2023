@include('header')
<header>
    <h1>box-puzzle 📦</h1>
</header>
<main>
    <div class="puzzle">

        <h1>Puzzles</h1>
        <ol>
            <li><a href="{{ route('question1.question') }}">Cipher</a></li>
            @if (session('question-1') == true)
            <li><a href="{{ route('question2.question') }}">Slow Scan TV</a></li>
            @endif
            @if (session('question-2') == true)
            <li><a href="{{ route('question3.question') }}">Maze</a></li>
            @endif
            @if (session('question-3') == true)
            <li><a href="{{ route('question4.question') }}">Maze 2</a></li>
            @endif
        </ol>

        <h2>Unlock Puzzles</h2>

        <form method="POST" action="{{ route('check.puzzle-advance') }}">
            @csrf
            <label for="code">If you know a puzzle code enter it here,</label>
            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <input type="text" id="password" name="puzzle-code" placeholder="Enter puzzle code...">
            <button id="unlockButton">Unlock</button>
        </form>

        <div class="rules-link">
            <a href="{{ route('check.rules') }}">I would like to read the rules again.</a>
        </div>

    </div>
</main>
@include('footer')
