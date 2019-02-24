export default {
  init() {
    // JavaScript to be fired on all pages
    (function() {
      const navToggle = document.querySelector('.nav__toggle');
      const navList = document.querySelector('.nav__list');
      const navAction = function() {
        navToggle.classList.toggle('open');
        navList.classList.toggle('open');
      }
    
      // Arrow functionはThisを束縛しない -
      navToggle.addEventListener('click', (event) => {
        navAction(event);
      });
    
      navList.addEventListener('click', (event) => {
        navAction(event);
      });
    }());
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
