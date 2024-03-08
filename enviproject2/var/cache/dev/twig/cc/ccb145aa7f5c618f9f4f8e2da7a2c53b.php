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

/* user/homeONbenevole.html.twig */
class __TwigTemplate_fe7b7b7c0e016b6f8d12baa26b568f6b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/homeONbenevole.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/homeONbenevole.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "user/homeONbenevole.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "<!DOCTYPE html>


<html lang=\"en\">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset=\"utf-8\">
  <title>Bingo | Responsive Multipurpose Parallax HTML5 Template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"One page parallax responsive HTML Template\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
  <meta name=\"author\" content=\"Themefisher\">
  <meta name=\"generator\" content=\"Themefisher Bingo HTML Template v1.0\">


</head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "getNom", [], "method", false, false, false, 30), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "<header class=\"navigation fixed-top\">
  <div class=\"container\">
    <!-- main nav -->
    <nav class=\"navbar navbar-expand-lg navbar-light px-0\">
      <!-- logo -->
      <a class=\"navbar-brand logo\" href=\"index.html\">
        <img loading=\"lazy\" class=\"logo-default\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/logo-white.png"), "html", null, true);
        echo "\" alt=\"logo\" />
        <img loading=\"lazy\" class=\"logo-white\" src=\"images/logo-white.png\" alt=\"logo\" />
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
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaire");
        echo "\">Homepage</a></li>
         
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
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaire1");
        echo "\">Afficher Partenaire</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaire_fnew");
        echo "\">Ajouter Partenaire</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre");
        echo "\">Offre</a></li>
\t\t\t\t\t\t\t\t\t
          
            </ul>
          </li>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"service.html\">Services</a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"portfolio.html\">Portfolio</a>
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
             Account <i class=\"tf-ion-chevron-down\"></i>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown02\">
              <li><a class=\"dropdown-item\" href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_fedit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104)]), "html", null, true);
        echo "\">Account settings</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>

\t\t\t\t\t\t\t\t\t
            </ul>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/homeONbenevole.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  225 => 105,  221 => 104,  191 => 77,  187 => 76,  183 => 75,  160 => 55,  141 => 39,  133 => 33,  123 => 32,  111 => 30,  101 => 29,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}
{% block head %}
<!DOCTYPE html>


<html lang=\"en\">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset=\"utf-8\">
  <title>Bingo | Responsive Multipurpose Parallax HTML5 Template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"description\" content=\"One page parallax responsive HTML Template\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
  <meta name=\"author\" content=\"Themefisher\">
  <meta name=\"generator\" content=\"Themefisher Bingo HTML Template v1.0\">


</head>
{% endblock %}




{% block body %}
{{app.user.getNom()}}
{% endblock %}
{% block header %}
<header class=\"navigation fixed-top\">
  <div class=\"container\">
    <!-- main nav -->
    <nav class=\"navbar navbar-expand-lg navbar-light px-0\">
      <!-- logo -->
      <a class=\"navbar-brand logo\" href=\"index.html\">
        <img loading=\"lazy\" class=\"logo-default\" src=\"{{ asset('front/images/logo-white.png')}}\" alt=\"logo\" />
        <img loading=\"lazy\" class=\"logo-white\" src=\"images/logo-white.png\" alt=\"logo\" />
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
            <a class=\"nav-link\" href=\"service.html\">Services</a>
          </li>
          <li class=\"nav-item \">
            <a class=\"nav-link\" href=\"portfolio.html\">Portfolio</a>
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
             Account <i class=\"tf-ion-chevron-down\"></i>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown02\">
              <li><a class=\"dropdown-item\" href=\"{{ path('app_user_fedit', {id: app.user.id}) }}\">Account settings</a></li>
              <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a></li>

\t\t\t\t\t\t\t\t\t
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
{% endblock %}

", "user/homeONbenevole.html.twig", "C:\\Users\\Mega-PC\\enviproject2\\templates\\user\\homeONbenevole.html.twig");
    }
}
