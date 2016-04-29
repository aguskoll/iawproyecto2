<?php

/* base.html.twig */
class __TwigTemplate_546c628b0cadd237e6685fdd0ad510575129f6fbffe55f1ccad62a97e742b71f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3040627591646d2a87aa2e62234307fa3d3a9cbd4b0a7655cb257060a6ff0c3e = $this->env->getExtension("native_profiler");
        $__internal_3040627591646d2a87aa2e62234307fa3d3a9cbd4b0a7655cb257060a6ff0c3e->enter($__internal_3040627591646d2a87aa2e62234307fa3d3a9cbd4b0a7655cb257060a6ff0c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 30
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 91
        echo "
        <div class=\"container body-container\">
            ";
        // line 93
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "        </div>

        ";
        // line 114
        $this->displayBlock('footer', $context, $blocks);
        // line 133
        echo "
        ";
        // line 134
        $this->displayBlock('javascripts', $context, $blocks);
        // line 149
        echo "
        
    </body>
</html>
";
        
        $__internal_3040627591646d2a87aa2e62234307fa3d3a9cbd4b0a7655cb257060a6ff0c3e->leave($__internal_3040627591646d2a87aa2e62234307fa3d3a9cbd4b0a7655cb257060a6ff0c3e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f9ee2e78aeee4021d14a94044f75a018cde422de98453bc07c272bc0e91dc6b = $this->env->getExtension("native_profiler");
        $__internal_3f9ee2e78aeee4021d14a94044f75a018cde422de98453bc07c272bc0e91dc6b->enter($__internal_3f9ee2e78aeee4021d14a94044f75a018cde422de98453bc07c272bc0e91dc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_3f9ee2e78aeee4021d14a94044f75a018cde422de98453bc07c272bc0e91dc6b->leave($__internal_3f9ee2e78aeee4021d14a94044f75a018cde422de98453bc07c272bc0e91dc6b_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18f0fc2a22bcae11bc502c99b898fa0c29aa8ecbe15a165fa72e8b643b01907c = $this->env->getExtension("native_profiler");
        $__internal_18f0fc2a22bcae11bc502c99b898fa0c29aa8ecbe15a165fa72e8b643b01907c->enter($__internal_18f0fc2a22bcae11bc502c99b898fa0c29aa8ecbe15a165fa72e8b643b01907c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        // line 24
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_18f0fc2a22bcae11bc502c99b898fa0c29aa8ecbe15a165fa72e8b643b01907c->leave($__internal_18f0fc2a22bcae11bc502c99b898fa0c29aa8ecbe15a165fa72e8b643b01907c_prof);

    }

    // line 30
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_660228ccb21206c4ec4558ef34c085d40e29c5c982433953650b1f9611be4136 = $this->env->getExtension("native_profiler");
        $__internal_660228ccb21206c4ec4558ef34c085d40e29c5c982433953650b1f9611be4136->enter($__internal_660228ccb21206c4ec4558ef34c085d40e29c5c982433953650b1f9611be4136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_660228ccb21206c4ec4558ef34c085d40e29c5c982433953650b1f9611be4136->leave($__internal_660228ccb21206c4ec4558ef34c085d40e29c5c982433953650b1f9611be4136_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_67eb5d0a69d8da30da452ca36b10f1a7719c4e26878a7b01faad4ef9edc8d5d9 = $this->env->getExtension("native_profiler");
        $__internal_67eb5d0a69d8da30da452ca36b10f1a7719c4e26878a7b01faad4ef9edc8d5d9->enter($__internal_67eb5d0a69d8da30da452ca36b10f1a7719c4e26878a7b01faad4ef9edc8d5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header\">
                            <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 53
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 68
        echo "
                                ";
        // line 69
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 70
            echo "                                    <li>
                                        <a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\"></i> ";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 76
        echo "
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-globe\"></i> <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\">
                                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('app.extension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 81
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_67eb5d0a69d8da30da452ca36b10f1a7719c4e26878a7b01faad4ef9edc8d5d9->leave($__internal_67eb5d0a69d8da30da452ca36b10f1a7719c4e26878a7b01faad4ef9edc8d5d9_prof);

    }

    // line 53
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_98568fb1fbde3779f58fd55d4037c411239406a870bb052235ba0ccd00bb9575 = $this->env->getExtension("native_profiler");
        $__internal_98568fb1fbde3779f58fd55d4037c411239406a870bb052235ba0ccd00bb9575->enter($__internal_98568fb1fbde3779f58fd55d4037c411239406a870bb052235ba0ccd00bb9575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 54
        echo "                                    <li>
                                        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\"></i> ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 60
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 61
            echo "                                        <li>
                                            <a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\"></i> ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 67
        echo "                                ";
        
        $__internal_98568fb1fbde3779f58fd55d4037c411239406a870bb052235ba0ccd00bb9575->leave($__internal_98568fb1fbde3779f58fd55d4037c411239406a870bb052235ba0ccd00bb9575_prof);

    }

    // line 93
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4d348b9207185ae827569ff5a18f88696f71475fa2c83a6c3904cc39edb79c8 = $this->env->getExtension("native_profiler");
        $__internal_a4d348b9207185ae827569ff5a18f88696f71475fa2c83a6c3904cc39edb79c8->enter($__internal_a4d348b9207185ae827569ff5a18f88696f71475fa2c83a6c3904cc39edb79c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 94
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 96
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 98
        $this->displayBlock('main', $context, $blocks);
        // line 99
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 102
        $this->displayBlock('sidebar', $context, $blocks);
        // line 109
        echo "                    </div>
                </div>
            ";
        
        $__internal_a4d348b9207185ae827569ff5a18f88696f71475fa2c83a6c3904cc39edb79c8->leave($__internal_a4d348b9207185ae827569ff5a18f88696f71475fa2c83a6c3904cc39edb79c8_prof);

    }

    // line 98
    public function block_main($context, array $blocks = array())
    {
        $__internal_17dc24728d1714e59a85cef72c7e03e04b6ea6c3aebe7b1cd061186ffd13b591 = $this->env->getExtension("native_profiler");
        $__internal_17dc24728d1714e59a85cef72c7e03e04b6ea6c3aebe7b1cd061186ffd13b591->enter($__internal_17dc24728d1714e59a85cef72c7e03e04b6ea6c3aebe7b1cd061186ffd13b591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_17dc24728d1714e59a85cef72c7e03e04b6ea6c3aebe7b1cd061186ffd13b591->leave($__internal_17dc24728d1714e59a85cef72c7e03e04b6ea6c3aebe7b1cd061186ffd13b591_prof);

    }

    // line 102
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e1fba15539472fe13330a51cbcbfe60e758a34946570ce0bff5ef3e89f5fcf3e = $this->env->getExtension("native_profiler");
        $__internal_e1fba15539472fe13330a51cbcbfe60e758a34946570ce0bff5ef3e89f5fcf3e->enter($__internal_e1fba15539472fe13330a51cbcbfe60e758a34946570ce0bff5ef3e89f5fcf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 103
        echo "                            ";
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("FrameworkBundle:Template:template", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => $this->getAttribute($this->getAttribute(        // line 106
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()))));
        // line 107
        echo "
                        ";
        
        $__internal_e1fba15539472fe13330a51cbcbfe60e758a34946570ce0bff5ef3e89f5fcf3e->leave($__internal_e1fba15539472fe13330a51cbcbfe60e758a34946570ce0bff5ef3e89f5fcf3e_prof);

    }

    // line 114
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7a173cd3a7fd989998f9ff87cffe4e2a2d94a23de13b9a98a7db7943d9debb92 = $this->env->getExtension("native_profiler");
        $__internal_7a173cd3a7fd989998f9ff87cffe4e2a2d94a23de13b9a98a7db7943d9debb92->enter($__internal_7a173cd3a7fd989998f9ff87cffe4e2a2d94a23de13b9a98a7db7943d9debb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 115
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 119
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"https://www.facebook.com/SensioLabs\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"http://symfony.com/blog\"><i class=\"fa fa-rss\"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_7a173cd3a7fd989998f9ff87cffe4e2a2d94a23de13b9a98a7db7943d9debb92->leave($__internal_7a173cd3a7fd989998f9ff87cffe4e2a2d94a23de13b9a98a7db7943d9debb92_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_340c48fdcd830da006028a93171c2b3e20a42a3eb8349596e0223672802ba8d6 = $this->env->getExtension("native_profiler");
        $__internal_340c48fdcd830da006028a93171c2b3e20a42a3eb8349596e0223672802ba8d6->enter($__internal_340c48fdcd830da006028a93171c2b3e20a42a3eb8349596e0223672802ba8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "        ";
        // line 146
        echo "
            <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_340c48fdcd830da006028a93171c2b3e20a42a3eb8349596e0223672802ba8d6->leave($__internal_340c48fdcd830da006028a93171c2b3e20a42a3eb8349596e0223672802ba8d6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 147,  370 => 146,  368 => 135,  362 => 134,  342 => 120,  338 => 119,  332 => 115,  326 => 114,  318 => 107,  316 => 106,  314 => 103,  308 => 102,  297 => 98,  288 => 109,  286 => 102,  281 => 99,  279 => 98,  274 => 96,  270 => 94,  264 => 93,  257 => 67,  250 => 63,  246 => 62,  243 => 61,  241 => 60,  234 => 56,  230 => 55,  227 => 54,  221 => 53,  207 => 83,  192 => 81,  188 => 80,  182 => 76,  175 => 72,  171 => 71,  168 => 70,  166 => 69,  163 => 68,  161 => 53,  142 => 37,  136 => 33,  130 => 32,  119 => 30,  110 => 25,  107 => 24,  105 => 13,  99 => 12,  87 => 10,  76 => 149,  74 => 134,  71 => 133,  69 => 114,  65 => 112,  63 => 93,  59 => 91,  57 => 32,  52 => 30,  45 => 27,  43 => 12,  38 => 10,  32 => 6,);
    }
}
/* {#*/
/*    This is the base template used as the application layout which contains the*/
/*    common elements and decorates all the other templates.*/
/*    See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts*/
/* #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Symfony Demo application{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*         {# uncomment the following lines to compile SCSS assets with Assetic*/
/* */
/*             {% stylesheets filter="scssphp" output="css/app.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/bootstrap-flatly.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/font-awesome.scss"*/
/*                 "%kernel.root_dir%/Resources/assets/css/*.css"*/
/*                 "%kernel.root_dir%/Resources/assets/scss/main.scss"*/
/*             %}*/
/*                 <link rel="stylesheet" href="{{ asset_url }}" />*/
/*             {% endstylesheets %}*/
/*         #}*/
/* */
/*             <link rel="stylesheet" href="{{ asset('css/app.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body id="{% block body_id %}{% endblock %}">*/
/* */
/*         {% block header %}*/
/*             <header>*/
/*                 <div class="navbar navbar-default navbar-static-top" role="navigation">*/
/*                     <div class="container">*/
/*                         <div class="navbar-header">*/
/*                             <a class="navbar-brand" href="{{ path('homepage') }}">*/
/*                                 Symfony Demo*/
/*                             </a>*/
/* */
/*                             <button type="button" class="navbar-toggle"*/
/*                                     data-toggle="collapse"*/
/*                                     data-target=".navbar-collapse">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                         </div>*/
/*                         <div class="navbar-collapse collapse">*/
/*                             <ul class="nav navbar-nav navbar-right">*/
/* */
/*                                 {% block header_navigation_links %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('blog_index') }}">*/
/*                                             <i class="fa fa-home"></i> {{ 'menu.homepage'|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/* */
/*                                     {% if is_granted('ROLE_ADMIN') %}*/
/*                                         <li>*/
/*                                             <a href="{{ path('admin_post_index') }}">*/
/*                                                 <i class="fa fa-lock"></i> {{ 'menu.admin'|trans }}*/
/*                                             </a>*/
/*                                         </li>*/
/*                                     {% endif %}*/
/*                                 {% endblock %}*/
/* */
/*                                 {% if app.user %}*/
/*                                     <li>*/
/*                                         <a href="{{ path('security_logout') }}">*/
/*                                             <i class="fa fa-sign-out"></i> {{ 'menu.logout'|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endif %}*/
/* */
/*                                 <li class="dropdown">*/
/*                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-globe"></i> <span class="caret"></span></a>*/
/*                                     <ul class="dropdown-menu locales" role="menu">*/
/*                                         {% for locale in locales() %}*/
/*                                             <li {% if app.request.locale == locale.code %}class="active"{% endif %}><a href="{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({ _locale: locale.code })) }}">{{ locale.name|capitalize }}</a></li>*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*         {% endblock %}*/
/* */
/*         <div class="container body-container">*/
/*             {% block body %}*/
/*                 <div class="row">*/
/*                     <div id="main" class="col-sm-9">*/
/*                         {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*                         {% block main %}{% endblock %}*/
/*                     </div>*/
/* */
/*                     <div id="sidebar" class="col-sm-3">*/
/*                         {% block sidebar %}*/
/*                             {{ render_esi(controller('FrameworkBundle:Template:template', {*/
/*                                 'template': 'blog/about.html.twig',*/
/*                                 'sharedAge': 600,*/
/*                                 '_locale': app.request.locale*/
/*                             })) }}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         {% block footer %}*/
/*             <footer>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div id="footer-copyright" class="col-md-6">*/
/*                             <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>*/
/*                             <p>{{ 'mit_license'|trans }}</p>*/
/*                         </div>*/
/*                         <div id="footer-resources" class="col-md-6">*/
/*                             <p>*/
/*                                 <a href="https://twitter.com/symfony"><i class="fa fa-twitter"></i></a>*/
/*                                 <a href="https://www.facebook.com/SensioLabs"><i class="fa fa-facebook"></i></a>*/
/*                                 <a href="http://symfony.com/blog"><i class="fa fa-rss"></i></a>*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </footer>*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*         {# uncomment the following lines to combine and minimize JavaScript assets with Assetic*/
/*             {% javascripts filter="?jsqueeze" output="js/app.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/jquery-2.1.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/moment.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-3.3.4.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/highlight.pack.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/bootstrap-datetimepicker.min.js"*/
/*                 "%kernel.root_dir%/Resources/assets/js/main.js" %}*/
/*                 <script src="{{ asset_url }}"></script>*/
/*             {% endjavascripts %}*/
/*         #}*/
/* */
/*             <script src="{{ asset('js/app.js') }}"></script>*/
/*         {% endblock %}*/
/* */
/*         */
/*     </body>*/
/* </html>*/
/* */
