<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c9928a0a8a87240d59259c154962eb3f4bf78df86700e4e32409db0ec3612195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cad800b83f7489b4604edcaf2de55983d573f498844ee19a779232b3bcf714ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad800b83f7489b4604edcaf2de55983d573f498844ee19a779232b3bcf714ef->enter($__internal_cad800b83f7489b4604edcaf2de55983d573f498844ee19a779232b3bcf714ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cad800b83f7489b4604edcaf2de55983d573f498844ee19a779232b3bcf714ef->leave($__internal_cad800b83f7489b4604edcaf2de55983d573f498844ee19a779232b3bcf714ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2578768da977e5cddcbd3133a3b2079b5dde4b8223ecfd1582be46aceb75912b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2578768da977e5cddcbd3133a3b2079b5dde4b8223ecfd1582be46aceb75912b->enter($__internal_2578768da977e5cddcbd3133a3b2079b5dde4b8223ecfd1582be46aceb75912b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Connexion |  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_2578768da977e5cddcbd3133a3b2079b5dde4b8223ecfd1582be46aceb75912b->leave($__internal_2578768da977e5cddcbd3133a3b2079b5dde4b8223ecfd1582be46aceb75912b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_99d69a205f5b5e6c5e726bd82405de29aff65387b045f35b824d66ee9eca3d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d69a205f5b5e6c5e726bd82405de29aff65387b045f35b824d66ee9eca3d3c->enter($__internal_99d69a205f5b5e6c5e726bd82405de29aff65387b045f35b824d66ee9eca3d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_99d69a205f5b5e6c5e726bd82405de29aff65387b045f35b824d66ee9eca3d3c->leave($__internal_99d69a205f5b5e6c5e726bd82405de29aff65387b045f35b824d66ee9eca3d3c_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c9c0ccc609f6aad0dd830cd844bcc928ca1aff8fc00ca4c38437d2cefc43b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9c0ccc609f6aad0dd830cd844bcc928ca1aff8fc00ca4c38437d2cefc43b89->enter($__internal_7c9c0ccc609f6aad0dd830cd844bcc928ca1aff8fc00ca4c38437d2cefc43b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    ";
        
        $__internal_7c9c0ccc609f6aad0dd830cd844bcc928ca1aff8fc00ca4c38437d2cefc43b89->leave($__internal_7c9c0ccc609f6aad0dd830cd844bcc928ca1aff8fc00ca4c38437d2cefc43b89_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 8,  56 => 7,  50 => 6,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Connexion |  {{ parent() }} {% endblock %}


{% block body %}
    {% block fos_user_content %}
        {{ include('@FOSUser/Security/login_content.html.twig') }}
    {% endblock fos_user_content %}
{% endblock %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
