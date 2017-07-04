<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_444abbe00979cd1a6c9e6bb91c9d97538d352af2caa33f76b2c29fbf497433f3 extends Twig_Template
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
        $__internal_7a4f1927b6ae42b3d4432d47bb1d3655203c1b92c7d182bcaa2520b9c5f42bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4f1927b6ae42b3d4432d47bb1d3655203c1b92c7d182bcaa2520b9c5f42bae->enter($__internal_7a4f1927b6ae42b3d4432d47bb1d3655203c1b92c7d182bcaa2520b9c5f42bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7a4f1927b6ae42b3d4432d47bb1d3655203c1b92c7d182bcaa2520b9c5f42bae->leave($__internal_7a4f1927b6ae42b3d4432d47bb1d3655203c1b92c7d182bcaa2520b9c5f42bae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
