<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_7b493b01581bd871a62686ed0d0beb6cd5e259a2607fbe1d9d46229cb37b71ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_5e37e26b3a61bff3c68f446ca14caad23b517ad54bf4d43f5c4d5d4a8407ed04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e37e26b3a61bff3c68f446ca14caad23b517ad54bf4d43f5c4d5d4a8407ed04->enter($__internal_5e37e26b3a61bff3c68f446ca14caad23b517ad54bf4d43f5c4d5d4a8407ed04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e37e26b3a61bff3c68f446ca14caad23b517ad54bf4d43f5c4d5d4a8407ed04->leave($__internal_5e37e26b3a61bff3c68f446ca14caad23b517ad54bf4d43f5c4d5d4a8407ed04_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b0367c74e60c7732d153c487179d55f029d93c7a7236df6c1deb06712681e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0367c74e60c7732d153c487179d55f029d93c7a7236df6c1deb06712681e95->enter($__internal_4b0367c74e60c7732d153c487179d55f029d93c7a7236df6c1deb06712681e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_4b0367c74e60c7732d153c487179d55f029d93c7a7236df6c1deb06712681e95->leave($__internal_4b0367c74e60c7732d153c487179d55f029d93c7a7236df6c1deb06712681e95_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
