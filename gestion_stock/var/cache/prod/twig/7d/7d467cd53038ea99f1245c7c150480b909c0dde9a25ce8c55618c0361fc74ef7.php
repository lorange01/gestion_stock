<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_2320f1b6b3b2c192ba982c5711e5096b68287593d95ba579e01e44c327f2b410 extends Twig_Template
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
        // line 2
        echo "

<div class=\"row\" style=\"margin-top: 60px;\">
    <div class=\"col-sm-offset-4 col-lg-3\">";
        // line 6
        echo "        <h2 class=\"text-success text-center text-uppercase\">Backoffice</h2>

        ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 9
            echo "            <div class=\"alert alert-danger\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span> ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
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
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : null)) {
            // line 17
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 37,  78 => 31,  69 => 25,  62 => 21,  58 => 20,  55 => 19,  49 => 17,  47 => 16,  43 => 15,  40 => 14,  34 => 11,  30 => 9,  28 => 8,  24 => 6,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
