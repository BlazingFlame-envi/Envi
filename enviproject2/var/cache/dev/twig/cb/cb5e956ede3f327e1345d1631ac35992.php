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

/* taches/favorites.html.twig */
class __TwigTemplate_1fc48e81b14d365e57b53f946a0eb78a extends Template
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
        // line 4
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taches/favorites.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taches/favorites.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "taches/favorites.html.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <section class=\"service-2 section\">
        <div class=\"container\">
            <h2>Tâches Favorites</h2>
            <div class=\"col-md-12 title text-center\">
                        <p><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taches_index");
        echo "\" class=\"btn btn-success\">Retour aux Taches</a> </p>
                        </div>
            <div class=\"row text-center\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 15
            echo "                    <div class=\"col-md-4 col-sm-4 partner-item\">
                        <div class=\"service-item\">
                            <h4>";
            // line 17
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nomT", [], "any", false, false, false, 17)), "html", null, true);
            echo "</h4>
                            <p>Type :  ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "typeT", [], "any", false, false, false, 18), "html", null, true);
            echo " </p>
                            <p>Nombre de Participants :  ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nbpartT", [], "any", false, false, false, 19), "html", null, true);
            echo " </p>
                            <p>Emplacement :  ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "emplT", [], "any", false, false, false, 20), "html", null, true);
            echo "</p> 
                            <p>Date :  ";
            // line 21
            ((twig_get_attribute($this->env, $this->source, $context["tache"], "dateT", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "dateT", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
                            <p>Succes :  ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "succes", [], "any", false, false, false, 22), "html", null, true);
            echo " </p>
                             ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["tache"], "favoris", [], "any", false, false, false, 23)) {
                // line 24
                echo "                            <button class=\"btn btn-warning unfavorite-btn\" data-tache=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\">Retirer des favoris</button>
                             ";
            }
            // line 26
            echo "                            <br>
                            <p>  <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taches_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"><i class=\"fa\">&#xf014;</i>Delete</a> </p>
                            <p><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taches_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Edit</a></p>
                        </div>
                    </div><!-- END COL -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </div>
        </div>
    </section>
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
\$(document).ready(function() {
    \$('.favorite-btn').click(function() {
        var tacheId = \$(this).data('tache');
        var button = \$(this);
        
        \$.post('/marquer-favoris/' + tacheId, function(response) {
            if (response.success) {
                // Mettre à jour la vue si l'action a réussi
                button.text('Retirer des favoris');
                button.removeClass('btn-primary').addClass('btn-warning');
                button.removeClass('favorite-btn').addClass('unfavorite-btn');
                location.reload();
                // Autres mises à jour de la vue si nécessaire
            } else {
                // Gérer les erreurs si nécessaire
            }
        });
    });

    \$('.unfavorite-btn').click(function() {
        var tacheId = \$(this).data('tache');
        var button = \$(this);
        
        \$.post('/retirer-favoris/' + tacheId, function(response) {
            if (response.success) {
                // Mettre à jour la vue si l'action a réussi
                button.text('Ajouter aux favoris');
                button.removeClass('btn-warning').addClass('btn-primary');
                button.removeClass('unfavorite-btn').addClass('favorite-btn');
                location.reload();
                // Autres mises à jour de la vue si nécessaire
            } else {
                // Gérer les erreurs si nécessaire
            }
        });
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "taches/favorites.html.twig";
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
        return array (  137 => 32,  127 => 28,  123 => 27,  120 => 26,  114 => 24,  112 => 23,  108 => 22,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  84 => 15,  80 => 14,  74 => 11,  68 => 7,  58 => 6,  35 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("


{% extends 'basefront.html.twig' %}

{% block body %}
    <section class=\"service-2 section\">
        <div class=\"container\">
            <h2>Tâches Favorites</h2>
            <div class=\"col-md-12 title text-center\">
                        <p><a href=\"{{ path('app_taches_index') }}\" class=\"btn btn-success\">Retour aux Taches</a> </p>
                        </div>
            <div class=\"row text-center\">
                {% for tache in favorites %}
                    <div class=\"col-md-4 col-sm-4 partner-item\">
                        <div class=\"service-item\">
                            <h4>{{ tache.nomT | upper }}</h4>
                            <p>Type :  {{ tache.typeT }} </p>
                            <p>Nombre de Participants :  {{ tache.nbpartT }} </p>
                            <p>Emplacement :  {{ tache.emplT  }}</p> 
                            <p>Date :  {{ tache.dateT ? tache.dateT|date('Y-m-d') : '' }}</p>
                            <p>Succes :  {{ tache.succes }} </p>
                             {% if tache.favoris %}
                            <button class=\"btn btn-warning unfavorite-btn\" data-tache=\"{{ tache.id }}\">Retirer des favoris</button>
                             {% endif %}
                            <br>
                            <p>  <a href=\"{{ path('app_taches_delete',{'id': tache.id}) }}\"><i class=\"fa\">&#xf014;</i>Delete</a> </p>
                            <p><a href=\"{{ path('app_taches_edit', {'id': tache.id}) }}\" class=\"btn btn-success\">Edit</a></p>
                        </div>
                    </div><!-- END COL -->
                {% endfor %}
            </div>
        </div>
    </section>
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
\$(document).ready(function() {
    \$('.favorite-btn').click(function() {
        var tacheId = \$(this).data('tache');
        var button = \$(this);
        
        \$.post('/marquer-favoris/' + tacheId, function(response) {
            if (response.success) {
                // Mettre à jour la vue si l'action a réussi
                button.text('Retirer des favoris');
                button.removeClass('btn-primary').addClass('btn-warning');
                button.removeClass('favorite-btn').addClass('unfavorite-btn');
                location.reload();
                // Autres mises à jour de la vue si nécessaire
            } else {
                // Gérer les erreurs si nécessaire
            }
        });
    });

    \$('.unfavorite-btn').click(function() {
        var tacheId = \$(this).data('tache');
        var button = \$(this);
        
        \$.post('/retirer-favoris/' + tacheId, function(response) {
            if (response.success) {
                // Mettre à jour la vue si l'action a réussi
                button.text('Ajouter aux favoris');
                button.removeClass('btn-warning').addClass('btn-primary');
                button.removeClass('unfavorite-btn').addClass('favorite-btn');
                location.reload();
                // Autres mises à jour de la vue si nécessaire
            } else {
                // Gérer les erreurs si nécessaire
            }
        });
    });
});
</script>
{% endblock %}", "taches/favorites.html.twig", "D:\\Telechargement\\enviproject2\\templates\\taches\\favorites.html.twig");
    }
}
