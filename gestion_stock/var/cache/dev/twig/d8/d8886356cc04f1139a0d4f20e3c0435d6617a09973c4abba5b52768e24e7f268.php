<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_5c9b1daf0758d3355e8617beefc600d4908a138c7ba60973a979246304e934aa extends Twig_Template
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
        $__internal_6d21d2831576f1086981fc67f1de10169d14f442f338b648ca7096d1455416ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d21d2831576f1086981fc67f1de10169d14f442f338b648ca7096d1455416ee->enter($__internal_6d21d2831576f1086981fc67f1de10169d14f442f338b648ca7096d1455416ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6d21d2831576f1086981fc67f1de10169d14f442f338b648ca7096d1455416ee->leave($__internal_6d21d2831576f1086981fc67f1de10169d14f442f338b648ca7096d1455416ee_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c73570fa4b9793933369d5762fb60789674188d1c8d5e6b4e0efcb4ee34a3ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73570fa4b9793933369d5762fb60789674188d1c8d5e6b4e0efcb4ee34a3ab2->enter($__internal_c73570fa4b9793933369d5762fb60789674188d1c8d5e6b4e0efcb4ee34a3ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c73570fa4b9793933369d5762fb60789674188d1c8d5e6b4e0efcb4ee34a3ab2->leave($__internal_c73570fa4b9793933369d5762fb60789674188d1c8d5e6b4e0efcb4ee34a3ab2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
