<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3f07ae638b9e1572e6b6b2ca25a37b90be710ab382993fecccd40fbc2042e614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_427e5ee2c5d6c2605fedaea4a2ef39613e5be19e3de09cdb93503dcddb1d0055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427e5ee2c5d6c2605fedaea4a2ef39613e5be19e3de09cdb93503dcddb1d0055->enter($__internal_427e5ee2c5d6c2605fedaea4a2ef39613e5be19e3de09cdb93503dcddb1d0055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_427e5ee2c5d6c2605fedaea4a2ef39613e5be19e3de09cdb93503dcddb1d0055->leave($__internal_427e5ee2c5d6c2605fedaea4a2ef39613e5be19e3de09cdb93503dcddb1d0055_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d732a95e061bcc08bf12901c39414f77ad51e43bc3773b27023743d5da2186e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d732a95e061bcc08bf12901c39414f77ad51e43bc3773b27023743d5da2186e1->enter($__internal_d732a95e061bcc08bf12901c39414f77ad51e43bc3773b27023743d5da2186e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d732a95e061bcc08bf12901c39414f77ad51e43bc3773b27023743d5da2186e1->leave($__internal_d732a95e061bcc08bf12901c39414f77ad51e43bc3773b27023743d5da2186e1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
