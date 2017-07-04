<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ea7d01f493bfada4c2ee80821fcb170c88fb69ba0c89fb6263357b9c381ef7c8 extends Twig_Template
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
        $__internal_d92378d01c47319ceb70a79a21938ad47bde4ffe56e8eb0642296a3e6b4bd42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92378d01c47319ceb70a79a21938ad47bde4ffe56e8eb0642296a3e6b4bd42b->enter($__internal_d92378d01c47319ceb70a79a21938ad47bde4ffe56e8eb0642296a3e6b4bd42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d92378d01c47319ceb70a79a21938ad47bde4ffe56e8eb0642296a3e6b4bd42b->leave($__internal_d92378d01c47319ceb70a79a21938ad47bde4ffe56e8eb0642296a3e6b4bd42b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
