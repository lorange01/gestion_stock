<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_d0a7849bd80cebcfde3b8dd0cdf33689c71713cdd14acedd88de6a36c0514633 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d381d49a8ae746e39648bc0aff774c3b5f91c9939f21b52f9ccd2cec249f6f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d381d49a8ae746e39648bc0aff774c3b5f91c9939f21b52f9ccd2cec249f6f5c->enter($__internal_d381d49a8ae746e39648bc0aff774c3b5f91c9939f21b52f9ccd2cec249f6f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d381d49a8ae746e39648bc0aff774c3b5f91c9939f21b52f9ccd2cec249f6f5c->leave($__internal_d381d49a8ae746e39648bc0aff774c3b5f91c9939f21b52f9ccd2cec249f6f5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1dccf4aab3c24b797cba41fa68bed53b96044e7e3186db37a9f77ccbbfaf9581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dccf4aab3c24b797cba41fa68bed53b96044e7e3186db37a9f77ccbbfaf9581->enter($__internal_1dccf4aab3c24b797cba41fa68bed53b96044e7e3186db37a9f77ccbbfaf9581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1dccf4aab3c24b797cba41fa68bed53b96044e7e3186db37a9f77ccbbfaf9581->leave($__internal_1dccf4aab3c24b797cba41fa68bed53b96044e7e3186db37a9f77ccbbfaf9581_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
