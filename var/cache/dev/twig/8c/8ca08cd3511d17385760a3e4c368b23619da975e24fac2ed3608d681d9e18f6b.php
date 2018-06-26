<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5dd881581bc15836809338988f2ffb1d30def9304e678fa262239ebe510c712a extends Twig_Template
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
        $__internal_24ef7aa4dd31b177c57cf24e8a4f06f9db846281e03bb795ad5c8c5f64e68a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ef7aa4dd31b177c57cf24e8a4f06f9db846281e03bb795ad5c8c5f64e68a5d->enter($__internal_24ef7aa4dd31b177c57cf24e8a4f06f9db846281e03bb795ad5c8c5f64e68a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_24ef7aa4dd31b177c57cf24e8a4f06f9db846281e03bb795ad5c8c5f64e68a5d->leave($__internal_24ef7aa4dd31b177c57cf24e8a4f06f9db846281e03bb795ad5c8c5f64e68a5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ubuntu/convoit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
