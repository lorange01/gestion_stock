<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_7bd72082fa19caf4f5885c8f42e6615f7665abcc32caa8f0770e06b55c118351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_bece1d5b5c08cb6aa2dacb350b5f28ab5002a85cd15c1505907c53f64323f91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bece1d5b5c08cb6aa2dacb350b5f28ab5002a85cd15c1505907c53f64323f91f->enter($__internal_bece1d5b5c08cb6aa2dacb350b5f28ab5002a85cd15c1505907c53f64323f91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bece1d5b5c08cb6aa2dacb350b5f28ab5002a85cd15c1505907c53f64323f91f->leave($__internal_bece1d5b5c08cb6aa2dacb350b5f28ab5002a85cd15c1505907c53f64323f91f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f261d6d59141348e6c04788ed2775d8d17189d287a72a8818c4a7020d113b33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f261d6d59141348e6c04788ed2775d8d17189d287a72a8818c4a7020d113b33c->enter($__internal_f261d6d59141348e6c04788ed2775d8d17189d287a72a8818c4a7020d113b33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_f261d6d59141348e6c04788ed2775d8d17189d287a72a8818c4a7020d113b33c->leave($__internal_f261d6d59141348e6c04788ed2775d8d17189d287a72a8818c4a7020d113b33c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
