<div class="container-wrapper cloth-bg grey-border-bottom">
    <div class="container margin-top-40 padding-top-50 padding-bottom-30">
        <div class="row margin-bottom-10">
            <div class="col-md-6">
                <h3 class="center">KochAbo wünscht viel <span class="icon icon-heart purple"></span> mit ...</h4>
                <div class="recipe-main-display">
                    <img src="{{$recipe->image720}}" alt="{{$recipe->name}}" />
                    <h2 class="center margin-top-10">{{$recipe->name}}</h2>
                </div>
                <p class="margin-top-20"><span class="glyphicon glyphicon-time margin-right-10"></span>{{$recipe->duration}} Minuten</p>
            </div>
            <div class="col-md-3">
                <h3 class="center">2 × <span class="glyphicon glyphicon-cutlery"></span></h3>
                <table class="table table-striped recipe-table">
                    <tbody>
                    @foreach ($recipe->ingredients as $ingredient)
                        @if ($ingredient->nrOfPersons == 2)
                        <tr>
                            <td>
                                @if ($ingredient->isDeliverable)
                                    <span class="icon icon-check color-kochabo margin-right-10"></span>
                                @else
                                    <span class="icon icon-home margin-right-10"></span>
                                @endif
                                {{$ingredient->quantity}} {{ ($ingredient->quantity > 1 ? $ingredient->unitPlural : $ingredient->unit) }}
                            </td>
                            <td>
                                <a href="#" class="ingredient-link" alt="Mehr über {{$ingredient->name}} auf KochAbo.at">{{$ingredient->name}}</a>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <p class="margin-bottom-0">
                    <span class="icon icon-check color-kochabo margin-right-10"></span>In der Box enthalten<br />
                    <span class="icon icon-home margin-right-10"></span>Solltest du zu Hause haben
                </p>
            </div><!-- end col -->
            <div class="col-md-3">
                <h3 class="center">4 × <span class="glyphicon glyphicon-cutlery"></span></h3>
                <table class="table table-striped recipe-table">
                    <tbody>
                    @foreach ($recipe->ingredients as $ingredient)
                        @if ($ingredient->nrOfPersons == 4)
                        <tr>
                            <td>
                                @if ($ingredient->isDeliverable)
                                    <span class="icon icon-check color-kochabo margin-right-10"></span>
                                @else
                                    <span class="icon icon-home margin-right-10"></span>
                                @endif
                                {{$ingredient->quantity}} {{ ($ingredient->quantity > 1 ? $ingredient->unitPlural : $ingredient->unit) }}
                            </td>
                            <td>
                                <a href="#" class="ingredient-link" alt="Mehr über {{$ingredient->name}} auf KochAbo.at">{{$ingredient->name}}</a>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
</div>

<div class="clear"></div>

<div class="container-wrapper grey-border-bottom">
    <div class="container padding-top-10 padding-bottom-10">
        <div class="row">
            <div class="col-md-4 center">
                <a href="#" class="btn btn-lg btn-success"><i class="glyphicon glyphicon-phone margin-right-20"></i>Gratis Rezepte-App holen!</a>
            </div><!-- end col -->
            <div class="col-md-4 center">
                <a href="#" class="btn btn-lg btn-light"><i class="icon icon-arrow-down margin-right-20"></i>Zur Rezeptbeschreibung</a>
            </div><!-- end col -->
            <div class="col-md-4 center">
                <a href="#" class="btn btn-lg btn-purple"><i class="glyphicon glyphicon-cutlery margin-right-20"></i>Rezepte & Zutaten bestellen</a>
            </div><!-- end col -->
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="container-wrapper cloth-bg grey-border-bottom">
    <div class="container padding-top-50 padding-bottom-30">
        <div class="row">
            <div class="col-md-8">
                <h3 class="center">Und so wird's gemacht...</h3>
                <ul class="cooking-steps-lg">
                    @foreach ($recipe->cookingSteps as $cookingStep)
                        <li>
                            {{$cookingStep->description}}
                        </li>
                    @endforeach
                </ul>
            </div><!-- end col -->
            <div class="col-md-4">
                <h3 class="center">Rezept Teilen</h3>
                <ul class="recipe-actions">
                    <li>
                    </li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div>

<div class="clear"></div>

<div class="container-wrapper container-wrapper-ribbon-teaser grey-border-bottom">
    <div class="container padding-top-10 padding-bottom-10">
        <div class="stage-claim-wrapper padding-left-20 padding-right-20 pull-right center margin-top-10 padding-top-10">
            <h2>KochAbo - einfach kochen.</h2>
            <h4>Wir liefern Dir jede Woche unsere besten Rezepte<br />inklusive frische Zutaten. Abwechslung garantiert!</h4>
            <p class="margin-top-0">
                <a href="#" class="btn btn-lg btn-purple margin-top-10"><i class="glyphicon glyphicon-cutlery margin-right-20"></i>Jetzt Besser Kochen!</a>
            </p>
       </div>
    </div>
</div>

<div class="clear"></div>


