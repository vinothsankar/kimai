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

/* @Tabler/includes/logo.html.twig */
class __TwigTemplate_fb25ae20237ecaac47eeddde781d4ff1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/includes/logo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/includes/logo.html.twig"));

        // line 1
        yield "<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->getRouteByAlias("tabler_welcome"));
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dashboard.title"), "html", null, true);
        yield "\">
    ";
        // line 2
        $context["logo"] = $this->extensions['App\Twig\Configuration']->get("theme.branding.logo");
        // line 3
        yield "    ";
        $context["company"] = $this->extensions['App\Twig\Configuration']->get("theme.branding.company");
        // line 4
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 4, $this->source); })()))) {
            // line 5
            yield "        <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "</span>
    ";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(        // line 6
(isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 6, $this->source); })()))) {
            // line 7
            yield "        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 7, $this->source); })()), "html", null, true);
            yield "\" class=\"navbar-brand-image\" style=\"max-height:32px\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 7, $this->source); })()), "html", null, true);
            yield "\">
    ";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,         // line 8
(isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 8, $this->source); })()), "getLogoUrl", [], "method", false, false, false, 8))) {
            // line 9
            yield "        <img class=\"navbar-brand-image\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("company", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 9, $this->source); })()), ((Twig\Extension\CoreExtension::constant("\\App\\Constants::SOFTWARE") . " ") . Twig\Extension\CoreExtension::constant("\\App\\Constants::VERSION")))) : (((Twig\Extension\CoreExtension::constant("\\App\\Constants::SOFTWARE") . " ") . Twig\Extension\CoreExtension::constant("\\App\\Constants::VERSION")))), "html", null, true);
            yield "\" width=\"110\" height=\"32\"
                src=\"";
            // line 10
            if (CoreExtension::inFilter("://", CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 10, $this->source); })()), "getLogoUrl", [], "method", false, false, false, 10))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 10, $this->source); })()), "getLogoUrl", [], "method", false, false, false, 10), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 10, $this->source); })()), "getLogoUrl", [], "method", false, false, false, 10)), "html", null, true);
            }
            yield "\">
    ";
        } else {
            // line 12
            yield "        <span>";
            yield $this->env->getRuntime('App\Twig\Runtime\ThemeExtension')->generateTitle();
            yield "</span>
    ";
        }
        // line 14
        yield "</a>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Tabler/includes/logo.html.twig";
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
        return array (  99 => 14,  93 => 12,  84 => 10,  79 => 9,  77 => 8,  70 => 7,  68 => 6,  63 => 5,  60 => 4,  57 => 3,  55 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<a href=\"{{ path('tabler_welcome'|tabler_route) }}\" title=\"{{ 'dashboard.title'|trans }}\">
    {% set logo = config('theme.branding.logo') %}
    {% set company = config('theme.branding.company') %}
    {% if company is not empty %}
        <span>{{ company }}</span>
    {% elseif logo is not empty %}
        <img src=\"{{ logo }}\" class=\"navbar-brand-image\" style=\"max-height:32px\" alt=\"{{ company }}\">
    {% elseif tabler_bundle.getLogoUrl() is not empty %}
        <img class=\"navbar-brand-image\" alt=\"{{ company|default(constant('\\\\App\\\\Constants::SOFTWARE') ~ ' ' ~ constant('\\\\App\\\\Constants::VERSION')) }}\" width=\"110\" height=\"32\"
                src=\"{% if '://' in tabler_bundle.getLogoUrl() %}{{ tabler_bundle.getLogoUrl() }}{% else %}{{ asset(tabler_bundle.getLogoUrl()) }}{% endif %}\">
    {% else %}
        <span>{{ get_title()|raw }}</span>
    {% endif %}
</a>", "@Tabler/includes/logo.html.twig", "C:\\wamp64\\www\\kimai\\templates\\bundles\\TablerBundle\\includes\\logo.html.twig");
    }
}
