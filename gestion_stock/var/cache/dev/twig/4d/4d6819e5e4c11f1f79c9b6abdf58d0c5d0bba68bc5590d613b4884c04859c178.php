<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_90c13b06d3e86a94ffe9a51a6b036fda44bac1d91cc73a7a36eac08dfab010fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1498c8d7e36866177802b76c06d7f851a328cf476a0503da8b85a9a260c276e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1498c8d7e36866177802b76c06d7f851a328cf476a0503da8b85a9a260c276e2->enter($__internal_1498c8d7e36866177802b76c06d7f851a328cf476a0503da8b85a9a260c276e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1498c8d7e36866177802b76c06d7f851a328cf476a0503da8b85a9a260c276e2->leave($__internal_1498c8d7e36866177802b76c06d7f851a328cf476a0503da8b85a9a260c276e2_prof);

    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        $__internal_8cd8e127592dadd456d47656eabf01ace86fdd9f75ca841beca7b806ecc9258f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd8e127592dadd456d47656eabf01ace86fdd9f75ca841beca7b806ecc9258f->enter($__internal_8cd8e127592dadd456d47656eabf01ace86fdd9f75ca841beca7b806ecc9258f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 4
        echo "
        ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 7
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 8
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        ";
        }
        // line 14
        echo "
        <div>
            ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "        </div>

";
        
        $__internal_8cd8e127592dadd456d47656eabf01ace86fdd9f75ca841beca7b806ecc9258f->leave($__internal_8cd8e127592dadd456d47656eabf01ace86fdd9f75ca841beca7b806ecc9258f_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59817d6331fa7875e970a7ee11ff0da899b028a38a0854f814dfcbfca80f0a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59817d6331fa7875e970a7ee11ff0da899b028a38a0854f814dfcbfca80f0a86->enter($__internal_59817d6331fa7875e970a7ee11ff0da899b028a38a0854f814dfcbfca80f0a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "            ";
        
        $__internal_59817d6331fa7875e970a7ee11ff0da899b028a38a0854f814dfcbfca80f0a86->leave($__internal_59817d6331fa7875e970a7ee11ff0da899b028a38a0854f814dfcbfca80f0a86_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 17,  94 => 16,  85 => 18,  83 => 16,  79 => 14,  76 => 13,  70 => 12,  61 => 9,  56 => 8,  51 => 7,  46 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>

{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
