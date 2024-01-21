<!-- CARD SECTION -->
<section class="bg-grey">
    <h2>CURRENT SERIES</h2>
    <div class="cardsWrapper container d-flex flex-wrap justify-content-center">
        @foreach ($fumetti as $fumetto)
        <div class="singleCard">
            <img src="{{ $fumetto["thumb"] }}" alt="">
            <h3>{{strtoupper($fumetto["title"])}}</h3>
        </div>
        @endforeach
    </div>
</section>

<style>
    .singleCard img {
        width: 8em;
    }

    .singleCard {
        background-color: #303030;
        color: white;
    }

    .singleCard h3 {
        font-size: 1em;
    }
</style>