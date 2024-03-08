<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* basefront.html.twig */
class __TwigTemplate_9a0081be827ef65cdc426479dcc7125f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'image' => [$this, 'block_image'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'css' => [$this, 'block_css'],
            'java' => [$this, 'block_java'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 106
        echo "

";
        // line 108
        $this->displayBlock('image', $context, $blocks);
        // line 143
        $this->displayBlock('body', $context, $blocks);
        // line 470
        echo "



";
        // line 474
        $this->displayBlock('footer', $context, $blocks);
        // line 534
        echo "

 <!-- css et java -->
";
        // line 537
        $this->displayBlock('css', $context, $blocks);
        // line 558
        echo "
";
        // line 559
        $this->displayBlock('java', $context, $blocks);
        // line 582
        echo " 

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " 
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicon.jpg"), "html", null, true);
        echo "\" />
<title>Welcome to envi</title>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "<header class=\"navigation fixed-top\">
  <div class=\"container\">
    <!-- main nav -->
\t 
    <nav class=\"navbar navbar-expand-lg navbar-light px-0\">
      <!-- logo -->
      <a class=\"navbar-brand logo\" href=\"index.html\">
        <img loading=\"lazy\" class=\"logo-default\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicon.jpg"), "html", null, true);
        echo "\" alt=\"logo\" />
     
      </a>
      <!-- /logo -->
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\"
        aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navigation\">
        <ul class=\"navbar-nav ml-auto text-center\">
          <li class=\"nav-item dropdown active\">
            <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Homepage <i class=\"tf-ion-chevron-down\"></i>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
              <li><a class=\"dropdown-item\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaire");
        echo "\">Homepage</a></li>
              <li><a class=\"dropdown-item\" href=\"onepage-slider.html\">Onepage</a></li>
              <li><a class=\"dropdown-item\" href=\"onepage-text.html\">Onepage 2</a></li>
\t\t\t\t\t\t\t\t\t
              <li class=\"dropdown dropdown-submenu dropright\">
                <a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0501\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu  <i class=\"tf-ion-chevron-down\"></i></a>
      
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0501\">
                  <li><a class=\"dropdown-item\" href=\"index.html\">Submenu 01</a></li>
                  <li><a class=\"dropdown-item\" href=\"index.html\">Submenu 02</a></li>
                </ul>
              </li>
            </ul>
          </li>
        <li class=\"nav-item \">
           <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown03\" role=\"button\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">
              Partenaire et Offre <i class=\"tf-ion-chevron-down\"></i>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown02\">
              <li><a class=\"dropdown-item\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaire1");
        echo "\">Afficher Partenaire</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaire_fnew");
        echo "\">Ajouter Partenaire</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre");
        echo "\">Offre</a></li>
\t\t\t\t\t\t\t\t\t
          
            </ul>
          </li>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back");
        echo "\">back</a>
          </li>
          <li class=\"nav-item \">
            <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown03\" role=\"button\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">Evenements<i class=\"tf-ion-chevron-down\"></i>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown02\">
              <li><a class=\"dropdown-item\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taches_index");
        echo "\">Afficher Taches</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taches_favorites");
        echo "\">Taches Favorites</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_succes_index");
        echo "\">Afficher Succes</a></li>
            </ul>
          </li>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"team.html\">Team</a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"pricing.html\">Pricing</a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"contact.html\">Contact</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown02\" role=\"button\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">
              Pages <i class=\"tf-ion-chevron-down\"></i>
            </a>
             <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown02\" role=\"button\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">
              Account <i class=\"tf-ion-chevron-down\"></i>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown02\">
              <li><a class=\"dropdown-item\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_fedit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93)]), "html", null, true);
        echo "\">Account settings</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>
\t\t\t\t\t\t\t\t\t
            </ul>
          </li>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image"));

        // line 109
        echo "<body id=\"body\">
<div class=\"hero-slider\">
\t<div class=\"slider-item th-fullpage hero-area\" style=\"background-image: url(";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/slider/envi.jpg"), "html", null, true);
        echo ");\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<h1 data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".1\">Crafting Digital <br>
\t\t\t\t\t\tExperience</h1>
\t\t\t\t\t<p data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".5\">Lorem ipsum dolor sit amet,
\t\t\t\t\t\tconsectetur adipisicing elit. Quod, <br> veritatis tempore nostrum id
\t\t\t\t\t\tofficia quaerat eum corrupti, <br> ipsa aliquam velit.</p>
\t\t\t\t\t<a data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".8\" class=\"btn btn-success\"
\t\t\t\t\t\thref=\"service.html\">Explore Us</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"slider-item th-fullpage hero-area\" style=\"background-image: url(";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/slider/envi.jpg)"), "html", null, true);
        echo ";\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<h1 data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".1\">We Combine Design <br> and
\t\t\t\t\t\tCreativity</h1>
\t\t\t\t\t<p data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".5\">Create just what you need
\t\t\t\t\t\tfor your Perfect Website. Choose from a wide range
\t\t\t\t\t\t<br> of Elements & simply put them on our Canvas.</p>
\t\t\t\t\t<a data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".8\" class=\"btn btn-success\"
\t\t\t\t\t\thref=\"service.html\">Explore Us</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 143
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 144
        echo "<!--
Start About Section
==================================== -->
<section class=\"service-2 section\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">

      <div class=\"col-lg-6\">
        <!-- section title -->
        <div class=\"title text-center\">
          <h2>What Do We Offer</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Voluptates, earum. </p>
          <div class=\"border\"></div>
        </div>
        <!-- /section title -->
      </div>
    </div>
    <div class=\"row\">

      <div class=\"col-md-4 text-center d-none d-md-block\">
        <img loading=\"lazy\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/about/member.jpg"), "html", null, true);
        echo "\" class=\"img-fluid inline-block\" alt=\"\">
      </div>
      <div class=\"col-md-8\">
        <div class=\"row text-center\">
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"service-item\">
              <i class=\"tf-ion-ios-alarm-outline\"></i>
              <h4>Time Management</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"service-item\">
              <i class=\"tf-ion-ios-briefcase-outline\"></i>
              <h4>Marketing Ideas</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"service-item\">
              <i class=\"tf-ion-ios-email-outline\"></i>
              <h4>Mail Support</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"service-item\">
              <i class=\"tf-ion-ios-locked-outline\"></i>
              <h4>Secure System</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
        </div>
      </div>
    </div> <!-- End row -->
  </div> <!-- End container -->
</section> <!-- End section -->

<!--
Start About Section
==================================== -->
<section class=\"about-2 section\" id=\"about\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<!-- section title -->
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t<h2>We Are Bingo Agency</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam reprehenderit accusamus labore iusto,
\t\t\t\t\t\taut, eum itaque illo totam tempora eius.</p>
\t\t\t\t\t<div class=\"border\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /section title -->
\t\t</div>

\t\t<div class=\"row\">

\t\t\t<div class=\"col-md-6 mb-4 mb-md-0\">
\t\t\t\t<img loading=\"lazy\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/about/about-2.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<ul class=\"checklist\">
\t\t\t\t\t<li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
\t\t\t\t\t<li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
\t\t\t\t\t<li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
\t\t\t\t\t<li>Etiam porta sem multipage evint landing magna mollis euismod a pharetra augue.</li>
\t\t\t\t\t<li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
\t\t\t\t</ul>
\t\t\t\t<a href=\"about.html\" class=\"btn btn-main mt-20\">Learn More</a>
\t\t\t</div>
\t\t</div> <!-- End row -->
\t</div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class=\"call-to-action section\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-xl-6 col-lg-8 text-center\">
\t\t\t\t<h2>Let's Create Something Together</h2>
\t\t\t\t<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, nisi elit consequat ipsum,
\t\t\t\t\tnesagittis sem nid elit. Duis sed odio sitain elit.</p>
\t\t\t\t<a href=\"contact.html\" class=\"btn btn-main\">Contact Us</a>
\t\t\t</div>
\t\t</div> <!-- End row -->
\t</div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Counter Section
==================================== -->
<section class=\"counter-wrapper section-sm\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-xl-6 col-lg-8 text-center\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>Award-Winning Agency</h2>
\t\t\t\t\t<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<!-- first count item -->
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
\t\t\t\t<div class=\"counters-item\">
\t\t\t\t\t<i class=\"tf-ion-ios-alarm-outline\"></i>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"counter\" data-count=\"150\">0</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>Happy Clients</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end first count item -->

\t\t\t<!-- second count item -->
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
\t\t\t\t<div class=\"counters-item\">
\t\t\t\t\t<i class=\"tf-ion-ios-analytics-outline\"></i>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"counter\" data-count=\"130\">0</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>Projects completed</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end second count item -->

\t\t\t<!-- third count item -->
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
\t\t\t\t<div class=\"counters-item\">
\t\t\t\t\t<i class=\"tf-ion-ios-compose-outline\"></i>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"counter\" data-count=\"99\">0</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>Positive feedback</h3>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end third count item -->

\t\t\t<!-- fourth count item -->
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
\t\t\t\t<div class=\"counters-item kill-border\">
\t\t\t\t\t<i class=\"tf-ion-ios-bolt-outline\"></i>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"counter\" data-count=\"250\">0</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>Cups of Coffee</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end fourth count item -->
\t\t</div> <!-- end row -->
\t</div> <!-- end container -->
</section> <!-- end section -->

<!-- Start Testimonial
=========================================== -->
\t\t
\t<section class=\"testimonial section\" id=\"testimonial\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">\t\t\t\t
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<!-- testimonial wrapper -->
\t\t\t\t\t<div class=\"testimonial-slider\">
\t\t\t\t\t\t<!-- testimonial single -->
\t\t\t\t\t\t<div class=\"item text-center\">
\t\t\t\t\t\t\t<i class=\"tf-ion-chatbubbles\"></i>
\t\t\t\t\t\t\t<!-- client info -->
\t\t\t\t\t\t\t<div class=\"client-details\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /client info -->
\t\t\t\t\t\t\t<!-- client photo -->
\t\t\t\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t\t\t\t<img loading=\"lazy\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/client-logo/clients-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"client-meta\">
\t\t\t\t\t\t\t\t<h3>William Martin</h3>
\t\t\t\t\t\t\t\t<span>CEO , Company Name</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /client photo -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /testimonial single -->
\t\t\t\t
\t\t\t\t\t\t<!-- testimonial single -->
\t\t\t\t\t\t<div class=\"item text-center\">
\t\t\t\t\t\t\t<i class=\"tf-ion-chatbubbles\"></i>
\t\t\t\t\t\t\t<!-- client info -->
\t\t\t\t\t\t\t<div class=\"client-details\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /client info -->
\t\t\t\t\t\t\t<!-- client photo -->
\t\t\t\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t\t\t\t<img loading=\"lazy\" src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/client-logo/clients-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"client-meta\">
\t\t\t\t\t\t\t\t<h3>Emma Harrison</h3>
\t\t\t\t\t\t\t\t<span>CEO , Company Name</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /client photo -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /testimonial single -->
\t\t\t\t\t
\t\t\t\t\t\t<!-- testimonial single -->
\t\t\t\t\t\t<div class=\"item text-center\">
\t\t\t\t\t\t\t<i class=\"tf-ion-chatbubbles\"></i>
\t\t\t\t\t\t\t<!-- client info -->
\t\t\t\t\t\t\t<div class=\"client-details\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /client info -->
\t\t\t\t\t\t\t<!-- client photo -->
\t\t\t\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t\t\t\t<img loading=\"lazy\" src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/client-logo/clients-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"client-meta\">
\t\t\t\t\t\t\t\t<h3>Alexander Lucas</h3>
\t\t\t\t\t\t\t\t<span>CEO , Company Name</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /client photo -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /testimonial single -->
\t\t\t\t\t</div>
\t\t\t\t</div> \t\t<!-- end col lg 12 -->
\t\t\t</div>\t    <!-- End row -->
\t\t</div>       <!-- End container -->
\t</section>    <!-- End Section -->

<!--
Start Blog Section
=========================================== -->
<section class=\"blog\" id=\"blog\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<!-- section title -->
\t\t\t<div class=\"col-xl-6 col-lg-8\">
\t\t\t\t<div class=\"title text-center \">
\t\t\t\t\t<h2> Latest <span class=\"color\">Posts</span></h2>
\t\t\t\t\t<div class=\"border\"></div>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero inventore nam.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /section title -->
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<!-- single blog post -->
\t\t\t<article class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"post-item\">
\t\t\t\t\t<div class=\"media-wrapper\">
\t\t\t\t\t\t<img loading=\"lazy\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/blog/post-1.jpg"), "html", null, true);
        echo "\" alt=\"amazing caves coverimage\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h3><a href=\"single-post.html\">Reasons to Smile</a></h3>
\t\t\t\t\t\t<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
\t\t\t\t\t\t\tmoon officia aute, non skateboard dolor brunch.</p>
\t\t\t\t\t\t<a class=\"btn btn-main\" href=\"single-post.html\">Read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t\t<!-- /single blog post -->

\t\t\t<!-- single blog post -->
\t\t\t<article class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"post-item\">
\t\t\t\t\t<div class=\"media-wrapper\">
\t\t\t\t\t\t<img loading=\"lazy\" src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/blog/post-2.jpg"), "html", null, true);
        echo "\" alt=\"amazing caves coverimage\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h3><a href=\"single-post.html\">A Few Moments</a></h3>
\t\t\t\t\t\t<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
\t\t\t\t\t\t\tmoon officia aute, non skateboard dolor brunch.</p>
\t\t\t\t\t\t<a class=\"btn btn-main\" href=\"single-post.html\">Read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t\t<!-- end single blog post -->

\t\t\t<!-- single blog post -->
\t\t\t<article class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"post-item\">
\t\t\t\t\t<div class=\"media-wrapper\">
\t\t\t\t\t\t<img loading=\"lazy\" src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/blog/post-3.jpg"), "html", null, true);
        echo "\" alt=\"amazing caves coverimage\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h3><a href=\"single-post.html\">Hints for Life</a></h3>
\t\t\t\t\t\t<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
\t\t\t\t\t\t\tmoon officia aute, non skateboard dolor brunch.</p>
\t\t\t\t\t\t<a class=\"btn btn-main\" href=\"single-post.html\">Read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t\t<!-- end single blog post -->
\t\t</div> <!-- end row -->
\t</div> <!-- end container -->
</section> <!-- end section -->
 
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 474
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 475
        echo "
<footer id=\"footer\" class=\"bg-one\">
  <div class=\"top-footer\">
    <div class=\"container\">
      <div class=\"row justify-content-around\">
        <div class=\"col-lg-4 col-md-6 mb-5 mb-lg-0\">
          <h3>about</h3>
          <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus commodo, tortor mauris sed posuere.</p>
        </div>
        <!-- End of .col-sm-3 -->

        <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0\">
          <ul>
            <li>
              <h3>Our Services</h3>
            </li>
            <li><a href=\"service.html\">Ui/Ux Design</a></li>
            <li><a href=\"service.html\">Graphic Design</a></li>
            <li><a href=\"service.html\">Web Design</a></li>
            <li><a href=\"service.html\">Web Development</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class=\"col-lg-2 col-md-6 mb-5 mb-md-0\">
          <ul>
            <li>
              <h3>Quick Links</h3>
            </li>
            <li><a href=\"about.html\">About</a></li>
            <li><a href=\"service.html\">Services</a></li>
            <li><a href=\"blog.html\">Blogs</a></li>
            <li><a href=\"404.html\">404</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class=\"col-lg-3 col-md-6\">
          <ul>
            <li>
              <h3>Connect with us Socially</h3>
            </li>
            <li><a href=\"https://www.facebook.com/themefisher/\">Facebook</a></li>
            <li><a href=\"https://www.twitter.com/themefisher/\">Twitter</a></li>
            <li><a href=\"https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA\">Youtube</a></li>
            <li><a href=\"https://www.github.com/themefisher/\">Github</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class=\"footer-bottom\">
    <h5>&copy; Copyright 2024. All rights reserved to BlazingFlame.</h5>
    
  </div>
</footer> <!-- end footer -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 537
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 538
        echo "  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
 
  <link rel=\"stylesheet\" href=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/themefisher-font/style.css"), "html", null, true);
        echo "\">
  <!-- bootstrap.min css -->
  <link rel=\"stylesheet\" href=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- Lightbox.min css -->
  <link rel=\"stylesheet\" href=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/lightbox2/css/lightbox.min.css"), "html", null, true);
        echo "\">
  <!-- animation css -->
  <link rel=\"stylesheet\" href=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/animate/animate.css"), "html", null, true);
        echo "\">
  <!-- Slick Carousel -->
  <link rel=\"stylesheet\" href=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/slick/slick.css"), "html", null, true);
        echo "\">
  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\">

   

  
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 559
    public function block_java($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "java"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "java"));

        // line 560
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap4 -->
<script src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Parallax -->
<script src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/parallax/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\"></script>
<!-- lightbox -->
<script src=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/lightbox2/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
<!-- Owl Carousel -->
<script src=\"";
        // line 569
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/slick/slick.min.js"), "html", null, true);
        echo "\"></script>
<!-- filter -->
<script src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/filterizr/jquery.filterizr.min.js"), "html", null, true);
        echo "\"></script>
<!-- Smooth Scroll js -->
<script src=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/smooth-scroll/smooth-scroll.min.js"), "html", null, true);
        echo "\"></script>
<!-- Google Map -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU\"></script>
<script src=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/google-map/gmap.js"), "html", null, true);
        echo "\"></script>
<!-- Custom js -->

<script src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/script.js"), "html", null, true);
        echo "\"></script>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "basefront.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  888 => 579,  882 => 576,  876 => 573,  871 => 571,  866 => 569,  861 => 567,  856 => 565,  851 => 563,  844 => 560,  834 => 559,  818 => 552,  813 => 550,  808 => 548,  803 => 546,  798 => 544,  793 => 542,  787 => 538,  777 => 537,  709 => 475,  699 => 474,  671 => 452,  651 => 435,  631 => 418,  591 => 381,  568 => 361,  545 => 341,  425 => 224,  363 => 165,  340 => 144,  330 => 143,  303 => 126,  285 => 111,  281 => 109,  271 => 108,  249 => 94,  245 => 93,  218 => 69,  214 => 68,  210 => 67,  199 => 59,  189 => 52,  185 => 51,  181 => 50,  157 => 29,  138 => 13,  129 => 6,  119 => 5,  106 => 2,  94 => 1,  82 => 582,  80 => 559,  77 => 558,  75 => 537,  70 => 534,  68 => 474,  62 => 470,  60 => 143,  58 => 108,  54 => 106,  52 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block title %} 
<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('front/images/favicon.jpg')}}\" />
<title>Welcome to envi</title>
{% endblock %}
{% block header %}
<header class=\"navigation fixed-top\">
  <div class=\"container\">
    <!-- main nav -->
\t 
    <nav class=\"navbar navbar-expand-lg navbar-light px-0\">
      <!-- logo -->
      <a class=\"navbar-brand logo\" href=\"index.html\">
        <img loading=\"lazy\" class=\"logo-default\" src=\"{{ asset('front/images/favicon.jpg')}}\" alt=\"logo\" />
     
      </a>
      <!-- /logo -->
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\"
        aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navigation\">
        <ul class=\"navbar-nav ml-auto text-center\">
          <li class=\"nav-item dropdown active\">
            <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              Homepage <i class=\"tf-ion-chevron-down\"></i>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
              <li><a class=\"dropdown-item\" href=\"{{ path('app_partenaire') }}\">Homepage</a></li>
              <li><a class=\"dropdown-item\" href=\"onepage-slider.html\">Onepage</a></li>
              <li><a class=\"dropdown-item\" href=\"onepage-text.html\">Onepage 2</a></li>
\t\t\t\t\t\t\t\t\t
              <li class=\"dropdown dropdown-submenu dropright\">
                <a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0501\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu  <i class=\"tf-ion-chevron-down\"></i></a>
      
                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0501\">
                  <li><a class=\"dropdown-item\" href=\"index.html\">Submenu 01</a></li>
                  <li><a class=\"dropdown-item\" href=\"index.html\">Submenu 02</a></li>
                </ul>
              </li>
            </ul>
          </li>
        <li class=\"nav-item \">
           <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown03\" role=\"button\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">
              Partenaire et Offre <i class=\"tf-ion-chevron-down\"></i>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown02\">
              <li><a class=\"dropdown-item\" href=\"{{ path('app_partenaire1') }}\">Afficher Partenaire</a></li>
              <li><a class=\"dropdown-item\" href=\"{{ path('app_partenaire_fnew') }}\">Ajouter Partenaire</a></li>
              <li><a class=\"dropdown-item\" href=\"{{ path('app_offre') }}\">Offre</a></li>
\t\t\t\t\t\t\t\t\t
          
            </ul>
          </li>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"{{ path('app_back') }}\">back</a>
          </li>
          <li class=\"nav-item \">
            <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown03\" role=\"button\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">Evenements<i class=\"tf-ion-chevron-down\"></i>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown02\">
              <li><a class=\"dropdown-item\" href=\"{{ path('app_taches_index') }}\">Afficher Taches</a></li>
              <li><a class=\"dropdown-item\" href=\"{{ path('app_taches_favorites') }}\">Taches Favorites</a></li>
              <li><a class=\"dropdown-item\" href=\"{{ path('app_succes_index') }}\">Afficher Succes</a></li>
            </ul>
          </li>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"team.html\">Team</a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"pricing.html\">Pricing</a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"contact.html\">Contact</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown02\" role=\"button\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">
              Pages <i class=\"tf-ion-chevron-down\"></i>
            </a>
             <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown02\" role=\"button\" data-toggle=\"dropdown\"
              aria-haspopup=\"true\" aria-expanded=\"false\">
              Account <i class=\"tf-ion-chevron-down\"></i>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown02\">
              <li><a class=\"dropdown-item\" href=\"{{ path('app_user_fedit', {id: app.user.id}) }}\">Account settings</a></li>
              <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a></li>
\t\t\t\t\t\t\t\t\t
            </ul>
          </li>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
{% endblock %}


{% block image %}
<body id=\"body\">
<div class=\"hero-slider\">
\t<div class=\"slider-item th-fullpage hero-area\" style=\"background-image: url({{ asset('front/images/slider/envi.jpg')}});\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<h1 data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".1\">Crafting Digital <br>
\t\t\t\t\t\tExperience</h1>
\t\t\t\t\t<p data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".5\">Lorem ipsum dolor sit amet,
\t\t\t\t\t\tconsectetur adipisicing elit. Quod, <br> veritatis tempore nostrum id
\t\t\t\t\t\tofficia quaerat eum corrupti, <br> ipsa aliquam velit.</p>
\t\t\t\t\t<a data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".8\" class=\"btn btn-success\"
\t\t\t\t\t\thref=\"service.html\">Explore Us</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"slider-item th-fullpage hero-area\" style=\"background-image: url({{ asset('front/images/slider/envi.jpg)')}};\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<h1 data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".1\">We Combine Design <br> and
\t\t\t\t\t\tCreativity</h1>
\t\t\t\t\t<p data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".5\">Create just what you need
\t\t\t\t\t\tfor your Perfect Website. Choose from a wide range
\t\t\t\t\t\t<br> of Elements & simply put them on our Canvas.</p>
\t\t\t\t\t<a data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".8\" class=\"btn btn-success\"
\t\t\t\t\t\thref=\"service.html\">Explore Us</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}
{% block body %}
<!--
Start About Section
==================================== -->
<section class=\"service-2 section\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">

      <div class=\"col-lg-6\">
        <!-- section title -->
        <div class=\"title text-center\">
          <h2>What Do We Offer</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Voluptates, earum. </p>
          <div class=\"border\"></div>
        </div>
        <!-- /section title -->
      </div>
    </div>
    <div class=\"row\">

      <div class=\"col-md-4 text-center d-none d-md-block\">
        <img loading=\"lazy\" src=\"{{ asset('front/images/about/member.jpg')}}\" class=\"img-fluid inline-block\" alt=\"\">
      </div>
      <div class=\"col-md-8\">
        <div class=\"row text-center\">
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"service-item\">
              <i class=\"tf-ion-ios-alarm-outline\"></i>
              <h4>Time Management</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"service-item\">
              <i class=\"tf-ion-ios-briefcase-outline\"></i>
              <h4>Marketing Ideas</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"service-item\">
              <i class=\"tf-ion-ios-email-outline\"></i>
              <h4>Mail Support</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class=\"col-md-6 col-sm-6\">
            <div class=\"service-item\">
              <i class=\"tf-ion-ios-locked-outline\"></i>
              <h4>Secure System</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
        </div>
      </div>
    </div> <!-- End row -->
  </div> <!-- End container -->
</section> <!-- End section -->

<!--
Start About Section
==================================== -->
<section class=\"about-2 section\" id=\"about\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<!-- section title -->
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t<h2>We Are Bingo Agency</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam reprehenderit accusamus labore iusto,
\t\t\t\t\t\taut, eum itaque illo totam tempora eius.</p>
\t\t\t\t\t<div class=\"border\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /section title -->
\t\t</div>

\t\t<div class=\"row\">

\t\t\t<div class=\"col-md-6 mb-4 mb-md-0\">
\t\t\t\t<img loading=\"lazy\" src=\"{{ asset('front/images/about/about-2.png')}}\" class=\"img-fluid\" alt=\"\">
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<ul class=\"checklist\">
\t\t\t\t\t<li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
\t\t\t\t\t<li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
\t\t\t\t\t<li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
\t\t\t\t\t<li>Etiam porta sem multipage evint landing magna mollis euismod a pharetra augue.</li>
\t\t\t\t\t<li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
\t\t\t\t</ul>
\t\t\t\t<a href=\"about.html\" class=\"btn btn-main mt-20\">Learn More</a>
\t\t\t</div>
\t\t</div> <!-- End row -->
\t</div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class=\"call-to-action section\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-xl-6 col-lg-8 text-center\">
\t\t\t\t<h2>Let's Create Something Together</h2>
\t\t\t\t<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, nisi elit consequat ipsum,
\t\t\t\t\tnesagittis sem nid elit. Duis sed odio sitain elit.</p>
\t\t\t\t<a href=\"contact.html\" class=\"btn btn-main\">Contact Us</a>
\t\t\t</div>
\t\t</div> <!-- End row -->
\t</div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Counter Section
==================================== -->
<section class=\"counter-wrapper section-sm\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-xl-6 col-lg-8 text-center\">
\t\t\t\t<div class=\"title\">
\t\t\t\t\t<h2>Award-Winning Agency</h2>
\t\t\t\t\t<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<!-- first count item -->
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
\t\t\t\t<div class=\"counters-item\">
\t\t\t\t\t<i class=\"tf-ion-ios-alarm-outline\"></i>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"counter\" data-count=\"150\">0</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>Happy Clients</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end first count item -->

\t\t\t<!-- second count item -->
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
\t\t\t\t<div class=\"counters-item\">
\t\t\t\t\t<i class=\"tf-ion-ios-analytics-outline\"></i>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"counter\" data-count=\"130\">0</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>Projects completed</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end second count item -->

\t\t\t<!-- third count item -->
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
\t\t\t\t<div class=\"counters-item\">
\t\t\t\t\t<i class=\"tf-ion-ios-compose-outline\"></i>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"counter\" data-count=\"99\">0</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>Positive feedback</h3>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end third count item -->

\t\t\t<!-- fourth count item -->
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
\t\t\t\t<div class=\"counters-item kill-border\">
\t\t\t\t\t<i class=\"tf-ion-ios-bolt-outline\"></i>
\t\t\t\t\t<div>
\t\t\t\t\t\t<span class=\"counter\" data-count=\"250\">0</span>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>Cups of Coffee</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end fourth count item -->
\t\t</div> <!-- end row -->
\t</div> <!-- end container -->
</section> <!-- end section -->

<!-- Start Testimonial
=========================================== -->
\t\t
\t<section class=\"testimonial section\" id=\"testimonial\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">\t\t\t\t
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<!-- testimonial wrapper -->
\t\t\t\t\t<div class=\"testimonial-slider\">
\t\t\t\t\t\t<!-- testimonial single -->
\t\t\t\t\t\t<div class=\"item text-center\">
\t\t\t\t\t\t\t<i class=\"tf-ion-chatbubbles\"></i>
\t\t\t\t\t\t\t<!-- client info -->
\t\t\t\t\t\t\t<div class=\"client-details\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /client info -->
\t\t\t\t\t\t\t<!-- client photo -->
\t\t\t\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t\t\t\t<img loading=\"lazy\" src=\"{{ asset('front/images/client-logo/clients-1.jpg')}}\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"client-meta\">
\t\t\t\t\t\t\t\t<h3>William Martin</h3>
\t\t\t\t\t\t\t\t<span>CEO , Company Name</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /client photo -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /testimonial single -->
\t\t\t\t
\t\t\t\t\t\t<!-- testimonial single -->
\t\t\t\t\t\t<div class=\"item text-center\">
\t\t\t\t\t\t\t<i class=\"tf-ion-chatbubbles\"></i>
\t\t\t\t\t\t\t<!-- client info -->
\t\t\t\t\t\t\t<div class=\"client-details\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /client info -->
\t\t\t\t\t\t\t<!-- client photo -->
\t\t\t\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t\t\t\t<img loading=\"lazy\" src=\"{{ asset('front/images/client-logo/clients-2.jpg')}}\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"client-meta\">
\t\t\t\t\t\t\t\t<h3>Emma Harrison</h3>
\t\t\t\t\t\t\t\t<span>CEO , Company Name</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /client photo -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /testimonial single -->
\t\t\t\t\t
\t\t\t\t\t\t<!-- testimonial single -->
\t\t\t\t\t\t<div class=\"item text-center\">
\t\t\t\t\t\t\t<i class=\"tf-ion-chatbubbles\"></i>
\t\t\t\t\t\t\t<!-- client info -->
\t\t\t\t\t\t\t<div class=\"client-details\">
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /client info -->
\t\t\t\t\t\t\t<!-- client photo -->
\t\t\t\t\t\t\t<div class=\"client-thumb\">
\t\t\t\t\t\t\t\t<img loading=\"lazy\" src=\"{{ asset('front/images/client-logo/clients-3.jpg')}}\" class=\"img-fluid\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"client-meta\">
\t\t\t\t\t\t\t\t<h3>Alexander Lucas</h3>
\t\t\t\t\t\t\t\t<span>CEO , Company Name</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /client photo -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- /testimonial single -->
\t\t\t\t\t</div>
\t\t\t\t</div> \t\t<!-- end col lg 12 -->
\t\t\t</div>\t    <!-- End row -->
\t\t</div>       <!-- End container -->
\t</section>    <!-- End Section -->

<!--
Start Blog Section
=========================================== -->
<section class=\"blog\" id=\"blog\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<!-- section title -->
\t\t\t<div class=\"col-xl-6 col-lg-8\">
\t\t\t\t<div class=\"title text-center \">
\t\t\t\t\t<h2> Latest <span class=\"color\">Posts</span></h2>
\t\t\t\t\t<div class=\"border\"></div>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero inventore nam.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /section title -->
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<!-- single blog post -->
\t\t\t<article class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"post-item\">
\t\t\t\t\t<div class=\"media-wrapper\">
\t\t\t\t\t\t<img loading=\"lazy\" src=\"{{ asset('front/images/blog/post-1.jpg')}}\" alt=\"amazing caves coverimage\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h3><a href=\"single-post.html\">Reasons to Smile</a></h3>
\t\t\t\t\t\t<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
\t\t\t\t\t\t\tmoon officia aute, non skateboard dolor brunch.</p>
\t\t\t\t\t\t<a class=\"btn btn-main\" href=\"single-post.html\">Read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t\t<!-- /single blog post -->

\t\t\t<!-- single blog post -->
\t\t\t<article class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"post-item\">
\t\t\t\t\t<div class=\"media-wrapper\">
\t\t\t\t\t\t<img loading=\"lazy\" src=\"{{ asset('front/images/blog/post-2.jpg')}}\" alt=\"amazing caves coverimage\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h3><a href=\"single-post.html\">A Few Moments</a></h3>
\t\t\t\t\t\t<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
\t\t\t\t\t\t\tmoon officia aute, non skateboard dolor brunch.</p>
\t\t\t\t\t\t<a class=\"btn btn-main\" href=\"single-post.html\">Read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t\t<!-- end single blog post -->

\t\t\t<!-- single blog post -->
\t\t\t<article class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"post-item\">
\t\t\t\t\t<div class=\"media-wrapper\">
\t\t\t\t\t\t<img loading=\"lazy\" src=\"{{ asset('front/images/blog/post-3.jpg')}}\" alt=\"amazing caves coverimage\" class=\"img-fluid\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h3><a href=\"single-post.html\">Hints for Life</a></h3>
\t\t\t\t\t\t<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
\t\t\t\t\t\t\tmoon officia aute, non skateboard dolor brunch.</p>
\t\t\t\t\t\t<a class=\"btn btn-main\" href=\"single-post.html\">Read more</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t\t<!-- end single blog post -->
\t\t</div> <!-- end row -->
\t</div> <!-- end container -->
</section> <!-- end section -->
 
</body>
{% endblock %}




{% block footer %}

<footer id=\"footer\" class=\"bg-one\">
  <div class=\"top-footer\">
    <div class=\"container\">
      <div class=\"row justify-content-around\">
        <div class=\"col-lg-4 col-md-6 mb-5 mb-lg-0\">
          <h3>about</h3>
          <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus commodo, tortor mauris sed posuere.</p>
        </div>
        <!-- End of .col-sm-3 -->

        <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0\">
          <ul>
            <li>
              <h3>Our Services</h3>
            </li>
            <li><a href=\"service.html\">Ui/Ux Design</a></li>
            <li><a href=\"service.html\">Graphic Design</a></li>
            <li><a href=\"service.html\">Web Design</a></li>
            <li><a href=\"service.html\">Web Development</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class=\"col-lg-2 col-md-6 mb-5 mb-md-0\">
          <ul>
            <li>
              <h3>Quick Links</h3>
            </li>
            <li><a href=\"about.html\">About</a></li>
            <li><a href=\"service.html\">Services</a></li>
            <li><a href=\"blog.html\">Blogs</a></li>
            <li><a href=\"404.html\">404</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class=\"col-lg-3 col-md-6\">
          <ul>
            <li>
              <h3>Connect with us Socially</h3>
            </li>
            <li><a href=\"https://www.facebook.com/themefisher/\">Facebook</a></li>
            <li><a href=\"https://www.twitter.com/themefisher/\">Twitter</a></li>
            <li><a href=\"https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA\">Youtube</a></li>
            <li><a href=\"https://www.github.com/themefisher/\">Github</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class=\"footer-bottom\">
    <h5>&copy; Copyright 2024. All rights reserved to BlazingFlame.</h5>
    
  </div>
</footer> <!-- end footer -->
{% endblock %}


 <!-- css et java -->
{% block css %}
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
 
  <link rel=\"stylesheet\" href=\"{{ asset('front/plugins/themefisher-font/style.css')}}\">
  <!-- bootstrap.min css -->
  <link rel=\"stylesheet\" href=\"{{ asset('front/plugins/bootstrap/bootstrap.min.css')}}\">
  <!-- Lightbox.min css -->
  <link rel=\"stylesheet\" href=\"{{ asset('front/plugins/lightbox2/css/lightbox.min.css')}}\">
  <!-- animation css -->
  <link rel=\"stylesheet\" href=\"{{ asset('front/plugins/animate/animate.css')}}\">
  <!-- Slick Carousel -->
  <link rel=\"stylesheet\" href=\"{{ asset('front/plugins/slick/slick.css')}}\">
  <!-- Main Stylesheet -->
  <link rel=\"stylesheet\" href=\"{{ asset('front/css/style.css')}}\">

   

  
 {% endblock %}

{% block java %}
<script src=\"{{ asset('front/plugins/jquery/jquery.min.js')}}\"></script>

<!-- Bootstrap4 -->
<script src=\"{{ asset('front/plugins/bootstrap/bootstrap.min.js')}}\"></script>
<!-- Parallax -->
<script src=\"{{ asset('front/plugins/parallax/jquery.parallax-1.1.3.js')}}\"></script>
<!-- lightbox -->
<script src=\"{{ asset('front/plugins/lightbox2/js/lightbox.min.js')}}\"></script>
<!-- Owl Carousel -->
<script src=\"{{ asset('front/plugins/slick/slick.min.js')}}\"></script>
<!-- filter -->
<script src=\"{{ asset('front/plugins/filterizr/jquery.filterizr.min.js')}}\"></script>
<!-- Smooth Scroll js -->
<script src=\"{{ asset('front/plugins/smooth-scroll/smooth-scroll.min.js')}}\"></script>
<!-- Google Map -->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU\"></script>
<script src=\"{{ asset('front/plugins/google-map/gmap.js')}}\"></script>
<!-- Custom js -->

<script src=\"{{ asset('front/js/script.js')}}\"></script>

</html>
{% endblock %} 

", "basefront.html.twig", "D:\\Telechargement\\enviproject2\\templates\\basefront.html.twig");
    }
}
