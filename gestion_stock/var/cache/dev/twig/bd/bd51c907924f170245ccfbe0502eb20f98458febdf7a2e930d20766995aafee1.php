<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b5876faddea8309ced1a27ac8e2a43713d519de98da6e3a82999326ea6345d90 extends Twig_Template
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
        $__internal_449092a8bc73c93e00de1cb7eb5785caccfe8d46570d9ff30090f1a542bc5be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449092a8bc73c93e00de1cb7eb5785caccfe8d46570d9ff30090f1a542bc5be8->enter($__internal_449092a8bc73c93e00de1cb7eb5785caccfe8d46570d9ff30090f1a542bc5be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_449092a8bc73c93e00de1cb7eb5785caccfe8d46570d9ff30090f1a542bc5be8->leave($__internal_449092a8bc73c93e00de1cb7eb5785caccfe8d46570d9ff30090f1a542bc5be8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
