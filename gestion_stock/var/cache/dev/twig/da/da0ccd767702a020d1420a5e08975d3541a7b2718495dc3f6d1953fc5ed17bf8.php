<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_198d24935f31388682671f06c0bb3807297ef831d9806faa156426e1811d6602 extends Twig_Template
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
        $__internal_acefe02221886d391ce4089ab2e1623ac3550d9351396c2338076cb22f8d082d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acefe02221886d391ce4089ab2e1623ac3550d9351396c2338076cb22f8d082d->enter($__internal_acefe02221886d391ce4089ab2e1623ac3550d9351396c2338076cb22f8d082d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acefe02221886d391ce4089ab2e1623ac3550d9351396c2338076cb22f8d082d->leave($__internal_acefe02221886d391ce4089ab2e1623ac3550d9351396c2338076cb22f8d082d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c25ca32cf4c46010460e2a825a1e318843e93d19b36e0992b668b445fce41af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25ca32cf4c46010460e2a825a1e318843e93d19b36e0992b668b445fce41af3->enter($__internal_c25ca32cf4c46010460e2a825a1e318843e93d19b36e0992b668b445fce41af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c25ca32cf4c46010460e2a825a1e318843e93d19b36e0992b668b445fce41af3->leave($__internal_c25ca32cf4c46010460e2a825a1e318843e93d19b36e0992b668b445fce41af3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25ed2d41f074a1c1b7a06b56b8489cf1f5f1c1df4e6ed309ab7cf75211f2aef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ed2d41f074a1c1b7a06b56b8489cf1f5f1c1df4e6ed309ab7cf75211f2aef4->enter($__internal_25ed2d41f074a1c1b7a06b56b8489cf1f5f1c1df4e6ed309ab7cf75211f2aef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_25ed2d41f074a1c1b7a06b56b8489cf1f5f1c1df4e6ed309ab7cf75211f2aef4->leave($__internal_25ed2d41f074a1c1b7a06b56b8489cf1f5f1c1df4e6ed309ab7cf75211f2aef4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d87741e7fb501111b28db8e0cd0313d9053369b7a0e6b038da591bf2cb84faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d87741e7fb501111b28db8e0cd0313d9053369b7a0e6b038da591bf2cb84faf->enter($__internal_9d87741e7fb501111b28db8e0cd0313d9053369b7a0e6b038da591bf2cb84faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d87741e7fb501111b28db8e0cd0313d9053369b7a0e6b038da591bf2cb84faf->leave($__internal_9d87741e7fb501111b28db8e0cd0313d9053369b7a0e6b038da591bf2cb84faf_prof);

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
