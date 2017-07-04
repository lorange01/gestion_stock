<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_4b2cdd5119af53d9e8cb2f119a2593a834f3077b344f30e5ab22f37da7c9ea0f extends Twig_Template
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
        $__internal_11ee89d1b10932dcf698c540c17fa16a39648f6130ceb4500bf03ebc03ab3bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ee89d1b10932dcf698c540c17fa16a39648f6130ceb4500bf03ebc03ab3bce->enter($__internal_11ee89d1b10932dcf698c540c17fa16a39648f6130ceb4500bf03ebc03ab3bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_11ee89d1b10932dcf698c540c17fa16a39648f6130ceb4500bf03ebc03ab3bce->leave($__internal_11ee89d1b10932dcf698c540c17fa16a39648f6130ceb4500bf03ebc03ab3bce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
