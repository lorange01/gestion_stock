<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a2a707a252c3d067a9a3d85e9c06e423b1c7f4eced9575e78a773eaa3f298894 extends Twig_Template
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
        $__internal_24a7b3fa968791f4618fe5ad081a6c005763d93d2b995b648cd9b45dc5caaa8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a7b3fa968791f4618fe5ad081a6c005763d93d2b995b648cd9b45dc5caaa8e->enter($__internal_24a7b3fa968791f4618fe5ad081a6c005763d93d2b995b648cd9b45dc5caaa8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24a7b3fa968791f4618fe5ad081a6c005763d93d2b995b648cd9b45dc5caaa8e->leave($__internal_24a7b3fa968791f4618fe5ad081a6c005763d93d2b995b648cd9b45dc5caaa8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ab0613957fc717dcd83184be2fa8bd4a8a2c4210ad91d781fd5ad19d8686ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab0613957fc717dcd83184be2fa8bd4a8a2c4210ad91d781fd5ad19d8686ddc->enter($__internal_0ab0613957fc717dcd83184be2fa8bd4a8a2c4210ad91d781fd5ad19d8686ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Connexion |  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_0ab0613957fc717dcd83184be2fa8bd4a8a2c4210ad91d781fd5ad19d8686ddc->leave($__internal_0ab0613957fc717dcd83184be2fa8bd4a8a2c4210ad91d781fd5ad19d8686ddc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1d057838ed854dfe9bb98f934141e8d52e40956ca78269ef88a3c9a161b5d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d057838ed854dfe9bb98f934141e8d52e40956ca78269ef88a3c9a161b5d6a->enter($__internal_b1d057838ed854dfe9bb98f934141e8d52e40956ca78269ef88a3c9a161b5d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b1d057838ed854dfe9bb98f934141e8d52e40956ca78269ef88a3c9a161b5d6a->leave($__internal_b1d057838ed854dfe9bb98f934141e8d52e40956ca78269ef88a3c9a161b5d6a_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b65289054bda3b5c672a327e2c51701db61164682fbf9e81c1b94aa1e66e512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b65289054bda3b5c672a327e2c51701db61164682fbf9e81c1b94aa1e66e512->enter($__internal_8b65289054bda3b5c672a327e2c51701db61164682fbf9e81c1b94aa1e66e512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "        ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    ";
        
        $__internal_8b65289054bda3b5c672a327e2c51701db61164682fbf9e81c1b94aa1e66e512->leave($__internal_8b65289054bda3b5c672a327e2c51701db61164682fbf9e81c1b94aa1e66e512_prof);

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
