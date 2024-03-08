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

/* partenaire/index.html.twig */
class __TwigTemplate_38713bd4d7a856c6b931e5d9bf74184f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partenaire/index.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "partenaire/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<style>
    /* Style pour la table */
    .blue-border-table {
        border-collapse: collapse; /* Fusionner les bordures */
    }

    /* Style pour les cellules de la table */
    .blue-border-table th,
    .blue-border-table td {
        border: 2px solid blue; /* Bordure de 2px en bleu */
        padding: 8px; /* Ajouter un espacement autour du contenu */
        font-weight: bold; /* Texte en gras */
    }

    /* Style pour l'en-tête de la table */
    .blue-border-table th {
        background-color: blue; /* Fond bleu pour les en-têtes */
        color: white; /* Texte en blanc pour un meilleur contraste */
    }
</style>

<div class=\"example-wrapper\">
<section class=\"portfolio section-sm\" id=\"portfolio\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-xl-6 col-lg-8\">
\t\t\t\t<!-- section title -->
\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t<h2>Our Works</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, veritatis. Lorem ipsum dolor sit amet,
\t\t\t\t\t\tconsectetur adipisicing elit. Minima, vitae? </p>
\t\t\t\t\t<div class=\"border\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- /section title -->
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">

\t\t\t\t<div class=\"portfolio-filter\">
\t\t\t\t\t<button type=\"button\" data-filter=\"all\">All</button>
\t\t\t\t\t<button type=\"button\" data-filter=\"photography\">Photography</button>
\t\t\t\t\t<button type=\"button\" data-filter=\"ios\">IOS App</button>
\t\t\t\t\t<button type=\"button\" data-filter=\"development\">Development</button>
\t\t\t\t\t<button type=\"button\" data-filter=\"design\">Design</button>
\t\t\t\t</div>
\t\t\t\t
";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partenaires"]) || array_key_exists("partenaires", $context) ? $context["partenaires"] : (function () { throw new RuntimeError('Variable "partenaires" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 59
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<table class=\"blue-border-table \">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, design\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "getId", [], "method", false, false, false, 65), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">";
            // line 69
            echo twig_escape_filter($this->env, ((twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "getNomE", [], "method", false, false, false, 69)) . " / ") . twig_get_attribute($this->env, $this->source, $context["partenaire"], "getMailE", [], "method", false, false, false, 69)), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaire_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "getId", [], "method", false, false, false, 73)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_part_fedit", ["id" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "getId", [], "method", false, false, false, 78)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg\">Edit</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div> <!-- /end col-lg-12 -->
\t\t</div> <!-- end row -->
\t
</section> <!-- End section -->
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
\t\t\t\t\t\t\t\t<img loading=\"lazy\" src=\"assetsfront/images/client-logo/clients-1.jpg\" class=\"img-fluid\" alt=\"\">
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
\t\t\t\t\t\t\t\t<img loading=\"lazy\" src=\"assetsfront/images/client-logo/clients-2.jpg\" class=\"img-fluid\" alt=\"\">
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
\t\t\t\t\t\t\t\t<img loading=\"lazy\" src=\"assetsfront/images/client-logo/clients-3.jpg\" class=\"img-fluid\" alt=\"\">
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
    </ul>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partenaire/index.html.twig";
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
        return array (  171 => 87,  156 => 78,  148 => 73,  141 => 69,  134 => 65,  126 => 59,  122 => 58,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}



{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<style>
    /* Style pour la table */
    .blue-border-table {
        border-collapse: collapse; /* Fusionner les bordures */
    }

    /* Style pour les cellules de la table */
    .blue-border-table th,
    .blue-border-table td {
        border: 2px solid blue; /* Bordure de 2px en bleu */
        padding: 8px; /* Ajouter un espacement autour du contenu */
        font-weight: bold; /* Texte en gras */
    }

    /* Style pour l'en-tête de la table */
    .blue-border-table th {
        background-color: blue; /* Fond bleu pour les en-têtes */
        color: white; /* Texte en blanc pour un meilleur contraste */
    }
</style>

<div class=\"example-wrapper\">
<section class=\"portfolio section-sm\" id=\"portfolio\">
\t<div class=\"container-fluid\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-xl-6 col-lg-8\">
\t\t\t\t<!-- section title -->
\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t<h2>Our Works</h2>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, veritatis. Lorem ipsum dolor sit amet,
\t\t\t\t\t\tconsectetur adipisicing elit. Minima, vitae? </p>
\t\t\t\t\t<div class=\"border\"></div>
\t\t\t\t</div>
\t\t\t\t<!-- /section title -->
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">

\t\t\t\t<div class=\"portfolio-filter\">
\t\t\t\t\t<button type=\"button\" data-filter=\"all\">All</button>
\t\t\t\t\t<button type=\"button\" data-filter=\"photography\">Photography</button>
\t\t\t\t\t<button type=\"button\" data-filter=\"ios\">IOS App</button>
\t\t\t\t\t<button type=\"button\" data-filter=\"development\">Development</button>
\t\t\t\t\t<button type=\"button\" data-filter=\"design\">Design</button>
\t\t\t\t</div>
\t\t\t\t
{% for partenaire in partenaires %}
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<table class=\"blue-border-table \">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, design\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">{{ partenaire.getId() }}</a></h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">{{ partenaire.getNomE() | upper ~ ' / ' ~ partenaire.getMailE() }}</a></h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_partenaire_delete', {id: partenaire.getId()}) }}\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_part_fedit', {id: partenaire.getId()}) }}\" class=\"btn btn-primary btn-lg\">Edit</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t
\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div> <!-- /end col-lg-12 -->
\t\t</div> <!-- end row -->
\t
</section> <!-- End section -->
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
\t\t\t\t\t\t\t\t<img loading=\"lazy\" src=\"assetsfront/images/client-logo/clients-1.jpg\" class=\"img-fluid\" alt=\"\">
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
\t\t\t\t\t\t\t\t<img loading=\"lazy\" src=\"assetsfront/images/client-logo/clients-2.jpg\" class=\"img-fluid\" alt=\"\">
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
\t\t\t\t\t\t\t\t<img loading=\"lazy\" src=\"assetsfront/images/client-logo/clients-3.jpg\" class=\"img-fluid\" alt=\"\">
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
    </ul>
</div>
{% endblock %}
", "partenaire/index.html.twig", "C:\\Users\\Mega-PC\\enviproject2\\templates\\partenaire\\index.html.twig");
    }
}
