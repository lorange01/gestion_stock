<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_6cfb6c3df52c9c5bd486a987cda5c2311300625afc8a5aad7aea27ba7a016cc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_4349347287c9d29f44a922d79d74b579690683fe4473b2092cc970014f31805b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4349347287c9d29f44a922d79d74b579690683fe4473b2092cc970014f31805b->enter($__internal_4349347287c9d29f44a922d79d74b579690683fe4473b2092cc970014f31805b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4349347287c9d29f44a922d79d74b579690683fe4473b2092cc970014f31805b->leave($__internal_4349347287c9d29f44a922d79d74b579690683fe4473b2092cc970014f31805b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb50ea49892805c262288cf02c0f603d9d31a82b29a3e9ae65eaf4c4b108ecbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb50ea49892805c262288cf02c0f603d9d31a82b29a3e9ae65eaf4c4b108ecbb->enter($__internal_bb50ea49892805c262288cf02c0f603d9d31a82b29a3e9ae65eaf4c4b108ecbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_bb50ea49892805c262288cf02c0f603d9d31a82b29a3e9ae65eaf4c4b108ecbb->leave($__internal_bb50ea49892805c262288cf02c0f603d9d31a82b29a3e9ae65eaf4c4b108ecbb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
