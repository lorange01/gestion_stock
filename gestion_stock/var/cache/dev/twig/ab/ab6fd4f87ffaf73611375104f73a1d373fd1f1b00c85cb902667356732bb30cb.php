<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_7e6cc90fac7ea4b05cb48b94acd8409ae59dbd1b62279d46ee1877c3704a383f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/layout.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_c1c1e0a0c80d74fb80fa2953da299caa87509c3f66157d12ac2dbe8a4ef2af09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c1e0a0c80d74fb80fa2953da299caa87509c3f66157d12ac2dbe8a4ef2af09->enter($__internal_c1c1e0a0c80d74fb80fa2953da299caa87509c3f66157d12ac2dbe8a4ef2af09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1c1e0a0c80d74fb80fa2953da299caa87509c3f66157d12ac2dbe8a4ef2af09->leave($__internal_c1c1e0a0c80d74fb80fa2953da299caa87509c3f66157d12ac2dbe8a4ef2af09_prof);

    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        $__internal_123d8a02600bbbddedcfcc5c07025db6df618f8dcac46a19fbdb6def797d2191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123d8a02600bbbddedcfcc5c07025db6df618f8dcac46a19fbdb6def797d2191->enter($__internal_123d8a02600bbbddedcfcc5c07025db6df618f8dcac46a19fbdb6def797d2191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_123d8a02600bbbddedcfcc5c07025db6df618f8dcac46a19fbdb6def797d2191->leave($__internal_123d8a02600bbbddedcfcc5c07025db6df618f8dcac46a19fbdb6def797d2191_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e5b558a77b952fa688a9fd0f1c5c0def64ba4e68046cdcd09b09c47ee0f9f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5b558a77b952fa688a9fd0f1c5c0def64ba4e68046cdcd09b09c47ee0f9f07->enter($__internal_5e5b558a77b952fa688a9fd0f1c5c0def64ba4e68046cdcd09b09c47ee0f9f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "            ";
        
        $__internal_5e5b558a77b952fa688a9fd0f1c5c0def64ba4e68046cdcd09b09c47ee0f9f07->leave($__internal_5e5b558a77b952fa688a9fd0f1c5c0def64ba4e68046cdcd09b09c47ee0f9f07_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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

{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
