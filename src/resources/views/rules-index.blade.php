@include('header')
<header>
    <h1>box-puzzle 📦</h1>
</header>
<main>
    <div class="puzzle">

        @include('rules')

        <div class="rules-link">
            <a href="{{ route('welcome') }}">I understand</a>
        </div>

    </div>
</main>
@include('footer')
