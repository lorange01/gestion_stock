<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ad0392b1551e4fda473593d81076f7ae981e9dc4305c893e6f6b1d79a8299098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_877ac9d150dc4ed5aa6d00f196575ed885bee07427978b0bd092a6f26452fdc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877ac9d150dc4ed5aa6d00f196575ed885bee07427978b0bd092a6f26452fdc9->enter($__internal_877ac9d150dc4ed5aa6d00f196575ed885bee07427978b0bd092a6f26452fdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_877ac9d150dc4ed5aa6d00f196575ed885bee07427978b0bd092a6f26452fdc9->leave($__internal_877ac9d150dc4ed5aa6d00f196575ed885bee07427978b0bd092a6f26452fdc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6bb5f886fcb70046418e13f624d6107494289fd1f03d4dad2e30588c53499313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb5f886fcb70046418e13f624d6107494289fd1f03d4dad2e30588c53499313->enter($__internal_6bb5f886fcb70046418e13f624d6107494289fd1f03d4dad2e30588c53499313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6bb5f886fcb70046418e13f624d6107494289fd1f03d4dad2e30588c53499313->leave($__internal_6bb5f886fcb70046418e13f624d6107494289fd1f03d4dad2e30588c53499313_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
