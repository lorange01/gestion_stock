<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_43bc73ad28c892b9b335b055b82d6751bd3ac378256418ae9933bbc02ebe4a32 extends Twig_Template
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
        $__internal_2baef91d92d656f267a6e214ac71115cbd23abdf6b346a0be8f42a3fea357d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2baef91d92d656f267a6e214ac71115cbd23abdf6b346a0be8f42a3fea357d84->enter($__internal_2baef91d92d656f267a6e214ac71115cbd23abdf6b346a0be8f42a3fea357d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2baef91d92d656f267a6e214ac71115cbd23abdf6b346a0be8f42a3fea357d84->leave($__internal_2baef91d92d656f267a6e214ac71115cbd23abdf6b346a0be8f42a3fea357d84_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1762e688d84adb8803c88a8f298adb399c8f3b57a38b6b06435df2f654019ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1762e688d84adb8803c88a8f298adb399c8f3b57a38b6b06435df2f654019ef5->enter($__internal_1762e688d84adb8803c88a8f298adb399c8f3b57a38b6b06435df2f654019ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1762e688d84adb8803c88a8f298adb399c8f3b57a38b6b06435df2f654019ef5->leave($__internal_1762e688d84adb8803c88a8f298adb399c8f3b57a38b6b06435df2f654019ef5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b193953ad960b43ba401a5734d31d7ff2f83a448644985c8d924ff8aaa73df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b193953ad960b43ba401a5734d31d7ff2f83a448644985c8d924ff8aaa73df4->enter($__internal_4b193953ad960b43ba401a5734d31d7ff2f83a448644985c8d924ff8aaa73df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b193953ad960b43ba401a5734d31d7ff2f83a448644985c8d924ff8aaa73df4->leave($__internal_4b193953ad960b43ba401a5734d31d7ff2f83a448644985c8d924ff8aaa73df4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0f479b6611b97a13f1674d430c0f517646ed2d72b9ade6c437e5ed6bffb1282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f479b6611b97a13f1674d430c0f517646ed2d72b9ade6c437e5ed6bffb1282->enter($__internal_c0f479b6611b97a13f1674d430c0f517646ed2d72b9ade6c437e5ed6bffb1282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c0f479b6611b97a13f1674d430c0f517646ed2d72b9ade6c437e5ed6bffb1282->leave($__internal_c0f479b6611b97a13f1674d430c0f517646ed2d72b9ade6c437e5ed6bffb1282_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
