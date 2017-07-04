<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_20ebe152a1de71139a100dc5cad2fff5bf0526d70db86c57e5a2fdaebff6c5c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a79ad8a370a8c8ecbe6e321a1da682e1867778107b74e10297dd974aadc4c8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79ad8a370a8c8ecbe6e321a1da682e1867778107b74e10297dd974aadc4c8a2->enter($__internal_a79ad8a370a8c8ecbe6e321a1da682e1867778107b74e10297dd974aadc4c8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a79ad8a370a8c8ecbe6e321a1da682e1867778107b74e10297dd974aadc4c8a2->leave($__internal_a79ad8a370a8c8ecbe6e321a1da682e1867778107b74e10297dd974aadc4c8a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0870e580443bbc8fd8f87a3b01b5fc270eec840a8ff4784c3602fb0411d20e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0870e580443bbc8fd8f87a3b01b5fc270eec840a8ff4784c3602fb0411d20e50->enter($__internal_0870e580443bbc8fd8f87a3b01b5fc270eec840a8ff4784c3602fb0411d20e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0870e580443bbc8fd8f87a3b01b5fc270eec840a8ff4784c3602fb0411d20e50->leave($__internal_0870e580443bbc8fd8f87a3b01b5fc270eec840a8ff4784c3602fb0411d20e50_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da2ec0133e58ae45ed4512d4aae474bc8214110f40cefa8c995f3eed042094c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2ec0133e58ae45ed4512d4aae474bc8214110f40cefa8c995f3eed042094c3->enter($__internal_da2ec0133e58ae45ed4512d4aae474bc8214110f40cefa8c995f3eed042094c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_da2ec0133e58ae45ed4512d4aae474bc8214110f40cefa8c995f3eed042094c3->leave($__internal_da2ec0133e58ae45ed4512d4aae474bc8214110f40cefa8c995f3eed042094c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
