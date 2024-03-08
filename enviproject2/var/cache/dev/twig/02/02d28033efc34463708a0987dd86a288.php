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

/* offre/index.html.twig */
class __TwigTemplate_1a4be0a496fc08b85d6c99d49776d244 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "offre/index.html.twig", 1);
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
\t\t\t\t    <br>
                    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_fnew");
        echo "\" class=\"btn btn-primary btn-lg\">Ajouter</a>
";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 60
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<table class=\"blue-border-table \">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, design\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "getId", [], "method", false, false, false, 66), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "getNomO", [], "method", false, false, false, 70), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
                                <td>
\t\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "getTypeO", [], "method", false, false, false, 74), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t</td>
                                <br>
                                 <td>
\t\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partenaire"], "entreprise", [], "any", false, false, false, 78), "getNomE", [], "method", false, false, false, 78), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t</td>
                                <br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "getId", [], "method", false, false, false, 82)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_fedit", ["id" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "getId", [], "method", false, false, false, 87)]), "html", null, true);
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
        // line 96
        echo "                
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "offre/index.html.twig";
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
        return array (  189 => 96,  174 => 87,  166 => 82,  159 => 78,  152 => 74,  145 => 70,  138 => 66,  130 => 60,  126 => 59,  122 => 58,  68 => 6,  58 => 5,  35 => 1,);
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
\t\t\t\t    <br>
                    <a href=\"{{ path('app_offre_fnew') }}\" class=\"btn btn-primary btn-lg\">Ajouter</a>
{% for partenaire in offres %}
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
\t\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">{{ partenaire.getNomO() }}</a></h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
                                <td>
\t\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">{{ partenaire.getTypeO() }}</a></h4>
\t\t\t\t\t\t\t\t</td>
                                <br>
                                 <td>
\t\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">{{ partenaire.entreprise.getNomE() }}</a></h4>
\t\t\t\t\t\t\t\t</td>
                                <br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offre_delete', {id: partenaire.getId()}) }}\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offre_fedit', {id: partenaire.getId()}) }}\" class=\"btn btn-primary btn-lg\">Edit</a>
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

", "offre/index.html.twig", "C:\\Users\\Mega-PC\\enviproject2\\templates\\offre\\index.html.twig");
    }
}
