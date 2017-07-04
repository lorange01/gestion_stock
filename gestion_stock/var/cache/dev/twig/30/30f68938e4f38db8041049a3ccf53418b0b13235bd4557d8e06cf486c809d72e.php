<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6436c0a29b011d7d6d36e9b229e2db63ce7957a3487f4ab54dd335378518db36 extends Twig_Template
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
        $__internal_5b1fe718a1a2c089be806b31f56fc65051ddc70b7a7dfdb666bec959f61499aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1fe718a1a2c089be806b31f56fc65051ddc70b7a7dfdb666bec959f61499aa->enter($__internal_5b1fe718a1a2c089be806b31f56fc65051ddc70b7a7dfdb666bec959f61499aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5b1fe718a1a2c089be806b31f56fc65051ddc70b7a7dfdb666bec959f61499aa->leave($__internal_5b1fe718a1a2c089be806b31f56fc65051ddc70b7a7dfdb666bec959f61499aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
