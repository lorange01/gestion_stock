<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dcd83b234c4192b87da7d2fd6861a7985c068449778d570d73401aa7eec105a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1bead46513b2586d8bc0cfb0c3d56177a1f178df9f0b42e94b806bd0733cbd43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bead46513b2586d8bc0cfb0c3d56177a1f178df9f0b42e94b806bd0733cbd43->enter($__internal_1bead46513b2586d8bc0cfb0c3d56177a1f178df9f0b42e94b806bd0733cbd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bead46513b2586d8bc0cfb0c3d56177a1f178df9f0b42e94b806bd0733cbd43->leave($__internal_1bead46513b2586d8bc0cfb0c3d56177a1f178df9f0b42e94b806bd0733cbd43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_71d4ff449d257fb6e737e66d302be856869fee731f3b1beca5a1717cff925315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d4ff449d257fb6e737e66d302be856869fee731f3b1beca5a1717cff925315->enter($__internal_71d4ff449d257fb6e737e66d302be856869fee731f3b1beca5a1717cff925315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_71d4ff449d257fb6e737e66d302be856869fee731f3b1beca5a1717cff925315->leave($__internal_71d4ff449d257fb6e737e66d302be856869fee731f3b1beca5a1717cff925315_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d0fa89072314ba76209d03aefcd3212efe11d3e2e2faceecdd85be12c4e636c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0fa89072314ba76209d03aefcd3212efe11d3e2e2faceecdd85be12c4e636c->enter($__internal_8d0fa89072314ba76209d03aefcd3212efe11d3e2e2faceecdd85be12c4e636c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8d0fa89072314ba76209d03aefcd3212efe11d3e2e2faceecdd85be12c4e636c->leave($__internal_8d0fa89072314ba76209d03aefcd3212efe11d3e2e2faceecdd85be12c4e636c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c0762eaa39cc12d1c84f8d9f7d869186e7734f062c8bf9cdaf3fc97a76b8c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0762eaa39cc12d1c84f8d9f7d869186e7734f062c8bf9cdaf3fc97a76b8c1c->enter($__internal_0c0762eaa39cc12d1c84f8d9f7d869186e7734f062c8bf9cdaf3fc97a76b8c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0c0762eaa39cc12d1c84f8d9f7d869186e7734f062c8bf9cdaf3fc97a76b8c1c->leave($__internal_0c0762eaa39cc12d1c84f8d9f7d869186e7734f062c8bf9cdaf3fc97a76b8c1c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
