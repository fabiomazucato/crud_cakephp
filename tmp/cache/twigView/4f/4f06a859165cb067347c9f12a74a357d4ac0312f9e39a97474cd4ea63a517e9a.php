<?php

/* F:\www\aguaparatodos\vendor\cakephp\bake\src\Template\Bake\Element\Controller/add.twig */
class __TwigTemplate_15f3cc023c3b4f1a0d643c7c745e7ac6b53bdd2162c0ec7e01c9c002366d6742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 16
        $context["compact"] = array(0 => (("'" . (isset($context["singularName"]) ? $context["singularName"] : null)) . "'"));
        // line 17
        echo "
    /**
     * Add method
     *
     * @return \\Cake\\Http\\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        \$";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["singularName"]) ? $context["singularName"] : null), "html", null, true);
        echo " = \$this->";
        echo twig_escape_filter($this->env, (isset($context["currentModelName"]) ? $context["currentModelName"] : null), "html", null, true);
        echo "->newEntity();
        if (\$this->request->is('post')) {
            \$";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["singularName"]) ? $context["singularName"] : null), "html", null, true);
        echo " = \$this->";
        echo twig_escape_filter($this->env, (isset($context["currentModelName"]) ? $context["currentModelName"] : null), "html", null, true);
        echo "->patchEntity(\$";
        echo twig_escape_filter($this->env, (isset($context["singularName"]) ? $context["singularName"] : null), "html", null, true);
        echo ", \$this->request->getData());
            if (\$this->";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["currentModelName"]) ? $context["currentModelName"] : null), "html", null, true);
        echo "->save(\$";
        echo twig_escape_filter($this->env, (isset($context["singularName"]) ? $context["singularName"] : null), "html", null, true);
        echo ")) {
                \$this->Flash->success(__('The ";
        // line 29
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["singularHumanName"]) ? $context["singularHumanName"] : null)), "html", null, true);
        echo " has been saved.'));

                return \$this->redirect(['action' => 'index']);
            }
            \$this->Flash->error(__('The ";
        // line 33
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["singularHumanName"]) ? $context["singularHumanName"] : null)), "html", null, true);
        echo " could not be saved. Please, try again.'));
        }
";
        // line 35
        $context["associations"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "aliasExtractor", array(0 => (isset($context["modelObj"]) ? $context["modelObj"] : null), 1 => "BelongsTo"), "method");
        // line 36
        $context["associations"] = twig_array_merge((isset($context["associations"]) ? $context["associations"] : null), $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "aliasExtractor", array(0 => (isset($context["modelObj"]) ? $context["modelObj"] : null), 1 => "BelongsToMany"), "method"));
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associations"]) ? $context["associations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["assoc"]) {
            // line 39
            $context["otherName"] = $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "getAssociatedTableAlias", array(0 => (isset($context["modelObj"]) ? $context["modelObj"] : null), 1 => $context["assoc"]), "method");
            // line 40
            $context["otherPlural"] = Cake\Utility\Inflector::variable((isset($context["otherName"]) ? $context["otherName"] : null));
            // line 41
            echo "        \$";
            echo twig_escape_filter($this->env, (isset($context["otherPlural"]) ? $context["otherPlural"] : null), "html", null, true);
            echo " = \$this->";
            echo twig_escape_filter($this->env, (isset($context["currentModelName"]) ? $context["currentModelName"] : null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, (isset($context["otherName"]) ? $context["otherName"] : null), "html", null, true);
            echo "->find('list', ['limit' => 200]);";
            // line 42
            echo "
";
            // line 43
            $context["compact"] = twig_array_merge((isset($context["compact"]) ? $context["compact"] : null), array(0 => (("'" . (isset($context["otherPlural"]) ? $context["otherPlural"] : null)) . "'")));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        \$this->set(compact(";
        echo twig_join_filter((isset($context["compact"]) ? $context["compact"] : null), ", ");
        echo "));
    }
";
    }

    public function getTemplateName()
    {
        return "F:\\www\\aguaparatodos\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Element\\Controller/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 45,  87 => 43,  84 => 42,  76 => 41,  74 => 40,  72 => 39,  68 => 38,  66 => 36,  64 => 35,  59 => 33,  52 => 29,  46 => 28,  38 => 27,  31 => 25,  21 => 17,  19 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{% set compact = [\"'#{singularName}'\"] %}

    /**
     * Add method
     *
     * @return \\Cake\\Http\\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        \${{ singularName }} = \$this->{{ currentModelName }}->newEntity();
        if (\$this->request->is('post')) {
            \${{ singularName }} = \$this->{{ currentModelName }}->patchEntity(\${{ singularName }}, \$this->request->getData());
            if (\$this->{{ currentModelName }}->save(\${{ singularName }})) {
                \$this->Flash->success(__('The {{ singularHumanName|lower }} has been saved.'));

                return \$this->redirect(['action' => 'index']);
            }
            \$this->Flash->error(__('The {{ singularHumanName|lower }} could not be saved. Please, try again.'));
        }
{% set associations = Bake.aliasExtractor(modelObj, 'BelongsTo') %}
{% set associations = associations|merge(Bake.aliasExtractor(modelObj, 'BelongsToMany')) %}

{%- for assoc in associations %}
    {%- set otherName = Bake.getAssociatedTableAlias(modelObj, assoc) %}
    {%- set otherPlural = otherName|variable %}
        \${{ otherPlural }} = \$this->{{ currentModelName }}->{{ otherName }}->find('list', ['limit' => 200]);
        {{- \"\\n\" }}
    {%- set compact = compact|merge([\"'#{otherPlural}'\"]) %}
{% endfor %}
        \$this->set(compact({{ compact|join(', ')|raw }}));
    }
", "F:\\www\\aguaparatodos\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Element\\Controller/add.twig", "F:\\www\\aguaparatodos\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Element\\Controller/add.twig");
    }
}
