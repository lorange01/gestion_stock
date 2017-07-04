<?php

/* ::base.html.twig */
class __TwigTemplate_2d489a276d5f7df9434eec3ba3924fb79625cf18a14865371ff3211bb893efbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb01375a5e2c372f73f97b4d3c514b4a61356911185bc972160ce7d4eed0d4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb01375a5e2c372f73f97b4d3c514b4a61356911185bc972160ce7d4eed0d4bd->enter($__internal_bb01375a5e2c372f73f97b4d3c514b4a61356911185bc972160ce7d4eed0d4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "</body>
</html>
";
        
        $__internal_bb01375a5e2c372f73f97b4d3c514b4a61356911185bc972160ce7d4eed0d4bd->leave($__internal_bb01375a5e2c372f73f97b4d3c514b4a61356911185bc972160ce7d4eed0d4bd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_234e0da873b2fbc5e0f4f9cd2c4d8c2beb6eb0a40367f3d1f39a6a950bea4e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234e0da873b2fbc5e0f4f9cd2c4d8c2beb6eb0a40367f3d1f39a6a950bea4e4b->enter($__internal_234e0da873b2fbc5e0f4f9cd2c4d8c2beb6eb0a40367f3d1f39a6a950bea4e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Backoffice!";
        
        $__internal_234e0da873b2fbc5e0f4f9cd2c4d8c2beb6eb0a40367f3d1f39a6a950bea4e4b->leave($__internal_234e0da873b2fbc5e0f4f9cd2c4d8c2beb6eb0a40367f3d1f39a6a950bea4e4b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96b8542246cda9a4f2c0686ce3cf2bd2e2b003ff87a1fd23324c7fc1469a13fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b8542246cda9a4f2c0686ce3cf2bd2e2b003ff87a1fd23324c7fc1469a13fd->enter($__internal_96b8542246cda9a4f2c0686ce3cf2bd2e2b003ff87a1fd23324c7fc1469a13fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        ";
        // line 8
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bb76aaa_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bb76aaa_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/bb76aaa_font-awesome.min_1.css");
            // line 13
            echo "        ";
            // line 14
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "bb76aaa_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bb76aaa_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/bb76aaa_bootstrap.min_2.css");
            // line 13
            echo "        ";
            // line 14
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "bb76aaa_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bb76aaa_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/bb76aaa_sb-admin-2_3.css");
            // line 13
            echo "        ";
            // line 14
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "bb76aaa"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_bb76aaa") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/bb76aaa.css");
            // line 13
            echo "        ";
            // line 14
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "        <style>
           
            .body{
                margin-top: 70px;
            }

            footer {
                margin: 50px 0;
            }
            .page-header{
                 margin: 20px 0 20px !important;
            }
        </style>

    ";
        
        $__internal_96b8542246cda9a4f2c0686ce3cf2bd2e2b003ff87a1fd23324c7fc1469a13fd->leave($__internal_96b8542246cda9a4f2c0686ce3cf2bd2e2b003ff87a1fd23324c7fc1469a13fd_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e7ff00219e12dc3007bbb5b18cb04bb698d636b62e191de7f0cfb9e35fb7286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7ff00219e12dc3007bbb5b18cb04bb698d636b62e191de7f0cfb9e35fb7286->enter($__internal_1e7ff00219e12dc3007bbb5b18cb04bb698d636b62e191de7f0cfb9e35fb7286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e7ff00219e12dc3007bbb5b18cb04bb698d636b62e191de7f0cfb9e35fb7286->leave($__internal_1e7ff00219e12dc3007bbb5b18cb04bb698d636b62e191de7f0cfb9e35fb7286_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0af094ca7493908091c758a9435451d740c91622042f62f7f28d9b1e39d03da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af094ca7493908091c758a9435451d740c91622042f62f7f28d9b1e39d03da4->enter($__internal_0af094ca7493908091c758a9435451d740c91622042f62f7f28d9b1e39d03da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7e6699f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7e6699f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7e6699f_jquery-3.2.0.min_1.js");
            // line 39
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
            // asset "7e6699f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7e6699f_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7e6699f_bootstrap.min_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        } else {
            // asset "7e6699f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7e6699f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/7e6699f.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 41
        echo "
";
        
        $__internal_0af094ca7493908091c758a9435451d740c91622042f62f7f28d9b1e39d03da4->leave($__internal_0af094ca7493908091c758a9435451d740c91622042f62f7f28d9b1e39d03da4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 41,  163 => 39,  158 => 36,  152 => 35,  141 => 34,  120 => 16,  113 => 14,  111 => 13,  103 => 14,  101 => 13,  94 => 14,  92 => 13,  85 => 14,  83 => 13,  78 => 8,  76 => 7,  70 => 6,  58 => 5,  49 => 42,  47 => 35,  45 => 34,  38 => 31,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Backoffice!{% endblock %}</title>
    {% block stylesheets %}
        {#<!-- BEGIN GLOBAL MANDATORY STYLES -->#}
        {% stylesheets
        'assets/font-awesome-4.7.0/css/font-awesome.min.css'
        'assets/bootstrap-3.3.7-dist/css/bootstrap.min.css'
        'assets/dist/css/sb-admin-2.css'
        filter='cssrewrite' %}
        {#<!-- END GLOBAL MANDATORY STYLES -->#}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\"/>
        {% endstylesheets %}
        <style>
           
            .body{
                margin-top: 70px;
            }

            footer {
                margin: 50px 0;
            }
            .page-header{
                 margin: 20px 0 20px !important;
            }
        </style>

    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}
    {% javascripts
    \"assets/jquery/jquery-3.2.0.min.js\"
    \"assets/bootstrap-3.3.7-dist/js/bootstrap.min.js\" %}
    <script src=\"{{ asset_url }}\" type=\"text/javascript\"></script>
    {% endjavascripts %}

{% endblock %}</body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources\\views/base.html.twig");
    }
}
