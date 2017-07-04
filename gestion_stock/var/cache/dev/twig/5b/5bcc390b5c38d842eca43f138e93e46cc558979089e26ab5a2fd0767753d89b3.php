<?php

/* default/stock/list.html.twig */
class __TwigTemplate_4b61284c71e1619abdaf2c6bd9f4f1261102bdeb6b29c35d3632c555fdec3ea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/layout.html.twig", "default/stock/list.html.twig", 1);
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
        $__internal_b25817c93819c8a055725fb03ddf9fd0a241cec3d59ba400b28133fae1091d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25817c93819c8a055725fb03ddf9fd0a241cec3d59ba400b28133fae1091d56->enter($__internal_b25817c93819c8a055725fb03ddf9fd0a241cec3d59ba400b28133fae1091d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/stock/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b25817c93819c8a055725fb03ddf9fd0a241cec3d59ba400b28133fae1091d56->leave($__internal_b25817c93819c8a055725fb03ddf9fd0a241cec3d59ba400b28133fae1091d56_prof);

    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        $__internal_fd7ba6a4fe96e491a721ee1e8a04e5b8e2abfd3eb7cb97df1da1474c5fa20f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7ba6a4fe96e491a721ee1e8a04e5b8e2abfd3eb7cb97df1da1474c5fa20f4d->enter($__internal_fd7ba6a4fe96e491a721ee1e8a04e5b8e2abfd3eb7cb97df1da1474c5fa20f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste des Stocks
                <small>(";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["stocks"]) ? $context["stocks"] : $this->getContext($context, "stocks"))), "html", null, true);
        echo ")</small>
            </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">

            <table class=\"table table-hover \">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>NB Produits</th>
                    <th class=\"text-center\">Actions</th>
                </tr>
                </thead>
                <tbody>


                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) ? $context["stocks"] : $this->getContext($context, "stocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 27
            echo "                    <tr>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "title", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["stock"], "product", array())), "html", null, true);
            echo "</td>

                        <td class=\"text-center\">
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_edit", array("id" => $this->getAttribute($context["stock"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-primary\"><i
                                        class=\"glyphicon glyphicon-edit\"></i> Edit</a>

                            ";
            // line 35
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) && ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MAGASINIER")))) {
                // line 36
                echo "
                                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_remove", array("id" => $this->getAttribute($context["stock"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-danger\"><i
                                            class=\"glyphicon glyphicon-trash\"></i> Supp</a>
                            ";
            }
            // line 40
            echo "                        </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </tbody>
            </table>
        </div>
    </div>



";
        
        $__internal_fd7ba6a4fe96e491a721ee1e8a04e5b8e2abfd3eb7cb97df1da1474c5fa20f4d->leave($__internal_fd7ba6a4fe96e491a721ee1e8a04e5b8e2abfd3eb7cb97df1da1474c5fa20f4d_prof);

    }

    public function getTemplateName()
    {
        return "default/stock/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 44,  101 => 40,  95 => 37,  92 => 36,  90 => 35,  84 => 32,  78 => 29,  74 => 28,  71 => 27,  67 => 26,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/layout.html.twig' %}{% block block %}    <div class=\"row\">        <div class=\"col-lg-12\">            <h1 class=\"page-header\">Liste des Stocks                <small>({{ stocks| length }})</small>            </h1>        </div>    </div>    <div class=\"row\">        <div class=\"col-lg-12\">            <table class=\"table table-hover \">                <thead>                <tr>                    <th>Name</th>                    <th>NB Produits</th>                    <th class=\"text-center\">Actions</th>                </tr>                </thead>                <tbody>                {% for stock in stocks %}                    <tr>                        <td>{{ stock.title }}</td>                        <td>{{ stock.product | length }}</td>                        <td class=\"text-center\">                            <a href=\"{{ path('stock_edit',{'id': stock.id }) }}\" class=\"btn btn-xs btn-primary\"><i                                        class=\"glyphicon glyphicon-edit\"></i> Edit</a>                            {% if app.user is defined and (is_granted('ROLE_ADMIN') or  is_granted('ROLE_MAGASINIER')) %}                                <a href=\"{{ path('stock_remove',{'id':stock.id }) }}\" class=\"btn btn-xs btn-danger\"><i                                            class=\"glyphicon glyphicon-trash\"></i> Supp</a>                            {% endif %}                        </td>                    </tr>                {% endfor %}                </tbody>            </table>        </div>    </div>{% endblock %}", "default/stock/list.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\views\\default\\stock\\list.html.twig");
    }
}
