<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_87f39b14ebefe574ce16ef3cacb452d357872684f97bba35775d08dbd4b9de91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3f3f100553fef7a70729caa9eb556e14ff6d9eea90a9551bd47e97b68a31ac63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3f100553fef7a70729caa9eb556e14ff6d9eea90a9551bd47e97b68a31ac63->enter($__internal_3f3f100553fef7a70729caa9eb556e14ff6d9eea90a9551bd47e97b68a31ac63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f3f100553fef7a70729caa9eb556e14ff6d9eea90a9551bd47e97b68a31ac63->leave($__internal_3f3f100553fef7a70729caa9eb556e14ff6d9eea90a9551bd47e97b68a31ac63_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae39754a2b4a3203cc7d5c113f51de58b462d5dbefba9ef793337a42c6891d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae39754a2b4a3203cc7d5c113f51de58b462d5dbefba9ef793337a42c6891d17->enter($__internal_ae39754a2b4a3203cc7d5c113f51de58b462d5dbefba9ef793337a42c6891d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ae39754a2b4a3203cc7d5c113f51de58b462d5dbefba9ef793337a42c6891d17->leave($__internal_ae39754a2b4a3203cc7d5c113f51de58b462d5dbefba9ef793337a42c6891d17_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
