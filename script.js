function showContactForm() {
  alert("Ota yhteyttä: laura.makila81@gmail.com");
}
// Funktio, joka näyttää yhteydenottolomakkeen
function showContactForm() {
  document.getElementById('contactForm').style.display = 'block';
}

// Funktio, joka piilottaa yhteydenottolomakkeen
function hideContactForm() {
  document.getElementById('contactForm').style.display = 'none';
}

// Funtiko, luelisää-painike
function toggleText(button) {
  var fullText = button.previousElementSibling.querySelector('.full-text');
  var shortText = button.previousElementSibling.querySelector('.short-text');
  
  if (fullText.style.display === "none") {
      fullText.style.display = "inline"; // Näyttää koko tekstin
      button.textContent = "Näytä vähemmän"; // Muuttaa nappia
  } else {
      fullText.style.display = "none"; // Piilottaa koko tekstin
      button.textContent = "Lue lisää"; // Muuttaa nappia takaisin
  }

}

const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('active'); // Näytä/piilota navigointilista
  hamburger.classList.toggle('open'); // Animaatio hampurilaispainikkeelle
});

