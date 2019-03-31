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

/* modules/contrib/likebtn/templates/like-page.html.twig */
class __TwigTemplate_266c9a186b0e5df104c7f075fc2b81dae59b6cadcb3b6378c34c7da0e219afe8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2, "for" => 5];
        $filters = ["t" => 26];
        $functions = ["path" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t'],
                ['path']
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
        echo "<table>
  ";
        // line 2
        if (($context["header"] ?? null)) {
            // line 3
            echo "    <thead>
      <tr>
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["header"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 6
                echo "          <td>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["cell"]), "html", null, true);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "      </tr>
    </thead>
  ";
        }
        // line 11
        echo "
  ";
        // line 12
        if (($context["rows"] ?? null)) {
            // line 13
            echo "    <tbody>
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 15
                echo "      <tr>
        <td>";
                // line 16
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "button", [])), "html", null, true);
                echo "</td>
        <td>";
                // line 17
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "likes", [])), "html", null, true);
                echo "</td>
        <td>";
                // line 18
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "dislikes", [])), "html", null, true);
                echo "</td>
        <td>";
                // line 19
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "likes_minus_dislikes", [])), "html", null, true);
                echo "</td>
      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    </tbody>
  ";
        }
        // line 24
        echo "</table>
<p>
  ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total likes minus dislikes (vote results):"));
        echo " <strong> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["total_likes_minus_dislikes"] ?? null)), "html", null, true);
        echo " </strong>
</p>
<p> ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("If you don't see information on likes:"));
        echo " </p>
<ul>
  <li> ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Make sure you have entered information correctly in"));
        echo "
    <a href=\"";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("likebtn.admin"));
        echo "\"> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Auto-synching likes into local database"));
        echo " (PRO, VIP, ULTRA) </a>
  </li>
  <li> ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Make sure that PHP curl extension is enabled."));
        echo " </li>
  <li> ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Maybe nobody voted for this content type yet."));
        echo " </li>
  <li> ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Perhaps synchronization has not been launched yet."));
        echo " </li>
</ul>


";
    }

    public function getTemplateName()
    {
        return "modules/contrib/likebtn/templates/like-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 35,  153 => 34,  149 => 33,  142 => 31,  138 => 30,  133 => 28,  126 => 26,  122 => 24,  118 => 22,  109 => 19,  105 => 18,  101 => 17,  97 => 16,  94 => 15,  90 => 14,  87 => 13,  85 => 12,  82 => 11,  77 => 8,  68 => 6,  64 => 5,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/likebtn/templates/like-page.html.twig", "/home/username/Projects/bildergalerie/web/modules/contrib/likebtn/templates/like-page.html.twig");
    }
}
