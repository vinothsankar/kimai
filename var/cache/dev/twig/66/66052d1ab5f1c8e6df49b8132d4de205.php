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

/* @Tabler/components/status_dot.html.twig */
class __TwigTemplate_5eea7646794f77f596e68d85b9351c8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/components/status_dot.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Tabler/components/status_dot.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_status_dot($options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "status_dot"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "status_dot"));

            // line 2
            yield "    ";
            $macros["utils"] = $this->loadTemplate("@Tabler/includes/utils.html.twig", "@Tabler/components/status_dot.html.twig", 2)->unwrap();
            // line 3
            yield "
    ";
            // line 4
            $context["_color"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", true, true, false, 4) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", false, false, false, 4)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", false, false, false, 4)) : ("green"));
            // line 5
            yield "    ";
            $context["_animated"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "animated", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "animated", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "animated", [], "any", false, false, false, 5)) : (true)) === true);
            // line 6
            yield "    ";
            $context["_extraClass"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "extraClass", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "extraClass", [], "any", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "extraClass", [], "any", false, false, false, 6)) : (""));
            // line 7
            yield "    ";
            $context["_attr"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "attr", [], "any", true, true, false, 7) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "attr", [], "any", false, false, false, 7)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "attr", [], "any", false, false, false, 7)) : ([]));
            // line 8
            yield "
    <span
        class=\"status-dot ";
            // line 10
            if ((isset($context["_animated"]) || array_key_exists("_animated", $context) ? $context["_animated"] : (function () { throw new RuntimeError('Variable "_animated" does not exist.', 10, $this->source); })())) {
                yield "status-dot-animated";
            }
            yield " ";
            if ( !(null === (isset($context["_color"]) || array_key_exists("_color", $context) ? $context["_color"] : (function () { throw new RuntimeError('Variable "_color" does not exist.', 10, $this->source); })()))) {
                yield "status-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_color"]) || array_key_exists("_color", $context) ? $context["_color"] : (function () { throw new RuntimeError('Variable "_color" does not exist.', 10, $this->source); })()), "html", null, true);
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_extraClass"]) || array_key_exists("_extraClass", $context) ? $context["_extraClass"] : (function () { throw new RuntimeError('Variable "_extraClass" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "\"
        ";
            // line 11
            yield $macros["utils"]->getTemplateForMacro("macro_attr_to_html", $context, 11, $this->getSourceContext())->macro_attr_to_html(...[(isset($context["_attr"]) || array_key_exists("_attr", $context) ? $context["_attr"] : (function () { throw new RuntimeError('Variable "_attr" does not exist.', 11, $this->source); })())]);
            yield "
    ></span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Tabler/components/status_dot.html.twig";
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
        return array (  109 => 11,  96 => 10,  92 => 8,  89 => 7,  86 => 6,  83 => 5,  81 => 4,  78 => 3,  75 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro status_dot(options) %}
    {% import '@Tabler/includes/utils.html.twig' as utils %}

    {% set _color = options.color ?? 'green' %}
    {% set _animated = (options.animated ?? true) is same as true %}
    {% set _extraClass = options.extraClass ?? '' %}
    {% set _attr = options.attr ?? {} %}

    <span
        class=\"status-dot {% if _animated %}status-dot-animated{% endif %} {% if _color is not null %}status-{{ _color }}{% endif %} {{ _extraClass }}\"
        {{ utils.attr_to_html(_attr) }}
    ></span>
{% endmacro %}
", "@Tabler/components/status_dot.html.twig", "C:\\wamp64\\www\\kimai\\vendor\\kevinpapst\\tabler-bundle\\templates\\components\\status_dot.html.twig");
    }
}
