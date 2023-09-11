@include('header')
<header>
    <h1>box-puzzle 📦</h1>

    <p>{{ $welcomeMessage }}</p>
</header>
<main>
    <div class="puzzle">

        @include('rules')

        <form method="POST" action="{{ route('check.password') }}">
            @csrf
            <label for="code">To access the puzzles you will need the code,</label>
            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <input type="text" id="password" name="password" placeholder="Enter starter code...">
            <button id="unlockButton">Unlock</button>
        </form>
    </div>
</main>
@include('footer')
