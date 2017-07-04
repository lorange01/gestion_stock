<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3f4a578c451f41c4e0ac081188c0ece6ab9717fd54d93a63e133504c43237ad2 extends Twig_Template
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
        $__internal_c895d6747f450225e3b376f92edc0aca50ffb3f5d00cd7cad1cc8954f23dd987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c895d6747f450225e3b376f92edc0aca50ffb3f5d00cd7cad1cc8954f23dd987->enter($__internal_c895d6747f450225e3b376f92edc0aca50ffb3f5d00cd7cad1cc8954f23dd987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c895d6747f450225e3b376f92edc0aca50ffb3f5d00cd7cad1cc8954f23dd987->leave($__internal_c895d6747f450225e3b376f92edc0aca50ffb3f5d00cd7cad1cc8954f23dd987_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
