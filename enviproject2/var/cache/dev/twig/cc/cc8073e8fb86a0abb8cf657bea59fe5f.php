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

/* back/backevents/indextaches.html.twig */
class __TwigTemplate_f9a054f087fb335e248fb46475e3356a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/backevents/indextaches.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/backevents/indextaches.html.twig"));

        $this->parent = $this->loadTemplate("back/homeback.html.twig", "back/backevents/indextaches.html.twig", 1);
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
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"successModalLabel\">Congrats</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
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
        // line 25
        echo "<div class=\"content-body\">
            <div class=\"container-fluid mt-3\">
                <div class=\"row\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"active-member\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-xs mb-0\">
                                            <thead>
                                                <tr>                   
       
                                                </tr>
                                            </thead>
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taches"]) || array_key_exists("taches", $context) ? $context["taches"] : (function () { throw new RuntimeError('Variable "taches" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tache"]) {
            // line 41
            echo "<div class=\"col-md-4 col-sm-4 partner-item\">
                            <div class=\"service-item\">
<tbody>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t <h4>";
            // line 45
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nomT", [], "any", false, false, false, 45)), "html", null, true);
            echo "</h4>
                                <p>Type :  ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "typeT", [], "any", false, false, false, 46), "html", null, true);
            echo " </p>
                                <p>Nombre de Participants :  ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "nbpartT", [], "any", false, false, false, 47), "html", null, true);
            echo " </p>
                                <p>Emplacement :  ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "emplT", [], "any", false, false, false, 48), "html", null, true);
            echo "</p> 
                                <p>Date :  ";
            // line 49
            ((twig_get_attribute($this->env, $this->source, $context["tache"], "dateT", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "dateT", [], "any", false, false, false, 49), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
                                <p>Succes :  ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tache"], "succes", [], "any", false, false, false, 50), "html", null, true);
            echo " </p>
                                  <td>
                                                   <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taches_delete_back", ["id" => twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t\t\t\t\t                   <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taches_edit_back", ["id" => twig_get_attribute($this->env, $this->source, $context["tache"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg\">Edit</a>                                                   </td>
                                                   
                                            </tbody>
                                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tache'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        </div>
</div>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/backevents/indextaches.html.twig";
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
        return array (  166 => 57,  156 => 53,  152 => 52,  147 => 50,  143 => 49,  139 => 48,  135 => 47,  131 => 46,  127 => 45,  121 => 41,  117 => 40,  100 => 25,  85 => 16,  72 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/homeback.html.twig' %}

{% block body %}
{% for flashMessage in app.flashes('success') %}
    <!-- Modal -->
    <div class=\"modal fade\" id=\"successModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"successModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"successModalLabel\">Congrats</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ flashMessage }}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
{% endfor %}
<div class=\"content-body\">
            <div class=\"container-fluid mt-3\">
                <div class=\"row\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"active-member\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-xs mb-0\">
                                            <thead>
                                                <tr>                   
       
                                                </tr>
                                            </thead>
{% for tache in taches %}
<div class=\"col-md-4 col-sm-4 partner-item\">
                            <div class=\"service-item\">
<tbody>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t <h4>{{ tache.nomT | upper }}</h4>
                                <p>Type :  {{ tache.typeT }} </p>
                                <p>Nombre de Participants :  {{ tache.nbpartT }} </p>
                                <p>Emplacement :  {{ tache.emplT  }}</p> 
                                <p>Date :  {{ tache.dateT ? tache.dateT|date('Y-m-d') : '' }}</p>
                                <p>Succes :  {{ tache.succes }} </p>
                                  <td>
                                                   <a href=\"{{ path('app_taches_delete_back', {id: tache.id}) }}\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t\t\t\t\t                   <a href=\"{{ path('app_taches_edit_back', {id: tache.id}) }}\" class=\"btn btn-primary btn-lg\">Edit</a>                                                   </td>
                                                   
                                            </tbody>
                                              {% endfor %}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        </div>
</div>
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
{% endblock %}

\t\t\t\t\t\t\t\t", "back/backevents/indextaches.html.twig", "D:\\Telechargement\\enviproject2\\templates\\back\\backevents\\indextaches.html.twig");
    }
}
