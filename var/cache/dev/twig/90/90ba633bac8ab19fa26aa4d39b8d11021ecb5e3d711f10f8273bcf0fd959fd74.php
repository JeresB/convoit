<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_6b8ab2a2c3a0af6d2c654bada4b459be95b83948cd99f6b05c23d7d1ed914087 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", "BackOfficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackOfficeBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f54a22d88a317ed1e4b7029c1ad33826906ab8298205ece16b89408237e6febd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54a22d88a317ed1e4b7029c1ad33826906ab8298205ece16b89408237e6febd->enter($__internal_f54a22d88a317ed1e4b7029c1ad33826906ab8298205ece16b89408237e6febd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f54a22d88a317ed1e4b7029c1ad33826906ab8298205ece16b89408237e6febd->leave($__internal_f54a22d88a317ed1e4b7029c1ad33826906ab8298205ece16b89408237e6febd_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_6935e4703dee15c19fdac4649831e8dcf70bdf211944d2038f9a26c3480ca8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6935e4703dee15c19fdac4649831e8dcf70bdf211944d2038f9a26c3480ca8b5->enter($__internal_6935e4703dee15c19fdac4649831e8dcf70bdf211944d2038f9a26c3480ca8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h2 class=\"ui horizontal divider header\">
      <i class=\"database icon\"></i>
      Interface admin
    </h2>
  </section>
</main>
";
        
        $__internal_6935e4703dee15c19fdac4649831e8dcf70bdf211944d2038f9a26c3480ca8b5->leave($__internal_6935e4703dee15c19fdac4649831e8dcf70bdf211944d2038f9a26c3480ca8b5_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackOfficeBundle:Default:layout.html.twig' %}
{% block content %}
<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h2 class=\"ui horizontal divider header\">
      <i class=\"database icon\"></i>
      Interface admin
    </h2>
  </section>
</main>
{% endblock %}
", "BackOfficeBundle:Default:index.html.twig", "/home/ubuntu/convoit/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
