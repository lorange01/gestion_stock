<?php

/* default/layout.html.twig */
class __TwigTemplate_bb8959be368433ef7a39c0ce7066adc72b30bb34c60df8cb30ba16a0d29c0691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18b588f5d085e69eaad62ecb00ab5709cc6a3c2255e048e74b62a1894681a977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b588f5d085e69eaad62ecb00ab5709cc6a3c2255e048e74b62a1894681a977->enter($__internal_18b588f5d085e69eaad62ecb00ab5709cc6a3c2255e048e74b62a1894681a977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18b588f5d085e69eaad62ecb00ab5709cc6a3c2255e048e74b62a1894681a977->leave($__internal_18b588f5d085e69eaad62ecb00ab5709cc6a3c2255e048e74b62a1894681a977_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6171791f4b40d29259223fbb92722865ac15afe4b6c4e6d8c07429316aa8bfac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6171791f4b40d29259223fbb92722865ac15afe4b6c4e6d8c07429316aa8bfac->enter($__internal_6171791f4b40d29259223fbb92722865ac15afe4b6c4e6d8c07429316aa8bfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                        data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_add");
        echo "\">Back-office</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">


                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Products <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            ";
        // line 28
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) && ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MAGASINIER")))) {
            // line 29
            echo "                                <li>
                                    <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_add");
            echo "\">Ajout</a>
                                </li>
                            ";
        }
        // line 33
        echo "
                            <li>
                                <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Listes</a>
                            </li>

                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Stock <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            ";
        // line 43
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) && ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_MAGASINIER")))) {
            // line 44
            echo "                                <li>
                                    <a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_add");
            echo "\">Ajout</a>
                                </li>
                            ";
        }
        // line 48
        echo "
                            <li>
                                <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_list");
        echo "\">Listes</a>
                            </li>

                        </ul>
                    </li>


                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Profil <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu dropdown-menu-default\">
                            <li>
                                ";
        // line 63
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) && $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 64
            echo "
                                    <a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">
                                        <i class=\"icon-settings\"></i> Mon compte
                                    </a>
                                ";
        }
        // line 69
        echo "
                            </li>
                            <li>
                                <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">
                                    <i class=\"icon-key\"></i> Mot de passe
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                                    <i class=\"icon-logout\"></i>
                                    Déconnexion </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i>
                            Déconnexion</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class=\"container body\">

        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 100
            echo "            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12\">
                    ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 103
                echo "                        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\"
                                    aria-hidden=\"true\"></button>
                            ";
                // line 106
                echo $context["message"];
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
        ";
        // line 113
        $this->displayBlock('block', $context, $blocks);
        // line 116
        echo "
    </div>
";
        
        $__internal_6171791f4b40d29259223fbb92722865ac15afe4b6c4e6d8c07429316aa8bfac->leave($__internal_6171791f4b40d29259223fbb92722865ac15afe4b6c4e6d8c07429316aa8bfac_prof);

    }

    // line 113
    public function block_block($context, array $blocks = array())
    {
        $__internal_28094f32e71a3d5acdc85e75da56c041a375fda0dfb565a4c4cc296830452362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28094f32e71a3d5acdc85e75da56c041a375fda0dfb565a4c4cc296830452362->enter($__internal_28094f32e71a3d5acdc85e75da56c041a375fda0dfb565a4c4cc296830452362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 114
        echo "
        ";
        
        $__internal_28094f32e71a3d5acdc85e75da56c041a375fda0dfb565a4c4cc296830452362->leave($__internal_28094f32e71a3d5acdc85e75da56c041a375fda0dfb565a4c4cc296830452362_prof);

    }

    public function getTemplateName()
    {
        return "default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 114,  230 => 113,  221 => 116,  219 => 113,  216 => 112,  208 => 109,  199 => 106,  192 => 103,  188 => 102,  184 => 100,  180 => 99,  164 => 86,  153 => 78,  144 => 72,  139 => 69,  132 => 65,  129 => 64,  127 => 63,  111 => 50,  107 => 48,  101 => 45,  98 => 44,  96 => 43,  85 => 35,  81 => 33,  75 => 30,  72 => 29,  70 => 28,  58 => 19,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}



    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                        data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('product_add') }}\">Back-office</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">


                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Products <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            {% if app.user is defined and (is_granted('ROLE_ADMIN') or  is_granted('ROLE_MAGASINIER')) %}
                                <li>
                                    <a href=\"{{ path('product_add') }}\">Ajout</a>
                                </li>
                            {% endif %}

                            <li>
                                <a href=\"{{ path('homepage') }}\">Listes</a>
                            </li>

                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Stock <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            {% if app.user is defined and (is_granted('ROLE_ADMIN') or  is_granted('ROLE_MAGASINIER')) %}
                                <li>
                                    <a href=\"{{ path('stock_add') }}\">Ajout</a>
                                </li>
                            {% endif %}

                            <li>
                                <a href=\"{{ path('stock_list') }}\">Listes</a>
                            </li>

                        </ul>
                    </li>


                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Profil <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu dropdown-menu-default\">
                            <li>
                                {% if app.user is defined and app.user %}

                                    <a href=\"{{ path('fos_user_profile_edit') }}\">
                                        <i class=\"icon-settings\"></i> Mon compte
                                    </a>
                                {% endif %}

                            </li>
                            <li>
                                <a href=\"{{ path('fos_user_change_password') }}\">
                                    <i class=\"icon-key\"></i> Mot de passe
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    <i class=\"icon-logout\"></i>
                                    Déconnexion </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"glyphicon glyphicon-off\"></i>
                            Déconnexion</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class=\"container body\">

        {% for type, messages in app.session.flashBag.all %}
            <div class=\"row\">
                <div class=\"col-md-12 col-sm-12\">
                    {% for message in messages %}
                        <div class=\"{{ type }}\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\"
                                    aria-hidden=\"true\"></button>
                            {{ message | raw }}
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% endfor %}

        {% block block %}

        {% endblock %}

    </div>
{% endblock %}
", "default/layout.html.twig", "C:\\wamp64\\www\\gestion_stock\\app\\Resources\\views\\default\\layout.html.twig");
    }
}
