<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_64e496d6aec441bdb7974d98dc4a5480f8f51de1c765a80f6335c056457c2102 extends Twig_Template
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
        $__internal_af5d3801e840031c54533492ca11510d0a3618bea8dbc5e20a5d67a9ee355715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5d3801e840031c54533492ca11510d0a3618bea8dbc5e20a5d67a9ee355715->enter($__internal_af5d3801e840031c54533492ca11510d0a3618bea8dbc5e20a5d67a9ee355715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af5d3801e840031c54533492ca11510d0a3618bea8dbc5e20a5d67a9ee355715->leave($__internal_af5d3801e840031c54533492ca11510d0a3618bea8dbc5e20a5d67a9ee355715_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50519f0866a27df1ae2ab6ae5204b0b09797130417b071f43c1ea6b552ec7561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50519f0866a27df1ae2ab6ae5204b0b09797130417b071f43c1ea6b552ec7561->enter($__internal_50519f0866a27df1ae2ab6ae5204b0b09797130417b071f43c1ea6b552ec7561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_50519f0866a27df1ae2ab6ae5204b0b09797130417b071f43c1ea6b552ec7561->leave($__internal_50519f0866a27df1ae2ab6ae5204b0b09797130417b071f43c1ea6b552ec7561_prof);

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
