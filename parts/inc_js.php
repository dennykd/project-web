<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    // $('#tabel-user').DataTable();
  });
</script>

<!-- JS NAVBAR -->
   <script type="text/javascript">
      const nav = document.querySelector('nav');
      const navbrand = document.querySelector('.navbar-brand');
      const navtext = document.querySelector(".text-nav");
      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 50) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>

<!-- JS GALLERY -->
<script type="text/javascript">
		document.addEventListener("click",function (e){
		  if(e.target.classList.contains("gallery-item")){
		  	  const src = e.target.getAttribute("src");
		  	  document.querySelector(".modal-img").src = src;
		  	  const myModal = new bootstrap.Modal(document.getElementById('gallery-popup'));
		  	  myModal.show();
		  }
		})
</script>


