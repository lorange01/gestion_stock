<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_550c8757c10bf87736455ce12de853cbb7651646a28b4ae6293ac1462cac32dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_99c96a5bab8e076e76af3325a0290acd35f806fc92edc112dfae092a7aee3e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c96a5bab8e076e76af3325a0290acd35f806fc92edc112dfae092a7aee3e84->enter($__internal_99c96a5bab8e076e76af3325a0290acd35f806fc92edc112dfae092a7aee3e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99c96a5bab8e076e76af3325a0290acd35f806fc92edc112dfae092a7aee3e84->leave($__internal_99c96a5bab8e076e76af3325a0290acd35f806fc92edc112dfae092a7aee3e84_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ebce1678b48c7f8e0eebd0076a12082a9a56d48ec0230710d8e26d022ea2059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebce1678b48c7f8e0eebd0076a12082a9a56d48ec0230710d8e26d022ea2059->enter($__internal_2ebce1678b48c7f8e0eebd0076a12082a9a56d48ec0230710d8e26d022ea2059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_2ebce1678b48c7f8e0eebd0076a12082a9a56d48ec0230710d8e26d022ea2059->leave($__internal_2ebce1678b48c7f8e0eebd0076a12082a9a56d48ec0230710d8e26d022ea2059_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
