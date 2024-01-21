<!-- CARD SECTION -->
<section class="bg-grey">
    <div class="title container">
        <h2 class="text-center">CURRENT SERIES</h2>
    </div>
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
    .title {
        position: relative;
    }

    .title h2 {
        width: 300px;
        background-color: blue;
        position: absolute;
        top: -20px;
    }

    .cardsWrapper {
        padding-top: 40px;
    }

    .singleCard {
        width: calc(100% / 6);
    }

    .singleCard img {
        width: 8em;
    }

    .bg-grey {
        background-color: #303030;
        color: white;
    }

    .singleCard h3 {
        font-size: 1em;
    }
</style>