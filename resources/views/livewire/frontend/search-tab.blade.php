<div class="search-zone">
    <div class="filter-form-container" >
        <div class="search-filter-section" >
            <div class="nav-nav-tabs" >
                <div class="tab-actions" >
                    <a class="search-header-tab @if($isSearchPiece==true) active-tab @endif" href="#" >
                        <img class="search-tab-img" src="{{url("frontend/assets/tabPieceautoimg.png")}}" />
                        <span> Pièces détachées </span>
                    </a>

                    <a class="search-header-tab @if($isSearchPneu==true) active-tab @endif"  href="#">
                        <img class="search-tab-img" src="{{url("frontend/assets/tabPneuimg.png")}}" />
                        <span > Pneu </span>
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

                    @if($isSearchPiece==true)
                    <div id="recherchePiece" class="filterformcontainer" >
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
@endif
                  @if($isSearchPneu==true)
                    <div id="recherchePneu" class="filterformcontainer" >
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
@endif
                </div>
            </div>
        </div>
    </div>
</div>
