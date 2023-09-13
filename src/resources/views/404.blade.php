@include('header')
<main>
    <div class="four-o-four">
        <h1>404</h1>
        <div class="quote">
            <p>The page you requested could not be found</p>
            <p>No cheating</p>
        </div>
    </div>

    <div class="">

        <a href="{{ route('welcome') }}" class="button">Go to Homepage</a>

    </div>

</main>
@include('footer')
