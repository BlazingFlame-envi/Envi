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

/* succes/index.html.twig */
class __TwigTemplate_d57879bb788445eea4dca73c2f1bcb94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "succes/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "succes/index.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "succes/index.html.twig", 1);
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
                        <h2>Nos Partenaires</h2>
                        
                        <input type=\"text\" id=\"search\" placeholder=\"Rechercher par nom...\" class=\"form-control\">
                        <div class=\"border\"></div>
                    </div>
                    <!-- /section title -->
                </div>
            </div>
            <div class=\"row\" id=\"partner-list\">

                <div class=\"col-md-12\">
                    <div class=\"row text-center\">
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["succes"]) || array_key_exists("succes", $context) ? $context["succes"] : (function () { throw new RuntimeError('Variable "succes" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["succe"]) {
            // line 47
            echo "                        <div class=\"col-md-4 col-sm-4 partner-item\">
                            <div class=\"service-item\">
                                
                                <h4>";
            // line 50
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["succe"], "typeS", [], "any", false, false, false, 50)), "html", null, true);
            echo "</h4
                                <p>Nom du Beneficiaire :  ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["succe"], "nombenefS", [], "any", false, false, false, 51), "html", null, true);
            echo " </p>
                                <p>Sponsor :  ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["succe"], "nomsponS", [], "any", false, false, false, 52), "html", null, true);
            echo "</p> 
                               <p>  <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_succes_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["succe"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\"><i class=\"fa\">&#xf014;</i>Delete</a> </p>
                               <p><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_succes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["succe"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"class=\"btn btn-success\">Edit</a></p>

                            </div>
                        </div><!-- END COL -->
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['succe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        <div class=\"col-md-12 title text-center\">
                        <p><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_succes_new");
        echo "\" class=\"btn btn-success\">Ajouter Succes</a> </p>
                        <br>
                        </div>
                    </div>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "succes/index.html.twig";
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
        return array (  162 => 60,  159 => 59,  148 => 54,  144 => 53,  140 => 52,  136 => 51,  132 => 50,  127 => 47,  123 => 46,  102 => 27,  86 => 17,  72 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
                        <h2>Nos Partenaires</h2>
                        
                        <input type=\"text\" id=\"search\" placeholder=\"Rechercher par nom...\" class=\"form-control\">
                        <div class=\"border\"></div>
                    </div>
                    <!-- /section title -->
                </div>
            </div>
            <div class=\"row\" id=\"partner-list\">

                <div class=\"col-md-12\">
                    <div class=\"row text-center\">
                        {% for succe in succes %}
                        <div class=\"col-md-4 col-sm-4 partner-item\">
                            <div class=\"service-item\">
                                
                                <h4>{{ succe.typeS | upper }}</h4
                                <p>Nom du Beneficiaire :  {{ succe.nombenefS }} </p>
                                <p>Sponsor :  {{ succe.nomsponS  }}</p> 
                               <p>  <a href=\"{{ path('app_succes_delete',{'id': succe.id}) }}\"><i class=\"fa\">&#xf014;</i>Delete</a> </p>
                               <p><a href=\"{{ path('app_succes_edit', {'id': succe.id}) }}\"class=\"btn btn-success\">Edit</a></p>

                            </div>
                        </div><!-- END COL -->
                        {% endfor %}
                        <div class=\"col-md-12 title text-center\">
                        <p><a href=\"{{ path('app_succes_new') }}\" class=\"btn btn-success\">Ajouter Succes</a> </p>
                        <br>
                        </div>
                    </div>
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
{% endblock %}



", "succes/index.html.twig", "D:\\Telechargement\\enviproject2\\templates\\succes\\index.html.twig");
    }
}
