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

/* quick-entry/index.html.twig */
class __TwigTemplate_829ce421c1cdea105e61095967c77bf5 extends Template
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

        $this->blocks = [
            'page_class' => [$this, 'block_page_class'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "page_setup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quick-entry/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quick-entry/index.html.twig"));

        $this->parent = $this->loadTemplate("page_setup.html.twig", "quick-entry/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_class"));

        yield "quick-entry-page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "    ";
        yield from $this->loadTemplate("quick-entry/index.html.twig", "quick-entry/index.html.twig", 6, "1191494694")->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script type=\"text/javascript\">
        document.addEventListener('kimai.initialized', function(event) {
            const kimai = event.detail.kimai;
            const DATES = kimai.getPlugin('date');
            /** @type {KimaiFormSelect} FORM_SELECT */
            const FORM_SELECT = kimai.getPlugin('form-select');

            if (window.matchMedia(\"(max-width: 1000px)\").matches) {
                for (let dropdowns of document.querySelectorAll('tr.qe-entry-week-row .btn-duration-preset')) {
                    dropdowns.style.display = 'none';
                }

                for (let tmp of document.querySelectorAll('tr.qe-entry-week-row .duration-widget .input-group')) {
                    tmp.style.maxWidth = '50px';
                    tmp.style.minWidth = '50px';
                }
                for (let input of document.querySelectorAll('tr.qe-entry-week-row input.duration-input')) {
                    input.style.maxWidth = '50px';
                }
                document.querySelector('form[name=quick_entry_form] div.maybe-table-responsive').classList.replace('maybe-table-responsive', 'table-responsive');
            }

            const recalculateTotals = () => {
                const allFields = document.getElementsByClassName('duration-input');
                let totalsPerDay = {0: 0, 1: 0, 2: 0, 3: 0, 4: 0, 5: 0, 6: 0};
                let fullTotals = 0;
                for (let durationInput of allFields) {
                    // turn a string like \"quick_entry_form_rows_16_timesheets_3_duration\" into \"3\"
                    // we can safely use -1 because there are only 0 (monday) to 6 (sunday) indexes
                    let id = durationInput.id.replace(/_duration/, '').slice(-1);
                    totalsPerDay[id] += DATES.getSecondsFromDurationString(durationInput.value);
                }
                for (const [id, total] of Object.entries(totalsPerDay)) {
                    document.getElementById('qe-totals-day-' + id).innerText = DATES.formatSeconds(total);
                    fullTotals += total;
                }
                document.getElementById('qe-totals-week').innerText = DATES.formatSeconds(fullTotals);

                const allRows = document.getElementsByClassName('qe-entry-week-row');
                for (let qeWeekRow of allRows) {
                    let qeWeekRowFields = qeWeekRow.getElementsByClassName('duration-input');
                    let totalsRow = 0;
                    for (let durationInput of qeWeekRowFields) {
                        totalsRow += DATES.getSecondsFromDurationString(durationInput.value);
                    }
                    qeWeekRow.getElementsByClassName('qe-totals-row')[0].innerText = DATES.formatSeconds(totalsRow);
                }
            };
            recalculateTotals();

            document.getElementById('quick-entries-form').addEventListener('click', recalculateTotals);
            document.getElementById('quick-entries-form').addEventListener('change', recalculateTotals);

            const addFormToCollection = function(e) {
                const collectionHolder = document.getElementById(e.currentTarget.dataset.collectionHolder);
                const collectionPrototype = document.getElementById(e.currentTarget.dataset.collectionPrototype);

                const fakeNode = document.createElement('table');
                fakeNode.innerHTML = collectionPrototype
                    .dataset
                    .prototype
                    .replace(
                        /__name__/g,
                        collectionHolder.dataset.index
                    );

                let node = fakeNode.children[0];
                if (node.nodeName.toUpperCase() === 'TBODY') {
                    node = node.children[0];
                }

                collectionHolder.appendChild(node);


                [].slice.call(node.querySelectorAll('.selectpicker')).map((element) => {
                    FORM_SELECT.activateSelectPickerByElement(element);
                });

                collectionHolder.dataset.index++;
                recalculateTotals();
            };

            document.querySelectorAll('.add-item-link').forEach(btn => btn.addEventListener(\"click\", addFormToCollection));
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "quick-entry/index.html.twig";
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
        return array (  126 => 58,  113 => 57,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'page_setup.html.twig' %}

{% block page_class %}quick-entry-page{% endblock %}

{% block main %}
    {% embed '@theme/embeds/card.html.twig' %}
        {% import \"macros/widgets.html.twig\" as widgets %}
        {% block box_attributes %}id=\"quick_entry_box\"{% endblock %}
        {% block box_class %}mt-2{% endblock %}
        {% block box_before %}
            {{ form_start(form, {attr: {id: 'quick-entries-form', class: 'form-dataTable quick-entries'}}) }}
            {{ form_widget(form._token) }}
            {{ form_errors(form) }}
        {% endblock %}
        {% block box_after %}
            <input type=\"submit\" value=\"{{ 'action.save'|trans }}\" class=\"btn btn-primary\" />
            <button type=\"button\" class=\"btn btn-success add-item-link\" data-collection-prototype=\"{{ form.rows.vars.id }}\" data-collection-holder=\"ts-collection\">
                {{ icon('create', true) }}
                {{ 'action.add'|trans }}
            </button>
            {{ form_end(form) }}
        {% endblock %}
        {# \"table-responsive\" does not work, because that would render dropdowns at the bottom behind the container #}
        {% block box_body_class %}p-0 maybe-table-responsive{% endblock %}
        {% block box_body %}
            <table class=\"table dataTable\">
                <thead class=\"sticky-top\">
                    <tr>
                        <th>{{ 'project'|trans }}</th>
                        <th>{{ 'activity'|trans }}</th>
                        {% for id, week in days %}
                        <th class=\"text-center{% if week.day is weekend %} weekend{% endif %}{% if week.day is today %} today{% endif %}\">
                            {{ week.day|date_weekday }}
                        </th>
                        {% endfor %}
                        <th class=\"summary\">{{ 'duration'|trans }}</th>
                    </tr>
                </thead>
                <tbody id=\"ts-collection\" data-index=\"{{ form.rows.children|length }}\">
                    {{ form_widget(form.rows) }}
                </tbody>
                <tfoot>
                    <tr class=\"summary\">
                        <td>{{ 'stats.durationTotal'|trans }}</td>
                        <td></td>
                        {% for id, week in days %}
                            <td class=\"text-center\" id=\"qe-totals-day-{{ loop.index0 }}\"></td>
                        {% endfor %}
                        <td class=\"text-center\" id=\"qe-totals-week\"></td>
                    </tr>
                </tfoot>
            </table>
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        document.addEventListener('kimai.initialized', function(event) {
            const kimai = event.detail.kimai;
            const DATES = kimai.getPlugin('date');
            /** @type {KimaiFormSelect} FORM_SELECT */
            const FORM_SELECT = kimai.getPlugin('form-select');

            if (window.matchMedia(\"(max-width: 1000px)\").matches) {
                for (let dropdowns of document.querySelectorAll('tr.qe-entry-week-row .btn-duration-preset')) {
                    dropdowns.style.display = 'none';
                }

                for (let tmp of document.querySelectorAll('tr.qe-entry-week-row .duration-widget .input-group')) {
                    tmp.style.maxWidth = '50px';
                    tmp.style.minWidth = '50px';
                }
                for (let input of document.querySelectorAll('tr.qe-entry-week-row input.duration-input')) {
                    input.style.maxWidth = '50px';
                }
                document.querySelector('form[name=quick_entry_form] div.maybe-table-responsive').classList.replace('maybe-table-responsive', 'table-responsive');
            }

            const recalculateTotals = () => {
                const allFields = document.getElementsByClassName('duration-input');
                let totalsPerDay = {0: 0, 1: 0, 2: 0, 3: 0, 4: 0, 5: 0, 6: 0};
                let fullTotals = 0;
                for (let durationInput of allFields) {
                    // turn a string like \"quick_entry_form_rows_16_timesheets_3_duration\" into \"3\"
                    // we can safely use -1 because there are only 0 (monday) to 6 (sunday) indexes
                    let id = durationInput.id.replace(/_duration/, '').slice(-1);
                    totalsPerDay[id] += DATES.getSecondsFromDurationString(durationInput.value);
                }
                for (const [id, total] of Object.entries(totalsPerDay)) {
                    document.getElementById('qe-totals-day-' + id).innerText = DATES.formatSeconds(total);
                    fullTotals += total;
                }
                document.getElementById('qe-totals-week').innerText = DATES.formatSeconds(fullTotals);

                const allRows = document.getElementsByClassName('qe-entry-week-row');
                for (let qeWeekRow of allRows) {
                    let qeWeekRowFields = qeWeekRow.getElementsByClassName('duration-input');
                    let totalsRow = 0;
                    for (let durationInput of qeWeekRowFields) {
                        totalsRow += DATES.getSecondsFromDurationString(durationInput.value);
                    }
                    qeWeekRow.getElementsByClassName('qe-totals-row')[0].innerText = DATES.formatSeconds(totalsRow);
                }
            };
            recalculateTotals();

            document.getElementById('quick-entries-form').addEventListener('click', recalculateTotals);
            document.getElementById('quick-entries-form').addEventListener('change', recalculateTotals);

            const addFormToCollection = function(e) {
                const collectionHolder = document.getElementById(e.currentTarget.dataset.collectionHolder);
                const collectionPrototype = document.getElementById(e.currentTarget.dataset.collectionPrototype);

                const fakeNode = document.createElement('table');
                fakeNode.innerHTML = collectionPrototype
                    .dataset
                    .prototype
                    .replace(
                        /__name__/g,
                        collectionHolder.dataset.index
                    );

                let node = fakeNode.children[0];
                if (node.nodeName.toUpperCase() === 'TBODY') {
                    node = node.children[0];
                }

                collectionHolder.appendChild(node);


                [].slice.call(node.querySelectorAll('.selectpicker')).map((element) => {
                    FORM_SELECT.activateSelectPickerByElement(element);
                });

                collectionHolder.dataset.index++;
                recalculateTotals();
            };

            document.querySelectorAll('.add-item-link').forEach(btn => btn.addEventListener(\"click\", addFormToCollection));
        });
    </script>
{% endblock %}
", "quick-entry/index.html.twig", "C:\\wamp64\\www\\kimai\\templates\\quick-entry\\index.html.twig");
    }
}


/* quick-entry/index.html.twig */
class __TwigTemplate_829ce421c1cdea105e61095967c77bf5___1191494694 extends Template
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

        $this->blocks = [
            'box_attributes' => [$this, 'block_box_attributes'],
            'box_class' => [$this, 'block_box_class'],
            'box_before' => [$this, 'block_box_before'],
            'box_after' => [$this, 'block_box_after'],
            'box_body_class' => [$this, 'block_box_body_class'],
            'box_body' => [$this, 'block_box_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 6
        return "@theme/embeds/card.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quick-entry/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quick-entry/index.html.twig"));

        // line 7
        $macros["widgets"] = $this->macros["widgets"] = $this->loadTemplate("macros/widgets.html.twig", "quick-entry/index.html.twig", 7)->unwrap();
        // line 6
        $this->parent = $this->loadTemplate("@theme/embeds/card.html.twig", "quick-entry/index.html.twig", 6);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
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

        yield "id=\"quick_entry_box\"";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        yield "mt-2";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "            ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["id" => "quick-entries-form", "class" => "form-dataTable quick-entries"]]);
        yield "
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "_token", [], "any", false, false, false, 12), 'widget');
        yield "
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'errors');
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
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

        // line 16
        yield "            <input type=\"submit\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"), "html", null, true);
        yield "\" class=\"btn btn-primary\" />
            <button type=\"button\" class=\"btn btn-success add-item-link\" data-collection-prototype=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "rows", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
        yield "\" data-collection-holder=\"ts-collection\">
                ";
        // line 18
        yield $this->env->getRuntime('KevinPapst\TablerBundle\Twig\RuntimeExtension')->createIcon("create", true);
        yield "
                ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.add"), "html", null, true);
        yield "
            </button>
            ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
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

        yield "p-0 maybe-table-responsive";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
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

        // line 26
        yield "            <table class=\"table dataTable\">
                <thead class=\"sticky-top\">
                    <tr>
                        <th>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("project"), "html", null, true);
        yield "</th>
                        <th>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("activity"), "html", null, true);
        yield "</th>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["week"]) {
            // line 32
            yield "                        <th class=\"text-center";
            if ($this->extensions['App\Twig\LocaleFormatExtensions']->isWeekend(CoreExtension::getAttribute($this->env, $this->source, $context["week"], "day", [], "any", false, false, false, 32))) {
                yield " weekend";
            }
            if ($this->env->getTest('today')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["week"], "day", [], "any", false, false, false, 32))) {
                yield " today";
            }
            yield "\">
                            ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\LocaleFormatExtensions']->dateWeekday(CoreExtension::getAttribute($this->env, $this->source, $context["week"], "day", [], "any", false, false, false, 33)), "html", null, true);
            yield "
                        </th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['id'], $context['week'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                        <th class=\"summary\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("duration"), "html", null, true);
        yield "</th>
                    </tr>
                </thead>
                <tbody id=\"ts-collection\" data-index=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "rows", [], "any", false, false, false, 39), "children", [], "any", false, false, false, 39)), "html", null, true);
        yield "\">
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "rows", [], "any", false, false, false, 40), 'widget');
        yield "
                </tbody>
                <tfoot>
                    <tr class=\"summary\">
                        <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stats.durationTotal"), "html", null, true);
        yield "</td>
                        <td></td>
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 46, $this->source); })()));
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
        foreach ($context['_seq'] as $context["id"] => $context["week"]) {
            // line 47
            yield "                            <td class=\"text-center\" id=\"qe-totals-day-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 47), "html", null, true);
            yield "\"></td>
                        ";
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
        unset($context['_seq'], $context['id'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                        <td class=\"text-center\" id=\"qe-totals-week\"></td>
                    </tr>
                </tfoot>
            </table>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "quick-entry/index.html.twig";
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
        return array (  707 => 49,  690 => 47,  673 => 46,  668 => 44,  661 => 40,  657 => 39,  650 => 36,  641 => 33,  631 => 32,  627 => 31,  623 => 30,  619 => 29,  614 => 26,  601 => 25,  578 => 24,  565 => 21,  560 => 19,  556 => 18,  552 => 17,  547 => 16,  534 => 15,  521 => 13,  517 => 12,  512 => 11,  499 => 10,  476 => 9,  453 => 8,  442 => 6,  440 => 7,  427 => 6,  126 => 58,  113 => 57,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'page_setup.html.twig' %}

{% block page_class %}quick-entry-page{% endblock %}

{% block main %}
    {% embed '@theme/embeds/card.html.twig' %}
        {% import \"macros/widgets.html.twig\" as widgets %}
        {% block box_attributes %}id=\"quick_entry_box\"{% endblock %}
        {% block box_class %}mt-2{% endblock %}
        {% block box_before %}
            {{ form_start(form, {attr: {id: 'quick-entries-form', class: 'form-dataTable quick-entries'}}) }}
            {{ form_widget(form._token) }}
            {{ form_errors(form) }}
        {% endblock %}
        {% block box_after %}
            <input type=\"submit\" value=\"{{ 'action.save'|trans }}\" class=\"btn btn-primary\" />
            <button type=\"button\" class=\"btn btn-success add-item-link\" data-collection-prototype=\"{{ form.rows.vars.id }}\" data-collection-holder=\"ts-collection\">
                {{ icon('create', true) }}
                {{ 'action.add'|trans }}
            </button>
            {{ form_end(form) }}
        {% endblock %}
        {# \"table-responsive\" does not work, because that would render dropdowns at the bottom behind the container #}
        {% block box_body_class %}p-0 maybe-table-responsive{% endblock %}
        {% block box_body %}
            <table class=\"table dataTable\">
                <thead class=\"sticky-top\">
                    <tr>
                        <th>{{ 'project'|trans }}</th>
                        <th>{{ 'activity'|trans }}</th>
                        {% for id, week in days %}
                        <th class=\"text-center{% if week.day is weekend %} weekend{% endif %}{% if week.day is today %} today{% endif %}\">
                            {{ week.day|date_weekday }}
                        </th>
                        {% endfor %}
                        <th class=\"summary\">{{ 'duration'|trans }}</th>
                    </tr>
                </thead>
                <tbody id=\"ts-collection\" data-index=\"{{ form.rows.children|length }}\">
                    {{ form_widget(form.rows) }}
                </tbody>
                <tfoot>
                    <tr class=\"summary\">
                        <td>{{ 'stats.durationTotal'|trans }}</td>
                        <td></td>
                        {% for id, week in days %}
                            <td class=\"text-center\" id=\"qe-totals-day-{{ loop.index0 }}\"></td>
                        {% endfor %}
                        <td class=\"text-center\" id=\"qe-totals-week\"></td>
                    </tr>
                </tfoot>
            </table>
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        document.addEventListener('kimai.initialized', function(event) {
            const kimai = event.detail.kimai;
            const DATES = kimai.getPlugin('date');
            /** @type {KimaiFormSelect} FORM_SELECT */
            const FORM_SELECT = kimai.getPlugin('form-select');

            if (window.matchMedia(\"(max-width: 1000px)\").matches) {
                for (let dropdowns of document.querySelectorAll('tr.qe-entry-week-row .btn-duration-preset')) {
                    dropdowns.style.display = 'none';
                }

                for (let tmp of document.querySelectorAll('tr.qe-entry-week-row .duration-widget .input-group')) {
                    tmp.style.maxWidth = '50px';
                    tmp.style.minWidth = '50px';
                }
                for (let input of document.querySelectorAll('tr.qe-entry-week-row input.duration-input')) {
                    input.style.maxWidth = '50px';
                }
                document.querySelector('form[name=quick_entry_form] div.maybe-table-responsive').classList.replace('maybe-table-responsive', 'table-responsive');
            }

            const recalculateTotals = () => {
                const allFields = document.getElementsByClassName('duration-input');
                let totalsPerDay = {0: 0, 1: 0, 2: 0, 3: 0, 4: 0, 5: 0, 6: 0};
                let fullTotals = 0;
                for (let durationInput of allFields) {
                    // turn a string like \"quick_entry_form_rows_16_timesheets_3_duration\" into \"3\"
                    // we can safely use -1 because there are only 0 (monday) to 6 (sunday) indexes
                    let id = durationInput.id.replace(/_duration/, '').slice(-1);
                    totalsPerDay[id] += DATES.getSecondsFromDurationString(durationInput.value);
                }
                for (const [id, total] of Object.entries(totalsPerDay)) {
                    document.getElementById('qe-totals-day-' + id).innerText = DATES.formatSeconds(total);
                    fullTotals += total;
                }
                document.getElementById('qe-totals-week').innerText = DATES.formatSeconds(fullTotals);

                const allRows = document.getElementsByClassName('qe-entry-week-row');
                for (let qeWeekRow of allRows) {
                    let qeWeekRowFields = qeWeekRow.getElementsByClassName('duration-input');
                    let totalsRow = 0;
                    for (let durationInput of qeWeekRowFields) {
                        totalsRow += DATES.getSecondsFromDurationString(durationInput.value);
                    }
                    qeWeekRow.getElementsByClassName('qe-totals-row')[0].innerText = DATES.formatSeconds(totalsRow);
                }
            };
            recalculateTotals();

            document.getElementById('quick-entries-form').addEventListener('click', recalculateTotals);
            document.getElementById('quick-entries-form').addEventListener('change', recalculateTotals);

            const addFormToCollection = function(e) {
                const collectionHolder = document.getElementById(e.currentTarget.dataset.collectionHolder);
                const collectionPrototype = document.getElementById(e.currentTarget.dataset.collectionPrototype);

                const fakeNode = document.createElement('table');
                fakeNode.innerHTML = collectionPrototype
                    .dataset
                    .prototype
                    .replace(
                        /__name__/g,
                        collectionHolder.dataset.index
                    );

                let node = fakeNode.children[0];
                if (node.nodeName.toUpperCase() === 'TBODY') {
                    node = node.children[0];
                }

                collectionHolder.appendChild(node);


                [].slice.call(node.querySelectorAll('.selectpicker')).map((element) => {
                    FORM_SELECT.activateSelectPickerByElement(element);
                });

                collectionHolder.dataset.index++;
                recalculateTotals();
            };

            document.querySelectorAll('.add-item-link').forEach(btn => btn.addEventListener(\"click\", addFormToCollection));
        });
    </script>
{% endblock %}
", "quick-entry/index.html.twig", "C:\\wamp64\\www\\kimai\\templates\\quick-entry\\index.html.twig");
    }
}
