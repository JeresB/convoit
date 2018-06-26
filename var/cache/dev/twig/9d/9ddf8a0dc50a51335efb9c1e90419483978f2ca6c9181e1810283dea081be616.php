<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5c39970d0f62eebec53d6d8a047872f68deb9b53c68121b1736044beb2a3c477 extends Twig_Template
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
        $__internal_3cf8ab07aeaa36b9ca97ea64b02e96576a8dfcaed6baf434c8c136969cbf9c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf8ab07aeaa36b9ca97ea64b02e96576a8dfcaed6baf434c8c136969cbf9c6e->enter($__internal_3cf8ab07aeaa36b9ca97ea64b02e96576a8dfcaed6baf434c8c136969cbf9c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3cf8ab07aeaa36b9ca97ea64b02e96576a8dfcaed6baf434c8c136969cbf9c6e->leave($__internal_3cf8ab07aeaa36b9ca97ea64b02e96576a8dfcaed6baf434c8c136969cbf9c6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/ubuntu/convoit/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
