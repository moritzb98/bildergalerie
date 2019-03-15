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

/* themes/contrib/yg_architect/templates/page--front.html.twig */
class __TwigTemplate_ded6a4ae9c8ac3df2f636c2eacd2711ce429496c7eee763c805000946c06c2ac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 54];
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
        // line 1
        echo "\t\t
\t<div class=\"fh5co-loader\"></div>
\t
\t<div id=\"page\">

\t<nav class=\"fh5co-nav\" role=\"navigation\">
\t\t<div class=\"container\">
\t\t\t<div class=\"top-menu\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<div id=\"fh5co-logo\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo "<span>.</span></a></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</nav>
\t<div class=\"container\">

\t";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slider", [])), "html", null, true);
        echo "

</div>


\t<div class=\"container\">
\t\t<footer id=\"fh5co-footer\" role=\"contentinfo\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 fh5co-widget\">
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_1", [])), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-md-push-1\">
\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_2", [])), "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 col-md-push-1 fh5co-footer-links\">
\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_3", [])), "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 fh5co-footer-links\">
\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_col_4", [])), "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"row copyright\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<small class=\"block\">&copy; 2018 YG Architect. All Rights Reserved.</small> 
\t\t\t\t\t\t<small class=\"block\">Designed by <a href=\"http://freehtml5.co/\" target=\"_blank\">FreeHTML5.co</a> Druapl theme by <a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\">Drupal Developers Studio</a></small>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<ul class=\"fh5co-social-icons\">
\t\t\t\t\t\t";
        // line 54
        if (($context["facebook"] ?? null)) {
            // line 55
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-twitter\"></i></a></li>
\t\t\t\t\t\t";
        }
        // line 56
        echo "\t

\t\t\t\t\t\t";
        // line 58
        if (($context["twitter"] ?? null)) {
            // line 59
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-facebook\"></i></a></li>
\t\t\t\t\t\t";
        }
        // line 60
        echo "\t

\t\t\t\t\t\t";
        // line 62
        if (($context["linkedin"] ?? null)) {
            // line 63
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-linkedin\"></i></a></li>
\t\t\t\t\t\t";
        }
        // line 65
        echo "
\t\t\t\t\t\t";
        // line 66
        if (($context["dribbble"] ?? null)) {
            // line 67
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["dribbble"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-dribbble\"></i></a></li>
\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div><!-- END container -->

</div>


<div class=\"gototop js-top\">
\t\t<a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up2\"></i></a>
\t</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_architect/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 69,  170 => 67,  168 => 66,  165 => 65,  159 => 63,  157 => 62,  153 => 60,  147 => 59,  145 => 58,  141 => 56,  135 => 55,  133 => 54,  117 => 41,  110 => 37,  103 => 33,  97 => 30,  85 => 21,  74 => 13,  67 => 11,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_architect/templates/page--front.html.twig", "/home/username/Projects/bildergalerie/web/themes/contrib/yg_architect/templates/page--front.html.twig");
    }
}
