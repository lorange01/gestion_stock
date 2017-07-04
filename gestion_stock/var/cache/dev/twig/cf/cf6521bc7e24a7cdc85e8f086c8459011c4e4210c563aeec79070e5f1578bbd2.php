<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_6d3686196c11d9ebd931a1cec25df59f1f9b1de4cefb68fea7ba5bb2a2aecedc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8ab46740ca50d4a914bff7ac5361f8e4ed3ac65b7d76c233a95125f2dd9b1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ab46740ca50d4a914bff7ac5361f8e4ed3ac65b7d76c233a95125f2dd9b1bb->enter($__internal_c8ab46740ca50d4a914bff7ac5361f8e4ed3ac65b7d76c233a95125f2dd9b1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8ab46740ca50d4a914bff7ac5361f8e4ed3ac65b7d76c233a95125f2dd9b1bb->leave($__internal_c8ab46740ca50d4a914bff7ac5361f8e4ed3ac65b7d76c233a95125f2dd9b1bb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_006c4db7fda4a737dda1aec976ffd2a39be2e1c1e33e9c173be5808c6e62fe83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006c4db7fda4a737dda1aec976ffd2a39be2e1c1e33e9c173be5808c6e62fe83->enter($__internal_006c4db7fda4a737dda1aec976ffd2a39be2e1c1e33e9c173be5808c6e62fe83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_006c4db7fda4a737dda1aec976ffd2a39be2e1c1e33e9c173be5808c6e62fe83->leave($__internal_006c4db7fda4a737dda1aec976ffd2a39be2e1c1e33e9c173be5808c6e62fe83_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
