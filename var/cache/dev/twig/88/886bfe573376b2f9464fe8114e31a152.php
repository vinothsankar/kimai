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

/* @theme/components/actions.html.twig */
class __TwigTemplate_0866ed81316cd6b7907cdc3a74373781 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/components/actions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/components/actions.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_actions($actions = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "actions" => $actions,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "actions"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "actions"));

            // line 2
            $macros["macro"] = $this->loadTemplate("@Tabler/components/button.html.twig", "@theme/components/actions.html.twig", 2)->unwrap();
            // line 3
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 3, $this->source); })())) >= 1)) {
                // line 4
                $context["class"] = "btn-sm";
                // line 5
                $context["translationDomain"] = "messages";
                // line 6
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "translationDomain", [], "any", true, true, false, 6)) {
                    // line 7
                    $context["translationDomain"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })()), "translationDomain", [], "any", false, false, false, 7);
                }
                // line 9
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", true, true, false, 9)) {
                    // line 10
                    $context["class"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 10, $this->source); })()), "class", [], "any", false, false, false, 10);
                }
                // line 12
                $context["trash"] = null;
                // line 13
                $context["divider"] = false;
                // line 14
                yield "<div class=\"dropdown\">
            <a href=\"#\" class=\"link-secondary ";
                // line 15
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["tabler_bundle"]) || array_key_exists("tabler_bundle", $context) ? $context["tabler_bundle"] : (function () { throw new RuntimeError('Variable "tabler_bundle" does not exist.', 15, $this->source); })()), "isDarkMode", [], "method", false, false, false, 15)) {
                    yield "btn-dark";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 15, $this->source); })()), "html", null, true);
                yield "\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions", [], "TablerBundle"), "html", null, true);
                yield "\">
                <i class=\"";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 16), "fas fa-ellipsis-h")) : ("fas fa-ellipsis-h")), "html", null, true);
                yield "\"></i>
            </a>
            <div class=\"dropdown-menu dropdown-menu-end\" data-popper-placement=\"bottom-end\">";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 19, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["icon"] => $context["values"]) {
                    // line 20
                    if ((CoreExtension::inFilter("divider", $context["icon"]) && (null === $context["values"]))) {
                        // line 21
                        if (( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 21) && ((isset($context["divider"]) || array_key_exists("divider", $context) ? $context["divider"] : (function () { throw new RuntimeError('Variable "divider" does not exist.', 21, $this->source); })()) === false))) {
                            // line 22
                            yield "<hr class=\"dropdown-divider\" />";
                        }
                        // line 24
                        $context["divider"] = true;
                    } else {
                        // line 26
                        if (is_iterable($context["values"])) {
                            // line 27
                            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["values"], "title", [], "array", true, true, false, 27)) {
                                // line 28
                                $context["values"] = Twig\Extension\CoreExtension::merge($context["values"], ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["icon"], [], (isset($context["translationDomain"]) || array_key_exists("translationDomain", $context) ? $context["translationDomain"] : (function () { throw new RuntimeError('Variable "translationDomain" does not exist.', 28, $this->source); })()))]);
                            }
                        } else {
                            // line 31
                            $context["values"] = ["url" => $context["values"], "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["icon"], [], (isset($context["translationDomain"]) || array_key_exists("translationDomain", $context) ? $context["translationDomain"] : (function () { throw new RuntimeError('Variable "translationDomain" does not exist.', 31, $this->source); })()))];
                        }
                        // line 33
                        if (($context["icon"] == "trash")) {
                            // line 34
                            $context["trash"] = $context["values"];
                        } else {
                            // line 36
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["values"], "children", [], "any", true, true, false, 36)) {
                                // line 37
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["values"], "title", [], "any", true, true, false, 37) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "title", [], "any", false, false, false, 37)))) {
                                    // line 38
                                    yield "<div class=\"dropend\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\">
                                            ";
                                    // line 40
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "title", [], "any", false, false, false, 40)), "html", null, true);
                                    yield "
                                        </a>
                                        <div class=\"dropdown-menu\">";
                                    // line 43
                                    $context['_parent'] = $context;
                                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "children", [], "any", false, false, false, 43));
                                    foreach ($context['_seq'] as $context["childIcon"] => $context["childValues"]) {
                                        // line 44
                                        yield $macros["macro"]->getTemplateForMacro("macro_button", $context, 44, $this->getSourceContext())->macro_button(...[false, Twig\Extension\CoreExtension::merge($context["childValues"], ["icon" => false, "class" => ((CoreExtension::getAttribute($this->env, $this->source, $context["childValues"], "class", [], "any", true, true, false, 44)) ? ((CoreExtension::getAttribute($this->env, $this->source, $context["childValues"], "class", [], "any", false, false, false, 44) . " dropdown-item")) : ("dropdown-item"))]), false]);
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['childIcon'], $context['childValues'], $context['_parent']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 46
                                    yield "</div>
                                    </div>";
                                } else {
                                    // line 49
                                    if (((isset($context["divider"]) || array_key_exists("divider", $context) ? $context["divider"] : (function () { throw new RuntimeError('Variable "divider" does not exist.', 49, $this->source); })()) === false)) {
                                        yield "<hr class=\"dropdown-divider\" />";
                                    }
                                    // line 50
                                    $context['_parent'] = $context;
                                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["values"], "children", [], "any", false, false, false, 50));
                                    foreach ($context['_seq'] as $context["childIcon"] => $context["childValues"]) {
                                        // line 51
                                        yield $macros["macro"]->getTemplateForMacro("macro_button", $context, 51, $this->getSourceContext())->macro_button(...[false, Twig\Extension\CoreExtension::merge($context["childValues"], ["icon" => false, "class" => ((CoreExtension::getAttribute($this->env, $this->source, $context["childValues"], "class", [], "any", true, true, false, 51)) ? ((CoreExtension::getAttribute($this->env, $this->source, $context["childValues"], "class", [], "any", false, false, false, 51) . " dropdown-item")) : ("dropdown-item"))]), false]);
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['childIcon'], $context['childValues'], $context['_parent']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 53
                                    yield "<hr class=\"dropdown-divider\" />";
                                }
                                // line 55
                                $context["divider"] = true;
                            } else {
                                // line 57
                                $context["divider"] = false;
                                // line 58
                                yield $macros["macro"]->getTemplateForMacro("macro_button", $context, 58, $this->getSourceContext())->macro_button(...[false, Twig\Extension\CoreExtension::merge($context["values"], ["icon" => false, "class" => ((CoreExtension::getAttribute($this->env, $this->source, $context["values"], "class", [], "any", true, true, false, 58)) ? ((CoreExtension::getAttribute($this->env, $this->source, $context["values"], "class", [], "any", false, false, false, 58) . " dropdown-item")) : ("dropdown-item"))]), false]);
                            }
                        }
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['icon'], $context['values'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                if ( !(null === (isset($context["trash"]) || array_key_exists("trash", $context) ? $context["trash"] : (function () { throw new RuntimeError('Variable "trash" does not exist.', 63, $this->source); })()))) {
                    // line 64
                    if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 64, $this->source); })())) > 1) && ((isset($context["divider"]) || array_key_exists("divider", $context) ? $context["divider"] : (function () { throw new RuntimeError('Variable "divider" does not exist.', 64, $this->source); })()) === false))) {
                        // line 65
                        yield "<hr class=\"dropdown-divider\" />";
                    }
                    // line 67
                    yield $macros["macro"]->getTemplateForMacro("macro_button", $context, 67, $this->getSourceContext())->macro_button(...[false, Twig\Extension\CoreExtension::merge((isset($context["trash"]) || array_key_exists("trash", $context) ? $context["trash"] : (function () { throw new RuntimeError('Variable "trash" does not exist.', 67, $this->source); })()), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["trash"] ?? null), "class", [], "any", true, true, false, 67)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["trash"]) || array_key_exists("trash", $context) ? $context["trash"] : (function () { throw new RuntimeError('Variable "trash" does not exist.', 67, $this->source); })()), "class", [], "any", false, false, false, 67) . " text-danger dropdown-item")) : ("dropdown-item"))]), false]);
                }
                // line 69
                yield "</div>
        </div>";
            }
            
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
        return "@theme/components/actions.html.twig";
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
        return array (  235 => 69,  232 => 67,  229 => 65,  227 => 64,  225 => 63,  208 => 58,  206 => 57,  203 => 55,  200 => 53,  194 => 51,  190 => 50,  186 => 49,  182 => 46,  176 => 44,  172 => 43,  167 => 40,  163 => 38,  161 => 37,  159 => 36,  156 => 34,  154 => 33,  151 => 31,  147 => 28,  145 => 27,  143 => 26,  140 => 24,  137 => 22,  135 => 21,  133 => 20,  116 => 19,  111 => 16,  101 => 15,  98 => 14,  96 => 13,  94 => 12,  91 => 10,  89 => 9,  86 => 7,  84 => 6,  82 => 5,  80 => 4,  78 => 3,  76 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro actions(actions, options) -%}
    {%- import '@Tabler/components/button.html.twig' as macro -%}
    {%- if actions|length >= 1 -%}
        {%- set class = 'btn-sm' -%}
        {%- set translationDomain = 'messages' -%}
        {%- if options.translationDomain is defined -%}
            {%- set translationDomain = options.translationDomain -%}
        {%- endif -%}
        {%- if options.class is defined -%}
            {%- set class = options.class -%}
        {%- endif -%}
        {%- set trash = null -%}
        {%- set divider = false -%}
        <div class=\"dropdown\">
            <a href=\"#\" class=\"link-secondary {% if tabler_bundle.isDarkMode() %}btn-dark{% endif%} {{ class }}\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\" aria-label=\"{{ 'Actions'|trans({}, 'TablerBundle') }}\">
                <i class=\"{{ options.icon|default('fas fa-ellipsis-h') }}\"></i>
            </a>
            <div class=\"dropdown-menu dropdown-menu-end\" data-popper-placement=\"bottom-end\">
                {%- for icon,values in actions -%}
                    {%- if 'divider' in icon and values is null -%}
                        {%- if not loop.last and divider is same as (false) -%}
                            <hr class=\"dropdown-divider\" />
                        {%- endif -%}
                        {%- set divider = true -%}
                    {%- else -%}
                        {%- if values is iterable -%}
                            {%- if values['title'] is not defined -%}
                                {%- set values = values|merge({'title': icon|trans({}, translationDomain)}) -%}
                            {%- endif -%}
                        {%- else -%}
                            {%- set values = {'url': values, 'title': icon|trans({}, translationDomain)} -%}
                        {%- endif -%}
                        {%- if icon == 'trash' -%}
                            {%- set trash = values -%}
                        {%- else -%}
                            {%- if values.children is defined -%}
                                {%- if values.title is defined and values.title is not empty -%}
                                    <div class=\"dropend\">
                                        <a class=\"dropdown-item dropdown-toggle\" href=\"#\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\">
                                            {{ values.title|trans }}
                                        </a>
                                        <div class=\"dropdown-menu\">
                                            {%- for childIcon, childValues in values.children -%}
                                                {{- macro.button(false, childValues|merge({icon: false, class: childValues.class is defined ? childValues.class ~ ' dropdown-item' : 'dropdown-item'}), false) -}}
                                            {%- endfor -%}
                                        </div>
                                    </div>
                                {%- else -%}
                                    {%- if divider is same as (false) %}<hr class=\"dropdown-divider\" />{% endif -%}
                                    {%- for childIcon, childValues in values.children -%}
                                        {{- macro.button(false, childValues|merge({icon: false, class: childValues.class is defined ? childValues.class ~ ' dropdown-item' : 'dropdown-item'}), false) -}}
                                    {%- endfor -%}
                                    <hr class=\"dropdown-divider\" />
                                {%- endif -%}
                                {%- set divider = true -%}
                            {%- else -%}
                                {%- set divider = false -%}
                                {{- macro.button(false, values|merge({icon: false, class: values.class is defined ? values.class ~ ' dropdown-item' : 'dropdown-item'}), false) -}}
                            {%- endif -%}
                        {%- endif -%}
                    {%- endif -%}
                {%- endfor -%}
                {%- if trash is not null -%}
                    {%- if actions|length > 1 and divider is same as (false) -%}
                        <hr class=\"dropdown-divider\" />
                    {%- endif -%}
                    {{- macro.button(false, trash|merge({class: trash.class is defined ? trash.class ~ ' text-danger dropdown-item' : 'dropdown-item'}), false) -}}
                {%- endif -%}
            </div>
        </div>
    {%- endif -%}
{%- endmacro %}
", "@theme/components/actions.html.twig", "C:\\wamp64\\www\\kimai\\vendor\\kevinpapst\\tabler-bundle\\templates\\components\\actions.html.twig");
    }
}
