
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="lib/plugins/owl.carousel.min.js"></script>
<script>
  AOS.init();
</script>
<script type="text/javascript">


	$(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:3000,
            dots:true,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        });
        
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    } );
</script>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

<script src="lib/ckeditor5/build/ckeditor.js"></script>
  <script>ClassicEditor
      .create( document.querySelector( '.editor' ), {
        
        toolbar: {
          items: [
            '|',
            'bold',
            'italic',
            'heading',
            'link',
            'bulletedList',
            'numberedList',
            '|',
            'indent',
            'outdent',
            '|',
            'blockQuote',
            'insertTable',
            'mediaEmbed',
            'undo',
            'redo'
          ]
        },
        language: 'en',
        licenseKey: '',
        
      } )
      .then( editor => {
        window.editor = editor;
    
        
        
        
      } )
      .catch( error => {
        console.error( 'Oops, something gone wrong!' );
        console.error( 'Please, report the following error in the https://github.com/ckeditor/ckeditor5 with the build id and the error stack trace:' );
        console.warn( 'Build id: qmmkc6k90zmq-dtluavynelu2' );
        console.error( error );
      } );
  </script>

</body>
</html>