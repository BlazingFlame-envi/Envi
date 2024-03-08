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

/* notyf/index.html.twig */
class __TwigTemplate_8d9389d83b88f0f72881516de1282c48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notyf/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notyf/index.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "notyf/index.html.twig", 1);
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
        echo "\t<nav>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<strong>Notyf 🚀</strong>
\t\t\t</li>
\t\t</ul>
\t\t<ul>
\t\t\t<li><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notyf", ["notyf" => "success"]);
        echo "\" role=\"button\">Success</a></li>
            <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notyf", ["notyf" => "info"]);
        echo "\" role=\"button\">Info</a></li>
            <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notyf", ["notyf" => "warning"]);
        echo "\" role=\"button\">Warning</a></li>
            <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notyf", ["notyf" => "error"]);
        echo "\" role=\"button\">Error</a></li>
\t\t</ul>
\t</nav>

    <article>
        <h1>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["notyf"]) || array_key_exists("notyf", $context) ? $context["notyf"] : (function () { throw new RuntimeError('Variable "notyf" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</h1>
    </article>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "notyf/index.html.twig";
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
        return array (  97 => 21,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}



{% block body %}
\t<nav>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<strong>Notyf 🚀</strong>
\t\t\t</li>
\t\t</ul>
\t\t<ul>
\t\t\t<li><a href=\"{{ path('app_notyf', {'notyf': 'success'}) }}\" role=\"button\">Success</a></li>
            <li><a href=\"{{ path('app_notyf', {'notyf': 'info'}) }}\" role=\"button\">Info</a></li>
            <li><a href=\"{{ path('app_notyf', {'notyf': 'warning'}) }}\" role=\"button\">Warning</a></li>
            <li><a href=\"{{ path('app_notyf', {'notyf': 'error'}) }}\" role=\"button\">Error</a></li>
\t\t</ul>
\t</nav>

    <article>
        <h1>{{ notyf }}</h1>
    </article>

{% endblock %}", "notyf/index.html.twig", "D:\\Telechargement\\enviproject2\\templates\\notyf\\index.html.twig");
    }
}
