// Fade-in des sections au scroll
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('sectionAnimation--fadeIn');
        return;
      }
    });
  }, {
    threshold: [0.10]
});
  
  const sectionAnimation = document.querySelectorAll('.sectionAnimation');

  sectionAnimation.forEach((element) => observer.observe(element));


// Animation des titres au scroll
const observerTitle = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('titreAnimation--scroll');
        return;
      }

    });
  });
  
  const titreAnimation = document.querySelectorAll('.titreAnimation');
  titreAnimation.forEach((element) => observerTitle.observe(element));
