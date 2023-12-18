<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">テーブル</h2>
                </div>

                <div class="row">
                    @foreach($tes as $test)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item" style="text-align:center">
                            <div class="portfolio-caption" style="margin-top:10px">
                                <div class="portfolio-caption-heading">{{ $tes->id }}</div>
                                <div class="portfolio-caption-heading">{{ $tes->name }}</div>
                                <div class="portfolio-caption-heading">{{ $tes->tensu }}</div>
                                <div class="portfolio-caption-heading">{{ $tes->questionText }}</div>
                                <div class="portfolio-caption-heading">{{ $tes->updTime }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
