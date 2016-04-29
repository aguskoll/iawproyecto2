<?php

/* blog/index.html.twig */
class __TwigTemplate_942550f7f1d8554b5f33905a3926f1d4fb0e35c04beb96352c3b5a75530b9142 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03858c8ba2fe607252ec136f9f63ebc12eb776cb4a18bf820b776946ddc2be24 = $this->env->getExtension("native_profiler");
        $__internal_03858c8ba2fe607252ec136f9f63ebc12eb776cb4a18bf820b776946ddc2be24->enter($__internal_03858c8ba2fe607252ec136f9f63ebc12eb776cb4a18bf820b776946ddc2be24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03858c8ba2fe607252ec136f9f63ebc12eb776cb4a18bf820b776946ddc2be24->leave($__internal_03858c8ba2fe607252ec136f9f63ebc12eb776cb4a18bf820b776946ddc2be24_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_04eb984776cf2b2407f5a8895db11b817690f5c2f624f50ec16452d1462f52b6 = $this->env->getExtension("native_profiler");
        $__internal_04eb984776cf2b2407f5a8895db11b817690f5c2f624f50ec16452d1462f52b6->enter($__internal_04eb984776cf2b2407f5a8895db11b817690f5c2f624f50ec16452d1462f52b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_04eb984776cf2b2407f5a8895db11b817690f5c2f624f50ec16452d1462f52b6->leave($__internal_04eb984776cf2b2407f5a8895db11b817690f5c2f624f50ec16452d1462f52b6_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_d72bbca14ccc6983ace7fd9534f855e20d9427795aa12711207755342fd0c7dc = $this->env->getExtension("native_profiler");
        $__internal_d72bbca14ccc6983ace7fd9534f855e20d9427795aa12711207755342fd0c7dc->enter($__internal_d72bbca14ccc6983ace7fd9534f855e20d9427795aa12711207755342fd0c7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            ";
            // line 14
            echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <div class=\"navigation text-center\">
        ";
        // line 21
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "twitter_bootstrap3", array("routeName" => "blog_index_paginated"));
        echo "
    </div>
";
        
        $__internal_d72bbca14ccc6983ace7fd9534f855e20d9427795aa12711207755342fd0c7dc->leave($__internal_d72bbca14ccc6983ace7fd9534f855e20d9427795aa12711207755342fd0c7dc_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_99ae0b47b14a1e80d0d2164e64bf3f6546d433d93bc921bdb236bdcf846ecc13 = $this->env->getExtension("native_profiler");
        $__internal_99ae0b47b14a1e80d0d2164e64bf3f6546d433d93bc921bdb236bdcf846ecc13->enter($__internal_99ae0b47b14a1e80d0d2164e64bf3f6546d433d93bc921bdb236bdcf846ecc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_99ae0b47b14a1e80d0d2164e64bf3f6546d433d93bc921bdb236bdcf846ecc13->leave($__internal_99ae0b47b14a1e80d0d2164e64bf3f6546d433d93bc921bdb236bdcf846ecc13_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 28,  112 => 26,  106 => 25,  96 => 21,  92 => 19,  83 => 17,  75 => 14,  68 => 10,  64 => 9,  60 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'blog_index' %}*/
/* */
/* {% block main %}*/
/*     {% for post in posts %}*/
/*         <article class="post">*/
/*             <h2>*/
/*                 <a href="{{ path('blog_post', { slug: post.slug }) }}">*/
/*                     {{ post.title }}*/
/*                 </a>*/
/*             </h2>*/
/* */
/*             {{ post.summary|md2html }}*/
/*         </article>*/
/*     {% else %}*/
/*         <div class="well">{{ 'post.no_posts_found'|trans }}</div>*/
/*     {% endfor %}*/
/* */
/*     <div class="navigation text-center">*/
/*         {{ pagerfanta(posts, 'twitter_bootstrap3', { routeName: 'blog_index_paginated' }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
