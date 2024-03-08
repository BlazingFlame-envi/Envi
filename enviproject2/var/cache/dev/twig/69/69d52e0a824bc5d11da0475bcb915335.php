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

/* back/afficheroffreback.html.twig */
class __TwigTemplate_96c5af83e81db3b884761ad367202454 extends Template
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
        return "back/homeback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/afficheroffreback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/afficheroffreback.html.twig"));

        $this->parent = $this->loadTemplate("back/homeback.html.twig", "back/afficheroffreback.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
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

     <div class=\"content-body\">

            <div class=\"row page-titles mx-0\">
                <div class=\"col p-md-0\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back");
        echo "\">Dashboard</a></li>
                        <li class=\"breadcrumb-item active\"><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back");
        echo "\">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 41
            echo "
            <div class=\"container-fluid\">
<table class=\"blue-border-table \">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, design\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "getId", [], "method", false, false, false, 47), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "getNomO", [], "method", false, false, false, 51), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
                                <td>
\t\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "getTypeO", [], "method", false, false, false, 55), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t</td>
                                <br>
                                 <td>
\t\t\t\t\t\t\t\t\t<h4><a href=\"#\" style=\"color: black;\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["partenaire"], "entreprise", [], "any", false, false, false, 59), "getNomE", [], "method", false, false, false, 59), "html", null, true);
            echo "</a></h4>
\t\t\t\t\t\t\t\t</td>
                                <br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreback_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "getId", [], "method", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreback_fedit", ["id" => twig_get_attribute($this->env, $this->source, $context["partenaire"], "getId", [], "method", false, false, false, 68)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg\">Edit</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</table>

            </div>
            <!-- #/ container -->
            
        
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/afficheroffreback.html.twig";
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
        return array (  179 => 81,  160 => 68,  152 => 63,  145 => 59,  138 => 55,  131 => 51,  124 => 47,  116 => 41,  112 => 40,  104 => 35,  100 => 34,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/homeback.html.twig' %}

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

     <div class=\"content-body\">

            <div class=\"row page-titles mx-0\">
                <div class=\"col p-md-0\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_back') }}\">Dashboard</a></li>
                        <li class=\"breadcrumb-item active\"><a href=\"{{ path('app_back') }}\">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
{% for partenaire in offres %}

            <div class=\"container-fluid\">
<table class=\"blue-border-table \">
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
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offreback_delete', {id: partenaire.getId()}) }}\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offreback_fedit', {id: partenaire.getId()}) }}\" class=\"btn btn-primary btn-lg\">Edit</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</table>

            </div>
            <!-- #/ container -->
            
        
{% endfor %}
</div>
{% endblock %}", "back/afficheroffreback.html.twig", "C:\\Users\\Mega-PC\\enviproject2\\templates\\back\\afficheroffreback.html.twig");
    }
}
