<?php

/* default/index.html.twig */
class __TwigTemplate_4c4d03519bc749271c326570f255b9304101851b3d880824c4d571f58c06b76f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/layout.html.twig", "default/index.html.twig", 1);
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
        $__internal_d6c77ff9aff3f735ac0757cedab8fb4e7e69f0b9f2b37d74abf832944459818f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c77ff9aff3f735ac0757cedab8fb4e7e69f0b9f2b37d74abf832944459818f->enter($__internal_d6c77ff9aff3f735ac0757cedab8fb4e7e69f0b9f2b37d74abf832944459818f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6c77ff9aff3f735ac0757cedab8fb4e7e69f0b9f2b37d74abf832944459818f->leave($__internal_d6c77ff9aff3f735ac0757cedab8fb4e7e69f0b9f2b37d74abf832944459818f_prof);

    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        $__internal_fc278c7940f2dc7878eb63952fbfefebd07742bcc00dd46be0c6c2f934370cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc278c7940f2dc7878eb63952fbfefebd07742bcc00dd46be0c6c2f934370cf8->enter($__internal_fc278c7940f2dc7878eb63952fbfefebd07742bcc00dd46be0c6c2f934370cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste Produits
                <small>(";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))), "html", null, true);
        echo ")</small>
            </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">

            <table class=\"table table-hover \">
                <thead>
                <tr>
                    <th>Libellé</th>
                    <th>Ref</th>
                    <th>Prix d'achat</th>
                    <th>Prix de vente</th>
                    <th>TVA</th>
                    <th class=\"text-center\">Action</th>
                </tr>
                </thead>
                <tbody>


                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 30
            echo "                    <tr>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "ref", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "purchasePrice", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "salePrice", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "tva", array()), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-primary\"><i
                                        class=\"glyphicon glyphicon-edit\"></i> Edit</a>
                            ";
            // line 39
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) && ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MAGASINIER")))) {
                // line 40
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_remove", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-danger\"><i
                                            class=\"glyphicon glyphicon-trash\"></i> Supp</a>
                            ";
            }
            // line 43
            echo "                        </td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </tbody>
            </table>
        </div>
    </div>



";
        
        $__internal_fc278c7940f2dc7878eb63952fbfefebd07742bcc00dd46be0c6c2f934370cf8->leave($__internal_fc278c7940f2dc7878eb63952fbfefebd07742bcc00dd46be0c6c2f934370cf8_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 47,  112 => 43,  105 => 40,  103 => 39,  98 => 37,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  77 => 31,  74 => 30,  70 => 29,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/layout.html.twig' %}

{% block block %}

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">Liste Produits
                <small>({{ products| length }})</small>
            </h1>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">

            <table class=\"table table-hover \">
                <thead>
                <tr>
                    <th>Libellé</th>
                    <th>Ref</th>
                    <th>Prix d'achat</th>
                    <th>Prix de vente</th>
                    <th>TVA</th>
                    <th class=\"text-center\">Action</th>
                </tr>
                </thead>
                <tbody>


                {% for product in products %}
                    <tr>
                        <td>{{ product.name }}</td>
                        <td>{{ product.ref }}</td>
                        <td>{{ product.purchasePrice }}</td>
                        <td>{{ product.salePrice }}</td>
                        <td>{{ product.tva }}</td>
                        <td class=\"text-center\">
                            <a href=\"{{ path('product_edit',{'id': product.id }) }}\" class=\"btn btn-xs btn-primary\"><i
                                        class=\"glyphicon glyphicon-edit\"></i> Edit</a>
                            {% if app.user is defined and (is_granted('ROLE_ADMIN') or  is_granted('ROLE_MAGASINIER')) %}
                                <a href=\"{{ path('product_remove',{'id':product.id }) }}\" class=\"btn btn-xs btn-danger\"><i
                                            class=\"glyphicon glyphicon-trash\"></i> Supp</a>
                            {% endif %}
                        </td>
                    </tr>

                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>



{% endblock %}


", "default/index.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\views\\default\\index.html.twig");
    }
}
