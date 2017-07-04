<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_0791a8b3e5c2a6db6777bf993dd5b8167cd146347e231ca0babe98de462bf588 extends Twig_Template
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
        $__internal_612a2cde940d580312c6f74f0b0a42124070ee841d5203d8c92515ad72b6e70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612a2cde940d580312c6f74f0b0a42124070ee841d5203d8c92515ad72b6e70a->enter($__internal_612a2cde940d580312c6f74f0b0a42124070ee841d5203d8c92515ad72b6e70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_612a2cde940d580312c6f74f0b0a42124070ee841d5203d8c92515ad72b6e70a->leave($__internal_612a2cde940d580312c6f74f0b0a42124070ee841d5203d8c92515ad72b6e70a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f4c0bdf82000b31bd5763a2db1f84471b216ea4a77266dfb061d41a3dbf3ca3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c0bdf82000b31bd5763a2db1f84471b216ea4a77266dfb061d41a3dbf3ca3b->enter($__internal_f4c0bdf82000b31bd5763a2db1f84471b216ea4a77266dfb061d41a3dbf3ca3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_f4c0bdf82000b31bd5763a2db1f84471b216ea4a77266dfb061d41a3dbf3ca3b->leave($__internal_f4c0bdf82000b31bd5763a2db1f84471b216ea4a77266dfb061d41a3dbf3ca3b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8d8a779089b42bdf8305e2d664968c178cf809ea0b955c7e18c12a7567e7e073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8a779089b42bdf8305e2d664968c178cf809ea0b955c7e18c12a7567e7e073->enter($__internal_8d8a779089b42bdf8305e2d664968c178cf809ea0b955c7e18c12a7567e7e073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8d8a779089b42bdf8305e2d664968c178cf809ea0b955c7e18c12a7567e7e073->leave($__internal_8d8a779089b42bdf8305e2d664968c178cf809ea0b955c7e18c12a7567e7e073_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3171422ebc41df85942dbd48817e6f6290766296a62ccaf42e17cbedb0981e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3171422ebc41df85942dbd48817e6f6290766296a62ccaf42e17cbedb0981e66->enter($__internal_3171422ebc41df85942dbd48817e6f6290766296a62ccaf42e17cbedb0981e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3171422ebc41df85942dbd48817e6f6290766296a62ccaf42e17cbedb0981e66->leave($__internal_3171422ebc41df85942dbd48817e6f6290766296a62ccaf42e17cbedb0981e66_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
