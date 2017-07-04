<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_4d76cbd2f327b4209e3eab2f87daa159053948b40c2e049d8467e7b433e81265 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_4b7b7d98c5fde4fa043784ef056cd2d944270c521b2633a31b257029dd7c2b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7b7d98c5fde4fa043784ef056cd2d944270c521b2633a31b257029dd7c2b16->enter($__internal_4b7b7d98c5fde4fa043784ef056cd2d944270c521b2633a31b257029dd7c2b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b7b7d98c5fde4fa043784ef056cd2d944270c521b2633a31b257029dd7c2b16->leave($__internal_4b7b7d98c5fde4fa043784ef056cd2d944270c521b2633a31b257029dd7c2b16_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1bcece6eb287093d9e89224360ef034c88f6100c2166a507ac28b9fa970ff928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcece6eb287093d9e89224360ef034c88f6100c2166a507ac28b9fa970ff928->enter($__internal_1bcece6eb287093d9e89224360ef034c88f6100c2166a507ac28b9fa970ff928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_1bcece6eb287093d9e89224360ef034c88f6100c2166a507ac28b9fa970ff928->leave($__internal_1bcece6eb287093d9e89224360ef034c88f6100c2166a507ac28b9fa970ff928_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
