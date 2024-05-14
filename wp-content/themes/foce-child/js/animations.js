console.log("coucou")

// Fade-in des sections au scroll
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('sectionAnimation--fadeIn');
        return;
      }
  
      //entry.target.classList.remove('sectionAnimation--fadeIn');
    });
  }, {
    threshold: [0.10]
});
  
  // Get multiple elements instead of a single one using "querySelectorAll"
  const sectionAnimation = document.querySelectorAll('.sectionAnimation');
  // Loop over the elements and add each one to the observer
  sectionAnimation.forEach((element) => observer.observe(element));




// Animation des titres au scroll
const observerTitle = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('titreAnimation--scroll');
        return;
      }
      //entry.target.classList.remove('titreAnimation--scroll');

    });
  });
  
  const titreAnimation = document.querySelectorAll('.titreAnimation');
  titreAnimation.forEach((element) => observerTitle.observe(element));
