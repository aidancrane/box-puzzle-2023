@include('puzzles.puzzle-header')
<main>
    <div class="puzzle">

        <h1>SSTV</h1>

        <p class="quote">You can provide others the code at the bottom to allow them to access the same question.</p>

        <p>SSTV (Slow Scan Television) allows amateur radio enthusiasts to transmit and receive images as data over
            radio frequencies. It's a fascinating mode of communication that visualizes images through the transmission
            of analog or digital signals, offering a unique way to share visuals within the amateur radio community.</p>

        <div class="img-container">
            <img src="{{ asset('images/sstv_robot36_example.png') }}" alt="SSTV Example Image">
        </div>


        @if (session('question-2') == true)
            <p class="quote answer">Decoding the audio using ROBOT36 reveals the image and code 221551</p>

            <div class="img-container">
                <img src="{{ asset('images/sstv_robot36_answer_221551.png') }}" alt="SSTV Example Image">
            </div>

        @endif

        <p>In addition to its use in amateur radio, similar technology is employed in satellite weather reporting
            systems. Satellites orbiting the Earth capture data about weather patterns, temperature, humidity, and more.
            This information is transmitted back to Earth, where it's used by meteorologists to create weather
            forecasts, monitor climate changes, and track severe weather events.</p>

        <p>Anyway here is me fucking around with it to make a puzzle. (the sound is quite annoying)</p>


        <audio controls>
            <source src="{{ asset('audio\20230912_172008.wav') }}" type="audio/wav">
            Your browser does not support the audio element.
        </audio>

        <form method="POST" action="{{ route('question2.answer') }}">
            @csrf
            <label for="code">Please enter the answer below to unlock the next question,</label>
            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <input type="text" id="puzzle-answer" name="puzzle-answer" placeholder="Answer...">
            <button id="unlockButton">Unlock</button>
        </form>
        <p class="right-aligned-text">Puzzle code: 396437</p>
    </div>
</main>
@include('footer')
