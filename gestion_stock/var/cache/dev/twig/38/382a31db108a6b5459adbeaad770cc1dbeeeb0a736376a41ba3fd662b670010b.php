<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_5b3a7a15ad85e24d67bc4639c512a0845e70d297d782b102e6a27b53b1c56176 extends Twig_Template
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
        $__internal_c45d40a15990bdd3b93d65f153ca0285c5752777d1d5f370c8d70765f75e86e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45d40a15990bdd3b93d65f153ca0285c5752777d1d5f370c8d70765f75e86e3->enter($__internal_c45d40a15990bdd3b93d65f153ca0285c5752777d1d5f370c8d70765f75e86e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c45d40a15990bdd3b93d65f153ca0285c5752777d1d5f370c8d70765f75e86e3->leave($__internal_c45d40a15990bdd3b93d65f153ca0285c5752777d1d5f370c8d70765f75e86e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
