<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e96f969575c09d6d98620a771b63e0b98a8f1ac00bfb79e93301b46a66665fea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_55ba1047877b972d741d3948145b3e6a97000e839cce493c7de776c418e3301d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ba1047877b972d741d3948145b3e6a97000e839cce493c7de776c418e3301d->enter($__internal_55ba1047877b972d741d3948145b3e6a97000e839cce493c7de776c418e3301d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55ba1047877b972d741d3948145b3e6a97000e839cce493c7de776c418e3301d->leave($__internal_55ba1047877b972d741d3948145b3e6a97000e839cce493c7de776c418e3301d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a3caa9cc97eedfa97daec91a5a3c8980bb448e08f2724dd104298083f46d6c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3caa9cc97eedfa97daec91a5a3c8980bb448e08f2724dd104298083f46d6c67->enter($__internal_a3caa9cc97eedfa97daec91a5a3c8980bb448e08f2724dd104298083f46d6c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a3caa9cc97eedfa97daec91a5a3c8980bb448e08f2724dd104298083f46d6c67->leave($__internal_a3caa9cc97eedfa97daec91a5a3c8980bb448e08f2724dd104298083f46d6c67_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9a03506674780a74e13ebe4cf136b71645306e981405a79b4eb2a3f108a328f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a03506674780a74e13ebe4cf136b71645306e981405a79b4eb2a3f108a328f->enter($__internal_c9a03506674780a74e13ebe4cf136b71645306e981405a79b4eb2a3f108a328f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9a03506674780a74e13ebe4cf136b71645306e981405a79b4eb2a3f108a328f->leave($__internal_c9a03506674780a74e13ebe4cf136b71645306e981405a79b4eb2a3f108a328f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b69affa5fb373beae7e2d24f2d12a468e94641036a33db1f02e61aee5903b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b69affa5fb373beae7e2d24f2d12a468e94641036a33db1f02e61aee5903b25->enter($__internal_6b69affa5fb373beae7e2d24f2d12a468e94641036a33db1f02e61aee5903b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6b69affa5fb373beae7e2d24f2d12a468e94641036a33db1f02e61aee5903b25->leave($__internal_6b69affa5fb373beae7e2d24f2d12a468e94641036a33db1f02e61aee5903b25_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
