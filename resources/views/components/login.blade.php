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
          <form>
            <div class="form-group">
              <label for="adminemail">email d'utilisateur</label>
              <input type="text" class="form-control" id="adminemail" placeholder="Entrez votre email">
            </div>
            <div class="form-group">
              <label for="adminPassword">Mot de passe</label>
              <input type="password" class="form-control" id="adminPassword" placeholder="Entrez votre mot de passe">
            </div>
            <button type="submit" class="btn btn-warning">Se connecter</button>
          </form>
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