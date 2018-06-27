<?php

/* :ville:edit.html.twig */
class __TwigTemplate_e7b3b58b97916ffcebf296789edf3e8bb4931de673a363d48badbb6fd12f19fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle:Default:layout.html.twig", ":ville:edit.html.twig", 1);
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
        $__internal_dd39c89c51e36ebbc91b9ca66999ca6271506a0962184c527be853e6ab51cb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd39c89c51e36ebbc91b9ca66999ca6271506a0962184c527be853e6ab51cb6c->enter($__internal_dd39c89c51e36ebbc91b9ca66999ca6271506a0962184c527be853e6ab51cb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ville:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd39c89c51e36ebbc91b9ca66999ca6271506a0962184c527be853e6ab51cb6c->leave($__internal_dd39c89c51e36ebbc91b9ca66999ca6271506a0962184c527be853e6ab51cb6c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_610b4d95dd03f4aa44014102df05919a26ab977a0d82d616a10f705260519cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610b4d95dd03f4aa44014102df05919a26ab977a0d82d616a10f705260519cd4->enter($__internal_610b4d95dd03f4aa44014102df05919a26ab977a0d82d616a10f705260519cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<main class=\"ui container\">
  <section class=\"ui raised segment\">
    <h1 class=\"ui horizontal divider header\">
      <i class=\"home icon\"></i>
      Edition Ville
    </h1>
    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
      <div class=\"six wide column\">
        <input class=\"fluid ui primary button\" type=\"submit\" value=\"Editer\" />
        ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
      </div>
      <div class=\"six wide column\">
        <a class=\"fluid ui primary button\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ville_index");
        echo "\">Retourner à la liste</a>
      </div>
      <div class=\"four wide column\">
        ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"ui red button\" type=\"submit\" value=\"Supprimer\">
        ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
      </div>
    </div>
  </section>
</main>
";
        
        $__internal_610b4d95dd03f4aa44014102df05919a26ab977a0d82d616a10f705260519cd4->leave($__internal_610b4d95dd03f4aa44014102df05919a26ab977a0d82d616a10f705260519cd4_prof);

    }

    public function getTemplateName()
    {
        return ":ville:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  72 => 22,  66 => 19,  60 => 16,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
      Edition Ville
    </h1>
    {{ form_start(edit_form) }}
    {{ form_widget(edit_form) }}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui grid\">
      <div class=\"six wide column\">
        <input class=\"fluid ui primary button\" type=\"submit\" value=\"Editer\" />
        {{ form_end(edit_form) }}
      </div>
      <div class=\"six wide column\">
        <a class=\"fluid ui primary button\" href=\"{{ path('ville_index') }}\">Retourner à la liste</a>
      </div>
      <div class=\"four wide column\">
        {{ form_start(delete_form) }}
        <input class=\"ui red button\" type=\"submit\" value=\"Supprimer\">
        {{ form_end(delete_form) }}
      </div>
    </div>
  </section>
</main>
{% endblock %}
", ":ville:edit.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/app/Resources/views/ville/edit.html.twig");
    }
}
