<?php

/* BackOfficeBundle:Default:layout.html.twig */
class __TwigTemplate_3e4185256a9e7a65ff96738d9e5497f9f2343ac20085fc16263ed4698d03d2aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a308b8ae3af056691ce7d892091640c515915582e17bf14deba676671aca16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a308b8ae3af056691ce7d892091640c515915582e17bf14deba676671aca16a->enter($__internal_5a308b8ae3af056691ce7d892091640c515915582e17bf14deba676671aca16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\" />
    <title>Ride sharing</title>

    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Concert+One\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/covoit.css"), "html", null, true);
        echo "\">
  </head>
  <body>
    <a href=\"/\">
      <h2 id=\"titre\" class=\"ui header\">
        <img class=\"ui image\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/ride_sharing.png"), "html", null, true);
        echo "\">
          <div class=\"content\">
            RIDE SHARING ADMIN
          </div>
      </h2>
    </a>
    ";
        // line 21
        $this->loadTemplate("BackOfficeBundle:Default:navbar.html.twig", "BackOfficeBundle:Default:layout.html.twig", 21)->display($context);
        // line 22
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "  </body>
  <footer>
    Projet Ride Sharing développé par Jérémy & Tristan
  </footer>
</html>
";
        
        $__internal_5a308b8ae3af056691ce7d892091640c515915582e17bf14deba676671aca16a->leave($__internal_5a308b8ae3af056691ce7d892091640c515915582e17bf14deba676671aca16a_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_2d511b0651468f8c586b6977601a1cfbd6b7da8ac380c7a5e21832d8d3917669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d511b0651468f8c586b6977601a1cfbd6b7da8ac380c7a5e21832d8d3917669->enter($__internal_2d511b0651468f8c586b6977601a1cfbd6b7da8ac380c7a5e21832d8d3917669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2d511b0651468f8c586b6977601a1cfbd6b7da8ac380c7a5e21832d8d3917669->leave($__internal_2d511b0651468f8c586b6977601a1cfbd6b7da8ac380c7a5e21832d8d3917669_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  56 => 23,  53 => 22,  51 => 21,  42 => 15,  34 => 10,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\" />
    <title>Ride sharing</title>

    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Concert+One\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/covoit.css') }}\">
  </head>
  <body>
    <a href=\"/\">
      <h2 id=\"titre\" class=\"ui header\">
        <img class=\"ui image\" src=\"{{ asset('images/ride_sharing.png')}}\">
          <div class=\"content\">
            RIDE SHARING ADMIN
          </div>
      </h2>
    </a>
    {% include 'BackOfficeBundle:Default:navbar.html.twig' %}
    {% block content %}{% endblock %}
  </body>
  <footer>
    Projet Ride Sharing développé par Jérémy & Tristan
  </footer>
</html>
", "BackOfficeBundle:Default:layout.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/src/BackOfficeBundle/Resources/views/Default/layout.html.twig");
    }
}
