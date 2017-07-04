<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_601576e9b4e9c700106d109b0a1aa09af090ba8833d9afed90c4421c4c9f9768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_45fad06472f998f535d72bfb20f45111a119b514a94efde0f0895a7206e1242d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45fad06472f998f535d72bfb20f45111a119b514a94efde0f0895a7206e1242d->enter($__internal_45fad06472f998f535d72bfb20f45111a119b514a94efde0f0895a7206e1242d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45fad06472f998f535d72bfb20f45111a119b514a94efde0f0895a7206e1242d->leave($__internal_45fad06472f998f535d72bfb20f45111a119b514a94efde0f0895a7206e1242d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16cc5673570b31ba3d73e4d81b63c7394ddc2a67200b74841019d862597cc489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cc5673570b31ba3d73e4d81b63c7394ddc2a67200b74841019d862597cc489->enter($__internal_16cc5673570b31ba3d73e4d81b63c7394ddc2a67200b74841019d862597cc489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_16cc5673570b31ba3d73e4d81b63c7394ddc2a67200b74841019d862597cc489->leave($__internal_16cc5673570b31ba3d73e4d81b63c7394ddc2a67200b74841019d862597cc489_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
