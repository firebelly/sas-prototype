<!doctype html>
<!--[if IE 8]> <html lang="en" class="no-js ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="no-js ie9 lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>SAS Nav Prototype</title>
    <link rel="canonical" href="">
    <meta name="description" content="">
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />
    <link rel="stylesheet" href="assets/css/main.min.css?<?= time() ?>">
    <link type="text/plain" rel="author" href="humans.txt">
    <link rel="shortcut icon" type="image/ico" href="assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/images/apple-touch-icon-152x152-precomposed.png"><!-- For iStuff -->
    <meta name="msapplication-TileColor" content="#FFFFFF"><!-- For MS stuff -->
    <meta name="msapplication-TileImage" content="assets/images/ms-icon.png"><!-- For MS stuff -->
    <!--[if lt IE 9]>
      <script src="assets/js/no-build/respond.min.js"></script>
      <script src="assets/js/no-build/svg4everybody.min.js"></script>
    <![endif]-->
    <script src="assets/js/no-build/modernizr.custom.js"></script>
  </head>
  <body>
    <div class="svg-defs"><?php include_once("assets/svgs/build/svgs-defs.svg"); ?></div>
    <header class="site-header -nav-open" role="banner">
      <nav class="secondary-nav" role="navigation"> 
        <ul class="nav-list semantic-only-list"">
          <li class="nav-list-item"><a href="#" class="nav-link">News + Events</a></li>
          <li class="nav-list-item"><a href="#" class="nav-link">MySAS</a></li>
          <li class="nav-list-item"><a href="#" class="nav-link">Alumni</a></li>
          <li class="nav-list-item"><a href="#" class="nav-link">Careers</a></li>
        </ul>
      </nav>
      <nav class="primary-nav" role="navigation"> 
        <ul class="nav-list dropdowns semantic-only-list">
          <li class="nav-list-item has-dropdown dropdown-closed">
            <a href="#" class="nav-link">Our Story</a>
            <div class="dropdown has-7-items">
              <ul class="dropdown-list semantic-only-list">
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Overview</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Mission + Values</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">History</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Our Campuses</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Leadership</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Faculty</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Board of Trustees</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-list-item has-dropdown dropdown-closed">
            <a href="#" class="nav-link">Academics</a>
            <div class="dropdown has-10-items">
              <ul class="dropdown-list semantic-only-list">
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Overview</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Pre-Kindergarten</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Elementary School</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Middle School</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">High School</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Signature Programs</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">EAL Programs</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Counseling</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Libraries</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Technology</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-list-item has-dropdown dropdown-open">
            <a href="#" class="nav-link">Life at SAS</a>
            <div class="dropdown has-10-items">
              <ul class="dropdown-list semantic-only-list">
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Overview</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Athletics</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Arts</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Activities</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">PTSA</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Publications</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Food</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Transportation</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Health + Safety</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Giving</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-list-item has-dropdown dropdown-closed">
            <a href="#" class="nav-link">Admissions</a>
            <div class="dropdown has-7-items">
              <ul class="dropdown-list semantic-only-list">
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Overview</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Meet a Family</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Plan a Visit</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Academic Criteria</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Tuition + Fees</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">FAQs</a></li>
                <li class="dropdown-list-item"><a href="#" class="dropdown-link">Apply</a></li>
              </ul>
            </div>
          </li>
        </ul>
        <ul class="nav-list buttons semantic-only-list"">
          <li class="nav-list-item search"><a href="#" class="nav-link">
            <div class="sr-only">Search</div>
            <svg class="icon icon-search" aria-hidden="true" role="image"><use xlink:href="#icon-search"/></svg>
          </a></li>
          <li class="nav-list-item language">
            <a href="#" class="nav-link toggle-language-dropdown">
              <div class="sr-only">Language: English</div>
              <svg class="icon icon-american-flag" aria-hidden="true" role="image"><use xlink:href="#icon-american-flag"/></svg>
            </a>
            <div class="language-dropdown -dropdown-closed">
              <ul class="dropdown-list semantic-only-list">
                <li class="dropdown-list-item">
                  <a href="#" class="dropdown-link">
                    <div class="sr-only">Chinese</div>
                    <svg class="icon icon-chinese-flag" aria-hidden="true" role="image"><use xlink:href="#icon-chinese-flag"/></svg>
                  </a>
                </li>
                <li class="dropdown-list-item">
                  <a href="#" class="dropdown-link">
                    <div class="sr-only">Korean</div>
                    <svg class="icon icon-korean-flag" aria-hidden="true" role="image"><use xlink:href="#icon-korean-flag"/></svg>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-list-item sas-lockup"><a href="#" class="nav-link">
            <div class="sr-only">Shanghai American School</div>
            <svg class="icon icon-sas-lockup" aria-hidden="true" role="image"><use xlink:href="#icon-sas-lockup"/></svg>
          </a></li>
        </ul>
      </nav>
      <nav class="tiny-nav">
        <ul class="nav-list semantic-only-list"">
          <li class="nav-list-item menu"><a href="#" class="nav-link open-nav">
            <div class="sr-only">Menu</div>
            <svg class="icon icon-menu" aria-hidden="true" role="image"><use xlink:href="#icon-menu"/></svg>
          </a></li>
          <li class="nav-list-item search"><a href="#" class="nav-link">
            <div class="sr-only">Search</div>
            <svg class="icon icon-search" aria-hidden="true" role="image"><use xlink:href="#icon-search"/></svg>
          </a></li>
          <li class="nav-list-item language">
            <a href="#" class="nav-link toggle-language-dropdown">
              <div class="sr-only">Language: English</div>
              <svg class="icon icon-american-flag" aria-hidden="true" role="image"><use xlink:href="#icon-american-flag"/></svg>
            </a>
            <div class="language-dropdown -dropdown-closed">
              <ul class="dropdown-list semantic-only-list">
                <li class="dropdown-list-item">
                  <a href="#" class="dropdown-link">
                    <div class="sr-only">Chinese</div>
                    <svg class="icon icon-chinese-flag" aria-hidden="true" role="image"><use xlink:href="#icon-chinese-flag"/></svg>
                  </a>
                </li>
                <li class="dropdown-list-item">
                  <a href="#" class="dropdown-link">
                    <div class="sr-only">Korean</div>
                    <svg class="icon icon-korean-flag" aria-hidden="true" role="image"><use xlink:href="#icon-korean-flag"/></svg>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    <main class="site-main" role="main">
    </main>
    <footer class="site-footer" role="contentinfo">
    </footer>
    <script src="assets/js/build/site.min.js?<?= time() ?>"></script>
    <script type="text/javascript">// Google Analytics
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-XXXXX-X']); // Replace "XXXXX-X" with your account code
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </body>
</html>