@include('header')
<main>
    <div class="four-o-four">
        <h1>404</h1>
        <ul>
            <li>The page you requested could not be found</li>
        </ul>
        <a href="{{ route('welcome') }}" class="button">Go to Homepage</a>
    </div>
</main>
@include('footer')
