const menuLinks = document.querySelectorAll('nav a');
const sections = document.querySelectorAll('body > section');

window.addEventListener('scroll', () => {
  sections.forEach((section, key) => {
    const bounding = section.getBoundingClientRect();
    if (bounding.bottom >= 0 && bounding.bottom <= window.innerHeight) {
      menuLinks.forEach(a => a.classList.remove('active'));
      const link = document.querySelector(`a[href="#${section.id}"]`);
      link.classList.add('active');
    }
  });
});
