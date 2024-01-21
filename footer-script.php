<!-- Template Main JS File -->
<script>
    $(document).ready(function() {
      $('.navbar-toggler').click(function() {
          $('body').addClass("menu-active");
      });
      $('.background-layer').click(function() {
          $('body').removeClass("menu-active");
          $('.navbar-collapse').removeClass("show");
      });
      
      // Get the clickable element and its parent
      // var clickableElement = document.getElementById('clickableElement');
      // var parentElement = document.getElementById('parentElement');

      // // Add a click event listener to the clickable element
      // clickableElement.addEventListener('click', function() {
      // // Add a class to the parent element
      // parentElement.classList.add('highlighted');
      // });
    })
    document.addEventListener('DOMContentLoaded', function() {
        var searchBar = document.getElementById('searchBar');
        var toggleButton = document.getElementById('toggleButton');
        var toggleButtonIcon = document.getElementById('toggleButton i');

        toggleButton.addEventListener('click', function() {
            // Toggle the visibility of the search bar
            if (searchBar.style.display === 'none') {
                // searchBar.style.display = 'block !important';
                searchBar.style.cssText = 'display: block !important;';
                $("#toggleButton .fa").removeClass("fa-search");
                $("#toggleButton .fa").addClass("fa-close");
            } else {
                // searchBar.style.display = 'none !important';
                searchBar.style.cssText = 'display: none !important;';
                $("#toggleButton .fa").removeClass("fa-close");
                $("#toggleButton .fa").addClass("fa-search");
            }
        });
    });
  </script>