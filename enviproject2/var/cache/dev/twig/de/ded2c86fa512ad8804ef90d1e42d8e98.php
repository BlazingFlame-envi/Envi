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

/* taches/showcalendar.html.twig */
class __TwigTemplate_c6e3a580412b4d07d685fefac3e799ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taches/showcalendar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "taches/showcalendar.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "taches/showcalendar.html.twig", 1);
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
        echo "<!-- Inclure FullCalendar CSS -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.css\" rel=\"stylesheet\" />


<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js\"></script>
    <h1>Calendrier des tâches</h1>
    <div id=\"calendar\"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                // Configuration du calendrier (vues, options, etc.)
                // Leave events empty initially
                initialView: 'dayGridMonth',
                
                //events: [],
               //events: '";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendrier");
        echo "',
                events: []
            });
            calendar.render();
           /*
            // Make AJAX request to fetch events data
            fetch('/calendrier') // Update URL to match your Symfony route
                .then(response => response.json())
                .then(data => {
                    // Set fetched data as events
                    calendar.removeAllEventSources();
                    calendar.addEventSource(data);
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });*/
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
        return "taches/showcalendar.html.twig";
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
        return array (  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}

{% block body %}
<!-- Inclure FullCalendar CSS -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.0/main.min.css\" rel=\"stylesheet\" />


<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js\"></script>
    <h1>Calendrier des tâches</h1>
    <div id=\"calendar\"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                // Configuration du calendrier (vues, options, etc.)
                // Leave events empty initially
                initialView: 'dayGridMonth',
                
                //events: [],
               //events: '{{ path('app_calendrier') }}',
                events: []
            });
            calendar.render();
           /*
            // Make AJAX request to fetch events data
            fetch('/calendrier') // Update URL to match your Symfony route
                .then(response => response.json())
                .then(data => {
                    // Set fetched data as events
                    calendar.removeAllEventSources();
                    calendar.addEventSource(data);
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });*/
        });
    </script>
{% endblock %}
", "taches/showcalendar.html.twig", "D:\\Telechargement\\enviproject2\\templates\\taches\\showcalendar.html.twig");
    }
}
