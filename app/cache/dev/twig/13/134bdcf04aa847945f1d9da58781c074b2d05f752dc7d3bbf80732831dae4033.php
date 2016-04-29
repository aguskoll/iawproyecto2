<?php

/* default/homepage.html.twig */
class __TwigTemplate_b2fca0d994ca1a370cc9230718186902217d26d15d00ae699ad98f4cdaf5d224 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43b85c66ff75693724da84ae0c6c9bbe59fa8f1b7f30c9d15af4b4566d0c9eaf = $this->env->getExtension("native_profiler");
        $__internal_43b85c66ff75693724da84ae0c6c9bbe59fa8f1b7f30c9d15af4b4566d0c9eaf->enter($__internal_43b85c66ff75693724da84ae0c6c9bbe59fa8f1b7f30c9d15af4b4566d0c9eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43b85c66ff75693724da84ae0c6c9bbe59fa8f1b7f30c9d15af4b4566d0c9eaf->leave($__internal_43b85c66ff75693724da84ae0c6c9bbe59fa8f1b7f30c9d15af4b4566d0c9eaf_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0b4c268e44bf1bba05fd996df370e5029641564ed24b5d56f492a3847a5b30be = $this->env->getExtension("native_profiler");
        $__internal_0b4c268e44bf1bba05fd996df370e5029641564ed24b5d56f492a3847a5b30be->enter($__internal_0b4c268e44bf1bba05fd996df370e5029641564ed24b5d56f492a3847a5b30be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_0b4c268e44bf1bba05fd996df370e5029641564ed24b5d56f492a3847a5b30be->leave($__internal_0b4c268e44bf1bba05fd996df370e5029641564ed24b5d56f492a3847a5b30be_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_29f59531f721219c28bc8c8c7029062ef4588e00d08821612ce7e7034156308a = $this->env->getExtension("native_profiler");
        $__internal_29f59531f721219c28bc8c8c7029062ef4588e00d08821612ce7e7034156308a->enter($__internal_29f59531f721219c28bc8c8c7029062ef4588e00d08821612ce7e7034156308a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_29f59531f721219c28bc8c8c7029062ef4588e00d08821612ce7e7034156308a->leave($__internal_29f59531f721219c28bc8c8c7029062ef4588e00d08821612ce7e7034156308a_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4f17245cfce7e48465ed1876afda419bb18a525c9daab5b733ee274a50852807 = $this->env->getExtension("native_profiler");
        $__internal_4f17245cfce7e48465ed1876afda419bb18a525c9daab5b733ee274a50852807->enter($__internal_4f17245cfce7e48465ed1876afda419bb18a525c9daab5b733ee274a50852807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_4f17245cfce7e48465ed1876afda419bb18a525c9daab5b733ee274a50852807->leave($__internal_4f17245cfce7e48465ed1876afda419bb18a525c9daab5b733ee274a50852807_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_7340d7baac357d0ef0c42b1987eba3900daf7672edb4c8421941a0c4807fb052 = $this->env->getExtension("native_profiler");
        $__internal_7340d7baac357d0ef0c42b1987eba3900daf7672edb4c8421941a0c4807fb052->enter($__internal_7340d7baac357d0ef0c42b1987eba3900daf7672edb4c8421941a0c4807fb052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->env->getExtension('translator')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('translator')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('translator')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_7340d7baac357d0ef0c42b1987eba3900daf7672edb4c8421941a0c4807fb052->leave($__internal_7340d7baac357d0ef0c42b1987eba3900daf7672edb4c8421941a0c4807fb052_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  118 => 37,  112 => 34,  100 => 25,  96 => 24,  90 => 21,  80 => 14,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'homepage' %}*/
/* */
/* {#*/
/*     the homepage is a special page which displays neither a header nor a footer.*/
/*     this is done with the 'trick' of defining empty Twig blocks without any content*/
/* #}*/
/* {% block header %}{% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="page-header">*/
/*         <h1>{{ 'title.homepage'|trans|raw }}</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_app'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('blog_index') }}">*/
/*                         <i class="fa fa-users"></i> {{ 'action.browse_app'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_admin'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('admin_index') }}">*/
/*                         <i class="fa fa-lock"></i> {{ 'action.browse_admin'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
