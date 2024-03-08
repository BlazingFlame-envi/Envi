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

/* back/homeback.html.twig */
class __TwigTemplate_75b53298dd2fa9205c0452fc9bcbee51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/homeback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/homeback.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    
    <!-- theme meta -->
    <meta name=\"theme-name\" content=\"quixlab\" />
  
    <title>Envi - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon --> 
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/favicon.png"), "html", null, true);
        echo "\">
    <!-- Pignose Calender -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/pg-calendar/css/pignose.calendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Chartist -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/chartist/css/chartist.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css"), "html", null, true);
        echo "\">
    <!-- Custom Stylesheet -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->

    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id=\"main-wrapper\">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class=\"nav-header\">
            <div class=\"brand-logo\">
                <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back");
        echo "\">
                    <b class=\"logo-abbr\"><img src=\"(";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/slider/envi.jpg"), "html", null, true);
        echo "\" alt=\"\"> </b>
                    <span class=\"logo-compact\"><img src=\"(";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/slider/envi.jpg"), "html", null, true);
        echo "\" alt=\"\"></span>
                    <span class=\"brand-title\">
                        <img src=\"(";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/slider/envi.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        ";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 176
        echo "        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class=\"nk-sidebar\">           
            <div class=\"nk-nav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                       <li>
                        <a href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back");
        echo "\" aria-expanded=\"false\">
                            <i class=\"icon-badge menu-icon\"></i><span class=\"nav-text\">Dashboard</span>
                        </a>
                    </li>

                     <li>
                        <a href=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaire");
        echo "\" aria-expanded=\"false\">
                            <i class=\"icon-badge menu-icon\"></i><span class=\"nav-text\">Front</span>
                        </a>
                    </li>
                   
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-globe-alt menu-icon\"></i><span class=\"nav-text\">Layouts</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./layout-blank.html\">Blank</a></li>
                            <li><a href=\"./layout-one-column.html\">One Column</a></li>
                            <li><a href=\"./layout-two-column.html\">Two column</a></li>
                            <li><a href=\"./layout-compact-nav.html\">Compact Nav</a></li>
                            <li><a href=\"./layout-vertical.html\">Vertical</a></li>
                            <li><a href=\"./layout-horizontal.html\">Horizontal</a></li>
                            <li><a href=\"./layout-boxed.html\">Boxed</a></li>
                            <li><a href=\"./layout-wide.html\">Wide</a></li>
                            
                            
                            <li><a href=\"./layout-fixed-header.html\">Fixed Header</a></li>
                            <li><a href=\"layout-fixed-sidebar.html\">Fixed Sidebar</a></li>
                        </ul>
                    </li>


                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-envelope menu-icon\"></i><span class=\"nav-text\">Partenaires</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 224
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaire_back1");
        echo "\">Afficher Entreprise</a></li>
                            <li><a href=\"";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_partenaireback_fnew");
        echo "\">Ajouter Entreprise</a></li>
                            <li><a href=\"";
        // line 226
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreback");
        echo "\">Afficher Offre</a></li>
                            <li><a href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offreback_fnew");
        echo "\">Ajouter Offre</a></li>
                            
                        </ul>
                    </li>

                   <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-globe-alt menu-icon\"></i><span class=\"nav-text\">Evenements</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 237
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taches_index_back");
        echo "\">Afficher Taches</a></li>
                            <li><a href=\"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_taches_new_back");
        echo "\">Ajouter Taches</a></li>
                            <li><a href=\"";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_succes_index_back");
        echo "\">Afficher Succes</a></li>
                            <li><a href=\"";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_succes_new_back");
        echo "\">Ajouter Succes</a></li>
                        </ul>
                    </li>

                 
                        
                    </li>
                    <li class=\"nav-label\">Widgets</li>
                        <a href=\"widgets.html\" aria-expanded=\"false\">
                            <i class=\"icon-badge menu-icon\"></i><span class=\"nav-text\">Widget</span>
                        </a>
                    </li>
                    <li class=\"nav-label\">Forms</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-note menu-icon\"></i><span class=\"nav-text\">Forms</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./form-basic.html\">Basic Form</a></li>
                            <li><a href=\"./form-validation.html\">Form Validation</a></li>
                            <li><a href=\"./form-step.html\">Step Form</a></li>
                            <li><a href=\"./form-editor.html\">Editor</a></li>
                            <li><a href=\"./form-picker.html\">Picker</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Table</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Table</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./table-basic.html\" aria-expanded=\"false\">Basic Table</a></li>
                            <li><a href=\"./table-datatable.html\" aria-expanded=\"false\">Data Table</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Pages</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-notebook menu-icon\"></i><span class=\"nav-text\">Pages</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./page-login.html\">Login</a></li>
                            <li><a href=\"./page-register.html\">Register</a></li>
                            <li><a href=\"./page-lock.html\">Lock Screen</a></li>
                            <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">Error</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"./page-error-404.html\">Error 404</a></li>
                                    <li><a href=\"./page-error-403.html\">Error 403</a></li>
                                    <li><a href=\"./page-error-400.html\">Error 400</a></li>
                                    <li><a href=\"./page-error-500.html\">Error 500</a></li>
                                    <li><a href=\"./page-error-503.html\">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
         ";
        // line 305
        $this->displayBlock('body', $context, $blocks);
        // line 857
        echo "        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class=\"footer\">
            <div class=\"copyright\">
                <p>Copyright &copy; Designed & Developed by <a href=\"https://themeforest.net/user/quixlab\">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"";
        // line 881
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/common/common.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 882
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/settings.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 884
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/gleek.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 885
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/styleSwitcher.js"), "html", null, true);
        echo "\"></script>

    <!-- Chartjs -->
    <script src=\"";
        // line 888
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Circle progress -->
    <script src=\"";
        // line 890
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Datamap -->
    <script src=\"";
        // line 892
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/d3v3/index.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 893
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/topojson/topojson.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 894
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/datamaps/datamaps.world.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morrisjs -->
    <script src=\"";
        // line 896
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 897
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Pignose Calender -->
    <script src=\"";
        // line 899
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 900
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/pg-calendar/js/pignose.calendar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- ChartistJS -->
    <script src=\"";
        // line 902
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/chartist/js/chartist.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 903
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"), "html", null, true);
        echo "\"></script>



    <script src=\"";
        // line 907
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/dashboard/dashboard-1.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 62
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 63
        echo "        <div class=\"header\">    
            <div class=\"header-content clearfix\">
                
                <div class=\"nav-control\">
                    <div class=\"hamburger\">
                        <span class=\"toggle-icon\"><i class=\"icon-menu\"></i></span>
                    </div>
                </div>
                <div class=\"header-left\">
                    <div class=\"input-group icons\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text bg-transparent border-0 pr-2 pr-sm-3\" id=\"basic-addon1\"><i class=\"mdi mdi-magnify\"></i></span>
                        </div>
                        <input type=\"search\" class=\"form-control\" placeholder=\"Search Dashboard\" aria-label=\"Search Dashboard\">
                        <div class=\"drop-down animated flipInX d-md-none\">
                            <form action=\"#\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"header-right\">
                    <ul class=\"clearfix\">
                        <li class=\"icons dropdown\"><a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell-outline\"></i>
                                <span class=\"badge badge-pill gradient-2\">3</span>
                            </a>
                            <div class=\"drop-down animated fadeIn dropdown-menu dropdown-notfication\">
                                <div class=\"dropdown-content-heading d-flex justify-content-between\">
                                    <span class=\"\">2 New Notifications</span>  
                                    <a href=\"javascript:void()\" class=\"d-inline-block\">
                                        <span class=\"badge badge-pill gradient-2\">5</span>
                                    </a>
                                </div>
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-success-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Events near you</h6>
                                                    <span class=\"notification-text\">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-danger-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Event Started</h6>
                                                    <span class=\"notification-text\">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-success-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Event Ended Successfully</h6>
                                                    <span class=\"notification-text\">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-danger-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Events to Join</h6>
                                                    <span class=\"notification-text\">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class=\"icons dropdown d-none d-md-flex\">
                        
                        </li>
                        <li class=\"icons dropdown\">
                            <div class=\"user-img c-pointer position-relative\"   data-toggle=\"dropdown\">
                                <span class=\"activity active\"></span>
                                <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/user/1.png"), "html", null, true);
        echo "\" height=\"40\" width=\"40\" alt=\"\">

                              
                            </div>
                            <div class=\"drop-down dropdown-profile animated fadeIn dropdown-menu\">
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li>
                                            <a href=\"app-profile.html\"><i class=\"icon-user\"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <i class=\"icon-envelope-open\"></i> <span>Inbox</span> <div class=\"badge gradient-3 badge-pill gradient-1\">3</div>
                                            </a>
                                        </li>
                                        
                                        <hr class=\"my-2\">
                                        <li>
                                            <a href=\"page-lock.html\"><i class=\"icon-lock\"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href=\"page-login.html\"><i class=\"icon-key\"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 305
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 306
        echo "        <div class=\"content-body\">

            <div class=\"container-fluid mt-3\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-1\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">Products Sold</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">4565</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-shopping-cart\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-2\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">Net Profit</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">\$ 8541</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-money\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-3\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">New Customers</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">4565</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-users\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-4\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">Customer Satisfaction</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">99%</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-heart\"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body pb-0 d-flex justify-content-between\">
                                        <div>
                                            <h4 class=\"mb-1\">Product Sales</h4>
                                            <p>Total Earnings of the Month</p>
                                            <h3 class=\"m-0\">\$ 12,555</h3>
                                        </div>
                                        <div>
                                            <ul>
                                                <li class=\"d-inline-block mr-3\"><a class=\"text-dark\" href=\"#\">Day</a></li>
                                                <li class=\"d-inline-block mr-3\"><a class=\"text-dark\" href=\"#\">Week</a></li>
                                                <li class=\"d-inline-block\"><a class=\"text-dark\" href=\"#\">Month</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"chart-wrapper\">
                                        <canvas id=\"chart_widget_2\"></canvas>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div class=\"w-100 mr-2\">
                                                <h6>Pixel 2</h6>
                                                <div class=\"progress\" style=\"height: 6px\">
                                                    <div class=\"progress-bar bg-danger\" style=\"width: 40%\"></div>
                                                </div>
                                            </div>
                                            <div class=\"ml-2 w-100\">
                                                <h6>iPhone X</h6>
                                                <div class=\"progress\" style=\"height: 6px\">
                                                    <div class=\"progress-bar bg-primary\" style=\"width: 80%\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class=\"row\">
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">Order Summary</h4>
                                    <div id=\"morris-bar-chart\"></div>
                                </div>
                            </div>
                            
                        </div>    
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"card card-widget\">
                                <div class=\"card-body\">
                                    <h5 class=\"text-muted\">Order Overview </h5>
                                    <h2 class=\"mt-4\">5680</h2>
                                    <span>Total Revenue</span>
                                    <div class=\"mt-4\">
                                        <h4>30</h4>
                                        <h6>Online Order <span class=\"pull-right\">30%</span></h6>
                                        <div class=\"progress mb-3\" style=\"height: 7px\">
                                            <div class=\"progress-bar bg-primary\" style=\"width: 30%;\" role=\"progressbar\"><span class=\"sr-only\">30% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mt-4\">
                                        <h4>50</h4>
                                        <h6 class=\"m-t-10 text-muted\">Offline Order <span class=\"pull-right\">50%</span></h6>
                                        <div class=\"progress mb-3\" style=\"height: 7px\">
                                            <div class=\"progress-bar bg-success\" style=\"width: 50%;\" role=\"progressbar\"><span class=\"sr-only\">50% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mt-4\">
                                        <h4>20</h4>
                                        <h6 class=\"m-t-10 text-muted\">Cash On Develery <span class=\"pull-right\">20%</span></h6>
                                        <div class=\"progress mb-3\" style=\"height: 7px\">
                                            <div class=\"progress-bar bg-warning\" style=\"width: 20%;\" role=\"progressbar\"><span class=\"sr-only\">20% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"card\">
                                <div class=\"card-body px-0\">
                                    <h4 class=\"card-title px-4 mb-3\">Todo</h4>
                                    <div class=\"todo-list\">
                                        <div class=\"tdl-holder\">
                                            <div class=\"tdl-content\">
                                                <ul id=\"todo_list\">
                                                    <li><label><input type=\"checkbox\"><i></i><span>Get up</span><a href='#' class=\"ti-trash\"></a></label></li>
                                                    <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a href='#' class=\"ti-trash\"></a></label></li>
                                                    <li><label><input type=\"checkbox\"><i></i><span>Don't give up the fight.</span><a href='#' class=\"ti-trash\"></a></label></li>
                                                    <li><label><input type=\"checkbox\" checked><i></i><span>Do something else</span><a href='#' class=\"ti-trash\"></a></label></li>
                                                </ul>
                                            </div>
                                            <div class=\"px-4\">
                                                <input type=\"text\" class=\"tdl-new form-control\" placeholder=\"Write new item and hit 'Enter'...\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                
                                    <img src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/users/8.jpg"), "html", null, true);
        echo "\" class=\"rounded-circle\" alt=\"\">
                                    <h5 class=\"mt-3 mb-1\">Ana Liem</h5>
                                    <p class=\"m-0\">Senior Manager</p>
                                    <!-- <a href=\"javascript:void()\" class=\"btn btn-sm btn-warning\">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                    <img src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/users/5.jpg"), "html", null, true);
        echo "\" class=\"rounded-circle\" alt=\"\">
                                    <h5 class=\"mt-3 mb-1\">John Abraham</h5>
                                    <p class=\"m-0\">Store Manager</p>
                                    <!-- <a href=\"javascript:void()\" class=\"btn btn-sm btn-warning\">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                    <img src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/users/7.jpg"), "html", null, true);
        echo "\" class=\"rounded-circle\" alt=\"\">
                                    <h5 class=\"mt-3 mb-1\">John Doe</h5>
                                    <p class=\"m-0\">Sales Man</p>
                                    <!-- <a href=\"javascript:void()\" class=\"btn btn-sm btn-warning\">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                    <img src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/users/1.jpg"), "html", null, true);
        echo "\" class=\"rounded-circle\" alt=\"\">
                                    <h5 class=\"mt-3 mb-1\">Mehedi Titas</h5>
                                    <p class=\"m-0\">Online Marketer</p>
                                    <!-- <a href=\"javascript:void()\" class=\"btn btn-sm btn-warning\">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"active-member\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-xs mb-0\">
                                            <thead>
                                                <tr>
                                                    <th>Customers</th>
                                                    <th>Product</th>
                                                    <th>Country</th>
                                                    <th>Status</th>
                                                    <th>Payment Method</th>
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/avatar/1.jpg"), "html", null, true);
        echo "\" class=\" rounded-circle mr-3\" alt=\"\">Sarah Smith</td>
                                                    <td>iPhone X</td>
                                                    <td>
                                                        <span>United States</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"./images/avatar/2.jpg\" class=\" rounded-circle mr-3\" alt=\"\">Walter R.</td>
                                                    <td>Pixel 2</td>
                                                    <td><span>Canada</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">50 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"./images/avatar/3.jpg\" class=\" rounded-circle mr-3\" alt=\"\">Andrew D.</td>
                                                    <td>OnePlus</td>
                                                    <td><span>Germany</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-warning  mr-2\"></i> Pending</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"./images/avatar/6.jpg\" class=\" rounded-circle mr-3\" alt=\"\"> Megan S.</td>
                                                    <td>Galaxy</td>
                                                    <td><span>Japan</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"./images/avatar/4.jpg\" class=\" rounded-circle mr-3\" alt=\"\"> Doris R.</td>
                                                    <td>Moto Z2</td>
                                                    <td><span>England</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"./images/avatar/5.jpg\" class=\" rounded-circle mr-3\" alt=\"\">Elizabeth W.</td>
                                                    <td>Notebook Asus</td>
                                                    <td><span>China</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-warning  mr-2\"></i> Pending</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6\">

                        <div class=\"card\">
                            <div class=\"chart-wrapper mb-4\">
                                <div class=\"px-4 pt-4 d-flex justify-content-between\">
                                    <div>
                                        <h4>Sales Activities</h4>
                                        <p>Last 6 Month</p>
                                    </div>
                                    <div>
                                        <span><i class=\"fa fa-caret-up text-success\"></i></span>
                                        <h4 class=\"d-inline-block text-success\">720</h4>
                                        <p class=\" text-danger\">+120.5(5.0%)</p>
                                    </div>
                                </div>
                                <div>
                                        <canvas id=\"chart_widget_3\"></canvas>
                                </div>
                            </div>
                            <div class=\"card-body border-top pt-4\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <ul>
                                            <li>5% Negative Feedback</li>
                                            <li>95% Positive Feedback</li>
                                        </ul>
                                        <div>
                                            <h5>Customer Feedback</h5>
                                            <h3>385749</h3>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div id=\"chart_widget_3_1\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Activity</h4>
                                <div id=\"activity\">
                                    <div class=\"media border-bottom-1 pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/1.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>Received New Order</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                    <div class=\"media border-bottom-1 pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/2.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>iPhone develered</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                    <div class=\"media border-bottom-1 pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/2.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>3 Order Pending</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                    <div class=\"media border-bottom-1 pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/2.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>Join new Manager</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                    <div class=\"media border-bottom-1 pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/2.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>Branch open 5 min Late</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                    <div class=\"media border-bottom-1 pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/2.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>New support ticket received</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                    <div class=\"media pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/3.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>Facebook Post 30 Comments</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-12 col-sm-12 col-xxl-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                    <h4 class=\"card-title mb-0\">Store Location</h4>
                                <div id=\"world-map\" style=\"height: 470px;\"></div>
                            </div>        
                        </div>
                    </div>
                </div>

                

                <div class=\"row\">
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-facebook\">
                                    <span class=\"s-icon\"><i class=\"fa fa-facebook\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">89k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">119k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-linkedin\">
                                    <span class=\"s-icon\"><i class=\"fa fa-linkedin\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">89k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">119k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-googleplus\">
                                    <span class=\"s-icon\"><i class=\"fa fa-google-plus\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">89k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">119k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-twitter\">
                                    <span class=\"s-icon\"><i class=\"fa fa-twitter\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">89k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">119k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- #/ container -->
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
        return "back/homeback.html.twig";
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
        return array (  815 => 546,  782 => 516,  767 => 504,  752 => 492,  737 => 480,  561 => 306,  551 => 305,  511 => 146,  426 => 63,  416 => 62,  400 => 907,  393 => 903,  389 => 902,  384 => 900,  380 => 899,  375 => 897,  371 => 896,  366 => 894,  362 => 893,  358 => 892,  353 => 890,  348 => 888,  342 => 885,  338 => 884,  334 => 883,  330 => 882,  326 => 881,  300 => 857,  298 => 305,  230 => 240,  226 => 239,  222 => 238,  218 => 237,  205 => 227,  201 => 226,  197 => 225,  193 => 224,  159 => 193,  150 => 187,  137 => 176,  135 => 62,  120 => 50,  115 => 48,  111 => 47,  107 => 46,  79 => 21,  74 => 19,  70 => 18,  65 => 16,  60 => 14,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    
    <!-- theme meta -->
    <meta name=\"theme-name\" content=\"quixlab\" />
  
    <title>Envi - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon --> 
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset( 'assetsback/images/favicon.png')}}\">
    <!-- Pignose Calender -->
    <link href=\"{{ asset( 'assetsback/plugins/pg-calendar/css/pignose.calendar.min.css')}}\" rel=\"stylesheet\">
    <!-- Chartist -->
    <link rel=\"stylesheet\" href=\"{{ asset( 'assetsback/plugins/chartist/css/chartist.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset( 'assetsback/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}\">
    <!-- Custom Stylesheet -->
    <link href=\"{{ asset( 'assetsback/css/style.css')}}\" rel=\"stylesheet\">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->

    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id=\"main-wrapper\">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class=\"nav-header\">
            <div class=\"brand-logo\">
                <a href=\"{{ path('app_back') }}\">
                    <b class=\"logo-abbr\"><img src=\"({{ asset('front/images/slider/envi.jpg')}}\" alt=\"\"> </b>
                    <span class=\"logo-compact\"><img src=\"({{ asset('front/images/slider/envi.jpg')}}\" alt=\"\"></span>
                    <span class=\"brand-title\">
                        <img src=\"({{ asset('front/images/slider/envi.jpg')}}\" alt=\"\">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        {% block header %}
        <div class=\"header\">    
            <div class=\"header-content clearfix\">
                
                <div class=\"nav-control\">
                    <div class=\"hamburger\">
                        <span class=\"toggle-icon\"><i class=\"icon-menu\"></i></span>
                    </div>
                </div>
                <div class=\"header-left\">
                    <div class=\"input-group icons\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text bg-transparent border-0 pr-2 pr-sm-3\" id=\"basic-addon1\"><i class=\"mdi mdi-magnify\"></i></span>
                        </div>
                        <input type=\"search\" class=\"form-control\" placeholder=\"Search Dashboard\" aria-label=\"Search Dashboard\">
                        <div class=\"drop-down animated flipInX d-md-none\">
                            <form action=\"#\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"header-right\">
                    <ul class=\"clearfix\">
                        <li class=\"icons dropdown\"><a href=\"javascript:void(0)\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell-outline\"></i>
                                <span class=\"badge badge-pill gradient-2\">3</span>
                            </a>
                            <div class=\"drop-down animated fadeIn dropdown-menu dropdown-notfication\">
                                <div class=\"dropdown-content-heading d-flex justify-content-between\">
                                    <span class=\"\">2 New Notifications</span>  
                                    <a href=\"javascript:void()\" class=\"d-inline-block\">
                                        <span class=\"badge badge-pill gradient-2\">5</span>
                                    </a>
                                </div>
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-success-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Events near you</h6>
                                                    <span class=\"notification-text\">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-danger-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Event Started</h6>
                                                    <span class=\"notification-text\">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-success-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Event Ended Successfully</h6>
                                                    <span class=\"notification-text\">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <span class=\"mr-3 avatar-icon bg-danger-lighten-2\"><i class=\"icon-present\"></i></span>
                                                <div class=\"notification-content\">
                                                    <h6 class=\"notification-heading\">Events to Join</h6>
                                                    <span class=\"notification-text\">After two days</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <li class=\"icons dropdown d-none d-md-flex\">
                        
                        </li>
                        <li class=\"icons dropdown\">
                            <div class=\"user-img c-pointer position-relative\"   data-toggle=\"dropdown\">
                                <span class=\"activity active\"></span>
                                <img src=\"{{ asset( 'assetsback/images/user/1.png')}}\" height=\"40\" width=\"40\" alt=\"\">

                              
                            </div>
                            <div class=\"drop-down dropdown-profile animated fadeIn dropdown-menu\">
                                <div class=\"dropdown-content-body\">
                                    <ul>
                                        <li>
                                            <a href=\"app-profile.html\"><i class=\"icon-user\"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void()\">
                                                <i class=\"icon-envelope-open\"></i> <span>Inbox</span> <div class=\"badge gradient-3 badge-pill gradient-1\">3</div>
                                            </a>
                                        </li>
                                        
                                        <hr class=\"my-2\">
                                        <li>
                                            <a href=\"page-lock.html\"><i class=\"icon-lock\"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href=\"page-login.html\"><i class=\"icon-key\"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {% endblock %}
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class=\"nk-sidebar\">           
            <div class=\"nk-nav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                       <li>
                        <a href=\"{{ path('app_back') }}\" aria-expanded=\"false\">
                            <i class=\"icon-badge menu-icon\"></i><span class=\"nav-text\">Dashboard</span>
                        </a>
                    </li>

                     <li>
                        <a href=\"{{ path('app_partenaire') }}\" aria-expanded=\"false\">
                            <i class=\"icon-badge menu-icon\"></i><span class=\"nav-text\">Front</span>
                        </a>
                    </li>
                   
                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-globe-alt menu-icon\"></i><span class=\"nav-text\">Layouts</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./layout-blank.html\">Blank</a></li>
                            <li><a href=\"./layout-one-column.html\">One Column</a></li>
                            <li><a href=\"./layout-two-column.html\">Two column</a></li>
                            <li><a href=\"./layout-compact-nav.html\">Compact Nav</a></li>
                            <li><a href=\"./layout-vertical.html\">Vertical</a></li>
                            <li><a href=\"./layout-horizontal.html\">Horizontal</a></li>
                            <li><a href=\"./layout-boxed.html\">Boxed</a></li>
                            <li><a href=\"./layout-wide.html\">Wide</a></li>
                            
                            
                            <li><a href=\"./layout-fixed-header.html\">Fixed Header</a></li>
                            <li><a href=\"layout-fixed-sidebar.html\">Fixed Sidebar</a></li>
                        </ul>
                    </li>


                    <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-envelope menu-icon\"></i><span class=\"nav-text\">Partenaires</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{ path('app_partenaire_back1') }}\">Afficher Entreprise</a></li>
                            <li><a href=\"{{ path('app_partenaireback_fnew') }}\">Ajouter Entreprise</a></li>
                            <li><a href=\"{{ path('app_offreback') }}\">Afficher Offre</a></li>
                            <li><a href=\"{{ path('app_offreback_fnew') }}\">Ajouter Offre</a></li>
                            
                        </ul>
                    </li>

                   <li class=\"mega-menu mega-menu-sm\">
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-globe-alt menu-icon\"></i><span class=\"nav-text\">Evenements</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{ path('app_taches_index_back') }}\">Afficher Taches</a></li>
                            <li><a href=\"{{ path('app_taches_new_back') }}\">Ajouter Taches</a></li>
                            <li><a href=\"{{ path('app_succes_index_back') }}\">Afficher Succes</a></li>
                            <li><a href=\"{{ path('app_succes_new_back') }}\">Ajouter Succes</a></li>
                        </ul>
                    </li>

                 
                        
                    </li>
                    <li class=\"nav-label\">Widgets</li>
                        <a href=\"widgets.html\" aria-expanded=\"false\">
                            <i class=\"icon-badge menu-icon\"></i><span class=\"nav-text\">Widget</span>
                        </a>
                    </li>
                    <li class=\"nav-label\">Forms</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-note menu-icon\"></i><span class=\"nav-text\">Forms</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./form-basic.html\">Basic Form</a></li>
                            <li><a href=\"./form-validation.html\">Form Validation</a></li>
                            <li><a href=\"./form-step.html\">Step Form</a></li>
                            <li><a href=\"./form-editor.html\">Editor</a></li>
                            <li><a href=\"./form-picker.html\">Picker</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Table</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-menu menu-icon\"></i><span class=\"nav-text\">Table</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./table-basic.html\" aria-expanded=\"false\">Basic Table</a></li>
                            <li><a href=\"./table-datatable.html\" aria-expanded=\"false\">Data Table</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-label\">Pages</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
                            <i class=\"icon-notebook menu-icon\"></i><span class=\"nav-text\">Pages</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"./page-login.html\">Login</a></li>
                            <li><a href=\"./page-register.html\">Register</a></li>
                            <li><a href=\"./page-lock.html\">Lock Screen</a></li>
                            <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">Error</a>
                                <ul aria-expanded=\"false\">
                                    <li><a href=\"./page-error-404.html\">Error 404</a></li>
                                    <li><a href=\"./page-error-403.html\">Error 403</a></li>
                                    <li><a href=\"./page-error-400.html\">Error 400</a></li>
                                    <li><a href=\"./page-error-500.html\">Error 500</a></li>
                                    <li><a href=\"./page-error-503.html\">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
         {% block body %}
        <div class=\"content-body\">

            <div class=\"container-fluid mt-3\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-1\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">Products Sold</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">4565</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-shopping-cart\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-2\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">Net Profit</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">\$ 8541</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-money\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-3\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">New Customers</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">4565</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-users\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card gradient-4\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-white\">Customer Satisfaction</h3>
                                <div class=\"d-inline-block\">
                                    <h2 class=\"text-white\">99%</h2>
                                    <p class=\"text-white mb-0\">Jan - March 2019</p>
                                </div>
                                <span class=\"float-right display-5 opacity-5\"><i class=\"fa fa-heart\"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body pb-0 d-flex justify-content-between\">
                                        <div>
                                            <h4 class=\"mb-1\">Product Sales</h4>
                                            <p>Total Earnings of the Month</p>
                                            <h3 class=\"m-0\">\$ 12,555</h3>
                                        </div>
                                        <div>
                                            <ul>
                                                <li class=\"d-inline-block mr-3\"><a class=\"text-dark\" href=\"#\">Day</a></li>
                                                <li class=\"d-inline-block mr-3\"><a class=\"text-dark\" href=\"#\">Week</a></li>
                                                <li class=\"d-inline-block\"><a class=\"text-dark\" href=\"#\">Month</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"chart-wrapper\">
                                        <canvas id=\"chart_widget_2\"></canvas>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"d-flex justify-content-between\">
                                            <div class=\"w-100 mr-2\">
                                                <h6>Pixel 2</h6>
                                                <div class=\"progress\" style=\"height: 6px\">
                                                    <div class=\"progress-bar bg-danger\" style=\"width: 40%\"></div>
                                                </div>
                                            </div>
                                            <div class=\"ml-2 w-100\">
                                                <h6>iPhone X</h6>
                                                <div class=\"progress\" style=\"height: 6px\">
                                                    <div class=\"progress-bar bg-primary\" style=\"width: 80%\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class=\"row\">
                        <div class=\"col-lg-6 col-md-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">Order Summary</h4>
                                    <div id=\"morris-bar-chart\"></div>
                                </div>
                            </div>
                            
                        </div>    
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"card card-widget\">
                                <div class=\"card-body\">
                                    <h5 class=\"text-muted\">Order Overview </h5>
                                    <h2 class=\"mt-4\">5680</h2>
                                    <span>Total Revenue</span>
                                    <div class=\"mt-4\">
                                        <h4>30</h4>
                                        <h6>Online Order <span class=\"pull-right\">30%</span></h6>
                                        <div class=\"progress mb-3\" style=\"height: 7px\">
                                            <div class=\"progress-bar bg-primary\" style=\"width: 30%;\" role=\"progressbar\"><span class=\"sr-only\">30% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mt-4\">
                                        <h4>50</h4>
                                        <h6 class=\"m-t-10 text-muted\">Offline Order <span class=\"pull-right\">50%</span></h6>
                                        <div class=\"progress mb-3\" style=\"height: 7px\">
                                            <div class=\"progress-bar bg-success\" style=\"width: 50%;\" role=\"progressbar\"><span class=\"sr-only\">50% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mt-4\">
                                        <h4>20</h4>
                                        <h6 class=\"m-t-10 text-muted\">Cash On Develery <span class=\"pull-right\">20%</span></h6>
                                        <div class=\"progress mb-3\" style=\"height: 7px\">
                                            <div class=\"progress-bar bg-warning\" style=\"width: 20%;\" role=\"progressbar\"><span class=\"sr-only\">20% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"card\">
                                <div class=\"card-body px-0\">
                                    <h4 class=\"card-title px-4 mb-3\">Todo</h4>
                                    <div class=\"todo-list\">
                                        <div class=\"tdl-holder\">
                                            <div class=\"tdl-content\">
                                                <ul id=\"todo_list\">
                                                    <li><label><input type=\"checkbox\"><i></i><span>Get up</span><a href='#' class=\"ti-trash\"></a></label></li>
                                                    <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a href='#' class=\"ti-trash\"></a></label></li>
                                                    <li><label><input type=\"checkbox\"><i></i><span>Don't give up the fight.</span><a href='#' class=\"ti-trash\"></a></label></li>
                                                    <li><label><input type=\"checkbox\" checked><i></i><span>Do something else</span><a href='#' class=\"ti-trash\"></a></label></li>
                                                </ul>
                                            </div>
                                            <div class=\"px-4\">
                                                <input type=\"text\" class=\"tdl-new form-control\" placeholder=\"Write new item and hit 'Enter'...\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                
                                    <img src=\"{{ asset( 'assetsback/images/users/8.jpg')}}\" class=\"rounded-circle\" alt=\"\">
                                    <h5 class=\"mt-3 mb-1\">Ana Liem</h5>
                                    <p class=\"m-0\">Senior Manager</p>
                                    <!-- <a href=\"javascript:void()\" class=\"btn btn-sm btn-warning\">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                    <img src=\"{{ asset( 'assetsback/images/users/5.jpg')}}\" class=\"rounded-circle\" alt=\"\">
                                    <h5 class=\"mt-3 mb-1\">John Abraham</h5>
                                    <p class=\"m-0\">Store Manager</p>
                                    <!-- <a href=\"javascript:void()\" class=\"btn btn-sm btn-warning\">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                    <img src=\"{{ asset( 'assetsback/images/users/7.jpg')}}\" class=\"rounded-circle\" alt=\"\">
                                    <h5 class=\"mt-3 mb-1\">John Doe</h5>
                                    <p class=\"m-0\">Sales Man</p>
                                    <!-- <a href=\"javascript:void()\" class=\"btn btn-sm btn-warning\">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"text-center\">
                                    <img src=\"{{ asset( 'assetsback/images/users/1.jpg')}}\" class=\"rounded-circle\" alt=\"\">
                                    <h5 class=\"mt-3 mb-1\">Mehedi Titas</h5>
                                    <p class=\"m-0\">Online Marketer</p>
                                    <!-- <a href=\"javascript:void()\" class=\"btn btn-sm btn-warning\">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"active-member\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-xs mb-0\">
                                            <thead>
                                                <tr>
                                                    <th>Customers</th>
                                                    <th>Product</th>
                                                    <th>Country</th>
                                                    <th>Status</th>
                                                    <th>Payment Method</th>
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src=\"{{ asset( 'assetsback/images/avatar/1.jpg')}}\" class=\" rounded-circle mr-3\" alt=\"\">Sarah Smith</td>
                                                    <td>iPhone X</td>
                                                    <td>
                                                        <span>United States</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"./images/avatar/2.jpg\" class=\" rounded-circle mr-3\" alt=\"\">Walter R.</td>
                                                    <td>Pixel 2</td>
                                                    <td><span>Canada</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">50 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"./images/avatar/3.jpg\" class=\" rounded-circle mr-3\" alt=\"\">Andrew D.</td>
                                                    <td>OnePlus</td>
                                                    <td><span>Germany</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-warning  mr-2\"></i> Pending</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"./images/avatar/6.jpg\" class=\" rounded-circle mr-3\" alt=\"\"> Megan S.</td>
                                                    <td>Galaxy</td>
                                                    <td><span>Japan</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"./images/avatar/4.jpg\" class=\" rounded-circle mr-3\" alt=\"\"> Doris R.</td>
                                                    <td>Moto Z2</td>
                                                    <td><span>England</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-success\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-success  mr-2\"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src=\"./images/avatar/5.jpg\" class=\" rounded-circle mr-3\" alt=\"\">Elizabeth W.</td>
                                                    <td>Notebook Asus</td>
                                                    <td><span>China</span></td>
                                                    <td>
                                                        <div>
                                                            <div class=\"progress\" style=\"height: 6px\">
                                                                <div class=\"progress-bar bg-warning\" style=\"width: 50%\"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class=\"fa fa-circle-o text-warning  mr-2\"></i> Pending</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class=\"m-0 pl-3\">10 sec ago</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6\">

                        <div class=\"card\">
                            <div class=\"chart-wrapper mb-4\">
                                <div class=\"px-4 pt-4 d-flex justify-content-between\">
                                    <div>
                                        <h4>Sales Activities</h4>
                                        <p>Last 6 Month</p>
                                    </div>
                                    <div>
                                        <span><i class=\"fa fa-caret-up text-success\"></i></span>
                                        <h4 class=\"d-inline-block text-success\">720</h4>
                                        <p class=\" text-danger\">+120.5(5.0%)</p>
                                    </div>
                                </div>
                                <div>
                                        <canvas id=\"chart_widget_3\"></canvas>
                                </div>
                            </div>
                            <div class=\"card-body border-top pt-4\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <ul>
                                            <li>5% Negative Feedback</li>
                                            <li>95% Positive Feedback</li>
                                        </ul>
                                        <div>
                                            <h5>Customer Feedback</h5>
                                            <h3>385749</h3>
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div id=\"chart_widget_3_1\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Activity</h4>
                                <div id=\"activity\">
                                    <div class=\"media border-bottom-1 pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/1.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>Received New Order</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                    <div class=\"media border-bottom-1 pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/2.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>iPhone develered</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                    <div class=\"media border-bottom-1 pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/2.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>3 Order Pending</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                    <div class=\"media border-bottom-1 pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/2.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>Join new Manager</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                    <div class=\"media border-bottom-1 pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/2.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>Branch open 5 min Late</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                    <div class=\"media border-bottom-1 pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/2.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>New support ticket received</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                    <div class=\"media pt-3 pb-3\">
                                        <img width=\"35\" src=\"./images/avatar/3.jpg\" class=\"mr-3 rounded-circle\">
                                        <div class=\"media-body\">
                                            <h5>Facebook Post 30 Comments</h5>
                                            <p class=\"mb-0\">I shared this on my fb wall a few months back,</p>
                                        </div><span class=\"text-muted \">April 24, 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-12 col-sm-12 col-xxl-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                    <h4 class=\"card-title mb-0\">Store Location</h4>
                                <div id=\"world-map\" style=\"height: 470px;\"></div>
                            </div>        
                        </div>
                    </div>
                </div>

                

                <div class=\"row\">
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-facebook\">
                                    <span class=\"s-icon\"><i class=\"fa fa-facebook\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">89k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">119k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-linkedin\">
                                    <span class=\"s-icon\"><i class=\"fa fa-linkedin\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">89k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">119k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-googleplus\">
                                    <span class=\"s-icon\"><i class=\"fa fa-google-plus\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">89k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">119k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-sm-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-twitter\">
                                    <span class=\"s-icon\"><i class=\"fa fa-twitter\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">89k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\">119k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- #/ container -->
        </div>
        {% endblock %}
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class=\"footer\">
            <div class=\"copyright\">
                <p>Copyright &copy; Designed & Developed by <a href=\"https://themeforest.net/user/quixlab\">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src=\"{{ asset( 'assetsback/plugins/common/common.min.js')}}\"></script>
    <script src=\"{{ asset( 'assetsback/js/custom.min.js')}}\"></script>
    <script src=\"{{ asset( 'assetsback/js/settings.js')}}\"></script>
    <script src=\"{{ asset( 'assetsback/js/gleek.js')}}\"></script>
    <script src=\"{{ asset( 'assetsback/js/styleSwitcher.js')}}\"></script>

    <!-- Chartjs -->
    <script src=\"{{ asset( 'assetsback/plugins/chart.js/Chart.bundle.min.js')}}\"></script>
    <!-- Circle progress -->
    <script src=\"{{ asset( 'assetsback/plugins/circle-progress/circle-progress.min.js')}}\"></script>
    <!-- Datamap -->
    <script src=\"{{ asset( 'assetsback/plugins/d3v3/index.js')}}\"></script>
    <script src=\"{{ asset( 'assetsback/plugins/topojson/topojson.min.js')}}\"></script>
    <script src=\"{{ asset( 'assetsback/plugins/datamaps/datamaps.world.min.js')}}\"></script>
    <!-- Morrisjs -->
    <script src=\"{{ asset( 'assetsback/plugins/raphael/raphael.min.js')}}\"></script>
    <script src=\"{{ asset( 'assetsback/plugins/morris/morris.min.js')}}\"></script>
    <!-- Pignose Calender -->
    <script src=\"{{ asset( 'assetsback/plugins/moment/moment.min.js')}}\"></script>
    <script src=\"{{ asset( 'assetsback/plugins/pg-calendar/js/pignose.calendar.min.js')}}\"></script>
    <!-- ChartistJS -->
    <script src=\"{{ asset( 'assetsback/plugins/chartist/js/chartist.min.js')}}\"></script>
    <script src=\"{{ asset( 'assetsback/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}\"></script>



    <script src=\"{{ asset( 'assetsback/js/dashboard/dashboard-1.js')}}\"></script>

</body>

</html>
", "back/homeback.html.twig", "C:\\Users\\youss\\Downloads\\enviproject2\\enviproject2\\templates\\back\\homeback.html.twig");
    }
}
