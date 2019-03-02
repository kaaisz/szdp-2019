<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css">
  <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/images/favicon-szdp.png" type="image/x-icon">
  <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
  @php wp_head() @endphp
  @section('script')
    <script>
      //-//-//-//-//-//-//-//-//-//-//-//-//-//
      //-//-----hamburger menu toggle-----//-//
      //-//-//-//-//-//-//-//-//-//-//-//-//-//
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
    </script>
  @endsection
</head>
