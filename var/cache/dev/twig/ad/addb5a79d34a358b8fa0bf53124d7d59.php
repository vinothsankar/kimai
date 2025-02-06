<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/logo_login.html.twig */
class __TwigTemplate_c0eb25c96d7cf8f26be30c0221a25e20 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/logo_login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/logo_login.html.twig"));

        // line 1
        $context["logo"] = $this->extensions['App\Twig\Configuration']->get("theme.branding.logo");
        // line 2
        $context["company"] = $this->extensions['App\Twig\Configuration']->get("theme.branding.company");
        // line 3
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 3, $this->source); })()))) {
            // line 4
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 4, $this->source); })()), "html", null, true);
            yield "\" style=\"max-width: 300px;\">
";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(        // line 5
(isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 5, $this->source); })()))) {
            // line 6
            yield "    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "</p>
";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 7
(isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 7, $this->source); })()), "getLogoUrl", [], "method", false, false, false, 7))) {
            // line 8
            yield "    <img alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->generateTitle(), "html", null, true);
            yield "\" style=\"max-width: 150px;\"
         src=\"";
            // line 9
            if (CoreExtension::inFilter("://", CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 9, $this->source); })()), "getLogoUrl", [], "method", false, false, false, 9))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 9, $this->source); })()), "getLogoUrl", [], "method", false, false, false, 9), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 9, $this->source); })()), "getLogoUrl", [], "method", false, false, false, 9)), "html", null, true);
            }
            yield "\">
";
        } else {
            // line 11
            yield "    <p>";
            yield $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->generateTitle("", "<br>");
            yield "</p>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/logo_login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  82 => 11,  73 => 9,  68 => 8,  66 => 7,  61 => 6,  59 => 5,  54 => 4,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set logo = config('theme.branding.logo') %}
{% set company = config('theme.branding.company') %}
{% if logo is not empty %}
    <img src=\"{{ logo }}\" style=\"max-width: 300px;\">
{% elseif company is not empty %}
    <p>{{ company }}</p>
{% elseif tabler_bundle.getLogoUrl() is not empty %}
    <img alt=\"{{ get_title() }}\" style=\"max-width: 150px;\"
         src=\"{% if '://' in tabler_bundle.getLogoUrl() %}{{ tabler_bundle.getLogoUrl() }}{% else %}{{ asset(tabler_bundle.getLogoUrl()) }}{% endif %}\">
{% else %}
    <p>{{ get_title('', '<br>')|raw }}</p>
{% endif %}
", "partials/logo_login.html.twig", "C:\\wamp64\\www\\kimai\\templates\\partials\\logo_login.html.twig");
    }
}
