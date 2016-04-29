<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_195a3ff5773db90eb5e2d9a8719761a37bfc3e7579cabe552aeec7ab70c56cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb7bc3c49b8ed544e76f1bd398389b78af537bb453bb9dfda1502f58b5aeda54 = $this->env->getExtension("native_profiler");
        $__internal_fb7bc3c49b8ed544e76f1bd398389b78af537bb453bb9dfda1502f58b5aeda54->enter($__internal_fb7bc3c49b8ed544e76f1bd398389b78af537bb453bb9dfda1502f58b5aeda54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb7bc3c49b8ed544e76f1bd398389b78af537bb453bb9dfda1502f58b5aeda54->leave($__internal_fb7bc3c49b8ed544e76f1bd398389b78af537bb453bb9dfda1502f58b5aeda54_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3636b8cc6b2333d5b6bb021a4a21673fd4445e487c2c228269f6ab6e4ebf116 = $this->env->getExtension("native_profiler");
        $__internal_d3636b8cc6b2333d5b6bb021a4a21673fd4445e487c2c228269f6ab6e4ebf116->enter($__internal_d3636b8cc6b2333d5b6bb021a4a21673fd4445e487c2c228269f6ab6e4ebf116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d3636b8cc6b2333d5b6bb021a4a21673fd4445e487c2c228269f6ab6e4ebf116->leave($__internal_d3636b8cc6b2333d5b6bb021a4a21673fd4445e487c2c228269f6ab6e4ebf116_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_85627f0065d3b8a36c82b3837713568a9eb0ffb92ce436fe0cf0b224f261bda2 = $this->env->getExtension("native_profiler");
        $__internal_85627f0065d3b8a36c82b3837713568a9eb0ffb92ce436fe0cf0b224f261bda2->enter($__internal_85627f0065d3b8a36c82b3837713568a9eb0ffb92ce436fe0cf0b224f261bda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_85627f0065d3b8a36c82b3837713568a9eb0ffb92ce436fe0cf0b224f261bda2->leave($__internal_85627f0065d3b8a36c82b3837713568a9eb0ffb92ce436fe0cf0b224f261bda2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad3657c53c649405beb6f770f1848e15b525458e30ae70d3797f5e3a364d2ea5 = $this->env->getExtension("native_profiler");
        $__internal_ad3657c53c649405beb6f770f1848e15b525458e30ae70d3797f5e3a364d2ea5->enter($__internal_ad3657c53c649405beb6f770f1848e15b525458e30ae70d3797f5e3a364d2ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ad3657c53c649405beb6f770f1848e15b525458e30ae70d3797f5e3a364d2ea5->leave($__internal_ad3657c53c649405beb6f770f1848e15b525458e30ae70d3797f5e3a364d2ea5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
