console.log("coucou")

// Create the observer like the examples above
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('sectionAnimation--fadeIn');
        return;
      }
  
      entry.target.classList.remove('sectionAnimation--fadeIn');
    });
  }, {
    threshold: [0.5]
});
  
  // Get multiple elements instead of a single one using "querySelectorAll"
  const sectionAnimation = document.querySelectorAll('.sectionAnimation');
  
  // Loop over the elements and add each one to the observer
  sectionAnimation.forEach((element) => observer.observe(element));

console.log(sectionAnimation)