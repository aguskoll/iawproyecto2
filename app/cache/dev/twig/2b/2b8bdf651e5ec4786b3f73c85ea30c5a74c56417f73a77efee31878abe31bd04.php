<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_92176113c5b2e9131870da7f9bb36ae89b963c1a3170c3df58cd5f924f61a078 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bd29e9d47f46e0909c28fe6577de07a61afecad2f0e7759a6ab97ccee807089 = $this->env->getExtension("native_profiler");
        $__internal_2bd29e9d47f46e0909c28fe6577de07a61afecad2f0e7759a6ab97ccee807089->enter($__internal_2bd29e9d47f46e0909c28fe6577de07a61afecad2f0e7759a6ab97ccee807089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bd29e9d47f46e0909c28fe6577de07a61afecad2f0e7759a6ab97ccee807089->leave($__internal_2bd29e9d47f46e0909c28fe6577de07a61afecad2f0e7759a6ab97ccee807089_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8380564abbb208d0928e6f7e34936dd889966d7bc798ca2618b531237550b93d = $this->env->getExtension("native_profiler");
        $__internal_8380564abbb208d0928e6f7e34936dd889966d7bc798ca2618b531237550b93d->enter($__internal_8380564abbb208d0928e6f7e34936dd889966d7bc798ca2618b531237550b93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8380564abbb208d0928e6f7e34936dd889966d7bc798ca2618b531237550b93d->leave($__internal_8380564abbb208d0928e6f7e34936dd889966d7bc798ca2618b531237550b93d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_92f5f940765695d2122cf917da05007154d72287d515cff412151f7ed5147984 = $this->env->getExtension("native_profiler");
        $__internal_92f5f940765695d2122cf917da05007154d72287d515cff412151f7ed5147984->enter($__internal_92f5f940765695d2122cf917da05007154d72287d515cff412151f7ed5147984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_92f5f940765695d2122cf917da05007154d72287d515cff412151f7ed5147984->leave($__internal_92f5f940765695d2122cf917da05007154d72287d515cff412151f7ed5147984_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea908376db490f25669b49b4ec9c6d060f24c6b3dd23be607a05fe829ef2dfaf = $this->env->getExtension("native_profiler");
        $__internal_ea908376db490f25669b49b4ec9c6d060f24c6b3dd23be607a05fe829ef2dfaf->enter($__internal_ea908376db490f25669b49b4ec9c6d060f24c6b3dd23be607a05fe829ef2dfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ea908376db490f25669b49b4ec9c6d060f24c6b3dd23be607a05fe829ef2dfaf->leave($__internal_ea908376db490f25669b49b4ec9c6d060f24c6b3dd23be607a05fe829ef2dfaf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
