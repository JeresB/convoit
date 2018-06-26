<?php

/* :voiture:show.html.twig */
class __TwigTemplate_0056971749166cdf5c5dfb31953a028a205bcd72526f247042255e07fc0ca9cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":voiture:show.html.twig", 1);
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
        $__internal_4816017fb2a78c17909f9646e4e93da97ca69fef2aaf20053572acd8a042709e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4816017fb2a78c17909f9646e4e93da97ca69fef2aaf20053572acd8a042709e->enter($__internal_4816017fb2a78c17909f9646e4e93da97ca69fef2aaf20053572acd8a042709e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":voiture:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4816017fb2a78c17909f9646e4e93da97ca69fef2aaf20053572acd8a042709e->leave($__internal_4816017fb2a78c17909f9646e4e93da97ca69fef2aaf20053572acd8a042709e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b1bc802a32eb22421f00901c9a029d81a21dac92180768e057a98f339f7528ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bc802a32eb22421f00901c9a029d81a21dac92180768e057a98f339f7528ad->enter($__internal_b1bc802a32eb22421f00901c9a029d81a21dac92180768e057a98f339f7528ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"car icon\"></i>
      Voiture
    </h1>

    <table class=\"ui selectable celled table\">
      <tbody>
        <tr>
          <th>Id</th>
          <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["voiture"] ?? $this->getContext($context, "voiture")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          <th>Voiture</th>
          <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["voiture"] ?? $this->getContext($context, "voiture")), "voiture", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          <th>Nbplaces</th>
          <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["voiture"] ?? $this->getContext($context, "voiture")), "nbPlaces", array()), "html", null, true);
        echo "</td>
        </tr>
      </tbody>
    </table>

    <a class=\"ui primary button\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voiture_index");
        echo "\">Retourner à la liste</a>
    <a class=\"ui primary button\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voiture_edit", array("id" => $this->getAttribute(($context["voiture"] ?? $this->getContext($context, "voiture")), "id", array()))), "html", null, true);
        echo "\">Edition</a>
    ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <input class=\"ui input\" type=\"submit\" value=\"Supprimer\">
    ";
        // line 32
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
  </section>
</main>
";
        
        $__internal_b1bc802a32eb22421f00901c9a029d81a21dac92180768e057a98f339f7528ad->leave($__internal_b1bc802a32eb22421f00901c9a029d81a21dac92180768e057a98f339f7528ad_prof);

    }

    public function getTemplateName()
    {
        return ":voiture:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  83 => 30,  79 => 29,  75 => 28,  67 => 23,  60 => 19,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
      Voiture
    </h1>

    <table class=\"ui selectable celled table\">
      <tbody>
        <tr>
          <th>Id</th>
          <td>{{ voiture.id }}</td>
        </tr>
        <tr>
          <th>Voiture</th>
          <td>{{ voiture.voiture }}</td>
        </tr>
        <tr>
          <th>Nbplaces</th>
          <td>{{ voiture.nbPlaces }}</td>
        </tr>
      </tbody>
    </table>

    <a class=\"ui primary button\" href=\"{{ path('voiture_index') }}\">Retourner à la liste</a>
    <a class=\"ui primary button\" href=\"{{ path('voiture_edit', { 'id': voiture.id }) }}\">Edition</a>
    {{ form_start(delete_form) }}
    <input class=\"ui input\" type=\"submit\" value=\"Supprimer\">
    {{ form_end(delete_form) }}
  </section>
</main>
{% endblock %}
", ":voiture:show.html.twig", "/home/ubuntu/convoit/app/Resources/views/voiture/show.html.twig");
    }
}
