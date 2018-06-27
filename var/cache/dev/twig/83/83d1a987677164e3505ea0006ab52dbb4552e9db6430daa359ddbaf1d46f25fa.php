<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_49a4ea83cd9929f096bd921d0dd89c07a2dbacd5e100f04cceaf96110aced5f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle:Default:layout.html.twig", "FrontOfficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontOfficeBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bbf9357b7a57442a33a780aa300fcac9b2b6b4f32b6816a4e1d82f64c640759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbf9357b7a57442a33a780aa300fcac9b2b6b4f32b6816a4e1d82f64c640759->enter($__internal_1bbf9357b7a57442a33a780aa300fcac9b2b6b4f32b6816a4e1d82f64c640759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bbf9357b7a57442a33a780aa300fcac9b2b6b4f32b6816a4e1d82f64c640759->leave($__internal_1bbf9357b7a57442a33a780aa300fcac9b2b6b4f32b6816a4e1d82f64c640759_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_84f1287f7f65364a6108a4960ef557bb08868e62a171206edbd4c1ca45ce999b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f1287f7f65364a6108a4960ef557bb08868e62a171206edbd4c1ca45ce999b->enter($__internal_84f1287f7f65364a6108a4960ef557bb08868e62a171206edbd4c1ca45ce999b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<main class=\"ui container\">
  <div class=\"ui hidden divider\"></div>
  <section class=\"ui raised segment\">
    <div class=\"ui form\">
      <div class=\"ui icon input\">
        <!-- <input class=\"prompt\" type=\"text\" placeholder=\"Common passwords...\">
        <i class=\"search icon\"></i> -->
        ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
          ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("class" => "ui input")));
        echo "
          <div class=\"ui hidden divider\"></div>
          <input class=\"ui primary button\" name=\"action\" type=\"submit\" value=\"Recherche\" />
          <input class=\"ui primary button\" name=\"action\" type=\"submit\" value=\"Recherche sur la ville de départ\" />
          <input class=\"ui primary button\" name=\"action\" type=\"submit\" value=\"Recherche sur la ville d'arrivée\" />
        ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
    ";
        // line 19
        if ((twig_length_filter($this->env, ($context["text"] ?? $this->getContext($context, "text"))) > 0)) {
            // line 20
            echo "    <div class=\"ui message\">
      <div class=\"header\">
        ";
            // line 22
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
      </div>
    </div>
    ";
        }
        // line 26
        echo "    <table class=\"ui selectable celled table\">
      <thead>
        <tr>
          <th>Identifiant</th>
          <th>Nombre de km</th>
          <th>Date</th>
          <th>Internaute</th>
          <th>Départ</th>
          <th>Arrivée</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["trajets"] ?? $this->getContext($context, "trajets")));
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 39
            echo "            <tr>
              <td><a href=\"/";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["trajet"], "id", array()), "html", null, true);
            echo "\">Trajet ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trajet"], "id", array()), "html", null, true);
            echo "</a></td>
              <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["trajet"], "nbKm", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["trajet"], "date", array()), "m/d/Y H:i:s"), "html", null, true);
            echo "</td>
              <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], "internaute", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trajet"], "internaute", array()), "nom", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["trajet"], "depart", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["trajet"], "arrivee", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trajet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        ";
        if (twig_test_empty(($context["trajets"] ?? $this->getContext($context, "trajets")))) {
            // line 49
            echo "            <tr>
              <td>Pas de résultat</td>
            </tr>
        ";
        }
        // line 53
        echo "      </tbody>
    </table>
  </section>
</main>
";
        
        $__internal_84f1287f7f65364a6108a4960ef557bb08868e62a171206edbd4c1ca45ce999b->leave($__internal_84f1287f7f65364a6108a4960ef557bb08868e62a171206edbd4c1ca45ce999b_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 53,  137 => 49,  134 => 48,  125 => 45,  121 => 44,  115 => 43,  111 => 42,  107 => 41,  101 => 40,  98 => 39,  94 => 38,  80 => 26,  73 => 22,  69 => 20,  67 => 19,  61 => 16,  53 => 11,  49 => 10,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontOfficeBundle:Default:layout.html.twig' %}
{% block content %}
<main class=\"ui container\">
  <div class=\"ui hidden divider\"></div>
  <section class=\"ui raised segment\">
    <div class=\"ui form\">
      <div class=\"ui icon input\">
        <!-- <input class=\"prompt\" type=\"text\" placeholder=\"Common passwords...\">
        <i class=\"search icon\"></i> -->
        {{ form_start(form) }}
          {{ form_widget(form.search, { 'attr': {'class': 'ui input'} }) }}
          <div class=\"ui hidden divider\"></div>
          <input class=\"ui primary button\" name=\"action\" type=\"submit\" value=\"Recherche\" />
          <input class=\"ui primary button\" name=\"action\" type=\"submit\" value=\"Recherche sur la ville de départ\" />
          <input class=\"ui primary button\" name=\"action\" type=\"submit\" value=\"Recherche sur la ville d'arrivée\" />
        {{ form_end(form) }}
      </div>
    </div>
    {% if text|length > 0 %}
    <div class=\"ui message\">
      <div class=\"header\">
        {{ text }}
      </div>
    </div>
    {% endif %}
    <table class=\"ui selectable celled table\">
      <thead>
        <tr>
          <th>Identifiant</th>
          <th>Nombre de km</th>
          <th>Date</th>
          <th>Internaute</th>
          <th>Départ</th>
          <th>Arrivée</th>
        </tr>
      </thead>
      <tbody>
        {% for trajet in trajets %}
            <tr>
              <td><a href=\"/{{ trajet.id}}\">Trajet {{ trajet.id }}</a></td>
              <td>{{ trajet.nbKm }}</td>
              <td>{{ trajet.date|date(\"m/d/Y H:i:s\") }}</td>
              <td>{{ trajet.internaute.prenom }} {{ trajet.internaute.nom }}</td>
              <td>{{ trajet.depart }}</td>
              <td>{{ trajet.arrivee }}</td>
            </tr>
        {% endfor %}
        {% if trajets is empty %}
            <tr>
              <td>Pas de résultat</td>
            </tr>
        {% endif %}
      </tbody>
    </table>
  </section>
</main>
{% endblock %}
", "FrontOfficeBundle:Default:index.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/src/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
