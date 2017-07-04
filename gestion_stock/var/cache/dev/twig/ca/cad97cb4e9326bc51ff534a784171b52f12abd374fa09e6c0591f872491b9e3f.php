<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_6d99e85e75cd6d81ef19c65bdd0fe147b291bdce5a8278f738bd5e71241fbf24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_42d4a13a4c9fb65d9067f0b3d298561b2b92de15499ff205947d82167b3d4837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d4a13a4c9fb65d9067f0b3d298561b2b92de15499ff205947d82167b3d4837->enter($__internal_42d4a13a4c9fb65d9067f0b3d298561b2b92de15499ff205947d82167b3d4837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42d4a13a4c9fb65d9067f0b3d298561b2b92de15499ff205947d82167b3d4837->leave($__internal_42d4a13a4c9fb65d9067f0b3d298561b2b92de15499ff205947d82167b3d4837_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b86e2bfddfab78bfeddfda5ce4a6968898427570a0021927103ecec94f6a300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b86e2bfddfab78bfeddfda5ce4a6968898427570a0021927103ecec94f6a300->enter($__internal_4b86e2bfddfab78bfeddfda5ce4a6968898427570a0021927103ecec94f6a300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_4b86e2bfddfab78bfeddfda5ce4a6968898427570a0021927103ecec94f6a300->leave($__internal_4b86e2bfddfab78bfeddfda5ce4a6968898427570a0021927103ecec94f6a300_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
