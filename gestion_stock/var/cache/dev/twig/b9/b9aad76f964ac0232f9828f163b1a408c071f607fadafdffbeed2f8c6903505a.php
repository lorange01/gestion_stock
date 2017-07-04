<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_614adeaa73f190db5e86081cb4c7b093b5b7fb6ed52a0fe2e7d42b69ce9ab230 extends Twig_Template
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
        $__internal_91855e3641e462206cb4e4d699c05c9f01fd7193f2701a6ceb254bebdd03122d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91855e3641e462206cb4e4d699c05c9f01fd7193f2701a6ceb254bebdd03122d->enter($__internal_91855e3641e462206cb4e4d699c05c9f01fd7193f2701a6ceb254bebdd03122d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91855e3641e462206cb4e4d699c05c9f01fd7193f2701a6ceb254bebdd03122d->leave($__internal_91855e3641e462206cb4e4d699c05c9f01fd7193f2701a6ceb254bebdd03122d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ad3e865ff41019af88c29cdbe2c7fe6215f51cbe0f94df3a2a00d2e8a075010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad3e865ff41019af88c29cdbe2c7fe6215f51cbe0f94df3a2a00d2e8a075010->enter($__internal_8ad3e865ff41019af88c29cdbe2c7fe6215f51cbe0f94df3a2a00d2e8a075010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8ad3e865ff41019af88c29cdbe2c7fe6215f51cbe0f94df3a2a00d2e8a075010->leave($__internal_8ad3e865ff41019af88c29cdbe2c7fe6215f51cbe0f94df3a2a00d2e8a075010_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac66efbe34cf7e6c27ed8520cbb3ab68b4b762dd98096d67f3681fe9dd3b5429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac66efbe34cf7e6c27ed8520cbb3ab68b4b762dd98096d67f3681fe9dd3b5429->enter($__internal_ac66efbe34cf7e6c27ed8520cbb3ab68b4b762dd98096d67f3681fe9dd3b5429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ac66efbe34cf7e6c27ed8520cbb3ab68b4b762dd98096d67f3681fe9dd3b5429->leave($__internal_ac66efbe34cf7e6c27ed8520cbb3ab68b4b762dd98096d67f3681fe9dd3b5429_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6097df1b578eaa76ddee93b8b47be9c1cd033b197c5046c52c4abdc7b62b73d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6097df1b578eaa76ddee93b8b47be9c1cd033b197c5046c52c4abdc7b62b73d1->enter($__internal_6097df1b578eaa76ddee93b8b47be9c1cd033b197c5046c52c4abdc7b62b73d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6097df1b578eaa76ddee93b8b47be9c1cd033b197c5046c52c4abdc7b62b73d1->leave($__internal_6097df1b578eaa76ddee93b8b47be9c1cd033b197c5046c52c4abdc7b62b73d1_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
