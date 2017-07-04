<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_32091ba10bf6f7894a206ef53ad88457fd8208672cbe29ae3a00ede7a61bb059 extends Twig_Template
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
        $__internal_9adbcf130b4541213a676d8b5d60d68cb272f5b5b4fe764c00ce0a13d9356710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9adbcf130b4541213a676d8b5d60d68cb272f5b5b4fe764c00ce0a13d9356710->enter($__internal_9adbcf130b4541213a676d8b5d60d68cb272f5b5b4fe764c00ce0a13d9356710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9adbcf130b4541213a676d8b5d60d68cb272f5b5b4fe764c00ce0a13d9356710->leave($__internal_9adbcf130b4541213a676d8b5d60d68cb272f5b5b4fe764c00ce0a13d9356710_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\gestion_stock\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
