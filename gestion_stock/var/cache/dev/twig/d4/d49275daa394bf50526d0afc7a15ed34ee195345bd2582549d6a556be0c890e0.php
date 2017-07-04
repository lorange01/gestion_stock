<?php

/* :default/stock:form.html.twig */
class __TwigTemplate_30c526eace7d887054dffd9ddedeb888430c46e12ecb2a8dae8c03327c44f82b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/layout.html.twig", ":default/stock:form.html.twig", 1);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f7a3348674912cea28871564d68c63e0079b2202cef6f991ef7dd2ee7866c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7a3348674912cea28871564d68c63e0079b2202cef6f991ef7dd2ee7866c28->enter($__internal_5f7a3348674912cea28871564d68c63e0079b2202cef6f991ef7dd2ee7866c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default/stock:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f7a3348674912cea28871564d68c63e0079b2202cef6f991ef7dd2ee7866c28->leave($__internal_5f7a3348674912cea28871564d68c63e0079b2202cef6f991ef7dd2ee7866c28_prof);

    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        $__internal_c864c354d0201bae6bfef61f6acd72441552e8766c5ba4e207b31c76b40eff49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c864c354d0201bae6bfef61f6acd72441552e8766c5ba4e207b31c76b40eff49->enter($__internal_c864c354d0201bae6bfef61f6acd72441552e8766c5ba4e207b31c76b40eff49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Ajout produit
            </h1>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => " horizontal-form", "id" => "form_validation", "autocomplete" => "off")));
        echo "
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "

                </div>
                <div class=\"col-sm-12\">
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "product", array()), 'row');
        echo "
                </div>
                
            </div>

            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <hr>
                </div>
                <div class=\"col-sm-6\">
                    <button type=\"submit\" class=\"btn btn-success btn-sm btn-block\"><span
                                class=\"glyphicon glyphicon-save\"></span>
                        Enregistrer
                    </button>
                </div>
            </div>


            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
    </div>


";
        
        $__internal_c864c354d0201bae6bfef61f6acd72441552e8766c5ba4e207b31c76b40eff49->leave($__internal_c864c354d0201bae6bfef61f6acd72441552e8766c5ba4e207b31c76b40eff49_prof);

    }

    public function getTemplateName()
    {
        return ":default/stock:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 39,  65 => 21,  58 => 17,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/layout.html.twig' %}{% block block %}    <div class=\"row\">        <div class=\"col-lg-12\">            <h1 class=\"page-header\">Ajout produit            </h1>        </div>    </div>    <div class=\"row\">        <div class=\"col-lg-6\">            {{ form_start(form, {'attr': {'class':' horizontal-form', 'id': 'form_validation','autocomplete':'off'}}) }}            <div class=\"row\">                <div class=\"col-sm-12\">                    {{ form_row(form.title) }}                </div>                <div class=\"col-sm-12\">                    {{ form_row(form.product) }}                </div>                            </div>            <div class=\"row\">                <div class=\"col-sm-12\">                    <hr>                </div>                <div class=\"col-sm-6\">                    <button type=\"submit\" class=\"btn btn-success btn-sm btn-block\"><span                                class=\"glyphicon glyphicon-save\"></span>                        Enregistrer                    </button>                </div>            </div>            {{ form_end(form) }}        </div>    </div>{% endblock %}", ":default/stock:form.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources\\views/default/stock/form.html.twig");
    }
}
