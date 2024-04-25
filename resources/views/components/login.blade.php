<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Connexion Administrateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulaire de connexion administrateur -->
                <form method="POST" id="adminLoginForm" action="{{ route('login') }}" >
                    @csrf
                    <div class="form-group">
                        <label for="adminemail">Email d'utilisateur</label>
                        <input type="email" class="form-control" id="adminemail" name="email" placeholder="Entrez votre email">
                    </div>
                    <div class="form-group">
                        <label for="adminPassword">Mot de passe</label>
                        <input type="password" class="form-control" id="adminPassword" name="mdp" placeholder="Entrez votre mot de passe">
                    </div>
                    <button type="submit" class="btn btn-warning" id="loginButton">Se connecter</button>

                </form>
                <!-- Affichage des erreurs -->
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('signupButton').addEventListener('click', function() {
        // Afficher la fenêtre modale de connexion administrateur
        $('#loginModal').modal('show');
    });
</script>
