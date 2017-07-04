<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_8919406e0f82ea447436a0b85ff91d4a8565f02a7c2d0eef310187d015c7fd9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_2cefd1708361e48ee656558be6bd9682957baf6d1ed46b8ea765a6dae1c888f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cefd1708361e48ee656558be6bd9682957baf6d1ed46b8ea765a6dae1c888f7->enter($__internal_2cefd1708361e48ee656558be6bd9682957baf6d1ed46b8ea765a6dae1c888f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cefd1708361e48ee656558be6bd9682957baf6d1ed46b8ea765a6dae1c888f7->leave($__internal_2cefd1708361e48ee656558be6bd9682957baf6d1ed46b8ea765a6dae1c888f7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_963ac1a2aac90eb0a53aa5e67067a2373201fb73b7fc5040228b637def9fe9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_963ac1a2aac90eb0a53aa5e67067a2373201fb73b7fc5040228b637def9fe9f8->enter($__internal_963ac1a2aac90eb0a53aa5e67067a2373201fb73b7fc5040228b637def9fe9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Connexion |  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_963ac1a2aac90eb0a53aa5e67067a2373201fb73b7fc5040228b637def9fe9f8->leave($__internal_963ac1a2aac90eb0a53aa5e67067a2373201fb73b7fc5040228b637def9fe9f8_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9898c2109171af41f7b4c9a99295b7654d9243c96f17c1fbda29301b8d382268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9898c2109171af41f7b4c9a99295b7654d9243c96f17c1fbda29301b8d382268->enter($__internal_9898c2109171af41f7b4c9a99295b7654d9243c96f17c1fbda29301b8d382268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_9898c2109171af41f7b4c9a99295b7654d9243c96f17c1fbda29301b8d382268->leave($__internal_9898c2109171af41f7b4c9a99295b7654d9243c96f17c1fbda29301b8d382268_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e1985e048095077390c28cc486a2a1225879c86708e8cc1a3baa6581226894d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1985e048095077390c28cc486a2a1225879c86708e8cc1a3baa6581226894d->enter($__internal_1e1985e048095077390c28cc486a2a1225879c86708e8cc1a3baa6581226894d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    ";
        
        $__internal_1e1985e048095077390c28cc486a2a1225879c86708e8cc1a3baa6581226894d->leave($__internal_1e1985e048095077390c28cc486a2a1225879c86708e8cc1a3baa6581226894d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
