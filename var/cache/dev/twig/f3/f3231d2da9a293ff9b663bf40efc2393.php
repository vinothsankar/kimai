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

/* @theme/components/status.html.twig */
class __TwigTemplate_5929f2ed07b7a6b187880ea3351a51e3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/components/status.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/components/status.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_status($text = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "status"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "status"));

            // line 2
            yield "    ";
            $macros["utils"] = $this->loadTemplate("@Tabler/includes/utils.html.twig", "@theme/components/status.html.twig", 2)->unwrap();
            // line 3
            yield "    ";
            $macros["_v0"] = $this->loadTemplate("@Tabler/components/status_dot.html.twig", "@theme/components/status.html.twig", 3)->unwrap();
            // line 4
            yield "
    ";
            // line 5
            $context["_color"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "color", [], "any", false, false, false, 5)) : ("green"));
            // line 6
            yield "    ";
            $context["_animated"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "animated", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "animated", [], "any", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "animated", [], "any", false, false, false, 6)) : (true)) === true);
            // line 7
            yield "    ";
            $context["_lite"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "lite", [], "any", true, true, false, 7) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "lite", [], "any", false, false, false, 7)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "lite", [], "any", false, false, false, 7)) : (false)) === true);
            // line 8
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "with_dot", [], "any", true, true, false, 8)) {
                // line 9
                yield "        ";
                trigger_deprecation('', '', "with_dot option is deprecated, use withDot option instead!"." in \"@theme/components/status.html.twig\" at line 9.");
                // line 10
                yield "        ";
                $context["_withDot"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 10, $this->source); })()), "with_dot", [], "any", false, false, false, 10) === true);
                // line 11
                yield "    ";
            } else {
                // line 12
                yield "        ";
                $context["_withDot"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "withDot", [], "any", true, true, false, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "withDot", [], "any", false, false, false, 12)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "withDot", [], "any", false, false, false, 12)) : (false)) === true);
                // line 13
                yield "    ";
            }
            // line 14
            yield "
    ";
            // line 15
            $context["_extraClass"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "extraClass", [], "any", true, true, false, 15) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "extraClass", [], "any", false, false, false, 15)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "extraClass", [], "any", false, false, false, 15)) : (""));
            // line 16
            yield "    ";
            $context["_attr"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "attr", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "attr", [], "any", false, false, false, 16)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "attr", [], "any", false, false, false, 16)) : ([]));
            // line 17
            yield "
    <span
        class=\"status status-";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_color"]) || array_key_exists("_color", $context) ? $context["_color"] : (function () { throw new RuntimeError('Variable "_color" does not exist.', 19, $this->source); })()), "html", null, true);
            yield " ";
            if ((isset($context["_lite"]) || array_key_exists("_lite", $context) ? $context["_lite"] : (function () { throw new RuntimeError('Variable "_lite" does not exist.', 19, $this->source); })())) {
                yield "status-lite";
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_extraClass"]) || array_key_exists("_extraClass", $context) ? $context["_extraClass"] : (function () { throw new RuntimeError('Variable "_extraClass" does not exist.', 19, $this->source); })()), "html", null, true);
            yield "\"
        ";
            // line 20
            yield $macros["utils"]->getTemplateForMacro("macro_attr_to_html", $context, 20, $this->getSourceContext())->macro_attr_to_html(...[(isset($context["_attr"]) || array_key_exists("_attr", $context) ? $context["_attr"] : (function () { throw new RuntimeError('Variable "_attr" does not exist.', 20, $this->source); })())]);
            yield "
    >
        ";
            // line 22
            if ((isset($context["_withDot"]) || array_key_exists("_withDot", $context) ? $context["_withDot"] : (function () { throw new RuntimeError('Variable "_withDot" does not exist.', 22, $this->source); })())) {
                // line 23
                yield "            ";
                yield $macros["_v0"]->getTemplateForMacro("macro_status_dot", $context, 23, $this->getSourceContext())->macro_status_dot(...[["color" => (isset($context["_color"]) || array_key_exists("_color", $context) ? $context["_color"] : (function () { throw new RuntimeError('Variable "_color" does not exist.', 23, $this->source); })()), "animated" => (isset($context["_animated"]) || array_key_exists("_animated", $context) ? $context["_animated"] : (function () { throw new RuntimeError('Variable "_animated" does not exist.', 23, $this->source); })())]]);
                yield "
        ";
            }
            // line 25
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 25, $this->source); })()), "html", null, true);
            yield "
    </span>
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
        return "@theme/components/status.html.twig";
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
        return array (  146 => 25,  140 => 23,  138 => 22,  133 => 20,  123 => 19,  119 => 17,  116 => 16,  114 => 15,  111 => 14,  108 => 13,  105 => 12,  102 => 11,  99 => 10,  96 => 9,  93 => 8,  90 => 7,  87 => 6,  85 => 5,  82 => 4,  79 => 3,  76 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro status(text, options) %}
    {% import '@Tabler/includes/utils.html.twig' as utils %}
    {% from '@Tabler/components/status_dot.html.twig' import status_dot %}

    {% set _color = options.color ?? 'green' %}
    {% set _animated = (options.animated ?? true) is same as true %}
    {% set _lite = (options.lite ?? false) is same as true %}
    {% if options.with_dot is defined %}
        {% deprecated 'with_dot option is deprecated, use withDot option instead!' %}
        {% set _withDot = options.with_dot is same as true %}
    {% else %}
        {% set _withDot = (options.withDot ?? false) is same as true %}
    {% endif %}

    {% set _extraClass = options.extraClass ?? '' %}
    {% set _attr = options.attr ?? {} %}

    <span
        class=\"status status-{{ _color }} {% if _lite %}status-lite{% endif %} {{ _extraClass }}\"
        {{ utils.attr_to_html(_attr) }}
    >
        {% if _withDot %}
            {{ status_dot({color: _color, animated : _animated}) }}
        {% endif %}
        {{ text }}
    </span>
{% endmacro %}
", "@theme/components/status.html.twig", "C:\\wamp64\\www\\kimai\\vendor\\kevinpapst\\tabler-bundle\\templates\\components\\status.html.twig");
    }
}
