const primaryNav = document.querySelector('.primary-navigation');
const navToggle = document.querySelector('.mobile-nav-toggle');
const toggleIcon = navToggle.querySelector('i');

primaryNav.setAttribute('data-visible', 'false');

navToggle.addEventListener('click', () => {
  const visibility = primaryNav.getAttribute('data-visible');
  if (visibility === 'false') {
    primaryNav.setAttribute('data-visible', true);
    navToggle.setAttribute('aria-expanded', true);
    toggleIcon.classList.remove('fa-bars');
    toggleIcon.classList.add('fa-xmark')
  } else if (visibility === 'true') {
    primaryNav.setAttribute('data-visible', false);
    navToggle.setAttribute('aria-expanded', false);
    toggleIcon.classList.remove('fa-xmark');
    toggleIcon.classList.add('fa-bars')
  }
})