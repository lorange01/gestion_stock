<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f034f494edb34f5656b89eff996fe1e9b92102812a65d5b0523cb2cd036bbc0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_0472fa3b80fb4ceff721f4eea6d36943fb64d8ba364eedced1846f21b6f61340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0472fa3b80fb4ceff721f4eea6d36943fb64d8ba364eedced1846f21b6f61340->enter($__internal_0472fa3b80fb4ceff721f4eea6d36943fb64d8ba364eedced1846f21b6f61340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0472fa3b80fb4ceff721f4eea6d36943fb64d8ba364eedced1846f21b6f61340->leave($__internal_0472fa3b80fb4ceff721f4eea6d36943fb64d8ba364eedced1846f21b6f61340_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e305f544d2629f0fbe106b3a693ae4b8578865e1ed3de9dfab83d49164c1e915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e305f544d2629f0fbe106b3a693ae4b8578865e1ed3de9dfab83d49164c1e915->enter($__internal_e305f544d2629f0fbe106b3a693ae4b8578865e1ed3de9dfab83d49164c1e915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e305f544d2629f0fbe106b3a693ae4b8578865e1ed3de9dfab83d49164c1e915->leave($__internal_e305f544d2629f0fbe106b3a693ae4b8578865e1ed3de9dfab83d49164c1e915_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f85bb570ba993e73e26feba76c1b9885bbc06c924b9d67a2c6cfa999971a9d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85bb570ba993e73e26feba76c1b9885bbc06c924b9d67a2c6cfa999971a9d17->enter($__internal_f85bb570ba993e73e26feba76c1b9885bbc06c924b9d67a2c6cfa999971a9d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f85bb570ba993e73e26feba76c1b9885bbc06c924b9d67a2c6cfa999971a9d17->leave($__internal_f85bb570ba993e73e26feba76c1b9885bbc06c924b9d67a2c6cfa999971a9d17_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2db8c5527aa6b7e1f37abe7fa7785f4100d1f9b46fbbf32d723b0ebf35f8b797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db8c5527aa6b7e1f37abe7fa7785f4100d1f9b46fbbf32d723b0ebf35f8b797->enter($__internal_2db8c5527aa6b7e1f37abe7fa7785f4100d1f9b46fbbf32d723b0ebf35f8b797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2db8c5527aa6b7e1f37abe7fa7785f4100d1f9b46fbbf32d723b0ebf35f8b797->leave($__internal_2db8c5527aa6b7e1f37abe7fa7785f4100d1f9b46fbbf32d723b0ebf35f8b797_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
