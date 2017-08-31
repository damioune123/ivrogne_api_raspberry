<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c2b0008093dd76ffeff1f915062a303983f5e59fa6933ac5dbefe97006071797 extends Twig_Template
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
        $__internal_af22f6306b0bd214a03ba5eae66ce45dd1bb2b6f50e2c1f4c5c5ddab9c09c9a7 = $this->env->getExtension("native_profiler");
        $__internal_af22f6306b0bd214a03ba5eae66ce45dd1bb2b6f50e2c1f4c5c5ddab9c09c9a7->enter($__internal_af22f6306b0bd214a03ba5eae66ce45dd1bb2b6f50e2c1f4c5c5ddab9c09c9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_af22f6306b0bd214a03ba5eae66ce45dd1bb2b6f50e2c1f4c5c5ddab9c09c9a7->leave($__internal_af22f6306b0bd214a03ba5eae66ce45dd1bb2b6f50e2c1f4c5c5ddab9c09c9a7_prof);

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
