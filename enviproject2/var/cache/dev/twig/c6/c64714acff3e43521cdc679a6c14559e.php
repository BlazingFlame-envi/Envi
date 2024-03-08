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

/* calendrier/index.html.twig */
class __TwigTemplate_5ba195958f299a2d26d6851e9681a131 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendrier/index.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "calendrier/index.html.twig", 1);
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
        echo "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css\" rel=\"stylesheet\">

";
        // line 7
        echo "<div id=\"calendrier\"></div>

";
        // line 10
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js\"></script>

";
        // line 14
        echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: '";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendrier");
        echo "',
             eventContent: function(info) {
                return {
                    html: '<b>' + info.event.title + '</b><br>' +
                          'Type: ' + info.event..type + '<br>' +
                          'Participants: ' + info.event.Participants + '<br>' +
                          'Emplacement: ' + info.event.Emplacement + '<br>' +
                          'Date: ' + info.event.start.toLocaleDateString()
                };
            },
            eventClick: function(info) {
                // Gestionnaire de clic d'événement, vous pouvez ajouter votre propre logique ici
                alert('Event: ' + info.event.title);
            } // URL pour récupérer les événements
        });
        calendar.render();
    });
</script>
<script>
    // Fonction pour récupérer les nouvelles tâches depuis l'endpoint Symfony et mettre à jour le calendrier
    function mettreAJourCalendrier() {
        // Faites une requête AJAX à l'endpoint Symfony
        fetch('";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendrier");
        echo "?lastCheck=' + lastCheck)
            .then(response => response.json())
            .then(data => {
                // Mettez à jour le calendrier avec les nouvelles données
                data.forEach(tache => {
                    calendar.addEvent(tache);
                });
                // Mettez à jour lastCheck avec la date actuelle pour la prochaine requête
                lastCheck = new Date().toISOString();
            })
            .catch(error => console.error('Erreur lors de la mise à jour du calendrier :', error));
    }

    // Interval pour interroger périodiquement l'endpoint Symfony
    const interval = 60000; // Interval en millisecondes (par exemple, toutes les minutes)
    let lastCheck = new Date().toISOString(); // Initialisez lastCheck avec la date actuelle
    setInterval(mettreAJourCalendrier, interval);
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
        return "calendrier/index.html.twig";
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
        return array (  113 => 41,  88 => 19,  81 => 14,  76 => 10,  72 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basefront.html.twig' %}

{% block body %}
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css\" rel=\"stylesheet\">

{# Créer un conteneur pour le calendrier #}
<div id=\"calendrier\"></div>

{# Inclure les fichiers JavaScript #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js\"></script>

{# Initialiser le calendrier avec JavaScript #}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: '{{ path('app_calendrier') }}',
             eventContent: function(info) {
                return {
                    html: '<b>' + info.event.title + '</b><br>' +
                          'Type: ' + info.event..type + '<br>' +
                          'Participants: ' + info.event.Participants + '<br>' +
                          'Emplacement: ' + info.event.Emplacement + '<br>' +
                          'Date: ' + info.event.start.toLocaleDateString()
                };
            },
            eventClick: function(info) {
                // Gestionnaire de clic d'événement, vous pouvez ajouter votre propre logique ici
                alert('Event: ' + info.event.title);
            } // URL pour récupérer les événements
        });
        calendar.render();
    });
</script>
<script>
    // Fonction pour récupérer les nouvelles tâches depuis l'endpoint Symfony et mettre à jour le calendrier
    function mettreAJourCalendrier() {
        // Faites une requête AJAX à l'endpoint Symfony
        fetch('{{ path('app_calendrier') }}?lastCheck=' + lastCheck)
            .then(response => response.json())
            .then(data => {
                // Mettez à jour le calendrier avec les nouvelles données
                data.forEach(tache => {
                    calendar.addEvent(tache);
                });
                // Mettez à jour lastCheck avec la date actuelle pour la prochaine requête
                lastCheck = new Date().toISOString();
            })
            .catch(error => console.error('Erreur lors de la mise à jour du calendrier :', error));
    }

    // Interval pour interroger périodiquement l'endpoint Symfony
    const interval = 60000; // Interval en millisecondes (par exemple, toutes les minutes)
    let lastCheck = new Date().toISOString(); // Initialisez lastCheck avec la date actuelle
    setInterval(mettreAJourCalendrier, interval);
</script>
{% endblock %}
", "calendrier/index.html.twig", "D:\\Telechargement\\enviproject2\\templates\\calendrier\\index.html.twig");
    }
}
