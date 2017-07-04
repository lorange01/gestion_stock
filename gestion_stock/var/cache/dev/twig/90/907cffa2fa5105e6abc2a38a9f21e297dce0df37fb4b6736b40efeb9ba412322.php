<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_b1d75580413415f15a50b2079d94f52f45820d4a09b75a679066527bfe093efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_8fb537cb0d8e1888a400655d7982bd22ba7d2106c1848345f6874bc7e206c83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb537cb0d8e1888a400655d7982bd22ba7d2106c1848345f6874bc7e206c83b->enter($__internal_8fb537cb0d8e1888a400655d7982bd22ba7d2106c1848345f6874bc7e206c83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fb537cb0d8e1888a400655d7982bd22ba7d2106c1848345f6874bc7e206c83b->leave($__internal_8fb537cb0d8e1888a400655d7982bd22ba7d2106c1848345f6874bc7e206c83b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_153a0a94319907a28262a6e55df11b021e06fea65b94dfa7cd703444862c7563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153a0a94319907a28262a6e55df11b021e06fea65b94dfa7cd703444862c7563->enter($__internal_153a0a94319907a28262a6e55df11b021e06fea65b94dfa7cd703444862c7563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_153a0a94319907a28262a6e55df11b021e06fea65b94dfa7cd703444862c7563->leave($__internal_153a0a94319907a28262a6e55df11b021e06fea65b94dfa7cd703444862c7563_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
