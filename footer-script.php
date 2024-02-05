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
      
      $('body').click(function (e) {
        if ($(e.target).is($("#listProduk"))) {
            
        } else {
            $('#listProduk').html("")
        }
      })
      $('#searchProd').keyup(function(){
          // $('#dropdownData').dropdown()
          $('#loading').show();
          var searchProd = $('#searchProd').val();
          console.log(searchProd)
          if(searchProd != ""){
              $.ajax({
                  url: "search-list.php?search=" + $('#searchProd').val(),
                  type: "GET",
                  dataType: "html",
                  success: function (data) {  
                      console.log(data);  
                      $('#loading').hide();
                      $('#listProduk').html(data);
                  },
                  error: function (xhr, status) {
                  },
                  complete: function (xhr, status) {
                  }
              });
          }else{
              $('#listProduk').html("")
          }
      });
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