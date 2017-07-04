<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b2f2c3540c4c4e50d0ea51408177255092871eddb2dab40eca3e9c34957e6f8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_c648dfc4012e8b75cec71bc91d3ca2abdffd2d9a2bcd0a45ccdf02bdc742446e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c648dfc4012e8b75cec71bc91d3ca2abdffd2d9a2bcd0a45ccdf02bdc742446e->enter($__internal_c648dfc4012e8b75cec71bc91d3ca2abdffd2d9a2bcd0a45ccdf02bdc742446e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c648dfc4012e8b75cec71bc91d3ca2abdffd2d9a2bcd0a45ccdf02bdc742446e->leave($__internal_c648dfc4012e8b75cec71bc91d3ca2abdffd2d9a2bcd0a45ccdf02bdc742446e_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddbf813dfe970dcdf11075a94622f55ba4d85a687705b69e6e1f9329c89ff95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbf813dfe970dcdf11075a94622f55ba4d85a687705b69e6e1f9329c89ff95b->enter($__internal_ddbf813dfe970dcdf11075a94622f55ba4d85a687705b69e6e1f9329c89ff95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ddbf813dfe970dcdf11075a94622f55ba4d85a687705b69e6e1f9329c89ff95b->leave($__internal_ddbf813dfe970dcdf11075a94622f55ba4d85a687705b69e6e1f9329c89ff95b_prof);

    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_965ea3f9e486757a36b2b72313fda88576483168d4bce029ad6869bbf5bfd645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965ea3f9e486757a36b2b72313fda88576483168d4bce029ad6869bbf5bfd645->enter($__internal_965ea3f9e486757a36b2b72313fda88576483168d4bce029ad6869bbf5bfd645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 13
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 13)->display($context);
        
        $__internal_965ea3f9e486757a36b2b72313fda88576483168d4bce029ad6869bbf5bfd645->leave($__internal_965ea3f9e486757a36b2b72313fda88576483168d4bce029ad6869bbf5bfd645_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
