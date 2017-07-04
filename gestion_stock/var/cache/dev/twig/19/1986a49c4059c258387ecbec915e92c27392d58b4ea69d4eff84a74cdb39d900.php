<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_9d3641fa9ad83c6202c4838abd46225823b264815beeba60a60506c51594656a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_719d5e38e6bad2e94101d34767e56848dda3adb573d0340bd06a6eb4675867dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719d5e38e6bad2e94101d34767e56848dda3adb573d0340bd06a6eb4675867dc->enter($__internal_719d5e38e6bad2e94101d34767e56848dda3adb573d0340bd06a6eb4675867dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_719d5e38e6bad2e94101d34767e56848dda3adb573d0340bd06a6eb4675867dc->leave($__internal_719d5e38e6bad2e94101d34767e56848dda3adb573d0340bd06a6eb4675867dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c61a95195b118e98a2b5ed23a225ee66f0f5c2b4bcc92aa9dc004acec60311aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61a95195b118e98a2b5ed23a225ee66f0f5c2b4bcc92aa9dc004acec60311aa->enter($__internal_c61a95195b118e98a2b5ed23a225ee66f0f5c2b4bcc92aa9dc004acec60311aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_c61a95195b118e98a2b5ed23a225ee66f0f5c2b4bcc92aa9dc004acec60311aa->leave($__internal_c61a95195b118e98a2b5ed23a225ee66f0f5c2b4bcc92aa9dc004acec60311aa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
