@extends("layout.master")

@section('title')
    Contact
@endsection

@section('content')
    <!-- Bootstrap 5 Contact Form Snippet -->

    <div class="container px-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 rounded-3 shadow-lg">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="fw-light mb-5">
                                <b class="h1"><u>Formulaire de contact</u></b>
                                <p class="my-2">Vous souhaitez nous joindre ? Envoyez-nous un message !</p>
                            </div>
                        </div>

                        <!-- * * * * * * * * * * * * * *
                        // * * SB Forms Contact Form * *
                        // * * * * * * * * * * * * * * *
                        -->

                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                            <!-- Name Input -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                                <label for="name">Nom</label>
                                <!-- Invalide -->
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nom requis.</div>
                            </div>

                            <!-- Email Input -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="emailAddress" type="email" placeholder="Adresse-mail" data-sb-validations="required,email" />
                                <label for="emailAddress">Adresse-mail</label>
                                <!-- Invalide -->
                                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Adresse-mail requis.</div>
                                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Adresse-mail non valide.</div>
                            </div>

                            <!-- Message Input -->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <!-- Invalide -->
                                <div class="invalid-feedback" data-sb-feedback="message:required">Message requis.</div>
                            </div>

                            <!-- Envoi de message réussi -->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Succès: Envoie de message réussi !</div>
                                </div>
                            </div>

                            <!-- Message d'erreur d'envoi -->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Erreur: Message non envoyé !</div>
                            </div>

                            <!-- Bouton envoyé -->
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Envoyer</button>
                            </div>
                        </form>
                        <!-- Fin du formulaire -->

                        <!-- CDN Link to SB Forms Scripts -->
                        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
