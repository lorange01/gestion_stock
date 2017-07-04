<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_a9c385e7539dc56664e9062ead451df861ddd1bffa2080c4e85af9d020a1c64b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_838794e7e63e7848fa8cbb57166a7bfa7055e959f17c5b0579bb44acfa62a7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838794e7e63e7848fa8cbb57166a7bfa7055e959f17c5b0579bb44acfa62a7e9->enter($__internal_838794e7e63e7848fa8cbb57166a7bfa7055e959f17c5b0579bb44acfa62a7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "

<div class=\"row\" style=\"margin-top: 60px;\">
    <div class=\"col-sm-offset-4 col-lg-3\">";
        // line 6
        echo "        <h2 class=\"text-success text-center text-uppercase\">Backoffice</h2>

        ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "            <div class=\"alert alert-danger\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span> ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 14
        echo "
        <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 16
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 17
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
            ";
        }
        // line 19
        echo "            <div class=\"form-group\">
                <label for=\"username\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                       required=\"required\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"password\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/>
            </div>
            <div class=\"form-check\">
                <label for=\"remember_me\" class=\"form-check-label\"><input type=\"checkbox\" id=\"remember_me\"
                                                                         name=\"_remember_me\" value=\"on\"/>
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-block btn-sm btn-success\"
                                id=\"_submit\" name=\"_submit\"> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </form>
        <div class=\"bordure\"></div>
    </div>
</div>";
        
        $__internal_838794e7e63e7848fa8cbb57166a7bfa7055e959f17c5b0579bb44acfa62a7e9->leave($__internal_838794e7e63e7848fa8cbb57166a7bfa7055e959f17c5b0579bb44acfa62a7e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  81 => 31,  72 => 25,  65 => 21,  61 => 20,  58 => 19,  52 => 17,  50 => 16,  46 => 15,  43 => 14,  37 => 11,  33 => 9,  31 => 8,  27 => 6,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}


<div class=\"row\" style=\"margin-top: 60px;\">
    <div class=\"col-sm-offset-4 col-lg-3\">{#col-sm-offset-4 #}
        <h2 class=\"text-success text-center text-uppercase\">Backoffice</h2>

        {% if error %}
            <div class=\"alert alert-danger\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span> {{ error.messageKey|trans(error.messageData, 'security') }}</span>
            </div>
        {% endif %}

        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
            {% endif %}
            <div class=\"form-group\">
                <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\"
                       required=\"required\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/>
            </div>
            <div class=\"form-check\">
                <label for=\"remember_me\" class=\"form-check-label\"><input type=\"checkbox\" id=\"remember_me\"
                                                                         name=\"_remember_me\" value=\"on\"/>
                    {{ 'security.login.remember_me'|trans }}</label>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-block btn-sm btn-success\"
                                id=\"_submit\" name=\"_submit\"> {{ 'security.login.submit'|trans }}</button>
                    </div>
                </div>
            </div>
        </form>
        <div class=\"bordure\"></div>
    </div>
</div>", "FOSUserBundle:Security:login_content.html.twig", "C:\\wamp64\\www\\gestion_stock\\app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
