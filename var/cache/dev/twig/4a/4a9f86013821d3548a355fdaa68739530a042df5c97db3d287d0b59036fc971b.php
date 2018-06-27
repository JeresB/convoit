<?php

/* FrontOfficeBundle:Default:layout.html.twig */
class __TwigTemplate_b46f581fa844b801dc3809a97d4e6d0ce33f0e0ead67f97adc96c58ecb5b5600 extends Twig_Template
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
        $__internal_9c59a4f261944025be605f47c8be83183ded0babad0805cd10fecbc6ef4dc250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c59a4f261944025be605f47c8be83183ded0babad0805cd10fecbc6ef4dc250->enter($__internal_9c59a4f261944025be605f47c8be83183ded0babad0805cd10fecbc6ef4dc250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:layout.html.twig"));

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
            RIDE SHARING
          </div>
      </h2>
    </a>
    ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "  </body>
</html>
";
        
        $__internal_9c59a4f261944025be605f47c8be83183ded0babad0805cd10fecbc6ef4dc250->leave($__internal_9c59a4f261944025be605f47c8be83183ded0babad0805cd10fecbc6ef4dc250_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_340e07bf41621996b15163990595865223a7e2a815a168895d28d0d204df6b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340e07bf41621996b15163990595865223a7e2a815a168895d28d0d204df6b6e->enter($__internal_340e07bf41621996b15163990595865223a7e2a815a168895d28d0d204df6b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_340e07bf41621996b15163990595865223a7e2a815a168895d28d0d204df6b6e->leave($__internal_340e07bf41621996b15163990595865223a7e2a815a168895d28d0d204df6b6e_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  53 => 22,  51 => 21,  42 => 15,  34 => 10,  23 => 1,);
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
            RIDE SHARING
          </div>
      </h2>
    </a>
    {% block content %}{% endblock %}
  </body>
</html>
", "FrontOfficeBundle:Default:layout.html.twig", "/home/etdfrm1/www/prjsymf.cir3-frm-smf-ang-38/src/FrontOfficeBundle/Resources/views/Default/layout.html.twig");
    }
}
