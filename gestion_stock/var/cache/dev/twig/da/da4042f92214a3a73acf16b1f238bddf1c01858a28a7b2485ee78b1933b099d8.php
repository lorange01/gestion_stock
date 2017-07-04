<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_dc1c1deb9c4adf3c235313cb95ff850840b7da498b8a2ede2e87574885439563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a75737aa8cc4dd35e95a32945844ea4168a9160a482ba146070337e1d9d5d9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75737aa8cc4dd35e95a32945844ea4168a9160a482ba146070337e1d9d5d9f2->enter($__internal_a75737aa8cc4dd35e95a32945844ea4168a9160a482ba146070337e1d9d5d9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a75737aa8cc4dd35e95a32945844ea4168a9160a482ba146070337e1d9d5d9f2->leave($__internal_a75737aa8cc4dd35e95a32945844ea4168a9160a482ba146070337e1d9d5d9f2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_318a90819420f19f57db1a93bda348a423a25a0346aa0f39d3b4c1e8c9025a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318a90819420f19f57db1a93bda348a423a25a0346aa0f39d3b4c1e8c9025a6a->enter($__internal_318a90819420f19f57db1a93bda348a423a25a0346aa0f39d3b4c1e8c9025a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        body {
            background: #eee !important;
        }
    </style>
";
        
        $__internal_318a90819420f19f57db1a93bda348a423a25a0346aa0f39d3b4c1e8c9025a6a->leave($__internal_318a90819420f19f57db1a93bda348a423a25a0346aa0f39d3b4c1e8c9025a6a_prof);

    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e2e727e2231b9998a2614cd0fa7fa24c33ce6af9aa877f2ddb4e1750e591bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2e727e2231b9998a2614cd0fa7fa24c33ce6af9aa877f2ddb4e1750e591bd5->enter($__internal_4e2e727e2231b9998a2614cd0fa7fa24c33ce6af9aa877f2ddb4e1750e591bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 13
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 13)->display($context);
        
        $__internal_4e2e727e2231b9998a2614cd0fa7fa24c33ce6af9aa877f2ddb4e1750e591bd5->leave($__internal_4e2e727e2231b9998a2614cd0fa7fa24c33ce6af9aa877f2ddb4e1750e591bd5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  56 => 12,  41 => 3,  35 => 2,  11 => 1,);
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
{% block stylesheets %}
    {{ parent() }}
    <style>
        body {
            background: #eee !important;
        }
    </style>
{% endblock stylesheets %}


{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
