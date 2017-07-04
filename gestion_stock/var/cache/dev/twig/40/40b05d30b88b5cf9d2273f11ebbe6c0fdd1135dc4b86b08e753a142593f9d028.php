<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_15af562bf06e295ffcc5c840e9cd6acd999e3a82ea474e91b877bb848d81645e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_7386c588156672e8a9b7c7088ed22bb5a716c9bc8e7aaa0806ec59d08a290429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7386c588156672e8a9b7c7088ed22bb5a716c9bc8e7aaa0806ec59d08a290429->enter($__internal_7386c588156672e8a9b7c7088ed22bb5a716c9bc8e7aaa0806ec59d08a290429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7386c588156672e8a9b7c7088ed22bb5a716c9bc8e7aaa0806ec59d08a290429->leave($__internal_7386c588156672e8a9b7c7088ed22bb5a716c9bc8e7aaa0806ec59d08a290429_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a71bd4e85e7ec4c525becb88510ad042fc842ba13e6f07fd55503b702b6eff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a71bd4e85e7ec4c525becb88510ad042fc842ba13e6f07fd55503b702b6eff5->enter($__internal_5a71bd4e85e7ec4c525becb88510ad042fc842ba13e6f07fd55503b702b6eff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_5a71bd4e85e7ec4c525becb88510ad042fc842ba13e6f07fd55503b702b6eff5->leave($__internal_5a71bd4e85e7ec4c525becb88510ad042fc842ba13e6f07fd55503b702b6eff5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
