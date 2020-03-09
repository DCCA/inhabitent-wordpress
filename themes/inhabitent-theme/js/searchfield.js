/**
 * Hide and expand the input field of the search bar in header
 */
(function() {
    const searchBtn = document.querySelector('.search-submit');
    const searchInput = document.getElementById('search-field-header');
    searchBtn.addEventListener('click', event => {
      event.preventDefault();
      searchInput.classList.toggle('search-field-hidden');
      searchInput.classList.toggle('search-field-show');
    })
    searchBtn.addEventListener('blur', event => {
      event.preventDefault();
      searchInput.classList.toggle('search-field-hidden');
      searchInput.classList.toggle('search-field-show');
    })
  })();
