<?php

/* internaute/new.html.twig */
class __TwigTemplate_694e9f6a4f6dda1940849ce6732901622c9750e4e28553ede5810d81b1fe52c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", "internaute/new.html.twig", 1);
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
        $__internal_2289bd4cc1ad1adeed9effb7d07404ac53ca826d68ce94320aa0a3889e4c98f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2289bd4cc1ad1adeed9effb7d07404ac53ca826d68ce94320aa0a3889e4c98f6->enter($__internal_2289bd4cc1ad1adeed9effb7d07404ac53ca826d68ce94320aa0a3889e4c98f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "internaute/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2289bd4cc1ad1adeed9effb7d07404ac53ca826d68ce94320aa0a3889e4c98f6->leave($__internal_2289bd4cc1ad1adeed9effb7d07404ac53ca826d68ce94320aa0a3889e4c98f6_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7155462caea72b34a9e6f2539b06c5f9f3ee2ac761830c2c8c52ef9b8cade227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7155462caea72b34a9e6f2539b06c5f9f3ee2ac761830c2c8c52ef9b8cade227->enter($__internal_7155462caea72b34a9e6f2539b06c5f9f3ee2ac761830c2c8c52ef9b8cade227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"user icon\"></i>
      Création Internaute
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("internaute_index");
        echo "\">Retourner à la liste</a>
      </div>
    </div>
  </section>
</main>
";
        
        $__internal_7155462caea72b34a9e6f2539b06c5f9f3ee2ac761830c2c8c52ef9b8cade227->leave($__internal_7155462caea72b34a9e6f2539b06c5f9f3ee2ac761830c2c8c52ef9b8cade227_prof);

    }

    public function getTemplateName()
    {
        return "internaute/new.html.twig";
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
      <i class=\"user icon\"></i>
      Création Internaute
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
        <a class=\"ui primary button\" href=\"{{ path('internaute_index') }}\">Retourner à la liste</a>
      </div>
    </div>
  </section>
</main>
{% endblock %}
", "internaute/new.html.twig", "/home/ubuntu/convoit/app/Resources/views/internaute/new.html.twig");
    }
}
