<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/yg_architect/templates/page--404.html.twig */
class __TwigTemplate_f37d73737401c1c9bedfa1fe1304c9efeb02da41aa6cd66adde0beedf31347e3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 134];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 59
        echo "<div class=\"fh5co-loader\"></div>
  
  <div id=\"page\">

  <nav class=\"fh5co-nav\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"top-menu\">
        <div class=\"row\">
          <div class=\"col-sm-3\">
            <div id=\"fh5co-logo\"><a href=\"";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_front"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo "<span>.</span></a></div>
          </div>
          ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
        </div>
        
      </div>
    </div>
  </nav>


  <div class=\"container\">

    <div id=\"fh5co-intro\">
      <div class=\"row animate-box\">
        <div class=\"col-md-8 col-md-offset-2 col-md-pull-2\">
          <h2>";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
        echo "</h2>
        </div>
      </div>
    </div>
    
";
        // line 89
        echo "<section id=\"not-found-section\" class=\"text-center\">
  <div class=\"container\">               
    <div class=\"row\"> 
      <div class=\"not-found-body\" >
        <div class=\"not-title\" >
          <h1>404</h1>
          <h2>Page Not Found</h2> 
        </div>  
          <h2>Sorry. We can't find a page.</h2>
          <p>The Page you are looking for might have a removed, had its name changed, or its temporarily unavailable.</p>      
          <a href=\"";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\" class=\"btn btn-custom\"> Go Home </a>      
      </div>
    </div>          
  </div>    
</section>

  </div>
<div class=\"container\">
    <footer id=\"fh5co-footer\" role=\"contentinfo\">
      <div class=\"row\">
        <div class=\"col-md-3 fh5co-widget\">
          ";
        // line 110
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_1", [])), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-3 col-md-push-1\">
            ";
        // line 113
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_2", [])), "html", null, true);
        echo "
        </div>

        <div class=\"col-md-3 col-md-push-1 fh5co-footer-links\">
          ";
        // line 117
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_3", [])), "html", null, true);
        echo "
        </div>

        <div class=\"col-md-3 fh5co-footer-links\">
          ";
        // line 121
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_4", [])), "html", null, true);
        echo "
        </div>

      </div>

      <div class=\"row copyright\">
        <div class=\"col-md-12 text-center\">
          <p>
            <small class=\"block\">&copy; 2018 YG Architect. All Rights Reserved.</small> 
            <small class=\"block\">Designed by <a href=\"http://freehtml5.co/\" target=\"_blank\">FreeHTML5.co</a> Druapl theme by <a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\">Drupal Developers Studio</a></small>
          </p>
          <p>
            <ul class=\"fh5co-social-icons\">
            ";
        // line 134
        if (($context["facebook"] ?? null)) {
            // line 135
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-twitter\"></i></a></li>
            ";
        }
        // line 136
        echo " 

            ";
        // line 138
        if (($context["twitter"] ?? null)) {
            // line 139
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-facebook\"></i></a></li>
            ";
        }
        // line 140
        echo " 

            ";
        // line 142
        if (($context["linkedin"] ?? null)) {
            // line 143
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-linkedin\"></i></a></li>
            ";
        }
        // line 145
        echo "
            ";
        // line 146
        if (($context["dribbble"] ?? null)) {
            // line 147
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dribbble"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-dribbble\"></i></a></li>
            ";
        }
        // line 149
        echo "            </ul>
          </p>
        </div>
      </div>
    </footer>
  </div><!-- END container -->

</div>


<div class=\"gototop js-top\">
    <a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up2\"></i></a>
  </div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_architect/templates/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 149,  196 => 147,  194 => 146,  191 => 145,  185 => 143,  183 => 142,  179 => 140,  173 => 139,  171 => 138,  167 => 136,  161 => 135,  159 => 134,  143 => 121,  136 => 117,  129 => 113,  123 => 110,  109 => 99,  97 => 89,  89 => 83,  73 => 70,  66 => 68,  55 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_architect/templates/page--404.html.twig", "/home/username/Projects/bildergalerie/web/themes/contrib/yg_architect/templates/page--404.html.twig");
    }
}
