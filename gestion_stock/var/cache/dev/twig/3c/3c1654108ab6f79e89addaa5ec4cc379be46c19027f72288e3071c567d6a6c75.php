<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bfabcd8c00ceb5e81738ba5a9c2797dc3a37a980ef6b3d9bf4049eff4686a089 extends Twig_Template
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
        $__internal_dc02f9c43e9e2a6f1afcef139b584756e2d1c0ba56289af23b137fcbd6f46ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc02f9c43e9e2a6f1afcef139b584756e2d1c0ba56289af23b137fcbd6f46ce1->enter($__internal_dc02f9c43e9e2a6f1afcef139b584756e2d1c0ba56289af23b137fcbd6f46ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_dc02f9c43e9e2a6f1afcef139b584756e2d1c0ba56289af23b137fcbd6f46ce1->leave($__internal_dc02f9c43e9e2a6f1afcef139b584756e2d1c0ba56289af23b137fcbd6f46ce1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
