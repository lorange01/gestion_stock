<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_05271178f42ab3318d57486ff0fd4b4d8e981b9c6414448ed06d81e5c8badbc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_9cb0058136e631c0c468b41692d1b7f3b98cab87b3fc0b368f303bcafcbcc74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb0058136e631c0c468b41692d1b7f3b98cab87b3fc0b368f303bcafcbcc74a->enter($__internal_9cb0058136e631c0c468b41692d1b7f3b98cab87b3fc0b368f303bcafcbcc74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb0058136e631c0c468b41692d1b7f3b98cab87b3fc0b368f303bcafcbcc74a->leave($__internal_9cb0058136e631c0c468b41692d1b7f3b98cab87b3fc0b368f303bcafcbcc74a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a9f6724c0beb91b31837672388a724b9323034ef637fe509e02d9feea6503f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9f6724c0beb91b31837672388a724b9323034ef637fe509e02d9feea6503f4->enter($__internal_2a9f6724c0beb91b31837672388a724b9323034ef637fe509e02d9feea6503f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2a9f6724c0beb91b31837672388a724b9323034ef637fe509e02d9feea6503f4->leave($__internal_2a9f6724c0beb91b31837672388a724b9323034ef637fe509e02d9feea6503f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
