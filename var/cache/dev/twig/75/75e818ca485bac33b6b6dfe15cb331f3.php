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

/* macros/datatables.html.twig */
class __TwigTemplate_4e98ac8c545d5e02d89911a627265850 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/datatables.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macros/datatables.html.twig"));

        // line 1
        yield "
";
        // line 5
        yield "
";
        // line 9
        yield "
";
        // line 13
        yield "
";
        // line 17
        yield "
";
        // line 91
        yield "
";
        // line 159
        yield "
";
        // line 240
        yield "
";
        // line 244
        yield "
";
        // line 275
        yield "
";
        // line 280
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
    public function macro_configuration($dataTable = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "dataTable" => $dataTable,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "configuration"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "configuration"));

            // line 3
            yield "    ";
            yield $this->getTemplateForMacro("macro_data_table_column_modal", $context, 3, $this->getSourceContext())->macro_data_table_column_modal(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 3, $this->source); })()), "getTableName", [], "method", false, false, false, 3), CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 3, $this->source); })()), "getColumns", [], "method", false, false, false, 3)]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function macro_header($dataTable = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "dataTable" => $dataTable,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "header"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "header"));

            // line 7
            yield "    ";
            yield $this->getTemplateForMacro("macro_datatable_header", $context, 7, $this->getSourceContext())->macro_datatable_header(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 7, $this->source); })()), "getTableName", [], "method", false, false, false, 7), CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 7, $this->source); })()), "getColumns", [], "method", false, false, false, 7), CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 7, $this->source); })()), "getQuery", [], "method", false, false, false, 7), CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 7, $this->source); })()), "getOptions", [], "method", false, false, false, 7)]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function macro_footer($dataTable = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "dataTable" => $dataTable,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "footer"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "footer"));

            // line 11
            yield "    ";
            yield $this->getTemplateForMacro("macro_data_table_footer", $context, 11, $this->getSourceContext())->macro_data_table_footer(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 11, $this->source); })()), "getPagination", [], "method", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 11, $this->source); })()), "getPaginationRoute", [], "method", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 11, $this->source); })()), "getBatchForm", [], "method", false, false, false, 11)]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function macro_class($dataTable = null, $column = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "dataTable" => $dataTable,
            "column" => $column,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "class"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "class"));

            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\DatatableExtensions']->getDatatableColumnClass(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 15, $this->source); })()), "getTableName", [], "method", false, false, false, 15), (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 15, $this->source); })())), "html", null, true);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function macro_actions($dataTable = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "dataTable" => $dataTable,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "actions"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "actions"));

            // line 20
            yield "    <div class=\"btn-list\">
    ";
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 21, $this->source); })()), "hasConfiguration", [], "method", false, false, false, 21)) {
                // line 22
                yield "        <a class=\"btn btn-icon\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 22, $this->source); })()), "getTableName", [], "method", false, false, false, 22), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.columns.title"), "html", null, true);
                yield "\">
            ";
                // line 23
                yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("columns", true);
                yield "
        </a>
    ";
            }
            // line 26
            yield "    ";
            $context["form"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 26, $this->source); })()), "getSearchForm", [], "method", false, false, false, 26);
            // line 27
            yield "    ";
            if ( !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()))) {
                // line 28
                yield "        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), ["form/search.html.twig"], true);
                // line 29
                yield "        ";
                $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "order", [], "any", false, false, false, 29), ["form/vertical.html.twig"], true);
                // line 30
                yield "        ";
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["class" => "searchform"]]);
                yield "
        ";
                // line 31
                $context["searchTerm"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "searchTerm", [], "any", false, false, false, 31), 'widget');
                // line 32
                yield "        ";
                $context["orderHasError"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "orderBy", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "order", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32)) > 0));
                // line 33
                yield "        ";
                $context["orderBy"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "orderBy", [], "any", false, false, false, 33), 'widget');
                // line 34
                yield "        ";
                $context["order"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "order", [], "any", false, false, false, 34), 'widget');
                // line 35
                yield "        ";
                $context["filterCount"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 35, $this->source); })()), "getQuery", [], "method", false, false, false, 35), "countFilter", [], "method", false, false, false, 35);
                // line 36
                yield "        <div class=\"input-group inline-search position-static\">
            <button type=\"button\" class=\"btn dropdown-toggle\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"false\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"search-dropdown-btn\" title=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search_filter"), "html", null, true);
                yield "\">
                ";
                // line 38
                yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("filter", true);
                yield "
                ";
                // line 39
                if (((isset($context["filterCount"]) || array_key_exists("filterCount", $context) ? $context["filterCount"] : (function () { throw new RuntimeError('Variable "filterCount" does not exist.', 39, $this->source); })()) > 0)) {
                    yield "<span class=\"badge badge-pill bg-primary text-primary-fg ms-1 d-none d-md-inline\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filterCount"]) || array_key_exists("filterCount", $context) ? $context["filterCount"] : (function () { throw new RuntimeError('Variable "filterCount" does not exist.', 39, $this->source); })()), "html", null, true);
                    yield "</span>";
                }
                // line 40
                yield "            </button>
            <div class=\"dropdown-menu p-3 search-dropdown\" data-popper-placement=\"bottom-start\" aria-labelledby=\"search-dropdown-btn\">
                ";
                // line 42
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'rest');
                yield "
                <div class=\"mb-2 row ";
                // line 43
                if ((isset($context["orderHasError"]) || array_key_exists("orderHasError", $context) ? $context["orderHasError"] : (function () { throw new RuntimeError('Variable "orderHasError" does not exist.', 43, $this->source); })())) {
                    yield " is-invalid";
                }
                yield " \">
                    ";
                // line 44
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "orderBy", [], "any", false, false, false, 44), 'label');
                yield "
                    <div class=\"col-sm-4 col-xs-6\">
                        ";
                // line 46
                yield (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 46, $this->source); })());
                yield "
                        ";
                // line 47
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "orderBy", [], "any", false, false, false, 47), 'errors');
                yield "
                    </div>
                    <div class=\"col-sm-4 col-xs-6\">
                        ";
                // line 50
                yield (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 50, $this->source); })());
                yield "
                        ";
                // line 51
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "order", [], "any", false, false, false, 51), 'errors');
                yield "
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"col-12 text-end\">
                        <button type=\"submit\" class=\"btn btn-primary\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search"), "html", null, true);
                yield "</button>
                    </div>
                </div>
            </div>
            ";
                // line 60
                yield (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 60, $this->source); })());
                yield "
            <span class=\"input-group-text\">
                ";
                // line 62
                $context["bookmarkToken"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("search");
                // line 63
                yield "                ";
                $context["searchBtnClass"] = "btn btn-icon btn-sm btn-ghost-secondary";
                // line 64
                yield "                <input type=\"hidden\" name=\"_token\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bookmarkToken"]) || array_key_exists("bookmarkToken", $context) ? $context["bookmarkToken"] : (function () { throw new RuntimeError('Variable "bookmarkToken" does not exist.', 64, $this->source); })()), "html", null, true);
                yield "\">
                <button type=\"submit\" class=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchBtnClass"]) || array_key_exists("searchBtnClass", $context) ? $context["searchBtnClass"] : (function () { throw new RuntimeError('Variable "searchBtnClass" does not exist.', 65, $this->source); })()), "html", null, true);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search"), "html", null, true);
                yield "\">
                    ";
                // line 66
                yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("search");
                yield "
                </button>

                ";
                // line 69
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "vars", [], "any", false, false, false, 69), "data", [], "any", false, false, false, 69), "bookmark", [], "any", false, false, false, 69)) {
                    // line 70
                    yield "                <a class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchBtnClass"]) || array_key_exists("searchBtnClass", $context) ? $context["searchBtnClass"] : (function () { throw new RuntimeError('Variable "searchBtnClass" does not exist.', 70, $this->source); })()), "html", null, true);
                    yield " text-yellow\" href=\"?_token=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bookmarkToken"]) || array_key_exists("bookmarkToken", $context) ? $context["bookmarkToken"] : (function () { throw new RuntimeError('Variable "bookmarkToken" does not exist.', 70, $this->source); })()), "html", null, true);
                    yield "&removeDefaultQuery=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "vars", [], "any", false, false, false, 70), "data", [], "any", false, false, false, 70), "bookmark", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("remove_default"), "html", null, true);
                    yield "\" id=\"removeDefaultQuery\">
                    ";
                    // line 71
                    yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("bookmarked");
                    yield "
                </a>
                ";
                } elseif ((                // line 73
(isset($context["filterCount"]) || array_key_exists("filterCount", $context) ? $context["filterCount"] : (function () { throw new RuntimeError('Variable "filterCount" does not exist.', 73, $this->source); })()) > 0)) {
                    // line 74
                    yield "                <button class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchBtnClass"]) || array_key_exists("searchBtnClass", $context) ? $context["searchBtnClass"] : (function () { throw new RuntimeError('Variable "searchBtnClass" does not exist.', 74, $this->source); })()), "html", null, true);
                    yield "\" type=\"submit\" id=\"setDefaultQuery\" name=\"setDefaultQuery\" data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("set_as_default"), "html", null, true);
                    yield "\">
                    ";
                    // line 75
                    yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("bookmark");
                    yield "
                </button>
                ";
                }
                // line 78
                yield "
                ";
                // line 79
                if ((((isset($context["filterCount"]) || array_key_exists("filterCount", $context) ? $context["filterCount"] : (function () { throw new RuntimeError('Variable "filterCount" does not exist.', 79, $this->source); })()) > 0) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "vars", [], "any", false, false, false, 79), "data", [], "any", false, false, false, 79), "isBookmarkSearch", [], "method", false, false, false, 79))) {
                    // line 80
                    yield "                    <a class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchBtnClass"]) || array_key_exists("searchBtnClass", $context) ? $context["searchBtnClass"] : (function () { throw new RuntimeError('Variable "searchBtnClass" does not exist.', 80, $this->source); })()), "html", null, true);
                    yield " text-orange\" href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "request", [], "any", false, false, false, 80), "attributes", [], "any", false, false, false, 80), "get", ["_route"], "method", false, false, false, 80));
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("remove_filter"), "html", null, true);
                    yield "\">
                        ";
                    // line 81
                    yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("cancel");
                    yield "
                    </a>
                ";
                }
                // line 84
                yield "            </span>
        </div>
        <input type=\"hidden\" name=\"performSearch\" value=\"performSearch\" />
        ";
                // line 87
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
                yield "
    ";
            }
            // line 89
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 92
    public function macro_data_table_column_modal($name = null, $columns = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "columns" => $columns,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "data_table_column_modal"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "data_table_column_modal"));

            // line 93
            $context["visibility"] = $this->extensions['App\Twig\DatatableExtensions']->initializeDatatable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93), CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "session", [], "any", false, false, false, 93), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 93, $this->source); })()), (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 93, $this->source); })()));
            // line 94
            yield "<div class=\"modal\" data-bs-backdrop=\"static\" id=\"modal_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 94, $this->source); })()), "html", null, true);
            yield "\" data-column-visibility=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 94, $this->source); })()), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"data_table_modal_label\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"data_table_modal_label\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.columns.title"), "html", null, true);
            yield "</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close"), "html", null, true);
            yield "\"></button>
            </div>
            <div class=\"modal-body\">
                <form name=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 102, $this->source); })()), "html", null, true);
            yield "_visibility\" method=\"post\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bookmark_save_datatable");
            yield "\" class=\"mb-3\">
                    <div class=\"row mb-3\">
                        <div class=\"col-12\">
                            <label class=\"form-label\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.columns.label"), "html", null, true);
            yield "</label>
                            <div class=\"form-selectgroup form-selectgroup-pills\">";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 107, $this->source); })()));
            foreach ($context['_seq'] as $context["title"] => $context["headerOptions"]) {
                // line 108
                $context["translationDomain"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "translation_domain", [], "any", true, true, false, 108) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "translation_domain", [], "any", false, false, false, 108)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "translation_domain", [], "any", false, false, false, 108)) : ("messages"));
                // line 109
                yield "                                    ";
                if ( !is_iterable($context["headerOptions"])) {
                    // line 110
                    yield "                                        ";
                    $context["headerOptions"] = ["class" => $context["headerOptions"]];
                    // line 111
                    yield "                                    ";
                }
                // line 112
                yield "                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "title", [], "any", true, true, false, 112) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "title", [], "any", false, false, false, 112)))) {
                    // line 113
                    yield "                                        ";
                    $context["headerTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "title", [], "any", false, false, false, 113), [], (isset($context["translationDomain"]) || array_key_exists("translationDomain", $context) ? $context["translationDomain"] : (function () { throw new RuntimeError('Variable "translationDomain" does not exist.', 113, $this->source); })()));
                    // line 114
                    yield "                                    ";
                } else {
                    // line 115
                    yield "                                        ";
                    $context["headerTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["title"], [], (isset($context["translationDomain"]) || array_key_exists("translationDomain", $context) ? $context["translationDomain"] : (function () { throw new RuntimeError('Variable "translationDomain" does not exist.', 115, $this->source); })()));
                    // line 116
                    yield "                                    ";
                }
                // line 117
                yield "                                    ";
                if (!CoreExtension::inFilter("alwaysVisible", CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "class", [], "any", false, false, false, 117))) {
                    // line 118
                    yield "                                        <label class=\"form-selectgroup-item\">
                                            <input class=\"form-selectgroup-input\" type=\"checkbox\" id=\"column_";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["title"], "html", null, true);
                    yield "\" name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["title"], "html", null, true);
                    yield "\">
                                            <span class=\"form-selectgroup-label\">";
                    // line 120
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 120, $this->source); })()), "html", null, true);
                    yield "</span>
                                        </label>
                                    ";
                }
                // line 123
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['title'], $context['headerOptions'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <label class=\"form-label\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("modal.columns.profile"), "html", null, true);
            yield "</label>
                            <div class=\"form-selectgroup\">
                                <label class=\"form-selectgroup-item\">
                                    <input type=\"radio\" name=\"datatable_profile\" value=\"";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("\\App\\Utils\\ProfileManager::PROFILE_DESKTOP"), "html", null, true);
            yield "\" class=\"form-selectgroup-input\" data-href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bookmark_profile");
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "session", [], "any", false, false, false, 132), "get", [Twig\Extension\CoreExtension::constant("\\App\\Utils\\ProfileManager::SESSION_PROFILE"), ""], "method", false, false, false, 132) == "")) {
                yield " checked=\"checked\"";
            }
            yield ">
                                    <span class=\"form-selectgroup-label\">
                                        ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desktop"), "html", null, true);
            yield "
                                    </span>
                                </label>
                                <label class=\"form-selectgroup-item\">
                                    <input type=\"radio\" name=\"datatable_profile\" value=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("\\App\\Utils\\ProfileManager::PROFILE_MOBILE"), "html", null, true);
            yield "\" class=\"form-selectgroup-input\" data-href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bookmark_profile");
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "session", [], "any", false, false, false, 138), "get", [Twig\Extension\CoreExtension::constant("\\App\\Utils\\ProfileManager::SESSION_PROFILE"), ""], "method", false, false, false, 138) == "mobile")) {
                yield " checked=\"checked\"";
            }
            yield ">
                                    <span class=\"form-selectgroup-label\">
                                        ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mobile"), "html", null, true);
            yield "
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"datatable_name\" value=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 146, $this->source); })()), "html", null, true);
            yield "\" />
                    <input type=\"hidden\" name=\"datatable_token\" value=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(Twig\Extension\CoreExtension::constant("\\App\\Controller\\BookmarkController::DATATABLE_TOKEN")), "html", null, true);
            yield "\" />
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" formaction=\"";
            // line 151
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bookmark_delete");
            yield "\" class=\"btn btn-outline-danger me-auto\" data-type=\"reset\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.reset"), "html", null, true);
            yield "</button>
                <button type=\"submit\" class=\"btn btn-primary\" data-type=\"save\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"), "html", null, true);
            yield "</button>
                <button type=\"button\" class=\"btn\" data-bs-dismiss=\"modal\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.close"), "html", null, true);
            yield "</button>
            </div>
        </div>
    </div>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 160
    public function macro_datatable_header($tableName = null, $columns = null, $query = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "tableName" => $tableName,
            "columns" => $columns,
            "query" => $query,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "datatable_header"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "datatable_header"));

            // line 161
            yield "    ";
            $context["visibility"] = $this->extensions['App\Twig\DatatableExtensions']->initializeDatatable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "user", [], "any", false, false, false, 161), CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "session", [], "any", false, false, false, 161), (isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 161, $this->source); })()), (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 161, $this->source); })()));
            // line 162
            yield "    ";
            if ( !(null === (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 162, $this->source); })()))) {
                // line 163
                yield "        ";
                $context["orderBy"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "orderBy", [], "any", true, true, false, 163)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "orderBy", [], "any", false, false, false, 163), CoreExtension::getAttribute($this->env, $this->source, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 163, $this->source); })()), "orderBy", [], "any", false, false, false, 163))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 163, $this->source); })()), "orderBy", [], "any", false, false, false, 163)));
                // line 164
                yield "        ";
                $context["order"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 164, $this->source); })()), "order", [], "any", false, false, false, 164));
                // line 165
                yield "    ";
            } else {
                // line 166
                yield "        ";
                $context["orderBy"] = false;
                // line 167
                yield "        ";
                $context["order"] = false;
                // line 168
                yield "    ";
            }
            // line 169
            yield "    ";
            $context["reloadEvent"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "reload", [], "any", true, true, false, 169)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "reload", [], "any", false, false, false, 169), "")) : (""));
            // line 170
            yield "    ";
            $context["boxClass"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "boxClass", [], "any", true, true, false, 170) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "boxClass", [], "any", false, false, false, 170)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "boxClass", [], "any", false, false, false, 170)) : ("card data_table"));
            // line 171
            yield "    ";
            $context["columnModal"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "columnConfig", [], "any", true, true, false, 171) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "columnConfig", [], "any", false, false, false, 171)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "columnConfig", [], "any", false, false, false, 171)) : (true));
            // line 172
            yield "    ";
            $context["responsive"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "responsive", [], "any", true, true, false, 172) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "responsive", [], "any", false, false, false, 172)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "responsive", [], "any", false, false, false, 172)) : (false));
            // line 173
            yield "    ";
            $context["sticky"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "sticky", [], "any", true, true, false, 173) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "sticky", [], "any", false, false, false, 173)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "sticky", [], "any", false, false, false, 173)) : (true));
            // line 174
            yield "    ";
            $context["contextMenuId"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "contextMenuId", [], "any", true, true, false, 174)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 174, $this->source); })()), "contextMenuId", [], "any", false, false, false, 174)) : ((("datatable_" . (isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 174, $this->source); })())) . "_contextmenu")));
            // line 175
            yield "
    <div class=\"";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["boxClass"]) || array_key_exists("boxClass", $context) ? $context["boxClass"] : (function () { throw new RuntimeError('Variable "boxClass" does not exist.', 176, $this->source); })()), "html", null, true);
            yield " datatable_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 176, $this->source); })()), "html", null, true);
            yield "\">
        <div class=\"card-body p-0";
            // line 177
            if ((isset($context["responsive"]) || array_key_exists("responsive", $context) ? $context["responsive"] : (function () { throw new RuntimeError('Variable "responsive" does not exist.', 177, $this->source); })())) {
                yield " table-responsive";
            }
            yield "\">
            <div class=\"dataTables_wrapper form-inline\">
                <div id=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["contextMenuId"]) || array_key_exists("contextMenuId", $context) ? $context["contextMenuId"] : (function () { throw new RuntimeError('Variable "contextMenuId" does not exist.', 179, $this->source); })()), "html", null, true);
            yield "\" class=\"dropdown-menu d-none\"></div>
                <table class=\"table table-hover dataTable\" role=\"grid\" data-reload-event=\"kimai.reset_column_visibility ";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reloadEvent"]) || array_key_exists("reloadEvent", $context) ? $context["reloadEvent"] : (function () { throw new RuntimeError('Variable "reloadEvent" does not exist.', 180, $this->source); })()), "html", null, true);
            yield "\" data-context-menu=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["contextMenuId"]) || array_key_exists("contextMenuId", $context) ? $context["contextMenuId"] : (function () { throw new RuntimeError('Variable "contextMenuId" does not exist.', 180, $this->source); })()), "html", null, true);
            yield "\">
                    <thead";
            // line 181
            if ((isset($context["sticky"]) || array_key_exists("sticky", $context) ? $context["sticky"] : (function () { throw new RuntimeError('Variable "sticky" does not exist.', 181, $this->source); })())) {
                yield " class=\"sticky-top\"";
            }
            yield ">
                        <tr>";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 183, $this->source); })()));
            foreach ($context['_seq'] as $context["title"] => $context["headerOptions"]) {
                // line 184
                $context["isActions"] = ( !Twig\Extension\CoreExtension::testEmpty($context["title"]) && ($context["title"] == "actions"));
                // line 185
                yield "                            ";
                if ( !is_iterable($context["headerOptions"])) {
                    // line 186
                    yield "                                ";
                    $context["headerOptions"] = ["class" => $context["headerOptions"]];
                    // line 187
                    yield "                            ";
                }
                // line 188
                yield "                            ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "orderBy", [], "any", true, true, false, 188)) {
                    // line 189
                    yield "                                ";
                    if (((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 189, $this->source); })()) === false)) {
                        // line 190
                        yield "                                    ";
                        $context["headerOptions"] = Twig\Extension\CoreExtension::merge($context["headerOptions"], ["orderBy" => false]);
                        // line 191
                        yield "                                ";
                    } else {
                        // line 192
                        yield "                                    ";
                        $context["headerOptions"] = Twig\Extension\CoreExtension::merge($context["headerOptions"], ["orderBy" => $context["title"]]);
                        // line 193
                        yield "                                ";
                    }
                    // line 194
                    yield "                            ";
                }
                // line 195
                yield "                            ";
                $context["headerClass"] = $this->getTemplateForMacro("macro_data_table_column_class", $context, 195, $this->getSourceContext())->macro_data_table_column_class(...[(isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 195, $this->source); })()), (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 195, $this->source); })()), $context["title"]]);
                // line 196
                yield "                            ";
                if ((($context["title"] != "actions") &&  !(CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "orderBy", [], "any", false, false, false, 196) === false))) {
                    // line 197
                    yield "                                ";
                    if (((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 197, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "orderBy", [], "any", false, false, false, 197))) {
                        // line 198
                        yield "                                    ";
                        $context["headerClass"] = (((isset($context["headerClass"]) || array_key_exists("headerClass", $context) ? $context["headerClass"] : (function () { throw new RuntimeError('Variable "headerClass" does not exist.', 198, $this->source); })()) . " sortable sorting_") . (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 198, $this->source); })()));
                        // line 199
                        yield "                                    ";
                        if (((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 199, $this->source); })()) == "asc")) {
                            // line 200
                            yield "                                        ";
                            $context["ariaSort"] = "ascending";
                            // line 201
                            yield "                                    ";
                        } else {
                            // line 202
                            yield "                                        ";
                            $context["ariaSort"] = "descending";
                            // line 203
                            yield "                                    ";
                        }
                        // line 204
                        yield "                                ";
                    } else {
                        // line 205
                        yield "                                    ";
                        $context["headerClass"] = ((isset($context["headerClass"]) || array_key_exists("headerClass", $context) ? $context["headerClass"] : (function () { throw new RuntimeError('Variable "headerClass" does not exist.', 205, $this->source); })()) . " sortable sorting");
                        // line 206
                        yield "                                ";
                    }
                    // line 207
                    yield "                            ";
                }
                // line 208
                yield "                            ";
                $context["headerTitle"] = "";
                // line 209
                yield "                            ";
                $context["translationDomain"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "translation_domain", [], "any", true, true, false, 209) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "translation_domain", [], "any", false, false, false, 209)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "translation_domain", [], "any", false, false, false, 209)) : ("messages"));
                // line 210
                yield "                            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "title", [], "any", true, true, false, 210)) {
                    // line 211
                    yield "                                ";
                    $context["headerTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "title", [], "any", false, false, false, 211), [], (isset($context["translationDomain"]) || array_key_exists("translationDomain", $context) ? $context["translationDomain"] : (function () { throw new RuntimeError('Variable "translationDomain" does not exist.', 211, $this->source); })()));
                    // line 212
                    yield "                            ";
                } elseif (( !Twig\Extension\CoreExtension::testEmpty($context["title"]) &&  !(isset($context["isActions"]) || array_key_exists("isActions", $context) ? $context["isActions"] : (function () { throw new RuntimeError('Variable "isActions" does not exist.', 212, $this->source); })()))) {
                    // line 213
                    yield "                                ";
                    $context["headerTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["title"], [], (isset($context["translationDomain"]) || array_key_exists("translationDomain", $context) ? $context["translationDomain"] : (function () { throw new RuntimeError('Variable "translationDomain" does not exist.', 213, $this->source); })()));
                    // line 214
                    yield "                            ";
                }
                // line 215
                yield "                            ";
                if ((isset($context["isActions"]) || array_key_exists("isActions", $context) ? $context["isActions"] : (function () { throw new RuntimeError('Variable "isActions" does not exist.', 215, $this->source); })())) {
                    // line 216
                    yield "                                ";
                    $context["headerClass"] = ((isset($context["headerClass"]) || array_key_exists("headerClass", $context) ? $context["headerClass"] : (function () { throw new RuntimeError('Variable "headerClass" does not exist.', 216, $this->source); })()) . " text-center");
                    // line 217
                    yield "                            ";
                }
                // line 218
                yield "                            <th data-field=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["title"], "html", null, true);
                yield "\" ";
                if ( !(CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "orderBy", [], "any", false, false, false, 218) === false)) {
                    yield "data-order=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "orderBy", [], "any", false, false, false, 218), "html", null, true);
                    yield "\" ";
                }
                yield "class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["headerClass"]) || array_key_exists("headerClass", $context) ? $context["headerClass"] : (function () { throw new RuntimeError('Variable "headerClass" does not exist.', 218, $this->source); })()), "html", null, true);
                yield "\"";
                if (array_key_exists("ariaSort", $context)) {
                    yield " aria-sort=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ariaSort"]) || array_key_exists("ariaSort", $context) ? $context["ariaSort"] : (function () { throw new RuntimeError('Variable "ariaSort" does not exist.', 218, $this->source); })()), "html", null, true);
                    yield "\"";
                }
                yield ">
                            ";
                // line 219
                if ((( !Twig\Extension\CoreExtension::testEmpty($context["title"]) && ($context["title"] == "actions")) &&  !((isset($context["columnModal"]) || array_key_exists("columnModal", $context) ? $context["columnModal"] : (function () { throw new RuntimeError('Variable "columnModal" does not exist.', 219, $this->source); })()) === false))) {
                    // line 220
                    yield "
                                <a class=\"link-secondary\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_";
                    // line 221
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 221, $this->source); })()), "html", null, true);
                    yield "\">
                                    ";
                    // line 222
                    yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("columns", true);
                    yield "
                                </a>

                            ";
                } else {
                    // line 226
                    yield "                                ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "batchUpdate", [], "any", true, true, false, 226)) {
                        // line 227
                        yield "                                    <input type=\"checkbox\" id=\"multi_update_all_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tableName"]) || array_key_exists("tableName", $context) ? $context["tableName"] : (function () { throw new RuntimeError('Variable "tableName" does not exist.', 227, $this->source); })()), "html", null, true);
                        yield "\" class=\"multi_update_all multiupdater form-check-input m-0 align-middle\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_table_checkbox_all"), "html", null, true);
                        yield "\">
                                ";
                    }
                    // line 229
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 229, $this->source); })()), "html", null, true);
                    yield "
                                ";
                    // line 230
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "html_after", [], "any", true, true, false, 230)) {
                        // line 231
                        yield "                                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["headerOptions"], "html_after", [], "any", false, false, false, 231);
                        yield "
                                ";
                    }
                    // line 233
                    yield "                            ";
                }
                // line 234
                yield "                            </th>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['title'], $context['headerOptions'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            yield "</tr>
                    </thead>
                    <tbody>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 241
    public function macro_data_table_column_class($name = null, $columns = null, $column = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "columns" => $columns,
            "column" => $column,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "data_table_column_class"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "data_table_column_class"));

            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\DatatableExtensions']->getDatatableColumnClass((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 242, $this->source); })()), (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 242, $this->source); })())), "html", null, true);
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 245
    public function macro_data_table_footer($entries = null, $route = null, $multi_update_form = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entries" => $entries,
            "route" => $route,
            "multi_update_form" => $multi_update_form,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "data_table_footer"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "data_table_footer"));

            // line 246
            yield "                </tbody>
            </table>
        </div>
    </div>
    ";
            // line 250
            if ((( !Twig\Extension\CoreExtension::testEmpty((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 250, $this->source); })())) &&  !(null === (isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 250, $this->source); })()))) ||  !(null === (isset($context["multi_update_form"]) || array_key_exists("multi_update_form", $context) ? $context["multi_update_form"] : (function () { throw new RuntimeError('Variable "multi_update_form" does not exist.', 250, $this->source); })())))) {
                // line 251
                yield "    <div class=\"card-footer d-flex align-items-center\">
        ";
                // line 252
                if ( !(null === (isset($context["multi_update_form"]) || array_key_exists("multi_update_form", $context) ? $context["multi_update_form"] : (function () { throw new RuntimeError('Variable "multi_update_form" does not exist.', 252, $this->source); })()))) {
                    // line 253
                    yield "            ";
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["multi_update_form"]) || array_key_exists("multi_update_form", $context) ? $context["multi_update_form"] : (function () { throw new RuntimeError('Variable "multi_update_form" does not exist.', 253, $this->source); })()), 'form_start', ["attr" => ["class" => "multi_update_form", "style" => "display:none", "data-question" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("update_multiple")]]);
                    yield "
                ";
                    // line 254
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["multi_update_form"]) || array_key_exists("multi_update_form", $context) ? $context["multi_update_form"] : (function () { throw new RuntimeError('Variable "multi_update_form" does not exist.', 254, $this->source); })()), "children", [], "any", false, false, false, 254));
                    foreach ($context['_seq'] as $context["_key"] => $context["formChild"]) {
                        // line 255
                        yield "                    ";
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["formChild"], 'widget');
                        yield "
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['formChild'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 257
                    yield "            ";
                    yield                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["multi_update_form"]) || array_key_exists("multi_update_form", $context) ? $context["multi_update_form"] : (function () { throw new RuntimeError('Variable "multi_update_form" does not exist.', 257, $this->source); })()), 'form_end');
                    yield "
        ";
                }
                // line 259
                yield "        ";
                if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 259, $this->source); })())) &&  !(null === (isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 259, $this->source); })())))) {
                    // line 260
                    yield "            <p class=\"d-none d-sm-block m-0 text-body-secondary multi_update_form_hide\">
                ";
                    // line 261
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("pagination", ["%start%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 261, $this->source); })()), "getCurrentPageOffsetStart", [], "method", false, false, false, 261), "%end%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 261, $this->source); })()), "getCurrentPageOffsetEnd", [], "method", false, false, false, 261), "%total%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 261, $this->source); })()), "getNbResults", [], "method", false, false, false, 261)]), "html", null, true);
                    yield "
            </p>
            ";
                    // line 263
                    $context["options"] = ["css_container_class" => "pagination m-0 ms-auto d-print-none"];
                    // line 264
                    yield "            ";
                    if (is_iterable((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 264, $this->source); })()))) {
                        // line 265
                        yield "                ";
                        $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 265, $this->source); })()), (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 265, $this->source); })()));
                        // line 266
                        yield "            ";
                    } else {
                        // line 267
                        yield "                ";
                        $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 267, $this->source); })()), ["routeName" => (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 267, $this->source); })())]);
                        // line 268
                        yield "            ";
                    }
                    // line 269
                    yield "            ";
                    yield $this->extensions['App\Twig\PaginationExtension']->renderPagination((isset($context["entries"]) || array_key_exists("entries", $context) ? $context["entries"] : (function () { throw new RuntimeError('Variable "entries" does not exist.', 269, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 269, $this->source); })()));
                    yield "
        ";
                }
                // line 271
                yield "    </div>
    ";
            }
            // line 273
            yield "</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 276
    public function macro_datatable_meta_column($entry = null, $field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entry" => $entry,
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "datatable_meta_column"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "datatable_meta_column"));

            // line 277
            yield "    ";
            $macros["_v0"] = $this->loadTemplate("macros/widgets.html.twig", "macros/datatables.html.twig", 277)->unwrap();
            // line 278
            yield "    ";
            yield $macros["_v0"]->getTemplateForMacro("macro_meta_field_value", $context, 278, $this->getSourceContext())->macro_meta_field_value(...[(isset($context["entry"]) || array_key_exists("entry", $context) ? $context["entry"] : (function () { throw new RuntimeError('Variable "entry" does not exist.', 278, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 278, $this->source); })())]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 281
    public function macro_datatable_multiupdate_row($id = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "id" => $id,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "datatable_multiupdate_row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "datatable_multiupdate_row"));

            // line 282
            yield "    <input type=\"checkbox\" name=\"id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 282, $this->source); })()), "html", null, true);
            yield "\" class=\"multi_update_single multiupdater form-check-input m-0 align-middle\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("batch_table_checkbox"), "html", null, true);
            yield "\">
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
        return "macros/datatables.html.twig";
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
        return array (  1130 => 282,  1112 => 281,  1097 => 278,  1094 => 277,  1075 => 276,  1062 => 273,  1058 => 271,  1052 => 269,  1049 => 268,  1046 => 267,  1043 => 266,  1040 => 265,  1037 => 264,  1035 => 263,  1030 => 261,  1027 => 260,  1024 => 259,  1018 => 257,  1009 => 255,  1005 => 254,  1000 => 253,  998 => 252,  995 => 251,  993 => 250,  987 => 246,  967 => 245,  955 => 242,  935 => 241,  920 => 236,  914 => 234,  911 => 233,  905 => 231,  903 => 230,  898 => 229,  890 => 227,  887 => 226,  880 => 222,  876 => 221,  873 => 220,  871 => 219,  852 => 218,  849 => 217,  846 => 216,  843 => 215,  840 => 214,  837 => 213,  834 => 212,  831 => 211,  828 => 210,  825 => 209,  822 => 208,  819 => 207,  816 => 206,  813 => 205,  810 => 204,  807 => 203,  804 => 202,  801 => 201,  798 => 200,  795 => 199,  792 => 198,  789 => 197,  786 => 196,  783 => 195,  780 => 194,  777 => 193,  774 => 192,  771 => 191,  768 => 190,  765 => 189,  762 => 188,  759 => 187,  756 => 186,  753 => 185,  751 => 184,  747 => 183,  741 => 181,  735 => 180,  731 => 179,  724 => 177,  718 => 176,  715 => 175,  712 => 174,  709 => 173,  706 => 172,  703 => 171,  700 => 170,  697 => 169,  694 => 168,  691 => 167,  688 => 166,  685 => 165,  682 => 164,  679 => 163,  676 => 162,  673 => 161,  652 => 160,  634 => 153,  630 => 152,  624 => 151,  617 => 147,  613 => 146,  604 => 140,  593 => 138,  586 => 134,  575 => 132,  569 => 129,  562 => 124,  556 => 123,  550 => 120,  544 => 119,  541 => 118,  538 => 117,  535 => 116,  532 => 115,  529 => 114,  526 => 113,  523 => 112,  520 => 111,  517 => 110,  514 => 109,  512 => 108,  508 => 107,  504 => 105,  496 => 102,  490 => 99,  486 => 98,  476 => 94,  474 => 93,  455 => 92,  442 => 89,  437 => 87,  432 => 84,  426 => 81,  417 => 80,  415 => 79,  412 => 78,  406 => 75,  399 => 74,  397 => 73,  392 => 71,  381 => 70,  379 => 69,  373 => 66,  367 => 65,  362 => 64,  359 => 63,  357 => 62,  352 => 60,  345 => 56,  337 => 51,  333 => 50,  327 => 47,  323 => 46,  318 => 44,  312 => 43,  308 => 42,  304 => 40,  298 => 39,  294 => 38,  290 => 37,  287 => 36,  284 => 35,  281 => 34,  278 => 33,  275 => 32,  273 => 31,  268 => 30,  265 => 29,  262 => 28,  259 => 27,  256 => 26,  250 => 23,  243 => 22,  241 => 21,  238 => 20,  220 => 19,  208 => 15,  189 => 14,  174 => 11,  156 => 10,  141 => 7,  123 => 6,  108 => 3,  90 => 2,  78 => 280,  75 => 275,  72 => 244,  69 => 240,  66 => 159,  63 => 91,  60 => 17,  57 => 13,  54 => 9,  51 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% macro configuration(dataTable) %}
    {{ _self.data_table_column_modal(dataTable.getTableName(), dataTable.getColumns()) }}
{% endmacro %}

{% macro header(dataTable) %}
    {{ _self.datatable_header(dataTable.getTableName(), dataTable.getColumns(), dataTable.getQuery(), dataTable.getOptions()) }}
{% endmacro %}

{% macro footer(dataTable) %}
    {{ _self.data_table_footer(dataTable.getPagination(), dataTable.getPaginationRoute(), dataTable.getBatchForm()) }}
{% endmacro %}

{% macro class(dataTable, column) %}
    {{- datatable_column_class(dataTable.getTableName(), column) -}}
{% endmacro %}

{# compare templates/page_setup.html.twig block table_actions #}
{% macro actions(dataTable) %}
    <div class=\"btn-list\">
    {% if dataTable.hasConfiguration() %}
        <a class=\"btn btn-icon\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_{{ dataTable.getTableName() }}\" title=\"{{ 'modal.columns.title'|trans }}\">
            {{ icon('columns', true) }}
        </a>
    {% endif %}
    {% set form = dataTable.getSearchForm() %}
    {% if form is not null %}
        {% form_theme form 'form/search.html.twig' %}
        {% form_theme form.order 'form/vertical.html.twig' %}
        {{ form_start(form, {'attr': {'class': 'searchform'}}) }}
        {% set searchTerm = form_widget(form.searchTerm) %}
        {% set orderHasError = form.orderBy.vars.errors|length > 0 or form.order.vars.errors|length > 0 %}
        {% set orderBy = form_widget(form.orderBy) %}
        {% set order = form_widget(form.order) %}
        {% set filterCount = dataTable.getQuery().countFilter() %}
        <div class=\"input-group inline-search position-static\">
            <button type=\"button\" class=\"btn dropdown-toggle\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"false\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"search-dropdown-btn\" title=\"{{ 'search_filter'|trans }}\">
                {{ icon('filter', true) }}
                {% if filterCount > 0 %}<span class=\"badge badge-pill bg-primary text-primary-fg ms-1 d-none d-md-inline\">{{ filterCount }}</span>{% endif %}
            </button>
            <div class=\"dropdown-menu p-3 search-dropdown\" data-popper-placement=\"bottom-start\" aria-labelledby=\"search-dropdown-btn\">
                {{ form_rest(form) }}
                <div class=\"mb-2 row {% if orderHasError %} is-invalid{% endif %} \">
                    {{ form_label(form.orderBy) }}
                    <div class=\"col-sm-4 col-xs-6\">
                        {{ orderBy|raw }}
                        {{ form_errors(form.orderBy) }}
                    </div>
                    <div class=\"col-sm-4 col-xs-6\">
                        {{ order|raw }}
                        {{ form_errors(form.order) }}
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"col-12 text-end\">
                        <button type=\"submit\" class=\"btn btn-primary\">{{ 'search'|trans }}</button>
                    </div>
                </div>
            </div>
            {{ searchTerm|raw }}
            <span class=\"input-group-text\">
                {% set bookmarkToken = csrf_token('search') %}
                {% set searchBtnClass = 'btn btn-icon btn-sm btn-ghost-secondary' %}
                <input type=\"hidden\" name=\"_token\" value=\"{{ bookmarkToken }}\">
                <button type=\"submit\" class=\"{{ searchBtnClass }}\" data-toggle=\"tooltip\" title=\"{{ 'search'|trans }}\">
                    {{ icon('search') }}
                </button>

                {% if form.vars.data.bookmark %}
                <a class=\"{{ searchBtnClass }} text-yellow\" href=\"?_token={{ bookmarkToken }}&removeDefaultQuery={{ form.vars.data.bookmark.name }}\" data-toggle=\"tooltip\" title=\"{{ 'remove_default'|trans }}\" id=\"removeDefaultQuery\">
                    {{ icon('bookmarked') }}
                </a>
                {% elseif filterCount > 0 %}
                <button class=\"{{ searchBtnClass }}\" type=\"submit\" id=\"setDefaultQuery\" name=\"setDefaultQuery\" data-toggle=\"tooltip\" title=\"{{ 'set_as_default'|trans }}\">
                    {{ icon('bookmark') }}
                </button>
                {% endif %}

                {% if filterCount > 0 and not form.vars.data.isBookmarkSearch() %}
                    <a class=\"{{ searchBtnClass }} text-orange\" href=\"{{ path(app.request.attributes.get('_route')) }}\" data-toggle=\"tooltip\" title=\"{{ 'remove_filter'|trans }}\">
                        {{ icon('cancel') }}
                    </a>
                {% endif %}
            </span>
        </div>
        <input type=\"hidden\" name=\"performSearch\" value=\"performSearch\" />
        {{ form_end(form) }}
    {% endif %}
    </div>
{% endmacro %}

{% macro data_table_column_modal(name, columns) %}
{% set visibility = initialize_datatable(app.user, app.session, name, columns) %}
<div class=\"modal\" data-bs-backdrop=\"static\" id=\"modal_{{ name }}\" data-column-visibility=\"{{ name }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"data_table_modal_label\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"data_table_modal_label\">{{ 'modal.columns.title'|trans }}</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ 'action.close'|trans }}\"></button>
            </div>
            <div class=\"modal-body\">
                <form name=\"{{ name }}_visibility\" method=\"post\" action=\"{{ path('bookmark_save_datatable') }}\" class=\"mb-3\">
                    <div class=\"row mb-3\">
                        <div class=\"col-12\">
                            <label class=\"form-label\">{{ 'modal.columns.label'|trans }}</label>
                            <div class=\"form-selectgroup form-selectgroup-pills\">
                                {%- for title, headerOptions in columns -%}
                                    {% set translationDomain = headerOptions.translation_domain ?? 'messages' %}
                                    {% if not headerOptions is iterable %}
                                        {% set headerOptions = {'class': headerOptions} %}
                                    {% endif %}
                                    {% if headerOptions.title is defined and headerOptions.title is not empty %}
                                        {% set headerTitle = headerOptions.title|trans({}, translationDomain) %}
                                    {% else %}
                                        {% set headerTitle = title|trans({}, translationDomain) %}
                                    {% endif %}
                                    {% if 'alwaysVisible' not in headerOptions.class %}
                                        <label class=\"form-selectgroup-item\">
                                            <input class=\"form-selectgroup-input\" type=\"checkbox\" id=\"column_{{ title }}\" name=\"{{ title }}\">
                                            <span class=\"form-selectgroup-label\">{{ headerTitle }}</span>
                                        </label>
                                    {% endif %}
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <label class=\"form-label\">{{ 'modal.columns.profile'|trans }}</label>
                            <div class=\"form-selectgroup\">
                                <label class=\"form-selectgroup-item\">
                                    <input type=\"radio\" name=\"datatable_profile\" value=\"{{ constant('\\\\App\\\\Utils\\\\ProfileManager::PROFILE_DESKTOP') }}\" class=\"form-selectgroup-input\" data-href=\"{{ path('bookmark_profile') }}\"{% if app.session.get(constant('\\\\App\\\\Utils\\\\ProfileManager::SESSION_PROFILE'), '') == '' %} checked=\"checked\"{% endif %}>
                                    <span class=\"form-selectgroup-label\">
                                        {{ 'desktop'|trans }}
                                    </span>
                                </label>
                                <label class=\"form-selectgroup-item\">
                                    <input type=\"radio\" name=\"datatable_profile\" value=\"{{ constant('\\\\App\\\\Utils\\\\ProfileManager::PROFILE_MOBILE') }}\" class=\"form-selectgroup-input\" data-href=\"{{ path('bookmark_profile') }}\"{% if app.session.get(constant('\\\\App\\\\Utils\\\\ProfileManager::SESSION_PROFILE'), '') == 'mobile' %} checked=\"checked\"{% endif %}>
                                    <span class=\"form-selectgroup-label\">
                                        {{ 'mobile'|trans }}
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"datatable_name\" value=\"{{ name }}\" />
                    <input type=\"hidden\" name=\"datatable_token\" value=\"{{ csrf_token(constant('\\\\App\\\\Controller\\\\BookmarkController::DATATABLE_TOKEN')) }}\" />
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" formaction=\"{{ path('bookmark_delete') }}\" class=\"btn btn-outline-danger me-auto\" data-type=\"reset\">{{ 'action.reset'|trans }}</button>
                <button type=\"submit\" class=\"btn btn-primary\" data-type=\"save\">{{ 'action.save'|trans }}</button>
                <button type=\"button\" class=\"btn\" data-bs-dismiss=\"modal\">{{ 'action.close'|trans }}</button>
            </div>
        </div>
    </div>
</div>
{% endmacro %}

{% macro datatable_header(tableName, columns, query, options) %}
    {% set visibility = initialize_datatable(app.user, app.session, tableName, columns) %}
    {% if query is not null %}
        {% set orderBy = options.orderBy|default(query.orderBy) %}
        {% set order = query.order|lower %}
    {% else %}
        {% set orderBy = false %}
        {% set order = false %}
    {% endif %}
    {% set reloadEvent = options.reload|default('') %}
    {% set boxClass = options.boxClass ?? 'card data_table' %}
    {% set columnModal = options.columnConfig ?? true %}
    {% set responsive = options.responsive ?? false %}
    {% set sticky = options.sticky ?? true %}
    {% set contextMenuId = options.contextMenuId is defined ? options.contextMenuId : 'datatable_' ~ tableName ~ '_contextmenu' %}

    <div class=\"{{ boxClass }} datatable_{{ tableName }}\">
        <div class=\"card-body p-0{% if responsive %} table-responsive{% endif %}\">
            <div class=\"dataTables_wrapper form-inline\">
                <div id=\"{{ contextMenuId }}\" class=\"dropdown-menu d-none\"></div>
                <table class=\"table table-hover dataTable\" role=\"grid\" data-reload-event=\"kimai.reset_column_visibility {{ reloadEvent }}\" data-context-menu=\"{{ contextMenuId }}\">
                    <thead{% if sticky %} class=\"sticky-top\"{% endif %}>
                        <tr>
                        {%- for title, headerOptions in columns -%}
                            {% set isActions = title is not empty and title == 'actions' %}
                            {% if not headerOptions is iterable %}
                                {% set headerOptions = {'class': headerOptions} %}
                            {% endif %}
                            {% if not headerOptions.orderBy is defined %}
                                {% if orderBy is same as(false) %}
                                    {% set headerOptions = headerOptions|merge({'orderBy': false}) %}
                                {% else %}
                                    {% set headerOptions = headerOptions|merge({'orderBy': title}) %}
                                {% endif %}
                            {% endif %}
                            {% set headerClass = _self.data_table_column_class(tableName, columns, title) %}
                            {% if title != 'actions' and not headerOptions.orderBy is same as(false) %}
                                {% if orderBy == headerOptions.orderBy %}
                                    {% set headerClass = headerClass ~ ' sortable sorting_' ~ (order) %}
                                    {% if order == 'asc' %}
                                        {% set ariaSort = 'ascending' %}
                                    {% else %}
                                        {% set ariaSort = 'descending' %}
                                    {% endif %}
                                {% else %}
                                    {% set headerClass = headerClass ~ ' sortable sorting' %}
                                {% endif %}
                            {% endif %}
                            {% set headerTitle = '' %}
                            {% set translationDomain = headerOptions.translation_domain ?? 'messages' %}
                            {% if headerOptions.title is defined %}
                                {% set headerTitle = headerOptions.title|trans({}, translationDomain) %}
                            {% elseif title is not empty and not isActions %}
                                {% set headerTitle = title|trans({}, translationDomain) %}
                            {% endif %}
                            {% if isActions %}
                                {% set headerClass = headerClass ~ ' text-center' %}
                            {% endif %}
                            <th data-field=\"{{ title }}\" {% if not headerOptions.orderBy is same as(false) %}data-order=\"{{ headerOptions.orderBy }}\" {% endif %}class=\"{{ headerClass }}\"{% if ariaSort is defined %} aria-sort=\"{{ ariaSort }}\"{% endif %}>
                            {% if title is not empty and title == 'actions' and columnModal is not same as (false) %}

                                <a class=\"link-secondary\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_{{ tableName }}\">
                                    {{ icon('columns', true) }}
                                </a>

                            {% else %}
                                {% if headerOptions.batchUpdate is defined %}
                                    <input type=\"checkbox\" id=\"multi_update_all_{{ tableName }}\" class=\"multi_update_all multiupdater form-check-input m-0 align-middle\" title=\"{{ 'batch_table_checkbox_all'|trans }}\">
                                {% endif %}
                                {{ headerTitle }}
                                {% if headerOptions.html_after is defined %}
                                    {{ headerOptions.html_after|raw }}
                                {% endif %}
                            {% endif %}
                            </th>
                        {%- endfor -%}
                        </tr>
                    </thead>
                    <tbody>
{% endmacro %}

{% macro data_table_column_class(name, columns, column) %}
{{- datatable_column_class(name, column) -}}
{% endmacro %}

{% macro data_table_footer(entries, route, multi_update_form) %}
                </tbody>
            </table>
        </div>
    </div>
    {% if (route is not empty and entries is not null) or multi_update_form is not null %}
    <div class=\"card-footer d-flex align-items-center\">
        {% if multi_update_form is not null %}
            {{ form_start(multi_update_form, {'attr': {'class': 'multi_update_form', 'style': 'display:none', 'data-question': 'update_multiple'|trans}}) }}
                {% for formChild in multi_update_form.children %}
                    {{ form_widget(formChild) }}
                {% endfor %}
            {{ form_end(multi_update_form) }}
        {% endif %}
        {% if route is not empty and entries is not null %}
            <p class=\"d-none d-sm-block m-0 text-body-secondary multi_update_form_hide\">
                {{ 'pagination'|trans({'%start%': entries.getCurrentPageOffsetStart(), '%end%': entries.getCurrentPageOffsetEnd(), '%total%': entries.getNbResults()}) }}
            </p>
            {% set options = { 'css_container_class': 'pagination m-0 ms-auto d-print-none' } %}
            {% if route is iterable %}
                {% set options = options|merge(route) %}
            {% else %}
                {% set options = options|merge({routeName: route}) %}
            {% endif %}
            {{ pagination(entries, options) }}
        {% endif %}
    </div>
    {% endif %}
</div>
{% endmacro %}

{% macro datatable_meta_column(entry, field) %}
    {% from \"macros/widgets.html.twig\" import meta_field_value %}
    {{ meta_field_value(entry, field) }}
{% endmacro %}

{% macro datatable_multiupdate_row(id) %}
    <input type=\"checkbox\" name=\"id\" value=\"{{ id }}\" class=\"multi_update_single multiupdater form-check-input m-0 align-middle\" title=\"{{ 'batch_table_checkbox'|trans }}\">
{% endmacro %}
", "macros/datatables.html.twig", "C:\\wamp64\\www\\kimai\\templates\\macros\\datatables.html.twig");
    }
}
