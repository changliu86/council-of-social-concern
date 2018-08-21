@extends('layouts.app')

@section('content')
  {{-- Will Change this to ACF when I have some time  --}}
    <div id="hero" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#hero" data-slide-to="0" class="active"></li>
            <li data-target="#hero" data-slide-to="1"></li>
            <li data-target="#hero" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100 hero-image" src="@asset('images/hero-image-1.jpg')" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Council of Social Concern</h5>
                <p>Council of Social Concern</p>
                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 hero-image" src="@asset('images/hero-image-2.jpg')" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Council of Social Concern</h5>
                <p>Council of Social Concern</p>
                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100 hero-image" src="@asset('images/hero-image-3.jpg')" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Council of Social Concern</h5>
                <p>Council of Social Concern</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#hero" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#hero" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
  
    <section class="cta mt-4 mb-5">
        <div class="container">
            <div class="d-inline-flex justify-content-between align-items-center">
                <div class="bg-warning text-white p-2 flex-fill mr-2 cta-item">
                <h4>Donate Now</h4>
                <p>Make this yours. Add images, text and links, or connect data from your collection.</p>
                </div>
                <div class="bg-danger text-white p-2 flex-fill mr-2 cta-item">
                    <h4>Links</h4>
                    <p>Make this yours. Add images, text and links, or connect data from your collection.</p>
                </div>
                <div class="bg-primary text-white p-2 flex-fill mr-2 cta-item">
                    <h4>Work With Us</h4>
                    <p>Make this yours. Add images, text and links, or connect data from your collection.</p>
                </div>
                <div class="bg-info text-white p-2 flex-fill mr-2 cta-item">
                    <h4>Community Directory</h4>
                    <p>Make this yours. Add images, text and links, or connect data from your collection.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="info">
        <div class="container d-flex flex-column justify-content-center align-items-center my-5">
            <h1>WELCOMING YOU HOME</h1>
            <p> 
                Enviada vou mas tao artista boa chorava. Vae sou vim grosseiras voz affirmares sacrifical. Custodioo 
                intencoes deu dignidade mal fio. Conta ligar no rugiu as barra. Denunciava es ir de conquistar ascendendo eu d
                eclaracao. Va concordo da fornecer confesso transpor. Chorava uso soffrer mas medonho abracal hei. Abbadessa 
                desataram respirava rua vil ceo.
            </p>
            <div class="d-flex flex-row">
                <div class="card col-md-4">
                    <img class="card-img-top" src="@asset('images/cta-home-1.jpg')" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">ABOUT OUR COUNCIL</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            
                <div class="card col-md-4">
                    <img class="card-img-top" src="@asset('images/cta-home-2.jpg')" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">OPPORTUNITIES</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            
                <div class="card col-md-4">
                    <img class="card-img-top" src="@asset('images/cta-home-3.jpg')" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">SERVICES</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex flex-column justify-content-center align-items-center my-5">
            <h1>TOGETHER, WE CAN MAKE LIFE BETTER</h1>
            <p> 
                Enviada vou mas tao artista boa chorava. Vae sou vim grosseiras voz affirmares sacrifical. Custodioo 
                intencoes deu dignidade mal fio. Conta ligar no rugiu as barra. Denunciava es ir de conquistar ascendendo eu d
                eclaracao. Va concordo da fornecer confesso transpor. Chorava uso soffrer mas medonho abracal hei. Abbadessa 
                desataram respirava rua vil ceo.
            </p>
            <div class="d-flex flex-row">
                <div class="card col-md-4">
                    <img class="card-img-top" src="@asset('images/cta-home-1.jpg')" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Community Resource Directory</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            
                <div class="card col-md-4">
                    <img class="card-img-top" src="@asset('images/cta-home-2.jpg')" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">GuideStar - Financials, IRS 990 </h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            
                <div class="card col-md-4">
                    <img class="card-img-top" src="@asset('images/cta-home-3.jpg')" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Links</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                        <a href="#" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="help-us">
        <div class="jumbotron jumbotron-fluid">
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <h4>HELP US TO SPREAD OURLOVE AND FAITH</h4>
                <p>I'm a title. Click here to add your own text and edit me.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Donate Now</a>
            </div>
        </div>
    </section>
@endsection
