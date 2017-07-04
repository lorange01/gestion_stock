<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_75de6cb42780cd3b17083d3b9d427e1e1e7cf33378e35b4350ab8bf09d0328e8 extends Twig_Template
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
        $__internal_5726174d983114849eb3295eea9bf42ba18b86a007c4841aac6a919f760917b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5726174d983114849eb3295eea9bf42ba18b86a007c4841aac6a919f760917b2->enter($__internal_5726174d983114849eb3295eea9bf42ba18b86a007c4841aac6a919f760917b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5726174d983114849eb3295eea9bf42ba18b86a007c4841aac6a919f760917b2->leave($__internal_5726174d983114849eb3295eea9bf42ba18b86a007c4841aac6a919f760917b2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f75d8a295aaf18af5eeb9534394dd36b248747e304e976fa0be294f2e0b8631a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75d8a295aaf18af5eeb9534394dd36b248747e304e976fa0be294f2e0b8631a->enter($__internal_f75d8a295aaf18af5eeb9534394dd36b248747e304e976fa0be294f2e0b8631a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_f75d8a295aaf18af5eeb9534394dd36b248747e304e976fa0be294f2e0b8631a->leave($__internal_f75d8a295aaf18af5eeb9534394dd36b248747e304e976fa0be294f2e0b8631a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ffc0513d9a7cb870dd78f30546a4a436c02df137175c72eb4adb00f04e86f287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc0513d9a7cb870dd78f30546a4a436c02df137175c72eb4adb00f04e86f287->enter($__internal_ffc0513d9a7cb870dd78f30546a4a436c02df137175c72eb4adb00f04e86f287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ffc0513d9a7cb870dd78f30546a4a436c02df137175c72eb4adb00f04e86f287->leave($__internal_ffc0513d9a7cb870dd78f30546a4a436c02df137175c72eb4adb00f04e86f287_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e27f73016309f6c2f548cd9daa3942f021c96b22d193e93df01de15a62167316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27f73016309f6c2f548cd9daa3942f021c96b22d193e93df01de15a62167316->enter($__internal_e27f73016309f6c2f548cd9daa3942f021c96b22d193e93df01de15a62167316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e27f73016309f6c2f548cd9daa3942f021c96b22d193e93df01de15a62167316->leave($__internal_e27f73016309f6c2f548cd9daa3942f021c96b22d193e93df01de15a62167316_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
