<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_61e5654d36f6c23f55591823062c88982323c2eb04cb765f3ff048627b96a24f extends Twig_Template
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
        $__internal_024f006c1ae8b3e4b271fd6385712df587a3089cd1d2e0c7e496410cdcf7ca82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024f006c1ae8b3e4b271fd6385712df587a3089cd1d2e0c7e496410cdcf7ca82->enter($__internal_024f006c1ae8b3e4b271fd6385712df587a3089cd1d2e0c7e496410cdcf7ca82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_024f006c1ae8b3e4b271fd6385712df587a3089cd1d2e0c7e496410cdcf7ca82->leave($__internal_024f006c1ae8b3e4b271fd6385712df587a3089cd1d2e0c7e496410cdcf7ca82_prof);

    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        $__internal_3a2add547f0a7bc6c55456ac774715e2e8fc822fc539ae8ce41648f8b9cb90a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2add547f0a7bc6c55456ac774715e2e8fc822fc539ae8ce41648f8b9cb90a9->enter($__internal_3a2add547f0a7bc6c55456ac774715e2e8fc822fc539ae8ce41648f8b9cb90a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_3a2add547f0a7bc6c55456ac774715e2e8fc822fc539ae8ce41648f8b9cb90a9->leave($__internal_3a2add547f0a7bc6c55456ac774715e2e8fc822fc539ae8ce41648f8b9cb90a9_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22732bc38bb8e71a2b9f9b9894318484c0255ce53d39d1a329dcd921ba1b6bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22732bc38bb8e71a2b9f9b9894318484c0255ce53d39d1a329dcd921ba1b6bef->enter($__internal_22732bc38bb8e71a2b9f9b9894318484c0255ce53d39d1a329dcd921ba1b6bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "            ";
        
        $__internal_22732bc38bb8e71a2b9f9b9894318484c0255ce53d39d1a329dcd921ba1b6bef->leave($__internal_22732bc38bb8e71a2b9f9b9894318484c0255ce53d39d1a329dcd921ba1b6bef_prof);

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
