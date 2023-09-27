@extends("layouts.main")
@section("main")
    <div class="container">
        <div class="slide-show">
            <div class="reveal">
                <div class="slides">
                    <section  data-background-image="{{url("frontend/assets/slideimg.png")}}" data-background-size="contain"> </section>
                    <section >Slide 2</section>
                    <section >Slide 3</section>
                    <section >Slide 4</section>
                </div>
            </div>
        </div>



        @livewire("frontend.search-tab")
        <!-- For more settings use the AutoHTML plugin tab ... -->
        <div class="search-zone" >
            <div class="filter-form-container" >
                <div class="search-filter-section" >
                    <div class="nav-nav-tabs" >
                        <div class="tab-actions" >
                            <a class="search-header-tab active-tab" href="#" >
                                <img class="search-tab-img" src="{{url("frontend/assets/tabPieceautoimg.png")}}" />
                                <span class="pi-ces-d-tach-es" >
                                    Pièces détachées </span>
                            </a>
                            <a class="search-header-tab" href="#">
                                <img class="search-tab-img" src="{{url("frontend/assets/tabPneuimg.png")}}" />
                                <span class="pneu" > Pneu </span>
                            </a>
                        </div>
                    </div>
                    <div class="tab-content" >
                        <div class="tab-pieceauto" >
                            <div class="tab-pane-fade-show-active" >
                                <div class="tab-title" >
                                    <div class="tab-content-title" > Démarrer votre recherche </div>
                                </div>
                                <div class="tab-filter" >
                                    <div class="tab-radio-group" >
                                        <x-engin.engin-list/>
                                    </div>

                                </div>
                            </div>
                            <div class="filterformcontainer" >
                                <div class="select-group">
                                    <div class="dropdown">
                                        <label for="marque" name="marque" class="label" >Diamètre </label>
                                        <select id="marque" class="select-input">
                                            <option value="12">16</option>
                                        </select>
                                    </div>
                                    <div  class="dropdown">
                                        <div class="label" >
                                            Diamètre </div>
                                        <select class="select-input" >
                                            <option value="12">16</option>
                                        </select>
                                    </div>
                                    <div class="dropdown" >
                                        <div class="label" >
                                            Diamètre </div>
                                        <select class="select-input" >
                                            <option value="12">16</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="search-button" >
                                    <svg class="searchicon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="searchbtntext" >
                                        Rechercher </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <!-- For more settings use the AutoHTML plugin tab ... -->
        <div class="product-section" >
            <div class="section-container" >
                <div class="section-header" >
                    <div class="section-title" >
                        <div class="redindicator" >
                        </div>
                        <div class="product-section-title" >
                            Produits recents </div>
                    </div>
                    <div class="section-navigation" >
                        <div class="navigation-button active-tab" >
                            <div class="btntitle" >
                                Pièces détachées </div>
                        </div>
                        <div class="navigation-button" >
                            <div class="btntitle" >
                                Pneu </div>
                        </div>
                        <div class="navigation-button" >
                            <div class="btntitle" >
                                Produits &amp; Accessoires </div>
                        </div>
                    </div>
                </div>
                <div class="section-body" >
                    <div class="product-list" >
                        <div class="product-item">
                            <div class="product-content">
                                <div class="product-header">
                                    <div class="product-imagecontainer">
                                        <img class="prduct-image" src="{{url("frontend/assets/prduct-image.png")}}" />
                                    </div>
                                    <div class="product-title">
                                        Design Leadership: How Top Design Leaders Build and Grow Successful...
                                    </div>
                                </div>
                                <div class="price-container">
                                    <div class="oldprice">
                                        <div class="oldpricewith-devise">250458 FCFA</div>
                                    </div>
                                    <div class="price-conatiner">
                                        <div class="price">
                                            <div class="pricewithdevise">25 5210 FCFA</div>
                                        </div>

                                        <a href="#" class="shoppongcartbutton">
                                            <span>Détails</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item">
                            <div class="product-content">
                                <div class="product-header">
                                    <div class="product-imagecontainer">
                                        <img class="prduct-image" src="{{url("frontend/assets/prduct-image.png")}}" />
                                    </div>
                                    <div class="product-title">
                                        Design Leadership: How Top Design Leaders Build and Grow Successful...
                                    </div>
                                </div>
                                <div class="price-container">
                                    <div class="oldprice">
                                        <div class="oldpricewith-devise">250458 FCFA</div>
                                    </div>
                                    <div class="price-conatiner">
                                        <div class="price">
                                            <div class="pricewithdevise">25 5210 FCFA</div>
                                        </div>

                                        <a href="#" class="shoppongcartbutton">
                                            <span>Détails</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="product-slide-navigation">
                        <div class="slide-navigation-left">
                            <svg
                                class="chevron-left"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M15 18L9 12L15 6"
                                    stroke="white"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>
                        <div class="slide-navigation-right">
                            <svg
                                class="chevron-right"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M9 18L15 12L9 6"
                                    stroke="white"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>
                    </div>


            </div>
        </div>

        </div>





        <div class="conseils-astuce">
            <div class="section-conseil-container">
                <div class="section-conseil-header">
                    <div class="left-header">
                        <div class="yellowindicator"></div>
                        <div class="section-conseil-title">Les conseils REPARO</div>
                    </div>
                    <a href="#" class="gotoallarticle">Voir tous les articles</a>
                </div>
                <div class="article-items">
                    <a href="#" class="article-item">
                        <div class="articleimage">
                            <img class="article-preview" src="{{url("frontend/assets/article-preview.png")}}" />
                        </div>
                        <div class="articledescription">
                            <div class="article-title">Comment fgaire une vidange reussis</div>
                            <div class="article-little-description">
                                Design Leadership: How Top Design Leaders Build and Grow
                                Successful...
                            </div>
                        </div>
                    </a>
                    <div class="article-item">
                        <div class="articleimage">
                            <img class="article-preview" src="{{url("frontend/assets/article-preview.png")}}" />
                        </div>
                        <div class="articledescription">
                            <div class="article-title">Comment fgaire une vidange reussis</div>
                            <div class="article-little-description">
                                Design Leadership: How Top Design Leaders Build and Grow
                                Successful...
                            </div>
                        </div>
                    </div>
                    <div class="article-item">
                        <div class="articleimage">
                            <img class="article-preview" src="{{url("frontend/assets/article-preview.png")}}" />
                        </div>
                        <div class="articledescription">
                            <div class="article-title">Comment fgaire une vidange reussis</div>
                            <div class="article-little-description">
                                Design Leadership: How Top Design Leaders Build and Grow
                                Successful...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>




@endsection

@push("pagecss")
    <link rel="stylesheet" href="{{url("frontend/plugins/revealjs/dist/reveal.css")}}">
    <link rel="stylesheet" href="{{url("frontend/plugins/revealjs/dist/theme/white.css")}}">
@endpush
@push("pagejs")
    <script type="text/javascript" src="{{url("frontend/plugins/revealjs/dist/reveal.js")}}"></script>

        <script>
            // More info about initialization & config:
            // - https://revealjs.com/initialization/
            // - https://revealjs.com/config/
            Reveal.initialize({
            hash: true,

            // Learn about plugins: https://revealjs.com/plugins/
           // plugins: [ RevealMarkdown, RevealHighlight, RevealNotes ]
        });
    </script>

@endpush

