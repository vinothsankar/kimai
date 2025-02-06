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

/* @theme/components/alert.html.twig */
class __TwigTemplate_110293e2ad1117b772b5dcb567d6f069 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/components/alert.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/components/alert.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_alert($options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            // line 2
            yield "    ";
            $macros["utils"] = $this->loadTemplate("@Tabler/includes/utils.html.twig", "@theme/components/alert.html.twig", 2)->unwrap();
            // line 3
            yield "
    ";
            // line 5
            yield "    ";
            $context["_title"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "title", [], "any", true, true, false, 5) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "title", [], "any", false, false, false, 5)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "title", [], "any", false, false, false, 5)) : (null));
            // line 6
            yield "    ";
            $context["_description"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "description", [], "any", true, true, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "description", [], "any", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "description", [], "any", false, false, false, 6)) : (null));
            // line 7
            yield "    ";
            $context["_icon"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", true, true, false, 7) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 7)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 7)) : (null));
            // line 8
            yield "
    ";
            // line 10
            yield "    ";
            $context["_type"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 10)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 10)) : ("danger"));
            // line 11
            yield "    ";
            $context["_dismissible"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "dismissible", [], "any", true, true, false, 11) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "dismissible", [], "any", false, false, false, 11)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "dismissible", [], "any", false, false, false, 11)) : (false)) === true);
            // line 12
            yield "    ";
            $context["_important"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "important", [], "any", true, true, false, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "important", [], "any", false, false, false, 12)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "important", [], "any", false, false, false, 12)) : (false)) === true);
            // line 13
            yield "
    ";
            // line 14
            $context["_id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 14) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 14)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 14)) : (null));
            // line 15
            yield "    ";
            $context["_attr"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "attr", [], "any", true, true, false, 15) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "attr", [], "any", false, false, false, 15)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "attr", [], "any", false, false, false, 15)) : ([]));
            // line 16
            yield "    ";
            $context["_class"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", false, false, false, 16)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", false, false, false, 16)) : (""));
            // line 17
            yield "    ";
            $context["_raw"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "raw", [], "any", true, true, false, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "raw", [], "any", false, false, false, 17)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "raw", [], "any", false, false, false, 17)) : (false)) === true);
            // line 18
            yield "
    ";
            // line 19
            if (((Twig\Extension\CoreExtension::testEmpty((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new RuntimeError('Variable "_title" does not exist.', 19, $this->source); })())) || Twig\Extension\CoreExtension::testEmpty((isset($context["_description"]) || array_key_exists("_description", $context) ? $context["_description"] : (function () { throw new RuntimeError('Variable "_description" does not exist.', 19, $this->source); })()))) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "important", [], "any", true, true, false, 19))) {
                // line 20
                yield "        ";
                trigger_deprecation('', '', "Using important alert without setting the 'important' option is deprecated, set option to true instead."." in \"@theme/components/alert.html.twig\" at line 20.");
                // line 21
                yield "        ";
                $context["_important"] = true;
                // line 22
                yield "    ";
            }
            // line 23
            yield "
    <div
            ";
            // line 25
            if ((isset($context["_id"]) || array_key_exists("_id", $context) ? $context["_id"] : (function () { throw new RuntimeError('Variable "_id" does not exist.', 25, $this->source); })())) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_id"]) || array_key_exists("_id", $context) ? $context["_id"] : (function () { throw new RuntimeError('Variable "_id" does not exist.', 25, $this->source); })()), "html", null, true);
                yield "\"";
            }
            // line 26
            yield "            class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_type"]) || array_key_exists("_type", $context) ? $context["_type"] : (function () { throw new RuntimeError('Variable "_type" does not exist.', 26, $this->source); })()), "html", null, true);
            yield " ";
            if ((isset($context["_dismissible"]) || array_key_exists("_dismissible", $context) ? $context["_dismissible"] : (function () { throw new RuntimeError('Variable "_dismissible" does not exist.', 26, $this->source); })())) {
                yield "alert-dismissible";
            }
            yield " ";
            if ((isset($context["_important"]) || array_key_exists("_important", $context) ? $context["_important"] : (function () { throw new RuntimeError('Variable "_important" does not exist.', 26, $this->source); })())) {
                yield "alert-important";
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_class"]) || array_key_exists("_class", $context) ? $context["_class"] : (function () { throw new RuntimeError('Variable "_class" does not exist.', 26, $this->source); })()), "html", null, true);
            yield "\"
            role=\"alert\"
            ";
            // line 28
            yield $macros["utils"]->getTemplateForMacro("macro_attr_to_html", $context, 28, $this->getSourceContext())->macro_attr_to_html(...[(isset($context["_attr"]) || array_key_exists("_attr", $context) ? $context["_attr"] : (function () { throw new RuntimeError('Variable "_attr" does not exist.', 28, $this->source); })())]);
            yield "
    >
        <div class=\"d-flex\">
            ";
            // line 31
            if ((isset($context["_icon"]) || array_key_exists("_icon", $context) ? $context["_icon"] : (function () { throw new RuntimeError('Variable "_icon" does not exist.', 31, $this->source); })())) {
                // line 32
                yield "                <div class=\"alert-icon\">
                    ";
                // line 33
                yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon((isset($context["_icon"]) || array_key_exists("_icon", $context) ? $context["_icon"] : (function () { throw new RuntimeError('Variable "_icon" does not exist.', 33, $this->source); })()), true);
                yield "
                </div>
            ";
            }
            // line 36
            yield "
            ";
            // line 37
            if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new RuntimeError('Variable "_title" does not exist.', 37, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["_description"]) || array_key_exists("_description", $context) ? $context["_description"] : (function () { throw new RuntimeError('Variable "_description" does not exist.', 37, $this->source); })())))) {
                // line 38
                yield "                <div>
                    ";
                // line 39
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new RuntimeError('Variable "_title" does not exist.', 39, $this->source); })()))) {
                    // line 40
                    yield "                        <h4 class=\"";
                    if ( !(isset($context["_important"]) || array_key_exists("_important", $context) ? $context["_important"] : (function () { throw new RuntimeError('Variable "_important" does not exist.', 40, $this->source); })())) {
                        yield "alert-title";
                    }
                    yield " ";
                    yield (( !Twig\Extension\CoreExtension::testEmpty((isset($context["_description"]) || array_key_exists("_description", $context) ? $context["_description"] : (function () { throw new RuntimeError('Variable "_description" does not exist.', 40, $this->source); })()))) ? ("mb-1") : ("mb-0"));
                    yield "\">";
                    yield (((isset($context["_raw"]) || array_key_exists("_raw", $context) ? $context["_raw"] : (function () { throw new RuntimeError('Variable "_raw" does not exist.', 40, $this->source); })())) ? ((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new RuntimeError('Variable "_title" does not exist.', 40, $this->source); })())) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new RuntimeError('Variable "_title" does not exist.', 40, $this->source); })()), "html", null, true)));
                    yield "</h4>
                    ";
                }
                // line 42
                yield "                    ";
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["_description"]) || array_key_exists("_description", $context) ? $context["_description"] : (function () { throw new RuntimeError('Variable "_description" does not exist.', 42, $this->source); })()))) {
                    // line 43
                    yield "                        ";
                    if ((isset($context["_important"]) || array_key_exists("_important", $context) ? $context["_important"] : (function () { throw new RuntimeError('Variable "_important" does not exist.', 43, $this->source); })())) {
                        // line 44
                        yield "                            <p class=\"m-0\">";
                        yield (((isset($context["_raw"]) || array_key_exists("_raw", $context) ? $context["_raw"] : (function () { throw new RuntimeError('Variable "_raw" does not exist.', 44, $this->source); })())) ? ((isset($context["_description"]) || array_key_exists("_description", $context) ? $context["_description"] : (function () { throw new RuntimeError('Variable "_description" does not exist.', 44, $this->source); })())) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_description"]) || array_key_exists("_description", $context) ? $context["_description"] : (function () { throw new RuntimeError('Variable "_description" does not exist.', 44, $this->source); })()), "html", null, true)));
                        yield "</p>
                        ";
                    } else {
                        // line 46
                        yield "                            <div class=\"text-body-secondary\">";
                        yield (((isset($context["_raw"]) || array_key_exists("_raw", $context) ? $context["_raw"] : (function () { throw new RuntimeError('Variable "_raw" does not exist.', 46, $this->source); })())) ? ((isset($context["_description"]) || array_key_exists("_description", $context) ? $context["_description"] : (function () { throw new RuntimeError('Variable "_description" does not exist.', 46, $this->source); })())) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_description"]) || array_key_exists("_description", $context) ? $context["_description"] : (function () { throw new RuntimeError('Variable "_description" does not exist.', 46, $this->source); })()), "html", null, true)));
                        yield "</div>
                        ";
                    }
                    // line 48
                    yield "                    ";
                }
                // line 49
                yield "                </div>
            ";
            }
            // line 51
            yield "        </div>

        ";
            // line 53
            if ((isset($context["_dismissible"]) || array_key_exists("_dismissible", $context) ? $context["_dismissible"] : (function () { throw new RuntimeError('Variable "_dismissible" does not exist.', 53, $this->source); })())) {
                yield "<a class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"close\"></a>";
            }
            // line 54
            yield "    </div>
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
        return "@theme/components/alert.html.twig";
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
        return array (  228 => 54,  224 => 53,  220 => 51,  216 => 49,  213 => 48,  207 => 46,  201 => 44,  198 => 43,  195 => 42,  183 => 40,  181 => 39,  178 => 38,  176 => 37,  173 => 36,  167 => 33,  164 => 32,  162 => 31,  156 => 28,  140 => 26,  134 => 25,  130 => 23,  127 => 22,  124 => 21,  121 => 20,  119 => 19,  116 => 18,  113 => 17,  110 => 16,  107 => 15,  105 => 14,  102 => 13,  99 => 12,  96 => 11,  93 => 10,  90 => 8,  87 => 7,  84 => 6,  81 => 5,  78 => 3,  75 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro alert(options) %}
    {% import '@Tabler/includes/utils.html.twig' as utils %}

    {# Content #}
    {% set _title = options.title ?? null %}
    {% set _description = options.description ?? null %}
    {% set _icon = options.icon ?? null %}

    {# Configuration #}
    {% set _type = options.type ?? 'danger' %}
    {% set _dismissible = (options.dismissible ?? false) is same as (true) %}
    {% set _important = (options.important ?? false) is same as (true) %}

    {% set _id = options.id ?? null %}
    {% set _attr = options.attr ?? {} %}
    {% set _class = options.class ?? '' %}
    {% set _raw = (options.raw ?? false) is same as (true) %}

    {% if (_title is empty or _description is empty) and options.important is not defined %}
        {% deprecated \"Using important alert without setting the 'important' option is deprecated, set option to true instead.\" %}
        {% set _important = true %}
    {% endif %}

    <div
            {% if _id %}id=\"{{ _id }}\"{% endif %}
            class=\"alert alert-{{ _type }} {% if _dismissible %}alert-dismissible{% endif %} {% if _important %}alert-important{% endif %} {{ _class }}\"
            role=\"alert\"
            {{ utils.attr_to_html(_attr) }}
    >
        <div class=\"d-flex\">
            {% if _icon %}
                <div class=\"alert-icon\">
                    {{ tabler_icon(_icon, true) }}
                </div>
            {% endif %}

            {% if _title is not empty or _description is not empty %}
                <div>
                    {% if _title is not empty %}
                        <h4 class=\"{% if not _important %}alert-title{% endif %} {{ _description is not empty ? 'mb-1' : 'mb-0' }}\">{{ _raw ? _title|raw : _title }}</h4>
                    {% endif %}
                    {% if _description is not empty %}
                        {% if _important %}
                            <p class=\"m-0\">{{ _raw ? _description|raw : _description }}</p>
                        {% else %}
                            <div class=\"text-body-secondary\">{{ _raw ? _description|raw : _description }}</div>
                        {% endif %}
                    {% endif %}
                </div>
            {% endif %}
        </div>

        {% if _dismissible %}<a class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"close\"></a>{% endif %}
    </div>
{% endmacro %}
", "@theme/components/alert.html.twig", "C:\\wamp64\\www\\kimai\\vendor\\kevinpapst\\tabler-bundle\\templates\\components\\alert.html.twig");
    }
}
