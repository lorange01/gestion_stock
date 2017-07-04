<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b509bd7732ec124f2f8c5be9d8401042559897bed31cff7944e1f11faad46735 extends Twig_Template
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
        $__internal_dd83cb616227dd614be7bbfd0d63820675603d307be8e689e7fc2e6ba904b963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd83cb616227dd614be7bbfd0d63820675603d307be8e689e7fc2e6ba904b963->enter($__internal_dd83cb616227dd614be7bbfd0d63820675603d307be8e689e7fc2e6ba904b963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dd83cb616227dd614be7bbfd0d63820675603d307be8e689e7fc2e6ba904b963->leave($__internal_dd83cb616227dd614be7bbfd0d63820675603d307be8e689e7fc2e6ba904b963_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
