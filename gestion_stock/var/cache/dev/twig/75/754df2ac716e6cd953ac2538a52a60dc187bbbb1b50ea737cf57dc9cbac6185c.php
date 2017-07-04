<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3b5e5b38a154e314d0b32a751fff6124e1c9a2349f125d0c64649cb761d06d12 extends Twig_Template
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
        $__internal_c7f4042ec7b16aa0ed928b7f4657879580c9d1bc06ba8a4aa9aa3b0f97d35629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f4042ec7b16aa0ed928b7f4657879580c9d1bc06ba8a4aa9aa3b0f97d35629->enter($__internal_c7f4042ec7b16aa0ed928b7f4657879580c9d1bc06ba8a4aa9aa3b0f97d35629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c7f4042ec7b16aa0ed928b7f4657879580c9d1bc06ba8a4aa9aa3b0f97d35629->leave($__internal_c7f4042ec7b16aa0ed928b7f4657879580c9d1bc06ba8a4aa9aa3b0f97d35629_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
