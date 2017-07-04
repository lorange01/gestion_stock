<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_13edb687aa9c93df02aaac8850a6bc85425a11e5c071f25c93075a02b9b0f41c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2a63627ad1e898ae8ae5ecfd7d2c7afd897af5bd52e97e274d9c3b9d902308a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a63627ad1e898ae8ae5ecfd7d2c7afd897af5bd52e97e274d9c3b9d902308a->enter($__internal_a2a63627ad1e898ae8ae5ecfd7d2c7afd897af5bd52e97e274d9c3b9d902308a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a63627ad1e898ae8ae5ecfd7d2c7afd897af5bd52e97e274d9c3b9d902308a->leave($__internal_a2a63627ad1e898ae8ae5ecfd7d2c7afd897af5bd52e97e274d9c3b9d902308a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be8c5f58936293968fc8eb79a3919111f5bea20fd02ce381856de64a3ab0fdd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8c5f58936293968fc8eb79a3919111f5bea20fd02ce381856de64a3ab0fdd9->enter($__internal_be8c5f58936293968fc8eb79a3919111f5bea20fd02ce381856de64a3ab0fdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_be8c5f58936293968fc8eb79a3919111f5bea20fd02ce381856de64a3ab0fdd9->leave($__internal_be8c5f58936293968fc8eb79a3919111f5bea20fd02ce381856de64a3ab0fdd9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
