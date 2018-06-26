<?php

/* BackOfficeBundle:Default:layout.html.twig */
class __TwigTemplate_0cec2e580a590de7851243a79ca21425610cc34efa5eb3c328fea7b7356bfd4c extends Twig_Template
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
        $__internal_f8eaf0f0830644a35df885eeade1e896233dd7288831c2a8a0e9fc24f3819313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8eaf0f0830644a35df885eeade1e896233dd7288831c2a8a0e9fc24f3819313->enter($__internal_f8eaf0f0830644a35df885eeade1e896233dd7288831c2a8a0e9fc24f3819313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:layout.html.twig"));

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
        
        $__internal_f8eaf0f0830644a35df885eeade1e896233dd7288831c2a8a0e9fc24f3819313->leave($__internal_f8eaf0f0830644a35df885eeade1e896233dd7288831c2a8a0e9fc24f3819313_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_5914175d0ffbcdaa22e230fe8d9b88365991c8b004c22c2c321db0c27e625082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5914175d0ffbcdaa22e230fe8d9b88365991c8b004c22c2c321db0c27e625082->enter($__internal_5914175d0ffbcdaa22e230fe8d9b88365991c8b004c22c2c321db0c27e625082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5914175d0ffbcdaa22e230fe8d9b88365991c8b004c22c2c321db0c27e625082->leave($__internal_5914175d0ffbcdaa22e230fe8d9b88365991c8b004c22c2c321db0c27e625082_prof);

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
", "BackOfficeBundle:Default:layout.html.twig", "/home/ubuntu/convoit/src/BackOfficeBundle/Resources/views/Default/layout.html.twig");
    }
}
