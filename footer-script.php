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
  </script>