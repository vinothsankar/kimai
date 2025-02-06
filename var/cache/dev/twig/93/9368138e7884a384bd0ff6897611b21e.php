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

/* @theme/embeds/card.html.twig */
class __TwigTemplate_a5a79f1901c1db30d3eb3bec957439c1 extends Template
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
            'box_header' => [$this, 'block_box_header'],
            'box_tools' => [$this, 'block_box_tools'],
            'box_body' => [$this, 'block_box_body'],
            'box_footer' => [$this, 'block_box_footer'],
            'box_title' => [$this, 'block_box_title'],
            'box_before' => [$this, 'block_box_before'],
            'box_class' => [$this, 'block_box_class'],
            'box_attributes' => [$this, 'block_box_attributes'],
            'box_header_before' => [$this, 'block_box_header_before'],
            'box_header_class' => [$this, 'block_box_header_class'],
            'box_tools_attributes' => [$this, 'block_box_tools_attributes'],
            'box_header_after' => [$this, 'block_box_header_after'],
            'box_body_before' => [$this, 'block_box_body_before'],
            'box_body_classes' => [$this, 'block_box_body_classes'],
            'box_body_class' => [$this, 'block_box_body_class'],
            'box_body_after' => [$this, 'block_box_body_after'],
            'box_footer_before' => [$this, 'block_box_footer_before'],
            'box_footer_class' => [$this, 'block_box_footer_class'],
            'box_footer_after' => [$this, 'block_box_footer_after'],
            'box_after' => [$this, 'block_box_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/embeds/card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/embeds/card.html.twig"));

        // line 2
        $context["_id"] = ((array_key_exists("id", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })()), null)) : (null));
        // line 3
        $context["_boxtype"] = ($context["boxtype"] ?? null);
        // line 4
        $context["_status_position"] = ($context["status_position"] ?? "top");
        // line 5
        $context["_fullsize"] = ($context["fullsize"] ?? false);
        // line 6
        $context["_margin_bottom"] = ($context["margin_bottom"] ?? 3);
        // line 7
        $context["_collapsed"] = ($context["collapsed"] ?? false);
        // line 8
        $context["_collapsible"] = ($context["collapsible"] ?? (isset($context["_collapsed"]) || array_key_exists("_collapsed", $context) ? $context["_collapsed"] : (function () { throw new RuntimeError('Variable "_collapsed" does not exist.', 8, $this->source); })()));
        // line 9
        $context["_footer_collapsible"] = ($context["footer_collapsible"] ?? true);
        // line 10
        $context["_use_footer"] = ($context["use_footer"] ?? false);
        // line 11
        $context["_use_body"] = ($context["use_body"] ?? true);
        // line 12
        yield "
";
        // line 14
        $context["header"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('box_header', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        $context["tools"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('box_tools', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        $context["body"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('box_body', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        $context["footer"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('box_footer', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        $context["title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield from $this->unwrap()->yieldBlock('box_title', $context, $blocks);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        yield "
";
        // line 20
        $context["_collapsible_class"] = $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->uniqueId("collapse_");
        // line 21
        $context["_hasTitle"] =  !Twig\Extension\CoreExtension::testEmpty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 21, $this->source); })()));
        // line 22
        $context["_hasTools"] =  !Twig\Extension\CoreExtension::testEmpty((isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 22, $this->source); })()));
        // line 23
        $context["_hasHeader"] =  !Twig\Extension\CoreExtension::testEmpty((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 23, $this->source); })()));
        // line 24
        $context["_hasBody"] = ((isset($context["_use_body"]) || array_key_exists("_use_body", $context) ? $context["_use_body"] : (function () { throw new RuntimeError('Variable "_use_body" does not exist.', 24, $this->source); })()) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 24, $this->source); })())));
        // line 25
        $context["_hasFooter"] = ((isset($context["_use_footer"]) || array_key_exists("_use_footer", $context) ? $context["_use_footer"] : (function () { throw new RuntimeError('Variable "_use_footer" does not exist.', 25, $this->source); })()) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 25, $this->source); })())));
        // line 26
        yield "
";
        // line 27
        $macros["button"] = $this->macros["button"] = $this->loadTemplate("@Tabler/components/buttons.html.twig", "@theme/embeds/card.html.twig", 27)->unwrap();
        // line 28
        yield "
";
        // line 29
        yield from $this->unwrap()->yieldBlock('box_before', $context, $blocks);
        // line 31
        yield "<div ";
        if ( !(null === (isset($context["_id"]) || array_key_exists("_id", $context) ? $context["_id"] : (function () { throw new RuntimeError('Variable "_id" does not exist.', 31, $this->source); })()))) {
            yield "id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_id"]) || array_key_exists("_id", $context) ? $context["_id"] : (function () { throw new RuntimeError('Variable "_id" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield " class=\"card ";
        yield from $this->unwrap()->yieldBlock('box_class', $context, $blocks);
        yield " mb-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_margin_bottom"]) || array_key_exists("_margin_bottom", $context) ? $context["_margin_bottom"] : (function () { throw new RuntimeError('Variable "_margin_bottom" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "\" ";
        yield from $this->unwrap()->yieldBlock('box_attributes', $context, $blocks);
        yield ">

    ";
        // line 34
        yield "    ";
        if ( !(null === (isset($context["_boxtype"]) || array_key_exists("_boxtype", $context) ? $context["_boxtype"] : (function () { throw new RuntimeError('Variable "_boxtype" does not exist.', 34, $this->source); })()))) {
            // line 35
            yield "        <div class=\"card-status-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_status_position"]) || array_key_exists("_status_position", $context) ? $context["_status_position"] : (function () { throw new RuntimeError('Variable "_status_position" does not exist.', 35, $this->source); })()), "html", null, true);
            yield " bg-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["_boxtype"]) || array_key_exists("_boxtype", $context) ? $context["_boxtype"] : (function () { throw new RuntimeError('Variable "_boxtype" does not exist.', 35, $this->source); })()), "html", null, true);
            yield "\"></div>
    ";
        }
        // line 37
        yield "
    ";
        // line 39
        yield "    ";
        yield from $this->unwrap()->yieldBlock('box_header_before', $context, $blocks);
        // line 40
        yield "    ";
        if (((((isset($context["_hasTitle"]) || array_key_exists("_hasTitle", $context) ? $context["_hasTitle"] : (function () { throw new RuntimeError('Variable "_hasTitle" does not exist.', 40, $this->source); })()) || (isset($context["_collapsible"]) || array_key_exists("_collapsible", $context) ? $context["_collapsible"] : (function () { throw new RuntimeError('Variable "_collapsible" does not exist.', 40, $this->source); })())) || (isset($context["_hasTools"]) || array_key_exists("_hasTools", $context) ? $context["_hasTools"] : (function () { throw new RuntimeError('Variable "_hasTools" does not exist.', 40, $this->source); })())) || (isset($context["_hasHeader"]) || array_key_exists("_hasHeader", $context) ? $context["_hasHeader"] : (function () { throw new RuntimeError('Variable "_hasHeader" does not exist.', 40, $this->source); })()))) {
            // line 41
            yield "        <div class=\"card-header ";
            yield from $this->unwrap()->yieldBlock('box_header_class', $context, $blocks);
            yield "\">
            ";
            // line 42
            if ((isset($context["_hasHeader"]) || array_key_exists("_hasHeader", $context) ? $context["_hasHeader"] : (function () { throw new RuntimeError('Variable "_hasHeader" does not exist.', 42, $this->source); })())) {
                // line 43
                yield "                ";
                yield (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 43, $this->source); })());
                yield "
            ";
            } else {
                // line 45
                yield "                ";
                if ((isset($context["_hasTitle"]) || array_key_exists("_hasTitle", $context) ? $context["_hasTitle"] : (function () { throw new RuntimeError('Variable "_hasTitle" does not exist.', 45, $this->source); })())) {
                    yield "<h3 class=\"card-title\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 45, $this->source); })()), "html", null, true);
                    yield "</h3>";
                }
                // line 46
                yield "                <div class=\"card-actions\" ";
                yield from $this->unwrap()->yieldBlock('box_tools_attributes', $context, $blocks);
                yield ">
                    ";
                // line 48
                yield "                    ";
                yield (isset($context["tools"]) || array_key_exists("tools", $context) ? $context["tools"] : (function () { throw new RuntimeError('Variable "tools" does not exist.', 48, $this->source); })());
                yield "
                    ";
                // line 49
                if ((isset($context["_collapsible"]) || array_key_exists("_collapsible", $context) ? $context["_collapsible"] : (function () { throw new RuntimeError('Variable "_collapsible" does not exist.', 49, $this->source); })())) {
                    // line 50
                    yield "                        ";
                    yield $macros["button"]->getTemplateForMacro("macro_action_collapsebutton", $context, 50, $this->getSourceContext())->macro_action_collapsebutton(...[((                    // line 51
array_key_exists("collapsible_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["collapsible_title"]) || array_key_exists("collapsible_title", $context) ? $context["collapsible_title"] : (function () { throw new RuntimeError('Variable "collapsible_title" does not exist.', 51, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle visibility", [], "TablerBundle"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle visibility", [], "TablerBundle"))), ("." .                     // line 52
(isset($context["_collapsible_class"]) || array_key_exists("_collapsible_class", $context) ? $context["_collapsible_class"] : (function () { throw new RuntimeError('Variable "_collapsible_class" does not exist.', 52, $this->source); })()))]);
                    // line 53
                    yield "
                    ";
                }
                // line 55
                yield "                </div>
            ";
            }
            // line 57
            yield "        </div>
    ";
        }
        // line 59
        yield "    ";
        yield from $this->unwrap()->yieldBlock('box_header_after', $context, $blocks);
        // line 60
        yield "
    ";
        // line 62
        yield "    ";
        yield from $this->unwrap()->yieldBlock('box_body_before', $context, $blocks);
        // line 63
        yield "    ";
        if ((isset($context["_hasBody"]) || array_key_exists("_hasBody", $context) ? $context["_hasBody"] : (function () { throw new RuntimeError('Variable "_hasBody" does not exist.', 63, $this->source); })())) {
            // line 64
            yield "        <div class=\"";
            yield from $this->unwrap()->yieldBlock('box_body_classes', $context, $blocks);
            yield " ";
            if ((isset($context["_fullsize"]) || array_key_exists("_fullsize", $context) ? $context["_fullsize"] : (function () { throw new RuntimeError('Variable "_fullsize" does not exist.', 64, $this->source); })())) {
                yield "p-0";
            }
            yield " ";
            if ((isset($context["_collapsible"]) || array_key_exists("_collapsible", $context) ? $context["_collapsible"] : (function () { throw new RuntimeError('Variable "_collapsible" does not exist.', 64, $this->source); })())) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["_collapsible_class"]) || array_key_exists("_collapsible_class", $context) ? $context["_collapsible_class"] : (function () { throw new RuntimeError('Variable "_collapsible_class" does not exist.', 64, $this->source); })()) . (((isset($context["_collapsed"]) || array_key_exists("_collapsed", $context) ? $context["_collapsed"] : (function () { throw new RuntimeError('Variable "_collapsed" does not exist.', 64, $this->source); })())) ? (" collapse") : (" show"))), "html", null, true);
                yield " ";
            }
            yield "\">
            ";
            // line 65
            yield (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 65, $this->source); })());
            yield "
        </div>
    ";
        }
        // line 68
        yield "    ";
        yield from $this->unwrap()->yieldBlock('box_body_after', $context, $blocks);
        // line 69
        yield "
    ";
        // line 71
        yield "    ";
        yield from $this->unwrap()->yieldBlock('box_footer_before', $context, $blocks);
        // line 72
        yield "    ";
        if ((isset($context["_hasFooter"]) || array_key_exists("_hasFooter", $context) ? $context["_hasFooter"] : (function () { throw new RuntimeError('Variable "_hasFooter" does not exist.', 72, $this->source); })())) {
            // line 73
            yield "        <div class=\"card-footer ";
            if ((isset($context["_footer_collapsible"]) || array_key_exists("_footer_collapsible", $context) ? $context["_footer_collapsible"] : (function () { throw new RuntimeError('Variable "_footer_collapsible" does not exist.', 73, $this->source); })())) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["_collapsible_class"]) || array_key_exists("_collapsible_class", $context) ? $context["_collapsible_class"] : (function () { throw new RuntimeError('Variable "_collapsible_class" does not exist.', 73, $this->source); })()) . (((isset($context["_collapsed"]) || array_key_exists("_collapsed", $context) ? $context["_collapsed"] : (function () { throw new RuntimeError('Variable "_collapsed" does not exist.', 73, $this->source); })())) ? (" collapse") : (" show"))), "html", null, true);
                yield " ";
            }
            yield " ";
            yield from $this->unwrap()->yieldBlock('box_footer_class', $context, $blocks);
            yield "\">
            ";
            // line 74
            yield (isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 74, $this->source); })());
            yield "
        </div>
    ";
        }
        // line 77
        yield "    ";
        yield from $this->unwrap()->yieldBlock('box_footer_after', $context, $blocks);
        // line 78
        yield "
</div>
";
        // line 80
        yield from $this->unwrap()->yieldBlock('box_after', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_tools(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_tools"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_tools"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_before"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_attributes"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_header_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_header_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_header_before"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_header_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_header_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_header_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_tools_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_tools_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_tools_attributes"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_header_after(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_header_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_header_after"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_before"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_classes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_classes"));

        yield "card-body ";
        yield from $this->unwrap()->yieldBlock('box_body_class', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 68
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_body_after(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_body_after"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_footer_before(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_footer_before"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_footer_before"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_footer_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_footer_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_footer_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_footer_after(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_footer_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_footer_after"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_box_after(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_after"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "box_after"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@theme/embeds/card.html.twig";
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
        return array (  724 => 80,  702 => 77,  680 => 73,  658 => 71,  636 => 68,  591 => 64,  569 => 62,  547 => 59,  525 => 46,  503 => 41,  481 => 39,  438 => 31,  416 => 29,  394 => 18,  372 => 17,  350 => 16,  328 => 15,  306 => 14,  295 => 80,  291 => 78,  288 => 77,  282 => 74,  271 => 73,  268 => 72,  265 => 71,  262 => 69,  259 => 68,  253 => 65,  238 => 64,  235 => 63,  232 => 62,  229 => 60,  226 => 59,  222 => 57,  218 => 55,  214 => 53,  212 => 52,  211 => 51,  209 => 50,  207 => 49,  202 => 48,  197 => 46,  190 => 45,  184 => 43,  182 => 42,  177 => 41,  174 => 40,  171 => 39,  168 => 37,  160 => 35,  157 => 34,  141 => 31,  139 => 29,  136 => 28,  134 => 27,  131 => 26,  129 => 25,  127 => 24,  125 => 23,  123 => 22,  121 => 21,  119 => 20,  116 => 19,  111 => 18,  106 => 17,  101 => 16,  96 => 15,  91 => 14,  88 => 12,  86 => 11,  84 => 10,  82 => 9,  80 => 8,  78 => 7,  76 => 6,  74 => 5,  72 => 4,  70 => 3,  68 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Options #}
{% set _id                  = id|default(null) %}
{% set _boxtype             = boxtype ?? null %}
{% set _status_position     = status_position ?? 'top' %}
{% set _fullsize            = fullsize ?? false %}
{% set _margin_bottom       = margin_bottom ?? 3 %}
{% set _collapsed           = collapsed ?? false %}
{% set _collapsible         = collapsible ?? _collapsed %}
{% set _footer_collapsible  = footer_collapsible ?? true %}
{% set _use_footer          = use_footer ?? false %}
{% set _use_body            = use_body ?? true %}

{# Common blocks : Declared this way to use `is not empty` and prevent the `has already been rendered` form field twig error #}
{% set header %}{% block box_header %}{% endblock %}{% endset %}
{% set tools %}{% block box_tools %}{% endblock %}{% endset %}
{% set body %}{% block box_body %}{% endblock %}{% endset %}
{% set footer %}{% block box_footer %}{% endblock %}{% endset %}
{% set title %}{% block box_title %}{% endblock %}{% endset %}

{% set _collapsible_class   = tabler_unique_id('collapse_') %}
{% set _hasTitle            = title is not empty %}
{% set _hasTools            = tools is not empty %}
{% set _hasHeader           = header is not empty %}
{% set _hasBody             = _use_body or body is not empty %}
{% set _hasFooter           = _use_footer or footer is not empty %}

{% import '@Tabler/components/buttons.html.twig' as button %}

{% block box_before %}{% endblock %}
{# Card #}
<div {% if _id is not null %}id=\"{{ _id }}\"{% endif %} class=\"card {% block box_class %}{% endblock %} mb-{{ _margin_bottom }}\" {% block box_attributes %}{% endblock %}>

    {# Card Status #}
    {% if _boxtype is not null %}
        <div class=\"card-status-{{ _status_position }} bg-{{ _boxtype }}\"></div>
    {% endif %}

    {# Header #}
    {% block box_header_before %}{% endblock %}
    {% if _hasTitle or _collapsible or _hasTools or _hasHeader %}
        <div class=\"card-header {% block box_header_class %}{% endblock %}\">
            {% if _hasHeader %}
                {{ header|raw }}
            {% else %}
                {% if _hasTitle %}<h3 class=\"card-title\">{{ title }}</h3>{% endif %}
                <div class=\"card-actions\" {% block box_tools_attributes %}{% endblock %}>
                    {# Buttons, labels, and many other things can be placed here! #}
                    {{ tools|raw }}
                    {% if _collapsible %}
                        {{ button.action_collapsebutton(
                            collapsible_title|default('Toggle visibility'|trans({}, 'TablerBundle')),
                            '.' ~ _collapsible_class
                        ) }}
                    {% endif %}
                </div>
            {% endif %}
        </div>
    {% endif %}
    {% block box_header_after %}{% endblock %}

    {# Body #}
    {% block box_body_before %}{% endblock %}
    {% if _hasBody %}
        <div class=\"{% block box_body_classes %}card-body {% block box_body_class %}{% endblock %}{% endblock %} {% if _fullsize %}p-0{% endif %} {% if _collapsible %} {{ _collapsible_class ~ (_collapsed ? ' collapse' : ' show') }} {% endif %}\">
            {{ body|raw }}
        </div>
    {% endif %}
    {% block box_body_after %}{% endblock %}

    {# Footer #}
    {% block box_footer_before %}{% endblock %}
    {% if _hasFooter %}
        <div class=\"card-footer {% if _footer_collapsible %} {{ _collapsible_class ~ (_collapsed ? ' collapse' : ' show') }} {% endif %} {% block box_footer_class %}{% endblock %}\">
            {{ footer|raw }}
        </div>
    {% endif %}
    {% block box_footer_after %}{% endblock %}

</div>
{% block box_after %}{% endblock %}
", "@theme/embeds/card.html.twig", "C:\\wamp64\\www\\kimai\\vendor\\kevinpapst\\tabler-bundle\\templates\\embeds\\card.html.twig");
    }
}
