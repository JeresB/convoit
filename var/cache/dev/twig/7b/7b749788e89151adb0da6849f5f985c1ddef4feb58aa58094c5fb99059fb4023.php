<?php

/* voiture/new.html.twig */
class __TwigTemplate_07c69ae7671e255f4c6323ad117b47a67e9fc8ea574d6df16e57741689000ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", "voiture/new.html.twig", 1);
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
        $__internal_fcec34b5acf71d5f3deab77c9e4eaec23d10ec3cc57c87e38e2d701161bd1017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcec34b5acf71d5f3deab77c9e4eaec23d10ec3cc57c87e38e2d701161bd1017->enter($__internal_fcec34b5acf71d5f3deab77c9e4eaec23d10ec3cc57c87e38e2d701161bd1017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "voiture/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcec34b5acf71d5f3deab77c9e4eaec23d10ec3cc57c87e38e2d701161bd1017->leave($__internal_fcec34b5acf71d5f3deab77c9e4eaec23d10ec3cc57c87e38e2d701161bd1017_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8bc8a09aaeafe3ecbf05ccdf5c9819aa5c4dd8d3ea80477712be47892d60d8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc8a09aaeafe3ecbf05ccdf5c9819aa5c4dd8d3ea80477712be47892d60d8ef->enter($__internal_8bc8a09aaeafe3ecbf05ccdf5c9819aa5c4dd8d3ea80477712be47892d60d8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"car icon\"></i>
      Création Voiture
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voiture_index");
        echo "\">Retourner à la liste</a>
      </div>
    </div>
  </section>
</main>
";
        
        $__internal_8bc8a09aaeafe3ecbf05ccdf5c9819aa5c4dd8d3ea80477712be47892d60d8ef->leave($__internal_8bc8a09aaeafe3ecbf05ccdf5c9819aa5c4dd8d3ea80477712be47892d60d8ef_prof);

    }

    public function getTemplateName()
    {
        return "voiture/new.html.twig";
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
      <i class=\"car icon\"></i>
      Création Voiture
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
        <a class=\"ui primary button\" href=\"{{ path('voiture_index') }}\">Retourner à la liste</a>
      </div>
    </div>
  </section>
</main>
{% endblock %}
", "voiture/new.html.twig", "/home/ubuntu/convoit/app/Resources/views/voiture/new.html.twig");
    }
}
