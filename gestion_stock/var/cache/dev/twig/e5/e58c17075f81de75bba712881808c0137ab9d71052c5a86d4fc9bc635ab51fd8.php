<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_408834fd8503396e89e7c87a68e6dae96166b3f3b437c6aecabd812db9cee44f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_9db3e8ed6821e23e2924b025a46716c001772c5676c3587231b72189b67013c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db3e8ed6821e23e2924b025a46716c001772c5676c3587231b72189b67013c9->enter($__internal_9db3e8ed6821e23e2924b025a46716c001772c5676c3587231b72189b67013c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9db3e8ed6821e23e2924b025a46716c001772c5676c3587231b72189b67013c9->leave($__internal_9db3e8ed6821e23e2924b025a46716c001772c5676c3587231b72189b67013c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a2c9e3e84d4784abf77a5acb639f342d45b7d4d1b3d64733d9b4a28b0e3e42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2c9e3e84d4784abf77a5acb639f342d45b7d4d1b3d64733d9b4a28b0e3e42d->enter($__internal_2a2c9e3e84d4784abf77a5acb639f342d45b7d4d1b3d64733d9b4a28b0e3e42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2a2c9e3e84d4784abf77a5acb639f342d45b7d4d1b3d64733d9b4a28b0e3e42d->leave($__internal_2a2c9e3e84d4784abf77a5acb639f342d45b7d4d1b3d64733d9b4a28b0e3e42d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
