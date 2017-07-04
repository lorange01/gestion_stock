<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7d7ef63617a3ff7634522060cf85dfa608c8131e56f70f92f30d4c30779fa6f2 extends Twig_Template
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
        $__internal_c93012807bd7b7602fe680241f32f951d5fa27fd4dc3be4d62f5ca3ea6d1d469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93012807bd7b7602fe680241f32f951d5fa27fd4dc3be4d62f5ca3ea6d1d469->enter($__internal_c93012807bd7b7602fe680241f32f951d5fa27fd4dc3be4d62f5ca3ea6d1d469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c93012807bd7b7602fe680241f32f951d5fa27fd4dc3be4d62f5ca3ea6d1d469->leave($__internal_c93012807bd7b7602fe680241f32f951d5fa27fd4dc3be4d62f5ca3ea6d1d469_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
