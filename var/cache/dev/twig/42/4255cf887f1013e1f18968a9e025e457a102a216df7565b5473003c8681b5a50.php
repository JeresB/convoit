<?php

/* ville/new.html.twig */
class __TwigTemplate_b9b78090b5a11132c98d8bb0b1dd2940ee3563c988e7485f77cc5ad5cb765d3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", "ville/new.html.twig", 1);
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
        $__internal_15232b372956beb54aaa42350195d9f05e5d43059e23df986774436e495a7d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15232b372956beb54aaa42350195d9f05e5d43059e23df986774436e495a7d10->enter($__internal_15232b372956beb54aaa42350195d9f05e5d43059e23df986774436e495a7d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ville/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15232b372956beb54aaa42350195d9f05e5d43059e23df986774436e495a7d10->leave($__internal_15232b372956beb54aaa42350195d9f05e5d43059e23df986774436e495a7d10_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d9dcab6a6f48ccd7a575b9c11ee71103682a1ece7b227fa0d8027906393d6d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dcab6a6f48ccd7a575b9c11ee71103682a1ece7b227fa0d8027906393d6d01->enter($__internal_d9dcab6a6f48ccd7a575b9c11ee71103682a1ece7b227fa0d8027906393d6d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"home icon\"></i>
      Création Ville
    </h1>

    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
      <div class=\"six wide column\">
        <input class=\"ui primary button\" type=\"submit\" value=\"Creer\" />
        ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
      <div class=\"six wide column\">
        <a class=\"ui primary button\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_index");
        echo "\">Retourner à la liste</a>
      </div>
    </div>
  </section>
</main>
";
        
        $__internal_d9dcab6a6f48ccd7a575b9c11ee71103682a1ece7b227fa0d8027906393d6d01->leave($__internal_d9dcab6a6f48ccd7a575b9c11ee71103682a1ece7b227fa0d8027906393d6d01_prof);

    }

    public function getTemplateName()
    {
        return "ville/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  61 => 17,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1 class=\"ui horizontal divider header\">
      <i class=\"home icon\"></i>
      Création Ville
    </h1>

    {{ form_start(form) }}
    {{ form_widget(form) }}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
      <div class=\"six wide column\">
        <input class=\"ui primary button\" type=\"submit\" value=\"Creer\" />
        {{ form_end(form) }}
      </div>
      <div class=\"six wide column\">
        <a class=\"ui primary button\" href=\"{{ path('ville_index') }}\">Retourner à la liste</a>
      </div>
    </div>
  </section>
</main>
{% endblock %}
", "ville/new.html.twig", "/home/ubuntu/convoit/app/Resources/views/ville/new.html.twig");
    }
}
