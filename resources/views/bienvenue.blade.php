@extends("layout.master")

@section('title')
    Accueil
@endsection

@section('content')
    <!--Start project here-->
    <div class="container my-2">
        <div class="row">
            <!-- div 1 -->
            <div class="col-md-3">
                <div class="view overlay hm-white-light z-depth-1-half">
                    <img src="{{asset('img/logo-diademe.png')}}" class="img-fluid" alt="" style="margin-top: 2rem;">
                </div>
                <br>
            </div>
            <!-- div 2 -->
            <!--Main information-->
            <div class="col-md-9">
                <h2 class="h2-responsive">Lycée Diadème, Te Tara O Maiao (Pirae)</h2>
                <hr>
                <p style="text-align:justify">Bienvenue sur le site du club du lycée Diadème, Te Tara O Maiao !</p>
                <p style="text-align:justify">Nous sommes un lycée public, qui accueille nos élèves à participer aux activités que nous proposons.
                Une association sportive a été mise en place pour renforcer l'esprit d'équipe et maintenir en forme les étudiants.</p>

                <p style="text-align:justify">« L’AS, ce n'est pas que le mercredi après-midi... ». L’Association Sportive du Lycée Diadème est ravie de démarrer ses activités.</p>

                <p style="text-align:justify">Suite à cela, nous avons pu réfléchir sur l'ouverture d'un club pour représenter notre lycée.</p>
                <a href="https://lycee2pirae.com/" class="btn btn-primary my-2" target="_blank">
                    Plus d'info!
                </a>

                {{--Horaire vie scolaire--}}
                <h2 class="mt-5">Horaire de la vie scolaire</h2>
                <hr>
                <img src="img/viescolaire.jpg" alt="" class="w-75 mb-2">
            </div>
        </div>
    </div>
@endsection
