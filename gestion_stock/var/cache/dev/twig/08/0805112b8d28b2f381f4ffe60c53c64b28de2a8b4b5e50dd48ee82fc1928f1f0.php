<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_08afac133de60b15783ad1d0c35e101e4c802e42d20f193d8ef6a6f5d5df288b extends Twig_Template
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
        $__internal_206a7fb08bfd15bb31eedf3496643afa37670c203f5012dac44ec2dc5ee75d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206a7fb08bfd15bb31eedf3496643afa37670c203f5012dac44ec2dc5ee75d56->enter($__internal_206a7fb08bfd15bb31eedf3496643afa37670c203f5012dac44ec2dc5ee75d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_206a7fb08bfd15bb31eedf3496643afa37670c203f5012dac44ec2dc5ee75d56->leave($__internal_206a7fb08bfd15bb31eedf3496643afa37670c203f5012dac44ec2dc5ee75d56_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
