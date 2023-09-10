@include('header')
<header>
    <h1>box-puzzle 📦</h1>
</header>
<main>
    <div class="puzzle">

        <h1>Question 1</h1>

        Asdf

        <form method="POST" action="{{ route('question-1.answer') }}">
            @csrf
            <label for="code">Please enter the answer below to unlock the next question,</label>
            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <input type="text" id="puzzle-question" name="puzzle-answer" placeholder="Enter puzzle code...">
            <button id="unlockButton">Unlock</button>
        </form>
    </div>
</main>
@include('footer')
