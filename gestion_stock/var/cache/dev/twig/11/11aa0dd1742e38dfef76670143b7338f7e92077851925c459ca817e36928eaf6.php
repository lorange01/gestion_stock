<?php

/* default/product/form.html.twig */
class __TwigTemplate_71283901e4ca1d7cc94af5e91186ab46e3b718b999f824729e46ad81c9f6a385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/layout.html.twig", "default/product/form.html.twig", 1);
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
        $__internal_73485580c9e1872d1e86bf8c870f4586b1bd701531553c7778ba4b0f857a6e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73485580c9e1872d1e86bf8c870f4586b1bd701531553c7778ba4b0f857a6e56->enter($__internal_73485580c9e1872d1e86bf8c870f4586b1bd701531553c7778ba4b0f857a6e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/product/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73485580c9e1872d1e86bf8c870f4586b1bd701531553c7778ba4b0f857a6e56->leave($__internal_73485580c9e1872d1e86bf8c870f4586b1bd701531553c7778ba4b0f857a6e56_prof);

    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        $__internal_7fb745e940495f9d0eff9a949fd84fd106c51aa4d3463b74887dd62e13f141d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb745e940495f9d0eff9a949fd84fd106c51aa4d3463b74887dd62e13f141d1->enter($__internal_7fb745e940495f9d0eff9a949fd84fd106c51aa4d3463b74887dd62e13f141d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "

                </div>
                <div class=\"col-sm-12\">
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ref", array()), 'row');
        echo "

                </div>
                <div class=\"col-sm-12\">
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "purchasePrice", array()), 'row');
        echo "

                </div>
                <div class=\"col-sm-12\">
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salePrice", array()), 'row');
        echo "

                </div>
                <div class=\"col-sm-12\">
                    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tva", array()), 'row');
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
        // line 51
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        </div>
    </div>


";
        
        $__internal_7fb745e940495f9d0eff9a949fd84fd106c51aa4d3463b74887dd62e13f141d1->leave($__internal_7fb745e940495f9d0eff9a949fd84fd106c51aa4d3463b74887dd62e13f141d1_prof);

    }

    public function getTemplateName()
    {
        return "default/product/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 51,  86 => 33,  79 => 29,  72 => 25,  65 => 21,  58 => 17,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/layout.html.twig' %}{% block block %}    <div class=\"row\">        <div class=\"col-lg-12\">            <h1 class=\"page-header\">Ajout produit            </h1>        </div>    </div>    <div class=\"row\">        <div class=\"col-lg-6\">            {{ form_start(form, {'attr': {'class':' horizontal-form', 'id': 'form_validation','autocomplete':'off'}}) }}            <div class=\"row\">                <div class=\"col-sm-12\">                    {{ form_row(form.name) }}                </div>                <div class=\"col-sm-12\">                    {{ form_row(form.ref) }}                </div>                <div class=\"col-sm-12\">                    {{ form_row(form.purchasePrice) }}                </div>                <div class=\"col-sm-12\">                    {{ form_row(form.salePrice) }}                </div>                <div class=\"col-sm-12\">                    {{ form_row(form.tva) }}                </div>            </div>            <div class=\"row\">                <div class=\"col-sm-12\">                    <hr>                </div>                <div class=\"col-sm-6\">                    <button type=\"submit\" class=\"btn btn-success btn-sm btn-block\"><span                                class=\"glyphicon glyphicon-save\"></span>                        Enregistrer                    </button>                </div>            </div>            {{ form_end(form) }}        </div>    </div>{% endblock %}", "default/product/form.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\views\\default\\product\\form.html.twig");
    }
}
