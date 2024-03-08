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

/* taches/index.html.twig */
class __TwigTemplate_0f7e072dd5ec37763c3af6e3aec8bb59 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taches/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taches/index.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "taches/index.html.twig", 1);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", ["success"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "    <!-- Modal -->
    <div class=\"modal fade\" id=\"successModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"successModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"successModalLabel\">Félicitations!</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"alert alert-success\" role=\"alert\">
                        ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    <section class=\"service-2 section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">

                <div class=\"col-lg-6\">
                    <!-- section title -->
                    <div class=\"title text-center\">
                        <h2>Les Taches</h2>
                        <br>
                        <input type=\"text\" id=\"search\" placeholder=\"Rechercher par nom...\" class=\"form-control\">
                        <div class=\"border\"></div>
                        <div class=\"col-md-12 title text-center\">
                        <p><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taches_favorites");
        echo "\" class=\"btn btn-success\">Favoris</a> </p>
                        </div>
                    </div>
                    <!-- /section title -->
                </div>
            </div>
            <div class=\"row\" id=\"partner-list\">

                <div class=\"col-md-12\">
                    <div class=\"row text-center\">
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 50
            echo "                        <div class=\"col-md-4 col-sm-4 partner-item\">
                            <div class=\"service-item\">
                                
                                <h4>";
            // line 53
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nomT", [], "any", false, false, false, 53)), "html", null, true);
            echo "</h4>
                                <p>Type :  ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "typeT", [], "any", false, false, false, 54), "html", null, true);
            echo " </p>
                                <p>Nombre de Participants :  ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nbpartT", [], "any", false, false, false, 55), "html", null, true);
            echo " </p>
                                <p>Emplacement :  ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "emplT", [], "any", false, false, false, 56), "html", null, true);
            echo "</p> 
                                <p>Date :  ";
            // line 57
            ((twig_get_attribute($this->env, $this->source, $context["tache"], "dateT", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "dateT", [], "any", false, false, false, 57), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
                                <p>Succes :  ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "succes", [], "any", false, false, false, 58), "html", null, true);
            echo " </p>
                                ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["tache"], "favoris", [], "any", false, false, false, 59)) {
                // line 60
                echo "                                <button class=\"btn btn-warning unfavorite-btn\" data-tache=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 60), "html", null, true);
                echo "\">Retirer des favoris</button>
                                ";
            } else {
                // line 62
                echo "                                <button class=\"btn btn-primary favorite-btn\" data-tache=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 62), "html", null, true);
                echo "\">Ajouter aux favoris</button>
                                ";
            }
            // line 64
            echo "                                <br>
                               <p>  <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taches_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\"><i class=\"fa\">&#xf014;</i>Delete</a> </p>
                               <p><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taches_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"class=\"btn btn-success\">Edit</a></p>

                            </div>
                        </div><!-- END COL -->
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                    </div>
                    
    



                </div>
                <div class=\"col-md-12 title text-center\">
                <p><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taches_new");
        echo "\" class=\"btn btn-success\">Ajouter Tache</a> </p>
                </div>
            </div> <!-- End row -->
                
            <!-- Pagination Container -->
            <div class=\"row\">
                <div class=\"col-md-12 text-center\" id=\"pagination-container\">
                    <!-- Pagination links will be dynamically added here -->
                </div>
            </div> <!-- End Pagination -->
        </div> <!-- End container -->
    </section> <!-- End section -->
    

    <!-- JavaScript for Pagination -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const itemsPerPage = 3; // Change this value as needed
            const partners = document.querySelectorAll('.partner-item');
            const numPages = Math.ceil(partners.length / itemsPerPage);

            function paginate(page) {
                partners.forEach((partner, index) => {
                    const start = (page - 1) * itemsPerPage;
                    const end = start + itemsPerPage;
                    if (index >= start && index < end) {
                        partner.style.display = 'block';
                    } else {
                        partner.style.display = 'none';
                    }
                });
            }

            function createPaginationLinks() {
                const paginationContainer = document.getElementById('pagination-container');
                for (let i = 1; i <= numPages; i++) {
                    const link = document.createElement('a');
                    link.href = '#';
                    link.textContent = i;
                    link.addEventListener('click', function(event) {
                        event.preventDefault();
                        paginate(i);
                    });
                    paginationContainer.appendChild(link);
                    paginationContainer.appendChild(document.createTextNode(' '));
                }
            }

            createPaginationLinks();
            paginate(1); // Show the first page initially
        });
    </script>
       <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                searchItems(\$(this).val());
            });
        });

        function searchItems(value){
            \$('.partner-item').each(function(){
                var found = false;
                \$(this).find('h4').each(function(){
                    if(\$(this).text().toLowerCase().includes(value.toLowerCase())){
                        found = true;
                        return false;
                    }
                });
                if(found || value === ''){
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        }
    </script>
    <script>
    // Afficher le modal dès que la page est chargée
    \$(document).ready(function() {
        \$('#successModal').modal('show');
    });
</script>
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
        return "taches/index.html.twig";
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
        return array (  204 => 79,  194 => 71,  183 => 66,  179 => 65,  176 => 64,  170 => 62,  164 => 60,  162 => 59,  158 => 58,  154 => 57,  150 => 56,  146 => 55,  142 => 54,  138 => 53,  133 => 50,  129 => 49,  116 => 39,  102 => 27,  86 => 17,  72 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}

{% block body %}
{% for flashMessage in app.flashes('success') %}
    <!-- Modal -->
    <div class=\"modal fade\" id=\"successModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"successModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"successModalLabel\">Félicitations!</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"alert alert-success\" role=\"alert\">
                        {{ flashMessage }}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
{% endfor %}
    <section class=\"service-2 section\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">

                <div class=\"col-lg-6\">
                    <!-- section title -->
                    <div class=\"title text-center\">
                        <h2>Les Taches</h2>
                        <br>
                        <input type=\"text\" id=\"search\" placeholder=\"Rechercher par nom...\" class=\"form-control\">
                        <div class=\"border\"></div>
                        <div class=\"col-md-12 title text-center\">
                        <p><a href=\"{{ path('app_taches_favorites') }}\" class=\"btn btn-success\">Favoris</a> </p>
                        </div>
                    </div>
                    <!-- /section title -->
                </div>
            </div>
            <div class=\"row\" id=\"partner-list\">

                <div class=\"col-md-12\">
                    <div class=\"row text-center\">
                        {% for tache in taches %}
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
                                {% else %}
                                <button class=\"btn btn-primary favorite-btn\" data-tache=\"{{ tache.id }}\">Ajouter aux favoris</button>
                                {% endif %}
                                <br>
                               <p>  <a href=\"{{ path('app_taches_delete',{'id': tache.id}) }}\"><i class=\"fa\">&#xf014;</i>Delete</a> </p>
                               <p><a href=\"{{ path('app_taches_edit', {'id': tache.id}) }}\"class=\"btn btn-success\">Edit</a></p>

                            </div>
                        </div><!-- END COL -->
                        {% endfor %}
                    </div>
                    
    



                </div>
                <div class=\"col-md-12 title text-center\">
                <p><a href=\"{{ path('app_taches_new') }}\" class=\"btn btn-success\">Ajouter Tache</a> </p>
                </div>
            </div> <!-- End row -->
                
            <!-- Pagination Container -->
            <div class=\"row\">
                <div class=\"col-md-12 text-center\" id=\"pagination-container\">
                    <!-- Pagination links will be dynamically added here -->
                </div>
            </div> <!-- End Pagination -->
        </div> <!-- End container -->
    </section> <!-- End section -->
    

    <!-- JavaScript for Pagination -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const itemsPerPage = 3; // Change this value as needed
            const partners = document.querySelectorAll('.partner-item');
            const numPages = Math.ceil(partners.length / itemsPerPage);

            function paginate(page) {
                partners.forEach((partner, index) => {
                    const start = (page - 1) * itemsPerPage;
                    const end = start + itemsPerPage;
                    if (index >= start && index < end) {
                        partner.style.display = 'block';
                    } else {
                        partner.style.display = 'none';
                    }
                });
            }

            function createPaginationLinks() {
                const paginationContainer = document.getElementById('pagination-container');
                for (let i = 1; i <= numPages; i++) {
                    const link = document.createElement('a');
                    link.href = '#';
                    link.textContent = i;
                    link.addEventListener('click', function(event) {
                        event.preventDefault();
                        paginate(i);
                    });
                    paginationContainer.appendChild(link);
                    paginationContainer.appendChild(document.createTextNode(' '));
                }
            }

            createPaginationLinks();
            paginate(1); // Show the first page initially
        });
    </script>
       <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                searchItems(\$(this).val());
            });
        });

        function searchItems(value){
            \$('.partner-item').each(function(){
                var found = false;
                \$(this).find('h4').each(function(){
                    if(\$(this).text().toLowerCase().includes(value.toLowerCase())){
                        found = true;
                        return false;
                    }
                });
                if(found || value === ''){
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        }
    </script>
    <script>
    // Afficher le modal dès que la page est chargée
    \$(document).ready(function() {
        \$('#successModal').modal('show');
    });
</script>
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

{% endblock %}", "taches/index.html.twig", "D:\\Telechargement\\enviproject2\\templates\\taches\\index.html.twig");
    }
}
