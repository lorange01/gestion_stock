<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_fa0e835ab44d39b500d867166f36d8f3464bd2602b322da01e7994393ce02caf extends Twig_Template
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
        $__internal_8c910674fcbbcbd4bf0970f5e40d63b1fb8d6ef04bfa53f19d4f44fc81f2ce63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c910674fcbbcbd4bf0970f5e40d63b1fb8d6ef04bfa53f19d4f44fc81f2ce63->enter($__internal_8c910674fcbbcbd4bf0970f5e40d63b1fb8d6ef04bfa53f19d4f44fc81f2ce63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8c910674fcbbcbd4bf0970f5e40d63b1fb8d6ef04bfa53f19d4f44fc81f2ce63->leave($__internal_8c910674fcbbcbd4bf0970f5e40d63b1fb8d6ef04bfa53f19d4f44fc81f2ce63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
