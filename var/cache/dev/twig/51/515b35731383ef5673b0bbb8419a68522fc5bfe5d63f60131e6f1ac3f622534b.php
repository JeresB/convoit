<?php

/* :voiture:edit.html.twig */
class __TwigTemplate_5631022a9abf312fbe467544010e55be2ac49146bbbac9febc1a2b4a092ca629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":voiture:edit.html.twig", 1);
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
        $__internal_737690db473bc8fd70856ff9c5e387e46adc3bea077f1d1b01df1939798f5ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_737690db473bc8fd70856ff9c5e387e46adc3bea077f1d1b01df1939798f5ba7->enter($__internal_737690db473bc8fd70856ff9c5e387e46adc3bea077f1d1b01df1939798f5ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":voiture:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_737690db473bc8fd70856ff9c5e387e46adc3bea077f1d1b01df1939798f5ba7->leave($__internal_737690db473bc8fd70856ff9c5e387e46adc3bea077f1d1b01df1939798f5ba7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9bc3675df886ea4ade142cf30f0d3bddb2a53c06380c9e936dc9595ef5ab6079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc3675df886ea4ade142cf30f0d3bddb2a53c06380c9e936dc9595ef5ab6079->enter($__internal_9bc3675df886ea4ade142cf30f0d3bddb2a53c06380c9e936dc9595ef5ab6079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"car icon\"></i>
      Edition Voiture
    </h1>

    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Edition\" />
    ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
      <li>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voiture_index");
        echo "\">Retourner à la liste</a>
      </li>
      <li>
        ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input type=\"submit\" value=\"Supprimer\">
        ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
      </li>
    </ul>
  </section>
</main>
";
        
        $__internal_9bc3675df886ea4ade142cf30f0d3bddb2a53c06380c9e936dc9595ef5ab6079->leave($__internal_9bc3675df886ea4ade142cf30f0d3bddb2a53c06380c9e936dc9595ef5ab6079_prof);

    }

    public function getTemplateName()
    {
        return ":voiture:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  71 => 21,  65 => 18,  58 => 14,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
      Edition Voiture
    </h1>

    {{ form_start(edit_form) }}
    {{ form_widget(edit_form) }}
    <input type=\"submit\" value=\"Edition\" />
    {{ form_end(edit_form) }}

    <ul>
      <li>
        <a href=\"{{ path('voiture_index') }}\">Retourner à la liste</a>
      </li>
      <li>
        {{ form_start(delete_form) }}
        <input type=\"submit\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
      </li>
    </ul>
  </section>
</main>
{% endblock %}
", ":voiture:edit.html.twig", "/home/ubuntu/convoit/app/Resources/views/voiture/edit.html.twig");
    }
}
