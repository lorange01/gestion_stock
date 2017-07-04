<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_17364121283abc7f457f2eb563cf8fa4c9d7de77f252ff13afc32934f0cf99dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_884e0c59f748656e33388531b9cfdb80b390aa31e00e94101e4f0425955456c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884e0c59f748656e33388531b9cfdb80b390aa31e00e94101e4f0425955456c1->enter($__internal_884e0c59f748656e33388531b9cfdb80b390aa31e00e94101e4f0425955456c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_884e0c59f748656e33388531b9cfdb80b390aa31e00e94101e4f0425955456c1->leave($__internal_884e0c59f748656e33388531b9cfdb80b390aa31e00e94101e4f0425955456c1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0b399b1e3e5e25e24d51559523efae5336f8d5f79b8cee6a61fff905a4b55ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b399b1e3e5e25e24d51559523efae5336f8d5f79b8cee6a61fff905a4b55ff->enter($__internal_f0b399b1e3e5e25e24d51559523efae5336f8d5f79b8cee6a61fff905a4b55ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_f0b399b1e3e5e25e24d51559523efae5336f8d5f79b8cee6a61fff905a4b55ff->leave($__internal_f0b399b1e3e5e25e24d51559523efae5336f8d5f79b8cee6a61fff905a4b55ff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
