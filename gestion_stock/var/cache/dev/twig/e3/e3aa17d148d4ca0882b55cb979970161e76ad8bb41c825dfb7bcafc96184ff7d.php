<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f85f4bb2e44cfcf3902d9b39f858ca037933431c90a65df5d76e15e34c9d4f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_3dd516819b8372bf4c5016a89b189907b6ff0170528eeeec6ee50b97f6be625b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd516819b8372bf4c5016a89b189907b6ff0170528eeeec6ee50b97f6be625b->enter($__internal_3dd516819b8372bf4c5016a89b189907b6ff0170528eeeec6ee50b97f6be625b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd516819b8372bf4c5016a89b189907b6ff0170528eeeec6ee50b97f6be625b->leave($__internal_3dd516819b8372bf4c5016a89b189907b6ff0170528eeeec6ee50b97f6be625b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38e14c36b6466da744425c571af9c1b4fd1db931bc401c4ac050b245bef46059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e14c36b6466da744425c571af9c1b4fd1db931bc401c4ac050b245bef46059->enter($__internal_38e14c36b6466da744425c571af9c1b4fd1db931bc401c4ac050b245bef46059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_38e14c36b6466da744425c571af9c1b4fd1db931bc401c4ac050b245bef46059->leave($__internal_38e14c36b6466da744425c571af9c1b4fd1db931bc401c4ac050b245bef46059_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}