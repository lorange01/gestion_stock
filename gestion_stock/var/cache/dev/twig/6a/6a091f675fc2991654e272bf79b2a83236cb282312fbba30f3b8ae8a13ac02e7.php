<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9ba710d29f8c0ae3f84ac66aa369f1fae579ad87db277028cb3c85891d582747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2acb9fa65faf86dfd8c8caea023f156aea63432b3924faa90974c64f7f79b614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acb9fa65faf86dfd8c8caea023f156aea63432b3924faa90974c64f7f79b614->enter($__internal_2acb9fa65faf86dfd8c8caea023f156aea63432b3924faa90974c64f7f79b614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2acb9fa65faf86dfd8c8caea023f156aea63432b3924faa90974c64f7f79b614->leave($__internal_2acb9fa65faf86dfd8c8caea023f156aea63432b3924faa90974c64f7f79b614_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}