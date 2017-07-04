<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_9bc8a49c2d299238cf80ca2c0e940f10a8d3a7a73f9e508cc8902edb40472b62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_d783db1b948e30dcf6192c20d551c978102aa21d70cc168f7273685c46be5fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d783db1b948e30dcf6192c20d551c978102aa21d70cc168f7273685c46be5fa3->enter($__internal_d783db1b948e30dcf6192c20d551c978102aa21d70cc168f7273685c46be5fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d783db1b948e30dcf6192c20d551c978102aa21d70cc168f7273685c46be5fa3->leave($__internal_d783db1b948e30dcf6192c20d551c978102aa21d70cc168f7273685c46be5fa3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e7ac22b4d01542d62292a8b9ebf19009867e90cfded1e8bbf633878981a3740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7ac22b4d01542d62292a8b9ebf19009867e90cfded1e8bbf633878981a3740->enter($__internal_7e7ac22b4d01542d62292a8b9ebf19009867e90cfded1e8bbf633878981a3740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_7e7ac22b4d01542d62292a8b9ebf19009867e90cfded1e8bbf633878981a3740->leave($__internal_7e7ac22b4d01542d62292a8b9ebf19009867e90cfded1e8bbf633878981a3740_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
