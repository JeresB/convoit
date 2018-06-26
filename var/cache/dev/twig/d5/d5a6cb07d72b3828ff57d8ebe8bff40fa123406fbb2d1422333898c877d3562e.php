<?php

/* voiture/show.html.twig */
class __TwigTemplate_af465662ba6656038490ff865bfb67821a6f274a6cc23b35f82b7469796e7170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", "voiture/show.html.twig", 1);
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
        $__internal_d8b7fcdb96253b5c60d2438b69b42cfdd55a62f49895073d17d23ce2a6e7e02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b7fcdb96253b5c60d2438b69b42cfdd55a62f49895073d17d23ce2a6e7e02e->enter($__internal_d8b7fcdb96253b5c60d2438b69b42cfdd55a62f49895073d17d23ce2a6e7e02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "voiture/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8b7fcdb96253b5c60d2438b69b42cfdd55a62f49895073d17d23ce2a6e7e02e->leave($__internal_d8b7fcdb96253b5c60d2438b69b42cfdd55a62f49895073d17d23ce2a6e7e02e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2ee0bb0d0059af5f3f8a2c0a69749c35dfda9f5f545f8545235717ef5ca24714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee0bb0d0059af5f3f8a2c0a69749c35dfda9f5f545f8545235717ef5ca24714->enter($__internal_2ee0bb0d0059af5f3f8a2c0a69749c35dfda9f5f545f8545235717ef5ca24714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

    ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <input class=\"ui red right floated button\" type=\"submit\" value=\"Supprimer\">
    ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
    <a class=\"ui primary button\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voiture_index");
        echo "\">Retourner à la liste</a>
    <a class=\"ui primary button\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voiture_edit", array("id" => $this->getAttribute(($context["voiture"] ?? $this->getContext($context, "voiture")), "id", array()))), "html", null, true);
        echo "\">Edition</a>
  </section>
</main>
";
        
        $__internal_2ee0bb0d0059af5f3f8a2c0a69749c35dfda9f5f545f8545235717ef5ca24714->leave($__internal_2ee0bb0d0059af5f3f8a2c0a69749c35dfda9f5f545f8545235717ef5ca24714_prof);

    }

    public function getTemplateName()
    {
        return "voiture/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 32,  84 => 31,  80 => 30,  75 => 28,  67 => 23,  60 => 19,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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

    {{ form_start(delete_form) }}
    <input class=\"ui red right floated button\" type=\"submit\" value=\"Supprimer\">
    {{ form_end(delete_form) }}
    <a class=\"ui primary button\" href=\"{{ path('voiture_index') }}\">Retourner à la liste</a>
    <a class=\"ui primary button\" href=\"{{ path('voiture_edit', { 'id': voiture.id }) }}\">Edition</a>
  </section>
</main>
{% endblock %}
", "voiture/show.html.twig", "/home/ubuntu/convoit/app/Resources/views/voiture/show.html.twig");
    }
}
