<?php

/* blog/about.html.twig */
class __TwigTemplate_15d55a52449918b782a5c46c368548b96bcc72a748e03c7c8a504d139dc776b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cd6f1c42455131bcbdcdf62229662e63e866bdaa57c65ee298c456826e28946 = $this->env->getExtension("native_profiler");
        $__internal_1cd6f1c42455131bcbdcdf62229662e63e866bdaa57c65ee298c456826e28946->enter($__internal_1cd6f1c42455131bcbdcdf62229662e63e866bdaa57c65ee298c456826e28946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        // line 1
        echo "<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            ";
        // line 4
        echo $this->env->getExtension('translator')->trans("help.app_description");
        echo "
        </p>
        <p>
            ";
        // line 7
        echo $this->env->getExtension('translator')->trans("help.more_information");
        echo "
        </p>
    </div>
</div>
<!-- Fragment rendered on ";
        // line 11
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long"), "html", null, true);
        echo " -->
";
        
        $__internal_1cd6f1c42455131bcbdcdf62229662e63e866bdaa57c65ee298c456826e28946->leave($__internal_1cd6f1c42455131bcbdcdf62229662e63e866bdaa57c65ee298c456826e28946_prof);

    }

    public function getTemplateName()
    {
        return "blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <div class="section about">*/
/*     <div class="well well-lg">*/
/*         <p>*/
/*             {{ 'help.app_description'|trans|raw }}*/
/*         </p>*/
/*         <p>*/
/*             {{ 'help.more_information'|trans|raw }}*/
/*         </p>*/
/*     </div>*/
/* </div>*/
/* <!-- Fragment rendered on {{ 'now'|localizeddate('long', 'long') }} -->*/
/* */
