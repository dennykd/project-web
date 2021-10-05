<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    // $('#tabel-user').DataTable();
  });
</script>


   <script type="text/javascript">
      const nav = document.querySelector('nav');
      const navbrand = document.querySelector('.navbar-brand');
      const navtext = document.querySelector('.nav-link');
      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 50) {
          nav.classList.add('bg-light', 'shadow');
          navbrand.classList.add('text-black');
          navtext.classList.add('text-black');
          navtext.classList.remove('text-white');
        } else {
          nav.classList.remove('bg-light', 'shadow');
          navbrand.classList.remove('text-black');
          navtext.classList.add('text-white');
          navtext.classList.remove('text-black');
        }
      });
    </script>