<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_32027e1ba77412e21e8e1ba415590ece301ee673c9aa0259e3d0238a41c4b7b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_91f3895cad369e0bf41eb1f6c1a038b93edda012ac814758cc4b1e42ac0c2219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f3895cad369e0bf41eb1f6c1a038b93edda012ac814758cc4b1e42ac0c2219->enter($__internal_91f3895cad369e0bf41eb1f6c1a038b93edda012ac814758cc4b1e42ac0c2219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91f3895cad369e0bf41eb1f6c1a038b93edda012ac814758cc4b1e42ac0c2219->leave($__internal_91f3895cad369e0bf41eb1f6c1a038b93edda012ac814758cc4b1e42ac0c2219_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b3557e57ecdf1c7bc1763154ad741441d733aaadc968ed57219978346482ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3557e57ecdf1c7bc1763154ad741441d733aaadc968ed57219978346482ea1->enter($__internal_8b3557e57ecdf1c7bc1763154ad741441d733aaadc968ed57219978346482ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8b3557e57ecdf1c7bc1763154ad741441d733aaadc968ed57219978346482ea1->leave($__internal_8b3557e57ecdf1c7bc1763154ad741441d733aaadc968ed57219978346482ea1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_df9f1dde8983ad6eac3d47d2fff75a71c3dd2176840dc030812eb2e0136bca59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9f1dde8983ad6eac3d47d2fff75a71c3dd2176840dc030812eb2e0136bca59->enter($__internal_df9f1dde8983ad6eac3d47d2fff75a71c3dd2176840dc030812eb2e0136bca59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_df9f1dde8983ad6eac3d47d2fff75a71c3dd2176840dc030812eb2e0136bca59->leave($__internal_df9f1dde8983ad6eac3d47d2fff75a71c3dd2176840dc030812eb2e0136bca59_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
