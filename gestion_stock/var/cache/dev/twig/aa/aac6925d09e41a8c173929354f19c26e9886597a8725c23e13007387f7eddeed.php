<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_8e81c13cdac12d905fa59a64d325f42504b92fa5853760768b23e558f0b7c866 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_309bc10511ccd4e970cf9a118796f33e8b0931bdfc9a129adc010ad969abcbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309bc10511ccd4e970cf9a118796f33e8b0931bdfc9a129adc010ad969abcbe0->enter($__internal_309bc10511ccd4e970cf9a118796f33e8b0931bdfc9a129adc010ad969abcbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_309bc10511ccd4e970cf9a118796f33e8b0931bdfc9a129adc010ad969abcbe0->leave($__internal_309bc10511ccd4e970cf9a118796f33e8b0931bdfc9a129adc010ad969abcbe0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea143c4e334a5573f0162edbbe06cfbfa47ebcb72c0d55670a3b278281a8dcba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea143c4e334a5573f0162edbbe06cfbfa47ebcb72c0d55670a3b278281a8dcba->enter($__internal_ea143c4e334a5573f0162edbbe06cfbfa47ebcb72c0d55670a3b278281a8dcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_ea143c4e334a5573f0162edbbe06cfbfa47ebcb72c0d55670a3b278281a8dcba->leave($__internal_ea143c4e334a5573f0162edbbe06cfbfa47ebcb72c0d55670a3b278281a8dcba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
