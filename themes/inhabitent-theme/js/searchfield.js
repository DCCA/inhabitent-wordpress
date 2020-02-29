/**
 * Hide and expand the input field of the search bar in header
 */
(function() {
    const searchBtn = document.querySelector('.search-submit');
    const searchInput = document.getElementById('search-field-header');
    console.log(searchBtn);
    console.log(searchInput);
    searchBtn.addEventListener('click', event => {
      event.preventDefault();
      console.log('clicked');
      searchInput.classList.toggle('search-field-hidden');
      searchInput.classList.toggle('search-field-show');
    })
  })();