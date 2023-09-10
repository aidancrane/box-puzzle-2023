@include('header')
<header>
    <h1>box-puzzle 📦</h1>

    <p>{{ $welcomeMessage }}</p>
</header>
<main>
    <div class="puzzle">

        <h1>Rules</h1>
        <ul>
            <li>Destructive entry into the box is not allowed</li>
            <li>Yellow zip-ties can removed only when all locks on the current lid have been opened</li>
            <li>Reverse engineering the website is not allowed</li>
            <li>Access the box to win</li>
        </ul>

        <h2>Tips for Playing</h2>
        <ul>
            <li>Tools will be provided when appropriate</li>
            <li>The first layer easier than the second</li>
        </ul>

        <form method="POST" action="{{ route('check.password') }}">
            @csrf
            <label for="code">To access the puzzles you will need the code,</label>
            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <input type="text" id="password" placeholder="Enter starter code...">
            <button id="unlockButton">Unlock</button>
        </form>
    </div>
</main>
@include('footer')
