<?php

/* BackOfficeBundle:Default:stats.html.twig */
class __TwigTemplate_79f94c3b7442ef428c55485dd41b57c1186c1d090debd4599ba753702dd905fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", "BackOfficeBundle:Default:stats.html.twig", 1);
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
        $__internal_9a2e2c43dc993c50daaff1684b807b4280ac8e80978b0dee543e3a7c1250d07d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2e2c43dc993c50daaff1684b807b4280ac8e80978b0dee543e3a7c1250d07d->enter($__internal_9a2e2c43dc993c50daaff1684b807b4280ac8e80978b0dee543e3a7c1250d07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:stats.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a2e2c43dc993c50daaff1684b807b4280ac8e80978b0dee543e3a7c1250d07d->leave($__internal_9a2e2c43dc993c50daaff1684b807b4280ac8e80978b0dee543e3a7c1250d07d_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_806ffae1056b56344db07ec153e5c507bc64ef27fdce030619f99ddbea6ccbb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806ffae1056b56344db07ec153e5c507bc64ef27fdce030619f99ddbea6ccbb1->enter($__internal_806ffae1056b56344db07ec153e5c507bc64ef27fdce030619f99ddbea6ccbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h4 class=\"ui horizontal divider header\">
      <i class=\"bar chart icon\"></i>
      Statistiques
    </h4>
    <div class=\"ui grid\">
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Nombre d'internautes :</span>
            <div class=\"description\">
              ";
        // line 15
        echo twig_escape_filter($this->env, ($context["nb_internaute"] ?? $this->getContext($context, "nb_internaute")), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Nombre d'internautes à plus de 2 trajets :</span>
            <div class=\"description\">
              ";
        // line 25
        echo twig_escape_filter($this->env, ($context["nb_internaute_trajet_2"] ?? $this->getContext($context, "nb_internaute_trajet_2")), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Top 5 villes de départs :</span>
            <div class=\"description\">
              <ul>
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["top_depart"] ?? $this->getContext($context, "top_depart")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 37
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "cp", array()), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Top 5 villes d'arrivées :</span>
            <div class=\"description\">
              <ul>
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["top_arrivee"] ?? $this->getContext($context, "top_arrivee")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 51
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "ville", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "cp", array()), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
";
        
        $__internal_806ffae1056b56344db07ec153e5c507bc64ef27fdce030619f99ddbea6ccbb1->leave($__internal_806ffae1056b56344db07ec153e5c507bc64ef27fdce030619f99ddbea6ccbb1_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 53,  113 => 51,  109 => 50,  96 => 39,  85 => 37,  81 => 36,  67 => 25,  54 => 15,  40 => 3,  34 => 2,  11 => 1,);
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
    <h4 class=\"ui horizontal divider header\">
      <i class=\"bar chart icon\"></i>
      Statistiques
    </h4>
    <div class=\"ui grid\">
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Nombre d'internautes :</span>
            <div class=\"description\">
              {{ nb_internaute }}
            </div>
          </div>
        </div>
      </div>
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Nombre d'internautes à plus de 2 trajets :</span>
            <div class=\"description\">
              {{ nb_internaute_trajet_2 }}
            </div>
          </div>
        </div>
      </div>
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Top 5 villes de départs :</span>
            <div class=\"description\">
              <ul>
                {% for ville in top_depart %}
                <li>{{ ville.ville }} {{ ville.cp}}</li>
                {% endfor %}
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=\"four wide column\">
        <div class=\"ui card\">
          <div class=\"content\">
            <span class=\"header\">Top 5 villes d'arrivées :</span>
            <div class=\"description\">
              <ul>
                {% for ville in top_arrivee %}
                <li>{{ ville.ville }} {{ ville.cp}}</li>
                {% endfor %}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
{% endblock %}
", "BackOfficeBundle:Default:stats.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/src/BackOfficeBundle/Resources/views/Default/stats.html.twig");
    }
}
