<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_672023a29432e5dd868b41accd9cca72a5162e6cc65647f78e8ab194cb411f03 extends Twig_Template
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
        $__internal_89a5afdcccaa4c0b641c36b5d8923bcaa9e9285473d8e636739619c2c13019a9 = $this->env->getExtension("native_profiler");
        $__internal_89a5afdcccaa4c0b641c36b5d8923bcaa9e9285473d8e636739619c2c13019a9->enter($__internal_89a5afdcccaa4c0b641c36b5d8923bcaa9e9285473d8e636739619c2c13019a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_89a5afdcccaa4c0b641c36b5d8923bcaa9e9285473d8e636739619c2c13019a9->leave($__internal_89a5afdcccaa4c0b641c36b5d8923bcaa9e9285473d8e636739619c2c13019a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
