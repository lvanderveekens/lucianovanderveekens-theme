(function ($) {
  selectExperience(0);
  console.log("app.js LOADED");

  lightbox.option({
    'resizeDuration': 0,
    'imageFadeDuration': 0,
    'fadeDuration': 300,
  })
})(jQuery);

function selectExperience(index) {
  let experiences = document.querySelectorAll(`[data-experience-index]`);
  for (let i = 0; i < experiences.length; i++) {
    let experience = experiences[i];
    if (experience.getAttribute("data-experience-index") == index) {
      experience.classList.add("selected");
    } else {
      experience.classList.remove("selected");
    }
  }
}
