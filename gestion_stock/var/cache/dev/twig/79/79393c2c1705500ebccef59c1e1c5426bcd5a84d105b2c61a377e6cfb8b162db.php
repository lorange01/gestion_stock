<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_e8f90d81654114b05353f440daf4b34f7a745fdab0586952dbdc71b78503f220 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b0cd76e2628b705ed16719eb6befbde4c58dfddd5ee3457c1f8827e88a454e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0cd76e2628b705ed16719eb6befbde4c58dfddd5ee3457c1f8827e88a454e0->enter($__internal_0b0cd76e2628b705ed16719eb6befbde4c58dfddd5ee3457c1f8827e88a454e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0b0cd76e2628b705ed16719eb6befbde4c58dfddd5ee3457c1f8827e88a454e0->leave($__internal_0b0cd76e2628b705ed16719eb6befbde4c58dfddd5ee3457c1f8827e88a454e0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e56bd013f0f7e2eda09fb1eb69aae829c37c4488caf1e2da496d4154fb104165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56bd013f0f7e2eda09fb1eb69aae829c37c4488caf1e2da496d4154fb104165->enter($__internal_e56bd013f0f7e2eda09fb1eb69aae829c37c4488caf1e2da496d4154fb104165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_e56bd013f0f7e2eda09fb1eb69aae829c37c4488caf1e2da496d4154fb104165->leave($__internal_e56bd013f0f7e2eda09fb1eb69aae829c37c4488caf1e2da496d4154fb104165_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_624688f7c877a62b77a3c6695453eb097dbc7da1540a47b0b20b0afe4a6b3c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624688f7c877a62b77a3c6695453eb097dbc7da1540a47b0b20b0afe4a6b3c7e->enter($__internal_624688f7c877a62b77a3c6695453eb097dbc7da1540a47b0b20b0afe4a6b3c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_624688f7c877a62b77a3c6695453eb097dbc7da1540a47b0b20b0afe4a6b3c7e->leave($__internal_624688f7c877a62b77a3c6695453eb097dbc7da1540a47b0b20b0afe4a6b3c7e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_40c4ca9b4ae663fbcda407a8e594e03e32ed33faf705897635748e80ae0af321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c4ca9b4ae663fbcda407a8e594e03e32ed33faf705897635748e80ae0af321->enter($__internal_40c4ca9b4ae663fbcda407a8e594e03e32ed33faf705897635748e80ae0af321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_40c4ca9b4ae663fbcda407a8e594e03e32ed33faf705897635748e80ae0af321->leave($__internal_40c4ca9b4ae663fbcda407a8e594e03e32ed33faf705897635748e80ae0af321_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
