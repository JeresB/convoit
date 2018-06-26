<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_55bbe5b74f6ae64b97001c4b1a3daf18a726ba68c15cf7c46d3807b446b31a21 extends Twig_Template
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
        $__internal_760926c6e433629b381729515b30c48ccef4a117d5466f769e42f0ff5565a3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760926c6e433629b381729515b30c48ccef4a117d5466f769e42f0ff5565a3cf->enter($__internal_760926c6e433629b381729515b30c48ccef4a117d5466f769e42f0ff5565a3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_760926c6e433629b381729515b30c48ccef4a117d5466f769e42f0ff5565a3cf->leave($__internal_760926c6e433629b381729515b30c48ccef4a117d5466f769e42f0ff5565a3cf_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_2fe21bb7465e64ce2e8b316f9a65471fed2f4d98d578c0ba924f0bcbecfeabcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe21bb7465e64ce2e8b316f9a65471fed2f4d98d578c0ba924f0bcbecfeabcf->enter($__internal_2fe21bb7465e64ce2e8b316f9a65471fed2f4d98d578c0ba924f0bcbecfeabcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2fe21bb7465e64ce2e8b316f9a65471fed2f4d98d578c0ba924f0bcbecfeabcf->leave($__internal_2fe21bb7465e64ce2e8b316f9a65471fed2f4d98d578c0ba924f0bcbecfeabcf_prof);

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
