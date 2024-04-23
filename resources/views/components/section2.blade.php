<section class="full-width-image position-relative">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="slider">
                <img src="images/school2.jpg" alt="Full-width Image" class=" img-fluid custom-height">
                <img src="images/school3.jpg" alt="Full-width Image" class=" img-fluid custom-height">
                <img src="images/school4.jpg" alt="Full-width Image" class=" img-fluid custom-height">
                <img src="images/school5.jpg" alt="Full-width Image" class=" img-fluid custom-height">
            </div>
                <div class="image-text position-absolute top-37 start-40 translate-middle text-center text-light">
                    <p>Nous sommes dédiés à assurer la sécurité et le confort de vos enfants pendant leur trajet vers l'école. Chez SafeRide, nous comprenons l'importance de fournir un service de transport fiable et sécurisé pour les élèves. le confort de vos enfants pendant leur trajet vers l'école. Chez SafeRide, nous comprenons l'importance de fournir un service de transport fiable et sécurisé pour les élèves.
                        Nous sommes dédiés à assurer la sécurité et le confort de vos enfants pendant leur trajet vers l'école. Chez SafeRide, nous comprenons l'importance de fournir un service de transport fiable et sécurisé pour les élèves. le confort de vos enfants pendant leur trajet vers l'école. Chez SafeRide, nous comprenons l'importance de fournir un service de transport fiable et sécurisé pour les élèves.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
  const slider = document.querySelector(".slider");
  const images = document.querySelectorAll(".slider img");
  let currentIndex = 0;

  function showImage(index) {
    slider.style.transform = `translateX(-${index * 100}%)`;
  }

  function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
  }

  setInterval(nextImage, 3000); 
});
// JavaScript code to create the slider
document.addEventListener('DOMContentLoaded', function () {
  const slider = document.querySelector('.about-us-img .slider-us');
  const images = slider.querySelectorAll('img');
  let currentImage = 0;

  function showNextImage() {
    images[currentImage].style.display = 'none';
    currentImage = (currentImage + 1) % images.length;
    images[currentImage].style.display = 'block';
  }

  setInterval(showNextImage, 2000); 
});
    </script>
</section>