@include('header')
<header>
    <h1>box-puzzle 📦</h1>
</header>
<main>
    <div class="puzzle">

        <h1>Puzzles</h1>
        <ol>
            @if (session('current-puzzle') == 0)
            <li><a href="{{ route('question1.question') }}">Cipher</a></li>
            @endif
            @if (session('current-puzzle') > 1)
            <li>puzzle question goes here. 2</li>
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
    </div>
</main>
@include('footer')
