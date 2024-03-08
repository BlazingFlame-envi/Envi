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

/* back/backevents/indexsucces.html.twig */
class __TwigTemplate_ea3cf2dde277e4871f943ccd5c663344 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/backevents/indexsucces.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/backevents/indexsucces.html.twig"));

        $this->parent = $this->loadTemplate("back/homeback.html.twig", "back/backevents/indexsucces.html.twig", 1);
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["succes"]) || array_key_exists("succes", $context) ? $context["succes"] : (function () { throw new RuntimeError('Variable "succes" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["succe"]) {
            // line 43
            echo "                            <div class=\"col-md-4 col-sm-4 partner-item\">
                            <div class=\"service-item\">
<tbody>
                                <h4>";
            // line 46
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["succe"], "typeS", [], "any", false, false, false, 46)), "html", null, true);
            echo "</h4
                                <p>Nom du Beneficiaire :  ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["succe"], "nombenefS", [], "any", false, false, false, 47), "html", null, true);
            echo " </p>
                                <p>Sponsor :  ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["succe"], "nomsponS", [], "any", false, false, false, 48), "html", null, true);
            echo "</p> 
                                <br>
                                  <td>
                                                   <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_succes_delete_back", ["id" => twig_get_attribute($this->env, $this->source, $context["succe"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t\t\t\t\t                   <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_succes_edit_back", ["id" => twig_get_attribute($this->env, $this->source, $context["succe"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg\">Edit</a>                                                   </td>
                                                   
                                            </tbody>
                                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['succe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
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
        return "back/backevents/indexsucces.html.twig";
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
        return array (  156 => 56,  146 => 52,  142 => 51,  136 => 48,  132 => 47,  128 => 46,  123 => 43,  119 => 42,  102 => 27,  86 => 17,  72 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/homeback.html.twig' %}

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
{% for succe in succes %}
                            <div class=\"col-md-4 col-sm-4 partner-item\">
                            <div class=\"service-item\">
<tbody>
                                <h4>{{ succe.typeS | upper }}</h4
                                <p>Nom du Beneficiaire :  {{ succe.nombenefS }} </p>
                                <p>Sponsor :  {{ succe.nomsponS  }}</p> 
                                <br>
                                  <td>
                                                   <a href=\"{{ path('app_succes_delete_back', {id: succe.id}) }}\" class=\"btn btn-danger\">Delete</a>
\t\t\t\t\t\t\t\t                   <a href=\"{{ path('app_succes_edit_back', {id: succe.id}) }}\" class=\"btn btn-primary btn-lg\">Edit</a>                                                   </td>
                                                   
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

\t\t\t\t\t\t\t\t", "back/backevents/indexsucces.html.twig", "D:\\Telechargement\\enviproject2\\templates\\back\\backevents\\indexsucces.html.twig");
    }
}
