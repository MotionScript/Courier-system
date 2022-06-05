@php
  $site = App\Models\SiteSettings::find(1);
@endphp
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 <a href="{{ url('/') }}" target="_blank">{{ $site->name }}</a>. All rights reserved.</span>
      <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!--livewire-->
@livewireScripts
<!-- sweet alert cdn -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('backend/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('backend/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('backend/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('backend/assets/js/misc.js') }}"></script>
<script src="{{ asset('backend/assets/js/settings.js') }}"></script>
<script src="{{ asset('backend/assets/js/todolist.js') }}"></script>
<!-- endinject -->

<!-- summernote css/js -->

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 200
    });
    $('#summernote1').summernote({
        height: 200
    });
</script>
<!----PREVENT KEY FORM SUBMITION ON ENTER KEY-->


<script>
  $(window).ready(function() {
  $("form").on("keypress", function (event) {
      var keyPressed = event.keyCode || event.which;
      if (keyPressed === 13) {
          event.preventDefault();
          return false;
      }
  });
  });


   //toastr notification
window.addEventListener('alert', event => {
  toastr[event.detail.type](event.detail.message,
  event.detail.title ?? ''), toastr.options = {
     "closeButton": true,
     "progressBar": true,
   }
 });

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>


<!-- Custom js for this page -->
<script src="{{ asset('backend/assets/js/dashboard.js') }}"></script>
<!-- End custom js for this page -->

<!--INITIALIZE TOASTR-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>

@if(Session::has('message'))
    toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
 }
    var type = "{{ Session::get('alert-type', 'info') }}"
       switch(type){
         case 'info':
             toastr.info("{{ Session::get('message') }}");
             break

             case 'success':
             toastr.success("{{ Session::get('message') }}");
             break

             case 'error':
             toastr.error("{{ Session::get('message') }}");
             break

             case 'warning':
             toastr.warning("{{ Session::get('message') }}");
             break
       }
    @endif





//delete
$(function(){
    $(document).on('click', '#delete', function(e){
        e.preventDefault();
        var link = $(this).attr("href");


Swal.fire({
    title: 'Are you sure?',
    text: "To Deleted This Data!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'No',
    confirmButtonText: 'Yes, Delete!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Deleted!',
        'Data Has Been Deleted Successfully.',
        'success'
      )
      window.location.href = link
    }
  });


  });

    });

  </script>
</body>
</html>
