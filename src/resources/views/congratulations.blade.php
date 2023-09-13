@include('puzzles.puzzle-header')
<main>
    <div class="puzzle">

        <h1>Congratulations</h1>

        <p>Well that was fun I hope.</p>

        <p>Open the real box using the combination from the morse code round.</p>
        
        <div class="img-container">
            <img src="{{ asset('images/unlock_box_combo.svg') }}" alt="Unlock box combo">
        </div>

        @if (session('question-5') == true)
        <p class="answer">445 143 334 678</p>
    @endif

        <p>You will find the tools inside to unlock the final box.</p>

        <div class="rules-link">
            <a href="{{ route('welcome') }}">Back</a>
        </div>

    </div>
</main>
@include('footer')
