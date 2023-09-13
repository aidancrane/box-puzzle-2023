@include('puzzles.puzzle-header')
<main>
    <div class="puzzle">

        <h1>Cipher</h1>

        <p>Named after the Roman general Julius Caesar, the Caesar cipher is a method of encoding messages by shifting each letter
             of the alphabet a certain number of places down or up the alphabet.</p>

        <p>This may seem generic and easy, and thats because it is.</p>

        <p class="quote">Wkh sdvvzrug wr wkh fxuuhqw era-sxccoh urxqg lv hdvb, exw lq rughu wr pdnh vxuh brx fdq dfwxdoob
             jhw wkh sdvvzrug, L kdyh wr sxw d ordg ri hawud whaw lq wr pdnh lw dfklhydeoh. Dqbzdb, wkh sdvvzrug lv 'Ehq lv d edg iulhqg'.</p>

        @if (session('question-1') == true)
        <p class="quote answer">The password to the current box-puzzle round is easy, but in order to make sure you can actually get the password,
              I have to put a load of extra text in to make it achievable. Anyway, the password is 'Ben is a bad friend'.</p>
        @endif


        <form method="POST" action="{{ route('question1.answer') }}">
            @csrf
            <label for="code">Please enter the answer below to unlock the next question,</label>
            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <input type="text" id="puzzle-answer" name="puzzle-answer" placeholder="Answer...">
            <button id="unlockButton">Unlock</button>
        </form>
        <p class="right-aligned-text">Puzzle code: 714423</p>
    </div>
</main>
@include('footer')
