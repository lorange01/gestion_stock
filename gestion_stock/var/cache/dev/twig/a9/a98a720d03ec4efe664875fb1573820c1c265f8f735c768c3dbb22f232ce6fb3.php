<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_d08cea5cf4a3f50e4312c73266401f9fdfe7e38e2e07ae8364cd1212c9878884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_69e5e9c730e83038ef7691844e7483b4215bdb62e05c48221321f8c77b9944de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e5e9c730e83038ef7691844e7483b4215bdb62e05c48221321f8c77b9944de->enter($__internal_69e5e9c730e83038ef7691844e7483b4215bdb62e05c48221321f8c77b9944de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69e5e9c730e83038ef7691844e7483b4215bdb62e05c48221321f8c77b9944de->leave($__internal_69e5e9c730e83038ef7691844e7483b4215bdb62e05c48221321f8c77b9944de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d89fb9c73aebfebd0224766cc8e8545c5eea4aeaa74cc2ec53a0ca2577412720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89fb9c73aebfebd0224766cc8e8545c5eea4aeaa74cc2ec53a0ca2577412720->enter($__internal_d89fb9c73aebfebd0224766cc8e8545c5eea4aeaa74cc2ec53a0ca2577412720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_d89fb9c73aebfebd0224766cc8e8545c5eea4aeaa74cc2ec53a0ca2577412720->leave($__internal_d89fb9c73aebfebd0224766cc8e8545c5eea4aeaa74cc2ec53a0ca2577412720_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
