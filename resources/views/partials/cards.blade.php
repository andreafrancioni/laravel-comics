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