<section class="counter-section" id="counter">
    <div class="container">
        <div class="counter-grid">
            @foreach($stats as $stat)
                <div class="counter-item wow">
                    <h4>{{ $stat['value'] }}</h4><span>{{ $stat['suffix'] }}</span>
                    <p>{{ $stat['label'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
