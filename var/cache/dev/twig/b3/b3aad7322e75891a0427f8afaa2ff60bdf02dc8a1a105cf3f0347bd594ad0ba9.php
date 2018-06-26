<?php

/* :voiture:new.html.twig */
class __TwigTemplate_2234bf1e5f9dcc47579aae9b8c86e60077fecc254fec9e31d8ddf3e567d882d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":voiture:new.html.twig", 1);
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
        $__internal_6f68de52625e741fd9c01d9fde74c16d1090b1d5c6d016b5384667740847d7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f68de52625e741fd9c01d9fde74c16d1090b1d5c6d016b5384667740847d7d0->enter($__internal_6f68de52625e741fd9c01d9fde74c16d1090b1d5c6d016b5384667740847d7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":voiture:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f68de52625e741fd9c01d9fde74c16d1090b1d5c6d016b5384667740847d7d0->leave($__internal_6f68de52625e741fd9c01d9fde74c16d1090b1d5c6d016b5384667740847d7d0_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e8c28da9ae36a7f251d46950ca1ba432cd95ce9c1bd12d7252118f6e2aded178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c28da9ae36a7f251d46950ca1ba432cd95ce9c1bd12d7252118f6e2aded178->enter($__internal_e8c28da9ae36a7f251d46950ca1ba432cd95ce9c1bd12d7252118f6e2aded178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
    <input type=\"submit\" value=\"Creer\" />
    ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <a class=\"ui primary button\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voiture_index");
        echo "\">Retourner à la liste</a>
  </section>
</main>
";
        
        $__internal_e8c28da9ae36a7f251d46950ca1ba432cd95ce9c1bd12d7252118f6e2aded178->leave($__internal_e8c28da9ae36a7f251d46950ca1ba432cd95ce9c1bd12d7252118f6e2aded178_prof);

    }

    public function getTemplateName()
    {
        return ":voiture:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  58 => 14,  53 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
    <input type=\"submit\" value=\"Creer\" />
    {{ form_end(form) }}

    <a class=\"ui primary button\" href=\"{{ path('voiture_index') }}\">Retourner à la liste</a>
  </section>
</main>
{% endblock %}
", ":voiture:new.html.twig", "/home/ubuntu/convoit/app/Resources/views/voiture/new.html.twig");
    }
}
