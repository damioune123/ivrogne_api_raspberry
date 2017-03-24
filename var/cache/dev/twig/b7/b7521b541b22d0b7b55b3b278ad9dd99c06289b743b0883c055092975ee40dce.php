<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_17989b8e3ed0b3381f7e9782161a47ea083b3880dce3f4abee2baf77d343278b extends Twig_Template
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
        $__internal_7065d339b0c9d9772cdf59fe3fa77cbdc74c4b4f3feb6c6509d6bed0083e424a = $this->env->getExtension("native_profiler");
        $__internal_7065d339b0c9d9772cdf59fe3fa77cbdc74c4b4f3feb6c6509d6bed0083e424a->enter($__internal_7065d339b0c9d9772cdf59fe3fa77cbdc74c4b4f3feb6c6509d6bed0083e424a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7065d339b0c9d9772cdf59fe3fa77cbdc74c4b4f3feb6c6509d6bed0083e424a->leave($__internal_7065d339b0c9d9772cdf59fe3fa77cbdc74c4b4f3feb6c6509d6bed0083e424a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
