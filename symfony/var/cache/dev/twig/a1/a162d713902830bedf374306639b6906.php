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

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_e5caac246f2c37815b62cb791d025dd1 extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "data", [], "any", false, false, false, 4), "nb_errors", [], "any", false, false, false, 4) > 0) || Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "data", [], "any", false, false, false, 4), "forms", [], "any", false, false, false, 4)))) {
            // line 5
            yield "        ";
            $context["status_color"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 5, $this->source); })()), "data", [], "any", false, false, false, 5), "nb_errors", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : (""));
            // line 6
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 7
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/form.svg");
                yield "
            <span class=\"sf-toolbar-value\">
                ";
                // line 9
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, false, 9), "nb_errors", [], "any", false, false, false, 9)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, false, 9), "nb_errors", [], "any", false, false, false, 9), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, false, 9), "forms", [], "any", false, false, false, 9)), "html", null, true)));
                yield "
            </span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            yield "
        ";
            // line 13
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 14
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "data", [], "any", false, false, false, 16), "forms", [], "any", false, false, false, 16)), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 20
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "data", [], "any", false, false, false, 20), "nb_errors", [], "any", false, false, false, 20) > 0)) ? ("red") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "data", [], "any", false, false, false, 20), "nb_errors", [], "any", false, false, false, 20), "html", null, true);
                yield "</span>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            yield "
        ";
            // line 24
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 24, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 24, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        yield "    <span class=\"label label-status-";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "data", [], "any", false, false, false, 29), "nb_errors", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("error") : (""));
        yield " ";
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "data", [], "any", false, false, false, 29), "forms", [], "any", false, false, false, 29))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\" aria-hidden=\"true\">";
        // line 30
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/form.svg");
        yield "</span>
        <strong>Forms</strong>
        ";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "data", [], "any", false, false, false, 32), "nb_errors", [], "any", false, false, false, 32) > 0)) {
            // line 33
            yield "            <span class=\"count\">
                <span>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 34, $this->source); })()), "data", [], "any", false, false, false, 34), "nb_errors", [], "any", false, false, false, 34), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 37
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 41
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "

    <style>
        .form-type-class {
            font-size: var(--font-size-body);
            display: flex;
            margin: 0 0 15px;
        }
        .form-type-class-label {
            margin-right: 4px;
        }
        .form-type-class pre.sf-dump {
            font-family: var(--font-family-system) !important;
            font-size: var(--font-size-body) !important;
            margin-left: 5px;
        }
        .form-type-class .sf-dump .sf-dump-str {
            color: var(--color-link) !important;
            text-decoration: underline;
        }
        .form-type-class .sf-dump .sf-dump-str:hover {
            text-decoration: none;
        }

        .sf-profiler-form-col-property { width: 180px; }

        .tree-wrapper { display: flex; gap: 0; }

        #tree-menu {
            padding-right: 10px;
            width: 220px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            box-shadow: none !important;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid var(--table-border-color);
            padding-left: 20px;
            flex: 1;
            min-width: 0;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
        }
        .closed .toggle-icon, .closed.toggle-icon {
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;
            overflow: hidden;
            text-overflow: ellipsis;
            display: flex;
            align-items: center;
        }
        .tree .toggle-button {
            width: 16px;
            height: 16px;
            margin-left: -18px;
            display: inline-grid;
            place-content: center;
            background: none;
            border: none;
            transition: transform 200ms;
        }
        .tree .toggle-button.closed svg {
            transform: rotate(-90deg);
        }
        .tree .toggle-button svg {
            transform: rotate(0deg);
            width: 16px;
            height: 16px;
        }
        .tree .toggle-icon.empty {
            width: 5px;
            height: 5px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            margin-left: -13px;
        }
        .tree .tree-inner {
            border-radius: 4px;
        }
        .tree ul ul .tree-inner {
            padding-left: 32px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 48px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 64px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 72px;
        }
        .tree .tree-inner:hover {
            background: var(--gray-200);
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: var(--tree-active-background);
            font-weight: bold;
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            background: var(--background-error);
            color: var(--base-0, #FFF);
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: var(--color-error);
        }
        .errors h3 {
            color: var(--color-error);
        }
        .errors th {
            background: var(--background-error);
            color: var(--base-0, #FFF);
        }
        .errors .toggle-icon {
            background-color: var(--background-error);
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 202
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

        // line 203
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        window.addEventListener(\x27DOMContentLoaded\x27, () => {
            new SymfonyProfilerFormPanel();
        });

        class SymfonyProfilerFormPanel {
            #activeTreeItem;
            #activeTreePanel;
            #storage;
            #storageKey = \x27sf_toggle_data\x27;
            #togglerStates = {};

            constructor() {
                this.#storage = sessionStorage;
                this.#initTrees();
                this.#initTogglerButtons();
            }

            #initTrees() {
                const treeItems = document.querySelectorAll(\x27.tree .tree-inner\x27);
                treeItems.forEach((treeItem) => {
                    const targetId = treeItem.getAttribute(\x27data-tab-target-id\x27);
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Tab target \${targetId} does not exist`;
                    }

                    treeItem.addEventListener(\x27click\x27, (e) => {
                        this.#selectTreeItem(treeItem);

                        e.stopPropagation();
                        return false;
                    });

                    target.classList.add(\x27hidden\x27);
                });

                if (treeItems.length > 0) {
                    this.#selectTreeItem(treeItems[0]);
                }
            };

            #selectTreeItem(treeItem) {
                const treePanelId = treeItem.getAttribute(\x27data-tab-target-id\x27);
                const treePanel = document.getElementById(treePanelId);

                if (!treePanel) {
                    throw `The tree panel \${treePanelId} does not exist`;
                }

                if (this.#activeTreeItem) {
                    this.#activeTreeItem.classList.remove(\x27active\x27);
                }

                if (this.#activeTreePanel) {
                    this.#activeTreePanel.classList.add(\x27hidden\x27);
                }

                treeItem.classList.add(\x27active\x27);
                treePanel.classList.remove(\x27hidden\x27);

                this.#activeTreeItem = treeItem;
                this.#activeTreePanel = treePanel;
            }

            #initTogglerButtons() {
                this.#togglerStates = this.#getTogglerStates();
                if (!this.#isObject(this.#togglerStates)) {
                    this.#togglerStates = {};
                }

                const buttons = document.querySelectorAll(\x27.toggle-button\x27);
                buttons.forEach((button) => {
                    const targetId = button.getAttribute(\x27data-toggle-target-id\x27);
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Toggle target \${targetId} does not exist`;
                    }

                    // correct the initial state of the button
                    if (target.classList.contains(\x27hidden\x27)) {
                        button.classList.add(\x27closed\x27);
                    }

                    button.addEventListener(\x27click\x27, (e) => {
                        this.#toggleToggler(button);

                        e.stopPropagation();
                        return false;
                    });

                    if (this.#togglerStates.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === this.#togglerStates[targetId]) {
                            this.#collapseToggler(button);
                        } else {
                            this.#expandToggler(button);
                        }
                    }
                });
            };

            #isTogglerCollapsed(button) {
                return button.classList.contains(\x27closed\x27);
            }

            #isTogglerExpanded(button) {
                return !this.#isTogglerCollapsed(button);
            }

            #expandToggler(button) {
                const targetId = button.getAttribute(\x27data-toggle-target-id\x27);
                const target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (this.#isTogglerCollapsed(button)) {
                    button.classList.remove(\x27closed\x27);
                    target.classList.remove(\x27hidden\x27);

                    this.#togglerStates[targetId] = 1;
                    this.#saveTogglerStates();
                }
            }

            #collapseToggler(button) {
                const targetId = button.getAttribute(\x27data-toggle-target-id\x27);
                const target = document.getElementById(targetId);

                if (!target) {
                    throw `Toggle target \${targetId} does not exist`;
                }

                if (this.#isTogglerExpanded(button)) {
                    button.classList.add(\x27closed\x27);
                    target.classList.add(\x27hidden\x27);

                    this.#togglerStates[targetId] = 0;
                    this.#saveTogglerStates();
                }
            }

            #toggleToggler(button) {
                if (button.classList.contains(\x27closed\x27)) {
                    this.#expandToggler(button);
                } else {
                    this.#collapseToggler(button);
                }
            }

            #saveTogglerStates() {
                this.#storage.setItem(this.#storageKey, JSON.stringify(this.#togglerStates));
            }

            #getTogglerStates() {
                const data = this.#storage.getItem(this.#storageKey);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return {};
            }

            #isObject(variable) {
                return null !== variable && \x27object\x27 === typeof variable && !Array.isArray(variable);
            }
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 383
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 384
        yield "    <h2>Forms</h2>

    ";
        // line 386
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 386, $this->source); })()), "data", [], "any", false, false, false, 386), "forms", [], "any", false, false, false, 386))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 387
            yield "        <div class=\"tree-wrapper\">
            <div id=\"tree-menu\" class=\"tree\">
                <ul>
                ";
            // line 390
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 390, $this->source); })()), "data", [], "any", false, false, false, 390), "forms", [], "any", false, false, false, 390));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 391
                yield "                    ";
                yield $this->getTemplateForMacro("macro_form_tree_entry", $context, 391, $this->getSourceContext())->macro_form_tree_entry(...[$context["formName"], $context["formData"], true]);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['formName'], $context['formData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 393
            yield "                </ul>
            </div>

            <div id=\"tree-details-container\">
                ";
            // line 397
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 397, $this->source); })()), "data", [], "any", false, false, false, 397), "forms", [], "any", false, false, false, 397));
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
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 398
                yield "                    ";
                yield $this->getTemplateForMacro("macro_form_tree_details", $context, 398, $this->getSourceContext())->macro_form_tree_details(...[$context["formName"], $context["formData"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 398, $this->source); })()), "data", [], "any", false, false, false, 398), "forms_by_hash", [], "any", false, false, false, 398), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 398)]);
                yield "
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
            unset($context['_seq'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 400
            yield "            </div>
        </div>
    ";
        } else {
            // line 403
            yield "        <div class=\"empty empty-panel\">
            <p>No forms were submitted.</p>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 409
    public function macro_form_tree_entry($name = null, $data = null, $is_root = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "data" => $data,
            "is_root" => $is_root,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            // line 410
            yield "    ";
            $context["has_error"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 410) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 410, $this->source); })()), "errors", [], "any", false, false, false, 410)) > 0));
            // line 411
            yield "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 412, $this->source); })()), "id", [], "any", false, false, false, 412), "html", null, true);
            yield "-details\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 412, $this->source); })()), "(no name)")) : ("(no name)")), "html", null, true);
            yield "\">
            ";
            // line 413
            if ((($tmp = (isset($context["has_error"]) || array_key_exists("has_error", $context) ? $context["has_error"] : (function () { throw new RuntimeError('Variable "has_error" does not exist.', 413, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 414
                yield "                <div class=\"badge-error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 414, $this->source); })()), "errors", [], "any", false, false, false, 414)), "html", null, true);
                yield "</div>
            ";
            }
            // line 416
            yield "
            ";
            // line 417
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 417, $this->source); })()), "children", [], "any", false, false, false, 417))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 418
                yield "                <button class=\"toggle-button\" data-toggle-target-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 418, $this->source); })()), "id", [], "any", false, false, false, 418), "html", null, true);
                yield "-children\">
                    ";
                // line 419
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                yield "
                </button>
            ";
            } else {
                // line 422
                yield "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 424
            yield "
            <span ";
            // line 425
            if (((isset($context["has_error"]) || array_key_exists("has_error", $context) ? $context["has_error"] : (function () { throw new RuntimeError('Variable "has_error" does not exist.', 425, $this->source); })()) || ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, false, 425)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 425, $this->source); })()), "has_children_error", [], "any", false, false, false, 425), false)) : (false)))) {
                yield "class=\"has-error\"";
            }
            yield ">
                ";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 426, $this->source); })()), "(no name)")) : ("(no name)")), "html", null, true);
            yield "
            </span>
        </div>

        ";
            // line 430
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 430, $this->source); })()), "children", [], "any", false, false, false, 430))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 431
                yield "            <ul id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 431, $this->source); })()), "id", [], "any", false, false, false, 431), "html", null, true);
                yield "-children\" ";
                if (( !(isset($context["is_root"]) || array_key_exists("is_root", $context) ? $context["is_root"] : (function () { throw new RuntimeError('Variable "is_root" does not exist.', 431, $this->source); })()) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, false, 431)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 431, $this->source); })()), "has_children_error", [], "any", false, false, false, 431), false)) : (false)))) {
                    yield "class=\"hidden\"";
                }
                yield ">
                ";
                // line 432
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 432, $this->source); })()), "children", [], "any", false, false, false, 432));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 433
                    yield "                    ";
                    yield $this->getTemplateForMacro("macro_form_tree_entry", $context, 433, $this->getSourceContext())->macro_form_tree_entry(...[$context["childName"], $context["childData"], false]);
                    yield "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['childName'], $context['childData'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 435
                yield "            </ul>
        ";
            }
            // line 437
            yield "    </li>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 440
    public function macro_form_tree_details($name = null, $data = null, $forms_by_hash = null, $show = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "data" => $data,
            "forms_by_hash" => $forms_by_hash,
            "show" => $show,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_details"));

            // line 441
            yield "    <div class=\"tree-details";
            if ((($tmp =  !((array_key_exists("show", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 441, $this->source); })()), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " hidden";
            }
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", true, true, false, 441)) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 441, $this->source); })()), "id", [], "any", false, false, false, 441), "html", null, true);
                yield "-details\"";
            }
            yield ">
        <h2>";
            // line 442
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 442, $this->source); })()), "(no name)")) : ("(no name)")), "html", null, true);
            yield "</h2>
        ";
            // line 443
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "type_class", [], "any", true, true, false, 443)) {
                // line 444
                yield "            <div class=\"form-type-class\">
                <span class=\"form-type-class-label\">Form type:</span>
                ";
                // line 446
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 446, $this->source); })()), "type_class", [], "any", false, false, false, 446));
                yield "
            </div>
        ";
            }
            // line 449
            yield "
        ";
            // line 450
            $context["form_has_errors"] =  !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 450) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 450, $this->source); })()), "errors", [], "any", false, false, false, 450)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 450, $this->source); })()), "errors", [], "any", false, false, false, 450)) : ([])));
            // line 451
            yield "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 452
            yield (((($tmp = (isset($context["form_has_errors"]) || array_key_exists("form_has_errors", $context) ? $context["form_has_errors"] : (function () { throw new RuntimeError('Variable "form_has_errors" does not exist.', 452, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("disabled"));
            yield "\">
                <h3 class=\"tab-title\">Errors</h3>

                <div class=\"tab-content\">
                    ";
            // line 456
            yield $this->getTemplateForMacro("macro_render_form_errors", $context, 456, $this->getSourceContext())->macro_render_form_errors(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 456, $this->source); })())]);
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 460
            yield (((($tmp =  !(isset($context["form_has_errors"]) || array_key_exists("form_has_errors", $context) ? $context["form_has_errors"] : (function () { throw new RuntimeError('Variable "form_has_errors" does not exist.', 460, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : (""));
            yield "\">
                <h3 class=\"tab-title\">Default Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 464
            yield $this->getTemplateForMacro("macro_render_form_default_data", $context, 464, $this->getSourceContext())->macro_render_form_default_data(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 464, $this->source); })())]);
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 468
            yield ((Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", true, true, false, 468) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 468, $this->source); })()), "submitted_data", [], "any", false, false, false, 468)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 468, $this->source); })()), "submitted_data", [], "any", false, false, false, 468)) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Submitted Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 472
            yield $this->getTemplateForMacro("macro_render_form_submitted_data", $context, 472, $this->getSourceContext())->macro_render_form_submitted_data(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 472, $this->source); })())]);
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 476
            yield ((Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, false, 476) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 476, $this->source); })()), "passed_options", [], "any", false, false, false, 476)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 476, $this->source); })()), "passed_options", [], "any", false, false, false, 476)) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Passed Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 480
            yield $this->getTemplateForMacro("macro_render_form_passed_options", $context, 480, $this->getSourceContext())->macro_render_form_passed_options(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 480, $this->source); })())]);
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 484
            yield ((Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, false, 484) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 484, $this->source); })()), "resolved_options", [], "any", false, false, false, 484)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 484, $this->source); })()), "resolved_options", [], "any", false, false, false, 484)) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Resolved Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 488
            yield $this->getTemplateForMacro("macro_render_form_resolved_options", $context, 488, $this->getSourceContext())->macro_render_form_resolved_options(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 488, $this->source); })())]);
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 492
            yield ((Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, false, 492) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 492, $this->source); })()), "view_vars", [], "any", false, false, false, 492)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 492, $this->source); })()), "view_vars", [], "any", false, false, false, 492)) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">View Vars</h3>

                <div class=\"tab-content\">
                    ";
            // line 496
            yield $this->getTemplateForMacro("macro_render_form_view_variables", $context, 496, $this->getSourceContext())->macro_render_form_view_variables(...[(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 496, $this->source); })())]);
            yield "
                </div>
            </div>
        </div>
    </div>

    ";
            // line 502
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 502, $this->source); })()), "children", [], "any", false, false, false, 502));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 503
                yield "        ";
                yield $this->getTemplateForMacro("macro_form_tree_details", $context, 503, $this->getSourceContext())->macro_form_tree_details(...[$context["childName"], $context["childData"], (isset($context["forms_by_hash"]) || array_key_exists("forms_by_hash", $context) ? $context["forms_by_hash"] : (function () { throw new RuntimeError('Variable "forms_by_hash" does not exist.', 503, $this->source); })())]);
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['childName'], $context['childData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 507
    public function macro_render_form_errors($data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_errors"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_errors"));

            // line 508
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 508) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 508, $this->source); })()), "errors", [], "any", false, false, false, 508)) > 0))) {
                // line 509
                yield "        <div class=\"errors\">
            <table id=\"";
                // line 510
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 510, $this->source); })()), "id", [], "any", false, false, false, 510), "html", null, true);
                yield "-errors\">
                <thead>
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 519
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 519, $this->source); })()), "errors", [], "any", false, false, false, 519));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 520
                    yield "                    <tr>
                        <td>";
                    // line 521
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 521), "html", null, true);
                    yield "</td>
                        <td>
                            ";
                    // line 523
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 523))) {
                        // line 524
                        yield "                                <em>This form.</em>
                            ";
                    } elseif ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source,                     // line 525
($context["forms_by_hash"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 525), [], "array", true, true, false, 525)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 526
                        yield "                                <em>Unknown.</em>
                            ";
                    } else {
                        // line 528
                        yield "                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["forms_by_hash"]) || array_key_exists("forms_by_hash", $context) ? $context["forms_by_hash"] : (function () { throw new RuntimeError('Variable "forms_by_hash" does not exist.', 528, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 528), [], "array", false, false, false, 528), "name", [], "any", false, false, false, 528), "html", null, true);
                        yield "
                            ";
                    }
                    // line 530
                    yield "                        </td>
                        <td>
                            ";
                    // line 532
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, false, 532)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 533
                        yield "                                <span class=\"newline\">Caused by:</span>
                                ";
                        // line 534
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, false, 534));
                        foreach ($context['_seq'] as $context["_key"] => $context["stacked"]) {
                            // line 535
                            yield "                                    ";
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["stacked"]);
                            yield "
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['stacked'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 537
                        yield "                            ";
                    } else {
                        // line 538
                        yield "                                <em>Unknown.</em>
                            ";
                    }
                    // line 540
                    yield "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 543
                yield "                </tbody>
            </table>
        </div>
    ";
            } else {
                // line 547
                yield "        <div class=\"empty\">
            <p>This form has no errors.</p>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 553
    public function macro_render_form_default_data($data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_default_data"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_default_data"));

            // line 554
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", true, true, false, 554)) {
                // line 555
                yield "        <table>
            <thead>
            <tr>
                <th class=\"sf-profiler-form-col-property\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 566
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, false, 566), "model", [], "any", true, true, false, 566)) {
                    // line 567
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 567, $this->source); })()), "default_data", [], "any", false, false, false, 567), "seek", ["model"], "method", false, false, false, 567));
                    yield "
                    ";
                } else {
                    // line 569
                    yield "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 571
                yield "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 575
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 575, $this->source); })()), "default_data", [], "any", false, false, false, 575), "seek", ["norm"], "method", false, false, false, 575));
                yield "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 580
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, false, 580), "view", [], "any", true, true, false, 580)) {
                    // line 581
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 581, $this->source); })()), "default_data", [], "any", false, false, false, 581), "seek", ["view"], "method", false, false, false, 581));
                    yield "
                    ";
                } else {
                    // line 583
                    yield "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 585
                yield "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 590
                yield "        <div class=\"empty\">
            <p>No default data defined.</p>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 596
    public function macro_render_form_submitted_data($data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_submitted_data"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_submitted_data"));

            // line 597
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 597), "norm", [], "any", true, true, false, 597)) {
                // line 598
                yield "        <table>
            <thead>
            <tr>
                <th class=\"sf-profiler-form-col-property\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 609
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 609), "view", [], "any", true, true, false, 609)) {
                    // line 610
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 610, $this->source); })()), "submitted_data", [], "any", false, false, false, 610), "seek", ["view"], "method", false, false, false, 610));
                    yield "
                    ";
                } else {
                    // line 612
                    yield "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 614
                yield "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 618
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 618, $this->source); })()), "submitted_data", [], "any", false, false, false, 618), "seek", ["norm"], "method", false, false, false, 618));
                yield "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 623
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 623), "model", [], "any", true, true, false, 623)) {
                    // line 624
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 624, $this->source); })()), "submitted_data", [], "any", false, false, false, 624), "seek", ["model"], "method", false, false, false, 624));
                    yield "
                    ";
                } else {
                    // line 626
                    yield "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 628
                yield "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 633
                yield "        <div class=\"empty\">
            <p>This form was not submitted.</p>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 639
    public function macro_render_form_passed_options($data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_passed_options"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_passed_options"));

            // line 640
            yield "    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, false, 640) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 640, $this->source); })()), "passed_options", [], "any", false, false, false, 640)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 640, $this->source); })()), "passed_options", [], "any", false, false, false, 640)) : ([])))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 641
                yield "        <table>
            <thead>
            <tr>
                <th class=\"sf-profiler-form-col-property\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 650
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 650, $this->source); })()), "passed_options", [], "any", false, false, false, 650));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 651
                    yield "                <tr>
                    <th>";
                    // line 652
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                    yield "</th>
                    <td>";
                    // line 653
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                    yield "</td>
                    <td>
                        ";
                    // line 656
                    yield "                        ";
                    $context["option_value"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "value", [], "any", true, true, false, 656)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 656)) : ($context["value"]));
                    // line 657
                    yield "                        ";
                    $context["resolved_option_value"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, false, 657), $context["option"], [], "array", false, true, false, 657), "value", [], "any", true, true, false, 657)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 658
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 658, $this->source); })()), "resolved_options", [], "any", false, false, false, 658), $context["option"], [], "array", false, false, false, 658), "value", [], "any", false, false, false, 658)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 659
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 659, $this->source); })()), "resolved_options", [], "any", false, false, false, 659), $context["option"], [], "array", false, false, false, 659)));
                    // line 660
                    yield "                        ";
                    if (((isset($context["resolved_option_value"]) || array_key_exists("resolved_option_value", $context) ? $context["resolved_option_value"] : (function () { throw new RuntimeError('Variable "resolved_option_value" does not exist.', 660, $this->source); })()) == (isset($context["option_value"]) || array_key_exists("option_value", $context) ? $context["option_value"] : (function () { throw new RuntimeError('Variable "option_value" does not exist.', 660, $this->source); })()))) {
                        // line 661
                        yield "                            <em class=\"font-normal text-muted\">same as passed value</em>
                        ";
                    } else {
                        // line 663
                        yield "                            ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 663, $this->source); })()), "resolved_options", [], "any", false, false, false, 663), "seek", [$context["option"]], "method", false, false, false, 663));
                        yield "
                        ";
                    }
                    // line 665
                    yield "                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['option'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 668
                yield "            </tbody>
        </table>
    ";
            } else {
                // line 671
                yield "        <div class=\"empty\">
            <p>No options were passed when constructing this form.</p>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 677
    public function macro_render_form_resolved_options($data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_resolved_options"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_resolved_options"));

            // line 678
            yield "    <table>
        <thead>
        <tr>
            <th class=\"sf-profiler-form-col-property\">Option</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 686
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, false, 686) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 686, $this->source); })()), "resolved_options", [], "any", false, false, false, 686)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 686, $this->source); })()), "resolved_options", [], "any", false, false, false, 686)) : ([])));
            foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                // line 687
                yield "            <tr>
                <th scope=\"row\">";
                // line 688
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "</th>
                <td>";
                // line 689
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['option'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 692
            yield "        </tbody>
    </table>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 696
    public function macro_render_form_view_variables($data = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "data" => $data,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_view_variables"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_view_variables"));

            // line 697
            yield "    <table>
        <thead>
        <tr>
            <th class=\"sf-profiler-form-col-property\">Variable</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 705
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, false, 705) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 705, $this->source); })()), "view_vars", [], "any", false, false, false, 705)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 705, $this->source); })()), "view_vars", [], "any", false, false, false, 705)) : ([])));
            foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                // line 706
                yield "            <tr>
                <th scope=\"row\">";
                // line 707
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["variable"], "html", null, true);
                yield "</th>
                <td>";
                // line 708
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['variable'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 711
            yield "        </tbody>
    </table>
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
        return "@WebProfiler/Collector/form.html.twig";
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
        return array (  1484 => 711,  1475 => 708,  1471 => 707,  1468 => 706,  1464 => 705,  1454 => 697,  1436 => 696,  1422 => 692,  1413 => 689,  1409 => 688,  1406 => 687,  1402 => 686,  1392 => 678,  1374 => 677,  1358 => 671,  1353 => 668,  1345 => 665,  1339 => 663,  1335 => 661,  1332 => 660,  1330 => 659,  1329 => 658,  1327 => 657,  1324 => 656,  1319 => 653,  1315 => 652,  1312 => 651,  1308 => 650,  1297 => 641,  1294 => 640,  1276 => 639,  1260 => 633,  1253 => 628,  1249 => 626,  1243 => 624,  1241 => 623,  1233 => 618,  1227 => 614,  1223 => 612,  1217 => 610,  1215 => 609,  1202 => 598,  1199 => 597,  1181 => 596,  1165 => 590,  1158 => 585,  1154 => 583,  1148 => 581,  1146 => 580,  1138 => 575,  1132 => 571,  1128 => 569,  1122 => 567,  1120 => 566,  1107 => 555,  1104 => 554,  1086 => 553,  1070 => 547,  1064 => 543,  1056 => 540,  1052 => 538,  1049 => 537,  1040 => 535,  1036 => 534,  1033 => 533,  1031 => 532,  1027 => 530,  1021 => 528,  1017 => 526,  1015 => 525,  1012 => 524,  1010 => 523,  1005 => 521,  1002 => 520,  998 => 519,  986 => 510,  983 => 509,  980 => 508,  962 => 507,  943 => 503,  939 => 502,  930 => 496,  923 => 492,  916 => 488,  909 => 484,  902 => 480,  895 => 476,  888 => 472,  881 => 468,  874 => 464,  867 => 460,  860 => 456,  853 => 452,  850 => 451,  848 => 450,  845 => 449,  839 => 446,  835 => 444,  833 => 443,  829 => 442,  816 => 441,  795 => 440,  782 => 437,  778 => 435,  769 => 433,  765 => 432,  756 => 431,  754 => 430,  747 => 426,  741 => 425,  738 => 424,  734 => 422,  728 => 419,  723 => 418,  721 => 417,  718 => 416,  712 => 414,  710 => 413,  704 => 412,  701 => 411,  698 => 410,  678 => 409,  663 => 403,  658 => 400,  641 => 398,  624 => 397,  618 => 393,  609 => 391,  605 => 390,  600 => 387,  598 => 386,  594 => 384,  581 => 383,  390 => 203,  377 => 202,  205 => 41,  192 => 40,  180 => 37,  174 => 34,  171 => 33,  169 => 32,  164 => 30,  157 => 29,  144 => 28,  130 => 24,  127 => 23,  118 => 20,  111 => 16,  107 => 14,  105 => 13,  102 => 12,  95 => 9,  89 => 7,  86 => 6,  83 => 5,  80 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27@WebProfiler/Profiler/layout.html.twig\x27 %}

{% block toolbar %}
    {% if collector.data.nb_errors > 0 or collector.data.forms|length %}
        {% set status_color = collector.data.nb_errors ? \x27red\x27 %}
        {% set icon %}
            {{ source(\x27@WebProfiler/Icon/form.svg\x27) }}
            <span class=\"sf-toolbar-value\">
                {{ collector.data.nb_errors ?: collector.data.forms|length }}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">{{ collector.data.forms|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.data.nb_errors > 0 ? \x27red\x27 }}\">{{ collector.data.nb_errors }}</span>
            </div>
        {% endset %}

        {{ include(\x27@WebProfiler/Profiler/toolbar_item.html.twig\x27, {link: profiler_url, status: status_color}) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.data.nb_errors ? \x27error\x27 }} {{ collector.data.forms is empty ? \x27disabled\x27 }}\">
        <span class=\"icon\" aria-hidden=\"true\">{{ source(\x27@WebProfiler/Icon/form.svg\x27) }}</span>
        <strong>Forms</strong>
        {% if collector.data.nb_errors > 0 %}
            <span class=\"count\">
                <span>{{ collector.data.nb_errors }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .form-type-class {
            font-size: var(--font-size-body);
            display: flex;
            margin: 0 0 15px;
        }
        .form-type-class-label {
            margin-right: 4px;
        }
        .form-type-class pre.sf-dump {
            font-family: var(--font-family-system) !important;
            font-size: var(--font-size-body) !important;
            margin-left: 5px;
        }
        .form-type-class .sf-dump .sf-dump-str {
            color: var(--color-link) !important;
            text-decoration: underline;
        }
        .form-type-class .sf-dump .sf-dump-str:hover {
            text-decoration: none;
        }

        .sf-profiler-form-col-property { width: 180px; }

        .tree-wrapper { display: flex; gap: 0; }

        #tree-menu {
            padding-right: 10px;
            width: 220px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            box-shadow: none !important;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid var(--table-border-color);
            padding-left: 20px;
            flex: 1;
            min-width: 0;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
        }
        .closed .toggle-icon, .closed.toggle-icon {
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;
            overflow: hidden;
            text-overflow: ellipsis;
            display: flex;
            align-items: center;
        }
        .tree .toggle-button {
            width: 16px;
            height: 16px;
            margin-left: -18px;
            display: inline-grid;
            place-content: center;
            background: none;
            border: none;
            transition: transform 200ms;
        }
        .tree .toggle-button.closed svg {
            transform: rotate(-90deg);
        }
        .tree .toggle-button svg {
            transform: rotate(0deg);
            width: 16px;
            height: 16px;
        }
        .tree .toggle-icon.empty {
            width: 5px;
            height: 5px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            margin-left: -13px;
        }
        .tree .tree-inner {
            border-radius: 4px;
        }
        .tree ul ul .tree-inner {
            padding-left: 32px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 48px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 64px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 72px;
        }
        .tree .tree-inner:hover {
            background: var(--gray-200);
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: var(--tree-active-background);
            font-weight: bold;
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            background: var(--background-error);
            color: var(--base-0, #FFF);
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: var(--color-error);
        }
        .errors h3 {
            color: var(--color-error);
        }
        .errors th {
            background: var(--background-error);
            color: var(--base-0, #FFF);
        }
        .errors .toggle-icon {
            background-color: var(--background-error);
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        window.addEventListener(\x27DOMContentLoaded\x27, () => {
            new SymfonyProfilerFormPanel();
        });

        class SymfonyProfilerFormPanel {
            #activeTreeItem;
            #activeTreePanel;
            #storage;
            #storageKey = \x27sf_toggle_data\x27;
            #togglerStates = {};

            constructor() {
                this.#storage = sessionStorage;
                this.#initTrees();
                this.#initTogglerButtons();
            }

            #initTrees() {
                const treeItems = document.querySelectorAll(\x27.tree .tree-inner\x27);
                treeItems.forEach((treeItem) => {
                    const targetId = treeItem.getAttribute(\x27data-tab-target-id\x27);
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Tab target \${targetId} does not exist`;
                    }

                    treeItem.addEventListener(\x27click\x27, (e) => {
                        this.#selectTreeItem(treeItem);

                        e.stopPropagation();
                        return false;
                    });

                    target.classList.add(\x27hidden\x27);
                });

                if (treeItems.length > 0) {
                    this.#selectTreeItem(treeItems[0]);
                }
            };

            #selectTreeItem(treeItem) {
                const treePanelId = treeItem.getAttribute(\x27data-tab-target-id\x27);
                const treePanel = document.getElementById(treePanelId);

                if (!treePanel) {
                    throw `The tree panel \${treePanelId} does not exist`;
                }

                if (this.#activeTreeItem) {
                    this.#activeTreeItem.classList.remove(\x27active\x27);
                }

                if (this.#activeTreePanel) {
                    this.#activeTreePanel.classList.add(\x27hidden\x27);
                }

                treeItem.classList.add(\x27active\x27);
                treePanel.classList.remove(\x27hidden\x27);

                this.#activeTreeItem = treeItem;
                this.#activeTreePanel = treePanel;
            }

            #initTogglerButtons() {
                this.#togglerStates = this.#getTogglerStates();
                if (!this.#isObject(this.#togglerStates)) {
                    this.#togglerStates = {};
                }

                const buttons = document.querySelectorAll(\x27.toggle-button\x27);
                buttons.forEach((button) => {
                    const targetId = button.getAttribute(\x27data-toggle-target-id\x27);
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Toggle target \${targetId} does not exist`;
                    }

                    // correct the initial state of the button
                    if (target.classList.contains(\x27hidden\x27)) {
                        button.classList.add(\x27closed\x27);
                    }

                    button.addEventListener(\x27click\x27, (e) => {
                        this.#toggleToggler(button);

                        e.stopPropagation();
                        return false;
                    });

                    if (this.#togglerStates.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === this.#togglerStates[targetId]) {
                            this.#collapseToggler(button);
                        } else {
                            this.#expandToggler(button);
                        }
                    }
                });
            };

            #isTogglerCollapsed(button) {
                return button.classList.contains(\x27closed\x27);
            }

            #isTogglerExpanded(button) {
                return !this.#isTogglerCollapsed(button);
            }

            #expandToggler(button) {
                const targetId = button.getAttribute(\x27data-toggle-target-id\x27);
                const target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (this.#isTogglerCollapsed(button)) {
                    button.classList.remove(\x27closed\x27);
                    target.classList.remove(\x27hidden\x27);

                    this.#togglerStates[targetId] = 1;
                    this.#saveTogglerStates();
                }
            }

            #collapseToggler(button) {
                const targetId = button.getAttribute(\x27data-toggle-target-id\x27);
                const target = document.getElementById(targetId);

                if (!target) {
                    throw `Toggle target \${targetId} does not exist`;
                }

                if (this.#isTogglerExpanded(button)) {
                    button.classList.add(\x27closed\x27);
                    target.classList.add(\x27hidden\x27);

                    this.#togglerStates[targetId] = 0;
                    this.#saveTogglerStates();
                }
            }

            #toggleToggler(button) {
                if (button.classList.contains(\x27closed\x27)) {
                    this.#expandToggler(button);
                } else {
                    this.#collapseToggler(button);
                }
            }

            #saveTogglerStates() {
                this.#storage.setItem(this.#storageKey, JSON.stringify(this.#togglerStates));
            }

            #getTogglerStates() {
                const data = this.#storage.getItem(this.#storageKey);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return {};
            }

            #isObject(variable) {
                return null !== variable && \x27object\x27 === typeof variable && !Array.isArray(variable);
            }
        }
    </script>
{% endblock %}

{% block panel %}
    <h2>Forms</h2>

    {% if collector.data.forms|length %}
        <div class=\"tree-wrapper\">
            <div id=\"tree-menu\" class=\"tree\">
                <ul>
                {% for formName, formData in collector.data.forms %}
                    {{ _self.form_tree_entry(formName, formData, true) }}
                {% endfor %}
                </ul>
            </div>

            <div id=\"tree-details-container\">
                {% for formName, formData in collector.data.forms %}
                    {{ _self.form_tree_details(formName, formData, collector.data.forms_by_hash, loop.first) }}
                {% endfor %}
            </div>
        </div>
    {% else %}
        <div class=\"empty empty-panel\">
            <p>No forms were submitted.</p>
        </div>
    {% endif %}
{% endblock %}

{% macro form_tree_entry(name, data, is_root) %}
    {% set has_error = data.errors is defined and data.errors|length > 0 %}
    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"{{ data.id }}-details\" title=\"{{ name|default(\x27(no name)\x27) }}\">
            {% if has_error %}
                <div class=\"badge-error\">{{ data.errors|length }}</div>
            {% endif %}

            {% if data.children is not empty %}
                <button class=\"toggle-button\" data-toggle-target-id=\"{{ data.id }}-children\">
                    {{ source(\x27@WebProfiler/Icon/chevron-down.svg\x27) }}
                </button>
            {% else %}
                <div class=\"toggle-icon empty\"></div>
            {% endif %}

            <span {% if has_error or data.has_children_error|default(false) %}class=\"has-error\"{% endif %}>
                {{ name|default(\x27(no name)\x27) }}
            </span>
        </div>

        {% if data.children is not empty %}
            <ul id=\"{{ data.id }}-children\" {% if not is_root and not data.has_children_error|default(false) %}class=\"hidden\"{% endif %}>
                {% for childName, childData in data.children %}
                    {{ _self.form_tree_entry(childName, childData, false) }}
                {% endfor %}
            </ul>
        {% endif %}
    </li>
{% endmacro %}

{% macro form_tree_details(name, data, forms_by_hash, show) %}
    <div class=\"tree-details{% if not show|default(false) %} hidden{% endif %}\" {% if data.id is defined %}id=\"{{ data.id }}-details\"{% endif %}>
        <h2>{{ name|default(\x27(no name)\x27) }}</h2>
        {% if data.type_class is defined %}
            <div class=\"form-type-class\">
                <span class=\"form-type-class-label\">Form type:</span>
                {{ profiler_dump(data.type_class) }}
            </div>
        {% endif %}

        {% set form_has_errors = data.errors ?? [] is not empty %}
        <div class=\"sf-tabs\">
            <div class=\"tab {{ form_has_errors ? \x27active\x27 : \x27disabled\x27 }}\">
                <h3 class=\"tab-title\">Errors</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_errors(data) }}
                </div>
            </div>

            <div class=\"tab {{ not form_has_errors ? \x27active\x27 }}\">
                <h3 class=\"tab-title\">Default Data</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_default_data(data) }}
                </div>
            </div>

            <div class=\"tab {{ (data.submitted_data ?? []) is empty ? \x27disabled\x27 }}\">
                <h3 class=\"tab-title\">Submitted Data</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_submitted_data(data) }}
                </div>
            </div>

            <div class=\"tab {{ (data.passed_options ?? []) is empty ? \x27disabled\x27 }}\">
                <h3 class=\"tab-title\">Passed Options</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_passed_options(data) }}
                </div>
            </div>

            <div class=\"tab {{ (data.resolved_options ?? []) is empty ? \x27disabled\x27 }}\">
                <h3 class=\"tab-title\">Resolved Options</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_resolved_options(data) }}
                </div>
            </div>

            <div class=\"tab {{ (data.view_vars ?? []) is empty ? \x27disabled\x27 }}\">
                <h3 class=\"tab-title\">View Vars</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_view_variables(data) }}
                </div>
            </div>
        </div>
    </div>

    {% for childName, childData in data.children %}
        {{ _self.form_tree_details(childName, childData, forms_by_hash) }}
    {% endfor %}
{% endmacro %}

{% macro render_form_errors(data) %}
    {% if data.errors is defined and data.errors|length > 0 %}
        <div class=\"errors\">
            <table id=\"{{ data.id }}-errors\">
                <thead>
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                </thead>
                <tbody>
                {% for error in data.errors %}
                    <tr>
                        <td>{{ error.message }}</td>
                        <td>
                            {% if error.origin is empty %}
                                <em>This form.</em>
                            {% elseif forms_by_hash[error.origin] is not defined %}
                                <em>Unknown.</em>
                            {% else %}
                                {{ forms_by_hash[error.origin].name }}
                            {% endif %}
                        </td>
                        <td>
                            {% if error.trace %}
                                <span class=\"newline\">Caused by:</span>
                                {% for stacked in error.trace %}
                                    {{ profiler_dump(stacked) }}
                                {% endfor %}
                            {% else %}
                                <em>Unknown.</em>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    {% else %}
        <div class=\"empty\">
            <p>This form has no errors.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_default_data(data) %}
    {% if data.default_data is defined %}
        <table>
            <thead>
            <tr>
                <th class=\"sf-profiler-form-col-property\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    {% if data.default_data.model is defined %}
                        {{ profiler_dump(data.default_data.seek(\x27model\x27)) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>{{ profiler_dump(data.default_data.seek(\x27norm\x27)) }}</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    {% if data.default_data.view is defined %}
                        {{ profiler_dump(data.default_data.seek(\x27view\x27)) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>No default data defined.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_submitted_data(data) %}
    {% if data.submitted_data.norm is defined %}
        <table>
            <thead>
            <tr>
                <th class=\"sf-profiler-form-col-property\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    {% if data.submitted_data.view is defined %}
                        {{ profiler_dump(data.submitted_data.seek(\x27view\x27)) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>{{ profiler_dump(data.submitted_data.seek(\x27norm\x27)) }}</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    {% if data.submitted_data.model is defined %}
                        {{ profiler_dump(data.submitted_data.seek(\x27model\x27)) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>This form was not submitted.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_passed_options(data) %}
    {% if data.passed_options ?? [] is not empty %}
        <table>
            <thead>
            <tr>
                <th class=\"sf-profiler-form-col-property\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            </thead>
            <tbody>
            {% for option, value in data.passed_options %}
                <tr>
                    <th>{{ option }}</th>
                    <td>{{ profiler_dump(value) }}</td>
                    <td>
                        {# values can be stubs #}
                        {% set option_value = (value.value is defined) ? value.value : value %}
                        {% set resolved_option_value = (data.resolved_options[option].value is defined)
                            ? data.resolved_options[option].value
                            : data.resolved_options[option] %}
                        {% if resolved_option_value == option_value %}
                            <em class=\"font-normal text-muted\">same as passed value</em>
                        {% else %}
                            {{ profiler_dump(data.resolved_options.seek(option)) }}
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>No options were passed when constructing this form.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_resolved_options(data) %}
    <table>
        <thead>
        <tr>
            <th class=\"sf-profiler-form-col-property\">Option</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        {% for option, value in data.resolved_options ?? [] %}
            <tr>
                <th scope=\"row\">{{ option }}</th>
                <td>{{ profiler_dump(value) }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro render_form_view_variables(data) %}
    <table>
        <thead>
        <tr>
            <th class=\"sf-profiler-form-col-property\">Variable</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        {% for variable, value in data.view_vars ?? [] %}
            <tr>
                <th scope=\"row\">{{ variable }}</th>
                <td>{{ profiler_dump(value) }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@WebProfiler/Collector/form.html.twig", "/home/antoine/projects/echo/echo-api/symfony/vendor/symfony/web-profiler-bundle/Resources/views/Collector/form.html.twig");
    }
}
