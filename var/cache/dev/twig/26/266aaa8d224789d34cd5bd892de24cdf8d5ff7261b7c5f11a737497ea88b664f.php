<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_928c700f1bd55e7d3ce8c237ede9f16eb961626e4bf9ade239529ad63438dae4 extends Twig_Template
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
        $__internal_457b02cb36ef1bc2ae4f9c3b5995bdbeedb4c98d65e15a8598c6ddb1021a828b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457b02cb36ef1bc2ae4f9c3b5995bdbeedb4c98d65e15a8598c6ddb1021a828b->enter($__internal_457b02cb36ef1bc2ae4f9c3b5995bdbeedb4c98d65e15a8598c6ddb1021a828b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_457b02cb36ef1bc2ae4f9c3b5995bdbeedb4c98d65e15a8598c6ddb1021a828b->leave($__internal_457b02cb36ef1bc2ae4f9c3b5995bdbeedb4c98d65e15a8598c6ddb1021a828b_prof);

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
", "@Framework/Form/password_widget.html.php", "/home/ubuntu/convoit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
