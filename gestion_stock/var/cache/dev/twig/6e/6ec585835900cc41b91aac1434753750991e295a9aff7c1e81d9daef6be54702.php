<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_f13279d688ef387a86d6ed54fc6b379c62f49fced1fcddf41154e6e97af78dc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_b45a0e3f76185b40f0dde2a6d15b5e4c8c14bbdcb3edbea784e83ffc36ca5ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45a0e3f76185b40f0dde2a6d15b5e4c8c14bbdcb3edbea784e83ffc36ca5ba5->enter($__internal_b45a0e3f76185b40f0dde2a6d15b5e4c8c14bbdcb3edbea784e83ffc36ca5ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45a0e3f76185b40f0dde2a6d15b5e4c8c14bbdcb3edbea784e83ffc36ca5ba5->leave($__internal_b45a0e3f76185b40f0dde2a6d15b5e4c8c14bbdcb3edbea784e83ffc36ca5ba5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c95f99a5fa7fd5cb17b539f6d7c674698d661acbf504d3f9a29a97a1a4594895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95f99a5fa7fd5cb17b539f6d7c674698d661acbf504d3f9a29a97a1a4594895->enter($__internal_c95f99a5fa7fd5cb17b539f6d7c674698d661acbf504d3f9a29a97a1a4594895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_c95f99a5fa7fd5cb17b539f6d7c674698d661acbf504d3f9a29a97a1a4594895->leave($__internal_c95f99a5fa7fd5cb17b539f6d7c674698d661acbf504d3f9a29a97a1a4594895_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
