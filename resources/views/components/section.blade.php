<section class="hero">
  <div class="container">
    <div class="row">
        <div class="col-md-5"> 
            <div class="texte position-absolute top-10 start-11" id="dynamicText">
                <h2 class="titre">WELCOME IN SAFE RIDE <br> FOR YOUR STUDENT CHILDREN</h2>
                <p id="description">Nous sommes dédiés à assurer la sécurité et le confort de vos <br> enfants pendant leur trajet vers l'école. Chez SafeRide <br> nous  comprenons l'importance de fournir un service  <br> de transport fiable et sécurisé pour les élèves.</p>
            </div>
        </div>
            <div class=" col-md-9">
                <img src="images/kids.svg" width="450px" height="450px" alt="" class="">
            </div>
            <div class="col-md-3 offset-md-8">
            <img id="second-image-column" class="img2" src="images/bus.gif" alt="End Image"  width="500px" height="500px" class=" ">
        </div>
    </div>
  </div>
  <script>
    var descriptions = [
        "Chez SafeRide Kids, la sécurité et le bien-être de vos enfants<br> sont notre  priorité absolue. Nous comprenons les préoccupations <br> des parents en matière de transport scolaire, c'est pourquoi <br>  nous nous engageons à offrir un service fiable, sûr et professionnel..",
        "Notre flotte de bus scolaires modernes et bien entretenus est <br>spécialement  conçue pour assurer le confort et la sécurité de vos <br> enfants tout  au long de leur trajet vers et depuis l'école. <br> Nos chauffeurs qualifiés et expérimentés sont dévoués <br> à assurer un voyage  agréable et sécurisé pour chaque élève..",
        "La sécurité est notre priorité absolue. Nos véhicules sont équipés <br> des dernières technologies de sécurité,et nous mettons en œuvre <br>  des protocoles  stricts  pour garantir un environnement <br>sécurisé à bord.  De plus, nos conducteurs sont formés <br> pour réagir efficacement  à toute situation d'urgence."
    ];
    var currentIndex = 0;
    function updateDescription() {
        var descriptionElement = document.getElementById('description');
        descriptionElement.innerHTML = descriptions[currentIndex];
        currentIndex = (currentIndex + 1) % descriptions.length;
    }
    setInterval(updateDescription, 4000);
    function updateText() {
        var dynamicText = document.getElementById('dynamicText');
        if (window.innerWidth < 568) {
            dynamicText.innerHTML = '<h2 class="titre">WELCOME IN SAFE RIDE  FOR YOUR STUDENT CHILDREN</h2>';
        } else {
            dynamicText.innerHTML = '<h2 class="titre">WELCOME IN SAFE RIDE <br> FOR YOUR STUDENT CHILDREN</h2><p id="description">Nous sommes dédiés à assurer la sécurité et le confort de vos <br> enfants pendant leur trajet vers l\'école. Chez SafeRide <br> nous comprenons l\'importance de fournir un service <br> de transport fiable et sécurisé pour les élèves.</p>';
        }
    }
    window.onload = updateText;
    window.onresize = updateText;
  </script>
</section>